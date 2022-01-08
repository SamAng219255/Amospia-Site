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
?>
<?php
	magicItemBlockAuto(
		"Divining Sphere",
		"Divination",
		9,
		"Focus",
		"(+2) 22,500 gp, (+4) 45,000 gp, (+6) 67,500 gp",
		"—",
		"This smokey crystal sphere grants viewers occasional glimpses of far off places and times and individuals can spend hours entranced and trying to discern their meaning yet to know avail. When a divination spell is cast using this sphere, the images within align and grant creatures glimpses into what the spell reveals. This sphere acts as a casting focus and grants the caster a bonus to their caster level for divination spells cast.
		A ii/divining sphere/ii can be modified to function as a crystal ball in addition to its properties as a casting focus, costing as much as would to create a new crystal ball.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		Same as a crystal ball with any additional powers chosen."
	);
	require $startDir.'pageEnd.php';
?>