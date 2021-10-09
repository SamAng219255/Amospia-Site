<?php require '../../pageStart.php'; ?>
<title>Thyllkthoron Feats</title>
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
				'<a href="enosrian_feat_display.php#block-Fiendish-Damage-Resistance">Fiendish Damage Resistance</a>',
				'Common',
				'Enosrian',
				'9',
				'',
				'Your demonic ancestry has granted you some resistances against attacks though these can be overcome by a properly prepared opponent.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Vestigial-Wings">Vestigial Wings</a>',
				'Common',
				'Enosrian',
				'1',
				'',
				'You can spread your wings to glide safely to the ground.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Enlarged-Wings">Enlarged Wings</a>',
				'Common',
				'Enosrian',
				'5',
				'',
				'Your wings have begun to grow allowing you to fly through the air in short bursts at half your land Speed.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Strengthening Wings">Strengthening Wings</a>',
				'Common',
				'Enosrian',
				'9',
				'',
				'You unfold your wings for travel and can keep them unfolded for 10 minutes.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Full-Flight">Full Flight</a>',
				'Common',
				'Enosrian',
				'13',
				'Strengthening Wings',
				'You gain the effects of Strengthening Wings at all times, rather than just once per day for 10 minutes.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Thyllkthoron-Lore">Thyllkthoron Lore</a>',
				'Common',
				'Enosrian',
				'1',
				'',
				'You\'ve studied the history of your people as well as their traditions, enemies, and skills.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Thyllkthoron-Weapon-Familiarity">Thyllkthoron Weapon Familiarity</a>',
				'Common',
				'Enosrian',
				'1',
				'',
				'You prefer finer weapons and the weapons of your people\'s goddess.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Thyllkthoron-Weapon-Expertise">Thyllkthoron Weapon Expertise</a>',
				'Common',
				'Enosrian',
				'13',
				'Thyllkthoron Weapon Familiarity',
				'Your Thyllkthoron affinity blends with your class training, granting you great skill with Thyllkthoron weapons.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Thyllkthoron-Weapon-Finesse">Thyllkthoron Weapon Finesse</a>',
				'Common',
				'Enosrian',
				'5',
				'Thyllkthoron Weapon Familiarity',
				'You are attuned to the weapons of your Thyllkthoron ancestors and are particularly deadly when using them.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Fiendish-Energy-Resistance">Fiendish Energy Resistance</a>',
				'Common',
				'Enosrian',
				'5',
				'',
				'Your demonic ancestry has granted you some resistances to energy.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Alluring-Voice">Alluring Voice</a>',
				'Common',
				'Enosrian, Magic',
				'1',
				'',
				'Your demonic ancestry has manifested in your voice, aiding your speech.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Honeyed-Words">Honeyed Words</a>',
				'Common',
				'Enosrian, Magic',
				'5',
				'Alluring Voice',
				'Your words flow like honey and can take on a magical quality.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Silver-Tongue">Silver Tongue</a>',
				'Common',
				'Enosrian, Magic',
				'9',
				'Alluring Voice',
				'You can make people follow your every word.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Dominating-Command">Dominating Command</a>',
				'Common',
				'Enosrian, Magic',
				'13',
				'Alluring Voice',
				'You can use your words to dominate the minds of others.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Fiendish-Spell-Resistances">Fiendish Spell Resistances</a>',
				'Common',
				'Enosrian',
				'9',
				'',
				'Your demonic ancestry has granted you some resistances against spells.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Fiendish-Claws">Fiendish Claws</a>',
				'Common',
				'Enosrian',
				'5',
				'Ancient Blood Thyllkthoron',
				'Your claws have grown stronger.'
			],
			[
				'<a href="enosrian_feat_display.php#block-Abyssal-Claws">Abyssal Claws</a>',
				'Common',
				'Enosrian',
				'9',
				'Ancient Blood Thyllkthoron',
				'Your claws are infused with the powers of the Abyss.'
			]
		]
	);
	require '../../pageEnd.php';
?>