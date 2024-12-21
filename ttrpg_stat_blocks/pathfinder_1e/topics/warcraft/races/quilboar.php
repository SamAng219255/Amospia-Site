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
	raceBlockAuto(
		'Quilboar',
		10,
		'bb/Table: Random Height and Weight/bb'.sTable(
			[
				'Base Height',
				'Height Modifier'
			],
			[
				[
					'4\'',
					'+1d12 in.<br>(4\' 1" - 5\')'
				]
			],
			true,
			false
		),
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 2,
			'con' => 2,
			'cha' => -2
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Quilboar are monstrous humanoid creatures with the quilboar subtype.',
			'bb/Medium/bb: Quilboar are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Quilboar have a base speed of 30 feet.',
			'bb/Darkvision/bb: Quilboar can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Natural Armor/bb: Quilboar gain a +1 natural armor bonus to their AC.',
			'bb/Quills/bb: Quilboar receive a quill attack. This is a primary natural attack that deals 1d6 points of piercing damage.',
			'bb/Sprinter/bb: Quilboar gain a +10 foot racial bonus to their speed when using the charge, run, or withdraw actions.',
			'bb/Thorn Magic/bb: Quilboar with the thorn domain (either the thorn subdomain of the cleric plant domain or the feral druid thorn domain) use their domain powers and spells at +1 caster level. This trait does not give members of this race early access to level-based powers; it only affects powers that they could already use without this trait. Quilboar also cast all other divine spells that create thorns at +1 caster level.',
			'bb/Languages/bb: Quilboar begin play speaking Quilboar. Quilboar with high Intelligence scores can choose from Centaur, Common, Orcish, and Tauren.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>