import MainBagList from "./MainBagList.js";

const generateBtn = document.getElementById("hex-generate");
const output = document.getElementById("hex-output");

const defaultFeatures = await (await fetch("default_features.json")).json();
let features = MainBagList.deserialize(defaultFeatures);

let tablesUI = MainBagList.getUI(defaultFeatures);
document.getElementById("hex-options").append(tablesUI.element);
console.log(JSON.stringify(tablesUI.getValue(), null, 4));

generateBtn.addEventListener("click", async () => {
	const resultState = await features.execute();
	output.innerText = resultState.toString();
});