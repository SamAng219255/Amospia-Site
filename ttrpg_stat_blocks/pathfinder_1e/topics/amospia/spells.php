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
		return 4 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) + 
			2 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) + 
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Level',
			'School',
			'Classes',
			'Description'
		],
		[
			[
				'Pettep\'s Raise Stone',
				'link' => 'spells/raise_stone.php',
				'0',
				'Transmutation',
				'adept, arcanist, cleric, druid, magus, occultist, oracle, psychic, sorcerer, wizard',
				'Raises an area of stone into a structure.'
			],
			[
				'Pettep\'s Raise Stone',
				'link' => 'spells/raise_stone.php',
				'1',
				'Transmutation',
				'antipaladin, paladin',
				'Raises an area of stone into a structure.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>