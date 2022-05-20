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
		'Steel', // Metal
		'Coinshot', // User
		[
			'Quadrant' => 'Physical',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'10 minutes',
		[
			'While burning steel, a coinshot can sense an push on distant sources of metal. While burning, the coinshot can sense any metal objects, except for aluminum, within 60 feet and can tell what kind of metal it is, where it is, and how large it is but not what shape it is.',
			'While burning, a coinshot gains access to the following supernatural abilities. Unless specified otherwise, these abilities have a range of 60 feet and are not subject to spell resistance.',
			'ii/Coinshot/ii (Su): The coinshot can launch a loose piece of metal less than one pound away from themself at incredible speeds and use it as a weapon. The coinshot must have a piece of metal on them of the appropriate size in order to use this ability, with coins being the most common. This attack is treated as a projectile ranged weapon attack with a range increment of 60 feet and a max range of 600 ft. that can be used as part of a full attack action and deals 1d8 piercing and bludgeoning damage. This damage increases and decreases based on the creatures size category as standard weapon damage.',
			'ii/Steel Bubble/ii (Su): A coinshot can create a "bubble" within which approaching metal is reflexively deflected. This grants a +5 deflection bonus against ranged attacks with metal objects.',
			'ii/Steel Push/ii (Su): If the coinshot pushs directly on a larger object, they are pushed apart with a force equal to twice the coinshot\'s weight. This may push the object away from the coinshot or the coinshot away from the object depending on which one is more secured.',
			'Some applications of this include that if the coinshot is in air, on ice, or otherwise has no friction with the ground, they can push themself up to 60 feet away from a piece of metal within range when they started. Alternatively, by pushing on a piece of metal below them, they push themself off the ground and into the air granting a +40 bonus to acrobatics to jump and are treated as having a running start. If performing a vertical jump as such, the coinshot may hang in air for a moment a the top of their jump. As such they do not begin falling unless they do not prevent themself from falling as their first standard, move, or full-round action on their following turn. The coinshot can also maintain the force, holding themself 60 feet in the air directly above the object. The coinshot must spend a move action each subsequent round to do so and must make a DC 15 Acrobatics check to keep from falling off, though is flat-footed until their next turn unless they beat the DC by 5 or more. As an immediate action, a falling coinshot can push on a object below them to slow their fall, negating any distance fallen so far.',
			'By pushing on a smaller unsecured object the coinshot may also push it away from them. They can also shove a larger unattended object away from them. The coinshot can also attempt a disarm or steal combat maneuver by pushing on held or worn object respectively, though the coinshot cannot take the object in question merely alleviate the target of the item, or a trip or bull rush combat maneuver by pushing on a tightly worn object such as a pair of metal boots or a full set of metal armor. When performing a bull rush with this ability, you may not move with them. If you fail a combat maneuver with this ability by 5 or more, your turn immediately ends, you are pushed 5 feet away from your target for every 5 by which you failed the check, and you are pushed off balance making you flat-footed until the start of your next turn.'
		], // Description
		[
			'While flaring steel, a coinshot\'s pushing force increases and they are treated as being 1 size category larger for determining the force and damage of their pushs.'
		], // Flare
		[
			10 => [
				'effect' => '+1 size category for Allomantic Steel',
				'draw' => ''
			],
			30 => [
				'effect' => '+1 size category for Allomantic Steel',
				'draw' => ''
			],
			60 => [
				'effect' => '+1 size category for Allomantic Steel',
				'draw' => ''
			],
			100 => [
				'effect' => '+1 size category for Allomantic Steel',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>