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
		return 2 * comp(a.children[3].innerText.toLowerCase(),b.children[3].innerText.toLowerCase()) + 
			comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Rarity',
			'Traits',
			'Level',
			'Prerequisites',
			'Benefit'
		],
		[
			[
				'<a href="birdpeople_feat_display.php#block-Strengthening-Wings">Strengthening Wings</a>',
				'Common',
				'piccilli',
				'9',
				'',
				'You unfold your wings for travel and can keep them unfolded for 10 minutes.'
			],
			[
				'<a href="birdpeople_feat_display.php#block-Full-Flight">Full Flight</a>',
				'Common',
				'piccilli',
				'13',
				'Strengthening Wings',
				'You gain the effects of Strengthening Wings at all times, rather than just once per day for 10 minutes.'
			],
			[
				'<a href="birdpeople_feat_display.php#block-Piccilli-Lore">Piccilli Lore</a>',
				'Common',
				'piccilli',
				'1',
				'',
				'You\'ve studied the history of your people as well as their traditions, enemies, and skills.'
			],
			[
				'<a href="birdpeople_feat_display.php#block-Piccilli-Weapon-Familiarity">Piccilli Weapon Familiarity</a>',
				'Common',
				'piccilli',
				'1',
				'',
				'You prefer finer weapons and the weapons of your people\'s goddess.'
			],
			[
				'<a href="birdpeople_feat_display.php#block-Piccilli-Weapon-Expertise">Piccilli Weapon Expertise</a>',
				'Common',
				'piccilli',
				'13',
				'Piccilli Weapon Familiarity',
				'Your Piccilli affinity blends with your class training, granting you great skill with Piccilli weapons.'
			],
			[
				'<a href="birdpeople_feat_display.php#block-Piccilli-Weapon-Finesse">Piccilli Weapon Finesse</a>',
				'Common',
				'piccilli',
				'5',
				'Piccilli Weapon Familiarity',
				'You are attuned to the weapons of your Piccilli ancestors and are particularly deadly when using them.'
			],
			[
				'<a href="birdpeople_feat_display.php#block-Sharpened-Talons">Sharpened Talons</a>',
				'Common',
				'piccilli',
				'1',
				'',
				'Your talons are sharper than normal.'
			],
			[
				'<a href="birdpeople_feat_display.php#block-Nesting">Nesting</a>',
				'Common',
				'piccilli',
				'1',
				'',
				'You are skilled at building soft and safe nests from common materials found in the wild.'
			],
			[
				'<a href="birdpeople_feat_display.php#block-Pecking">Pecking</a>',
				'Common',
				'piccilli',
				'1',
				'',
				'Your beak is sharp and can be used to peck at creatures that come too close.'
			],
			[
				'<a href="birdpeople_feat_display.php#block-Strengthened-Feet">Strengthened Feet</a>',
				'Common',
				'piccilli',
				'1',
				'',
				'Your feet are stronger and can be used to hold objects, even while walking or flying.'
			],
			[
				'<a href="birdpeople_feat_display.php#block-Kleptomaniac">Kleptomaniac</a>',
				'Common',
				'piccilli',
				'5',
				'Magpie heritage',
				'You are skilled at covertly swiping items that attract your attention.'
			],
			[
				'<a href="birdpeople_feat_display.php#block-Polarized-Vision">Polarized Vision</a>',
				'Common',
				'piccilli',
				'5',
				'',
				'Like many birds, your vision is polarized such that reflections are often hidden from view allowing you to see through the surface of water or through fog without issue.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>