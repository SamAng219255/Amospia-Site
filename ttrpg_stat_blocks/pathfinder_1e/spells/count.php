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
		'Count',// Name
		'Divination',// School
		[],// Descriptors
		[
			'adept' => 0,
			'arcanist' => 0,
			'bard' => 0,
			'cleric' => 0,
			'druid' => 0,
			'hunter' => 0,
			'inquisitor' => 0,
			'magus' => 0,
			'medium' => 0,
			'mesmerist' => 0,
			'occultist' => 0,
			'oracle' => 0,
			'psychic' => 0,
			'shaman' => 0,
			'skald' => 0,
			'sorcerer' => 0,
			'spiritualist' => 0,
			'summoner' => 0,
			'summoner (unchained)' => 0,
			'warpriest' => 0,
			'witch' => 0,
			'wizard' => 0
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'F' => 1,
			'FNote' => 'a miniature abacus'
		],// Components
		'1 swift action, 1 full-round action, 1 minute, or 10 minutes; see text',// Casting Time
		'Long',// Range
		'a single type of item or creature within range or a single collection of roughly similar items or creatures',// Target
		false,// Effect
		false,// Area
		'instantaneous',// Duration
		'none',// Save
		'no',// SR
		[
			'Your magic aids you in acquiring an exact count of items or creatures. You may name a particular type of item you are attempting to count in the area. In which case, you gain an instant count of the number of such items or creatures in the range that you are aware of. This does not include items or creatures that you cannot see or are otherwise unware of and does include items or creatures you reasonably assume are present even if they don\'t exist.',
			'The type of item or creature you name can be as specific or general as you like—“dented copper coins” is as viable as “coins”—but items are distinguished so far as you are aware and any mistake you make is transferred to the spell\'s count.',
			'Alternatively, you may choose a single collection of items or creatures (such as a pile, display, crowd, or army). If you do, you gain a count of how many items or creatures are in that collection. This only includes items within range and regions of the collection you are aware of and will include a false amount of items from regions of the collection you believe to exist.',
			'If you spend 1 full-round action or 10 minutes casting this spell, you also learn the counts of various sub-categories of the items counted. (such as counting the number of archers, swordsmen, and calvary in an army you\'re counting)',
			'If you cast this spell as a swift or full-round action, the maximum number of objects this spell can count is 1,000. If you instead spend 1 minute or 10 minutes casting this spell, the maximum number of objects this spell can count is 1,000,000. If there are more items or creatures than the maximum, you are aware there are more than the maximum but not the exact number.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>