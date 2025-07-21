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
		return 2 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) + 
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'CR',
			'Race/Class'
		],
		[
			[
				'Plague Child Priest of Niva',
				'link' => 'monsters/plague_child_adept.php',
				'1/2',
				'nivan adept 1'
			],
			[
				'Plague Child Craftsman',
				'link' => 'monsters/plague_child_craftsman.php',
				'1/2',
				'nivan expert 1'
			],
			[
				'Plague Child Village Guard',
				'link' => 'monsters/plague_child_warrior.php',
				'1',
				'nivan warrior 1'
			],
			[
				'Plague Child',
				'link' => 'monsters/plague_child.php',
				'1/2',
				'nivan commoner 1'
			],
			[
				'Elephant Guard',
				'link' => 'monsters/mandriff_elephant.php',
				'12',
				'mandriff (elephant) warrior 10'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>