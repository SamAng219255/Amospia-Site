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
		'Cobalt Sphere',// Name
		'Transmutation',// School
		7,// CL
		'none',// Slot
		'7,200 gp (master), 288 gp (trailing)',// Price
		'—',// Weight
		'These strange, perfectly spherical, cobalt nodules have a mirror finish and react to the wielder\'s magical ability. Creatures without the ability to use magic cannot access the magical properties of the sphere and largely treat the spheres as being non magical metallic balls.
		In the hands of a creature capable of using magic, ii/cobalt spheres/ii generally orbit the wielder\'s wrist while not in use and transition to orbitting over or in front of their palm while drawn. ii/Cobalt spheres/ii can be drawn from the wielder\'s wrist or put back as a swift action or, if the wielder has at least a +1 base attack bonus and at least 1 caster level, as a free action.
		ii/Cobalt spheres/ii can used to make a ranged weapon attack with a +1 enhancement bonus and a range increment of 25 feet plus 5 feet per caster level. Medium sized ii/cobalt spheres/ii deal 1d6 bludgeoning damage while small sized ones deal 1d4 damage. Regardless of their size, cobalt spheres have a +1 enhancement bonus to damage and you may add the highest of your intelligence, wisdom, and charisma bonuses to the damage. Kineticists may choose to add their constitution instead if it is higher. When attacking with a ii/cobalt sphere/ii the sphere streaks from your palm in a straight line before returning toward you at the beginning of your next turn, traveling up to 60 feet in your direction. If it does not reach you, it travels towards again at the beginning of each of your turns travelling up to 30 feet further than last turn to reach you. You cannot make another attack with a ii/cobalt sphere/ii until it returns to you. If you are subject to a teleportation effect, any spheres that have not yet returned to you are instantly teleported with you though they cannot be used again until the beginning of your next turn.
		ii/Cobalt spheres/ii come in two forms, master spheres and trailing spheres. In order to use any ii/cobalt sphere/ii you must have at least one master sphere which directs the rest of the spheres. If you have more than one master sphere, you must choose one to lead the others. Changing which master sphere is leading requires a move action and provokes an attack of opportunity. Individual spheres can receive further enhantments, though any abilities possessed by the currently leading master sphere are inherited by the rest of your spheres exactly though they were ammunition being fired by the leading sphere. ii/Cobalt spheres/ii can receive any enchantment that can be placed on a thrown weapon or piece of ammunition and master spheres can also receive any enhantments that can be placed on ranged weapons, though some may have no effect. All ii/cobalt spheres/ii have at least a +1 enhancement bonus and are treated as possessing the ii/returning/ii property. The cost of these are included in the cost of the items.
		Individual ii/cobalt spheres/ii can have special materials that can replace steel bonded to their surface, granting their effects, however doing so costs twice as much as making a light weapon out of the material, with the exception of cold iron which costs 5,000 gp to add. This cost must be paid for each sphere you want coated in the material. Some special materials, such as inubrix, may not be able to confer their properties because it is only a layer on the outside. ii/Cobalt sphere/ii inherit the hardness but not the hit points of any special material it is coated with. If a ii/cobalt sphere/ii takes damage equal to half its number of hit points, it loses its special material coating. Coating a ii/cobalt sphere/ii in noqual like this renders it useless until it is removed.
		Any creature with at least 1 caster level is considered proficient with ii/cobalt spheres/ii, otherwise Exotic Weapon Proficiency is required to be proficient. Creatures without the ability to cast spells or spell-like abilities are unable to use ii/cobalt spheres/ii unless they have ranks in Use Magic Device. A creature may use half its number of ranks in Use Magic Device in place of its caster level for caster level dependant variables of ii/cobalt spheres/ii but are not automatically considered proficient. Kineticist levels are treated as caster levels for the purpose of being able to wield and be proficient with ii/cobalt spheres/ii.
		When wielding a cobalt sphere, a creature cannot use a higher base attack bonus than its number of caster levels. If it has a higher base attack bonus than its caster level, it is treated as having a base attack bonus equal to its caster level. This can reduce the number of attacks that can be made as part of a full attack action.
		ii/Cobalt spheres/ii have 14 points of hardness and 40 hit points or 12 points of hardness and 30 hit points without their +1 enhancement bonus.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/telekinesis/ii; bb/Cost/bb 3,600 gp (primary), 144 gp (secondary)'// Construction
	);
	require $startDir.'pageEnd.php';
?>