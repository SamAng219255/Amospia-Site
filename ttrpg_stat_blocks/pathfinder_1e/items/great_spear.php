<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	weaponBlockAuto(
		'Great Spear',// $name,
		20,// $cost,
		18,// $weight,
		[
			'small' => '1d8',
			'medium' => '1d10'
		],// $damage,
		'x3',// $crit,
		'—',// $range,
		'P',// $type,
		'brace, reach',// $special,
		'Two-Handed',// $category,
		'Exotic',// $prof,
		'Spears',// $groups,
		[
			'A great spear is a particularly long and thick shafted spear that is difficult to handle without proper training.'
		]// $description 
	);
	require $startDir.'pageEnd.php';
?>