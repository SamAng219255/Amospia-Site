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
		'Goblin',
		8,
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
			'int' => 2,
			'str' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Goblins are humanoid creatures with the goblin subtype.',
			'bb/Small/bb: Goblins are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Normal Speed/bb: Goblins have a base speed of 20 feet.',
			'bb/Trade Prince Aspirant/bb: Goblin characters begin play with an additional 750 gp of starting wealth or a rocket belt. This additional starting wealth does not stack with the rich parents trait and, if the rich parents trait is selected, the rocket belt counts against their starting wealth.',
			'bb/Best Deals Anywhere/bb: Goblins receive a +2 bonus on Appraise checks and on checks to haggle prices.',
			'bb/Better Living Through Chemistry/bb: Goblins receive a +2 bonus on Craft (alchemy) checks.',
			'bb/Master Tinker/bb: Goblins gain a +1 bonus on Disable Device and Knowledge (engineering) checks. Goblins are also treated as proficient with any weapon they have personally crafted.',
			'bb/Hair Trigger/bb: Goblins receive a +2 racial bonus to initiative checks.',
			'bb/Languages/bb: Goblins begin play speaking Goblin and Orcish. Goblins with high Intelligence scores can choose from Common, Gutterspeak, Shalassian, Taur-ahe, Thalassian, and Zandali.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Time is Money/bb',
					'/mm/Your base speed increases to 30 feet.',
					'/mm/This replaces hair trigger.',
					'bb/Explosives Expert/bb',
					'/mm/The bonuses from master tinker increase to +2 and you receive an additional +2 racial bonus on all skill checks related to explosives that stacks with both master tinker and better living through chemistry.',
					'/mm/This replaces best deals anywhere.',
					'bb/Information Broker/bb',
					'/mm/You gain a +2 racial bonus on Diplomacy checks made to gather information and Sense Motive checks made to get a hunch about a social situation.',
					'/mm/This replaces either better living through chemistry or master tinker.',
					'bb/Urban Scavenger/bb',
					'/mm/You can use Survival to get along, forage, and perform similar activities while in urban environments as though they were wilderness and you receive a +2 bonus to such checks. An average town is treated as standard terrain, a standard village is treated as barren terrain, and a city is treated as abundant terrain for this purpose.',
					'/mm/This replaces trade prince aspirant.'
				]
			]
		]
	);
	racialFeats('goblin', [
		[
			'name' => 'Pack Hobgoblin',
			'desc' => '',
			'prereq' => 'character level 4th',
			'benefit' => 'This feat is similar to the Leadership feat, with several exceptions. You can attract only a 1st-level cohort (referred to hereafter as a pack hobgoblin) with this feat, and can\'t recruit followers. You determine your Leadership score according to the rules presented in the Leadership feat, but your pack hobgoblin is always at least 3 levels lower than yourself.  A pack hobgoblin must have the goblin subtype and can only take levels in fighter with the pack mule archetype. They cannot multiclass.
			If a pack hobgoblin gains enough XP to bring them to 2 levels lower than your level, they don\'t gain the new level until you gain your next level; until you advance, their XP total remains 1 less than the amount needed to attain the next level.  If you release your pack hobgoblin from service or otherwise lose your pack hobgoblin, you can recruit a new one. At 7th level, you can swap this feat for the Leadership feat.',
			'special' => false
		]
	]);
	blockStack(
		'Racial Equipment',
		'racial_equipment',
		[
			[
				'block' => true,
				'name' => 'Rocket Belt',
				'type' => 'item',
				'texts' => quick_array([
					'bb/Price/bb 750 gp; bb/Weight/bb 1 lb.'
				]),
				'spaced' => true,
				'sections' => [
					[
						'title' => 'Description',
						'spaced' => true,
						'texts' => quick_array([
							'A rocket belt is a handy dual-purpose item invented by goblins. It appears as a standard leather belt strapped with rockets and wiring. A rocket belt has two different functions. Activating either one of them provokes an attack of opportunity. ',
							'The first function is called a rocket jump. It requires a full-round action and uses the propellant in the rockets to launch the wearer up to 500 feet in a straight line that cannot pass through other creatures. The wearer can be launched in any direction but upward movement counts as double. The wearer provokes attacks of opportunity from this movement as normal. If the wearer uses this function, they can perform no other movement that round.',
							'The second function is called a rocket barrage. It can be used in place of a ranged weapon attack and launches explosive rockets from off the belt. The rockets can be fired at a target within 100 feet, requiring a ranged touch attack to hit, and deal 1d6 fire damage. If the wearer rolls a natural 1 on their attack roll, the rockets explode on top of the wearer instead and deal damage to the wearer as though they had been the target.',
							'Rocket belts are designed for use by goblins and if another creature attempts to activate a rocket belt they must make a DC 20 Knowledge (engineering) check or else the rockets explode on top of them instead as though they rolled a natural 1 with a rocket barrage.',
							'A standard rocket belt can be used 50 times before running out of rockets.'
						])
					]
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>