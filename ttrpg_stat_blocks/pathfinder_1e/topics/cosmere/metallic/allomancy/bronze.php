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
		'Bronze', // Metal
		'Smoker', // User
		[
			'Quadrant' => 'Mental',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'10 minutes',
		[
			'While burning bronze, the seeker is able to detect magic within 120 feet similar to the spell ii/detect magic/ii except as noted. The precise level of an effect can be detected. The seeker knows the location and power of all magic auras within 120 feet originating from an active ability. Regardless of whether the auras are within line of sight, the seeker can make Spellcraft skill checks to determine the school of magic involved in each. (Make one check per aura; DC 15 + spell level or 15 + half caster level for a nonspell effect.) This check also lets the seeker know what kind of ability this is. (such as generic spell or spell-like ability, supernatural ability, or a cosmere magic effect with further information such as the system and the variety) This would allow a seeker to tell apart allomancy and feruchemy with the type of metal, surgebinding with the surge in question, AonDor, Awakenings, and when a shard blade is summoned. It also allows the seeker to sense the Rhythms is they are present.'
		], // Description
		[
			'Flaring bronze yields no additional apparent effect.'
		], // Flare
		[
			10 => [
				'effect' => 'Your ability\'s spell level increases by 0.5; You can distinguish burning a normal allomantic metal and compounding',
				'draw' => ''
			],
			20 => [
				'effect' => 'Radius increases by 10 feet',
				'draw' => ''
			],
			30 => [
				'effect' => 'Your ability\'s spell level increases by 0.5',
				'draw' => ''
			],
			40 => [
				'effect' => 'Radius increases by 10 feet',
				'draw' => ''
			],
			60 => [
				'effect' => 'Radius increases by 10 feet; Your ability\'s spell level increases by 0.5',
				'draw' => ''
			],
			80 => [
				'effect' => 'Radius increases by 10 feet',
				'draw' => ''
			],
			100 => [
				'effect' => 'Radius increases by 10 feet; Your ability\'s spell level increases by 0.5',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>