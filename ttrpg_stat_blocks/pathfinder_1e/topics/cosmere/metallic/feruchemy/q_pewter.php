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
		'Quintenium/Pewter', // Metal
		false, // User
		[
			'Quadrant' => 'Physical'
		], // Categories
		'1 minute',
		[
			'A feruchemist can store substance in quintenium/pewter.',
			'While storing, the feruchemist becomes less real, ultimately becoming incorporeal. If an attack or ability used by the feruchemist or against the feruchemist, the damage or effect is only a percentage as strong (if applicable) or only has a percentage chance to occur. ii/Ghost touch/ii weapons ignore this effect. When storing substance at the maximum increment, the feruchemist becomes incorporeal except they are immune to damage and effects not from ii/ghost touch/ii weapons and cannot attack or affect any other creature or object except those with ii/ghost touch/ii.',
			'While tapping, the feruchemist becomes more real. If an attack or ability used by the feruchemist or against the feruchemist, the damage or effect is a percentage stronger, if applicable. Though there is no additional effect to those that cannot be made numerically stronger.',
			'The details of this effect can be confusing so a number clarifications have been including. Worn and held items that lack the ii/ghost touch/ii property are also affected, though, while storing substance, picking up objects has the same chance to succeed as any other ability. Interacting with held or worn objects or with yourself is also affected by the effects. Maintaining an interaction is not affected, such as continuing to hold or swinging a held object, but manipulating a held object with another hand or attempting to hit a creature with a weapon being swung is affected.',
			'Metalminds can be tapped and stored in regardless of the feruchemist\'s current realness. Abilities can also be similarly activated without issue even though they may not successfully affect any creatures or objects.'
		], // Description
		[
			'columns' => [
				'Numerical Multiplier',
				'Chance to Occur'
			],
			'rows' => [
				[
					'-4', // IncrSrch
					'0%',
					'0%'
				],
				[
					'-3', // IncrSrch
					'25%',
					'25%'
				],
				[
					'-2', // IncrSrch
					'50%',
					'50%'
				],
				[
					'-1', // IncrSrch
					'75%',
					'75%'
				],
				[
					'0', // IncrSrch
					'100%',
					'100%'
				],
				[
					'1', // IncrSrch
					'125%',
					'100%'
				],
				[
					'2', // IncrSrch
					'150%',
					'100%'
				],
				[
					'3', // IncrSrch
					'175%',
					'100%'
				],
				[
					'4', // IncrSrch
					'200%',
					'100%'
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'The feruchemist receives DR 5/Adamantine when tapping an increment of at least 1.',
				'draw' => 'The feruchemist is less real as though perpetually storing an increment of -1. The amount of investiture gained when storing is reduced by 1. The amount gained can be reduced to negatives, causing the feruchemist to lose investiture instead.'
			],
			30 => [
				'effect' => 'The feruchemist receives DR 10/Adamantine when tapping an increment of at least 2.',
				'draw' => 'The feruchemist is less real as though perpetually storing an increment of -2. The amount of investiture gained when storing is reduced by 2. The amount gained can be reduced to negatives, causing the feruchemist to lose investiture instead.'
			],
			60 => [
				'effect' => 'The feruchemist receives DR 15/Adamantine when tapping an increment of at least 3.',
				'draw' => 'The feruchemist is less real as though perpetually storing an increment of -3. The amount of investiture gained when storing is reduced by 3. The amount gained can be reduced to negatives, causing the feruchemist to lose investiture instead.'
			],
			100 => [
				'effect' => 'The feruchemist receives DR 20/Adamantine when tapping an increment of at least 4.',
				'draw' => 'The feruchemist is less real as though perpetually storing an increment of -4. The amount of investiture gained when storing is reduced by 4. The amount gained can be reduced to negatives, causing the feruchemist to lose investiture instead.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>