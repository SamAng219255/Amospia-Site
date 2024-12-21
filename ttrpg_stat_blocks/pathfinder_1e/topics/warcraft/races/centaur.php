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
		'Centaur',
		16,
		[
			'The strangest thing, possibly, about centaur are that there are, in truth, two entirely distinct and unrelated species known as centaur whose appearance and capabilities are nearly idnetical. So close, in fact, that they cannot be justifiably divided based on ability and description alone in most cases.',
			'The centaur of Kalimdor are descended from a forbidden union of Zaetar, son of the Wild God Cenarius, and Princess Theradras, daughter of the Earth Elemental Lord Therazane. They are generally described as a brutish and angry people.',
			'The centaur of the Ohn\'ahran Plains, now known as Maruuk Centaur, are descended from a more ancient people whose origin is ultimately unknown but predates the birth of the Kalimdor Centaur by over 9,000 years though their entire surviviing race has been isolated on the Dragon Isles for over 10,000 years. They are a largely peaceful people but who have built equal strrength and cunning through hunting great beasts.',
			'The two peoples have never had the opportunity to meet across their histories.'
		],
		'All centaur have the body of horse but, where one would expect the neck to be, is a humanoid body begining from the torso. Kalimdor Centaur have bodies covered in unhealthy bony protrusions and growth that makes their bodies appear grotesque to outsiders. They also tend to emit a stench that drives outsiders away and their faces are generally considered as poor in appearance as the rest of their bodies.
		Maruuk Centaur, on the other hand, have softer appearances, with humanoid bodies that could be mistaken for a human in most cases though, while their features are softer than the Kalimdor Centaur, they are harder than most humanoid races. Maruuk Centaur also have taller and pointier ears than most races, though not nearly as long as elves. Their ears almost resemble a horse\'s ears in shape and size.',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 4,
			'int' => -2,
			'wis' => -2,
			'cha' => -2
		],
		'Centaur are highly dextrous for their size though they generally lack the same mental abilities as some other races. (See Large.)',
		[
			'bb/Monstrous Humanoid/bb: Centaur are monstrous humanoid creatures with the centaur subtype.',
			'bb/Large/bb: Centaur are Large creatures and gain a -1 size penalty to their AC, a -1 size penalty on attack rolls, a +1 size bonus on combat maneuver checks and to their Combat Maneuver Defense, and a -4 size penalty on Stealth checks. bb/Centaur also receive a +2 size bonus to Strength and -2 size penalty to Dexterity./bb These are permanent and stack with the centaur\'s other racial ability score adjustments but are lost while polymorphed. Centaur occupy a 10-foot area.',
			'bb/Swift/bb: Centaur have a base speed of 50 feet.',
			'bb/Darkvision/bb: Centaur can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Air Affinity/bb: If a centaur is a sorcerer with the air elemental bloodline, they treat their Charisma score as 2 points higher for all sorcerer spells and class abilities. Furthermore, a centaur able to cast air domain spells casts their domain powers and spells at +1 caster level. This trait does not give centaur early access to level-based powers; it only affects powers that they could already use without this trait.',
			'bb/Quadruped/bb: Centaur possess four legs and two arms, granting them a +4 racial bonus to CMD against trip attempts. In addition, centaur use weapons and armor as if they were Medium (instead of Large).',
			'bb/Weapon Familiarity/bb: Centaur are proficient with bows and spears.',
			'bb/Languages/bb: Centaur begin play speaking Centaur. Centaur with high Intelligence scores can choose from Common, Orcish, Kalimag, Quilboar, and either Taur-Ahe or Draconic. (Kalimdor centaur may choose Taur-Ahe while Maruuk centaur may choose Draconic.)'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Wiseman / Wisewoman/bb',
					'/mm/Some of the centaur, such as many of their shamans including those of clan Ohn\'ir, are much wiser than other centaur though not quite as capable at physical pursuits. Among the Kalimdor Centaur, this is significantly more common among the women than the men though, among the Maruuk Centaur, it is decently common between both sexes.',
					'/mm/Your racial ability score adjustments change to -2 Strength, +2 Dexterity, +2 Wisdom',
					'/mm/This replaces ability score adjustments.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>