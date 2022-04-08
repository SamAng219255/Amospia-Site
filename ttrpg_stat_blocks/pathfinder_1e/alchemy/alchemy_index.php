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
			'Form',// Activated, Application, Bomb, Cauldron, Creation, Imbibed, Rocket, Substance
			'Description'
		],
		[
			[
				'Fire Bomb',
				'link' => 'recipes/fire_bomb.php',
				'1',
				'Bomb',
				'Deals 1d6 fire damage per level, maximum 5d6, and half that as splash.' 
			],
			[
				'Advanced Acid',
				'link' => 'recipes/acid.php',
				'1',
				'Bomb',
				'Deals 1d6 acid damage per level, maximum 5d6, and half that as splash.' 
			],
			[
				'Chill Bomb',
				'link' => 'recipes/chill_bomb.php',
				'1',
				'Bomb',
				'Deals 1d6 cold damage per level, maximum 5d6, and half that as splash.' 
			],
			[
				'Volatile Capacitor',
				'link' => 'recipes/volatile_capacitor.php',
				'1',
				'Bomb',
				'Deals 1d6 electricity damage per level, maximum 5d6, and half that as splash.' 
			],
			[
				'Sonic Burst Jar',
				'link' => 'recipes/sonic_jar.php',
				'1',
				'Bomb',
				'Deals 1d6 sonic damage per level, maximum 5d6, and half that as splash.' 
			],
			[
				'Advanced Alchemist Fire',
				'link' => 'recipes/adv_fire.php',
				'3',
				'Bomb',
				'Deals fire damage and covers affected creatures in burning material.' 
			],
			[
				'Concentrated Acid',
				'link' => 'recipes/adv_acid.php',
				'3',
				'Bomb',
				'Deals acid damage that bypasses some hardness and resistance.' 
			],
			[
				'Freezing Bomb',
				'link' => 'recipes/freezing_bomb.php',
				'3',
				'Bomb',
				'Deals cold damage and slows affected creatures.' 
			],
			[
				'Overcharged Capacitor',
				'link' => 'recipes/overcharged_capacitor.php',
				'3',
				'Bomb',
				'Deals electricity damage and may stun the primary target.' 
			],
			[
				'Thunder Jar',
				'link' => 'recipes/thunder_jar.php',
				'3',
				'Bomb',
				'Deals sonic damage and has a chance to deafen.' 
			],
			[
				'Fog Bottle',
				'link' => 'recipes/fog_bottle.php',
				'2',
				'Activated',
				'Creates a cloud of alchemical powder that obsures sight.' 
			],
			[
				'Shimmer Cloud',
				'link' => 'recipes/illusion_cloud.php',
				'2',
				'Activated',
				'Creates a fine mist of particles that reveal illusions.' 
			],
			[
				'Oobleck',
				'link' => 'recipes/oobleck.php',
				'7',
				'Cauldron',
				'Creates a mysterious new form of weather that sticks creatures in the area to the ground.' 
			],
			[
				'Draught of True Form',
				'link' => 'recipes/true_form.php',
				'4',
				'Imbibed',
				'Nullifies polymorph effects on the drinker, returning them to their true form.' 
			],
			[
				'Fire Rocket',
				'link' => 'recipes/fire_rocket.php',
				'3',
				'Rocket',
				'Deals 1d6 fire damage per level in a 20-ft. radius spread.' 
			]
		]
	);
	require $startDir.'pageEnd.php';
?>