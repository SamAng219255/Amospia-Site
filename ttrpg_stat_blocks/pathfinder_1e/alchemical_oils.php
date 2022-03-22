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
<script>
	initialSort=true;
	profNum={'both':0,'weapon':1,'armor':2};
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 4 * comp(profNum[a.children[2].innerText.toLowerCase()],profNum[b.children[2].innerText.toLowerCase()]) +
			2 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	block(
		'Alchemical Oils',
		'intro',
		quick_array([
			'Alchemical oils are a recent invention that allows weapons, armor, and other items to take on a variety of properies for a limited time. The following oils are categorized based on whether they are for armor or weaponry though, unless specified otherwise, any oil can be placed on any hard and smooth surface with approximately the same amount of area. Unless specified otherwise, all alchemical oils last for 1 hour and take at-least 1 full-round action to apply. The listed prices are for a single dose.'
		])
	);
	table(
		[
			'Name',
			'Cost',
			'Type',
			'DC'
		],
		[
			[
				'Cold Iron',
				'link' => 'items/alchemical_oils/cold_iron.php',
				'50 gp',
				'Both',
				'WIP'
			],
			[
				'Silver',
				'link' => 'items/alchemical_oils/silver.php',
				'5 gp',
				'Both',
				'WIP'
			],
			[
				'Adamantine',
				'link' => 'items/alchemical_oils/adamantine.php',
				'375 gp',
				'Armor',
				'WIP'
			],
			[
				'Adamantine',
				'link' => 'items/alchemical_oils/adamantine.php',
				'75 gp',
				'Weapon',
				'WIP'
			],
			[
				'Noqual',
				'link' => 'items/alchemical_oils/noqual.php',
				'300 gp',
				'Armor',
				'WIP'
			],
			[
				'Noqual',
				'link' => 'items/alchemical_oils/noqual.php',
				'13 gp',
				'Weapon',
				'WIP'
			],
			[
				'Annort',
				'link' => 'items/alchemical_oils/annort.php',
				'375 gp',
				'Armor',
				'WIP'
			],
			[
				'Annort',
				'link' => 'items/alchemical_oils/annort.php',
				'25 gp',
				'Weapon',
				'WIP'
			],
			[
				'Luminescent',
				'link' => 'items/alchemical_oils/luminescent.php',
				'25 gp',
				'Both',
				'WIP'
			],
			[
				'Luminescent, Greater',
				'link' => 'items/alchemical_oils/luminescent.php',
				'750 gp',
				'Both',
				'WIP'
			],
			[
				'Force',
				'link' => 'items/alchemical_oils/force.php',
				'175 gp',
				'Both',
				'WIP'
			],
			[
				'Corrosive',
				'link' => 'items/alchemical_oils/corrosive.php',
				'50 gp',
				'Weapon',
				'WIP'
			],
			[
				'Flaming',
				'link' => 'items/alchemical_oils/flaming.php',
				'50 gp',
				'Weapon',
				'WIP'
			],
			[
				'Frost',
				'link' => 'items/alchemical_oils/frost.php',
				'50 gp',
				'Weapon',
				'WIP'
			],
			[
				'Shock',
				'link' => 'items/alchemical_oils/shock.php',
				'50 gp',
				'Weapon',
				'WIP'
			],
			[
				'Sticky',
				'link' => 'items/alchemical_oils/sticky.php',
				'300 gp',
				'Weapon',
				'WIP'
			],
			[
				'Bitter',
				'link' => 'items/alchemical_oils/bitter.php',
				'750 gp',
				'Armor',
				'WIP'
			],
			[
				'Mirror Polish',
				'link' => 'items/alchemical_oils/mirror.php',
				'300 gp',
				'Armor',
				'WIP'
			],
			[
				'Arcane Mirror Polish',
				'link' => 'items/alchemical_oils/mirror.php#block-Arcane-Mirror-Polish',
				'5,000 gp',
				'Armor',
				'WIP'
			],
			[
				'Slick',
				'link' => 'items/alchemical_oils/slick.php',
				'50 gp',
				'Armor',
				'WIP'
			],
			[
				'Slick, Improved',
				'link' => 'items/alchemical_oils/slick.php',
				'200 gp',
				'Armor',
				'WIP'
			],
			[
				'Slick, Greater',
				'link' => 'items/alchemical_oils/slick.php',
				'450 gp',
				'Armor',
				'WIP'
			],
			[
				'Putrid',
				'link' => 'items/alchemical_oils/putrid.php',
				'250 gp',
				'Armor',
				'WIP'
			],
			[
				'Acid Resistance',
				'link' => 'items/alchemical_oils/resist_acid.php',
				'150 gp',
				'Armor',
				'WIP'
			],
			[
				'Acid Resistance, Greater',
				'link' => 'items/alchemical_oils/resist_acid.php',
				'300 gp',
				'Armor',
				'WIP'
			],
			[
				'Cold Resistance',
				'link' => 'items/alchemical_oils/resist_cold.php',
				'150 gp',
				'Armor',
				'WIP'
			],
			[
				'Cold Resistance, Greater',
				'link' => 'items/alchemical_oils/resist_cold.php',
				'300 gp',
				'Armor',
				'WIP'
			],
			[
				'Electricity Resistance',
				'link' => 'items/alchemical_oils/resist_electricity.php',
				'150 gp',
				'Armor',
				'WIP'
			],
			[
				'Electricity Resistance, Greater',
				'link' => 'items/alchemical_oils/resist_electricity.php',
				'300 gp',
				'Armor',
				'WIP'
			],
			[
				'Fire Resistance',
				'link' => 'items/alchemical_oils/resist_fire.php',
				'150 gp',
				'Armor',
				'WIP'
			],
			[
				'Fire Resistance, Greater',
				'link' => 'items/alchemical_oils/resist_fire.php',
				'300 gp',
				'Armor',
				'WIP'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>