import NumberProvider from "./NumberProvider.js";
import FeatureQuery from "./FeatureQuery.js";
import HexpUIDataLinkage from "./HexpUIDataLinkage.js";

class ArgCondition {
	#custom_accept = false;
	#can_accept;
	#conditions;

	constructor(id, multi = false, def = undefined, can_accept = new Set(["number", "provider"])) {
		this.id = id;
		this.can_accept = can_accept;
		this.multi = multi;
		this.def = def;
		this.label = HexpUIDataLinkage.genNameFromId(id);
		this.optional = false;
	}

	get can_accept() {
		return this.#can_accept;
	}
	set can_accept(newVal) {
		this.#custom_accept = false;
		let newSet;
		if(newVal instanceof Set)
			newSet = newVal;
		else if(Array.isArray(newVal))
			newSet = new Set(newVal);
		else if(newVal == null)
			throw new TypeError("Argument types cannot be null.");
		else if(typeof newVal == "object") {
			this.#custom_accept = true;
			const entries = Object.entries(newVal)
				.map(([key, val]) => [key, 
					val instanceof Set ?
					val :
						Array.isArray(val) ?
						new Set(val) :
						null
				])
				.filter(([key, val]) => val instanceof Set)
				.map(([key, val]) => [key, intersection(val, ArgCondition.TYPES)])
				.filter(([key, val]) => val.size > 0);
			
			if(entries.length <= 0) throw new Error("`can_accept` cannot be empty.");

			newSet = Object.fromEntries(entries);
		}
		else
			throw new TypeError("Invalid argument type.");

		if(newSet instanceof Set) {
			newSet = intersection(newSet, ArgCondition.TYPES);
			if(newSet.size <= 0) throw new Error("`can_accept` cannot be empty.");
		}
		this.#can_accept = newSet;

		this.#conditions = [];
		if (this.#can_accept instanceof Set) 
			this.#conditions.push((arg, seen) => [...this.#can_accept].some(cond => ArgCondition.TYPES[cond].match(arg, seen)));
		else if(typeof this.#can_accept == "object") {
			for(const [key, val] of Object.entries(this.#can_accept)) {
				const subConditions = [];
				subConditions.push((arg, seen) => [...val].some(cond => ArgCondition.TYPES[cond].match(arg, seen)));

				this.#conditions.push((arg, seen) => arg != null && typeof arg == "object" && subConditions.some(condition => condition(arg[key], seen)));
			}
		}
	}

	setAccept(...options) {
		this.can_accept = [...options];
		return this;
	}

	setMulti(isMulti) {
		this.multi = isMulti;
		return this;
	}

	setDef(def) {
		this.def = def;
		return this;
	}

	setLabel(label) {
		this.label = label;
		return this;
	}

	setOptional(optional) {
		this.optional = optional;
		return this;
	}

	add({can_accept = null, multi = null, def = null, label = null, optional = null} = {}) {
		if(can_accept != null) this.can_accept = can_accept;
		if(multi != null) this.multi = multi;
		if(def != null) this.def = def;
		if(label != null) this.label = label;
		if(optional != null) this.optional = optional;
		return this;
	}

	matches(arg = null, seen = new WeakSet()) {
		if(arg == null)
			return this.optional;

		if(arg && typeof arg == "object") {
			if(seen.has(arg)) throw new Error("Recursive argument condition detected!");
			seen.add(arg);
		}

		if(this.multi && !Array.isArray(arg)) return false;

		const aggregator = this.can_accept instanceof Set ? "some" : "every";
		let ret;
		if(this.multi)
			ret = arg.every(subArg => this.#conditions[aggregator](condition => condition(subArg, seen)));
		else
			ret = this.#conditions[aggregator](condition => condition(arg, seen));
		seen.delete(arg);
		return ret;
	}

	getUI(val) {
		if(this.multi) {
			const uiDataLinkage = new HexpUIDataLinkage.HasChildArray(this.id, document.createElement("div"));

			const label = document.createElement("p");
			label.classList.add("hexp-gen-argument-label");
			label.innerText = this.label;
			uiDataLinkage.element.append(label);

			const listBox = document.createElement("div");
			listBox.classList.add("hexp-gen-argument-list");

			const listWrapper = document.createElement("div");
			listWrapper.classList.add("hexp-gen-argument-list-holder");
			listBox.append(listWrapper);

			const addEntry = entry => {
				const entryUIDataLinkage = new HexpUIDataLinkage.HasPrimitiveSelector(this.id, this.can_accept, ArgCondition.TYPES, entry);

				const dltBtn = document.createElement("button");
				dltBtn.innerText = "X";
				dltBtn.ariaLabel = dltBtn.title = "Delete Item";
				dltBtn.addEventListener("click", () => {
					entryUIDataLinkage.element.remove();
					entryUIDataLinkage.removeFromParent();
				});
				entryUIDataLinkage.element.prepend(dltBtn);

				listWrapper.append(entryUIDataLinkage.element);
				uiDataLinkage.addChild(entryUIDataLinkage);
			};
			if(val && Array.isArray(val)) val.forEach(addEntry);
			else if(this.def && Array.isArray(this.def)) this.def.forEach(addEntry);

			const addButton = document.createElement("button");
			addButton.classList.add("hexp-gen-argument-list-add");
			addButton.innerText = "+";
			addButton.ariaLabel = addButton.title = "Add New Item";
			addButton.addEventListener("click", () => addEntry());
			listBox.append(addButton);

			uiDataLinkage.element.append(listBox);

			return uiDataLinkage;
		}
		else {
			if(this.#custom_accept) {
				const uiDataLinkage = new HexpUIDataLinkage.HasKeyedChildren(this.id, document.createElement("div"));
				for(const [key, arg] of Object.entries(this.can_accept)) {
					uiDataLinkage.appendAsChild(new HexpUIDataLinkage.HasLabeledPrimitiveSelector(key, HexpUIDataLinkage.genNameFromId(key), arg, ArgCondition.TYPES, val[key]));
				}
				return uiDataLinkage
			}
			else
				return new HexpUIDataLinkage.HasLabeledPrimitiveSelector(this.id, this.label, this.can_accept, ArgCondition.TYPES, val ?? this.def);
		}
	}

	static #TYPES;
	static get TYPES() {
		if(!this.#TYPES)
			this.#TYPES = {
				"number": {
					label: "Number",
					match: arg => typeof arg == "number",
					getUI: (id, value = 1) => new HexpUIDataLinkage.HasField(id, "number", value),
					def: () => 1,
					simple: true,
				},
				"string": {
					label: "Text",
					match: arg => typeof arg == "string",
					getUI: (id, value = "") => new HexpUIDataLinkage.HasField(id, "text", value),
					def: () => "",
					simple: true,
				},
				"boolean": {
					label: "True/False",
					match: arg => typeof arg == "boolean",
					getUI: (id, value = true) => new HexpUIDataLinkage.HasField(id, "checkbox", value),
					def: () => true,
					simple: true,
				},
				"provider": {
					label: "Number Provider",
					match: (arg, seen) => arg instanceof NumberProvider || ArgConditions.matches(arg, NumberProvider.OPERATIONS, seen),
					getUI: (id, value = NumberProvider.ONE) => NumberProvider.getUI(id, value),
					def: () => NumberProvider.ONE,
					simple: false,
				},
				"query": {
					label: "Feature Query",
					match: (arg, seen) => arg instanceof FeatureQuery || ArgConditions.matches(arg, FeatureQuery.RULES, seen),
					getUI: (id, value = FeatureQuery.TRUE) => FeatureQuery.getUI(id, value),
					def: () => FeatureQuery.TRUE,
					simple: false,
				},
			};
		return this.#TYPES;
	}
}

export default class ArgConditions {
	constructor(...argConds) {
		this.argConds = argConds.map(argCond => 
			argCond instanceof ArgCondition ? argCond :
			Array.isArray(argCond) ? new ArgCondition(...argCond) :
			argCond.id ? new ArgCondition(argCond.id).add(argCond) :
			typeof argCond == "string" ? new ArgCondition(argCond) :
			null
		).filter(argCond => argCond instanceof ArgCondition);
	}

	matches(args, seen = new WeakSet()) {
		if(this.argConds.length == 0) return true;
		return this.argConds.every(argCond => argCond.matches(args[argCond.id]), seen);
	}

	getUI(val = {}) {
		const base = document.createElement("div");
		base.classList.add("hexp-gen-arguments");

		const uiDataLinkage = new HexpUIDataLinkage.HasKeyedChildren("args", base);

		this.argConds.forEach(argCond => {
			const argLinkage = argCond.getUI(val[argCond.id]);
			base.append(argLinkage.element);
			uiDataLinkage.addChild(argLinkage);
		});

		return uiDataLinkage;
	}

	static matches(args, methodSource, seen = new WeakSet()) {
		if(!args || !methodSource[args.type]) return false;
		return methodSource[args.type].args.matches(args, seen);
	}
}

function intersection(a, b) {
	return new Set([...a].filter(entry => entry in b));
}