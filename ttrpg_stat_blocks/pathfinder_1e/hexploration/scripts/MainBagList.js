import FeatureBagList from "./FeatureBagList.js";
import FeaturesState from "./FeaturesState.js";
import HexpUIDataLinkage from "./HexpUIDataLinkage.js";

export default class MainBagList extends FeatureBagList {
	async execute(state = new FeaturesState()) {
		super.preload(state);
		state.announce(this.uniqueID, FeaturesState.Status.EXECUTING);
		super.execute(state).catch(reason => console.error(reason));
		state.endTimeout(2);
		await state.awaitEnd()
		//console.log("Completed");
		return state;
	}

	static deserialize(obj) {
		return new MainBagList(obj);
	}

	static getUI(val) {
		const uiDataLinkage = super.getUI("main", val);

		return uiDataLinkage;
	}
}