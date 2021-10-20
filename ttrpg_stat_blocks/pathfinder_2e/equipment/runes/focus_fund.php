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
<title>Heightening</title>
<?php
	item2eBlockAuto(
		'Heightening',
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
			'A ii/heightening/ii rune uses the caster\'s innate power to amplify the power of the spells they cast, heightening spells cast using this channel by 1 level up to a maximum 1 less than the highest level of spell you can cast.',
			'You can upgrade the ii/heightening/ii rune already etched on a channel to a stronger version, increasing the values of the existing rune to those of the new rune. You must have the formula of the stronger rune to do so, and the Price of the upgrade is the difference between the two runes’ Prices.'
		],
		[
			[
				"title" => "Casting Potency (+1)",
				"spaced" => false,
				"level" => 5,
				"texts" => [
					'Price 125 gp',
					'bb/Craft Requirements/bb You are an expert in Crafting.'
				]
			],
			[
				"title" => "Casting Potency (+2)",
				"spaced" => false,
				"level" => 12,
				"texts" => [
					'Price 1,425 gp',
					'Spells cast using this channel are heightened by 2 levels up to a maximum 1 less than the highest level of spell you can cast.',
					'bb/Craft Requirements/bb You are a master in Crafting.'
				]
			],
			[
				"title" => "Casting Potency (+3)",
				"spaced" => false,
				"level" => 20,
				"texts" => [
					'Price 61,425 gp',
					'Spells cast using this channel are heightened by 3 levels up to a maximum 1 less than the highest level of spell you can cast.',
					'bb/Craft Requirements/bb You are legendary in Crafting.'
				]
			]
		]
	);
	require $startDir.'pageEnd.php';
?>