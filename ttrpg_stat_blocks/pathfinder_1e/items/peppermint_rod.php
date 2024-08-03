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
		'Peppermint Rod',
		'Evocation',
		1,
		'none',
		1000,
		'—',
		[
			'This rod is decorated with red and white stripes spiraling up the body. On command, it fires a bolt of red and white magic that spins leaving spiraling trails. This bolt can target a creature or object within 30 feet, requiring a ranged touch attack to hit. On a successful hit, it deals 1d2 cold damage and 1d2 fire damage.'
		],
		false,
		'bb/Requirements/bb Craft Rods; bb/Cost/bb 500 gp'
	);
	require $startDir.'pageEnd.php';
?>