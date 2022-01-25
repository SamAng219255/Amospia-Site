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
<script>
	initialSort=true;
	profNum={'light':0,'heavy':1,'powered':2,'shield':3,'':Infinity};
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		console.log(a.children[3].innerText.toLowerCase(),b.children[3].innerText.toLowerCase());
		return 8 * comp(profNum[a.children[3].innerText.toLowerCase()],profNum[b.children[3].innerText.toLowerCase()]) +
			4 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) +
			2 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Level',
			'Price',
			'Prof.',
			'EAC Bonus',
			'KAC Bonus',
			'Maximum Dex Bonus',
			'Armor Check Penalty',
			'Speed Adjustment',
			'Upgrade Slots',
			'Bulk'
		],
		[
			[
				'',
				'link' => '',
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