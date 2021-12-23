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
?>
<title>Evoker's Fangs</title>
<?php
	spellBlockAuto(
		'Evoker\'s Fangs',// Name
		'conjuration (summoning)',// School
		[],// Descriptors
		[
			'adept' => 3,
			'antipaladin' => 3,
			'arcanist' => 3,
			'cleric' => 3,
			'oracle' => 3,
			'psychic' => 3,
			'sorcerer' => 3,
			'spiritualist' => 3,
			'warpriest' => 3,
			'witch' => 3,
			'wizard' => 3
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'F' => 2,
			'FNote' => 'a handful of crocodile teeth'
		],// Components
		'1 standard action',// Casting Time
		'60 ft. of 10 ft. [See Text]',// Range
		false,// Target
		'A row or two circles of snapping jaws of force',// Effect
		'60 ft. line or 10 ft. spread [See Text]',// Area
		'instantaneous',// Duration
		'Reflex half',// Save
		true,// SR
		[
			'You summon long snapping jaws made of force from the ground. When casting, you choose whether to cast this spell offensively or defensively. Either way, the jaws appear in a number of squares and any creatures in those squares, whose race does not exactly match your own, take 1d6 points of force damage per caster level. An illager casting this spell won\'t hurt illagers but will hurt Knoms, a half-orc\'s spell wouldn\'t hurt other half-orcs but would hurt both humans and orcs, and an elf\'s spell wouldn\'t hurt other surface elves but would hurt half elves and drow.',
			'ii/Offensive/ii The jaws form occupying every square in a 60 ft. line extending from your square.',
			'ii/Defensive/ii The jaws form in two concentric circles that occupy every square 5 or 10 feet from you.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>