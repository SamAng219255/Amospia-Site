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
		'Lancing-Spear',// $name,
		25,// $cost,
		6,// $weight,
		[
			'small' => '1d4',
			'medium' => '1d6'
		],// $damage,
		'x3',// $crit,
		'—',// $range,
		'P',// $type,
		'brace, reach, see text',// $special,
		'Two-Handed',// $category,
		'Martial',// $prof,
		'Polearms',// $groups,
		[
			'While this spear can be used from standing, it is primarily designed for attacks while running or charging. When making a charge attack using a lancing-spear, the damage increases by 1d6 for every 10 feet of movement the wielder has over 20 feet.',
			'The wielder can also make a special overrun charge attack using a lancing-spear. As a full-round action, the wielder can move up to twice their movement speed in a straight line, making overrun checks against any creatures in their path. Every space the wielder moves through (not including the space they started in or the one they ended in), the wielder can make a single attack against a creature ahead of the wielder in their path and within their reach. On a successful hit, the target takes damage as though the wielder had made a charge attack and the target and does not receive an attack of opportunity against the wielder for making their overrun check or for their movement. The wielder does not receive a bonus on their attack roll, but they do deal the increased damage from charging with a lancing-spear as well as any other ability the wielder possesses that affects the damage of a charge. Any attacks of opportunity the target has already made are unaffected, but they do not receive any additional attacks of opportunity against the wielder triggered by the remainder of this action.'
		]// $description 
	);
	require $startDir.'pageEnd.php';
?>