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
	block(
		'Amplifying Lenses',
		'item',
		quick_array([
			'This large array of crystalline lenses is supported by a bronze frame. Any spell cast through the lenses becomes amplified and focused. Loading the lenses entails creatures capable of spellcasting infusing it with power and adding 1 charge with each action. These creatures must be high enough level to cast the spell being modified and must use the same tradition (arcane or divine) as the caster firing the lenses. Only damaging non-touch spells can be cast into the crystal and each crystal has a maximum spell level it can focus.',
			'When a set of lenses is fired, the spell cast through them has its range multiplied by 4 and is damage multiplied by 3, in addition to a critical multiplier is applicable. Additionally, damage from a set of ii/amplifying lenses/ii ignores hardness.',
			'Spell prisms all have a hardness of 10. 3rd level prisms have 50 hit points, 6th level prisms have 100 hit points, and 9th level prisms have 150 hit points.'
		])
	);
	table(
		[
			'Name',
			'Cost',
			'Fire Mode',
			'Size',
			'Dmg',
			'Critical',
			'Range',
			'Type',
			'Crew',
			'Aim',
			'Load',
			'Speed',
			'Weight'
		],
		[
			[
				'Amplifying Lenses, 3rd Level',
				'25,000 gp',
				'Direct',
				'Large',
				'varies',
				'19-20/x2',
				'varies',
				'varies',
				'2',
				'1',
				'3',
				'10 ft.',
				'22,000 lbs.'
			],
			[
				'Amplifying Lenses, 6th Level',
				'50,000 gp',
				'Direct',
				'Huge',
				'varies',
				'18-20/x2',
				'varies',
				'varies',
				'3',
				'1',
				'3',
				'0 ft.',
				'75,000 lbs.'
			],
			[
				'Amplifying Lenses, 9th Level',
				'130,000 gp',
				'Direct',
				'Gargantuan',
				'varies',
				'18-20/x3',
				'varies',
				'varies',
				'4',
				'1',
				'3',
				'0 ft.',
				'177,000 lbs.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>