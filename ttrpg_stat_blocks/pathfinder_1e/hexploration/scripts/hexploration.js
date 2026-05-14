import MainBagList from "./MainBagList.js";

const generateBtn = document.getElementById("hex-generate");
const output = document.getElementById("hex-output");

const defaultFeatures = await (await fetch("data/vardoneth_features.json")).json();
//const defaultFeatures = JSON.parse(``);

let uiLinkage = MainBagList.getUI(defaultFeatures);
document.getElementById("hexp-options").append(uiLinkage.element);

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

const getStringBtn = document.getElementById("hexp-json-get");
const loadStringBtn = document.getElementById("hexp-json-load");
const stringBox = document.getElementById("hexp-json-textarea");

getStringBtn.addEventListener("click", () => stringBox.value = JSON.stringify(uiLinkage.getValue(),null,2));
loadStringBtn.addEventListener("click", () => {
	try {
		const tables = JSON.parse(stringBox.value);
		const newUILinkage = MainBagList.getUI(tables);
		uiLinkage.replaceWith(newUILinkage);
		uiLinkage = newUILinkage;
	}
	catch(err) {
		console.error(`Error while handling import: ${err.message}`);
	}
});