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
<title>Wondrous Items</title>
<script>
	initialSort=true;
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 4 * comp(a.children[3].innerText.toLowerCase(),b.children[3].innerText.toLowerCase()) +
			2 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Cost',
			'Slot',
			'CL'
		],
		[
			[
				'Band of Lazuli and Iron (+1)',
				'link' => 'items/lazuli_band.php',
				'78,000 gp',
				'ring',
				'20th'
			],
			[
				'Band of Lazuli and Iron (+2)',
				'link' => 'items/lazuli_band.php',
				'90,000 gp',
				'ring',
				'20th'
			],
			[
				'Band of Lazuli and Iron (+3)',
				'link' => 'items/lazuli_band.php',
				'110,000 gp',
				'ring',
				'20th'
			],
			[
				'Band of Lazuli and Iron (+4)',
				'link' => 'items/lazuli_band.php',
				'138,000 gp',
				'ring',
				'20th'
			],
			[
				'Band of Lazuli and Iron (+5)',
				'link' => 'items/lazuli_band.php',
				'174,000 gp',
				'ring',
				'20th'
			],
			[
				'Book of Endless Pages',
				'link' => 'items/endless_book.php',
				'1,500 gp',
				'none',
				'1st'
			],
			[
				'Goodberry Sprig',
				'link' => 'items/goodberry_sprig.php',
				'720 gp',
				'none',
				'1st'
			],
			[
				'Money Changer\'s Pouch',
				'link' => 'items/coin_purse.php',
				'2,000 gp gp',
				'none',
				'9th'
			],
			[
				'Ring of Morphic Steel',
				'link' => 'items/morphic_ring.php',
				'1,100 gp',
				'none',
				'1st'
			],
			[
				'Rod of Planar Creation',
				'link' => 'items/planar_rod.php',
				'2,754,500 gp',
				'none',
				'20th'
			],
			[
				'Unprepared Wizard\'s Component Pouch',
				'link' => 'items/component_pouch.php',
				'135,000 gp',
				'none',
				'5th'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>