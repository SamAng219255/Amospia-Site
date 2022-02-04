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
	race2eBlock(
		'Wernan',// Name
		'Uncommon',
		'Humanoid',// Creature Type Trait(s)
		'Wernan are squirrel-like humanoids that hail from the bows of the mighty tree Geldrine which occupies the entirety of their home plane. Its branches support all manner of life and it is said that despite how far you travel you will not find their end nor trunk, not that many tested that claim. Though portals to the trunk can be found thoughout the inhabited regions of the branches, created either by gods or by powerful druids to unite the people of trunk and bows. The roots of the mighty Geldrine extend far, far below and are anchored in other planes of existence. Through these roots the people of the bows and trunk are able to create gateways to other realms and often trade with other planes.',// description
		[
			
		],// You Might...
		[
			
		],// Others Probably...
		'Wernan are squirrel-like humanoids with long bushy tails that generally stand largely upright. While running, many Wernan prefer to get down on all fours to go faster with more stability. When doing so their tails will extend backwards behind them for balance.',// Physical Description
		'Wernan are genarally carefree and have little in the way of governance. Wernan are knonw for being very "in the moment" and while they occasionally attempt to prepare for their future their short attention spans and forgetful nature can make it quite difficult.',// Society
		'Wernan are generally chaotically aligned and usually good or neutral on the other axis. Wernan are not gernally known to worhip or have any type of religion.',// Alignment and Religion
		'Wernan are naturally curious and adventurous so its no surprise when one decides on a life of adventuring. Wernan adventurers are often bards or sorcerers and it is rare to find one in a class that requires disipline or rigorous as they generally have trouble maintaining such efforts. Similarly, as Wernan rarely worship finding one as a paladin or cleric is a rare sight indeed.',// Adventurers
		'8',
		'Medium',
		'30',
		'Dexterity, Charisma, Free',
		'Intelligence',
		'Common
		Wernan
		Additional languages equal to your Intelligence modifier (if it\'s positive). Choose from Avian, Floran, Mathine, Muuyine, Sylvan, and any other languages to which you have access (such as the languages prevalent in your region).',
			[
				[
					'title' => 'Low-Light Vision',
					'spaced' => false,
					'texts' => quick_array([
						'You can see in dim light as though it were bright light, so you ignore the concealed condition due to dim light.',
						'/tt/1st Ed. Hybrid Description:',
						'You have low-light vision and can see twice as far as humans in conditions of dim light.'
					])
				],
				[
					'title' => 'Designed to Fall',
					'spaced' => false,
					'texts' => quick_array(
						'Wernan often race along the branches of the tree with little care and it is not uncommon for them to slip and fall. Luckily, their creator must have been aware of this and has designed them to be able to not only effectively brace them against a fall but also limit how fast they do fall.
						Wernan only ever fall 200 feet each round, only take damage from falling more 10 feet, take only 1 point of bludgeoning damage per 10 feet fallen, and treat falls longer than 200 feet as though they were 200 feet (20 damage). Additionally if a Wernan is conscious, they can make a Reflex save with a DC of 10 plus the amount of damage they would take to half the damage they take.
						/tt/1st Ed. Hybrid Description:
						Wernan fall at a rate of 200 feet per round, and take only 1 point of nonlethal damage per 10 feet fallen, to a maximum of 20. Additionally if a Wernan is conscious, they can make a Reflex save with a DC of 10 plus the amount of damage they would take to half the damage they take. A Wernan can cast a spell while falling as long as the fall is greater than 100 feet or the spell is an immediate action and doing so only requires a concentration check of 10 plus the spell\'s level.'
					)
				]
			]
	);
	require $startDir.'pageEnd.php';
?>