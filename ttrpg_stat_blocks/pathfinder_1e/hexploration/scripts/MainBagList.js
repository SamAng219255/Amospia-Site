import FeatureBagList from "./FeatureBagList.js";
import FeaturesState from "./FeaturesState.js";

export default class MainBagList extends FeatureBagList {
	async execute(state = new FeaturesState()) {
		await super.execute(state);
		await state.finish();
		return state;
	}

	static deserialize(obj) {
		return new MainBagList(obj);
	}

	static getUI(val) {
		return super.getUI("main", val);
	}
}