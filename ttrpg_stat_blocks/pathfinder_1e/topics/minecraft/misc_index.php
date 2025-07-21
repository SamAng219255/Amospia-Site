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
		return comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Type',
			'Cost',
			'Weight'
		],
		[
			[
				'Prepared Soul Soil',
				'link' => 'items/soul_soil.php',
				'Alchemical Power Component',
				'75 gp',
				'—'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>