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
	magicItemBlockAuto(
		'Wainskarda',// Name
		'Necromancy',// School
		25,// CL
		'none',// Slot
		'—',// Price
		3,// Weight
		'The personal bow of The Dark Lord, enchanted by his hand to serve him in his eternal battle against his foes. This ancient-looking worn bow made has numerous runes that emit a crimson light that drips like blood. It is a ii/+10 called aa/corrupted|corrupted/aa heretical as/enchants_mc|Infinity|infinity/as composite longbow/ii made from as/special_materials_mc|Nether Fungus Hyphae|crimson hyphae/as. The bow is aligned against the Church of Zovilla and has a strength modifier of +5. Any arrow fired from this bow is fired at incredible speeds, piercing armor and denying all attempts to block or catch them. Attacks using this bow ignore armor bonuses to AC and are immune abilities that allow deflecting or catching projectiles. Arrows fired from this bow also deal 8d6 additional damage, half of which is fire damage and the other half results directly from unholy power and ignores all resistance and immunity. Additionally, any creature that takes at least 1 point of fire damage from the arrow is automatically lit of fire.',// Desc
		true,// Destruction
		'WIP'// Construction
	);
	require $startDir.'pageEnd.php';
?>