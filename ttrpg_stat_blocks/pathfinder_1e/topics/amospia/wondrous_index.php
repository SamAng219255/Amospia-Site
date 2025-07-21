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
			'Cost (gp)',
			'Cost (I*)',
			'Slot',
			'CL'
		],
		[
			[
				'Voidstone',
				'link' => 'items/voidstone.php',
				'2,000 gp',
				'—',
				'none',
				'1st; see text'
			],
			[
				'Lightstone',
				'link' => 'items/lightstone.php',
				'—',
				'—',
				'none',
				'7th'
			],
			[
				'Return Totem',
				'link' => 'items/return_totembadge.php',
				'104,000 gp',
				'0x1860 I',
				'none',
				'11th'
			],
			[
				'Return Badge',
				'link' => 'items/return_totembadge.php',
				'1,625 gp',
				'0x61 I, 8 P',
				'none',
				'11th'
			],
			[
				'Simple Return Badge',
				'link' => 'items/return_totembadge.php#block-Simple-Return-Badge',
				'1,300 gp',
				'0x4E I',
				'none',
				'11th'
			],
			[
				'Martyr\'s Return Badge',
				'link' => 'items/return_totembadge.php#block-Martyr\'s-Return-Badge',
				'4,235 gp',
				'0xFE I, 2 P',
				'none',
				'11th'
			],
			[
				'Sailor\'s Return Badge',
				'link' => 'items/return_totembadge.php#block-Sailor\'s-Return-Badge',
				'12,500 gp',
				'0x2EE I',
				'none',
				'11th'
			],
			[
				'Spy\'s Return Badge',
				'link' => 'items/return_totembadge.php#block-Spy\'s-Return-Badge',
				'4,235 gp',
				'0xFE I, 2 P',
				'none',
				'11th'
			],
			[
				'Traveler\'s Return Badge',
				'link' => 'items/return_totembadge.php#block-Traveler\'s-Return-Badge',
				'4,700 gp',
				'0x11A I',
				'none',
				'11th'
			],
			[
				'Brilliant Material Stone',
				'link' => 'items/brilliant_material_stone.php',
				'90,000 gp',
				'0x1563 I',
				'none',
				'9th'
			],
			[
				'Ring of Instant Armament',
				'link' => 'items/ring_of_instant_armament.php',
				'72,000 gp',
				'0x10E0 I',
				'Ring',
				'20th'
			]
		]
	);
?>
<span class="reduced"><p>* <a href="narmen_currency.php" target="_empty">Iridescent Pearls</a>. A Narmen currency measured in base 16 worth 16 gp.</p></span>
<?php require $startDir.'pageEnd.php'; ?>