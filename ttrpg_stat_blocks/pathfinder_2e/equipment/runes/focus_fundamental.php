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
<title>Casting Channel Fundamental Runes</title>
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
		'Casting Channel Fundamental Runes',
		'',
		quick_array(
			'Six fundamental runes produce the most essential magic of protection and destruction: ii/armor potency/ii and ii/resilient/ii runes for armor, ii/weapon potency/ii and ii/striking runes/ii for weapons, and ii/casting potency/ii and ii/heightening/ii runes for casting channels. A potency rune is what makes a weapon a magic weapon or armor magic armor.
			An item can have only one fundamental rune of each type, though etching a stronger rune can upgrade an existing rune to the more powerful version (as described in each rune’s entry). As you level up, you typically alternate between increasing an item’s potency rune and its striking, resilient, or heightening rune when you can afford to.'
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
				'<a href="focus_potency.php">Casting Potency (+1)</a>',
				'Common',
				'2',
				'35 gp',
				'Grants a +1 bonus to spell DCs'
			],
			[
				'<a href="focus_fund.php">Heightening</a>',
				'Common',
				'5',
				'125 gp',
				'Heightens spells up to a maximum of 1 less than the highest level you can cast.'
			],
			[
				'<a href="focus_potency.php">Casting Potency (+2)</a>',
				'Common',
				'9',
				'575 gp',
				'Grants a +1 bonus to spell DCs'
			],
			[
				'<a href="focus_fund.php">Heightening (Greater)</a>',
				'Common',
				'12',
				'1,425 gp',
				'Heightens spells up to a maximum of 1 less than the highest level you can cast.'
			],
			[
				'<a href="focus_potency.php">Casting Potency (+3)</a>',
				'Common',
				'16',
				'8,575 gp',
				'Grants a +1 bonus to spell DCs'
			],
			[
				'<a href="focus_fund.php">Heightening (Major)</a>',
				'Common',
				'20',
				'61,425 gp',
				'Heightens spells up to a maximum of 1 less than the highest level you can cast.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>