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
	) {
		const idIsGenerated = /^newTable$\d{0,4}$/.test(id);

		const uiDataLinkage = new HexpUIDataLinkage.HasKeyedChildren(id, document.createElement("div"));

		const idWrapper = document.createElement("div");
		idWrapper.classList.add("hexp-gen-id-wrapper");

		const idField = new HexpUIDataLinkage.HasField("id", "text", id);
		idField.element.disabled = idIsGenerated;
		idWrapper.append(idField.element);

		const autoLabel = document.createElement("label");
		autoLabel.innerText = "auto";

		const autoCheckbox = document.createElement("input");
		autoCheckbox.type = "checkbox";
		autoCheckbox.checked = idIsGenerated;
		autoLabel.prepend(autoCheckbox);

		idWrapper.append(autoLabel);

		uiDataLinkage.element.append(idWrapper);
		uiDataLinkage.addChild(new HexpUIDataLinkage.LabelWrapper(idField, "Id"));

		const nameField = new HexpUIDataLinkage.HasField("name", "text", name);
		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.LabelWrapper(nameField, "Name"));

		idField.element.addEventListener("change", () => {
			uiDataLinkage.id = idField.getValue();
		});

		nameField.element.addEventListener("change", () => {
			if(autoCheckbox.checked) {
				idField.element.value = HexpUIDataLinkage.genIdFromName(nameField.getValue());
				idField.element.dispatchEvent(new Event("change"));
			}
		});

		autoCheckbox.addEventListener("change", () => {
			idField.element.disabled = autoCheckbox.checked;
			if(autoCheckbox.checked) nameField.element.dispatchEvent(new Event("change"));
		});

		const listUIDataLinkage = new HexpUIDataLinkage.HasChildArray("entries", document.createElement("div"));
		const entriesWrapper = document.createElement("div");

		const makeEntry = (id, val) => {
			const container = new HexpUIDataLinkage.Wrapper(document.createElement("div"), Feature.getUI(id, val));

			const dltBtn = document.createElement("button");
			dltBtn.innerText = "X";
			dltBtn.ariaLabel = "Delete feature.";
			dltBtn.addEventListener("click", () => {
				container.removeFromParent();
				container.element.remove();
			});
			container.element.append(dltBtn);

			container.append(container.child);

			entriesWrapper.append(container.element);
			listUIDataLinkage.addChild(container);
		};
		entries.forEach(entry => makeEntry(entry.id, entry));

		listUIDataLinkage.element.append(entriesWrapper);

		const addEntryBtn = document.createElement("button");
		addEntryBtn.innerText = "+";
		addEntryBtn.ariaLabel = "Add feature to table.";
		addEntryBtn.addEventListener("click", () => makeEntry());
		listUIDataLinkage.element.append(addEntryBtn);

		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.TitleWrapper(listUIDataLinkage, "Features"));

		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.TitleWrapper(NumberProvider.getUI("rolls", rolls), "Rolls"));
		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.TitleWrapper(FeatureQuery.getUI("condition", condition), "Condition"));

		return uiDataLinkage;
	}

	toString() {
		return this.name;
	}
}