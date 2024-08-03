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
	magicItemBlockAuto(
		'Beacon of Fiendish Healing',
		'Conjuration',
		1,
		'none',
		2000,
		'—',
		[
			'While active, all creatures within a 30-foot-radius burst receive fast healing 1 though this cannot repair damage caused by silver weapons, good-aligned weapons, or spells or effects with the good descriptor. This area is also filled with a faint aura of evil. If creatures, objects, or areas within the area have their own good aura, this is not suppressed by this effect, and can also be detected normally.',
			'A ii/beacon of fiendish healing/ii can only be activated by an outsider with the evil subtype or a creature descendent from one one, such as an tiefling.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/infernal healing/ii; bb/Cost/bb 2,000 gp'
	);
	require $startDir.'pageEnd.php';
?>