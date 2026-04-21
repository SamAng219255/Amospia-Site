export default class Serializable {
	constructor() {}

	serialize() {
		return {};
	}
	json() {
		return JSON.stringify(this.serialize());
	}

	static deserialize(obj) {
		return new Serializable();
	}
	static json(jsonStr) {
		return this.deserialize(JSON.parse(jsonStr));
	}
}