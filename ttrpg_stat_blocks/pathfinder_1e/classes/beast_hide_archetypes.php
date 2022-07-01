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
	echo '<h2>Beast Knight Archetypes</h2>';
	table(
		[
			'Name',
			'Replaces',
			'Summary'
		],
		[
			[
				'Aberrant Master',
				'link' => 'archetypes/bk_aberration_master.php',
				'Beast Hide Transformation, Beast Skins, Draconic Skins, Might of the Beast, Savage Strike, Steel Claws',
				'Aberrant masters take the forms of the alien-looking aberrations and are skilled at taking the forms terrifying amalgamations.'
			],
			[
				'Lycanthropist',
				'link' => 'archetypes/bk_hybrid_former.php',
				'Beast Hide Transformation, Draconic Skins, Huge and Diminutive Forms, Large and Tiny Forms, Steel Claws, Steel Hide, bonus feats gained at 11th level and 19th level',
				'Lycanthropists have stronger ties to the lycanthropic side of their power and take forms resembling the hybrid forms of most lycanthropes.'
			],
			[
				'Beast Colossus',
				'link' => 'archetypes/bk_size_master.php',
				'Beast Hide Transformation, Draconic Skins, Huge and Diminutive Forms, Large and Tiny Forms, Savage Strike, Steel Claws, Weapon and Armor Proficiency',
				'Beast colossus are skilled at the taking the forms of particularly large, and small, beasts and utilize this extreme size to great effect.'
			],
			[
				'Skin Hunter',
				'link' => 'archetypes/bk_head_hunter.php',
				'Beast Hide Transformation, Beast Skins, Draconic Skins, Might of the Beast, Primal Speed, Savage Strike, Steel Claws, Steel Hide',
				'Skin hunters use their skills to wear the skins of their enemies and take great strength from them.'
			]
		],
		true,
		true,
		false
	);
	require $startDir.'pageEnd.php';
?>