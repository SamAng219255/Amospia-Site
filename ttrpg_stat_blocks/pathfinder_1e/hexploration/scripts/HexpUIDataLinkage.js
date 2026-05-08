export default class HexpUIDataLinkage {
	#id;
	#identifiersToParent = [];

	constructor(id, element) {
		this.#id = id;
		this.element = element;
	}

	get id() {
		return this.#id;
	}
	set id(newId) {
		if(this.parent && this.#identifiersToParent.includes(this.#id)) {
			this.parent.updateChildId(this.#id, newId);
		}
		this.#id = newId;
	}

	getValue() {
		return null;
	}

	append(linkage) {
		if(!(linkage instanceof HexpUIDataLinkage)) throw new TypeError("Linkage must be an instance of HexpUIDataLinkage.");
		this.element.append(linkage.element);
	}

	setParent(parent, reciprocate = true) {
		if(!(parent instanceof HexpUIDataLinkage)) throw new TypeError("Parent must be an instance of HexpUIDataLinkage.");
		if(!parent.canHaveChildren) throw new TypeError("Parent must be able to support children.");
		this.parent = parent;
		if(reciprocate) parent.addChild(this, false);
		this.#identifiersToParent = parent.getChildsIdentifiers(this);
		return this;
	}

	removeFromParent(reciprocate = true) {
		if(!this.parent) return;
		if(reciprocate && this.parent instanceof HexpUIDataLinkage) this.parent.removeChild(...this.#identifiersToParent, false);
		this.parent = null;
		return this;
	}

	replaceWith(replacement) {
		if(!(replacement instanceof HexpUIDataLinkage)) throw new TypeError("Replacement must be an instance of HexpUIDataLinkage.");
		this.element.replaceWith(replacement.element);
		if(this.parent != null) {
			const parent = this.parent;
			replacement.setParent(parent);
			this.removeFromParent(parent.reciprocateRemoveOnReplace);
		}
		return this;
	}

	get canHaveChildren() {return false;}

	static genNameFromId(id) {
		return id.split("_").map(word => (word.charAt(0).toUpperCase() + word.slice(1).replace(/([A-Z0-9]+(?![a-z])|[A-Z](?![A-Z]))/g, " $1").trim())).join(" ")
	}
	static genIdFromName(name) {
		const id = name.split(" ").map(word => word.charAt(0).toUpperCase() + word.slice(1)).join("")
		return id.charAt(0).toLowerCase() + id.slice(1);
	}

	static HasField = class extends HexpUIDataLinkage {
		#type;

		constructor(id, type, value) {
			if(!(type in HexpUIDataLinkage.HasField.FIELD_TYPES)) throw new Error(`Unrecognized type "${type}"`);

			super(id, document.createElement("input"));

			this.element.classList.add("hexp-gen-input");
			this.element.type = type;
			HexpUIDataLinkage.HasField.FIELD_TYPES[type].set(this.element, value);

			this.#type = type;
		}

		getValue() {
			return HexpUIDataLinkage.HasField.FIELD_TYPES[this.#type].parser(this.element);
		}

		static FIELD_TYPES = {
			"number": {
				parser: elem => elem.value ? parseFloat(elem.value) : 0,
				set: (elem, val) => elem.value = val ?? 1,
			},
			"text": {
				parser: elem => elem.value,
				set: (elem, val) => elem.value = val ?? "",
			},
			"checkbox": {
				parser: elem => elem.checked,
				set: (elem, val) => elem.checked = !!val,
			},
		};
	}

	static HasKeyedChildren = class extends HexpUIDataLinkage {
		#children = {};

		getValue() {
			return this.getChildValues();
		}

		getChildValues() {
			return Object.fromEntries(Object.entries(this.#children).map(([key, child]) => [key, child.getValue()]));
		}

		getChildsIdentifiers = (child) => [child.id];
		get canHaveChildren() {return true;}
		get reciprocateRemoveOnReplace() {return false;}

		addChild(child, reciprocate = true) {
			if(!(child instanceof HexpUIDataLinkage)) throw new TypeError("Child must be an instance of HexpUIDataLinkage.");
			this.#children[child.id] = child;
			if(reciprocate) child.setParent(this, false);
			return this;
		}
		
		appendAsChild(child) {
			this.append(child);
			this.addChild(child);
			return this;
		}

		removeChild(child, reciprocate = true) {
			if(!(child instanceof HexpUIDataLinkage) && typeof child != "string") throw new TypeError("Child must either be an instance of HexpUIDataLinkage or a string id.");
			const key = child instanceof HexpUIDataLinkage ? child.id : child;
			if(reciprocate) this.#children[key].removeFromParent(false);
			delete this.#children[key];
			return this;
		}

		updateChildId(oldId, newid) {
			this.#children[newId] = this.#children[oldId];
			delete this.#children[oldId];
		}
	}

	static HasChildArray = class extends HexpUIDataLinkage {
		#children = [];

		getValue() {
			return this.getChildValues();
		}

		getChildsIdentifiers = (child) => [child];
		get canHaveChildren() {return true;}
		get reciprocateRemoveOnReplace() {return true;}

		getChildValues() {
			return this.#children.map(child => child.getValue());
		}

		addChild(child, reciprocate = true) {
			if(!(child instanceof HexpUIDataLinkage)) throw new TypeError("Child must be an instance of HexpUIDataLinkage.");
			this.#children.push(child);
			if(reciprocate) child.setParent(this, false);
			return this;
		}
		
		appendAsChild(child) {
			this.append(child);
			this.addChild(child);
			return this;
		}

		removeChild(child, reciprocate = true) {
			if(!(child instanceof HexpUIDataLinkage)) throw new TypeError("Child must be an instance of HexpUIDataLinkage.");
			const ind = this.#children.indexOf(child);
			if(ind > -1) this.#children.splice(ind, 1);
			if(reciprocate) child.removeFromParent(false);
			return this;
		}
	}

	static Wrapper = class extends HexpUIDataLinkage {
		#child;

		constructor(element, child) {
			super(child.id, element);
			this.addChild(child);
		}

		getValue() {
			return this.#child.getValue();
		}

		getChildsIdentifiers = (child) => [];
		get canHaveChildren() {return true;}
		get reciprocateRemoveOnReplace() {return false;}

		addChild(child, reciprocate = true) {
			if(!(child instanceof HexpUIDataLinkage)) throw new TypeError("Child must be an instance of HexpUIDataLinkage.");
			if(this.#child) this.#child.removeFromParent(false);
			this.#child = child;
			if(reciprocate) child.setParent(this, false);
			return this;
		}

		removeChild(reciprocate = true) {
			if(!reciprocate) this.removeFromParent();
			if(reciprocate && this.#child) this.#child.removeFromParent(false);
			this.#child = null;
			return this;
		}

		get child() {
			return this.#child;
		}
	}

	static LabelWrapper = class extends HexpUIDataLinkage.Wrapper {
		constructor(child, text) {
			super(document.createElement("label"), child);
			this.element.innerText = text;
			this.append(child);
		}

		addChild(child, reciprocate) {
			if(this.child) this.child.replaceWith(child);
			super.addChild(child, reciprocate);
		}
	}

	static TitleWrapper = class extends HexpUIDataLinkage.Wrapper {
		constructor(child, text) {
			super(document.createElement("div"), child);

			const title = document.createElement("p");
			title.innerText = text;
			this.element.append(title);

			this.append(child);
		}

		addChild(child, reciprocate) {
			if(this.child) this.child.replaceWith(child);
			super.addChild(child, reciprocate);
		}
	}

	static HasTypeSelector = class extends HexpUIDataLinkage {
		#lastType = null;
		#type = null;
		#label = null;
		#desc = null;
		#args = null;

		constructor(id, element, methodSource, def) {
			super(id, element);
			this.methodSource = methodSource;
			this.#setType(new TypeUIDataLinkage(methodSource, def), def);
		}

		#setType(linkage, def) {
			if(this.#type == null)
				this.append(linkage);
			else
				this.#type.element.replaceWith(linkage.element);
			this.#type = linkage;

			linkage.element.addEventListener("change", () => this.updateType());
			this.updateType(def);

			return this;
		}

		updateType(def) {
			const newType = this.#type.getValue();
			if(newType == this.#lastType) return this;
			this.#lastType = newType;

			if(this.#label == null){
				this.#label = document.createElement("p");
				this.#label.classList.add("hexp-gen-number-label");
				this.element.append(this.#label);
			}
			if(this.#desc == null){
				this.#desc = document.createElement("p");
				this.#desc.classList.add("hexp-gen-number-desc");
				this.element.append(this.#desc);
			}
			this.#label.innerText = this.methodSource[newType].label;
			this.#desc.innerText = this.methodSource[newType].desc;

			this.#setArgs(this.methodSource[newType].args.getUI(def));
			return this;
		}

		#setArgs(linkage) {
			if(this.#args == null)
				this.append(linkage);
			else
				this.#args.element.replaceWith(linkage.element);
			this.#args = linkage;
			return this;
		}

		getValue() {
			return {
				type: this.#type.getValue(),
				...this.#args.getValue(),
			};
		}
	}

	static HasPrimitiveSelector = class extends HexpUIDataLinkage.Wrapper {
		#lastType = null;

		constructor(id, allowedTypes, methodSource, val, elementGenerator = () => document.createElement("div")) {
			const types = [...allowedTypes];
			const singleType = types.length == 1;
			const type = val == null || singleType ? types[0] : types.find(type => methodSource[type].match(val));
			const value = val ?? methodSource[type].def();

			let element = elementGenerator({type, singleType});

			super(element, methodSource[type].getUI(id, value));

			this.methodSource = methodSource;
			this.allowedTypes = types;

			if(!singleType) {
				this.selector = document.createElement("select");
				for(const typeKey of types) {
					const {label, match} = methodSource[typeKey];

					const option = document.createElement("option");
					option.value = typeKey;
					option.text = label;
					if(match(value)) option.selected = true;
					this.selector.append(option);
				}
				this.selector.addEventListener("change", () => this.updateType());
				element.append(this.selector);
			}

			this.append(this.child);
		}

		updateType(val) {
			const type = this.selector?.value ?? this.allowedTypes[0];
			if(type == this.#lastType) return this;
			this.#lastType = type;

			this.child.replaceWith(this.methodSource[type].getUI(this.id, val ?? this.methodSource[type].def()));

			return this;
		}
	}

	static HasLabeledPrimitiveSelector = class extends HexpUIDataLinkage.HasPrimitiveSelector {
		#lastType = null;

		constructor(id, label, allowedTypes, methodSource, val) {
			super(id, allowedTypes, methodSource, val, ({singleType, type}) => {
				if(singleType && methodSource[type].simple) {
					const element = document.createElement("label");
					element.innerText = label;

					return element;
				}
				else {
					const element = document.createElement("fieldset");

					const legend = document.createElement("legend");
					legend.innerText = label;
					element.append(legend);

					return element;
				}
			});
		}
	}
}

class TypeUIDataLinkage extends HexpUIDataLinkage {
	constructor(methodSource, {type = null} = {}) {
		super("type", document.createElement("select"));
		for(const typeKey in methodSource) {
			const {label} = methodSource[typeKey];

			const option = document.createElement("option");
			option.value = typeKey;
			option.text = label;
			if(typeKey == type) option.selected = true;
			this.element.append(option);
		}
	}

	getValue() {
		return this.element.value;
	}
}