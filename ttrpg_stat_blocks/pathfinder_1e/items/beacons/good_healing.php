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
		'Beacon of Celestial Healing',
		'Conjuration',
		1,
		'none',
		2000,
		'—',
		[
			'While active, all creatures within a 30-foot-radius burst receive fast healing 1 though this cannot repair damage caused by evil-aligned weapons, or spells or effects with the evil descriptor. This area is also filled with a faint aura of good. If creatures, objects, or areas within the area have their own evil aura, this is not suppressed by this effect, and can also be detected normally.',
			'A ii/beacon of celestial healing/ii can only be activated by an outsider with the good subtype or a creature descendent from one one, such as an aasimar.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/celestial healing/ii; bb/Cost/bb 2,000 gp'
	);
	require $startDir.'pageEnd.php';
?>