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
		'Planar Grenade',// Name
		'Bomb (Grenade)',// Form
		[
			'see text'
		],// Descriptors
		8,// Level
		'instantaneous',// Duration
		'Reflex Partial',// Saving Throw
		'Each planar grenade is made by refining the pure essence of one of the elemental planes, often from materials found commonly on the material plane. This essence is then used to supercharge the bomb\'s payload to create a powerful burst of elemental energy. This recipe functions as ii/ as/aa_grenade|Improved Grenade|improved grenade/as /ii except the splash radius is increased to 15 feet and the creatures take damage equal to 1d6 points of damage per caster level of an energy type determined by what type of grenade is used and 1d6 points of bludgeoning. The bomb may also inflict a secondary effect that depends on the element of the grenade.
		This recipe gains the descriptor matching its damage type.
		/mm/ ii/Acid/ii — Targets take acid damage that ignores a number of points of hardness and resistance equal to your alchemy level. Targets that are immune to acid cannot apply their immunity to a number of points of the damage equal your alchemy level.
		/mm/ ii/Cold/ii — Targets take cold damage and, if they fail their save, is staggered for a number of rounds equal to your alchemy level. If the target takes at least 1 point of fire damage during that time, whether or not it gets through any applicable resistances, immunity, or hardness, they receive an additional save with a +5 circumstance bonus to end their staggered condition early.
		/mm/ ii/Electricity/ii — Targets take electricity damage and, if they fail their save, they are stunned for a number of rounds equal to half of your alchemy level.
		/mm/ ii/Fire/ii — Targets take fire damage and if they fail their save the flaming contents stick to them and continue to burn them. At the beginning of their next turn and each subsequent turn they take 1d6 points of fire damage per 2 alchemy levels and receive another save against the original DC. If they make the save they successful remove the flask\'s contents taking only half the damage and they no longer take damage from it on subsequent turns. After a number of turns equal to half your alchemy level, rounded down, the contents of the flask stop burning and affected creatures no longer take damage on subsequent rounds. Covering affected creatures in water does not put out the fire but it does grant a +5 circumstance bonus to their next save.' // Description
	);
	require $startDir.'pageEnd.php';
?>