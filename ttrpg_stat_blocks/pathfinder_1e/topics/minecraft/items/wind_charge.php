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
		'Wind Charge',// Name
		'Evocation',// School
		7,// CL
		'—',// Slot
		120,// Price
		'—',// Weight
		[
			'A ii/wind charge/ii is a sphere of mischievious elemental winds. It weighs only as much as the ambient air around it and has no air resistance, though it is affected by changes in wind speed or direction it encounters. If crushed, struck, or slammed against a surface, the winds are released, hurling nearby creatures, scattering objects, and slamming doors and mechanisms.',
			'A ii/wind charge/ii can be activated by throwing it against a surface or target or by crushing it directly. If thrown, a ii/wind charge/ii continues to travel in the direction it was thrown at the same speed until it hits something or is knocked off course. This is treated as a ranged touch attack with an unlimited maximum range and 60-foot range increment. Wielders may target either a creature or a grid space of a surface with this attack. On a missed attack against a creature, the ii/wind charge/ii continues in a straight line until it hits a surface or a creature. If it passes through a creature\'s space, there is a 50% chance it makes a ranged touch attack against the creature with no modifiers. This attack otherwise functions the same as the initial attack. On a missed attack against a grid space, it strikes a space in a random direction 1d4 × 5 feet away from the targeted space. A ii/wind charge/ii is not affected by the wind when it is initially thrown, but if the strength or direction of the wind changes along its course, it will be affected by the differences in the wind.',
			'Throwing a ii/wind charge/ii is an attack that can be done as part of any action that allows making a ranged attack with a held one-handed thrown weapon. Crushing a ii/wind charge/ii can be done either a separate move action or as part of an action that allows you to move your speed.',
			'If a thrown ii/wind charge/ii directly impacts a creature, or is crushed in a creature\'s hand, that creature is launched 30 feet into the air by the winds. If a creature was struck with the wind charge and their path is blocked by a ceiling, they stop at the ceiling and suffer 1d6 points of damage for every full 10 feet of vertical distance they had left. If the creature crushes the wind charge in their hand, the winds shield them, preventing them from taking any damage from running into a ceiling, though they still stop, and from accumulating any fall damage until they fall further than they initially started. There are two ways to reduce this effect against an unwilling creature who is not denied their Dexterity to their AC.',
			'A creature can try to resist the winds, requiring the creature who used the ii/wind charge/ii to make a special combat maneuver check against the target\'s CMD. This check uses its own rules except as noted. The creature making the check does not add their Strength score to this check but they do receive a +10 bonus. The target receives any bonuses or penalties to their CMD that they would against a bull rush. If the check fails by 5 points or less, the target is only thrown 15 feet into the air and may attempt an Acrobatics check to reduce the damage from falling as though the fall were intentional. If the check failed by more than 5 points, the target is not moved.',
			'Alternatively, a creature can attempt to evade the swirling winds, which requires a successful DC 25 Reflex save. On a successful save, the creature is only launched 15 feet into the air and may attempt an Acrobatics check to reduce the damage from falling as though the fall were intentional. If the creature possesses evasion or a similar ability that allows them to negate damage on a successful Reflex save for half, they instead are unaffected on a successful save. Improved evasion has no further effect.',
			'When a ii/wind charge/ii is triggered, whether or not it impacted or was crushed by a creature, all other creatures and unattended objects within 10 feet are lifted into the air and blown 1d6 × 10 feet away from the impact. Creatures who are not currently denied their Dexterity to their AC can attempt to resist or evade the winds using the same rules as if they were struck, with the exception that creatures who succeed and receive a partial effect are blown 1d4 × 5 feet away instead.',
			'Additionally, any doors, lids, trapdoors, levers, buttons, or other such movable anchored objects in the area are changed to random state other than their current one (eg. open doors are closed, closed lids are opened, a lever with three modes is switched to one of the others at random, buttons are pushed, etc).'
		],// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/air geyser/ii; bb/Cost/bb 60 gp'// Construction
	);
	require $startDir.'pageEnd.php';
?>