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
<title>Casting Potency</title>
<?php
	item2eBlockAuto(
		'Casting Potency',
		'2+',
		'Common',
		['Magical','Evocation'],
		false,
		false,
		'etched onto a casting channel',
		0,
		false,
		false,
		[
			'Magical enhancements make your spells strike true. the DCs of spells cast with this channel gain a +1 item bonus, and the channel can be etched with one property rune.',
			'You can upgrade the ii/casting potency/ii rune already etched on a channel to a stronger version, increasing the values of the existing rune to those of the new rune. You must have the formula of the stronger rune to do so, and the Price of the upgrade is the difference between the two runes’ Prices.'
		],
		[
			[
				"title" => "Casting Potency (+1)",
				"spaced" => false,
				"level" => 2,
				"texts" => [
					'Price 35 gp',
					'bb/Craft Requirements/bb You are an expert in Crafting.'
				]
			],
			[
				"title" => "Casting Potency (+2)",
				"spaced" => false,
				"level" => 9,
				"texts" => [
					'Price 575 gp',
					'The item bonus to spell DCs is +2, and the channel can be etched with two property runes.',
					'bb/Craft Requirements/bb You are a master in Crafting.'
				]
			],
			[
				"title" => "Casting Potency (+3)",
				"spaced" => false,
				"level" => 16,
				"texts" => [
					'Price 8,575 gp',
					'The item bonus to spell DCs is +3, and the channel can be etched with three property runes.',
					'bb/Craft Requirements/bb You are legendary in Crafting.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>