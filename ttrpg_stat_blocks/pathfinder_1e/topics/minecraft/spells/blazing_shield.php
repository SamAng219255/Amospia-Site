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
?>
<title>Blazing Shield</title>
<?php
	spellBlockAuto(
		'Blazing Shield',// Name
		'abjuration',// School
		[
			'fire',
			'force'
		],// Descriptors
		[
			'arcanist' => 1,
			'bard' => 1,
			'bloodrager' => 1,
			'investigator' => 1,
			'magus' => 1,
			'skald' => 1,
			'sorcerer' => 1,
			'summoner' => 1,
			'summoner (unchained)' => 1,
			'witch' => 1,
			'wizard' => 1
		],// Levels
		[
			'V' => 1,
			'S' => 1
		],// Components
		'1 standard action',// Casting Time
		'Touch',// Range
		'1 creature touched',// Target
		false,// Effect
		false,// Area
		'1 hour/level (D)',// Duration
		'Will negates (harmless)',// Save
		false,// SR
		[
			'When you cast this spell it creates a floating tower shield formed from fire and force that hovers around the target protecting them. It negates magic missile attacks directed at the target. The shield also provides a +4 shield bonus to AC. This bonus applies against incorporeal touch attacks, since it is a force effect. It also applies against touch attacks. The shield has no armor check penalty or arcane spell failure chance. Any creature that fails to hit the target with a melee attack by 4 or less strikes the shield instead and takes 1d6 points of fire damage plus 1 point per caster level (maximum +15).',
			'As a standard action, the target can direct the shield to grant the target total cover until the beginning of their next turn. When using a tower shield in this way, the target must choose one edge of their space. That edge is treated as a solid wall. You gain total cover for attacks that pass through this edge and no cover for attacks that do not pass through this edge. The shield does provide cover against targeted spells.',
			'bb/Special/bb: ii/Blazing shield/ii is an exclusive spell, meaning that you cannot learn this spell normally. In order to learn this spell it must be researched from the remains of an <a href="../monsters/inferno.php" target="_blank">inferno</a> or learned from another caster who knows the spell.'
		]// Description
	);
	echo '<br>';
	spellBlockAuto(
		'Blazing Shield Ring',// Name
		'abjuration',// School
		[
			'fire',
			'force'
		],// Descriptors
		[
			'arcanist' => 3,
			'bard' => 3,
			'bloodrager' => 3,
			'investigator' => 3,
			'magus' => 3,
			'skald' => 3,
			'sorcerer' => 3,
			'summoner' => 3,
			'summoner (unchained)' => 3,
			'witch' => 3,
			'wizard' => 3
		],// Levels
		[
			'V' => 1,
			'S' => 1
		],// Components
		'1 standard action',// Casting Time
		'Touch',// Range
		'1 creature touched',// Target
		false,// Effect
		false,// Area
		'1 hour/level (D)',// Duration
		'Will negates (harmless)',// Save
		false,// SR
		[
			'This spell functions as ii/blazing shield/ii with the following exceptions, including that it summons four shields instead of one that rotate around the target. The spinning shields force any creature making an attack against the target to take a 30% miss chance that must be rolled seperately from any other miss chances.',
			'When using the shields to grant total cover, the shields surround the target granting the effects along all four edges of their squares.',
			'bb/Special/bb: ii/Blazing shield/ii is an exclusive spell, meaning that you cannot learn this spell normally. In order to learn this spell it must be researched from the remains of an <a href="../monsters/inferno.php" target="_blank">inferno</a> or learned from another caster who knows the spell.'
		]// Description
	);
	echo '<br>';
	spellBlockAuto(
		'Blazing Shield, Communal',// Name
		'abjuration',// School
		[
			'fire',
			'force'
		],// Descriptors
		[
			'arcanist' => 5,
			'bard' => 5,
			'bloodrager' => 5,
			'investigator' => 5,
			'magus' => 5,
			'skald' => 5,
			'sorcerer' => 5,
			'summoner' => 5,
			'summoner (unchained)' => 5,
			'witch' => 5,
			'wizard' => 5
		],// Levels
		[
			'V' => 1,
			'S' => 1
		],// Components
		'1 standard action',// Casting Time
		'Touch',// Range
		'creatures touched',// Target
		false,// Effect
		false,// Area
		'1 hour/level (D)',// Duration
		'Will negates (harmless)',// Save
		false,// SR
		[
			'This spell functions like ii/blazing shield/ii, except you divide the duration in 1 hour intervals among the creatures touched.',
			'bb/Special/bb: ii/Blazing shield, communal/ii is an exclusive spell, meaning that you cannot learn this spell normally. In order to learn this spell it must be researched from the remains of an <a href="../monsters/inferno.php" target="_blank">inferno</a> or learned from another caster who knows the spell.'
		]// Description
	);
	echo '<br>';
	spellBlockAuto(
		'Blazing Shield Ring, Communal',// Name
		'abjuration',// School
		[
			'fire',
			'force'
		],// Descriptors
		[
			'arcanist' => 7,
			'bard' => 7,
			'bloodrager' => 7,
			'investigator' => 7,
			'magus' => 7,
			'skald' => 7,
			'sorcerer' => 7,
			'summoner' => 7,
			'summoner (unchained)' => 7,
			'witch' => 7,
			'wizard' => 7
		],// Levels
		[
			'V' => 1,
			'S' => 1
		],// Components
		'1 standard action',// Casting Time
		'Touch',// Range
		'creatures touched',// Target
		false,// Effect
		false,// Area
		'1 hour/level (D)',// Duration
		'Will negates (harmless)',// Save
		false,// SR
		[
			'This spell functions like ii/blazing shield ring/ii, except you divide the duration in 1 hour intervals among the creatures touched.',
			'bb/Special/bb: ii/Blazing shield ring, communal/ii is an exclusive spell, meaning that you cannot learn this spell normally. In order to learn this spell it must be researched from the remains of an <a href="../monsters/inferno.php" target="_blank">inferno</a> or learned from another caster who knows the spell.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>