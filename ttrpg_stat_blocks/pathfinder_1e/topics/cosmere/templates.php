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
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
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
				'Steel Inquisitor',
				'link' => 'monsters/templates/steel_inquisitor.php',
				'+0, see text',
				'False',
				'False'
			],
			[
				'Koloss',
				'link' => 'monsters/templates/koloss.php',
				'varies',
				'False',
				'False'
			],
			[
				'Lifeless',
				'link' => 'monsters/templates/lifeless.php',
				'varies',
				'False',
				'False'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>