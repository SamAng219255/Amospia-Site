<?php require '../../pageStart.php'; ?>
<title>Debug</title>
<?php
	//item2eBlockAuto($name, $level, $rarity, $traits, $price, $hands, $usage, $bulk, $activateTime, $activateType, $description, $variations)
	item2eBlockAuto(
		"Debug Stick",
		8,
		"Unique",
		["Stuff","Arcane"],
		600,
		false,
		false,
		'L',
		2,
		'Interact',
		[
			'This is a stick.',
			'It does stuff.'
		],
		[
			[
				"title" => "Debug Big Stick",
				"spaced" => false,
				"texts" => [
					'Bigger'
				]
			],
			[
				"title" => "Debug Branch",
				"spaced" => false,
				"texts" => [
					'Even Bigger'
				]
			]
		]
	);
	require '../../pageEnd.php';
?>