<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	spellBlockAuto(
		'Flickering Lights',// Name
		'Evocation',// School
		[
			'darkness',
			'light'
		],// Descriptors
		[
			'arcanist' => 2,
			'bard' => 2,
			'cleric' => 2,
			'inquisitor' => 2,
			'magus' => 2,
			'occultist' => 2,
			'oracle' => 2,
			'shaman' => 2,
			'skald' => 2,
			'sorcerer' => 2,
			'warpriest' => 2,
			'wizard' => 2 
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'M' => 1,
			'MNote' => 'a patch of white cloth and a patch of black cloth'
		],// Components
		'1 round',// Casting Time
		'Medium',// Range
		false,// Target
		false,// Effect
		'contiguous area consisting of one 10-foot cube/level (S)',// Area
		'1 round/level',// Duration
		'Will negates',// Save
		'yes',// SR
		[
			'You cause the illumination in the area to seem to flicker erratically, fluctuating between absolute darkness and blinding brightness. The level of light in the area changes at the start of each creature’s turn, as determined by rolling a percentile die and consulting the following table.',
			sTable(
				[
					'd%',
					'Illumination Level'
				],
				[
					[
						'01-10',
						'Supernatural darkness'
					],
					[
						'11-25',
						'Darkness'
					],
					[
						'26-50',
						'Dim light'
					],
					[
						'51-75',
						'Normal light'
					],
					[
						'76-90',
						'Bright light'
					],
					[
						'91-00',
						'aa/blinding_light|Blinding light/aa'
					]
				],
				true,
				false
			),
			'Even darkvision can’t see through supernatural darkness (as deeper darkness). Bright light affects creatures with light blindness or light sensitivity. For the purpose of superseding its effects with higher-level light or darkness spells, flickering lights counts as a light spell when it increases the ambient light level and a darkness spell when it decreases the ambient light level.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>