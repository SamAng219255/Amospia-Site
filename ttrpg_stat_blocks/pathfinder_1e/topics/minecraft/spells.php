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
				'Blazing Shield',
				'link' => 'spells/blazing_shield.php#block-Blazing-Shield',
				'1',
				'Abjuration',
				'arcanist, bard, bloodrager, investigator, magus, skald, sorcerer, summoner, summoner(unchained), witch, wizard',
				'Summons a tower shield made of force and fire to protect the target.'
			],
			[
				'Blazing Shield Ring',
				'link' => 'spells/blazing_shield.php#block-Blazing-Shield-Ring',
				'3',
				'Abjuration',
				'arcanist, bard, bloodrager, investigator, magus, skald, sorcerer, summoner, summoner(unchained), witch, wizard',
				'Summons four tower shields made of force and fire to protect the target.'
			],
			[
				'Blazing Shield, Communal',
				'link' => 'spells/blazing_shield.php#block-Blazing-Shield,-Communal',
				'5',
				'Abjuration',
				'arcanist, bard, bloodrager, investigator, magus, skald, sorcerer, summoner, summoner(unchained), witch, wizard',
				'Summons a tower shield made of force and fire to protect the targets.'
			],
			[
				'Blazing Shield Ring, Communal',
				'link' => 'spells/blazing_shield.php#block-Blazing-Shield-Ring,-Communal',
				'7',
				'Abjuration',
				'arcanist, bard, bloodrager, investigator, magus, skald, sorcerer, summoner, summoner(unchained), witch, wizard',
				'Summons four tower shields made of force and fire to protect the targets.'
			],
			[
				'Illusory Darkness',
				'link' => 'spells/illusory_dark.php',
				'5',
				'Illusion',
				'antipaladin, bard, bloodrager, psychic, sorcerer, witch, wizard',
				'Affected creatures have all of their senses obscured by what appears to be a dark fog.'
			],
			[
				'Illusory Darkness',
				'link' => 'spells/illusory_dark.php',
				'6',
				'Illusion',
				'cleric, oracle, shaman',
				'Affected creatures have all of their senses obscured by what appears to be a dark fog.'
			],
			[
				'Vexing Call',
				'link' => 'spells/vexing_call.php',
				'5',
				'Conjuration',
				'adept, antipaladin, arcanist, bard, cleric, oracle, psychic, skald, sorcerer, spiritualist, warpriest, witch, wizard',
				'Summons 3 Vex.'
			],
			[
				'Evoker\'s Fangs',
				'link' => 'spells/evoker_fangs.php',
				'3',
				'Conjuration',
				'adept, antipaladin, arcanist, cleric, oracle, psychic, sorcerer, spiritualist, warpriest, witch, wizard',
				'Summons either two rings or a line of snapping jaws that deal damage to other races.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>