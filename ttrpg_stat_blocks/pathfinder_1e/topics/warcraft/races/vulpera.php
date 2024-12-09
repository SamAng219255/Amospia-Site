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
	raceBlockAuto(
		'Vulpera',
		11,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 2,
			'wis' => 2,
			'con' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Vulperas are humanoid creatures with the vulpera subtype.',
			'bb/Small/bb: Vulperas are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Slow Speed/bb: Vulperas have a base speed of 20 feet.',
			'bb/Bag of Tricks/bb: Vulperas can pull strange alchemical mixtures from their bag and throw them at enemies as a thrown weapon attack requiring an attack roll. This can be used at will and deals 1d3 points of acid, cold, electricity, or fire damage on a successful hit. The vulpera cannot use this ability whenever they would be unable to use their rummage your bag ability.',
			'bb/Camp/bb: Vulperas can spend 1 hour designating a region as their camp, during which time they can perform various tasks to set up camp. Each vulpera can only have one designated camp at any given time. Vulperas receive a +2 bonus on skill checks to locate their camp and find their way to their camp and are treated as having a +10\' bonus to their base speed for determining their overland speed when traveling to their camp.',
			'bb/Fire Resistance/bb: Vulperas have resistance to fire and electricity 5.',
			'bb/Nose For Trouble/bb: Vulperas gain a +2 bonus on initiative checks and on checks made to act in the surprise round.',
			'bb/Rummage Your Bag/bb: Vulperas gain the following extraordinary ability:',
			'Once per day, when confronted with a situation that calls for a particular mundane item, you happen to have such an item on your person. The item must cost no more than 25 gp plus 5 gp per level, and you must pay its cost when you "find" it (in other words, the money you thought you had on your person was actually the item). The item must be something you can easily carry-for example, if you are on foot and have only a backpack, you could not have a large iron cauldron. You can\'t find magical items using this ability, nor can you have specific items, such as the key to a particular door. If you are stripped of your equipment or possessions, you lose the benefits of this ability until you have at least a day to resupply and acquire new items.',
			'bb/Saddlebags/bb: Vulperas treat their Strength score as being 2 points higher for the purpose of calculating their carrying capacity.',
			'bb/Languages/bb: Vulperas begin play speaking Orcish and Vulpera. Vulperas with high Intelligence scores can choose from Common, Goblin, Gutterspeak, Shalassian, Taur-ahe, Thalassian, and Zandali.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Alpaca/bb',
					'/mm/You begin with a riding alpaca that uses the same statistics as for a llama. The alpaca possesses a bit and bridle and either a riding saddle and saddlebags or a pack saddle. You receive a +2 to Ride checks and Handle Animal checks with alpacas.',
					'/mm/This replaces saddlebags.',
					'bb/Caravaneer/bb',
					'/mm/You are familiar with the caravan routes. You can spend 8 hours to locate a passing caravan which can provide several possible services depending on which type of caravan you look for.',
					'/mm/ii/Merchants/ii: The caravan is composed of various merchants which allow you and your allies to sell and purchase items. The base limit of the caravan is equal to 1,000 gp for each level the vulpera has. Mundane items worth less than this limit can be purchased from the caravan and there is a 75% chance that any magic item worth up to this limit can be purchased from the caravan. Any items can be sold to the caravan but the caravan can only spend a maximum of five times the base limit on any given item and can only spend 20 times the base limit in total, purchasing items from the vulpera and their allies.',
					'/mm/ii/Travelers/ii: the caravan is traveling in the same direction as the vulpera and their allies and allows them to join. The vulpera and their allies are able to travel at the same speed as the caravan which is 4 miles in an hour or 32 miles in a day. They are also able to purchase any rations eaten by them, their mounts, or their animals while traveling with them from the caravan.',
					'/mm/This replaces camp.',
					'bb/Desert Traveler/bb',
					'/mm/You receive a +4 racial bonus on Constitution checks and Fortitude saves to avoid fatigue and exhaustion, as well as any other ill effects from running, forced marches, starvation, thirst, and hot or cold environments.',
					'/mm/This replaces fire resistance.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>