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
<title>Illusory Darkness</title>
<?php
	spellBlockAuto(
		'Illusory Darkness',// Name
		'illusion (phantasm)',// School
		[
			'darkness'
		],// Descriptors
		[
			'antipaladin' => 5,
			'bard' => 5,
			'bloodrager' => 5,
			'cleric' => 6,
			'oracle' => 6,
			'psychic' => 5,
			'shaman' => 6,
			'sorcerer' => 5,
			'witch' => 5,
			'wizard' => 5 
		],// Levels
		[
			'V' => 1,
			'S' => 1
		],// Components
		'1 standard action',// Casting Time
		'Close',// Range
		'1 living creature per level wihtin range',// Target
		false,// Effect
		false,// Area
		'1 round/level',// Duration
		'Will partial',// Save
		true,// SR
		[
			'Affected creatures have all of their senses obscured by what appears to be a dark fog.',
			'While using a precise sense such as sight or blindsight, a creature 5 feet away has concealment (attacks have a 20% miss chance). Creatures farther away have total concealment (50% miss chance, and the attacker cannot use their senses to locate the target). Creatures that made their save are able to see through the darkness to some extent. Creatures 5 feet away are not concealed by this spell and creatures farther than 5 feet gain concealment instead of total concealment.',
			'Imprecise senses such as blindsense or tremorsense cannot detect creatures farther than 5 feet away whether or not the save was made.',
			'This affects all senses including darkvision, see in darkness, tremorsense, blindsense, blindsight, lifesense, and scent, though true sight negates the effects for visual senses.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>