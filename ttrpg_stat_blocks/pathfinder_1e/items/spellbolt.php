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
	magicItemBlockAuto(
		'Spellbolt',
		'Universal',
		9,
		'none',
		2700,
		'—',
		[
			'ii/Spellbolts/ii are crystallized spell energy and are used to power some magical devices. ii/Spellbolts/ii come in levels from 1st to 9th. Creating a ii/spellbolt/ii requires expending a prepared spell or available spell slot and will create a ii/spellbolt/ii of the corresponding level with your caster level. Doing so takes 10 minutes. Any caster is capable of creating a ii/spellbolt/ii.',
			'When buying a ii/spellbolt/ii, the price is equal to the level times the caster level times 50.'
		],
		false,
		'bb/Requirements/bb special see text; bb/Cost/bb 5 gp'
	);
	require $startDir.'pageEnd.php';
?>