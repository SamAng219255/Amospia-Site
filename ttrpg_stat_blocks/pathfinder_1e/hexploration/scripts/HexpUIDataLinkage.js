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
			this.element.classList.add("hexp-options-option");
			this.element.innerText = text;
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

			if(this.#desc == null){
				this.#desc = document.createElement("span");
				this.#desc.classList.add("hexp-gen-number-desc");
				this.element.append(this.#desc);
			}
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
		#insertElement;

		constructor(
			id, 
			allowedTypes, 
			methodSource, 
			val, 
			elementGenerator = () => {
				const element = document.createElement("div");
				element.classList.add("hexp-options-option");
				return [element, element];
			},
		) {
			const types = [...allowedTypes];
			const singleType = types.length == 1;
			const type = val == null || singleType ? types[0] : types.find(type => methodSource[type].match(val));
			const value = val ?? methodSource[type].def();

			let [element, insertElement] = elementGenerator({type, singleType});

			super(element, methodSource[type].getUI(id, value));

			this.#insertElement = insertElement;
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
				insertElement.append(this.selector);
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

		append(linkage) {
			if(!(linkage instanceof HexpUIDataLinkage)) throw new TypeError("Linkage must be an instance of HexpUIDataLinkage.");
			this.#insertElement.append(linkage.element);
		}
	}

	static HasLabeledPrimitiveSelector = class extends HexpUIDataLinkage.HasPrimitiveSelector {
		#lastType = null;

		constructor(id, label, allowedTypes, methodSource, val) {
			super(id, allowedTypes, methodSource, val, ({singleType, type}) => {
				if(singleType && methodSource[type].simple) {
					const element = document.createElement("label");
					element.classList.add("hexp-options-option");
					
					element.innerText = label;

					return [element, element];
				}
				else {
					const element = document.createElement("fieldset");
					element.classList.add("hexp-options-option");

					const legend = document.createElement("legend");
					legend.innerText = label;
					element.append(legend);

					const holder = document.createElement("div");
					element.append(holder);

					return [element, holder];
				}
			});
		}
	}

	static ListBoxWrapper = class extends HexpUIDataLinkage.Wrapper {
		#contentWrapper;

		constructor(
			labels = {
				deleteAria: "Delete item."
			},
			child,
		) {
			super(document.createElement("div"), child);
			this.element.classList.add("hexp-options-list-box");

			const headerBar = document.createElement("div");
			headerBar.classList.add("hexp-options-bar")
			this.element.append(headerBar);

			this.#contentWrapper = document.createElement("div");
			this.#contentWrapper.classList.add("hexp-options-list-box-content");
			this.element.append(this.#contentWrapper);

			const dltBtn = document.createElement("button");
			dltBtn.classList.add("hexp-options-delete");
			dltBtn.innerText = "X";
			dltBtn.ariaLabel = labels.deleteAria;
			dltBtn.addEventListener("click", () => {
				this.removeFromParent();
				this.element.remove();
			});
			this.#contentWrapper.append(dltBtn);

			this.#contentWrapper.append(child.element);
		}
	}

	static CollapseLabel = class {
		#label;

		constructor({
			main = "",
			deleteAria = "Delete item."
		}, deleteParent = null) {
			this.element = document.createElement("div");
			this.element.classList.add("hexp-options-collapse-label");
			this.element.addEventListener("click", () => this.element.classList.toggle("is-expanded"));

			this.#label = document.createElement("span");
			this.text = main;
			this.element.append(this.#label);

			if(deleteParent instanceof HexpUIDataLinkage) {
				const dltBtn = document.createElement("button");
				dltBtn.classList.add("hexp-options-delete");
				dltBtn.innerText = "X";
				dltBtn.ariaLabel = deleteAria;
				dltBtn.addEventListener("click", () => {
					deleteParent.removeFromParent();
					deleteParent.element.remove();
				});
				this.element.append(dltBtn);
			}
		}

		get text() {
			return this.#label.innerText;
		}
		set text(text) {
			this.#label.innerText = text;
		}
	}

	static CollapseWrapper = class extends HexpUIDataLinkage.Wrapper {
		constructor(
			labels = {},
			child,
			hasDelete = false,
		) {
			super(document.createElement("div"), child);
			this.element.classList.add("hexp-options-collapse");
			this.child.element.classList.add("hexp-options-collapse-target");

			this.labelLinkage = new HexpUIDataLinkage.CollapseLabel(labels, hasDelete ? this : null);
			this.element.append(this.labelLinkage.element);

			this.element.append(child.element);
		}

		get labelText() {
			return this.labelLinkage.text;
		}
		set labelText(text) {
			this.labelLinkage.text = text;
		}

		addChild(child, reciprocate) {
			if(this.child) this.child.replaceWith(child);
			super.addChild(child, reciprocate);
		}
	}

	static IsList = class extends HexpUIDataLinkage.CollapseWrapper {
		constructor(
			id, 
			entries = [],
			uiSource = () => new HexpUIDataLinkage("", document.createElement("div")),
			labels = {
				main: "",
				add: "Add",
				addAria: "Add item to list.",
				deleteAria: "Delete item."
			},
			itemsHaveDropdown = true,
		) {
			const listUIDataLinkage = new HexpUIDataLinkage.HasChildArray(id, document.createElement("div"));
			const entriesWrapper = document.createElement("div");
			entriesWrapper.classList.add("hexp-options-list");

			super(labels, listUIDataLinkage);

			const makeEntry = (val, isOpen = false) => {
				let entry;
				if(itemsHaveDropdown) {
					let initLabelText = "";
					const entryChildRef = {
						setLabel: labelText => initLabelText = labelText,
					};
					entry = new HexpUIDataLinkage.CollapseWrapper({deleteAria: labels.deleteAria}, uiSource(val, entryChildRef), true);
					if(isOpen) entry.labelLinkage.element.classList.add("is-expanded");
					entry.labelText = initLabelText;
					entryChildRef.setLabel = labelText => entry.labelText = labelText;
				}
				else {
					entry = new HexpUIDataLinkage.ListBoxWrapper({deleteAria: labels.deleteAria}, uiSource(val));
				}

				entriesWrapper.append(entry.element);
				listUIDataLinkage.addChild(entry);

				return entry;
			};
			entries.forEach(entry => makeEntry(entry));

			listUIDataLinkage.element.append(entriesWrapper);

			const addEntryBtn = document.createElement("button");
			addEntryBtn.classList.add("hexp-options-add");
			addEntryBtn.innerText = labels.add;
			addEntryBtn.ariaLabel = labels.addAria;
			addEntryBtn.addEventListener("click", () => makeEntry({}, true));
			listUIDataLinkage.element.append(addEntryBtn);
		}

		addChild(child, reciprocate) {
			if(!this.child) return super.addChild(child, reciprocate);
			this.child.addChild(child, reciprocate);
			return this;
		}

		removeChild(child, reciprocate) {
			if(!reciprocate) this.removeFromParent();
			this.child.removeChild(child, reciprocate);
			return this;
		}

		append(linkage) {
			this.child.append(linkage);
			return this;
		}
	}
}

class TypeUIDataLinkage extends HexpUIDataLinkage {
	constructor(methodSource, {type = null} = {}) {
		super("type", document.createElement("select"));
		this.element.classList.add("inline-select");
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