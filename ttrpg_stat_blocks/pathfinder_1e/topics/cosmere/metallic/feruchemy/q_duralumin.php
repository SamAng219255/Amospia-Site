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
		'Quintenium/Duralumin', // Metal
		false, // User
		[
			'Quadrant' => 'Cognitive'
		], // Categories
		'1 minute',
		[
			'A feruchemist can store social adeptness and comfort in quintenium/duralumin. While storing, the feruchemist fumbles and becomes anxious while in social situations, taking a multiplicative penalty to charisma when applied to charisma based skills except for Use Magic Device (UMD). While tapping, the feruchemist acquires an expertise and confidence in social situations, receiving a multiplicative bonus to charisma when applied to charisma based skills except for Use Magic Device (UMD).'
		], // Description
		[
			'columns' => [
				'Intelligence Bonus'
			],
			'rows' => [
				[
					'-6',
					'-75%' 
				],
				[
					'-4',
					'-50%' 
				],
				[
					'-2',
					'-25%' 
				],
				[
					'0',
					'+0%' 
				],
				[
					'4',
					'+50%' 
				],
				[
					'8',
					'+100%' 
				],
				[
					'12',
					'+150%' 
				],
				[
					'16',
					'+200%' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'The feruchemist receives a +2 bonus to icharimsa for the listed checks.',
				'draw' => 'The feruchemist takes a -2 penalty charimsa for the listed checks.'
			],
			30 => [
				'effect' => 'The feruchemist receives a +2 bonus to icharimsa for the listed checks.',
				'draw' => 'The feruchemist takes a -2 penalty charimsa for the listed checks.'
			],
			60 => [
				'effect' => 'The feruchemist receives a +2 bonus to icharimsa for the listed checks.',
				'draw' => 'The feruchemist takes a -2 penalty charimsa for the listed checks.'
			],
			100 => [
				'effect' => 'The feruchemist receives a +2 bonus to icharimsa for the listed checks.',
				'draw' => 'The feruchemist takes a -2 penalty charimsa for the listed checks.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>