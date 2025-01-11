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
	raceBlockAuto(
		'Arathi',
		9,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'any' => 2
		],
		'',
		[
			'bb/Humanoid/bb: Arathi are humanoid creatures with the elf and human subtypes.',
			'bb/Medium/bb: Arathi are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Arathi have a base speed of 30 feet.',
			'bb/Might of the Empire/bb: Arathi gain a +1 racial bonus on all saving throws.',
			'bb/Sacred Flame/bb: Arathi are treated as +1 level higher when casting spells with the fire, good, or light descriptor, using granted powers of the Fire or Sun domain, using bloodline powers of the fire elemental bloodline, using the revelations of the oracle’s flame mystery, and determining the damage of alchemist bombs that deal fire damage. This trait does not give arathi early access to level-based powers; it only affects powers that they could already use without this trait.',
			'bb/Skill Bonus/bb: Arathi gain a +2 racial bonus to Perception and a +1 racial bonus to Knowledge (Engineering) and Spellcraft.',
			'bb/Tinderbox/bb: Arathi begin play with a blessed ii/arathi tinderbox/ii in addition to their other starting gear.',
			'bb/Languages/bb: Arathi begin play speaking Common. Arathi with high Intelligence scores can choose from Nerubian, Orcish, Thalassian, or Titan.'
		],
		false
	);
	blockStack(
		'Racial Equipment',
		'racial_equipment',
		[
			[
				'block' => true,
				'name' => 'Arathi Tinderbox',
				'type' => 'item',
				'texts' => quick_array([
					'bb/Aura/bb Faint Evocation; bb/CL/bb 1st',
					'bb/Slot/bb none; bb/Price/bb 25 gp; bb/Weight/bb —'
				]),
				'spaced' => true,
				'sections' => [
					[
						'title' => 'Description',
						'spaced' => true,
						'texts' => quick_array([
							'This blessed tinderbox contains a pair of striking stones and a bottle of oil blessed with the light of Beledar. This tinderbox can be used to light an object on fire and its materials are never exhausted. Lighting a torch or other Fine sized object with this tinderbox is a standard action. Lighting any other fire with them takes at least that long.'
						])
					],
					[
						'title' => 'Construction',
						'spaced' => true,
						'texts' => quick_array([
							'bb/Requirements/bb Craft Wondrous Item; bb/Special/bb Crafter must be a divine caster and worship the Sacred Flame; Cost 12 gp'
						])
					]
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>