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
<title>Monsters Index</title>
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
			'CR',
			'Type',
			'Environment'
		],
		[
			[
				'Bee, Dire',
				'link' => 'monsters/bee.php',
				'4',
				'vermin',
				'temperate plains'
			],
			[
				'Blaze',
				'link' => 'monsters/blaze.php',
				'7',
				'outsider',
				'any (The Nether)'
			],
			[
				'Spider, Cave',
				'link' => 'monsters/cave_spider.php',
				'4',
				'vermin',
				'any (caves, particularly abandoned artificial caves)'
			],
			[
				'Creeper',
				'link' => 'monsters/creeper.php',
				'5',
				'plant',
				'any (forests and jungles)'
			],
			[
				'Endermite',
				'link' => 'monsters/endermite.php',
				'1',
				'vermin',
				'any'
			],
			[
				'Ghast',
				'link' => 'monsters/ghast.php',
				'4',
				'outsider',
				'The Nether'
			],
			[
				'Goat',
				'link' => 'monsters/goat.php',
				'1',
				'animal',
				'cold or temperate hills or mountains'
			],
			[
				'Guardian',
				'link' => 'monsters/guardian.php',
				'4',
				'aberration',
				'Ocean (Ocean Monuments)'
			],
			[
				'Guardian, Elder',
				'link' => 'monsters/guardian.php#block-Elder-Guardian',
				'8',
				'aberration',
				'Ocean (Ocean Monuments)'
			],
			[
				'Hoglin',
				'link' => 'monsters/hoglin.php',
				'5',
				'animal',
				'The Nether (Crimson Forests)'
			],
			[
				'Iron Guard',
				'link' => 'monsters/iron_golem.php',
				'10',
				'construct',
				'any'
			],
			[
				'Llama, Dire',
				'link' => 'monsters/llama.php',
				'5',
				'animal',
				'cold or temperate hills or mountains'
			],
			[
				'Magma Cube',
				'link' => 'monsters/magma_slime.php',
				'3',
				'ooze',
				'The Nether'
			],
			[
				'Phantom',
				'link' => 'monsters/phantom.php',
				'2',
				'undead',
				'any'
			],
			[
				'Polar Bear',
				'link' => 'monsters/polar_bear.php',
				'4',
				'animal',
				'arctic tundra'
			],
			[
				'Pufferfish',
				'link' => 'monsters/pufferfish.php',
				'1',
				'animal',
				'warm oceans'
			],
			[
				'Killer Rabbit',
				'link' => 'monsters/rabbit_99.php',
				'3',
				'magical beast',
				'temperate plains'
			],
			[
				'Ravager',
				'link' => 'monsters/ravager.php',
				'10',
				'magical beast',
				'any'
			],
			[
				'Shulker',
				'link' => 'monsters/shulker.php',
				'3',
				'construct',
				'any (The End)'
			],
			[
				'Silverfish, Greater',
				'link' => 'monsters/silverfish.php',
				'1/2',
				'vermin',
				'any'
			],
			[
				'Silverfish, Lesser',
				'link' => 'monsters/silverfish_swarm.php',
				'1/2',
				'vermin',
				'any'
			],
			[
				'Green Cube',
				'link' => 'monsters/slime.php',
				'3',
				'ooze',
				'deep cave systems and swamps'
			],
			[
				'Snow Golem',
				'link' => 'monsters/snow_golem.php',
				'1/3',
				'construct',
				'any (Snowy)'
			],
			[
				'Spider',
				'link' => 'monsters/spider.php',
				'2',
				'vermin',
				'any (caves)'
			],
			[
				'Vex',
				'link' => 'monsters/vex.php',
				'4',
				'outsider',
				'any'
			],
			[
				'Wolf',
				'link' => 'monsters/wolf.php',
				'2',
				'animal',
				'cold or temperate forests'
			],
			[
				'Enderman',
				'link' => 'monsters/enderman.php',
				'5',
				'aberration',
				'any (The End)'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>