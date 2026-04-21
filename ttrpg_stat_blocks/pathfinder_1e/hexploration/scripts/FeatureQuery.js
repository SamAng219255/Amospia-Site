import Serializable from "./Serializable.js";
import NumberProvider from "./NumberProvider.js";

export default class FeatureQuery extends Serializable {
	#rule;
	#ruleFunc;

	constructor(rule) {
		super();
		this.#rule = rule;
		this.#ruleFunc = FeatureQuery.RULES[rule.type](rule);
	}

	async execute(state) {
		return this.#ruleFunc(state);
	}

	serialize() {
		return this.#rule;
	}

	static deserialize(obj) {
		return new FeatureQuery(obj);
	}

	static async execute(rule, state) {
		if(rule instanceof FeatureQuery) return rule.execute(state);
		return FeatureQuery.RULES[rule.type](rule)(state);
	}

	static RULES = {
		"true": ({}) => async (state) => true,
		"false": ({}) => async (state) => false,

		"random": ({chance}) => async (state) => Math.random() <= chance,

		"exists": ({feature}) => async (state) => (await state.getStatus(feature)).exists,
		"any_exist": ({features}) => anyRule(features, (state, feature) => state.getStatus(feature)),
		"all_exist": ({features}) => allRule(features, (state, feature) => state.getStatus(feature)),
		"tag_exists": ({tag}) => async (state) => state.getTag(tag),
		"any_tag": ({tags}) => anyRule(tags, (state, tag) => state.getTag(tag)),
		"all_tags": ({tags}) => allRule(tags, (state, tag) => state.getTag(tag)),
		"bag_exists": ({bag}) => async (state) => state.getBag(bag),
		"any_bag": ({bags}) => anyRule(bags, (state, bag) => state.getBag(bag)),
		"all_bags": ({bags}) => allRule(bags, (state, bag) => state.getBag(bag)),

		"not": ({rule}) => async (state) => !(await FeatureQuery.execute(rule, state)),
		"any": ({rules}) => async (state) => anyRule(rules, (state, rule) => FeatureQuery.execute(rule, state)),
		"all": ({rules}) => async (state) => allRule(rules, (state, rule) => FeatureQuery.execute(rule, state)),

		"number": ({value, min = null, max = null}) => async (state) => {
			const val = await NumberProvider.execute(value, state);

			if(min == null && max == null)
				return val >= 0;

			return (min == null || (await NumberProvider.execute(min, state)) <= val)
				&& (max == null || (await NumberProvider.execute(max, state)) >= val);
		},
	}

	static get TRUE() {
		return new FeatureQuery({type: "true"});
	}
	static get FALSE() {
		return new FeatureQuery({type: "false"});
	}
}

const anyRule = (list, fn) => async (state) => {
	try {
		return await Promise.any(list.map(async (...args) => {
			if(await fn(state, ...args)) return true;
			throw false;
		}));
	}
	catch {
		return false;
	}
};

const allRule = (list, fn) => async (state) => {
	try {
		return await Promise.any(list.map(async (...args) => {
			if(!(await fn(state, ...args))) return false;
			throw true;
		}));
	}
	catch {
		return true;
	}
};