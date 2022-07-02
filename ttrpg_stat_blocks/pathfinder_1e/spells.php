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
			//2 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) + 
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
				'Micro Meteor',
				'link' => 'spells/micro_meteor.php',
				'1',
				'Transmutation',
				'antipaladin, arcanist, bloodrager, cleric, druid, inquisitor, magus, occultist, oracle, paladin, redmantisassassin, shaman, sorcerer, warpriest, wizard',
				'Up to 3 pebbles gain a +1 bonus and deal 1d6 damage.'
			],
			[
				'Shooting Stars',
				'link' => 'spells/shooting_stars.php',
				'3',
				'Transmutation',
				'antipaladin, arcanist, bloodrager, inquisitor, magus, occultist, paladin, redmantisassassin, sorcerer, wizard',
				'Up to 3 stones per level gain a +1 bonus/four levels (max +5) and deal 1d6 damage.'
			],
			[
				'Shooting Stars',
				'link' => 'spells/shooting_stars.php',
				'4',
				'Transmutation',
				'cleric, druid, oracle, shaman, warpriest',
				'Up to 3 stones per level gain a +1 bonus/four levels (max +5) and deal 1d6 damage.'
			],
			[
				'Meteor Stone',
				'link' => 'spells/meteor_stone.php',
				'6',
				'Evocation',
				'antipaladin, arcanist, bloodrager, inquisitor, magus, occultist, paladin, redmantisassassin, sorcerer, wizard',
				'Throw a meteor or comet at an enemy.'
			],
			[
				'Meteor Stone',
				'link' => 'spells/meteor_stone.php',
				'7',
				'Evocation',
				'cleric, druid, oracle, shaman, warpriest',
				'Throw a meteor or comet at an enemy.'
			],
			[
				'Metal Bead Storm',
				'link' => 'spells/metal_bead_storm.php',
				'5',
				'Evocation',
				'arcanist, bloodrager, cleric, inquisitor, magus, occultist, oracle, psychic, redmantisassassin, sorcerer, wizard',
				'Creates a swirling tornado of small metal beads.'
			],
			[
				'Brighter Light',
				'link' => 'spells/brighter_light.php',
				'3',
				'Evocation',
				'adept, paladin, cleric, inquisitor, occultist, oracle, shaman, warpriest',
				'Object sheds supernatural light in 60-ft. radius.'
			],
			[
				'Veil of Light',
				'link' => 'spells/veil_of_light.php',
				'4',
				'Evocation',
				'antipaladin, mesmerist, paladin',
				'Affected creatures have their vision impaired by light.'
			],
			[
				'Veil of Light',
				'link' => 'spells/veil_of_light.php',
				'5',
				'Evocation',
				'arcanist, bard, cleric, inquisitor, oracle, shaman, skald, sorcerer, warpriest, wizard',
				'Affected creatures have their vision impaired by light.'
			],
			[
				'Shroud of Darkness',
				'link' => 'spells/shroud_of_darkness.php',
				'4',
				'Evocation',
				'antipaladin, mesmerist, paladin',
				'Affected creatures have their vision impaired by light.'
			],
			[
				'Shroud of Darkness',
				'link' => 'spells/shroud_of_darkness.php',
				'5',
				'Evocation',
				'arcanist, bard, cleric, inquisitor, oracle, shaman, skald, sorcerer, warpriest, wizard',
				'Affected creatures have their vision impaired by darkness. This is a modification of an existing spell.'
			],
			[
				'Flickering Lights',
				'link' => 'spells/flickering_lights.php',
				'2',
				'Evocation',
				'arcanist, bard, cleric, inquisitor, magus, occultist, oracle, shaman, skald, sorcerer, warpriest, wizard',
				'Create an area of inconsistent lighting. This is a modification of an existing spell.'
			],
			[
				'Touch of Blindness',
				'link' => 'spells/touch_of_blindness.php',
				'1',
				'Necromancy',
				'antipaladin, arcanist, bard, cleric, oracle, shaman, skald, sorcerer, warpriest, witch, wizard',
				'Coat a creature’s eyes in darkness or light, blinding them. This is a modification of an existing spell.'
			],
			[
				'Snap',
				'link' => 'spells/snap.php#block-Snap',
				'3',
				'Evocation',
				'bard, bloodrager, cleric, magus, occultist, oracle, psychic, sorcerer, wizard',
				'Snap your fingers and unleash a destructive pulse that uses an object\'s hardness against it.'
			],
			[
				'Snap, Lesser',
				'link' => 'spells/snap.php#block-Snap,-Lesser',
				'0',
				'Evocation',
				'bard, bloodrager, cleric, magus, occultist, oracle, psychic, sorcerer, wizard',
				'Snap your fingers and unleash a destructive pulse that uses an object\'s hardness against it.'
			],
			[
				'Snap, Greater',
				'link' => 'spells/snap.php#block-Snap,-Greater',
				'6',
				'Evocation',
				'bard, bloodrager, cleric, magus, occultist, oracle, psychic, sorcerer, wizard',
				'Snap your fingers and unleash a destructive pulse that uses an object\'s hardness against it.'
			],
			[
				'Thunderous Snap',
				'link' => 'spells/thunderous_snap.php',
				'9',
				'Evocation',
				'bard, bloodrager, cleric, magus, occultist, oracle, psychic, sorcerer, wizard',
				'Snap your fingers and unleash a destructive pulse that uses objects\' hardness against them.'
			],
			[
				'Count',
				'link' => 'spells/count.php',
				'0',
				'Divination',
				'adept, arcanist, bard, cleric, druid, hunter, inquisitor, magus, medium, mesmerist, occultist, oracle, psychic, shaman, skald, sorcerer, spiritualist, summoner, summoner (unchained), warpriest, witch, wizard',
				'Counts a group of objects.'
			],
			[
				'Aberrant Form I',
				'link' => 'spells/aberrant_form.php#block-Aberrant-Form-I',
				'3',
				'Transmutation',
				'alchemist, arcanist, bloodrager, magus, sorcerer, wizard',
				'Take the form of an aberration.'
			],
			[
				'Aberrant Form II',
				'link' => 'spells/aberrant_form.php#block-Aberrant-Form-II',
				'4',
				'Transmutation',
				'alchemist, arcanist, bloodrager, magus, sorcerer, wizard',
				'Take the form of an aberration.'
			],
			[
				'Aberrant Form III',
				'link' => 'spells/aberrant_form.php#block-Aberrant-Form-III',
				'5',
				'Transmutation',
				'alchemist, arcanist, bloodrager, magus, sorcerer, wizard',
				'Take the form of an aberration.'
			],
			[
				'Aberrant Form IV',
				'link' => 'spells/aberrant_form.php#block-Aberrant-Form-IV',
				'6',
				'Transmutation',
				'alchemist, arcanist, bloodrager, magus, sorcerer, wizard',
				'Take the form of an aberration.'
			],
			[
				'Forceful Weight',
				'link' => 'spells/forceful_weight.php',
				'3',
				'Transmutation',
				'arcanist, bloodrager, inquisitor, magus, occultist, redmantisassassin, sorcerer, wizard',
				'Makes a weapon magically forceful, increasing the critical multiplier.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>