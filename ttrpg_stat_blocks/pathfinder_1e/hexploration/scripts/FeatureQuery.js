import Serializable from "./Serializable.js";
import ArgConditions from "./ArgConditions.js";
import NumberProvider from "./NumberProvider.js";
import HexpUIDataLinkage from "./HexpUIDataLinkage.js";

export default class FeatureQuery extends Serializable {
	#rule;
	#ruleFunc;

	constructor(rule) {
		super();

		if(rule instanceof FeatureQuery)
			this.#rule = rule.serialize()
		else
			this.#rule = rule;

		if(!ArgConditions.matches(this.#rule, FeatureQuery.RULES)) throw new Error(`Invalid feature query: ${JSON.stringify(operation)}`);
		this.#ruleFunc = FeatureQuery.RULES[rule.type].func(rule);
	}

	async execute(chainData) {
		return this.#ruleFunc(chainData);
	}

	serialize() {
		return this.#rule;
	}

	static deserialize(obj) {
		return new FeatureQuery(obj);
	}

	static async execute(rule, chainData) {
		if(rule instanceof FeatureQuery) return rule.execute(chainData);
		return FeatureQuery.RULES[rule.type].func(rule)(chainData);
	}

	static getUI(id, value = {type: "true"}) {
		const objValue = value instanceof FeatureQuery ? value.serialize() : value;
		const element = document.createElement("div");
		return new HexpUIDataLinkage.HasTypeSelector(id, element, FeatureQuery.RULES, objValue);
	}

	static #RULES;
	static get RULES() {
		if(!this.#RULES)
			this.#RULES = {
				"true": {
					func: ({}) => async (chainData) => true,
					args: new ArgConditions(),
					label: "True",
					desc: "Always passes.",
				},
				"false": {
					func: ({}) => async (chainData) => false,
					args: new ArgConditions(),
					label: "False",
					desc: "Never passes.",
				},

				"random": {
					func: ({chance}) => async (chainData) => {const rand = Math.random(); const odds = await NumberProvider.execute(chance, chainData); return rand <= odds;},
					args: new ArgConditions("chance"),
					label: "Random",
					desc: "Has the provided chance to pass. Uses a chance between 0 and 1 where 1 is guaranteed to pass and 0 is guaranteed to fail.",
				},

				"exists": {
					func: ({feature}) => async ({state, featureWaiting, uniqueID}) => (await state.getStatus(feature, featureWaiting, uniqueID)),
					args: new ArgConditions({id: "feature", can_accept: ["string"]}),
					label: "Feature Exists",
					desc: "Passes if the listed feature exists.",
				},
				"any_exist": {
					func: ({features}) => anyRule(features, ({state, featureWaiting, uniqueID}, feature) => state.getStatus(feature, featureWaiting, uniqueID)),
					args: new ArgConditions({id: "features", multi: true, can_accept: ["string"]}),
					label: "Any Feature Exists",
					desc: "Passes if any of the listed features exist.",
				},
				"all_exist": {
					func: ({features}) => allRule(features, ({state, featureWaiting, uniqueID}, feature) => state.getStatus(feature, featureWaiting, uniqueID)),
					args: new ArgConditions({id: "features", multi: true, can_accept: ["string"]}),
					label: "All Features Exist",
					desc: "Passes if all of the listed features exist.",
				},
				"tag_exists": {
					func: ({tag}) => async ({state, featureWaiting, uniqueID}) => state.getTag(tag, featureWaiting, uniqueID),
					args: new ArgConditions({id: "tag", can_accept: ["string"]}),
					label: "Tag Exists",
					desc: "Passes if the listed tag exists.",
				},
				"any_tag": {
					func: ({tags}) => anyRule(tags, ({state, featureWaiting, uniqueID}, tag) => state.getTag(tag, featureWaiting, uniqueID)),
					args: new ArgConditions({id: "tags", multi: true, can_accept: ["string"]}),
					label: "Any Tag Exists",
					desc: "Passes if any of the listed tags exist.",
				},
				"all_tags": {
					func: ({tags}) => allRule(tags, ({state, featureWaiting, uniqueID}, tag) => state.getTag(tag, featureWaiting, uniqueID)),
					args: new ArgConditions({id: "tags", multi: true, can_accept: ["string"]}),
					label: "All Tags Exist",
					desc: "Passes if all of the listed tags exist.",
				},
				"bag_exists": {
					func: ({bag}) => async ({state, featureWaiting, uniqueID}) => state.getBag(bag, featureWaiting, uniqueID),
					args: new ArgConditions({id: "bag", can_accept: ["string"]}),
					label: "Table Exists",
					desc: "Passes if anything from the listed table exists.",
				},
				"any_bag": {
					func: ({bags}) => anyRule(bags, ({state, featureWaiting, uniqueID}, bag) => state.getBag(bag, featureWaiting, uniqueID)),
					args: new ArgConditions({id: "bags", multi: true, can_accept: ["string"]}),
					label: "Any Table Exists",
					desc: "Passes if anything from of the listed bags exists.",
				},
				"all_bags": {
					func: ({bags}) => allRule(bags, ({state, featureWaiting, uniqueID}, bag) => state.getBag(bag, featureWaiting, uniqueID)),
					args: new ArgConditions({id: "bags", multi: true, can_accept: ["string"]}),
					label: "All Tables Exist",
					desc: "Passes if at least one thing from each of the listed tables exists.",
				},

				"not": {
					func: ({rule}) => async (chainData) => !(await FeatureQuery.execute(rule, chainData)),
					args: new ArgConditions({id: "rule", can_accept: ["query"]}),
					label: "Invert",
					desc: "Passes if the provided rule fails.",
				},
				"any": {
					func: ({rules}) => anyRule(rules, (chainData, rule) => FeatureQuery.execute(rule, chainData)),
					args: new ArgConditions({id: "rules", multi: true, can_accept: ["query"]}),
					label: "Any",
					desc: "Passes if any of the provided rules pass.",
				},
				"all": {
					func: ({rules}) => allRule(rules, (chainData, rule) => FeatureQuery.execute(rule, chainData)),
					args: new ArgConditions({id: "rules", multi: true, can_accept: ["query"]}),
					label: "All",
					desc: "Passes if all of the provided rules pass.",
				},

				"number": {
					func: ({value, min = null, max = null}) => async (chainData) => {
						const val = await NumberProvider.execute(value, chainData);

						if(min == null && max == null)
							return val >= 0;

						return (min == null || (await NumberProvider.execute(min, chainData)) <= val)
							&& (max == null || (await NumberProvider.execute(max, chainData)) >= val);
					},
					args: new ArgConditions("value", {id: "min", optional: true}, {id: "max", optional: true}),
					label: "Number Range",
					desc: "If a minimum is given, passes only if the value is at least the minimum. If a maximum is given, passes only if the value is no more than the maximum. If both are given the value must be between the minimum and maximum. If the minimum and maximum are left blank, passes if the value is at least 0.",
				},
			};
		return this.#RULES;
	}

	static get TRUE() {
		return new FeatureQuery({type: "true"});
	}
	static get FALSE() {
		return new FeatureQuery({type: "false"});
	}
}

const anyRule = (list, fn) => async (chainData) => {
	try {
		return await Promise.any(list.map(async (...args) => {
			if(await fn(chainData, ...args)) return true;
			throw false;
		}));
	}
	catch (err) {
		if(err.errors.some(error => error instanceof Error)) throw err;
		return false;
	}
};

const allRule = (list, fn) => async (chainData) => {
	try {
		return await Promise.any(list.map(async (...args) => {
			if(!(await fn(chainData, ...args))) return false;
			throw true;
		}));
	}
	catch (err) {
		if(err.errors.some(error => error instanceof Error)) throw err;
		return true;
	}
};