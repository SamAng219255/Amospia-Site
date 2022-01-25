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
	weaponSFBlockAuto(
		'Cobalt Sphere', // Name
		false, // Properties — Left on Default — Hides default properties
		[
			'Cobalt spheres are unusual weapons that can only be wielded by creatures capable of casting spells. These spheres react to the users magical ability and minor aura and float around. They generally remain around the wielder\'s wrist and hand but when attacking with them they streak away and attempt to strike the target. After a sphere strikes a target it has to return to the user before it can be used again. Cobalt spheres generally have six different spheres and at the beginning of your turns each sphere that has been used to strike a target travels twice their range increment back towards you, potentially navigating around obstacles. Each turn after the first they travel this way their speed increases by half their range increment. Once a sphere returns to you, you can use it to strike a new target. If you teleport using magic, all of your spheres take advantage of the teleportation magic and immediately teleport to your destination with you.'
		], // Description
		[
			[
				'title' => 'Cobalt Sphere, Basic',
				'properties' => [],
				'texts' => [],
				'level' => 2,
				'price' => 656,
				'hands' => 1,
				'prof' => 'Special',
				'dmg' => '1d6 B',
				'range' => 30,
				'crit' => '—',
				'bulk' => '—',
				'special' => 'ab/properties_sf|Mystic|mystic/ab'
			],
			[
				'title' => 'Cobalt Sphere, Blue',
				'properties' => [],
				'texts' => [],
				'level' => 5,
				'price' => 2600,
				'hands' => 1,
				'prof' => 'Special',
				'dmg' => '1d8 B',
				'range' => 40,
				'crit' => '—',
				'bulk' => '—',
				'special' => 'ab/properties_sf|Mystic|mystic/ab'
			],
			[
				'title' => 'Cobalt Sphere, Meteoric',
				'properties' => [],
				'texts' => [],
				'level' => 8,
				'price' => 8310,
				'hands' => 1,
				'prof' => 'Special',
				'dmg' => '2d8 B',
				'range' => 60,
				'crit' => '—',
				'bulk' => '—',
				'special' => 'ab/properties_sf|Mystic|mystic/ab'
			],
			[
				'title' => 'Cobalt Sphere, Draconic',
				'properties' => [],
				'texts' => [],
				'level' => 11,
				'price' => 25400,
				'hands' => 1,
				'prof' => 'Special',
				'dmg' => '4d6 B',
				'range' => 70,
				'crit' => '—',
				'bulk' => '—',
				'special' => 'ab/properties_sf|Mystic|mystic/ab'
			],
			[
				'title' => 'Cobalt Sphere, Stellar',
				'properties' => [],
				'texts' => [],
				'level' => 14,
				'price' => 77300,
				'hands' => 1,
				'prof' => 'Special',
				'dmg' => '7d6 B',
				'range' => 90,
				'crit' => '—',
				'bulk' => '—',
				'special' => 'ab/properties_sf|Mystic|mystic/ab'
			],
			[
				'title' => 'Cobalt Sphere, Interstellar',
				'properties' => [],
				'texts' => [],
				'level' => 17,
				'price' => 236400,
				'hands' => 1,
				'prof' => 'Special',
				'dmg' => '8d8 B',
				'range' => 100,
				'crit' => '—',
				'bulk' => '—',
				'special' => 'ab/properties_sf|Mystic|mystic/ab'
			],
			[
				'title' => 'Cobalt Sphere, Neutronium Core',
				'properties' => [],
				'texts' => [],
				'level' => 20,
				'price' => 727200,
				'hands' => 1,
				'prof' => 'Special',
				'dmg' => '11d8 B',
				'range' => 120,
				'crit' => '—',
				'bulk' => '—',
				'special' => 'ab/properties_sf|Mystic|mystic/ab'
			]
		], // Variants
		1, // Level — Left on Default — Will not display
		0, // Price — Left on Default — Will not display
		'—', // Hands — Left on Default — Will not display
		'', // Proficiency — Left on Default — Will not display
		'', // Damage — Left on Default — Will not display
		false, // Range — Left on Default — Will not display
		'', // Critical Effect — Left on Default — Will not display
		'—', // Bulk — Left on Default — Will not display
		'', // Special — Left on Default — Will not display
		false  // Charges — Left on Default — Will not display
	);
	require $startDir.'pageEnd.php';
?>