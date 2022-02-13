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
		'Spell Prisms',
		'item',
		quick_array([
			'This large crystal is shaped into a octagonal prism with octagonal pyramids on either end pointing up and down. Any spell cast into this crystal while charged exits as numerous weaker copies that can hit many different copies. Loading the crystal entails creatures capable of spellcasting infusing it with power and adding a number of charges with each action equal to their caster level. These creatures must be high enough level to cast the spell being modified and must use the same tradition (arcane or divine) as the caster firing the crystal. Only damaging non-touch spells can be cast into the crystal and each crystal has a maximum spell level it can multiply.',
			'When a prism is used, it fires a number of copies of the spell equal to its number of charges except each spell is cast with a caster level of 1 regardless of the level of the spell or the caster. These copies can only target targets in a cone in front of the prism. The size of this cone is equal the range of the spell cast.',
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
				'Spell Prism, 3rd Level',
				'39,000 gp',
				'Direct',
				'Large',
				'varies',
				'x2',
				'varies',
				'varies',
				'1',
				'2',
				'4',
				'10 ft.',
				'12,000 lbs.'
			],
			[
				'Spell Prism, 6th Level',
				'94,500 gp',
				'Direct',
				'Huge',
				'varies',
				'x3',
				'varies',
				'varies',
				'3',
				'2',
				'5',
				'10 ft.',
				'40,000 lbs.'
			],
			[
				'Spell Prism, 9th Level',
				'168,000 gp',
				'Direct',
				'Gargantuan',
				'varies',
				'x4',
				'varies',
				'varies',
				'1',
				'2',
				'6',
				'0 ft.',
				'149,000 lbs.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>