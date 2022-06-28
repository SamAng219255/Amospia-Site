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
		'Bow of the Hopeful Soul',// Name
		'Evocation',// School
		15,// CL
		'none',// Slot
		88000,// Price
		2,// Weight
		'This smooth thin piece of pearly white wood is shaped like the body of a strung bow but bares no string. If a creature attempts to draw the non-existent string, they must make a DC 15 aa/hope_checks|hope check/aa. If they succeed, a barely visible string of white energy forms along with a similar arrow. For every three by which they beat the DC, the conjured arrow receives a stacking +1 enhancement bonus to a maximum of +5. This weapon is otherwise considered a aa/warbow|war bow/aa.',// Desc
		false,// isArtifact
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/abundant ammunition/ii, ii/magic weapon/ii; bb/Special/bb creator must have at least 10 levels in a divine class in which they worship a god of faith or luck; bb/Cost/bb 44,000 gp'// Construction/Destruction
	);
	require $startDir.'pageEnd.php';
?>