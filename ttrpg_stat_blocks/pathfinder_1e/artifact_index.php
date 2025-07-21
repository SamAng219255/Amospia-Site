<?php 
	$startDir='';
	for($i=0; $i<20; $i++) {
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
		return 2 * comp(b.children[1].innerText.toLowerCase(),a.children[1].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Degree',
			'Base Type',
			'Slot',
			'CL'
		],
		[
			[
				'Barjoskadwaz',
				'link' => 'items/barjoskadwaz.php',
				'Major',
				'Weapon',
				'none',
				'30th'
			],
			[
				'Blade of the Forest\'s Shadow',
				'Major',
				'link' => 'items/botfs.php',
				'Weapon',
				'none',
				'30th'
			],
			[
				'Rod of Timeless Spells',
				'link' => 'items/time_rod.php',
				'Minor',
				'Rod',
				'none',
				'18th'
			],
			[
				'Rod of Timeless Spells, Greater',
				'link' => 'items/time_rod.php#block-Rod-of-Timeless-Spells,-Greater',
				'Minor',
				'Rod',
				'none',
				'22th'
			],
			[
				'Runed Chain',
				'link' => 'items/runed_chain.php',
				'Major',
				'Weapon',
				'none',
				'15th'
			],
			[
				'Staff of Truthlight',
				'link' => 'items/truthlight.php',
				'Major',
				'Staff',
				'none',
				'15th'
			],
			[
				'Vorpmalcide',
				'link' => 'items/vorpmalcide.php',
				'Major',
				'Weapon',
				'none',
				'30th'
			],
			[
				'Annihilator',
				'link' => 'items/annihilator.php',
				'Minor',
				'Weapon',
				'none',
				'25th'
			],
			[
				'Black Aegis',
				'link' => 'items/black_aegis.php',
				'Minor',
				'Shield',
				'none',
				'20th'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>