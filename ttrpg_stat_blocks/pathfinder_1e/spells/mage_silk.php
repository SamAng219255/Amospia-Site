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
		'Mage Silk',// Name
		'Conjuration (creation)',// School
		[
			'force'
		],// Descriptors
		[
			'arcanist' => 0,
			'bloodrager' => 0,
			'occultist' => 0,
			'psychic' => 0,
			'sorcerer' => 0,
			'spiritualist' => 0,
			'summoner' => 0,
			'summoner (unchained)' => 0,
			'witch' => 0,
			'wizard' => 0 
		],// Levels
		[
			'V' => 1,
			'S' => 1
		],// Components
		'1 standard action',// Casting Time
		'0 feet',// Range
		false,// Target
		'1 article of clothing',// Effect
		false,// Area
		'1 hour/level;  see text',// Duration
		'none',// Save
		'no',// SR
		[
			'This spell conjures an article of clothing made from a thin, flexible, opaque sheet of force. The conjured clothing can be no larger than Medium size but can be any size smaller. The clothing can take any shape or coloration though creating specific clothing may require a specific check. (Such as a disguise check to replicate a specific individual\'s clothing, a Craft (clothing) check for detailed or noble looking dress, or a Survival check to provide cold weather clothing.)',
			'Despite being a force effect, the conjured clothing offers no protection from attacks, including those from incorporeal creatures, due to its weak and thin nature. ',
			'This spell can also be cast on an existing piece of mage silk to renew its duration, taking the duration of the new casting from that point if the spell has less time remaining.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>