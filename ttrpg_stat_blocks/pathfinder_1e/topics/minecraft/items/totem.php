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
?>
<title>Totem Of Undying</title>
<?php
	magicItemBlockAuto(
		"Totem Of Undying",// Name
		"Necromancy",// School
		20,// CL
		"none",// SLot
		15000,// Price
		"—",// Weight
		"This small totem resembles a humanoid creature with a pair of wings added. The eyes have been replaced with precious stones. If a creature is holding this totem in at least one hand or other grasping appendage when taking normally fatal damage, the totem will activate saving them from death. When it activates, it restores the creature to 1 hit point and grants them fast healing equal to their number of hit dice for 6 rounds, a number of temporary hit points equal to 2 times their number of hit dice that last for 3 rounds, and resistance 30 to acid, cold, electricity, fire, and sonic damage for 1 minute.",// Desc
		false,// Destruction
		"bb/Requirements/bb Craft Wondrous Item, ii/breath of life/ii, ii/false life, greater/ii, ii/infernal healing, greater/ii, ii/resist energy/ii; bb/Cost/bb 7,500 gp
		bb/Alternate Requirements/bb Craft Wondrous Item, the soul of an intelligent creature; bb/Cost/bb 5,000 gp"// Construction
	);
	require $startDir.'pageEnd.php';
?>