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
		'Antidote',// Name
		'Imbibed',
		[
			'healing'
		],// Descriptors
		3,// Level
		'instantaneous',// Duration
		'Fortitude negates (harmless)',// Saving Throw
		[
			'Generally stored in a glass vial, this ii/antidote/ii is specially formulated to flush out any type of toxin afflicting the drinker. In order to counteract each toxin, you must make an alchemy level check (1d20 + caster level) against the DC of each poison affecting the target. Success means that the poison is neutralized. A cured creature suffers no additional effects from the poison, and any temporary effects are ended, but the ii/antidote/ii does not reverse instantaneous effects, such as hit point damage, temporary ability damage, or effects that don’t go away on their own.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>