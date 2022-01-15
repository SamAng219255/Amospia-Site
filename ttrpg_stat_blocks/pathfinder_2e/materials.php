<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<script>
	initialSort=true;
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 8 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) +
			4 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) +
			2 * comp(a.children[3].innerText.toLowerCase(),b.children[3].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	block(
		'Special Materials',
		'intro',
		[
			'Most items are made from readily available materials—usually leather, wood, or steel—but some weapons and armor are made from more exotic materials, giving them unique properties and other advantages. Weapons made from precious materials are better able to harm certain creatures, and armor of these materials provides enhanced protection.',
			'Most materials are metals; they can be used to make metal weapons and armor. The GM is the final arbiter of what items can be made using a material. An item can be made with no more than one precious material, and only an expert in Crafting can create it. Some rare and exotic materials require master or even legendary proficiency.',
			'A material’s Price depends on how hard it is to work, its scarcity, and its purity; most items made with precious materials use an alloy, blend, or coating rather than using the material in its purest form. The three grades of purity for precious materials are low-grade, standard-grade, and high-grade. Regardless of a precious material’s purity, an item made from it gains the full effects of the precious material, but creating higher-level items and more powerful magic runes with precious material requires greater purity.',
			'Some precious materials are available only at certain grades. For instance, adamantine can’t be low-grade, and orichalcum must be high-grade. Items made of materials with a lower grade than expected for the item’s level, or of a higher grade than necessary, will mention the precious material’s grade.'
		],
		true
	);
	table(
		[
			'Name',
			'Rarity',
			'Level',
			'Price',
			'Bulk'
		],
		[
			[
				'Annort Chunk',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'—',
				'500 gp',
				'L'
			],
			[
				'Annort Ingot',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'—',
				'5,000 gp',
				'1'
			],
			[
				'Annort Object (Low-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'3',
				'25 gp per bulk',
				'—'
			],
			[
				'Annort Object (Standard-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'8',
				'350 gp per bulk',
				'—'
			],
			[
				'Annort Object (High-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'16',
				'6,000 gp per bulk',
				'—'
			],
			[
				'Annort Weapon (Low-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'3',
				'60 gp +6 gp per bulk',
				'—'
			],
			[
				'Annort Weapon (Standard-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'11',
				'1,400 gp +140 gp per bulk',
				'—'
			],
			[
				'Annort Weapon (High-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'17',
				'13,500 gp +1,350 gp per bulk',
				'—'
			],
			[
				'Annort Armor (Low-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'5',
				'200 gp +20 gp per bulk',
				'—'
			],
			[
				'Annort Armor (Standard-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'12',
				'1,600 gp +160 gp per bulk',
				'—'
			],
			[
				'Annort Armor (High-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'19',
				'32,000 gp +3,200 gp per bulk',
				'—'
			],
			[
				'Annort Buckler (Low-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'3',
				'40 gp',
				'—'
			],
			[
				'Annort Buckler (Standard-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'8',
				'400 gp',
				'—'
			],
			[
				'Annort Buckler (High-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'16',
				'8,000 gp',
				'—'
			],
			[
				'Annort Shield (Low-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'3',
				'44 gp',
				'—'
			],
			[
				'Annort Shield (Standard-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'8',
				'440 gp',
				'—'
			],
			[
				'Annort Shield (High-Grade)',
				'link' => 'equipment/materials/annort.php',
				'Uncommon',
				'16',
				'8,800 gp',
				'—'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>