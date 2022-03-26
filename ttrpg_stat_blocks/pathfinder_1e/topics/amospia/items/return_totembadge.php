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
		'Return Badge/Totem',// Name
		'Conjuration',// School
		11,// CL
		'none',// SLot
		'104,000 gp (Totem), 1,625 gp (Badge)',// Price
		'1,500 lbs. (Totem), — (Badge)',// Weight
		'The totem is a 7 foot tall wooden pole that is covered in rings of purple glowing runes that go around its circumference at various angles. The runes are made of purpur and are set in rings of polished and enchanted iron protruding a short distance from the pole. A large pair of angelic wings made of shimmering prismarine crystal extend from either side of the pole. The pole itself has been carved and painted to give the appearance of a large snake winding around the pole going under the iron rings with its head located on top of the pole. The badge can take a wide variety of shapes making it impossible to identify on sight alone. Common appearances include a crest, a badge signifying rank, a religious symbol, or the image of an angel or snake.
		ii/Return Badges/ii can be attuned to any ii/Return Totem/ii. The badges can be activated as a standard action to cast ii/breath of life/ii on the wearer and transport the wearer back to the attuned totem, destroying the badge in the process. This is a purely mental action that does not provoke an attack of opportunity. The badge will also activate itself automatically upon the wearer taking fatal damage, dying for any other reason, or remaining unconscious due to hit point loss for at least 5 rounds. The badge can also be activated as an immediate action upon falling unconscious.
		When activated, the badge will teleport the wearer to the attuned totem so long as it is less than 55 miles away, placing them in the nearest empty space not in immediate danger within 60 feet. If there is no such space or if the totem is farther than 55 miles away, it will teleport the caster to the nearest totem within 110 miles with available space around it. If no such totem can be found, they are transported to the nearest totem with available space around it within 1,100 miles. If successful on this last attempt, the healing granted by ii/breath of life/ii is reduced by half. If there are no totems in range with available space the wearer is teleported in a random direction to the farthest empty space not in immediate danger within 55 miles.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/breath of life/ii, ii/teleport/ii; bb/Cost/bb 52,000 gp (Totem), 812 gp (Badge)'// Construction
	);
	magicItemBlockAuto(
		'Simple Return Badge',// Name
		'Conjuration',// School
		11,// CL
		'none',// SLot
		1300,// Price
		'—',// Weight
		'A ii/Simple Return Badge/ii functions as a ii/Return Badge/ii except that it cannot be activated manually and instead can only activated automatically when the wearer takes fatal damage, dies for any other reason, or remains unconscious due to hit point loss for at least 5 rounds.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/breath of life/ii, ii/teleport/ii; bb/Cost/bb 650 gp'// Construction
	);
	magicItemBlockAuto(
		'Martyr\'s Return Badge',// Name
		'Conjuration',// School
		11,// CL
		'none',// SLot
		4235,// Price
		'—',// Weight
		'A ii/Martyr\'s Return Badge/ii functions as a ii/Return Badge/ii except that when it activates the wearer can choose to detonate the badge as a retributive strike instead. If the badge is detonated, all creatures and objects within 2 squares of the badge take 200 points of damage, those 3 or 4 squares away take 150 points of damage, and those 5 or 6 squares away take 100 points of damage. All those affected can make DC 23 Reflex saves to reduce the damage by half. Abilities that would normally allow creatures to reduce or ignore the damage on a successful save do not apply to this ability nor do any other abilities that specifically augment the behavior of reflex saves.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/breath of life/ii, ii/teleport/ii; bb/Cost/bb 2,117 gp'// Construction
	);
	magicItemBlockAuto(
		'Sailor\'s Return Badge',// Name
		'Conjuration',// School
		11,// CL
		'none',// SLot
		12500,// Price
		'—',// Weight
		'A ii/Sailor\'s Return Badge/ii functions as a ii/Return Badge/ii except that, once per day, a command word can be given to transport the wearer to relative safety. While worn, the badge keeps track of where the wearer goes and, when activated, it teleports the wearer to the last location they were that is in no immediate danger within 400 feet checking locations on solid ground first. If no suitable location can be found, it transports the wearer to the closest location within 840 feet where the wearer is in no immediate danger checking locations on solid ground first. If it still cannot find a suitable location it transports them to the nearest solid ground within 840 feet. If there is no solid ground within 840 feet, the teleportation fails and the use is lost. This movement does not provoke attacks of opportunity. Its tracking works on moving objects allowing the wearer to return to a vessel even if the vessel is no longer in the same place.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/breath of life/ii, ii/teleport/ii, ii/dimension door/ii; bb/Cost/bb 6,250 gp'// Construction
	);
	magicItemBlockAuto(
		'Spy\'s Return Badge',// Name
		'Conjuration',// School
		11,// CL
		'none',// SLot
		4235,// Price
		'—',// Weight
		'A ii/Martyr\'s Return Badge/ii functions as a ii/Return Badge/ii except that if it fails to teleport the wearer to the attuned totem, the wearer and everything they are carrying is subjected to a ii/disintegrate/ii spell with no save. Additionally, the badge can be activated as a free action that can be used outside of the wearer\'s turn.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/breath of life/ii, ii/disintegrate/ii, ii/teleport/ii; bb/Cost/bb 2,117 gp'// Construction
	);
	magicItemBlockAuto(
		'Traveler\'s Return Badge',// Name
		'Conjuration',// School
		11,// CL
		'none',// SLot
		4700,// Price
		'—',// Weight
		'A ii/Martyr\'s Return Badge/ii functions as a ii/Return Badge/ii except that when activated, the badge will teleport the wearer to the attuned totem so long as it is less than 1,100 miles away placing them in the nearest empty space not in immediate danger within 120 feet. If there is no such space or if the totem is farther than 1,100 miles away, it will teleport the caster to the nearest totem regardless of the distance with available space around it. If no such totem can be found, they are transported to the nearest totem with available space around it regardless of the distance and even across planes. If successful on this last attempt, the healing granted by Breath of Life is reduced by half. If there are no totems in range with available space and the wearer is still conscious, the wearer can choose the destination to teleport to like ii/teleport/ii with the same level of accuracy. The locations of known totems are treated as being "Very Familiar". If the wearer is unconscious instead, the subject is teleported to the most familiar location to the wearer within range like ii/teleport/ii with the same level of accuracy. The locations of known totems are not treated special in this case.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/breath of life/ii, ii/teleport/ii; bb/Cost/bb 2,350 gp'// Construction
	);
	require $startDir.'pageEnd.php';
?>