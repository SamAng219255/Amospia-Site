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
				'Half-Shadow',
				'link' => 'monsters/templates/halfshadow.php',
				'+0',
				'False',
				'False'
			],
			[
				'Shadow',
				'link' => 'monsters/templates/shadow.php',
				'+0',
				'False',
				'False'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>