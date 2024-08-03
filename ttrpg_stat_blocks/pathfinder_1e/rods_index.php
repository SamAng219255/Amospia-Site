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
			'Cost',
			'CL'
		],
		[
			
			[
				'Rod of Planar Creation',
				'link' => 'items/planar_rod.php',
				'2,754,500 gp',
				'20th'
			],
			[
				'Peppermint Rod',
				'link' => 'items/peppermint_rod.php',
				'1,000 gp',
				'1st'
			],
			[
				'Iron Rod',
				'link' => 'items/iron_rod.php',
				'122,000 gp',
				'20th'
			]
		],
		true,
		false
	);
	require $startDir.'pageEnd.php';
?>