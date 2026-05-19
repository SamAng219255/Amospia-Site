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
		'Ruutani',
		15,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 2,
			'wis' => 2,
			'int' => -2
		],
		'',
		[
			'bb/Plant/bb: Ruutani are plant creatures. Plants are immune to all mind-affecting effects (charms, compulsions, morale effects, patterns, and phantasms), paralysis, poison, polymorph, sleep effects, and stunning. Plants breathe and eat, but do not sleep, unless they want to gain some beneficial effect from this activity. This means that a plant creature can sleep in order to regain spells, but sleep is not required to survive or stay in good health.',
			'bb/Medium/bb: Ruutani are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Ruutani have a base speed of 30 feet.',
			'bb/Low-Light Vision/bb: Ruutani can see twice as far in conditions of dim light.',
			'bb/Flammable/bb: Podlings have vulnerability to fire and take an additional half again as much fire damage from all sources.',
			'bb/Verdant Magic/bb: Sorcerer ruutani with the verdant bloodline treat their Charisma score as 2 points higher for all sorcerer spells and class abilities. Clerics who are ruutani with the Plant domain use their domain powers and spells at +1 caster level. This trait does not give members of this race early access to level-based powers; it only affects powers that they could already use without this trait.',
			'Ruutani also gain the following supernatural ability: ',
			'As a free action the ruutani can cause a host of wooden thorns to burst from their body. Any creature that touches the ruutani, hits them with a melee attack, or attempts a grapple check against the ruutani takes 1d6 points of piercing damage, plus one point per two hit dice the ruutani has. Additionally, whenever the ruutani attempts to escape a grapple, the creature grappling them takes the same amount. This effect lasts until the start of the ruutani\'s next turn, though they may extend the duration until the start of the following turn as a free action. They may use this ability for a number of rounds per day equal to their number of hit dice.',
			'bb/Photosynthesis/bb: A ruutani only needs to eat on days when they do not receive at least 4 hours of sunlight or other equivalent light.',
			'bb/Languages/bb: Ruutani begin play speaking Ruutani. Ruutani with high Intelligence scores can choose from Common, Haranir, Fungarian, and Thalassian.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>