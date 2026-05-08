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
		return FeatureQuery.RULES[rule.type].func(rule)(state);
	}

	static getUI(id, value = {type: "true"}) {
		const objValue = value instanceof FeatureQuery ? value.serialize() : value;
		return new HexpUIDataLinkage.HasTypeSelector(id, document.createElement("div"), FeatureQuery.RULES, objValue);
	}

	static #RULES;
	static get RULES() {
		if(!this.#RULES)
			this.#RULES = {
				"true": {
					func: ({}) => async (state) => true,
					args: new ArgConditions(),
					label: "True",
					desc: "Always passes.",
				},
				"false": {
					func: ({}) => async (state) => false,
					args: new ArgConditions(),
					label: "False",
					desc: "Never passes.",
				},

				"random": {
					func: ({chance}) => async (state) => Math.random() <= await NumberProvider.execute(chance, state),
					args: new ArgConditions("chance"),
					label: "Random",
					desc: "Has the provided chance to pass. Uses a chance between 0 and 1 where 1 is guaranteed to pass and 0 is guaranteed to fail.",
				},

				"exists": {
					func: ({feature}) => async (state) => (await state.getStatus(feature)).exists,
					args: new ArgConditions({id: "feature", can_accept: ["string"]}),
					label: "Feature Exists",
					desc: "Passes if the listed feature exists.",
				},
				"any_exist": {
					func: ({features}) => anyRule(features, (state, feature) => state.getStatus(feature)),
					args: new ArgConditions({id: "features", multi: true, can_accept: ["string"]}),
					label: "Any Feature Exists",
					desc: "Passes if any of the listed features exist.",
				},
				"all_exist": {
					func: ({features}) => allRule(features, (state, feature) => state.getStatus(feature)),
					args: new ArgConditions({id: "features", multi: true, can_accept: ["string"]}),
					label: "All Features Exist",
					desc: "Passes if all of the listed features exist.",
				},
				"tag_exists": {
					func: ({tag}) => async (state) => state.getTag(tag),
					args: new ArgConditions({id: "tag", can_accept: ["string"]}),
					label: "Tag Exists",
					desc: "Passes if the listed tag exists.",
				},
				"any_tag": {
					func: ({tags}) => anyRule(tags, (state, tag) => state.getTag(tag)),
					args: new ArgConditions({id: "tags", multi: true, can_accept: ["string"]}),
					label: "Any Tag Exists",
					desc: "Passes if any of the listed tags exist.",
				},
				"all_tags": {
					func: ({tags}) => allRule(tags, (state, tag) => state.getTag(tag)),
					args: new ArgConditions({id: "tags", multi: true, can_accept: ["string"]}),
					label: "All Tags Exist",
					desc: "Passes if all of the listed tags exist.",
				},
				"bag_exists": {
					func: ({bag}) => async (state) => state.getBag(bag),
					args: new ArgConditions({id: "bag", can_accept: ["string"]}),
					label: "Bag Exists",
					desc: "Passes if the listed bag exists.",
				},
				"any_bag": {
					func: ({bags}) => anyRule(bags, (state, bag) => state.getBag(bag)),
					args: new ArgConditions({id: "bags", multi: true, can_accept: ["string"]}),
					label: "Any Bag Exists",
					desc: "Passes if any of the listed bags exist.",
				},
				"all_bags": {
					func: ({bags}) => allRule(bags, (state, bag) => state.getBag(bag)),
					args: new ArgConditions({id: "bags", multi: true, can_accept: ["string"]}),
					label: "All Bags Exist",
					desc: "Passes if all of the listed bags exist.",
				},

				"not": {
					func: ({rule}) => async (state) => !(await FeatureQuery.execute(rule, state)),
					args: new ArgConditions({id: "rule", can_accept: ["query"]}),
					label: "Invert",
					desc: "Passes if the provided rule fails.",
				},
				"any": {
					func: ({rules}) => anyRule(rules, (state, rule) => FeatureQuery.execute(rule, state)),
					args: new ArgConditions({id: "rules", multi: true, can_accept: ["query"]}),
					label: "Any",
					desc: "Passes if any of the provided rules pass.",
				},
				"all": {
					func: ({rules}) => allRule(rules, (state, rule) => FeatureQuery.execute(rule, state)),
					args: new ArgConditions({id: "rules", multi: true, can_accept: ["query"]}),
					label: "All",
					desc: "Passes if all of the provided rules pass.",
				},

				"number": {
					func: ({value, min = null, max = null}) => async (state) => {
						const val = await NumberProvider.execute(value, state);

						if(min == null && max == null)
							return val >= 0;

						return (min == null || (await NumberProvider.execute(min, state)) <= val)
							&& (max == null || (await NumberProvider.execute(max, state)) >= val);
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

const anyRule = (list, fn) => async (state) => {
	try {
		return await Promise.any(list.map(async (...args) => {
			if(await fn(state, ...args)) return true;
			throw false;
		}));
	}
	catch (err) {
		if(err.errors.some(error => error instanceof Error)) throw err;
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
	catch (err) {
		if(err.errors.some(error => error instanceof Error)) throw err;
		return true;
	}
};