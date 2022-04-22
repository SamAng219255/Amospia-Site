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
		'War Bow',// $name,
		75,// $cost,
		3,// $weight,
		[
			'small' => '1d6',
			'medium' => '1d8'
		],// $damage,
		'x3',// $crit,
		100,// $range,
		'P',// $type,
		'—',// $special,
		'Ranged',// $category,
		'Martial',// $prof,
		'Bows',// $groups,
		'A war bow is a common type of bow found in large armies, hence the name, with a draw weight similar to that of the longbow. While longbows generally derive their heavy draw weights from their long arms, war bows derive it from things such as harder woods or more advanced materials or specifically shaped arms, such as in the case of recurve bows. A war bow can’t be used while mounted. If you have a penalty for low Strength, apply it to damage rolls when you use a war bow. You can apply your Strength modifier to damage rolls when you use a composite war bow, but not a regular war bow. A war bow fires arrows.'// $description 
	);
	require $startDir.'pageEnd.php';
?>