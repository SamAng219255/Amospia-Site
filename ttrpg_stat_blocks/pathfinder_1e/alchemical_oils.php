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
			'Alchemical oils are a recent invention that allows weapons, armor, and other items to take on a variety of properies for a limited time. The following oils are categorized based on whether they are for armor or weaponry though, unless specified otherwise, any oil can be placed on any hard and smooth surface with approximately the same amount of area. Unless specified otherwise, all alchemical oils last for 1 hour and take at-least 1 full-round action to apply. Careful application can take longer but no longer than a minute as the substances begin reacting immediately and taking excessive time can cause the application to not take. There is no benefit to spending longer when applying the oil. The listed prices are for a single dose.',
			'Alchemical oils overlap heavily with weapon blanches, with every common type of weapon blanch having an alchemical oil substitution. However, alchemical oils are nearly always more practical due to often being cheaper and lasting for more than a single blow.',
			'So called "All-Day" alchemical oils can also be purchased or crafted that last for 18 hours after application and are designed to be applied during normal daily equipment maintainence. These oils cost three times the normal amount and their craft DC is 5 higher. Adventurers who believe they will be needing the oil\'s effect constantly throughout the day or at a moment\'s notice when they won\'t have the time to apply the oil generally prefer these longer lasting variants despite the increased cost.'
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
				'25'
			],
			[
				'Silver',
				'link' => 'items/alchemical_oils/silver.php',
				'5 gp',
				'Both',
				'25'
			],
			[
				'Adamantine',
				'link' => 'items/alchemical_oils/adamantine.php',
				'375 gp',
				'Armor',
				'25'
			],
			[
				'Adamantine',
				'link' => 'items/alchemical_oils/adamantine.php',
				'75 gp',
				'Weapon',
				'25'
			],
			[
				'Noqual',
				'link' => 'items/alchemical_oils/noqual.php',
				'300 gp',
				'Armor',
				'25'
			],
			[
				'Noqual',
				'link' => 'items/alchemical_oils/noqual.php',
				'13 gp',
				'Weapon',
				'25'
			],
			[
				'Annort',
				'link' => 'items/alchemical_oils/annort.php',
				'375 gp',
				'Armor',
				'25'
			],
			[
				'Annort',
				'link' => 'items/alchemical_oils/annort.php',
				'25 gp',
				'Weapon',
				'25'
			],
			[
				'Luminescent',
				'link' => 'items/alchemical_oils/luminescent.php',
				'25 gp',
				'Both',
				'15'
			],
			[
				'Luminescent, Greater',
				'link' => 'items/alchemical_oils/luminescent.php',
				'750 gp',
				'Both',
				'25'
			],
			[
				'Force',
				'link' => 'items/alchemical_oils/force.php',
				'175 gp',
				'Both',
				'29'
			],
			[
				'Corrosive',
				'link' => 'items/alchemical_oils/corrosive.php',
				'50 gp',
				'Weapon',
				'28'
			],
			[
				'Flaming',
				'link' => 'items/alchemical_oils/flaming.php',
				'50 gp',
				'Weapon',
				'28'
			],
			[
				'Frost',
				'link' => 'items/alchemical_oils/frost.php',
				'50 gp',
				'Weapon',
				'28'
			],
			[
				'Shock',
				'link' => 'items/alchemical_oils/shock.php',
				'50 gp',
				'Weapon',
				'28'
			],
			[
				'Sticky',
				'link' => 'items/alchemical_oils/sticky.php',
				'300 gp',
				'Weapon',
				'28'
			],
			[
				'Bitter',
				'link' => 'items/alchemical_oils/bitter.php',
				'750 gp',
				'Armor',
				'25'
			],
			[
				'Mirror Polish',
				'link' => 'items/alchemical_oils/mirror.php',
				'300 gp',
				'Armor',
				'28'
			],
			[
				'Arcane Mirror Polish',
				'link' => 'items/alchemical_oils/mirror.php#block-Arcane-Mirror-Polish',
				'4,550 gp',
				'Armor',
				'33'
			],
			[
				'Slick',
				'link' => 'items/alchemical_oils/slick.php',
				'50 gp',
				'Armor',
				'24'
			],
			[
				'Slick, Improved',
				'link' => 'items/alchemical_oils/slick.php',
				'200 gp',
				'Armor',
				'30'
			],
			[
				'Slick, Greater',
				'link' => 'items/alchemical_oils/slick.php',
				'450 gp',
				'Armor',
				'35'
			],
			[
				'Putrid',
				'link' => 'items/alchemical_oils/putrid.php',
				'250 gp',
				'Armor',
				'25'
			],
			[
				'Energy Resistance, Lesser',
				'link' => 'items/alchemical_oils/resist_energy.php',
				'50 gp',
				'Armor',
				'21'
			],
			[
				'Energy Resistance',
				'link' => 'items/alchemical_oils/resist_energy.php',
				'200 gp',
				'Armor',
				'23'
			],
			[
				'Energy Resistance, Improved',
				'link' => 'items/alchemical_oils/resist_energy.php',
				'450 gp',
				'Armor',
				'27'
			],
			[
				'Energy Resistance, Greater',
				'link' => 'items/alchemical_oils/resist_energy.php',
				'800 gp',
				'Armor',
				'31'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>