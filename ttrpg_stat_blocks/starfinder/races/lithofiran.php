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
		"Lithofiran", // $name=''
		[
			""
		], // $desc=[]
		[
			'str' => +2,
			'int' => +2,
			'cha' => -2
		], // $stats=[]
		6, // $hp=0
		"Lithofirans are Medium humanoids.", // $size_type=''
		[
			"Darkvision" => "Lithofirans can see up to 60 feet in the dark.",
			"No Breath" => "Lithofiran do not breathe and have the no breath universal creature rule.",
			"Rapid recovery" => "Once per day, when a lithofiran takes a 10-minute rest to regain Stamina Points, they can additionally recover Hit Points as though they'd taken a full night's rest.",
			"Stony Resiliency" => "Lithofirans gain a +2 bonus to saving throws against poison.",
			"Wary of Magic" => "Lithofirans gain a +2 bonus to saves against magical effects but they must always attempt a save against magical effects and take a -5 penalty on Mysticism checks. Lithofirans who fail a check to identify something using Mysticism always assume the worst."
		]  // $traits=[]
	);
	blockSF(
		"About the Lithofiran",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Lithofirans are a humanoid species with distinct physical traits. Their skin is a dull gray, smooth but resilient, with a firm, almost stone-like texture. It ranges in shade from storm cloud gray to a pale, weathered tone. Their hair is similarly gray—coarse and thick, and it remains in place without shifting, even in strong winds.",
					"Lithofirans stand unnaturally still, standing motionless for long periods without any noticeable movement. Their posture is rigid, and they rarely adjust or shift, giving the impression of being living statues. Their eyes remain open and do not blink. They also do not breathe, meaning their chests never rise or fall.",
					"Lithofirans possess remarkable physical resilience. They are highly resistant to both poisons and toxins, and their wounds do not bleed. Their bodies can heal quickly, as they can concentrate to rapidly recover from injury."
				])
			],
			[
				'title' => 'Society',
				'spaced' => true,
				'texts' => quick_array([
					"Lithofiran society is fairly typical throughout the drift age planets of the pact worlds with a typical democratic republic at its head though it has a distrust and even outright hatred for magic in any form. The reasons for this hatred are lost to history, unfortunately, but that only makes it all the more tightly ingrained into lithofiran society.",
					"For most of the known pre-drift history, lithofirans have ruthlessly hunted down any form of magic on their world before it could take root, often involving massive \"witch hunts\" to chase out suspected magic-users. After establishing drift travel and encountering the relatively heavy use of magic throughout Near Space and the Pact Worlds, the lithofirans declared their system a no magic zone. Many elders among the people also searched through ancient records and uncovered an ancient structure that could be used to bathe the world and everything in orbit around it in antimagic which would completely disable any magic used in the vicinity. The structure also contained ancient guardians fueled by antimagic that, according to what records were successfully translated, should be able to consume and destroy magic. Unfortunately, or fortunately depending on who you ask, scholars have been unable to successfully revive the guardians and the remaining writings have yet to be able to be translated."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>