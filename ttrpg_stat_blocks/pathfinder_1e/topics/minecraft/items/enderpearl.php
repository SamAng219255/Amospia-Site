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
<title>Ender Pearl</title>
<?php
	magicItemBlockAuto(
		"Ender Pearl",// Name
		"Conjuration",// School
		7,// CL
		"none",// SLot
		1400,// Price
		1,// Weight
		"This large pearl is slightly translucent revealing a blue-green color around its edges though the interior appears as black as a moonless night. This pearl can be thrown as a thrown weapon with an increment of 10 feet, though it deals no damage. If you hit an empty square with the pearl (AC 5), you are teleported to that square as dimension door. If you hit an object or occupied square with the pearl, you are teleported to the nearest empty square within 5 feet. This square can be above or below the target if there are no empty squares within 5 feet of the target, you are shunted to the nearest empty square and take 1d6 points of damage per 5 feet away from the target after the first 5 feet. If you successfully hit a creature, threaten that creature's square from your new position, and have the Dimensional Agility feat, you can make a single attack against that creature that counts as an attack of opportunity. 
		If an attack has a penalty due to cover and misses by less than equal to the cover penalty, it hits targeting the square the nearest applicable cover is in. If you target a creature and miss but your total attack roll after cover was at least 5, the pearl hits targeting the creature's square, otherwise it misses the creature's square. If the attack misses the square, the pearl lands a number of squares away in a random direction equal to number of range increments away the target square is plus 5 feet.",// Desc
		false,// Destruction
		"bb/Requirements/bb Craft Wondrous Item, ii/dimension door/ii; bb/Cost/bb 700 gp"// Construction
	);
	require $startDir.'pageEnd.php';
?>