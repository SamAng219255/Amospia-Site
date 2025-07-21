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
				'Steel Inquisitor',
				'link' => 'monsters/steel_inquisitor.php',
				'TODO',
				'human TODO lvl'
			],
			[
				'Greater Steel Inquisitor',
				'link' => 'monsters/steel_inquisitor_greater.php',
				'TODO',
				'human TODO lvl'
			],
			[
				'Singer, Dullform',
				'link' => 'monsters/singer_dullform.php',
				'2',
				'singer (dullform) commoner 4'
			],
			[
				'Singer, Warform',
				'link' => 'monsters/singer_warform.php',
				'7',
				'singer (warform) warrior 8'
			],
			[
				'Singer, Workform',
				'link' => 'monsters/singer_workform.php',
				'2',
				'singer (workform) expert 4'
			],
			[
				'Singer, Nimbleform',
				'link' => 'monsters/singer_nimbleform.php',
				'4',
				'singer (nimbleform) expert 6'
			],
			[
				'Regal, Stormform',
				'link' => 'monsters/regal_stormform.php',
				'8',
				'singer (stormform) warrior 8'
			],
			[
				'Regal, Envoyform',
				'link' => 'monsters/regal_envoyform.php',
				'6',
				'singer (envoyform) expert 8'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>