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
		'Black Aegis', // name
		'Abjuration', // school
		20, // cl
		'none', // slot
		'—', // price
		45, // weight
		[
			'These ominous black shields can be used quite effectively to not only protect yourself, but your allies as well. A ii/black aegis/ii functions as a ii/+5 tower shield/ii, grants spell resistance 21, and grants a +5 bonus on saving throws. Against a spell or ability that allows a saving throw for half or partial, a character wielding a ii/black aegis/ii takes a half or partial on a failed save or negates the effect on a successful save. A creature wielding a ii/black aegis/ii grants partial cover to allies against attacks and effects whose line of effect passes through the wielder. If the wielder makes a successful saving throw against a spell or effect that targets an area, they occlude the space behind them. All creatures and potential targets whose line of effect passes through the wielder are treated as having rolled a natural 20, regardless of their actual roll. If the wielder rolls a natural 1 on a saving throw, it is treated as a -5 instead.',
			'Performing the total cover action with a ii/black aegis/ii creates a spherical barrier made of force that lasts until the start of the wielder\'s next turn unless the wielder takes a full-round action to maintain the barrier and total cover. This sphere can be between 5 and 25 feet across, chosen when it is created, and is centered directly behind the shield, such that the edge the shield is placed on is also the edge of the sphere and the center is in the opposite direction. This barrier functions as a spherical ii/wall of force/ii. The barrier has a hardness of 30 and 20 hit points when it is formed. Each round it is maintained, it gains 20 additional hit points. The barrier has a maximum hit point limit of 400 and hit points gained in excess of this limit are lost.',
			'A ii/black aegis/ii can act as a beacon and grants a +5 deflection bonus to AC to creatures within 120 feet. The wielder can choose which creatures receive this bonus and can specify specific creatures, all allies, creatures of a specific race or apparent religious, cultural, or national association, other similar categories of creatures, or any combination thereof. The wielder does not have to be aware of the presence of the creatures that receive this bonus but they must know to include them.',
			'As an immediate action, a ii/black aegis/ii can be used to block a threat from entering your space and proceeding forward. This can include a rolling boulder, a stampeding mammoth, a falling roof, or an avalanche. It can also include magical and hazardous objects such as a ii/flaming sphere/ii or a ii/sphere of annihilation/ii. In any case, the threat is halted in its tracks as it attempts to enter your square and immediately ceases to roll, charge, fall, or otherwise progress forward. If there is a consistent force behind the object, such gravity making the roof fall, and if your first action is not continuing to hold it back, which is a full-round action, it immediately resumes its course at the beginning of your turn. You can continue to hold it back indefinitely as such. For particularly widespread threats that aren\'t solidly connected across their length, such as an avalanche, only the region within 120 feet is so halted. This ability only applies against threats that fully enter your square.',
			'Any abilities that the wielder may possess that allows them to use their shield to grant a shield bonus to another creature, add the ii/black aegis/ii\'s enhancement bonus to the bonus granted even if the ability doesn\'t normally allow it.'
		], // description
		true, // isArtifact
		'If a ii/black aegis/ii remains unworn for 100 years, it will collapse inward and transform into a black hole in space similar to a ii/sphere of annihilation/ii. It cannot be moved and creatures within 350 feet of the object begin to similarly collapse inward, taking 200 damage every round they are in the region with a DC 23 Fortitude save for half. Casting ii/gravity sphere/ii or using similar abilities can negate the effect within the region but require an opposed caster level check against the aegis. Anything that comes in contact with the object is destroyed as though it were a ii/sphere of annihilation/ii. If a ii/gate/ii spell is cast on the object, both the gate and the remains of the ii/black aegis/ii are immediately destroyed and all matter within 120 feet is ripped apart and the remains are spread across the Plane of Negative energy.' // extra
	);
	require $startDir.'pageEnd.php';
?>