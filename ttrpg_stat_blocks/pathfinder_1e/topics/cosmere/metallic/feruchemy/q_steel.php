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
		'Quintenium/Steel', // Metal
		false, // User
		[
			'Quadrant' => 'Physical'
		], // Categories
		'1 round',
		[
			'A feruchemist can store flexibility in quintenium/steel. While storing, the feruchemist becomes rigid, receiving a penalty to their dexterity and DR bludgeoning. While storing at the maximum increment, the feruchemist is completely rigid and unable to move becoming effectively paralyzed. While tapping, the feruchemist becomes more flexible, receiving a bonus to dexterity and DR slashing.'
		], // Description
		[
			'columns' => [
				'Dexterity Bonus',
				'Damage Reduction'
			],
			'rows' => [
				[
					'-8', // IncrSrch
					'-100%',
					'20/Bludgeoning'
				],
				[
					'-6', // IncrSrch
					'-75%',
					'15/Bludgeoning'
				],
				[
					'-4', // IncrSrch
					'-50%',
					'10/Bludgeoning'
				],
				[
					'-2', // IncrSrch
					'-25%',
					'5/Bludgeoning'
				],
				[
					'0', // IncrSrch
					'+0%',
					''
				],
				[
					'4', // IncrSrch
					'+50%',
					'5/Slashing'
				],
				[
					'8', // IncrSrch
					'+100%',
					'10/Slashing'
				],
				[
					'12', // IncrSrch
					'+150%',
					'15/Slashing'
				],
				[
					'16', // IncrSrch
					'+200%',
					'20/Slashing'
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'The feruchemist receives a +2 bonus to dexterity and receives the Compression ability when tapping at an increment of at least 16.',
				'draw' => 'The feruchemist takes a -2 penalty to dexterity.'
			],
			30 => [
				'effect' => 'The feruchemist receives a +2 bonus to dexterity and receives the Compression ability when tapping at an increment of at least 12.',
				'draw' => 'The feruchemist takes a -2 penalty to dexterity.'
			],
			60 => [
				'effect' => 'The feruchemist receives a +2 bonus to dexterity and receives the Compression ability when tapping at an increment of at least 8.',
				'draw' => 'The feruchemist takes a -2 penalty to dexterity.'
			],
			100 => [
				'effect' => 'The feruchemist receives a +2 bonus to dexterity and receives the Compression ability when tapping at an increment of at least 4.',
				'draw' => 'The feruchemist takes a -2 penalty to dexterity.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>