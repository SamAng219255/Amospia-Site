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
		'Forsaken',
		11,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'con' => 2,
			'cha' => 2,
			'int' => -4
		],
		'',
		[
			'bb/Humanoid/bb: Forsaken are humanoid creatures with the human subtype.',
			'bb/Medium/bb: Forsaken are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Forsaken have a base speed of 30 feet.',
			'bb/Darkvision/bb: Forskaen can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Undeath/bb: Forsaken are undead and their souls are only imperfectly attached to their bodies. Forsaken are treated as undead for all purposes. Forsaken take no penalties from energy-draining effects, though they can still be killed if they accrue more negative levels than they have Hit Dice. After 24 hours, any negative levels they’ve gained are removed without any additional saving throws. Forsaken receive a +2 racial bonus on saves against death effects and other death magic and an equal bonus to AC against such effects. Forsaken are harmed by life magic and, while can be healed by the Light, they are also excruciatingly pained by it, receiving half of the damage the effect heals as nonlethal damage. Forsaken do not need to breathe but still feel the impulse to do so. Forsaken also do not sleep but nonetheless appreciate resting by laying motionless. Forsaken characters may rest as such to recover daily abilities in place of sleeping for the same duration.',
			'bb/Will of the Forsaken/bb: Forsaken gain a +2 racial bonus on Will saving throws to resist spells and spell-like abilities of the enchantment (charm) and enchantment (compulsion) subschools. In addition, if a forsaken fails such a save, they receive another save 1 round later to prematurely end the effect (assuming the spell or spell-like ability has a duration greater than 1 round). This second save is made at the same DC as the first. If the forsaken has a similar ability from another source (such as a rogue\'s slippery mind class feature), they can only use one of these abilities per round, but can try the other on the second round if the first reroll ability fails.',
			'bb/Touch of the Grave/bb: Forsaken can cast ii/vampiric touch/ii as a spell-like ability once per day.',
			'bb/Languages/bb: Forsaken begin play speaking Gutterspeak and Orcish. Forsaken with high Intelligence scores can choose from Common, Goblin, Shalassian, Taur-ahe, Thalassian, and Zandali.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Clever/bb',
					'/mm/Your racial ability score modifiers switch to +2 Constitution, +2 Intelligence, -4 Charisma',
					'/mm/This replaces ability scores.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>