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
		'Quintenium/Tin', // Metal
		false, // User
		[
			'Quadrant' => 'Physical'
		], // Categories
		'1 minute',
		[
			'A feruchemist can store sound volume in quintenium/tin. While storing, any sound produced by the feruchemist, such as from speaking, playing an instrument, walking, or opening a squeaky door, is dampened, becoming entirely inaudible at the maximum increment. This silence grants a bonus to the DC to hear to the creature, applies a multiplicative penalty to sonic damage dealt by spells and abilities, and adds a chance of spell failure when casting spells with verbal components. While tapping, any sound produced by the feruchemist is amplified, becoming far louder than it was before. This grants a penalty to the DC to hear the creature and applies a multiplicative bonus to to sonic damage dealt by spells and abilities.',
			'The bonuses and penalties to the DC to hear the creature also apply to the DC or Stealth roll of the creature when a creature is attempting to detect them by sound or hearing.'
		], // Description
		[
			'columns' => [
				'Perception DC',
				'Sonic Damage Bonus',
				'Spell Failure Chance'
			],
			'rows' => [
				[
					'-8', // IncrSrch
					'Cannot be Heard',
					'-100%',
					'20%'
				],
				[
					'-6', // IncrSrch
					'+20',
					'-75%',
					'15%'
				],
				[
					'-4', // IncrSrch
					'+10',
					'-50%',
					'10%'
				],
				[
					'-2', // IncrSrch
					'+5',
					'-25%',
					'5%'
				],
				[
					'0', // IncrSrch
					'+0',
					'+0%',
					'0%'
				],
				[
					'4', // IncrSrch
					'-20',
					'+50%',
					'0%'
				],
				[
					'8', // IncrSrch
					'-40',
					'+100%',
					'0%'
				],
				[
					'12', // IncrSrch
					'-60',
					'+150%',
					'0%'
				],
				[
					'16', // IncrSrch
					'-80',
					'+200%',
					'0%'
				]
			]
		], // Increments
		[
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