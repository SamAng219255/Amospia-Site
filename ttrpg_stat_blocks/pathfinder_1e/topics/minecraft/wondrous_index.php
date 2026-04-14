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
		return 4 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) +
			2 * comp(a.children[3].innerText.toLowerCase(),b.children[3].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Cost',
			'Slot',
			'CL'
		],
		[
			[
				'Redstone Compass',
				'link' => 'items/compass.php',
				'1,000 gp',
				'none',
				'1st'
			],
			[
				'Enchanted Golden Apple',
				'link' => 'items/egapple.php',
				'8,700 gp',
				'none',
				'11th'
			],
			[
				'Elytra',
				'link' => 'items/elytra.php',
				'12,000 gp',
				'shoulders',
				'3rd'
			],
			[
				'Ender Chest',
				'link' => 'items/enderchest.php',
				'90,000 gp',
				'none',
				'9th'
			],
			[
				'Eye of Ender',
				'link' => 'items/endereye.php',
				'12,000 gp',
				'none',
				'15th'
			],
			[
				'Golden Apple',
				'link' => 'items/gapple.php',
				'4,500 gp',
				'none',
				'9th'
			],
			[
				'Luring Fishing Rod (+2)',
				'link' => 'items/lure_rod.php',
				'400 gp',
				'none',
				'1st'
			],
			[
				'Luring Fishing Rod (+4)',
				'link' => 'items/lure_rod.php',
				'1,600 gp',
				'none',
				'1st'
			],
			[
				'Luring Fishing Rod (+6)',
				'link' => 'items/lure_rod.php',
				'3,600 gp',
				'none',
				'1st'
			],
			[
				'Luring Fishing Rod (+8)',
				'link' => 'items/lure_rod.php',
				'6,400 gp',
				'none',
				'1st'
			],
			[
				'Luring Fishing Rod (+10)',
				'link' => 'items/lure_rod.php',
				'10,000 gp',
				'none',
				'1st'
			],
			[
				'Netherite Lodestone',
				'link' => 'items/lodestone.php',
				'12,300 gp',
				'none',
				'1st'
			],
			[
				'Soul Speed Boots',
				'link' => 'items/soul_speed.php',
				'3,000 gp',
				'feet',
				'5th'
			],
			[
				'Swift Sneak Boots',
				'link' => 'items/swift_sneak.php',
				'2,500 gp',
				'feet',
				'3rd'
			],
			[
				'Totem Of Undying',
				'link' => 'items/totem.php',
				'15,000 gp',
				'none',
				'20th'
			],
			/*[
				'Wind Charge',
				'link' => 'items/wind_charge.php',
				'120 gp',
				'none',
				'7th'
			],*/
			[
				'Wind Charge, Lesser',
				'link' => 'items/wind_charge_lesser.php',
				'25 gp',
				'none',
				'1st'
			],
			[
				'Wind Charge, Greater',
				'link' => 'items/wind_charge_greater.php',
				'1,400 gp',
				'none',
				'7th'
			],
			[
				'Breeze Bundle',
				'link' => 'items/breeze_bundle.php',
				'10,000 gp',
				'none',
				'5th'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>