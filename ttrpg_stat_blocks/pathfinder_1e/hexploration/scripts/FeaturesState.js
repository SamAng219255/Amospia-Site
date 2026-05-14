import FeatureQuery from "./FeatureQuery.js";
import FeatureBag from "./FeatureBag.js";
import Feature from "./Feature.js";

class SiteStatus {
	#value;

	constructor(value) {
		this.#value = value;
	}

	get value() {
		return this.#value;
	}

	has(status) {
		return !!(this.value & (
			status instanceof SiteStatus
				? status.value
				: typeof status == "number"
					? status
					: (() => {
						try{return parseInt(status, 2)}
						catch {return 0}
					})()
		));
	}

	applyTo(statusValue) {
		return this.value | statusValue;
	}

	applied(...statuses) {
		return new SiteStatus(statuses.reduce((accu, status) => status.applyTo(accu), this.value));
	}

	isComplete() {
		return this.has(FeaturesState.Status.COMPLETED) && ! this.has(FeaturesState.Status.WAITING);
	}
}

class SiteStatusMutable extends SiteStatus {
	#mutableValue;

	constructor(templateStatus) {
		super(null);
		this.#mutableValue = templateStatus instanceof SiteStatus
				? templateStatus.value
				: typeof templateStatus == "number"
					? templateStatus
					: (() => {try{return parseInt(status, 2)} catch {return 0}})();
	}

	get value() {
		return this.#mutableValue;
	}

	add(...statuses) {
		this.#mutableValue = statuses.reduce((value, status) => status.applyTo(value), this.value);
	}
}

class SiteStatusContinue extends SiteStatus {
	constructor(value) {
		super(value);
	}

	applyTo(statusValue) {
		if(this.has(statusValue))
			return this.value ^ statusValue;

		return statusValue;
	}
}

export default class FeaturesState {
	#waitingOnFeatures = {};
	#features = {};
	#featuresAbsent = new Set();

	#waitingOnTags = {};
	#tags = new Set();
	#tagsAbsent = new Set();

	#waitingOnBags = {};
	#bags = {};
	#bagsAbsent = new Set();

	#featuresRecord = {};
	#featureCounts={};
	#finished = false;
	#finishStarted = false;

