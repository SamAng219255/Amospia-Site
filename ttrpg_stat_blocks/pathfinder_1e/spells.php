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
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 4 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) + 
			2 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) + 
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Level',
			'School',
			'Classes',
			'Description'
		],
		[
			[
				'Micro Meteor',
				'link' => 'spells/micro_meteor.php',
				'1',
				'Transmutation',
				'antipaladin, bloodrager, cleric, druid, inquisitor, magus, oracle, paladin, shaman, sorcerer, wizard',
				'Up to 3 pebbles gain a +1 bonus and deal 1d6 damage.'
			],
			[
				'Shooting Stars',
				'link' => 'spells/shooting_stars.php',
				'3',
				'Transmutation',
				'antipaladin, bloodrager, inquisitor, magus, paladin, sorcerer, wizard',
				'Up to 3 stones per level gain a +1 bonus/four levels (max +5) and deal 1d6 damage.'
			],
			[
				'Shooting Stars',
				'link' => 'spells/shooting_stars.php',
				'4',
				'Transmutation',
				'cleric, druid, oracle, shaman',
				'Up to 3 stones per level gain a +1 bonus/four levels (max +5) and deal 1d6 damage.'
			],
			[
				'Meteor Stone',
				'link' => 'spells/meteor_stone.php',
				'6',
				'Evocation',
				'antipaladin, bloodrager, inquisitor, magus, paladin, sorcerer, wizard',
				'Throw a meteor or comet at an enemy.'
			],
			[
				'Meteor Stone',
				'link' => 'spells/meteor_stone.php',
				'7',
				'Evocation',
				'cleric, druid, oracle, shaman',
				'Throw a meteor or comet at an enemy.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>