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
<title>NPCs Index</title>
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
			'CR',
			'Race/Class'
		],
		[
			[
				'Piglin, Swordsman',
				'link' => 'monsters/piglin.php',
				'5',
				'piglin fighter 5'
			],
			[
				'Piglin, Crossbowman',
				'link' => 'monsters/piglin_crossbow.php',
				'4',
				'piglin fighter 5'
			],
			[
				'Piglin, Brute',
				'link' => 'monsters/piglin_brute.php',
				'7',
				'piglin fighter 8'
			],
			[
				'Evoker',
				'link' => 'monsters/evoker.php',
				'8',
				'illager conjurer 9'
			],
			[
				'Illusioner',
				'link' => 'monsters/illusioner.php',
				'8',
				'illager wizard 9'
			],
			[
				'Pillager',
				'link' => 'monsters/pillager.php',
				'6',
				'illager fighter 7'
			],
			[
				'Vindicator',
				'link' => 'monsters/vindicator.php',
				'7',
				'illager fighter 8'
			],
			[
				'Witch',
				'link' => 'monsters/witch.php',
				'7',
				'illager alchemist 8'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>