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
			'CR',
			'Type',
			'Environment'
		],
		[
			[
				'Runebound Guardian',
				'link' => 'monsters/runebound_guardian.php',
				'10',
				'Construct',
				'Any' 
			],
			[
				'Radiant Golem',
				'link' => 'monsters/radiant_golem.php',
				'15',
				'Construct',
				'Any' 
			],
			[
				'Walking Aegis',
				'link' => 'monsters/walking_aegis.php',
				'20',
				'Construct',
				'Any' 
			],
			[
				'Narman Saint',
				'link' => 'monsters/narman_saint.php',
				'12',
				'Outsider',
				'Any' 
			],
			[
				'Narman, Demonic',
				'link' => 'monsters/narman_demonic.php',
				'12',
				'Outsider',
				'Any' 
			],
			[
				'Void Demon',
				'link' => 'monsters/void_demon.php',
				'11',
				'Outsider',
				'Any' 
			],
			[
				'Narman, Preflood',
				'link' => 'monsters/narman_preflood.php',
				'18',
				'Humanoid',
				'Any' 
			]
		]
	);
	require $startDir.'pageEnd.php';
?>