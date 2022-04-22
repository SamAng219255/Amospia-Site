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
	block(
		'Hope Checks',
		'rule',
		quick_array([
			'Hope checks are a mechanic used to represent a character\'s ability to hope for things. In most ways it is equivalent to making a will save vs a fear effect and can be treated as such, receiving all of the corresponding bonuses and penalties and being affected by all the corresponding abilities with the exception of abilities that grant immunity to fear. Additionally, characters who worship good aligned gods with a theme of faith or gods of luck, follow philosophies of faith and trust, or actively have a hopeful demeanor or that trust that solutions will simply arise as needed receive a bonus to hope checks while those who worship gods with a theme of fate or gods of the natural order of things, follow philosophies of fate or inevitability, or who express a pessimistic demeanor or that act with a feeling of inevitability receive penalties.',
			'Worshipers of good aligned gods with a theme of faith may add their number of levels in divine classes (such as cleric and paladin) and half their number of hit dice not resulting from those classes to their roll, worshippers of gods of luck may roll hope checks twice and take the better result, and those who follow philosophies of faith and trust or actively have a hopeful demeanor or that trust that solutions will simply arise as needed receive a bonus on hope checks equal to one third their number of hit dice.',
			'Worshipers of gods with a theme of fate or gods of the natural order of things must roll hope checks twice and take the worse result and those who follow philosophies of fate or inevitability, who express a pessimistic demeanor, or that act with a feeling of inevitability take a -5 penalty on hope checks.'
		])
	);
	require $startDir.'pageEnd.php';
?>