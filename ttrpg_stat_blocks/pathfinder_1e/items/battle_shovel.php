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
		'Battle Shovel',// $name,
		10,// $cost,
		18,// $weight,
		[
			'small' => '1d6',
			'medium' => '1d8'
		],// $damage,
		'x3',// $crit,
		'—',// $range,
		'B or S',// $type,
		'brace, reach',// $special,
		'Two-Handed',// $category,
		'Exotic',// $prof,
		'Axes',// $groups,
		[
			'A battle shovel is an unusual weapon. In most regards it\'s shaped and can be used like any other shovel. Where it differs is the additional reinforcing of the handle, the sturdiness of the head, and the sharpening of the edges. Together, these make the battle shovel a formidable, if unusual, weapon.'
		]// $description 
	);
	require $startDir.'pageEnd.php';
?>