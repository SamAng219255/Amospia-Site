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
			'Type',
			'Environment'
		],
		[
			[
				'Sleaj',
				'link' => 'monsters/sleaj.php',
				'1/2',
				'ooze',
				'any (caves)'
			],
			[
				'Kundrak',
				'link' => 'monsters/lazuli_dragon.php',
				'35+/MR 10',
				'dragon',
				'Deep Space (Hall of Stars)'
			],
			[
				'Dread Skull Animus',
				'link' => 'monsters/dread_skull_animus.php',
				'varies',
				'undead',
				'any'
			],
			[
				'Attaithi',
				'link' => 'monsters/attaithi.php',
				'9',
				'false animate',
				'any'
			],
			[
				'Attaithi Spawn',
				'link' => 'monsters/attaithi_spawn.php',
				'4',
				'false animate',
				'any'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>