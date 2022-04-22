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
		'Composite War Bow',// $name,
		100,// $cost,
		3,// $weight,
		[
			'small' => '1d6',
			'medium' => '1d8'
		],// $damage,
		'x3',// $crit,
		110,// $range,
		'P',// $type,
		'—',// $special,
		'Ranged',// $category,
		'Martial',// $prof,
		'Bows',// $groups,
		'You need at least two hands to use a bow, regardless of its size. You can use a composite war bow while mounted. All composite bows are made with a particular strength rating (that is, each requires a minimum Strength modifier to use it with proficiency). If your Strength modifier is less than the strength rating of the composite bow, you can’t effectively use it, so you take a –2 penalty on attacks with it. The default composite war bow requires a Strength modifier of +0 or higher to use with proficiency. A composite war bow can be made with a high strength rating to take advantage of an aboveaverage Strength score; this feature allows you to add your Strength modifier on damage rolls, up to the maximum bonus indicated for the bow. Each point of Strength bonus granted by the bow adds 100 gp to its cost. If you have a negative modifier due to low Strength, apply it to damage rolls when you use a composite war bow. A composite war bow fires arrows.
		For the purposes of Weapon Proficiency and similar feats, a composite war bow is treated as if it were a war bow.'// $description 
	);
	require $startDir.'pageEnd.php';
?>