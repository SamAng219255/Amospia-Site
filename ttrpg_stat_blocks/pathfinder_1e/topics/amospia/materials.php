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
		'Special Materials',
		'intro',
		[
			'Weapons and armor can be crafted using materials that have innate special properties. If you make a suit of armor or a weapon out of more than one special material, you get the benefit of only the most prevalent material. However, you can build a double weapon with each head made of a different special material.',
			'Each of the special materials described below has a definite game effect. Some creatures have damage reduction that makes them resistant to all but a special type of damage, such as that dealt by evil-aligned weapons or bludgeoning weapons. Others are vulnerable to weapons of a particular material. Characters may choose to carry several different types of weapons, depending upon the types of creatures they most commonly encounter.'
		],
		true
	);
	require $startDir.'pageEnd.php';
?>