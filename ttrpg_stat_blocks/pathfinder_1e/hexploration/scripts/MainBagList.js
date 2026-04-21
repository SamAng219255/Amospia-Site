import FeatureBagList from "./FeatureBagList.js";
import FeaturesState from "./FeaturesState.js";

export default class MainBagList extends FeatureBagList {
	async execute(state = new FeaturesState()) {
		await super.execute(state);
		state.finish();
		return state;
	}

	serialize() {
		return this.bags.map(bag => bag.serialize);
	}

	static deserialize(obj) {
		return new MainBagList(obj);
	}
}