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
		'Beacon of Protection from Evil',
		'Abjuration',
		1,
		'none',
		12000,
		'—',
		[
			'While active, all creatures within a 60-foot-radius burst receive protection as from the spell ii/protection from evil/ii.',
			'A beacon of ii/protection from evil/ii can only be activated by a creature capable of casting ii/communal protection from evil/ii and have a good alignment.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/protection from evil/ii; bb/Cost/bb 6,000 gp'
	);
	magicItemBlockAuto(
		'Beacon of Protection from Chaos',
		'Abjuration',
		1,
		'none',
		12000,
		'—',
		[
			'While active, all creatures within a 60-foot-radius burst receive protection as from the spell ii/protection from chaos/ii.',
			'A beacon of ii/protection from chaos/ii can only be activated by a creature capable of casting ii/communal protection from chaos/ii and have a lawful alignment.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/protection from chaos/ii; bb/Cost/bb 6,000 gp'
	);
	magicItemBlockAuto(
		'Beacon of Protection from Good',
		'Abjuration',
		1,
		'none',
		12000,
		'—',
		[
			'While active, all creatures within a 60-foot-radius burst receive protection as from the spell ii/protection from good/ii.',
			'A beacon of ii/protection from good/ii can only be activated by a creature capable of casting ii/communal protection from good/ii and have an evil alignment.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/protection from good/ii; bb/Cost/bb 6,000 gp'
	);
	magicItemBlockAuto(
		'Beacon of Protection from Law',
		'Abjuration',
		1,
		'none',
		12000,
		'—',
		[
			'While active, all creatures within a 60-foot-radius burst receive protection as from the spell ii/protection from law/ii.',
			'A beacon of ii/protection from law/ii can only be activated by a creature capable of casting ii/communal protection from law/ii and have a chaotic alignment.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/protection from law/ii; bb/Cost/bb 6,000 gp'
	);
	require $startDir.'pageEnd.php';
?>