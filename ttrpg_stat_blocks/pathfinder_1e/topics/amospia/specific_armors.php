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
				'',
				'link' => 'items/',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'' 
			]
		]
	);
	require $startDir.'pageEnd.php';
?>