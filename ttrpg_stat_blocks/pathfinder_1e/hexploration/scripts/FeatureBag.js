import Serializable from "./Serializable.js";
import Feature from "./Feature.js";
import FeaturesState from "./FeaturesState.js";
import NumberProvider from "./NumberProvider.js";
import FeatureQuery from "./FeatureQuery.js";
import HexpUIDataLinkage from "./HexpUIDataLinkage.js";

export default class FeatureBag extends Serializable {
	#entries = [];
	#rolls = NumberProvider.ONE;
	#condition = FeatureQuery.TRUE;

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

	get rolls() {return this.#rolls;}
	set rolls(rolls) {
		this.#rolls = rolls instanceof NumberProvider ? rolls : NumberProvider.deserialize(rolls);
	}
	get condition() {return this.#condition;}
	set condition(condition) {
		this.#condition = condition instanceof FeatureQuery ? condition : FeatureQuery.deserialize(condition);
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

		const promises = [];

		const allowedEntries = (await Promise.all(this.entries.map(async entry => [await entry.match(state), entry]))).filter(([allowed,]) => allowed).map(([,entry]) => entry);
		const resolvedRolls = await this.rolls.execute(state);
		const weights = await Promise.all(allowedEntries.map(entry => entry.weight.execute(state)));
		for(let i=0; i<resolvedRolls; i++) {
			const totalWeight = weights.reduce((sum, weight) => sum + weight, 0);
			const randIndex = parseInt(Math.random() * totalWeight);

			let growingCeiling = 0;
			for(let j = 0; j < allowedEntries.length; j++) {
				growingCeiling += weights[j];

				if(randIndex < growingCeiling) {
					promises.push(allowedEntries[j].execute(state));
					allowedEntries.splice(j, 1);
					weights.splice(j, 1);
					break;
				}
			}
		}
		await Promise.all(promises);
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

	static deserialize(obj) {
		let deserialized = new FeatureBag(
			obj.id, 
			obj.name, 
			obj.entries ? obj.entries.map(entry => Feature.deserialize(entry)) : [],
			obj.rolls ?? NumberProvider.ONE,
			obj.condition ?? FeatureQuery.TRUE,
		);
		deserialized.entries.forEach(entry => entry.bag = deserialized);
		return deserialized;
	}

	static getUI(
		id = `newTable${Math.floor(Math.random() * 10000)}`, 
		{
			name = HexpUIDataLinkage.genNameFromId(id),
			entries = [],
			rolls = NumberProvider.ONE,
			condition = FeatureQuery.TRUE,
		} = {},
		collapseParentRef = {},
	) {
		if(collapseParentRef && typeof collapseParentRef.setLabel == "function")
			collapseParentRef.setLabel(name);

		const idIsGenerated = HexpUIDataLinkage.genIdFromName(name) == id;

		const uiDataLinkage = new HexpUIDataLinkage.HasKeyedChildren(id, document.createElement("div"));

		const idWrapper = document.createElement("div");
		idWrapper.classList.add("hexp-options-option");

		const idLabel = document.createElement("label");
		idLabel.innerText = "Id";

		const idField = new HexpUIDataLinkage.HasField("id", "text", id);
		idField.element.disabled = idIsGenerated;
		idLabel.append(idField.element);
		idWrapper.append(idLabel);

		const autoLabel = document.createElement("label");
		autoLabel.innerText = "auto";

		const autoCheckbox = document.createElement("input");
		autoCheckbox.type = "checkbox";
		autoCheckbox.checked = idIsGenerated;
		autoLabel.prepend(autoCheckbox);

		idWrapper.append(autoLabel);

		uiDataLinkage.element.append(idWrapper);
		uiDataLinkage.addChild(idField);

		const nameField = new HexpUIDataLinkage.HasField("name", "text", name);
		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.LabelWrapper(nameField, "Name"));

		idField.element.addEventListener("change", () => {
			uiDataLinkage.id = idField.getValue();
		});

		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.CollapseWrapper({main: "Rolls"}, NumberProvider.getUI("rolls", rolls)));
		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.CollapseWrapper({main: "Condition"}, FeatureQuery.getUI("condition", condition)));

		nameField.element.addEventListener("change", () => {
			if(autoCheckbox.checked) {
				idField.element.value = HexpUIDataLinkage.genIdFromName(nameField.getValue());
				idField.element.dispatchEvent(new Event("change"));
			}
			if(collapseParentRef && typeof collapseParentRef.setLabel == "function")
				collapseParentRef.setLabel(nameField.getValue());
		});

		autoCheckbox.addEventListener("change", () => {
			idField.element.disabled = autoCheckbox.checked;
			if(autoCheckbox.checked) nameField.element.dispatchEvent(new Event("change"));
		});

		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.IsList(
			"entries",
			entries,
			(entry = {}, ref) => Feature.getUI(entry.id, entry, ref),
			{
				main: "Features",
				add: "+ Add Feature",
				addAria: "Add feature to table.",
				deleteAria: "Delete feature from table.",
			},
		));

		return uiDataLinkage;
	}

	toString() {
		return this.name;
	}
}