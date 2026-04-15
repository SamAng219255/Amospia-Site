import MainPoolList from "./MainPoolList.js";

const generateBtn = document.getElementById("hex-generate");
const output = document.getElementById("hex-output");

const defaultFeatures = await (await fetch("default_features.json")).json();
let features = MainPoolList.unmarshal(defaultFeatures);

generateBtn.addEventListener("click", async () => {
	const resultState = await features.execute();
	output.innerText = resultState.toString();
});