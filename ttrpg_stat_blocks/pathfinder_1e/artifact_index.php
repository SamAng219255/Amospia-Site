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
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
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
				'ring',
				'18th'
			],
			[
				'Rod of Timeless Spells, Greater',
				'link' => 'items/time_rod.php#block-Rod-of-Timeless-Spells,-Greater',
				'Minor',
				'Rod',
				'ring',
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
				'ring',
				'15th'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>