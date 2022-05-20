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
		'Zinc', // Metal
		'Rioter', // User
		[
			'Quadrant' => 'Mental',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 minute',
		[
			'While burning zinc, the rioter can amplify certain emotions as a standard action at close range (25 feet plus 5 per caster levels) in either a single individual or all individuals within a 30-foot-radius sphere. This sphere can pass through solid material but the rioter must be aware of all of the creatures affected. Beyond behavioral changes as determined by the GM, this ability can grant a +10 morale bonus to intimidate checks, by amplifying the target\'s fear, and to any diplomacy checks involving invoking an emotional response. It also gives a +10 bonus to the DC of fear effects while amplifying the target\'s courage. It can also be used to double any morale bonuses granted to the target creatures or to grant a +10 morale bonus on will saves vs fear effects. The GM may also decide that this ability can grant other bonuses or penalties as applicable.',
			'These bonuses only apply to specific checks and effects made against the affected creatures as chosen by the rioter. The bonuses granted by multiple rioters do not stack with each other but the effects of a rioter so stack with those of a soother.',
			'If the rioter has at least 5 spell levels in allomantic zinc, a rioter can make a charisma check to take control of a susceptible hemalurgic construct. If the creature is currently under another creature\'s control, the other creature may make an opposed charisma check against the rioter\'s check. If the other creature wins, the rioter fails to take control but is aware of the other creature.'
		], // Description
		[
			'When flaring zinc, all bonuses and penalties granted are increased by +50%.'
		], // Flare
		[
			10 => [
				'effect' => 'The rioter gains an innate sense of the emotions of creatures they target with their ability.',
				'draw' => ''
			],
			20 => [
				'effect' => 'All bonuses granted and penalties increase by +20%.',
				'draw' => ''
			],
			40 => [
				'effect' => 'All bonuses granted and penalties increase by +20%.',
				'draw' => ''
			],
			60 => [
				'effect' => 'All bonuses granted and penalties increase by +20%.',
				'draw' => ''
			],
			80 => [
				'effect' => 'All bonuses granted and penalties increase by +20%.',
				'draw' => ''
			],
			100 => [
				'effect' => 'All bonuses granted and penalties increase by +20%.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>