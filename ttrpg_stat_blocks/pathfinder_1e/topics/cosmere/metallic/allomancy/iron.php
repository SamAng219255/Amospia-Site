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
		'Iron', // Metal
		'Lurcher', // User
		[
			'Quadrant' => 'Physical',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'10 minutes',
		[
			'While burning iron, a lurcher can sense an pull on distant sources of metal. While burning, the lurcher can sense any metal objects, except for aluminum, within 60 feet and can tell what kind of metal it is, where it is, and how large it is but not what shape it is.',
			'While burning, a lurcher gains access to the following supernatural abilities. Unless specified otherwise, these abilities have a range of 60 feet and are not subject to spell resistance.',
			'ii/Lurch/ii (Su): As a standard, a lurcher can pull a number of loose pieces metal weighing less than 1 pound towards themself at speed, dealing 1d8 points of bludgeoning and piercing damage to themself. If they are holding a shield, they may automatically block them with their shield dealling the damage to the shield instead. This damage is increased and decreased based on the lurcher\'s size. The lurcher can pull one object plus an additional object for every +5 base attack bonus they have beyond +1. Generally the same number as the number of attacks they can make as part of a full attack action.',
			'If this ability is readied, it can be used to intercept projectiles weighing less than 1 pound containing metal though it can\'t intercept the coinshot ability of a coinshot of a larger size than the lurcher. If the projectiles are successfully intercepted, a number of projectiles from the triggering action up to the number that the lurcher can pull at a time are redirected toward the lurcher who takes damage or can block the attack as normal for this ability except that the damage type changes to that of the projectile. If the lurcher attempts to pull on the projectile of a firearm it will deflect the projectile, though it is traveling too fast to fully pull out of the way, instead granting the target a +5 deflection bonus against the attack. Siege weapon projectiles possess too much momentum to be effectively deflected unless the lurcher is at least the size of the siege weapon.',
			'ii/Iron Swing/ii (Su): A lurcher can effectively swing using an iron pull like an invisible rope attached to an overhead piece of metal. This can be done as a move action so long their exists a sufficiently secured piece of metal within 45 feet. This movement reflects the lurcher\'s position to the far side of the metal object effectively allowing them to move up to 90 feet so long as they do not encounter any other object in their way.',
			'They may choose to reduce how far they travel in order to end their movement higher up. For every 5 they reduce their horizontal movement they end their movement 5 feet higher up, so long as they end on the other side of the object they swung on. Conversely they may incrase their horizontal movement by sacrificing an equal amount of height. Height lost beyond the horizontal distance to the object is treated as distance fallen.',
			'This movement can end their position in the air. At the end of their swing, they remain airborne and do not begin falling until their next round at which point they can catch themself by swinging on another object or utilizing another ability that allows them to remain airborne. If they do not spend their first standard, move, or full-round action on next turn by performing such an action, they immediately fall.',
			'ii/Iron Pull/ii (Su): If the lurcher pulls directly on a larger object, they are pulled together with a force equal to twice the lurcher\'s weight. This may pull the object towards the lurcher or the lurcher toward the object depending on which one is more secured.',
			'Some applications of this include that if the lurcher is in air, on ice, or otherwise has no friction with the ground, they can pull themself up to 60 feet in the direction of a piece of metal within range. Alternatively, by pulling on a piece of metal above them, they pull themself off the ground and into the air as part of a jump granting a +40 bonus to acrobatics to jump and are treated as having a running start. If performing a vertical jump as such, the lurcher may hang in air for a moment a the top of their jump. As such they do not begin falling unless they do not prevent themself from falling as their first standard, move, or full-round action on their following turn. They may also perform such a jump while in the air. If the lurcher is adjacent to a sufficiently secured metal object, they can hold themself to the object by spending a move action each subsequent round. As an immediate action, a falling lurcher can pull on a object above them to slow their fall, negating any distance fallen so far.',
			'By pulling on a smaller unsecured object the lurcher may also pull it to them, in which case they can catch it as a free action if they have a free hand with which to do so. They can also drag a larger unattended object toward them. The lurcher can also attempt a disarm or steal combat maneuver by pulling on held or worn object respectively or a trip or bull rush combat maneuver by pulling on a tightly worn object such as a pair of metal boots or a full set of metal armor. When performing a bull rush with this ability, the target moves towards you instead and you may not move with them. If you fail a combat maneuver with this ability by 5 or more, your turn immediately ends, you are pulled 5 feet towards your target for every 5 by which you failed the check, and you are pulled off balance making you flat-footed until the start of your next turn.'
		], // Description
		[
			'While flaring iron, a lurcher\'s pulling force increases and they are treated as being 1 size category larger for determining the force and damage of their pulls.'
		], // Flare
		[
			10 => [
				'effect' => '+1 size category for Allomantic Iron',
				'draw' => ''
			],
			30 => [
				'effect' => '+1 size category for Allomantic Iron',
				'draw' => ''
			],
			60 => [
				'effect' => '+1 size category for Allomantic Iron',
				'draw' => ''
			],
			100 => [
				'effect' => '+1 size category for Allomantic Iron',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>