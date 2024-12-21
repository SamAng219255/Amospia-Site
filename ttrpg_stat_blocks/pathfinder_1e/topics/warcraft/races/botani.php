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
		'Botani',
		12,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 2,
			'int' => 2,
			'con' => -2
		],
		'',
		[
			'bb/Plant/bb: Botani are plant creatures. Plants are immune to all mind-affecting effects (charms, compulsions, morale effects, patterns, and phantasms), paralysis, poison, polymorph, sleep effects, and stunning. Plants breathe and eat, but do not sleep, unless they want to gain some beneficial effect from this activity. This means that a plant creature can sleep in order to regain spells, but sleep is not required to survive or stay in good health.',
			'bb/Medium/bb: Botani are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Botani have a base speed of 30 feet.',
			'bb/Low-Light Vision/bb: Botani can see twice as far in conditions of dim light.',
			'bb/Flammable/bb: Podlings have vulnerability to fire and take an additional half again as much fire damage from all sources.',
			'bb/Treespeech/bb: Botani have the ability to converse with plants as if subject to a continual ii/speak with plants/ii spell.',
			'bb/Verdant Magic/bb: Sorcerer botani with the verdant bloodline treat their Charisma score as 2 points higher for all sorcerer spells and class abilities. Clerics who are botani with the Plant domain use their domain powers and spells at +1 caster level. This trait does not give members of this race early access to level-based powers; it only affects powers that they could already use without this trait.',
			'Botani also gain the following spell-like ability: ',
			'/mm/1/day—ii/entangle/ii',
			'bb/Languages/bb: Botani begin play speaking Botani. Botani with high Intelligence scores can choose from Common, Draenei, Orcish, and Podling.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>