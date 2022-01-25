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
	block(
		'Cobalt Spheres',
		'items',
		quick_array([
			'ii/Weapon, common (requires attunement, any spellcaster)/ii',
			'<hr>',
			'These six, strange, perfectly spherical, cobalt nodules have a mirror finish and react to the wielder\'s magical ability. Allowing them to float around and strike at their enemies.',
			'Cobalt spheres generally orbit the attuned creature\'s wrist while not in use and transition to orbitting over or in front of their palm while drawn. Cobalt spheres can be drawn from the wielder\'s wrist or put back once per round without spending an action.',
			'Cobalt spheres are simple ranged weapons with a range of 60/300 feet, that deal 1d6 points of bludgeoning damage. Any character or creature capable of casting spells is automatically proficient with cobalt spheres.',
			'When attacking with cobalt spheres, you do not need ammunition, instead one of the six spheres streaks from your palm and strikes your target. This sphere travels back to at the beginning of each of your turns travelling 60 feet towards you. Each round after the first turn that it travels back to you, it travels 15 feet faster. You cannot make an attack with a given sphere until it returns back to you.',
			'If you are magically teleported, your spheres take advantage of the magic and teleport with you to your new location.'
		])
	);
	require $startDir.'pageEnd.php';
?>