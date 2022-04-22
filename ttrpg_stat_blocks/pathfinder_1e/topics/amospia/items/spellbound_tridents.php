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
	block(
		'Spellbound Tridents',
		'item',
		[
			'Scrolls are useful items allowing you to store any spell for later so that you can always have an extra and don\'t need to worry so much about your daily limit, but they have one glaring flaw. Scrolls are single use items. Wands improve upon the design allowing you to store up to 50 copies but once it\'s out, it\'s out. Staves come in handy here, able to be recharged and then be used again and again, but the rate of recharge so pitifully slow and requires spending high level spell slots every day, often acting as little more than a battery with horrible efficiency.',
			'Being who they are, the Narmen did not stand for these options. While they do manufacture a large quantity of these items they have also invented the Spellbound Trident. Spellbound tridents come in two forms, simple and complex. Simple spellbound tridents are each capable of producing an effect created by a simple application of one of the primal elements, such as producing a blast of flame or air. These are available in both lesser and greater variants applying progressively more powerful and/or more complicated effects. Complex spellbound tridents are tied to a specific category of spells centered around one of the most primal elements and can produce the effect of any spell in that category up to a given level determined while creating the trident with higher level tridents being more difficult to produce. Every spellbound trident has a number of charges that replenish each day. Common numbers of charges for simple tridents being 5, 10, and 50 while complex tridents often only have 3, 5, or 8.',
			'Spellbound tridents can also have either a staff or up to three rods integrated into while creating it, granting the their effects while wielding the trident as well. Metamagic rods integrated into the trident can be used to augment the spells cast from it.',
			'Spellbound tridents use the wielder\'s caster level spell DC. The effects of lesser simple tridents are treated as being 3rd level spells, those of simple tridents are treated as being 6th level spells, and those of greater simple tridents are treated as being 9th level spells.'
		]
	);
	echo '<p><b>Base Elements</b></p>';
	table(
		[
			'Element',
			'Lesser Simple Trident',
			'Simple Trident',
			'Greater Simple Trident',
			'Complex Trident'
		],
		[
			quick_array([
				'Air',
				'',
				'',
				'',
				'Spells with the Air descriptor.'
			]),
			quick_array([
				'Fire',
				'Launches a bead of flame that travels and explodes like ii/fireball/ii.',
				'Launches a small controlled flame that swiftly travels up to long range to a location that you can see, potentially navigating around or through objects. Once it has arrived it erupts into a massive ball of flame like ii/fireball/ii except that area increases to a 40-foot-radius spread, the maximum damage increases to 20d6, a number of points of damage equal to your caster level ignore fire resistance and immunity, and it makes water and similar liquids in the area evaporate into steam and as such, it can be used underwater without issue.',
				'Fires four controlled flames that function as ii/meteor swarm/ii except all the damage is fire damage, half of the damage dealt ignores fire resistance and immunity, and it destroys, melts, and evaporates objects as the simple version of the trident.',
				'Spells with the Fire descriptor.'
			]),
			quick_array([
				'Healing',
				'Cures 1d8 points of damage to a touched creature plus 1d8 per two caster levels over first, maximum 5d8. This is a positive energy effect and deals damage to undead instead of curing them. Undead may make a Will save for half damage.',
				'Restores the life of a touched creature. When used you choose whether it behaves as ii/heal/ii or ii/breath of life/ii.',
				'Restores a creature to full hit points and cures all negative levels, ability drain, and conditions cured by the ii/heal/ii spell. Aditionally, if cast on a creature that has died within the last minute, they are successfully healed and restored to life. As this is a positive energy effect, undead creatures are instead instantly slain.',
				'Spells of the Healing sub-school.'
			]),
			quick_array([
				'Luck',
				'',
				'',
				'',
				'Spells with the Luck descriptor.'
			]),
			quick_array([
				'Water',
				'',
				'',
				'',
				'Spells with the Water descriptor.'
			]),
			quick_array([
				'Force',
				'Fires a single bolt of force. The bolt requires a ranged touch attack against your target and deals 1d6 points of damage plus 1d6 points of damage per caster level over first, maximum 10d6.',
				'Fires one or more powerful bolts of force that deal 5d6 points of force damage and throw creatures back like ii/battering blast/ii.',
				'Fires one or more powerful homing bolts of force that deal 5d6 points of force damage plus 1d6 per two caster levels over 10th and throw creatures back like ii/battering blast/ii. These bolts also always hit their target like ii/magic missile/ii except they cannot be blocked by effects that block magic missile.',
				'Spells with the Force descriptor.'
			])
		],
		true,
		true,
		false
	);
	echo '<p><b>Dark Elements</b></p>';
	table(
		[
			'Element',
			'Lesser Simple Trident',
			'Simple Trident',
			'Greater Simple Trident'
		],
		[
			quick_array([
				'Flight',
				'Grants a touched creature the power to ii/fly/ii as per the spell.',
				'Grants the wielder the power to fly as per the spell ii/overland flight/ii.',
				'Grants the wielder the power to fly as per the spell ii/overland flight/ii except they recieve a bonus to their fly skill equal to their caster level, their speed is increased to 120 feet (or 80 feet if it wears medium or heavy armor, or if it carries a medium or heavy load) with a maneuverability of perfect. While under this effect, they do not need to make a check to hover or to move less than half their speed and remain flying.'
			]),
			quick_array([
				'Teleportation',
				'Fires a bolt of energy that travels a specified distance before teleporting the wielder to itself. This otherwise behaves as ii/dimension door/ii.',
				'Allows the wielder to concentrate on a location to teleport themself and wouched objects and willing creatures as ii/teleport/ii.',
				'Allows the wieler to open a doorway in space on front of them that otherwise functions as ii/gate/ii except it can only be used for planar travel function and it may be opened to another point on the same plane.'
			]),
			quick_array([
				'Resurrection',
				'Restores a dead creature to life as ii/reincarnate/ii.',
				'Restores a dead creature to life as ii/raise dead/ii.',
				'Restores a dead creature to life as ii/true resurrection/ii.'
			]),
			quick_array([
				'Void',
				'Damages an object within close range as per ii/break/ii.',
				'Fires a ray of darkness and entropy from the end that behaves as ii/disintegrate/ii.',
				'Conjures a sphere of pure darkness within long range that is identical to a ii/sphere of annihilation/ii except that control can be established by any creature holding the trident regardless of the distance and no other creature attempt to control the sphere. The wielder is also treated as bearing a ii/talisman of the sphere/ii for the purposes of controlling this sphere. Whenever the wielder make s a successful control check they may choose to cause the sphere to wink out instead. The sphere also winks out if it ever leaves the range of the trident or the trident is destroyed. Only one sphere may be created by each trident at a time.'
			]),
			quick_array([
				'Control',
				'Makes a nearby creature friendly as per ii/charm monster/ii.',
				'Allows nearly complete control of a humanoid as per ii/dominate person/ii.',
				'Allows complete control of a creature as per ii/dominate monster/ii except the subject never receives a new save and caries out any order, even obviously self-destructive ones. You can also issue complex telepathic commands even if you do not share a language. The subject also acts largely normal, unless given commands to the contrary, removing the decrease to the DC to determine the influence.'
			])
		],
		true,
		true,
		false
	);
	echo '<p><b>Corrupt Elements</b></p>';
	table(
		[
			'Element',
			'Lesser Simple Trident',
			'Simple Trident',
			'Greater Simple Trident'
		],
		[
			quick_array([
				'Motion',
				'',
				'',
				''
			]),
			quick_array([
				'Explosion',
				'Fires an explosive projectile at an object or grid corner within close range. On impact, this projectile deals 1d4 points of bludgeoning damage per caster level and 1 point of fire damage per caster level (maximum 10d4+10) to creatures and object within a 10-foot-radius burst, with a Reflex save for half.',
				'Same as Lesser Simple except the range increases the medium, the maximum becomes 15d4+15, the area becomes a 40-foot-radius spread, creatures within a 30-foot-radius burst do not receive a save for half, and creatures within a 20-foot-radius burst must make a seperate Reflex save or be knocked prone and deafened for 1d4+1 rounds.',
				'Same as Simple except the maximum becomes 20d4+20 and creatures within a 20-foot-radius burst that fail their save are deafened 1d4+1 minutes and stunned for 1d4+1 rounds.'
			]),
			quick_array([
				'Luminance',
				'The wielder cause either the end of the trident or a touched object to glow as ii/daylight/ii or they can dispell darkness spells of 3rd level or lower.',
				'',
				''
			]),
			quick_array([
				'Satisfaction',
				'Conjures a feast for up to 1 creature per caster level as ii/bountiful banquet/ii except as noted and that it can be made less elaborate all the way down to single wooden plates of food for each person.',
				'Conjures a great feast as ii/heroes\'s feast/ii.',
				''
			]),
			quick_array([
				'Storm',
				'Summons a 5-foot-wide, 30-foot-long, vertical bolt of lightning that deals 1d6 points of electricity damage, plus 1d6 per 2 levels over first, within medium range as designated by aiming the trident. Any creature in the target square or in the path of the bolt is affected and may make a reflex save to take half damage.',
				'Summons a bolt of lightning from the tip of the trident as per the spell ii/lightning bolt/ii.',
				'Summons an arc of lightning from the tip of the trident that bounces to nearby targets as per the spell ii/chain lightning/ii.'
			])
		],
		true,
		true,
		false
	);
	require $startDir.'pageEnd.php';
?>