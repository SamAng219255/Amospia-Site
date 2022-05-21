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
		'Nicrosil', // Metal
		'Soulbearer', // User
		[
			'Quadrant' => 'Spiritual'
		], // Categories
		'1 minute',
		[
			'Soulbearers can store their ability to use investiture. While storing, a soulbearer is usually unable to use whichever of their abilities they are storing. While tapping, a soulbearer can use the ability to a greater degree, usually manifesting as an increased spell level of cosmere abilities or an increased caster level for other forms of magic.',
			'A soulbearer can store specific forms of investiture within a nicrosil metalmind such as divine breaths. This investiture is simply stored in the metalmind and can be tapped to regain later. Each metalmind can only store one type of ability or investiture.'
		], // Description
		[
			'columns' => [
				'Spell Level',
				'Caster Level'
			],
			'rows' => [
				[
					'-4', // IncrSrch
					'Cannot Use',
					'Cannor Use' 
				],
				[
					'-3', // IncrSrch
					'-75%',
					'-75%' 
				],
				[
					'-2', // IncrSrch
					'-50%',
					'-50%' 
				],
				[
					'-1', // IncrSrch
					'-25%',
					'-25%' 
				],
				[
					'0', // IncrSrch
					'+0',
					'+0' 
				],
				[
					'1', // IncrSrch
					'+0.25',
					'+0.5' 
				],
				[
					'2', // IncrSrch
					'+0.5',
					'+1' 
				],
				[
					'3', // IncrSrch
					'+0.75',
					'+1.5' 
				],
				[
					'4', // IncrSrch
					'+1',
					'+2' 
				],
				[
					'8', // IncrSrch
					'+2',
					'+4' 
				],
				[
					'15', // IncrSrch
					'+3',
					'+6' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'The soulbearer receives a +5 bonus to their spell and ability DCs.',
				'draw' => ''
			],
			30 => [
				'effect' => 'The soulbearer\'s relevant spells and spell-like abilities are heightened by 1 level higher and their caster level is 2 higher.',
				'draw' => ''
			],
			60 => [
				'effect' => 'The soulbearer receives a +5 bonus to their spell and ability DCs.',
				'draw' => ''
			],
			100 => [
				'effect' => 'The soulbearer\'s relevant spells and spell-like abilities are heightened by 1 level higher and their caster level is 2 higher.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>