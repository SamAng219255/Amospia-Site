<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	block2(
		'Annort',
		'Material',
		'0+',
		[
			'Uncommon',
			'Precious'
		],
		[
			[],
			quick_array([
				'Annort is an alchemically created metal that disrupts the necromantic energies of undead and can be used to overcome many resistances of undead as well as better strike incorporeal undead.',
				'Annort weapons treat all undead as having a weakness to them. The exact amount of weakness varies based on the quality of the annort.',
				'Annort armor sickens undead that touch it. An undead that critically fails an unarmed attack against a creature in annort armor becomes sickened 1. An undead is sickened 1 as long as it wears annort armor.',
				'Annort shields don\'t typically have an additional effect, though when used for a shield bash, they are annort weapons.',
				'/ee/ bb/Annort Items/bb',
				sTable(
					[
						'Annort Items',
						'Hardness',
						'HP',
						'BT'
					],
					[
						[
							'bb/Thin Items/bb',
							'',
							'',
							'',
						],
						[
							'Low-Grade',
							'5',
							'20',
							'10'
						],
						[
							'Standard-Grade',
							'7',
							'28',
							'14'
						],
						[
							'High-Grade',
							'10',
							'40',
							'20'
						],
						[
							'bb/Items/bb',
							'',
							'',
							'',
						],
						[
							'Low-Grade',
							'9',
							'36',
							'18'
						],
						[
							'Standard-Grade',
							'11',
							'44',
							'22'
						],
						[
							'High-Grade',
							'14',
							'56',
							'28'
						],
						[
							'bb/Structure/bb',
							'',
							'',
							'',
						],
						[
							'Low-Grade',
							'18',
							'72',
							'36'
						],
						[
							'Standard-Grade',
							'22',
							'88',
							'44'
						],
						[
							'High-Grade',
							'28',
							'112',
							'56'
						]
					],
					true,
					false,
					false
				)
			])
		],
		false,
		[
			[
				'title' => 'Annort Chunk',
				'spaced' => false,
				'level' => 0,
				'texts' => quick_array([
					'bb/Price/bb 500 gp',
					'bb/Bulk/bb L'
				])
			],
			[
				'title' => 'Annort Ingot',
				'spaced' => false,
				'level' => 0,
				'texts' => quick_array([
					'bb/Price/bb 5,000 gp',
					'bb/Bulk/bb 1'
				])
			],
			[
				'title' => 'Annort Object (Low-Grade)',
				'spaced' => false,
				'level' => 3,
				'texts' => quick_array([
					'bb/Price/bb 25 gp (per bulk)'
				])
			],
			[
				'title' => 'Annort Object (Low-Grade)',
				'spaced' => false,
				'level' => 8,
				'texts' => quick_array([
					'bb/Price/bb 350 gp (per bulk)'
				])
			],
			[
				'title' => 'Annort Object (Low-Grade)',
				'spaced' => false,
				'level' => 18,
				'texts' => quick_array([
					'bb/Price/bb 6,000 gp (per bulk)'
				])
			],
			[
				'title' => 'Annort Weapon (Low-Grade)',
				'spaced' => false,
				'level' => 3,
				'texts' => quick_array([
					'bb/Price/bb 60 gp (+6 gp per bulk)',
					'bb/Craft Requirements/bb at least 30 gp of annort + 3 gp per Bulk',
					'<hr>',
					'Treat undead as having 5 weakness.'
				])
			],
			[
				'title' => 'Annort Weapon (Low-Grade)',
				'spaced' => false,
				'level' => 11,
				'texts' => quick_array([
					'bb/Price/bb 1,400 gp (+140 gp per bulk)',
					'bb/Craft Requirements/bb at least 700 gp of annort + 70 gp per Bulk',
					'<hr>',
					'Treat undead as having 10 weakness.'
				])
			],
			[
				'title' => 'Annort Weapon (Low-Grade)',
				'spaced' => false,
				'level' => 17,
				'texts' => quick_array([
					'bb/Price/bb 13,500 gp (+1,350 gp per bulk)',
					'bb/Craft Requirements/bb at least 6,750 gp of annort + 675 gp per Bulk',
					'<hr>',
					'Treat undead as having 15 weakness.'
				])
			],
			[
				'title' => 'Annort Armor (Low-Grade)',
				'spaced' => false,
				'level' => 5,
				'texts' => quick_array([
					'bb/Price/bb 200 gp (+20 gp per bulk)',
					'bb/Craft Requirements/bb at least 100 gp of annort + 10 gp per Bulk'
				])
			],
			[
				'title' => 'Annort Armor (Low-Grade)',
				'spaced' => false,
				'level' => 12,
				'texts' => quick_array([
					'bb/Price/bb 1,600 gp (+160 gp per bulk)',
					'bb/Craft Requirements/bb at least 800 gp of annort + 80 gp per Bulk'
				])
			],
			[
				'title' => 'Annort Armor (Low-Grade)',
				'spaced' => false,
				'level' => 19,
				'texts' => quick_array([
					'bb/Price/bb 32,000 gp (+3,200 gp per bulk)',
					'bb/Craft Requirements/bb at least 16,000 gp of annort + 1,600 gp per Bulk'
				])
			],
			[
				'title' => 'Annort Buckler (Low-Grade)',
				'spaced' => false,
				'level' => 3,
				'texts' => quick_array([
					'bb/Price/bb 40',
					'The shield has Hardness 3, HP 12, and BT 6.',
					'bb/Craft Requirements/bb at least 20 gp of annort'
				])
			],
			[
				'title' => 'Annort Buckler (Low-Grade)',
				'spaced' => false,
				'level' => 8,
				'texts' => quick_array([
					'bb/Price/bb 400',
					'The shield has Hardness 5, HP 20, and BT 10.',
					'bb/Craft Requirements/bb at least 200 gp of annort'
				])
			],
			[
				'title' => 'Annort Buckler (Low-Grade)',
				'spaced' => false,
				'level' => 16,
				'texts' => quick_array([
					'bb/Price/bb 8,000',
					'The shield has Hardness 8, HP 32, and BT 16.',
					'bb/Craft Requirements/bb at least 4,000 gp of annort'
				])
			],
			[
				'title' => 'Annort Shield (Low-Grade)',
				'spaced' => false,
				'level' => 3,
				'texts' => quick_array([
					'bb/Price/bb 44',
					'The shield has Hardness 5, HP 20, and BT 10.',
					'bb/Craft Requirements/bb at least 22 gp of annort'
				])
			],
			[
				'title' => 'Annort Shield (Low-Grade)',
				'spaced' => false,
				'level' => 8,
				'texts' => quick_array([
					'bb/Price/bb 440',
					'The shield has Hardness 7, HP 28, and BT 14.',
					'bb/Craft Requirements/bb at least 220 gp of annort'
				])
			],
			[
				'title' => 'Annort Shield (Low-Grade)',
				'spaced' => false,
				'level' => 16,
				'texts' => quick_array([
					'bb/Price/bb 8,800',
					'The shield has Hardness 10, HP 40, and BT 20.',
					'bb/Craft Requirements/bb at least 4,400 gp of annort'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>