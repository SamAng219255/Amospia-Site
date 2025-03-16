<?php 
	$startDir='';
	for($i=0; $i<20; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	raceSFBlock(
		"Kohnx", // $name=''
		[
			""
		], // $desc=[]
		[
			'any' => +2
		], // $stats=[]
		4, // $hp=0
		"Kohnxi are Medium humanoids with the kohnx subtype.", // $size_type=''
		[
			"Extra Feat" => "Kohnxi gain an extra combat feat at first level.",
			"Low-Light Vision" => "Kohnxi can see in dim light as if it were normal light.",
			"Saphagham" => [
				"Each kohnx bonds to a unique form of outsider known as a saphagham. Saphaghim do not possess a physical form but can manifest as an intangible hologram that can speak any language known to the kohnx. This hologram is a representation of the saphagham and cannot be larger than Tiny or travel more than 20 feet from the bonded kohnx. Generally, a saphagham inhabits a digital device within 30 feet of the kohnx. If the device becomes more than 30 feet from the kohnx, the saphagham is forced from the device. If there are no nearby devices, the saphagham resides in the kohnx's mind. The saphagham can operate an inhabited device as an ai module but must gain access to systems as a standard user though it does not require a terminal. Saphagham can communicate with the kohnx using telepathy. Saphagham can perform any task that can be done with a tier 1 computer in addition to the functions of any devices it inhabits. For every two levels possessed by the kohnx above 1st, the saphagham functions as a computer 1 tier higher. Saphaghim are treated as having a bonus equal to 2 × their tier in all skills, other than profession skills, that use the ability the bonded kohnx receives a racial bonus in.",
				"Kohnx receive a +3 bonus on Computers checks made with computers inhabited by their bonded saphagham."
			]
		]  // $traits=[]
	);
	blockSF(
		"About the Kohnx",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"The Kohnxi's homeworld is a cold, dimly lit planet with thin air and limited nutrition. In response to this harsh environment, the Kohnxi evolved larger lungs, more robust bodies, and pale skin. Their large eyes and remarkable stamina allow them to forage for the scarce food available, while their lean physiques help them conserve body heat. As a species, the Kohnxi highly value endurance, cooperation, and adaptability. From a young age, they form bonds with saphaghim, who play a key role in their upbringing and education. Saphaghim are artificial beings made of concentrated information, capable of taking nearly any form."
				])
			],
			[
				'title' => 'Culture',
				'spaced' => true,
				'texts' => quick_array([
					"ii/Accord/ii: High",
					"ii/Alignment/ii: NG",
					"ii/Religion/ii: Low",
					"ii/Magic/ii: Medium",
					"ii/Technology/ii: High",
					"ii/Community vs Individual/ii: Community",
					"ii/Liberty vs Law/ii: Liberty",
					"ii/Exceptionalism vs Universalism/ii: Balance but tension between exceptionalism and universalism.",
					"The Kohnxi are a highly advanced, altruistic civilization with a strong sense of community and a deep appreciation for diversity. They see progress and change as positive forces in the galaxy, and celebrate those who go out to explore the unknown. They strive for tolerance and understanding across cultures, but also believe that their own culture and technological advancements can help others. Despite their widespread culture, the Kohnxi lack a centralized government or any formal laws. Instead, they operate on a basis of mutual cooperation and shared cultural values, with individuals expected to act with integrity and responsibility."
				])
			],
			[
				'title' => 'Home World',
				'spaced' => true,
				'texts' => quick_array([
					"Kohnxi are native to the planet Gnythrys.",
					"Gnythrys is cold and mostly covered in frozen tundra. There are some temperate forests in warmer areas, and a variety of unique plants adapted to the harsh conditions. The plants include some that absorb magic energy to stay warm and photosynthesize, as well as some that grow in rocky soil with minimal nutrients. The animals on the planet include a species of large herbivores, called threngils, that have strong legs, thick coats, and a pointed horn, not unlike the wooly rhinoceros of lost Golarion, threngils also incorporate small amounts of magic to keep themselves warm during long winters. The Kohnxi are the primary sapient species on the planet and have become a dominant force on it, colonizing large portions of it."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>