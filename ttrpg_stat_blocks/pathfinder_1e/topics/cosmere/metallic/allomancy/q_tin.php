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
		'Quintenium/Tin', // Metal
		false, // User
		[
			'Quadrant' => 'Physical',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 minute',
		[
			'While burning quintenium/tin, the misting receives a +5 deflection bonus to its AC.'
		], // Description
		[
			'The bonus increases to +10.'
		], // Flare
		[
			10 => [
				'effect' => 'Magic missile and similar spells and effects targetting the misting are negated.',
				'draw' => ''
			],
			20 => [
				'effect' => 'The misting receives a +2 Dodge bonus to their AC.',
				'draw' => 'The misting takes a -2 penalty to their AC.'
			],
			30 => [
				'effect' => 'The misting is never treated as being flanked.',
				'draw' => ''
			],
			40 => [
				'effect' => 'The misting receives a +2 Dodge bonus to their AC.',
				'draw' => 'The misting takes a -4 penalty to their AC.'
			],
			60 => [
				'effect' => 'The misting receives a +2 Dodge bonus to their AC and can grant the deflection bonus to one other creature within 5 feet.',
				'draw' => 'The misting takes a -6 penalty to their AC.'
			],
			80 => [
				'effect' => 'The misting receives a +2 Dodge bonus to their AC.',
				'draw' => 'The misting takes a -8 penalty to their AC.'
			],
			100 => [
				'effect' => 'The misting receives a +2 Dodge bonus to their AC and never provokes an attack of opportunity.',
				'draw' => 'The misting takes a -10 penalty to their AC.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>