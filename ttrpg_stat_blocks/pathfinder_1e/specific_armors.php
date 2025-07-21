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
<title>Specific Armors</title>
<script>
	initialSort=true;
	initialSortFunc=function(a,b) {
		return 8 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) +
			4 * comp(a.children[4].innerText.toLowerCase(),b.children[4].innerText.toLowerCase()) +
			2 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Cost',
			'CL',
			'Prof',
			'Armor Bonus',
			'Max Dex Bonus',
			'Armor Check Penalty',
			'Arcane Spell Failure Chance',
			'Speed (30 ft.)',
			'Speed (20 ft.)',
			'Weight'
		],
		[
			[
				'Shield of Solid Force',
				'link' => 'items/force_shield.php',
				'53,020 gp',
				'15th',
				'Shield',
				'+4',
				'—',
				'—',
				'—',
				'30 ft.',
				'20 ft.',
				'5 lbs.'
			],
			[
				'Tomb Shield',
				'link' => 'items/tomb_shield.php',
				'18,000 gp',
				'5th',
				'Shield',
				'+5',
				'+2',
				'-10',
				'50%',
				'—',
				'—',
				'45 lbs.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>