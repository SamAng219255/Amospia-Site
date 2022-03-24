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
	profNum={'light':0,'medium':1,'heavy':2,'shield':3};
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 8 * comp(profNum[a.children[2].innerText.toLowerCase()],profNum[b.children[2].innerText.toLowerCase()]) +
			4 * comp(a.children[3].innerText.toLowerCase(),b.children[3].innerText.toLowerCase()) +
			2 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Cost',
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
				'' 
			]
		]
	);
	require $startDir.'pageEnd.php';
?>