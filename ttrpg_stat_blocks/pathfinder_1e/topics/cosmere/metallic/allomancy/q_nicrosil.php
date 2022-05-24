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
	allomancy(
		'Quintenium/Nicrosil', // Metal
		false, // User
		[
			'Quadrant' => 'Enhancement',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 round',
		[
			'While burning quintenium/nicrosil, any spell or spell-like ability cast by a creature being touched by the misting is affected by the Empower Spell meta-magic feat. The misting cannot use this ability on themself.'
		], // Description
		[
			'Any spell or spell-like ability cast by the target is affected by the Maximize Spell feat as well.'
		], // Flare
		[
			10 => [
				'effect' => 'Spells cast by the target are also affected by the Intensified Spell feat.',
				'draw' => ''
			],
			20 => [
				'effect' => 'The target\'s caster level is treated as 1 higher and spells they cast are treated as though heightened 1 level by the Heighten Spell feat.',
				'draw' => ''
			],
			30 => [
				'effect' => 'Spells cast by the target are also affected by the Piercing Spell feat.',
				'draw' => ''
			],
			40 => [
				'effect' => 'The target\'s caster level is treated as 2 higher instead.',
				'draw' => ''
			],
			60 => [
				'effect' => 'The target\'s caster level is treated as 3 higher instead, spells they cast are instead treated as though heightened 2 levels, and spells cast by the target are also affected by the Widen Spell feat.',
				'draw' => ''
			],
			80 => [
				'effect' => 'The target\'s caster level is treated as 4 higher instead.',
				'draw' => ''
			],
			100 => [
				'effect' => 'The target\'s caster level is treated as 5 higher instead, spells they cast are instead treated as though heightened 3 levels, and spells cast by the target are also affected by the Ascendant Spell feat.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>