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
	advAlchemySimpleBlock(
		'Alchemist\'s Energy',// Name
		'Imbibed',
		[],// Descriptors
		0,// Level
		'2 hours',// Duration
		'Fortitude negates (harmless)',// Saving Throw
		[
			'You remain awake for 2 hours without feeling sleepy. You gain a +5 resistance bonus against sleep-related spells such as ii/lullaby/ii and ii/sleep/ii. This potion merely delays your need for sleep and does not count as rest or sleep. You can use it multiple times in succession, but as each effect wears off, you are as tired as you would be had you not drank the potion.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>