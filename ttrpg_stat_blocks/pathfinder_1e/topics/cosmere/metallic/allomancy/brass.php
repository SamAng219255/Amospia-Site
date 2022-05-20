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
		'Soother', // User
		[
			'Quadrant' => 'Mental',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 minute',
		[
			'While burning zinc, the soother can dampen certain emotions as a standard action at close range (25 feet plus 5 per caster levels) in either a single individual or all individuals within a 30-foot-radius sphere. This sphere can pass through solid material but the soother must be aware of all of the creatures affected. Beyond behavioral changes as determined by the GM, this ability can grant a +10 morale bonus to intimidate checks against the target, by dampening the target\'s courage, and to any diplomacy checks involving limiting an emotional response. It can also give a +10 bonus to the DC of fear effects against while dampening the target\'s fear. It can also be used to half any morale bonuses granted to the target creatures or to grant a +10 morale bonus on will saves vs fear effects and mind-affecting effects. The GM may also decide that this ability can grant other bonuses or penalties as applicable.',
			'These bonuses only apply to specific checks and effects made against the affected creatures as chosen by the soother. The bonuses granted by multiple soothers do not stack with each other but the effects of a soother so stack with those of a rioter.',
			'If the soother has at least 5 spell levels in allomantic zinc, a soother can make a charisma check to take control of a susceptible hemalurgic construct. If the creature is currently under another creature\'s control, the other creature may make an opposed charisma check against the soother\'s check. If the other creature wins, the soother fails to take control but is aware of the other creature.'
		], // Description
		[
			'When flaring zinc, all bonuses and penalties granted are increased by +50%.'
		], // Flare
		[
			10 => [
				'effect' => 'The soother gains an innate sense of the emotions of creatures they target with their ability.',
				'draw' => ''
			],
			20 => [
				'effect' => 'All bonuses and penalties granted increase by +20%.',
				'draw' => ''
			],
			40 => [
				'effect' => 'All bonuses and penalties granted increase by +20%.',
				'draw' => ''
			],
			60 => [
				'effect' => 'All bonuses and penalties granted increase by +20%.',
				'draw' => ''
			],
			80 => [
				'effect' => 'All bonuses and penalties granted increase by +20%.',
				'draw' => ''
			],
			100 => [
				'effect' => 'All bonuses and penalties granted increase by +20%.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>