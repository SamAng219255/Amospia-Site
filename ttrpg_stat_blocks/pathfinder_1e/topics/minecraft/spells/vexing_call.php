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
<title>Vexing Call</title>
<?php
	spellBlockAuto(
		'Vexing Call',// Name
		'conjuration (summoning)',// School
		[
			'evil'
		],// Descriptors
		[
			'adept' => 5,
			'antipaladin' => 5,
			'arcanist' => 5,
			'bard' => 5,
			'cleric' => 5,
			'oracle' => 5,
			'psychic' => 5,
			'skald' => 5,
			'sorcerer' => 5,
			'spiritualist' => 5,
			'warpriest' => 5,
			'witch' => 5,
			'wizard' => 5
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'F' => 2,
			'FNote' => 'a small candle made of beeswax with bonemeal mixed in'
		],// Components
		'1 round',// Casting Time
		'Close',// Range
		false,// Target
		'3 summoned vexes',// Effect
		false,// Area
		'1 round/level (D)',// Duration
		'none',// Save
		false,// SR
		[
			'This spell summons 3 vexes. They appear where you designate and act immediately, on your turn. They attack your opponents to the best of their ability. You can direct them not to attack, to attack particular enemies, or to perform other actions.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>