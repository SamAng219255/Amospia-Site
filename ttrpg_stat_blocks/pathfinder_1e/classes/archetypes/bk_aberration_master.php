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
	block(
		'Aberrant Master',
		'archetype',
		quick_array([
			[
				'text' => 'bb/Aberrant Hides/bb: Aberrant masters can skin aberrations and afix their hides to their armor as other beast knights can with animals and magical beasts. Aberrant masters must wear the hide of an aberration to gain the benefits of Might of the Beast. This ability alters Beast Skins and Might of the Beast.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Aberrant Forms/bb: Starting at 4th level, the aberrant master take the form of an aberration whose hide they wear instead of that of animals of magical beasts. This functions as ii/ as/aberrant_form|Aberrant Form I|aberrant form I/as /ii.',
				'spacing' => 0b1001
			],
			'Starting at 6th level, they may take the form of the aberration whose hide they wear as ii/ as/aberrant_form|Aberrant Form II|aberrant form II/as /ii.',
			'Starting at 8th level, they may take the form of the aberration whose hide they wear as ii/ as/aberrant_form|Aberrant Form III|aberrant form III/as /ii.',
			'Starting at 10th level, they may take the form of the aberration whose hide they wear as ii/ as/aberrant_form|Aberrant Form IV|aberrant form IV/as /ii.',
			'This ability alters Beast Hide Transformation.',
			[
				'text' => 'bb/Many Arms (Su)/bb: Starting at 5th level, an aberrant master can manifest additional copies of arms, tentacles, mouths, and other body parts while transformed. At 5th level, the aberrant master is able to choose a single natural weapon when they transform. They gain an additional natural weapon whose base stats identical to the chosen weapon. Every odd numbered level after 5th (7th, 9th, 11th, etc.), the aberrant master can choose an additional natural weapon to receive a copy of. They may choose the same weapon multiple times when doing so.',
				'spacing' => 0b1001
			],
			'The aberrant master\'s natural also count as magic weapons. At 9th level, they ignore DR/cold iron and DR/silver. At 12th level, they ignore DR/adamantine. Lastly, at 15th level they ignore DR matching either component of the the aberrant master\'s alignment. This ability replaces Steel Claws.',
			[
				'text' => 'bb/Alien Dragons/bb: Starting at 12th level, an aberrant master can wear and gain the strength of certain alien dragons as well. The aberrant master can skin the hide of esoteric and outer dragons as well as they can those of aberrations. They also gain the effects of Might of the Beast while wearing an esoteric or outer dragon\'s hide. They can also use Beast Hide Transformation to take the form of a dragon matching the one whose hide they wear. When taking the form of a dragon, they do so as ii/form of the alien dragon I/ii. This ability replaces Draconic Skins.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Maddening Form (Ex)/bb: Upon reaching 20th level, the aberrant master\'s forms become truly maddening to behold. Whenever the aberrant master successfully hits a target with a natural attack wile transformed, the target must make a Fortitude save or suffer a number of points of wisdom drain equal to twice their wisdom score, renderring them incapable of rational thought and unconscious. Whether or not the target makes the save, they are immune to this effect from the aberrant master for the 24 hours. This is a mind-affecting effect. This ability replaces Savage Strike.',
				'spacing' => 0b1001
			]
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>