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
	magicItemBlockAuto(
		'Corrupted',// Name
		'Abjuration and Evocation [evil]',// School
		12,// CL
		'weapon quality',// Slot
		'+3 bonus',// Price
		'—',// Weight
		'A ii/corrupted/ii weapon was once a blessed holy weapon. The taint of evil has been corrupted it, however, and the weapon is now in all ways a unholy weapon, dealing an additional 2d6 points of damage against all creatures of good alignment. In addition, the wielder gains a profane bonus on saving throws equal to the weapon’s enhancement bonus against the spells and abilities of good outsiders and a +5 competence bonus on Knowledge (planes) checks to identify good outsiders and their special powers or vulnerabilities. When the ii/corrupted/ii weapon special ability is added to an holy weapon, the weapon loses the holy property and gains the ii/corrupted/ii property, and the crafter must pay the price of adding a +1 enhancement bonus to the weapon.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/desecrate/ii, ii/unholy blight/ii, creator must be good; Cost +3 bonus'// Construction
	);
	require $startDir.'pageEnd.php';
?>