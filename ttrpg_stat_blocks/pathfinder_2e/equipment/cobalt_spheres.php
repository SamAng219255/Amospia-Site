<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	item2eBlockAuto(
		'Cobalt Spheres',// Name
		3,// Level
		'Uncommon',// Rarity
		['Magical','Transmutation'],// Traits
		'55 gp',// Price
		1,// Hands
		'held in 1 hand',// Usage
		'—',// Bulk
		false,// Activate Time
		false,// Activate Type
		[
			'These six strange, perfectly spherical, cobalt nodules have a mirror finish and react to the wielder\'s magical ability. Creatures without the ability to use magic cannot access the magical properties of the spheres and largely treat the spheres as being non magical metallic balls.',
			'In the hands of a creature capable of using magic, cobalt spheres generally orbit the wielder\'s wrist while not in use and transition to orbitting in their palm while drawn. Cobalt spheres can be drawn from the wielder\'s wrist or put back once per round without spending an action.',
			'Cobalt spheres can used to make a ranged weapon attack and a range increment of 60 feet. Cobalt spheres deal 1d6 bludgeoning damage and you may add the bonus of your key ability score to the damage dealt. When attacking with cobalt spheres the sphere streaks from your palm in a straight line before returning toward you at the beginning of your next turn, traveling up to 60 feet in your direction. If it does not reach you, it travels towards again at the beginning of each of your turns travelling up to 30 feet further than last turn to reach you. You cannot make another attack with a given cobalt sphere until it returns to you. If you are subject to a teleportation effect, any spheres that have not yet returned to you are instantly teleported with you though they cannot be used again until the beginning of your next turn.',
			'Cobalt spheres can receive runes which apply all six spheres.',
			'Any character that is capable of casting spells is treated as having the same level of proficiency with cobalt spheres as with their spellcasting tradition. Creatures without the ability to cast spells are unable to use cobalt spheres.'
		],// Description
		[]// Variations
	);
	require $startDir.'pageEnd.php';
?>