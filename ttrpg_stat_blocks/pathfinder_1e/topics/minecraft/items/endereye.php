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
	magicItemBlockAuto(
		"Eye of Ender",// Name
		"Divination",// School
		15,// CL
		"none",// SLot
		12000,// Price
		1,// Weight
		"Formed by imbuing an ender pearl with special powers, this crystal sphere conatins a single slitted eye that turns and spins to point toward gaps in reality. This eye continuously points to the nearest active interdimensional gateway. Some permanent structures capable of producing such gateways, such as ii/ender portal/iis are able to be detected regardless of whether they are currently active.
		A creature holding an ii/eye of ender/ii is able to use a specific command word to redirect its gaze to a specific type of gateway. The required command word is consistent between all ii/eyes of ender/ii and is dependant only on the specfic type of gateway. Upon finishing the creation of an ii/eye of ender/ii a creature automatically knows the command word to restore an eye to detecting all gateways but must learn all other command words as normal. A creature in possession of an ii/eye of ender/ii who is capable of creating a given gateway, such as being able to cast a spell or create a magic item capable of creating one, can spend 1 hour to determine the command word for one type of gateway they can create. At the end of which they must make a spellcraft check with a DC equal to 20 plus twice the spell level or 20 plus the caster level of the effect. If they succeed they learn the command word. If they fail they do not know it but may try again spending another hour with the eye.",// Desc
		false,// Destruction
		"bb/Requirements/bb Craft Wondrous Item, ii/locate gate/ii; bb/Cost/bb 6,000 gp"// Construction
	);
	require $startDir.'pageEnd.php';
?>