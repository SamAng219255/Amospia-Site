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
		'Brighter Light',// Name
		'Evocation',// School
		[
			'light'
		],// Descriptors
		[
			'adept' => 3,
			'antipaladin' => 3,
			'cleric' => 3,
			'inquisitor' => 3,
			'occultist' => 3,
			'oracle' => 3,
			'paladin' => 3,
			'shaman' => 3,
			'warpriest' => 3 
		],// Levels
		[
			'V' => 1,
			'M' => 2,
			'MNote' => 'dove feathers and a piece of chalk'
		],// Components
		'1 standard action',// Casting Time
		'Touch',// Range
		'object touched',// Target
		false,// Effect
		false,// Area
		'10 min./level (D)',// Duration
		'none',// Save
		'no',// SR
		[
			'This spell functions as ii/deeper darkness/ii, except that objects radiate light in a 60-foot radius and the light level is raised by two steps. Darkness becomes normal light and dim light becomes bright light. Areas of normal light and bright light become aa/blinding_light|blindingly bright/aa.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>