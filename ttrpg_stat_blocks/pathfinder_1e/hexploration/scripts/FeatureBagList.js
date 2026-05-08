import Serializable from "./Serializable.js";
import FeatureBag from "./FeatureBag.js";
import FeaturesState from "./FeaturesState.js";
import HexpUIDataLinkage from "./HexpUIDataLinkage.js";

export default class FeatureBagList extends Serializable {
	#bags = [];

	constructor(bags = []) {
		super();
		this.bags = bags;
	}

	get bags() {
		return this.#bags;
	}
	set bags(bags) {
		if(typeof bags == "string")
			this.bags = JSON.parse(bags).map(bag => FeatureBag.deserialize(bag));
		else if(Array.isArray(bags) && bags.every(bag => bag instanceof FeatureBag || typeof bag == "string" || typeof bag == "object")) {
			this.#bags = bags.map(bag => {
				if(bag instanceof FeatureBag)
					return bag;
				else if(typeof bag == "string")
					return FeatureBag.json(bag);
				else
					return FeatureBag.deserialize(bag)
			});
		}
		else if(bags instanceof FeatureBag)
			this.#bags = [bags];
		else
			throw new TypeError("`bags` must be an array of FeatureBags and JSON strings repesenting FeatureBags, a single JSON string repesenting an array of FeatureBags, or a single FeatureBag.");
	}

	setBags(bags) {
		this.bags = bags;
		return this;
	}
	addBag(bag) {
		if(bag instanceof FeatureBag)
			this.bags.push(bag);
		else if(typeof bag == "string")
			this.bags.push(FeatureBag.json(bag));
		else
			throw new TypeError("`bag` must a FeatureBag or a JSON string repesenting a FeatureBag")
		return this;
	}

	async execute(state = new FeaturesState()) {
		await Promise.all(this.bags.map(bag => bag.execute(state)));
		return state;
	}

	static getUI(id, bags = []) {
		const uiDataLinkage = new HexpUIDataLinkage.HasChildArray(id, document.createElement("div"));

		const entriesWrapper = document.createElement("div");

		const makeBag = (bag = {}) => {
			const container = new HexpUIDataLinkage.Wrapper(document.createElement("div"), FeatureBag.getUI(bag.id, bag));

			const dltBtn = document.createElement("button");
			dltBtn.innerText = "X";
			dltBtn.ariaLabel = "Delete table.";
			dltBtn.addEventListener("click", () => {
				container.removeFromParent();
				container.element.remove();
			});
			container.element.append(dltBtn);

			container.append(container.child);

			entriesWrapper.append(container.element);
			uiDataLinkage.addChild(container);
		};
		bags.forEach(makeBag);

		uiDataLinkage.element.append(entriesWrapper);

		const addEntryBtn = document.createElement("button");
		addEntryBtn.innerText = "+";
		addEntryBtn.ariaLabel = "Add table to list.";
		addEntryBtn.addEventListener("click", () => makeBag());
		uiDataLinkage.element.append(addEntryBtn);

		return uiDataLinkage;
	}
}