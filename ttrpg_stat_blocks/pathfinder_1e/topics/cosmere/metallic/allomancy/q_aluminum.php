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
		'Quintenium/Aluminum', // Metal
		false, // User
		[
			'Quadrant' => 'Enhancement',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 round',
		[
			'At the start of each round, while burning quintenium/aluminum, the misting is affected as though by the targeted dispel effect of the ii/greater dispel magic/ii spell except that the misting cannot name a specific effect to dispel. The misting\'s caster level counts as twice the spell level of their allomancy for the purpose of this effect.'
		], // Description
		[
			'There is no limit to the number of effects that can be dispelled and the misting receives a +5 bonus to the dispel check.'
		], // Flare
		[
			10 => [
				'effect' => 'The misting may name one spell or effect to not dispel. When doing so, the misting must make another caster level check vs the dispel check. If it succeeds the named spell is skipped when determining which effects are dispelled.',
				'draw' => ''
			],
			20 => [
				'effect' => 'The misting receives a +2 bonus to the dispel check and +3 bonus to checks to skip a potential spell effect.',
				'draw' => ''
			],
			30 => [
				'effect' => 'The misting may name two effects, making seperate checks to avoid dispelling each.',
				'draw' => ''
			],
			40 => [
				'effect' => 'The misting receives a +2 bonus to the dispel check and +3 bonus to checks to skip a potential spell effect.',
				'draw' => ''
			],
			60 => [
				'effect' => 'The misting receives a +2 bonus to the dispel check and +3 bonus to checks to skip a potential spell effect and the misting may name three effects, making seperate checks to avoid dispelling each.',
				'draw' => ''
			],
			80 => [
				'effect' => 'The misting receives a +2 bonus to the dispel check and +3 bonus to checks to skip a potential spell effect.',
				'draw' => ''
			],
			100 => [
				'effect' => 'The misting receives a +2 bonus to the dispel check and +3 bonus to checks to skip a potential spell effect and the misting may name four effects, making seperate checks to avoid dispelling each.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>