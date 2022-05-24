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
	feruchemy(
		'Quintenium/Iron', // Metal
		false, // User
		[
			'Quadrant' => 'Physical'
		], // Categories
		'1 round',
		[
			'A feruchemist can store size in quintenium/iron. This does not change the feruchemist\'s weight or strength though, only their physical size. While storing or tapping size, the feruchemist\'s size is decreased or increased changing their size category though, because their weight and strength don\'t change, they do not receive all of the statiscal benefits normally provided. Namely they treat their size as their original size performing or targetted by a combat maneuver including using the size bonuses and penalties to the CMB and CMD from their original size.',
			'In addition, while storing or tapping size, weapons wielded whose size is closer to the feruchemist\'s new size than their original size is have their damage decreased, while tapping, or increased, while storing, by a number of steps equal to the difference in the size of the weapon and feruchemist\'s original size category.',
			'Additionally, the damage a feruchemist takes from falling changes based on their size as well, due to incrased size creating greater air resistance. While in an air filled environment, the feruchemist uses a different die to determine damage taken from falling and takes no damage when tapping an increment of 28. When a feruchemist begins falling, they may change the increment they are tapping or storing at as an immediate action. This die is only used to determine how much damage the falling feruchemist takes. If the feruchemist lands on a creature, the creature takes damage as though hit by a falling object of the feruchemist\'s original size catagory.',
			'As this ability does not change the feruchemist\'s weight, this ability does not change their effective size category for the effects of allomantic iron and steel, including changing the amount of damage dealt by the lurch and coinshot abilities. The lurch and coinshot abilities are not otherwise affected by this ability.'
		], // Description
		[
			'columns' => [
				'Height Multiplier',
				'Size Change',
				'Fall Damage Dice'
			],
			'rows' => [
				[
					'-3.5', // IncrSrch
					'x1/8',
					'-3 size categories',
					'no damage'
				],
				[
					'-3', // IncrSrch
					'x1/4',
					'-2 size categories',
					'1d2'
				],
				[
					'-2', // IncrSrch
					'x1/2',
					'-1 size category',
					'1d4'
				],
				[
					'0', // IncrSrch
					'x1',
					'no change',
					'1d6'
				],
				[
					'4', // IncrSrch
					'x2',
					'+1 size category',
					'1d6'
				],
				[
					'12', // IncrSrch
					'x4',
					'+2 size categories',
					'1d8'
				],
				[
					'28', // IncrSrch
					'x8',
					'+3 size categories',
					'1d8'
				]
			]
		], // Increments
		[
			'special' => 'Effect while Using applies when either tapping or storing.',
			10 => [
				'effect' => 'WIP',
				'draw' => ''
			],
			30 => [
				'effect' => 'WIP',
				'draw' => ''
			],
			60 => [
				'effect' => 'WIP',
				'draw' => ''
			],
			100 => [
				'effect' => 'WIP',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>