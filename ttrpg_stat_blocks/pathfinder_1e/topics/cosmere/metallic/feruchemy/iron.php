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
		'Iron', // Metal
		'Skimmer', // User
		[
			'Quadrant' => 'Physical'
		], // Categories
		'1 round',
		[
			'The skimmer can store and tap weight. When storing or tapping weight, their weight is decreased or increased and they count as a smaller or larger size category in every way except that their actual size does not change. This means that the skimmer takes up the same space as they did before and their reach does not change. In addition, while storing or tapping weight, weapons wielded of a size closer to the skimmer\'s actual size than their equivalent size have their damage increased, while tapping, or decreased, while storing, by a number of steps equal to the difference in the size of the weapon and skimmer\'s equivalent size increment. This ability does not otherwise change the skimmer\'s ability to wield weapons of a given size.',
			'Due to the conservation of momentum, tapping or storing weight has a dramatic effect on a skimmer in the air, greatly slower or accelerating them though the air. At any point during a jump a skimmer may change how much they are tapping or storing multiplying the remaining distance by a given amount. If the skimmer was already tapping or storing, divide the remaining distance by the multiplier for the increment they changed from first. They can change their weight like this multiple times during a jump. Changing how much they are tapping or storing during a jump while not on their turn is an immediate action.',
			'Additionally, the damage a skimmer takes from falling changes based on their weight as well due to reduced weight having a hard time overcoming air resistance. While in an air filled environment, the skimmer uses a different die to determine damage taken from falling and takes no damage when storing an increment of -3.5. When a skimmer begins falling, they may change the increment they are tapping or storing at as an immediate action. This die is only used to determine how much damage the falling skimmer takes. If the skimmer lands on a creature, the creature takes damage as though hit by a falling object of the skimmer\'s equivalent size catagory.',
			'As this ability does change the skimmer\'s weight, this ability does change their effective size category for the effects of allomantic iron and steel, including changing the amount of damage dealt by the lurch and coinshot abilities. The lurch and coinshot abilities are not otherwise affected by this ability.'
		], // Description
		[
			'columns' => [
				'Weight Multiplier',
				'Equivalent Size Change',
				'Long Jump Distance Multiplier',
				'High Jump Distance Multiplier',
				'Fall Damage Dice'
			],
			'rows' => [
				[
					'-3.5',
					'x1/8',
					'-3 size categories',
					'x48',
					'x8',
					'no damage'
				],
				[
					'-3',
					'x1/4',
					'-2 size categories',
					'x12',
					'x4',
					'1d2'
				],
				[
					'-2',
					'x1/2',
					'-1 size category',
					'x3',
					'x2',
					'1d4'
				],
				[
					'0',
					'x1',
					'no change',
					'x1',
					'x1',
					'1d6'
				],
				[
					'4',
					'x2',
					'+1 size category',
					'x1/3',
					'x1/2',
					'1d6'
				],
				[
					'12',
					'x4',
					'+2 size categories',
					'x1/12',
					'x1/4',
					'1d8'
				],
				[
					'28',
					'x8',
					'+3 size categories',
					'x1/48',
					'x1/8',
					'1d8'
				]
			]
		], // Increments
		[
			'special' => 'Effect while Using applies when either tapping or storing.',
			10 => [
				'effect' => 'The skimmer can wield light weapons, while tapping, or two-handed weapons, while storing, of any size between their actual size and their new size without the normal penalties for wielding an inappropriately size weapon. This does not effect the change in the number of hands required to wield it.',
				'draw' => ''
			],
			30 => [
				'effect' => 'The skimmer can wield one-handed weapons of any size between their actual size and their new size without the normal penalties for wielding an inappropriately size weapon. This does not effect the change in the number of hands required to wield it.',
				'draw' => ''
			],
			60 => [
				'effect' => 'The skimmer can wield two-handed weapons, while tapping, or light weapons, while storing, of any size between their actual size and their new size without the normal penalties for wielding an inappropriately size weapon. This does not effect the change in the number of hands required to wield it.',
				'draw' => ''
			],
			100 => [
				'effect' => 'The skimmer is able to change the weight of only part of their body. Weapons of their actual size deal damage as a weapon of their new size category',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>