	#sites = {};
	#sitesBy = {
		features: {},
		tags: {},
		bags: {},
		uniqueIDs: {},
	};

	#endPromise;
	#ended = false;
	#endTimeouts = [];

	// Mark a terrain feature as generated or not
	async resolve(feature, generated = true) {
		if(generated) {
			if(!this.#featureCounts[feature.id]) this.#featureCounts[feature.id] = 0;
			this.#featureCounts[feature.id] += await feature.count.execute(this, feature.uniqueID);
			if(this.#featureCounts[feature.id] < 1) return;

			this.#features[feature.id] = feature;
		}

		this.eventRecord.push({
			method: "resolve",
			id: feature.id,
			generated,
		});

		if(this.#waitingOnFeatures[feature.id]) {
			this.#waitingOnFeatures[feature.id].forEach(({resolve, uniqueID}) => {this.announce(uniqueID, FeaturesState.Status.CONTINUE); resolve(generated);});
			delete this.#waitingOnFeatures[feature.id];
		}

		if(generated) {
			for(let tag of feature.tags) {
				this.#tags.add(tag);

				if(this.#waitingOnTags[tag]) {
					this.#waitingOnTags[tag].forEach(({resolve, uniqueID}) => {this.announce(uniqueID, FeaturesState.Status.CONTINUE); resolve(generated);});
					delete this.#waitingOnTags[tag];
				}
			}

			if(feature.bag) {
				let bagId = feature.bag;
				if(feature.bag instanceof FeatureBag) bagId = feature.bag.id;

				if(this.#bags[bagId]) this.#bags[bagId].push(feature);
				else this.#bags[bagId] = [feature];

				if(this.#waitingOnBags[bagId]) {
					this.#waitingOnBags[bagId].forEach(({resolve, uniqueID}) => {this.announce(uniqueID, FeaturesState.Status.CONTINUE); resolve(generated);});
					delete this.#waitingOnBags[bagId];
				}
			}
		}

		this.announce(feature.uniqueID, FeaturesState.Status.EXECUTED);
		this.#featuresRecord[feature.id] = "resolved";
	}

	// Find if a feature has been generated
	async getStatus(featureAwaitedId, featureWaitingId = null, uniqueID = null) {
		if(this.#features[featureAwaitedId])
			return true;
		if(this.#finished || this.#featuresAbsent.has(featureAwaitedId)) return false;
		
		if(uniqueID) {
			this.eventRecord.push({
				method: "waiting",
				id: uniqueID,
				waitingFor: featureAwaitedId,
				waitingForType: "feature",
			});
			this.announce(uniqueID, FeaturesState.Status.WAITING);
		}

		const state = this;
		const promise = new Promise((resolve, reject) => state.addWaitingForFeature(featureAwaitedId, {resolve, reject, uniqueID}, featureWaitingId, uniqueID));
		return promise;

	}
	addWaitingForFeature(featureAwaitedId, resrej, featureWaitingId = null) {
		if(featureWaitingId) this.#featuresRecord[featureWaitingId] = "waiting";
		if(this.#featuresRecord[featureAwaitedId] != "waiting") this.#featuresRecord[featureAwaitedId] = "awaited";

		if(this.#waitingOnFeatures[featureAwaitedId])
			this.#waitingOnFeatures[featureAwaitedId].push(resrej);
		else
			this.#waitingOnFeatures[featureAwaitedId] = [resrej];
	}

	// Find if any feature with tag has been generated
	async getTag(tag, featureWaitingId = null, uniqueID = null) {
		if(this.#tags.has(tag))
			return true;
		if(this.#finished || this.#tagsAbsent.has(tag)) return false;
		
		if(uniqueID) {
			this.eventRecord.push({
				method: "waiting",
				id: uniqueID,
				waitingFor: tag,
				waitingForType: "tag",
			});
			this.announce(uniqueID, FeaturesState.Status.WAITING);
		}

		const state = this;
		const promise = new Promise((resolve, reject) => state.addWaitingForTag(tag, {resolve, reject, uniqueID}, featureWaitingId, uniqueID));
		return promise;

	}
	addWaitingForTag(tag, resrej, featureWaitingId = null) {
		if(featureWaitingId) this.#featuresRecord[featureWaitingId] = "waiting";

		if(this.#waitingOnTags[tag])
			this.#waitingOnTags[tag].push(resrej);
		else
			this.#waitingOnTags[tag] = [resrej];
	}

	async getBag(bag, featureWaitingId = null, uniqueID = null) {
		let bagId = bag.toString();
		if(bag instanceof FeatureBag) bagId = bag.id;

		if(this.#bags[bagId])
			return true;
		if(this.#finished || this.#bagsAbsent.has(bagId)) return false;
		
		if(uniqueID) {
			this.eventRecord.push({
				method: "waiting",
				id: uniqueID,
				waitingFor: bagId,
				waitingForType: "bag",
			});
			this.announce(uniqueID, FeaturesState.Status.WAITING);
		}

		const state = this;
		const promise = new Promise((resolve, reject) => state.addWaitingForBag(bagId, {resolve, reject, uniqueID}, featureWaitingId, uniqueID));
		return promise;
	}
	addWaitingForBag(bagId, resrej, featureWaitingId = null) {
		if(featureWaitingId) this.#featuresRecord[featureWaitingId] = "waiting";

		if(this.#waitingOnBags[bagId])
			this.#waitingOnBags[bagId].push(resrej);
		else
			this.#waitingOnBags[bagId] = [resrej];
	}

	// Resolve all unresolved promises to close missing cases and collapse recursive loops.
	// Ran at the end of the generation process.
	async finish() {
		if(this.#finishStarted) return;
		this.#finishStarted = true;
		this.#endTimeouts.forEach(endTimeout => clearTimeout(endTimeout));
		/*for(let [featureId, status] in Object.entries(this.#featuresRecord)) {
			if(status == "awaited") {
				this.resolve(featureId, false);
				changed = true;
			}
		}*/
		let nextAwaited;
		let nextAwaiting;
		let resolveFound;
		do {
			resolveFound = false;
			while(([nextAwaited, nextAwaiting] = Object.entries(this.#waitingOnFeatures)[0] || []) && nextAwaited) {
				resolveFound = true;
				nextAwaiting.forEach(({resolve, uniqueID}) => {this.announce(uniqueID, FeaturesState.Status.CONTINUE); resolve(false);});
				delete this.#waitingOnFeatures[nextAwaited];
			}
			while(([nextAwaited, nextAwaiting] = Object.entries(this.#waitingOnTags)[0] || []) && nextAwaited) {
				resolveFound = true;
				nextAwaiting.forEach(({resolve, uniqueID}) => {this.announce(uniqueID, FeaturesState.Status.CONTINUE); resolve(false);});
				delete this.#waitingOnTags[nextAwaited];
			}
			while(([nextAwaited, nextAwaiting] = Object.entries(this.#waitingOnBags)[0] || []) && nextAwaited) {
				resolveFound = true;
				nextAwaiting.forEach(({resolve, uniqueID}) => {this.announce(uniqueID, FeaturesState.Status.CONTINUE); resolve(false);});
				delete this.#waitingOnBags[nextAwaited];
			}
		} while(resolveFound);
		this.#finished = true;
		this.#endPromise.resolved = true;
		this.#endPromise.resolve(this);
	}

	getAllByBag(bag) {
		let bagId = bag.toString();
		if(bag instanceof FeatureBag) bagId = bag.id;

		if(this.#bags[bagId]) return this.#bags[bagId];
		else return [];
	}
	get results() {
		return Object.fromEntries(Object.entries(this.#bags).map(([bagId, bagArr]) => [bagId, bagArr.slice()]));
	}

	toString() {
		return Object.entries(this.#features).map(([id, feature]) => feature.toString({
			count: this.#featureCounts[id],
		})).join("\n");
	}

	preloadSelf(uniqueID, is, id) {
		this.#sites[uniqueID] = {
			status: new SiteStatusMutable(FeaturesState.Status.PRELOADED),
			is,
			id,
			contents: [],
		};
	}

	preloadContents(uniqueID, contains, ids) {
		this.#sites[uniqueID].contents.push({contains, ids});
		ids.forEach(id => {
			if(!this.#sitesBy[contains][id]) this.#sitesBy[contains][id] = [];
			this.#sitesBy[contains][id].push(uniqueID);
		});
	}

	preloadSingleUID(uniqueID, id) {
		this.#sites[uniqueID].content = id;
	}

	static Status = {
		PRELOADED: new SiteStatus(0b0000),
		EXECUTING: new SiteStatus(0b0001),
		WAITING:   new SiteStatus(0b0010),
		CONTINUE:  new SiteStatusContinue(0b0010),
		EXECUTED:  new SiteStatus(0b0100),
		COMPLETED: new SiteStatus(0b1000),
		STOPPED:   new SiteStatus(0b1010),
	}

	announce(uniqueID, status, propagate = {up: true, down: true}, isPropagation = false) {
		try {
			if(this.#sites[uniqueID].status.isComplete()) return;

			this.#sites[uniqueID].status.add(status);
			if(!this.eventRecord) this.eventRecord = [];
			this.eventRecord.push({
				method: "announce",
				uniqueID,
				statusChange: status instanceof SiteStatusContinue ? "CONTINUE" : status.value,
				newStatus: this.#sites[uniqueID].status.value,
				isPropagation,
			});
			const uniqueIdsContents = this.#sites[uniqueID].contents.find(({contains}) => contains == "uniqueIDs");
			if(this.#sites[uniqueID].status.isComplete()) {
				if(
					this.#sites[uniqueID].is === "bag" 
					&& !this.#bags[this.#sites[uniqueID].id] 
					&& this.#sitesBy.bags[this.#sites[uniqueID].id]
						.map(site => this.#sites[site].status.isComplete())
						.reduce((accu, val) => val ? accu : accu + 1, 0)
						<= 1
				) {
					this.#bagsAbsent.add(this.#sites[uniqueID].id);
					this.#waitingOnBags[this.#sites[uniqueID].id]?.forEach(({resolve, uniqueID}) => {this.announce(uniqueID, FeaturesState.Status.CONTINUE); resolve(false);});
					delete this.#waitingOnBags[this.#sites[uniqueID].id];
				}

				this.#sites[uniqueID].contents.forEach(({contains, ids}) => ids
					.filter(itemId => {
						switch(contains) {
							case "features":
								return !this.#features[itemId];
								break;
							case "tags":
								return !this.#tags.has(itemId);
								break;
							case "bags":
								return !this.#bags[itemId];
								break;
							case "uniqueIDs":
								return propagate.down && !this.#sites[itemId].status.isComplete();
								break;
							default:
								return false;
								break;
						}
					})
					.filter(itemId => this.#sitesBy[contains][itemId].every(site => this.#sites[site].status.isComplete()))
					.forEach(itemId => {
						switch(contains) {
							case "features":
								this.#featuresAbsent.add(itemId);
								this.#waitingOnFeatures[itemId]?.forEach(({resolve, uniqueID}) => {this.announce(uniqueID, FeaturesState.Status.CONTINUE); resolve(false);});
								delete this.#waitingOnFeatures[itemId];
								break;
							case "tags":
								this.#tagsAbsent.add(itemId);
								this.#waitingOnTags[itemId]?.forEach(({resolve, uniqueID}) => {this.announce(uniqueID, FeaturesState.Status.CONTINUE); resolve(false);});
								delete this.#waitingOnTags[itemId];
								break;
							case "bags":
								this.#bagsAbsent.add(itemId);
								this.#waitingOnBags[itemId]?.forEach(({resolve, uniqueID}) => {this.announce(uniqueID, FeaturesState.Status.CONTINUE); resolve(false);});
								delete this.#waitingOnBags[itemId];
								break;
							case "uniqueIDs":
								this.announce(itemId, FeaturesState.Status.COMPLETED, {up: false}, true);
								break;
							default:
								break;
						}
					})
				);

				if(propagate.down && this.#sites[uniqueID].content) this.announce(this.#sites[uniqueID].content, FeaturesState.Status.COMPLETED, {up: false}, true);

				this.checkEnd(false, uniqueID);
			}
			else if(status.has(FeaturesState.Status.WAITING)) {
				if(propagate.up && uniqueIdsContents) this.#sitesBy.uniqueIDs[uniqueID].forEach(parentUID => {
					if(status instanceof SiteStatusContinue) {
						if(this.#sites[parentUID].contents
							.filter(({contains}) => contains == "uniqueIDs")
							.every(({ids}) => ids
								.every(id => !this.#sites[id].status.has(FeaturesState.Status.WAITING))
							)
						) 
							this.announce(parentUID, status, {down: false}, true);
					}
					else 
						this.announce(parentUID, status, {down: false}, true);
				});
				if(propagate.down && uniqueIdsContents)
					uniqueIdsContents.ids
						.filter(uniqueID => !this.#sites[uniqueID].status.isComplete())
						.forEach(uniqueID => this.announce(uniqueID, status, {up: false}), true);

				if(!(status instanceof SiteStatusContinue)) this.checkEnd(true);
			}
		}
		catch(err) {
			console.error(err);
		}
	}

	endTimeout(time) {
		this.#endTimeouts.push(setTimeout(() => this.endNow(), time * 1000));
		//console.log(`Ending in ${time} seconds.`);
	}

	endNow() {
		console.log("Forced Exit");
		console.log(Object.values(this.#sites).filter(({status}) => !status.has(FeaturesState.Status.STOPPED) && status.has(FeaturesState.Status.EXECUTING)).map(({status, contents}) => ({value: status.value, contents: contents})));
		console.log(Object.values(this.#sites).filter(({status}) => !status.has(FeaturesState.Status.STOPPED)).map(({status, contents}) => ({value: status.value, contents: contents})));
		console.log(Object.values(this.#sites).filter(({status}) => status.has(FeaturesState.Status.WAITING)).map(({status, contents}) => ({value: status.value, contents: contents})));
		this.#ended = true;
		this.showEvents();
		this.checkEnd();
	}

	showEvents() {
		const readableEvents = this.eventRecord.map(data => {
			let ret = {method: data.method};
			switch(data.method) {
				case "announce":
					ret = {
						...ret,
						id: this.#sites[data.uniqueID].id,
						statusChange: typeof data.statusChange == "number" ? getStatusName(data.statusChange) : data.statusChange,
						newStatus: getStatusName(data.newStatus),
						isImportant: !data.isPropagation,
					};
					break;
				case "resolve":
					ret = {
						...ret,
						id: data.id,
						generated: data.generated,
						isImportant: data.generated,
					};
					break;
				case "waiting":
					ret = {
						...ret,
						id: this.#sites[data.id].id,
						waitingFor: data.waitingFor,
						waitingForType: data.waitingForType,
						isImportant: true,
					};
					break;
				default:
					ret = {
						...ret,
						isImportant: true,
						...data,
					};
					break;
			}
			return ret;
		});
		console.log("Event Log:", readableEvents);
		console.log("Event Log (Simplified):", readableEvents.filter(({isImportant}) => isImportant));
		console.log("Waiting: ", Object.values(this.#sites).filter(({status}) => status.has(FeaturesState.Status.WAITING)).map(({status, contents}) => ({value: status.value, contents: contents})));
	}

	checkEnd(fromWait = false, whoTriggered) {
		if(this.#finishStarted) return;
		if(!fromWait && (this.#ended || Object.values(this.#sites).every(site => site.status.isComplete() || !site.status.has(FeaturesState.Status.EXECUTING)))) {
			this.#ended = true;
			if(this.#endPromise && !this.#endPromise.resolved) {
				//console.log("Proper Exit");
				this.finish();
			}
		}
		else if(Object.values(this.#sites).every(site => site.status.has(FeaturesState.Status.STOPPED) || !site.status.has(FeaturesState.Status.EXECUTING))) {
			console.log("Stall Break Exit");
			if(fromWait) console.log("Triggered from Wait");
			if(whoTriggered) {
				if(parent) console.log("Triggered by", this.#sites[whoTriggered].id);
				else console.log("Triggered by", this.#sites[whoTriggered].contents[0].ids);
				const feature = Object.values(this.#features).find(feature => feature.uniqueID == whoTriggered);
				if(feature) console.log("Child is generated feature:", feature);
			}
			this.showEvents();
			this.finish();
		}
	}

	awaitEnd() {
		if(!this.#endPromise) {
			this.#endPromise = {resolved: false};
			let resrej;
			this.#endPromise.promise = new Promise((resolve, reject) => resrej = {resolve, reject});
			this.#endPromise = {...this.#endPromise, ...resrej};
			//this.#endPromise.promise.finally(() => console.log("Resolved"));

			this.checkEnd();
		}

		return this.#endPromise.promise;
	}

	#findIdFromUIDHack(uniqueID) {
		const parent = this.#sites?.[this.#sitesBy.uniqueIDs[uniqueID]?.[0]]?.contents;
		if(parent) return parent.find(({contains}) => contains != "uniqueIDs").ids[parent.find(({contains}) => contains == "uniqueIDs").ids.indexOf(uniqueID)];
		else return `List: [${this.#sites[uniqueID].contents.find(({contains}) => contains != "uniqueIDs").ids.join(", ")}]`;
	}
}

function getStatusName(statusValue) {
	const [statusKey,] = Object.entries(FeaturesState.Status).find(([,status]) => status.value == statusValue) ?? [];
	if(statusKey) return statusKey;

	return Object.entries(FeaturesState.Status)
		.filter(([,status]) => !(status instanceof SiteStatusContinue) && (status.value & statusValue))
		.map(([statusKey,]) => statusKey)
		.join(", ");
}