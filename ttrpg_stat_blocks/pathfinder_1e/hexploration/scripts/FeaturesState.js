import FeatureQuery from "./FeatureQuery.js";
import FeatureBag from "./FeatureBag.js";
import Feature from "./Feature.js";

export default class FeaturesState {
	#waitingOnFeatures = {};
	#features = {};

	#waitingOnTags = {};
	#tags = new Set();

	#waitingOnBags = {};
	#bags = {};

	#featuresRecord = {};
	#featureCounts={};
	#finished = false;

	// Mark a terrain feature as generated or not
	async resolve(feature, generated = true) {
		if(!this.#featureCounts[feature.id]) this.#featureCounts[feature.id] = 0;
		this.#featureCounts[feature.id] += await feature.count.execute(this);
		if(this.#featureCounts[feature.id] < 1) return;

		if(generated)
			this.#features[feature.id] = feature;

		if(this.#waitingOnFeatures[feature.id]) {
			this.#waitingOnFeatures[feature.id].forEach(({resolve}) => resolve(generated));
			delete this.#waitingOnFeatures[feature.id];
		}

		for(let tag of feature.tags) {
			this.#tags.add(tag);

			if(this.#waitingOnTags[tag]) {
				this.#waitingOnTags[tag].forEach(({resolve}) => resolve(generated));
				delete this.#waitingOnTags[tag];
			}
		}

		if(feature.bag) {
			let bagId = feature.bag;
			if(feature.bag instanceof FeatureBag) bagId = feature.bag.id;

			if(this.#bags[bagId]) this.#bags[bagId].push(feature);
			else this.#bags[bagId] = [feature];

			if(this.#waitingOnBags[bagId]) {
				this.#waitingOnBags[bagId].forEach(({resolve}) => resolve(generated));
				delete this.#waitingOnBags[bagId];
			}
		}

		this.#featuresRecord[feature.id] = "resolved";
	}

	// Find if a feature has been generated
	async getStatus(featureAwaitedId, featureWaitingId = null) {
		if(this.#features[featureAwaitedId])
			return true;
		if(this.#finished) return false;
		
		const state = this;
		return new Promise((resolve, reject) => state.addWaitingForFeature(featureAwaitedId, {resolve, reject}, featureWaitingId));

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
	async getTag(tag, featureWaitingId = null) {
		if(this.#tags.has(tag))
			return true;
		if(this.#finished) return false;
		
		const state = this;
		return new Promise((resolve, reject) => state.addWaitingForTag(tag, {resolve, reject}, featureWaitingId));

	}
	addWaitingForTag(tag, resrej, featureWaitingId = null) {
		if(featureWaitingId) this.#featuresRecord[featureWaitingId] = "waiting";

		if(this.#waitingOnTags[tag])
			this.#waitingOnTags[tag].push(resrej);
		else
			this.#waitingOnTags[tag] = [resrej];
	}

	// Resolve all unresolved promises to close missing cases and collapse recursive loops.
	// Ran at the end of the generation process.
	async finish() {
		for(let [featureId, status] in Object.entries(this.#featuresRecord)) {
			if(status == "awaited") {
				this.resolve(featureId, false);
				changed = true;
			}
		}
		let nextAwaiting;
		while(([nextAwaiting, ] = Object.entries(this.#featuresRecord).find(([,status]) => status != "resolved") || []) && nextAwaiting) {
			this.resolve(nextAwaiting, false);
		}
		this.#finished = true;
	}

	async getBag(bag, featureWaitingId = null) {
		let bagId = bag.toString();
		if(bag instanceof FeatureBag) bagId = bag.id;

		if(this.#bags[bagId])
			return true;
		if(this.#finished) return false;
		
		const state = this;
		return new Promise((resolve, reject) => state.addWaitingForBag(bagId, {resolve, reject}, featureWaitingId));
	}
	addWaitingForBag(bagId, resrej, featureWaitingId = null) {
		if(featureWaitingId) this.#featuresRecord[featureWaitingId] = "waiting";

		if(this.#waitingOnBags[bag])
			this.#waitingOnBags[bag].push(resrej);
		else
			this.#waitingOnBags[bag] = [resrej];
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
			count: this.#featureCounts[id]
		})).join("\n");
	}
}