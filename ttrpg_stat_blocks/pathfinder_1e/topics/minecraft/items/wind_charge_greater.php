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
		'Greater Wind Charge',// Name
		'Evocation',// School
		7,// CL
		'none',// Slot
		1400,// Price
		'—',// Weight
		[
			'This sphere of elemental winds functions as a ii/lesser wind charge/ii, except it also releases a dangerous blast of wind that can throw creatures and objects.',
			'In addition to targeting a grid square as a standard action, a creature can make a thrown weapon attack with a ii/greater wind charge/ii against a creature, object, or 5-foot square. On a missed attack against a creature or object, the ii/greater wind charge/ii continues in a straight line until it hits a surface or a creature. If it passes through a creature\'s square, there is a 50% chance it makes a ranged touch attack against the creature with no modifiers. This attack otherwise functions the same as the initial attack. A creature can also choose to target themself or a willing ally within reach with a ii/greater wind charge/ii as a standard action which does not require an attack roll. Its course is unaffected by incorporeal creatures.',
			'On a successful hit, the wielder makes a special bull rush combat maneuver against the target. The wielder does not add their Strength bonus to this check, but they do receive an additional +10 bonus and they do not provoke an attack of opportunity from this check, though throwing the ii/greater wind charge/ii may provoke one.',
			'Instead of the normal effect of a bull rush, on a successful check the target is launched 30 feet into the air by the winds. If the target\'s path is blocked by a ceiling, they stop at the ceiling and suffer 1d6 points of damage for every full 10 feet of vertical travel remaining. The ii/greater wind charge/ii does not hold the target in the air, and they immediately fall back down, taking the appropriate damage, unless they have another means of holding themself up.',
			'If the check fails by 5 points or less, the target is only thrown 15 feet into the air and may attempt an Acrobatics check to reduce the damage from falling as though the fall were intentional. If the check failed by more than 5 points, the target is not moved.',
			'Whenever a ii/greater wind charge/ii\'s winds are released, the wielder also attempts a single special bull rush combat maneuver against all creatures and unattended objects, other than the target, within 10 feet. Like the previous check, the wielder does not add their Strength bonus to this check, but they do receive a +10 bonus and do not provoke an attack of opportunity from this check. The wielder is automatically treated as having made their check against creatures who are denied their Dexterity bonus to their Armor Class and unattended objects under 700 pounds. Objects over 700 pounds are unaffected. Creatures against which their check succeeds are lifted slightly into the air and blown 1d6 × 10 feet away from the ii/greater wind charge/ii. Creatures against which their check failed by 5 points or less are blown only 1d6 × 5 feet away from the ii/greater wind charge/ii.'
		],// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Wondrous Item, ii/gust of wind/ii; bb/Cost/bb 700 gp'// Construction
	);
	require $startDir.'pageEnd.php';
?>