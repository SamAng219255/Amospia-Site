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
<title>Templates Index</title>
<script>
	initialSort=true;
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 4 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'CR Increase',
			'Simple',
			'Use with Summons'
		],
		[
			[
				'Skeleton',
				'link' => 'monsters/templates/skeleton.php',
				'Varies',
				'False',
				'False'
			],
			[
				'Zombie',
				'link' => 'monsters/templates/zombie.php',
				'Varies',
				'False',
				'False'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>