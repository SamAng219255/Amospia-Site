import Serializable from "./Serializable.js";
import Feature from "./Feature.js";
import FeaturesState from "./FeaturesState.js";
import NumberProvider from "./NumberProvider.js";
import FeatureQuery from "./FeatureQuery.js";

export default class FeatureBag extends Serializable {
	#entries = [];

	constructor(id, name, entries = [], rolls = NumberProvider.ONE, condition = FeatureQuery.TRUE) {
		super();
		this.id = id;
		this.name = name;
		this.entries = entries;
		this.rolls = rolls;
		this.condition = condition;
	}

	get entries() {
		this
		return this.#entries;
	}
	set entries(entries) {
		if(typeof entries == "string")
			this.entries = JSON.parse(entries);
		else if(Array.isArray(entries) && entries.every(entry => entry instanceof Feature || typeof entry == "string")) {
			this.#entries = entries.map(entry => 
				entry instanceof Feature
				? entry
				: Feature.json(entry)
			);
		}
		else
			throw new TypeError("`entries` must be either an array of Features or JSON strings representing Features.");
	}


	setEntries(entries) {
		this.entries = entries;
		return this;
	}
	addEntry(entry) {
		const entryObj = entry instanceof Feature
			? entry
			: Feature.json(entry)
		this.entries.push(entryObj);
		return this;
	}

	async execute(state = new FeaturesState()) {
		if(!(await this.condition.execute(state))) return state;

		let allowedEntries = this.entries.filter(async entry => await entry.match(state));
		const resolvedRolls = await this.rolls.execute(state);
		const weights = await Promise.all(this.entries.map(entry => entry.weight.execute(state)));
		for(let i=0; i<resolvedRolls; i++) {
			const totalWeight = weights.reduce((sum, weight) => sum + weight, 0);
			const randIndex = parseInt(Math.random() * totalWeight);

			let growingCeiling = 0;
			for(let j = 0; j < allowedEntries.length; j++) {
				growingCeiling += weights[j];

				if(randIndex < growingCeiling) {
					allowedEntries[j].execute(state);
					allowedEntries.splice(j, 1);
					break;
				}
			}
		}
		return state;
	}

	serialize() {
		return {
			id: this.id,
			name: this.name,
			rolls: this.rolls.serialize(),
			entries: this.entries.map(entry => entry.serialize()),
			condition: this.condition.serialize(),
		};
	}

	toString() {
		return this.name;
	}

	static deserialize(obj) {
		let deserialized = new FeatureBag(
			obj.id, 
			obj.name, 
			obj.entries.map(entry => Feature.deserialize(entry)),
			obj.rolls ? NumberProvider.deserialize(obj.rolls) : NumberProvider.ONE,
			obj.condition ? FeatureQuery.deserialize(obj.condition) : FeatureQuery.TRUE,
		);
		deserialized.entries.forEach(entry => entry.bag = deserialized);
		return deserialized;
	}
}