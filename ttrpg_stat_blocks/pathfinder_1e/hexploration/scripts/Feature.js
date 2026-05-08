import Serializable from "./Serializable.js";
import FeatureBagList from "./FeatureBagList.js";
import FeatureQuery from "./FeatureQuery.js";
import NumberProvider from "./NumberProvider.js";
import HexpUIDataLinkage from "./HexpUIDataLinkage.js";

export default class Feature extends Serializable {
	#condition = FeatureQuery.TRUE;
	#weight = NumberProvider.ONE;
	#count = NumberProvider.ONE;
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
	get weight() {return this.#weight;}
	set weight(weight) {
		this.#weight = weight instanceof NumberProvider ? weight : NumberProvider.deserialize(weight);
	}
	get count() {return this.#count;}
	set count(count) {
		this.#count = count instanceof NumberProvider ? count : NumberProvider.deserialize(count);
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
		return await this.condition.execute(state);
	}

	async execute(state = new FeaturesState()) {
		await Promise.all([
			state.resolve(this),
			this.bags.execute(state),
		]);
		return state;
	}

	serialize() {
		return {
			id: this.id,
			name: this.name,
			desc: this.desc,
			weight: this.weight.serialize(),
			condition: this.condition.serialize(),
			count: this.count.serialize(),
			bags: this.bags.serialize(),
		};
	}

	static deserialize(obj) {
		return new Feature(obj.id, obj.name, obj);
	}

	static getUI(
		id = `newFeature${Math.floor(Math.random() * 10000)}`, 
		{
			name = HexpUIDataLinkage.genNameFromId(id),
			desc = "",
			weight = NumberProvider.ONE,
			condition = FeatureQuery.TRUE,
			count = NumberProvider.ONE,
			bags = [],
		} = {},
	) {
		const idIsGenerated = HexpUIDataLinkage.genIdFromName(name) == id;

		const uiDataLinkage = new HexpUIDataLinkage.HasKeyedChildren(id, document.createElement("div"));

		const idWrapper = document.createElement("div");
		idWrapper.classList.add("hexp-gen-id-wrapper");

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

		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.LabelWrapper(new HexpUIDataLinkage.HasField("desc", "text", desc), "Description"));
		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.TitleWrapper(NumberProvider.getUI("weight", weight), "Weight"));
		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.TitleWrapper(FeatureQuery.getUI("condition", condition), "Condition"));
		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.TitleWrapper(NumberProvider.getUI("count", count), "Count"));
		uiDataLinkage.appendAsChild(new HexpUIDataLinkage.TitleWrapper(FeatureBagList.getUI("bags", bags), "Bags"));

		return uiDataLinkage;
	}

	toString({count = null} = {}) {
		let str = this.name;
		if(count && count >= 2) str += ` x${Math.floor(count)}`;
		if(this.desc) str += ` (${this.desc})`;
		if(this.bag) str = `${this.bag}: ${str}`;
		return str;
	}
}