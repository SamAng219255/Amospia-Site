import Serializable from "./Serializable.js";
import FeatureBagList from "./FeatureBagList.js";
import FeatureQuery from "./FeatureQuery.js";
import NumberProvider from "./NumberProvider.js";

export default class Feature extends Serializable {
	#condition = FeatureQuery.TRUE;
	#bags;

	constructor(id, name, {
		condition = FeatureQuery.TRUE,
		bags = new FeatureBagList(),
		desc = "",
		weight = NumberProvider.ONE,
		tags = [],
		bag = null,
		count = NumberProvider.ONE,
	} = {}) {
		super();
		this.id = id;
		this.name = name;
		this.condition = condition;
		this.desc = desc;
		this.tags = tags;
		this.bags = bags;
		this.bag = bag;
		this.weight = weight;
		this.count = count;
	}

	get condition() {
		return this.#condition;
	}
	set condition(condition) {
		if(typeof condition == "string")
			this.#condition = FeatureQuery.json(condition);
		else if(condition instanceof FeatureQuery)
			this.#condition = condition;
		else if(typeof condition == "object")
			this.#condition = FeatureQuery.deserialize(condition);
		else
			throw new TypeError("`condition` must be either an instance of FeatureQueries or a JSON string repesenting FeatureQueries.");
	}
	get bags() {
		return this.#bags;
	}
	set bags(bags) {
		if(bags instanceof FeatureBagList)
			this.#bags = bags;
		else if(Array.isArray(bags))
			this.#bags = new FeatureBagList(bags)
		else
			throw new TypeError("`bags` must be either a FeatureBagList or an array of FeatureBags.");
	}

	setCondition(condition) {
		this.condition = condition;
		return this;
	}
	setBags(bags) {
		this.bags = bags;
		return this;
	}
	setDesc(desc) {
		this.desc = desc;
		return this;
	}
	setWeight(desc) {
		this.weight = weight;
		return this;
	}



	async match(state) {
		return this.condition.execute(state);
	}

	async execute(state = new FeaturesState()) {
		await Promise.all(
			state.resolve(this),
			this.bags.execute(state),
		);
		return state;
	}

	serialize() {
		return {
			id: this.id,
			name: this.name,
			desc: this.desc,
			weight: this.weight.serialize(),
			condition: this.condition.serialize(),
			bags: this.bags.map(child => child.serialize()),
		};
	}

	static deserialize(obj) {
		return new Feature(obj.id, obj.name, {...obj, weight: NumberProvider.deserialize(obj.weight ?? 1)});
	}

	toString({count = null} = {}) {
		let str = this.name;
		if(count && count >= 2) str += ` x${Math.floor(count)}`;
		if(this.desc) str += ` (${this.desc})`;
		if(this.bag) str = `${this.bag}: ${str}`;
		return str;
	}
}