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
				'The Arkon',
				'link' => 'items/arkon.php',
				'Major',
				'Weapon',
				'none',
				'30th'
			],
			[
				'Black Arrow',
				'link' => 'items/black_arrow.php',
				'Minor',
				'Weapon',
				'none',
				'25th'
			],
			[
				'The Citadel of the Elements',
				'link' => 'items/citadel.php',
				'Major',
				'Magic Architecture',
				'none',
				'20th'
			],
			[
				'The Eye of Nafh',
				'link' => 'items/eye_of_nafh.php',
				'Major',
				'Wondrous',
				'none',
				'21th'
			],
			[
				'The Mind Muniz',
				'link' => 'items/muniz.php',
				'Major',
				'Wondrous',
				'head',
				'21th'
			],
			[
				'Stoiw',
				'link' => 'items/stoiw.php',
				'Major',
				'Weapon',
				'none',
				'21th'
			],
			[
				'Wainskarda',
				'link' => 'items/wainskarda.php',
				'Major',
				'Weapon',
				'none',
				'25th'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>