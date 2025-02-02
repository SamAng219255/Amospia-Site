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
		[
			'ii/Wainskarda/ii is the personal bow of The Dark One which has been enchanted by his own hand to serve him in his eternal battle against his foes. This ancient-looking worn bow has numerous runes that emit a softly glowing crimson energy that drips like blood. It is a ii/+10 called aa/corrupted_enchant|corrupted/aa heretical as/enchants_mc|Infinity|infinity/as composite longbow/ii made from as/special_materials_mc|Nether Fungus Hyphae|crimson hyphae/as. The bow is attuned to the Church of Zovilla. The bow is designed to be magically adaptable so that the wielder may add their Strength modifier to the damage regardless of how high or low it is without taking a penalty on their attack roll.',
			'Any arrow fired from this bow is fired at incredible speeds, piercing armor and denying all attempts to block or catch them. Attacks using this bow ignore armor, shield, and natural armor bonuses to AC and are immune to abilities that allow deflecting or catching projectiles. Arrows fired from this bow deal 3d4 piercing damage plus an additional 8d6 damage, half of which is fire damage and the other half results directly from unholy power and ignores all resistance and immunity. Additionally, any creature that takes at least 1 point of fire damage from the arrow is automatically lit on fire.'
		],// Desc
		true,// Destruction
		'If a cleric of Zovilla casts an ii/atonement/ii spell of at least 20th caster level on ii/Wainskarda/ii whilst it is being held by a paladin of Zovilla, it will transform into its original form which is weaker than its current form. When transformed, the bow\'s enhancement bonus is reduced to +5 and it loses the ii/called/ii, ii/corrupted/ii, and ii/heretical/ii properties and gains the ii/holy/ii and ii/fervent/ii properties. It remains attuned to the Church of Zovilla. It also loses the additional energy damage though it retains its other properties. In this form the bow is no longer an artifact and can be destroyed as normal though it is a powerful magic item worth 250,000 gp. If The Dark One retrieves the bow in this form it returns to its artifact form.'// Construction
	);
	require $startDir.'pageEnd.php';
?>