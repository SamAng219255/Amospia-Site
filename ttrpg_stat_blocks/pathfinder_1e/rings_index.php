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
				quick_format('Band of Lazuli and Iron (with 1 ii/wish/ii)'),
				'link' => 'items/lazuli_band.php',
				'55,300 gp',
				'17th'
			],
			[
				'Band of Lazuli and Iron',
				'link' => 'items/lazuli_band.php',
				'15,000 gp',
				'17th'
			],
			[
				'Ring of Morphic Steel',
				'link' => 'items/morphic_ring.php',
				'1,100 gp',
				'1st'
			],
			[
				'Arcane Signet',
				'link' => 'items/arcane_signet.php',
				'1,000 gp',
				'1st'
			]
		],
		true,
		false
	);
	require $startDir.'pageEnd.php';
?>