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
	magicBuildingBlockAuto(
		'Mausoleum of Eternal Rest',// Name
		9,// CL
		['gp' => 90000],// Price
		[
			'This mausoleum has been enchanted with holy magic that allows it to protect the body of the interred creature from necromancy. Creatures inside the mausoleum cannot be raised or animated using necromancy. Undead creatures also cannot enter the mausoleum, teleport into the mausoleum, or cast spells that affect the inside of the mausoleum. ',
			'The interior of the mausoleum must fit within a 85-foot-diameter circle.'
		],// Desc
		false,// Destruction
		'bb/Requirements/bb Construct Magic Building, ii/consecrate/ii; bb/Cost/bb '.narmenPriceToStr(['gp' => 90000/2]),// Construction
		'Abjuration'// School (optional)
	);
	require $startDir.'pageEnd.php';
?>