export default class HexpUIComponent {
	#onUpdate = null;
	#value = {};
	#getValue = null;
	#children = [];

	constructor(role, element) {
		if(role == "argument") {
			if(element.nodeName == "INPUT" || element.nodeName == "SELECT" || element.nodeName == "TEXTAREA") {
				if(element.nodeName == "INPUT" && element.type == "checkbox")
					this.#getValue = () => element.checked;
				else
					this.#getValue = () => element.value;

				element.addEventListener("change", () => this.trigger());
			}
		}
	}

	setUpdate(updateFunc) {
		this.#onUpdate = updateFunc;
		return this;
	}

	setParent(parent) {
		this.parent = parent;
		return this;
	}

	addChild(child) {
		this
	}

	get value() {
		return this.#value;
	}

	trigger() {
		if(typeof this.getValue == "function") this.#value = this.#getValue();
		if(this.parent instanceof HexpUIComponent) this.parent.trigger();
	}
}