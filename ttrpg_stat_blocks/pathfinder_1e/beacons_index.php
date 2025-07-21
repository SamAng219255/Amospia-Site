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
			2 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	block(
		'Beacons',
		'desc',
		quick_array([
			'Beacons are a type of magical item that are designed to apply effects to all creatures within the area of the beacon. Physically, most beacons take the form of a relatively small object that is held in one hand though can generally be hung from clothing and the like if need be. What object specifically is used generally does not matter though it is usually related to its function. Beacons can be activated or deactivated on command and often have restrictions on who can activate them. If so, such restrictions are listed in their description.',
			'Beacons must be maintained while active. A beacon remains active until the end of the user\'s next turn once activated. An active beacon can be maintained as a swift action to keep it active until the end of the user\'s next turn. A beacon can also be maintained as a move action to keep it active until the end of the user\'s turn following their next turn. A beacon must be in a creature\'s possession for them to activate it and it immediately deactivates if it leaves their possession. A creature can only maintain one beacon each round but can activate a beacon the same round they maintain one if they have less than two beacons already active.',
			'Unless otherwise specified, while a beacon is activated it glows brightly and creates a visible beam of light that extends 60 feet into the air though it stops if blocked by an object not carried by the creature that activated it. Both the beacon and the beam of light it produces shed ii/light/ii as the spell. This light surrounds the creature using the beacon, both preventing them from blocking the light as well as easily identifying them as the one using the beacon.'
		]),
		true
	);
	table(
		[
			'Name',
			'Cost',
			'CL'
		],
		[
			[
				'Beacon of Prayer',
				'link' => 'items/beacons/prayer.php',
				'30,000 gp',
				'5th'
			],
			[
				'Beacon of Bless and Bane',
				'link' => 'items/beacons/bless_bane.php',
				'4,000 gp',
				'1st'
			],
			[
				'Beacon of Consecration',
				'link' => 'items/beacons/consecration.php',
				'17,000 gp',
				'3rd'
			],
			[
				'Beacon of Desecration',
				'link' => 'items/beacons/desecration.php',
				'17,000 gp',
				'3rd'
			],
			[
				'Beacon of Protection (+1)',
				'link' => 'items/beacons/protection.php',
				'8,000 gp',
				'3rd'
			],
			[
				'Beacon of Protection (+2)',
				'link' => 'items/beacons/protection.php',
				'32,000 gp',
				'3rd'
			],
			[
				'Beacon of Protection (+3)',
				'link' => 'items/beacons/protection.php',
				'72,000 gp',
				'3rd'
			],
			[
				'Beacon of Protection (+4)',
				'link' => 'items/beacons/protection.php',
				'128,000 gp',
				'3rd'
			],
			[
				'Beacon of Protection (+5)',
				'link' => 'items/beacons/protection.php',
				'200,000 gp',
				'3rd'
			],
			[
				'Beacon of Celestial Healing',
				'link' => 'items/beacons/good_healing.php',
				'2,000 gp',
				'1st'
			],
			[
				'Beacon of Fiendish Healing',
				'link' => 'items/beacons/evil_healing.php',
				'2,000 gp',
				'1st'
			],
			[
				'Beacon of Protection from Evil',
				'link' => 'items/beacons/protection_from.php#block-Beacon-of-Protection-from-Evil',
				'12,000 gp',
				'1st'
			],
			[
				'Beacon of Protection from Good',
				'link' => 'items/beacons/protection_from.php#block-Beacon-of-Protection-from-Good',
				'12,000 gp',
				'1st'
			],
			[
				'Beacon of Protection from Law',
				'link' => 'items/beacons/protection_from.php#block-Beacon-of-Protection-from-Law',
				'12,000 gp',
				'1st'
			],
			[
				'Beacon of Protection from Chaos',
				'link' => 'items/beacons/protection_from.php#block-Beacon-of-Protection-from-Chaos',
				'12,000 gp',
				'1st'
			]
		],
		true,
		false
	);
	require $startDir.'pageEnd.php';
?>