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
				'Book of Endless Pages',
				'link' => 'items/endless_book.php',
				'1,500 gp',
				'none',
				'1st'
			],
			[
				'Goodberry Sprig',
				'link' => 'items/goodberry_sprig.php',
				'720 gp',
				'none',
				'1st'
			],
			[
				'Money Changer\'s Pouch',
				'link' => 'items/coin_purse.php',
				'2,000 gp',
				'none',
				'9th'
			],
			[
				'Unprepared Wizard\'s Component Pouch',
				'link' => 'items/component_pouch.php',
				'135,000 gp',
				'none',
				'5th'
			],
			[
				'Boulder of Annihilation',
				'link' => 'items/boulder_of_annihilation.php',
				'150,000 gp',
				'none',
				'7th'
			],
			[
				'Bandages of Quarantine',
				'link' => 'items/bandages.php',
				'3,000 gp',
				'body',
				'3rd'
			],
			[
				'Token of Domination',
				'link' => 'items/domination_jewelry.php',
				'45,000 gp',
				'none',
				'9th'
			],
			[
				'Phantom Mount Whistle',
				'link' => 'items/phantom_mount.php',
				'24,000 gp',
				'none',
				'5th'
			],
			[
				'Shadow Companion Whistle',
				'link' => 'items/shadow_companion.php',
				'30,000 gp',
				'none',
				'13th'
			],
			[
				'Shadow Companion Whistle, Lesser',
				'link' => 'items/shadow_companion.php#block-Shadow-Companion-Whistle,-Lesser',
				'9,000 gp',
				'none',
				'7th'
			],
			[
				'Shadow Companion Whistle, Greater',
				'link' => 'items/shadow_companion.php#block-Shadow-Companion-Whistle,-Greater',
				'50,000 gp',
				'none',
				'17th'
			],
			[
				'Mage Spice',
				'link' => 'items/mage_spice.php',
				'25 gp',
				'none',
				'1st'
			],
			[
				'Blessed Embalming Oils',
				'link' => 'items/embalming_oils.php',
				'18,000 gp',
				'none',
				'3rd'
			],
			[
				'Sustaining Pitcher',
				'link' => 'items/sustaining_pitcher.php',
				'86,000 gp',
				'none',
				'7th'
			],
			[
				'Blasting Wand',
				'link' => 'items/blasting_wand.php',
				'1,800 gp',
				'none',
				'1st'
			],
			[
				'Blasting Staff',
				'link' => 'items/blasting_staff.php',
				'2,700 gp',
				'none',
				'9th'
			],
			[
				'Spellbolt',
				'link' => 'items/spellbolt.php',
				'varies',
				'none',
				'varies'
			],
			[
				'Vespran Disguise Mask',
				'link' => 'items/disguise_mask.php',
				'18,000 gp',
				'none',
				'3rd'
			],
			[
				'Mage Lamp',
				'link' => 'items/mage_lamp.php',
				'675 gp',
				'none',
				'5th'
			],
			[
				'Providing Pitcher',
				'link' => 'items/providing_pitcher.php',
				'5,400 gp',
				'none',
				'5th'
			],
			[
				'Spell Memory Tome',
				'link' => 'items/spell_tome.php',
				'108,000 gp',
				'none',
				'18th'
			],
			[
				'Sweet Odors',
				'link' => 'items/sweet_odors.php',
				'13,500 gp',
				'none',
				'5th'
			]
		],
		true,
		false
	);
	require $startDir.'pageEnd.php';
?>