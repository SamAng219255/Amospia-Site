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
	profNum={'simple':0,'martial':1,'exotic':2,'firearm':3};
	handsNum={'light':0,'one-handed':1,'two-handed':2};
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 8 * comp(profNum[a.children[2].innerText.toLowerCase()],profNum[b.children[2].innerText.toLowerCase()]) +
			4 * comp(handsNum[a.children[3].innerText.toLowerCase()],handsNum[b.children[3].innerText.toLowerCase()]) +
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
			'Hands',
			'Dmg (S)',
			'Dmg (M)',
			'Critical',
			'Range',
			'Weight',
			'Type',
			'Special'
		],
		[
			[
				'War Bow',
				'link' => 'items/warbow.php',
				'75 gp',
				'Martial',
				'Ranged',
				'1d6',
				'1d8',
				'x3',
				'100 ft.',
				'3 lbs.',
				'P',
				'—'
			],
			[
				'Composite War Bow',
				'link' => 'items/warbow_composite.php',
				'100 gp',
				'Martial',
				'Ranged',
				'1d6',
				'1d8',
				'x3',
				'110 ft.',
				'3 lbs.',
				'P',
				'—'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>