const generateBtn = document.getElementById("hex-generate");
const output = document.getElementById("hex-output");

const defaultFeatures = await (await fetch("default_features.json")).json();
let features = JSON.parse(JSON.stringify(defaultFeatures));
for(let featureType in features) {
	features[featureType].totalWeight = 0;
	for(let feature in features[featureType].options) {
		features[featureType].totalWeight += features[featureType].options[feature].weight;
	}
}

console.log(features);

generateBtn.addEventListener("click", () => {
	const ret = [];

	for(let featureTypeKey in features) {
		const featureType = features[featureTypeKey];
		const randIndex = parseInt(Math.random() * featureType.totalWeight);


		let buildingCeiling = 0;
		for(let featureKey in featureType.options) {
			const feature = featureType.options[featureKey];

			buildingCeiling += feature.weight;
			if(randIndex < buildingCeiling) {
				ret.push(`${featureType.name}: ${feature.name}`);
				break;
			}
		}
	}

	output.innerText = ret.join(", ");
});