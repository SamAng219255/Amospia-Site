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
	advAlchemySimpleBlock(
		'Grenade',// Name
		'Bomb (Grenade)',// Form
		[],// Descriptors
		2,// Level
		'instantaneous',// Duration
		'Reflex Half',// Saving Throw
		'This hollow clay container holds a small charge of an explosive powder and a delayed fuse. A standard grenade has a splash radius of 10 feet and its splash deals 1d6 points of bludgeoning damage per alchemy level, maximum 10d6, and 1d4 points of fire damage, with a Reflex save for half.
		Like a normal bomb recipe, a grenade can be thrown as a splash weapon with a range of 20 feet, however, grenades do not detonate on impact and destroying the grenade does not cause the grenade to activate. Rather, after lighting and throwing the grenade, it explodes at the end of your turn. Additionally, the target never takes any direct hit damage, instead taking the listed splash damage. When a grenade is thrown, any creature within 5 feet of the grenade can make a DC 25 Reflex save to grab the grenade and throw it away. If they succeed, they throw the grenade 2d4 squares in a random direction. However, if they make their save by 10 or more, they may throw the grenade in any square they wish as throwing a splash weapon. Each time the grenade lands, nearby creatures can attempt to remove the grenade again, but the DC increases by 5 each time it is thrown. If multiple creature make the save, whichever rolled the highest is the one who throws it. The original creature can also choose to throw the grenade as a full round action instead, in which case they are timing out the remaining duration such that there is no time left to throw it again and nearby creatures do not get a save to throw it.' // Description
	);
	advAlchemySimpleBlock(
		'Improved Grenade',// Name
		'Bomb (Grenade)',// Form
		[],// Descriptors
		5,// Level
		'instantaneous',// Duration
		'Reflex Partial',// Saving Throw
		'This recipe functions as ii/grenade/ii except its splash deals 1d6 points of bludgeoning damage per alchemy level, maximum 15d6, and 1d6 points of fire damage and any creatures within 5 feet of the grenade are deafened for 1 round per alchemy level. Creatured hit by the splash can make a Reflex save for half damage and any creature within 5 feet of the grenade, who do not share a space with the grenade, who makes the save is only deafened for 1 round. If the grenade is located on a grid intersection, only creatures who occupy more that one square and who occupy every adjacent square are counted as being in the same space.' // Description
	);
	require $startDir.'pageEnd.php';
?>