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
			2 * comp(a.children[3].innerText.toLowerCase(),b.children[3].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	block(
		'Magic Architecture',
		'intro',
		[
			'At their height, Narmen possessed knowledge and technology capable of battling the endless hordes of demons and void gods coming up from the direction of Heart of Darkness. One of the remnants of this is referred to as Magic Architecture. Unsatisfied by the limitations of standard magic item creation, Narmen learned to build complex engines capable of manipulating large amounts of power. Due the size of these devices they are often worked into the structure of buildings. Most of these buildings are unique though some followed plans designed for easy replication.'
		]
	);
	table(
		[
			'Name',
			'Cost (gp)',
			'Cost (BP)',
			'Cost (I*)',
			'Cost (NBP**)',
			'CL'
		],
		[
			[
				'Construction Node',
				'link' => 'items/construction_node.php',
				'800,000 gp',
				'200 BP',
				'0xBB80 I',
				'0xBC NBP',
				'3rd'
			],
			[
				'Automated Construction Node (+10)',
				'link' => 'items/construction_node_auto.php',
				'804,000 gp',
				'201 BP',
				'0xBC80 I',
				'0xBD NBP',
				'5th'
			],
			[
				'Automated Construction Node (+20)',
				'link' => 'items/construction_node_auto.php',
				'1,204,000 gp',
				'301 BP',
				'0x1,1A40 I',
				'0x11A NBP',
				'5th'
			],
			[
				'Automated Construction Node (+30)',
				'link' => 'items/construction_node_auto.php',
				'1,604,000 gp',
				'401 BP',
				'0x1,7800 I',
				'0x178 NBP',
				'5th'
			],
			[
				'Automated Construction Node (+40)',
				'link' => 'items/construction_node_auto.php',
				'2,004,000 gp',
				'501 BP',
				'0x1,D5C0 I',
				'0x1D6 NBP',
				'5th'
			],
			[
				'Automated Construction Node (+50)',
				'link' => 'items/construction_node_auto.php',
				'2,404,000 gp',
				'601 BP',
				'0x2,3380 I',
				'0x234 NBP',
				'5th'
			],
			[
				'Mausoleum of Eternal Rest',
				'link' => 'items/mausoleum.php',
				'90,000 gp',
				'601 BP',
				'0x1518 I',
				'0x234 NBP',
				'9th'
			]
		]
	);
?>
<span class="reduced"><p>
	* <a href="narmen_currency.php" target="_empty">Iridescent Pearls</a>. A Narmen currency measured in base 16 worth 16 gp.<br>
	** Narmen Build Points. Approximately 256 Iridescent Pearls or 4096 gold. Measured in base 16.
</p></span>
<?php require $startDir.'pageEnd.php'; ?>