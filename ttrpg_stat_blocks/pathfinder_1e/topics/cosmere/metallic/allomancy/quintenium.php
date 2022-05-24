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
	allomancy(
		'Quintenium', // Metal
		false, // User
		[
			'Quadrant' => 'Enhancement',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 round',
		[
			'While burning pure quintenium, if the misting possesses a soul, they become a powerful outsider, gaining the aa/quintenium_soul|quintenium-soul/aa template. As an Outsider, the misting does not need to eat or sleep while in this form but does need to breathe. Any effects of hunger or lack of sleep do not affect the misting while in this form but they do resume after the misting has left this form. If the misting dies while in this form they do not revert back unless returned to life, and are treated as a deceased outsider instead of a mortal.',
			'If the misting or mistborn is construct or other creature that lacks a true soul, they instead gain a true soul and can be raised and resurrected as a mortal. This change is permanent and requires having a store of at least 1 ounce of quintenium which is expended entirely.'
		], // Description
		[
			'The number of racial hit dice gained from the template is increased by half.'
		], // Flare
		[
			10 => [
				'effect' => 'The increment increases to 5 minutes and the effect extends to the end of the increment even if the misting stops burning.',
				'draw' => 'The misting suffers 5 negative levels that cannot be healed by any means.'
			],
			20 => [
				'effect' => 'The increment increases to 1 hour.',
				'draw' => 'The misting suffers 5 negative levels that cannot be healed by any means.'
			],
			30 => [
				'effect' => 'The increment increases to 12 hours and the misting can choose how skill ranks are allocated upon use as well as what languages are gained from ranks in linguistics.',
				'draw' => 'The misting suffers 5 negative levels that cannot be healed by any means.'
			],
			40 => [
				'effect' => 'The increment increases to 6 days.',
				'draw' => 'The misting suffers 5 negative levels that cannot be healed by any means.'
			],
			50 => [
				'effect' => 'The effect becomes permanent. Attempting to burn quintenium has no further effect unless it is being flared.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>