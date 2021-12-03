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
<title>Casting Channel Property Runes</title>
<script>
	initialSort=true;
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 4 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) + 
			2 * comp(a.children[3].innerText.toLowerCase(),b.children[3].innerText.toLowerCase()) + 
			comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	block(
		'Casting Channel Property Runes',
		'',
		quick_array(
			'Property runes add special abilities to armor, a weapon, or a casting channel in addition to the item’s fundamental runes. If a suit of armor, weapon, or casting channel has multiple etchings of the same rune, only the highest-level one applies. You can upgrade a property rune to a higher-level type of that rune in the same way you would upgrade a fundamental rune.
			Rune abilities that must be activated follow the rules for activating magic items.
			Casting channels are capable of receiving certain runes normally designed for weapons. When such a rune is placed on a casting channel, any effect that occurs when you hit with the weapon occurs instead when you hit with a spell that deals damage. If the rune can normally only be applied to melee weapons then its effects only take place on spells with a range of touch. If the rune can noramlly only be applied to ranged weapons then its effects only take place on spells with a range longer than touch. All other requirements relating to standard properties of the weapon are ignored.'/*If the spell has multiple targets, you choose only one of the targets to be affected by the rune.*/
		)
	);
	table(
		[
			'Name',
			'Rarity',
			'Level',
			'Price',
			'Effect'
		],
		[
			[
				'Ghost Touch',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=297',
				'Common',
				'4',
				'75 gp',
				'Your spells have inceased effectiveness against incorporeal creatures.'
			],
			[
				'Bane',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=1041',
				'Uncommon',
				'4',
				'100 gp',
				'You spells have inceased effectiveness against creatures of a specific type.'
			],
			[
				'Disrupting',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=294',
				'Common',
				'5',
				'150 gp',
				'You spells deal extra damage against undead.'
			],
			[
				'Disrupting (Greater)',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=294',
				'Uncommon',
				'14',
				'4,300 gp',
				'You spells deal extra damage against undead.'
			],
			[
				'Corrosive',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=292',
				'Common',
				'8',
				'100 gp',
				'You spells deal extra acid damage.'
			],
			[
				'Flaming',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=295',
				'Common',
				'8',
				'100 gp',
				'You spells deal extra fire damage.'
			],
			[
				'Frost',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=296',
				'Common',
				'8',
				'100 gp',
				'You spells deal extra cold damage.'
			],
			[
				'Shock',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=303',
				'Common',
				'8',
				'100 gp',
				'You spells deal extra electricity damage.'
			],
			[
				'Thundering',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=306',
				'Common',
				'8',
				'100 gp',
				'You spells deal extra sonic damage.'
			],
			[
				'Corrosive (Greater)',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=292',
				'Common',
				'15',
				'6,500 gp',
				'You spells deal extra acid damage.'
			],
			[
				'Flaming (Greater)',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=295',
				'Common',
				'15',
				'6,500 gp',
				'You spells deal extra fire damage.'
			],
			[
				'Frost (Greater)',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=296',
				'Common',
				'15',
				'6,500 gp',
				'You spells deal extra cold damage.'
			],
			[
				'Shock (Greater)',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=303',
				'Common',
				'15',
				'6,500 gp',
				'You spells deal extra electricity damage.'
			],
			[
				'Thundering (Greater)',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=306',
				'Common',
				'15',
				'6,500 gp',
				'You spells deal extra sonic damage.'
			],
			[
				'Holy',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=299',
				'Common',
				'11',
				'1,400 gp',
				'You spells deal extra damage against evil creatures.'
			],
			[
				'Unholy',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=307',
				'Common',
				'11',
				'1,400 gp',
				'You spells deal extra damage against good creatures.'
			],
			[
				'Anarchic',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=290',
				'Common',
				'11',
				'1,400 gp',
				'You spells deal extra damage against lawful creatures.'
			],
			[
				'Axiomatic',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=291',
				'Common',
				'11',
				'1,400 gp',
				'You spells deal extra damage against chaotic creatures.'
			],
			[
				'Keen',
				'link' => 'https://2e.aonprd.com/Equipment.aspx?ID=291',
				'Uncommon',
				'13',
				'1,400 gp',
				'Increases the likelihood of critically succeeding at a spell attack.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>