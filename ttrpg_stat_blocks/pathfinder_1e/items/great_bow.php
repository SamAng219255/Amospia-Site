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
		'Great Bow',// $name,
		150,// $cost,
		4,// $weight,
		[
			'small' => '1d8',
			'medium' => '1d10'
		],// $damage,
		'x3',// $crit,
		150,// $range,
		'P',// $type,
		'—',// $special,
		'Ranged',// $category,
		'Exotic',// $prof,
		'Bows',// $groups,
		[
			'A great bow possesses a thick body made of stiff wood and requires a great deal of strength to properly draw.',
			'Creatures with a strength score of less than 20 take a penalty to attack rolls on attacks made with a great bow. This penalty is equal to their strength score minus 20. Additionally, creatures add 1-1/2 their strength modifier to the damage dealt with a great bow to a maximum of +7 points of damage.'
		]// $description 
	);
	require $startDir.'pageEnd.php';
?>