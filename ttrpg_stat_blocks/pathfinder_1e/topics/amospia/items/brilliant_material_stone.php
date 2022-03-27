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
		'Brilliant Material Stone',// Name
		'Transmutation',// School
		9,// CL
		'none',// Slot
		'90,000 gp / 0x1563 I',// Price
		'—',// Weight
		'A ii/brilliant material stone/ii is composed entirely of a large, cut diamond worth 30,000 gp with various 3 dimensional runes of transmutation engraved into its interior.
		When casting a spell or creating a magic item or similar item with a material component, this stone may be drawn and used as an additional focus component in place of the material component. If the replaced component cost at least 1 gp, at least twice that cost must be supplied by carried diamonds and diamond dust. These diamonds do not have to be held in hand but must located on the caster\'s person, potentially within carried extra-dimensional spaces.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/greater creation/ii; Cost 60,000 gp / 0xE5B I'// Construction
	);
	require $startDir.'pageEnd.php';
?>