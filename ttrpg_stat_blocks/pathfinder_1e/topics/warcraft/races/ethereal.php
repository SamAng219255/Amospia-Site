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
		'Ethereal',
		23,
		'Ethereals are a strange race from a dead world whose physical body has been transformed into pure arcane energy.',
		'Ethereals generally bind their bodies in arcane wrappings to give them a generic humanoid form. When outside these wrappings, ethereals take the form of a cloud of energy with barely distinct hands and head. Their head is tall and narrow with large curled horns on either side.',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'int' => 4,
			'dex' => 2,
			'con' => -4
		],
		'',
		[
			'bb/Native Outsider/bb: Ethereals are outsiders with the native subtype.',
			'bb/Medium/bb: Ethereals are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Ethereals have a base speed of 30 feet.',
			'bb/Darkvision/bb: Ethereals can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Arcane Focus/bb: Ethereals gain a +2 racial bonus on concentration checks made to cast arcane spells defensively.',
			'bb/Damage Reduction/bb: Ethereals gain DR 10/magic. This DR can also be overcome by any attack possessing the ghost touch property or a similar property. Unarmed and natural attacks by other ethereals also overcome this DR.',
			'bb/Resistant/bb: Ethereals gain a +2 racial bonus on saving throws against mind-affecting effects and poison.',
			'bb/Skill Bonuses/bb: Ethereals gain a +2 racial bonus to Appraise and Spellcraft checks.',
			'bb/Spell Resistance/bb: Ethereals gain spell resistance equal to 11 + their character level.',
			'bb/Languages/bb: Ethereals begin play speaking K\'areshi and Common. Ethereals with high Intelligence scores may know any language (other than secret languages).',
			'bb/Arcane Bindings/bb: Ethereals wear arcane wrappings that them a solid humanoid form. Without these bindings, they cannot hold, manipulate, or wear items that would not be able to overcome their DR as though they were incorporeal but they cannot pass through solid objects or fly. They can still cast spells without their bindings but cannot use material or focus components that they cannot hold.'
		],
		false,
		[
			[
				'Subraces',
				[
					'bb/Nexus-Stalker/bb',
					'/mm/Some ethereals have taken the route of seeking revenge for their world by embracing the void energies that took their world, micing them with their arcane energies to grant them power. These individuals are called nexus-stalkers. Nexus-stalkers specialize in the void and are some of reality\'s greatest experts.',
					'/mm/Nexus-stalkers gain the following traits replacing Skill Bonuses and Arcane Focus.',
					'/m2/bb/Void Expert/bb: Nexus-stalkers gain a +2 racial bonus to Spellcraft checks and to Knowledge (planes) and Knowledge (dungeoneering) checks related to the void and creatures of the void.',
					'/m2/bb/Void Focus/bb: Nexus-stalkers gain a +2 racial bonus on concentration checks made to cast void spells defensively.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>