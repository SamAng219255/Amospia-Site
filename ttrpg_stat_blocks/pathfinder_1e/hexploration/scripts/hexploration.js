import MainBagList from "./MainBagList.js";

const generateBtn = document.getElementById("hex-generate");
const output = document.getElementById("hex-output");

const defaultFeatures = await (await fetch("default_features.json")).json();
//const defaultFeatures = JSON.parse(``);

const uiLinkage = MainBagList.getUI(defaultFeatures);
document.getElementById("hex-options").append(uiLinkage.element);

generateBtn.addEventListener("click", async () => {
	const value = uiLinkage.getValue();
	const features = MainBagList.deserialize(value);
	const resultState = await features.execute();
	output.innerText = resultState.toString();
	//console.log(JSON.stringify(value,null,4));
	//console.log(features.json());
	//console.log(features);
	//console.log(resultState);
	//console.log(resultState.results);
});