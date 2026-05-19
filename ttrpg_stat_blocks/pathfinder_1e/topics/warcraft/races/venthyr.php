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
	raceBlockAuto(
		'Venthyr',
		16,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'str' => 2,
			'con' => 2,
			'int' => -2
		],
		'',
		[
			'bb/Native Outsider/bb: Venthyr are Outsiders with the native, sinborn, and venthyr subtypes.',
			'bb/Medium/bb: Venthyr are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Venthyr have a base speed of 30 feet.',
			'bb/Darkvision/bb: Venthyr can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Light Blindness/bb: Abrupt exposure to bright light blinds venthyr for 1 round; on subsequent rounds, they are dazzled as long as they remain in the affected area.',
			'bb/Skill Bonus/bb: Venthyr gain a +1 racial bonus on Diplomacy, Intimidate, Knowledge (nobility), and Sense Motive checks.',
			'bb/Anima Dependence/bb: In addition to physical sustenance, venthyr must consume the energy of souls, called anima. They have a pool of points of anima that can hold a number of points equal to their level plus their Charisma bonus, minimum 1. They must spend one point from this pool each day to sustain themselves. Each day they go without consuming a point of anima, they must make a Wisdom check (DC 10, +1 for each previous check) or take 1 point of Wisdom damage. This damage cannot be healed by any means until the venthyr is gets the anima they need.',
			'Once per day, the venthyr may spend one point of anima as a standard action to recover 1d4 points of health for each hit die they possess.',
			'bb/Extract Sins/bb: As a standard action, a venthyr can extract the sin-stained energy of a creature\'s soul from a creature within reach. This is a spell-like ability and requires a touch attack against the target. The target also receives a Will save to resist this effect with a DC equal to 10 + half the venthyr\'s number of hit dice + their Charisma modifier. Good aligned targets receive a +5 circumstance bonus to this save and creatures that are neither good nor evil receive a +2 circumstance bonus. Mindless creatures, creatures without souls, creatures with the good subtype, and creatures with an Intelligence of 2 or lower are immune to this ability.',
			'On a failed save, the venthyr receives 1 point of anima and the target suffers 1 negative level and may choose to receive the benefits of the ii/atonement/ii spell. This negative level lasts for 1 hour per caster level before automatically fading. These negative levels do not generally last long enough to risk becoming permanent. If the target is immune to negative levels, they instead suffer 1d3 points of Charisma damage instead.',
			'Whether or not the target successfully made their save, the target becomes immune to that venthyr\'s extract sins ability for 24 hours.',
			'The venthyr uses their total number of hit dice in place of their caster level for this ability.',
			'bb/Animated Weapon Proficiency/bb: Dancing and flying weapons wielded by venthyr receive the venthyr\'s entire attack bonus and, if the venthyr grabs the weapon while it is activated, the venthyr can loose it to attack on its own after only 2 rounds. As a free action, the venthyr may also extend the duration of a flying or dancing weapon by 1 round by spending a single point of anima.',
			'bb/Door of Shadows/bb: When the venthyr reaches 8th level in any combination of classes, they may teleport themself to a location they can see as ii/dimension door/ii, using their total character level in place of their caster level. The venthyr may only teleport a total of a 10 feet per caster level each day. They may spend 1 point of anima while using this ability to extend the distance they can teleport by 30 feet.',
			'bb/Sinbound/bb: Each and every venthyr has a sinstone carved with their mortal sins which has great power over the venthyr. If a venthyr\'s sinstone is read aloud in their presence, the venthyr must make a Will save opposed by a check from the reader, or else become staggered until 1d4 rounds after the stone is no longer being read aloud. If the venthyr fails the check by 5 or more, they are also stunned for 1 round. Evil aligned venthyr take a -5 penalty to this check and neutral aligned venthyr take a -2 penalty. The reader may use an appropriate Profession or Perform check (such as Perform [oration]), a Linguistics check, or may make a d20 check adding half their level plus any one mental ability modifier.',
			'bb/Sinborn/bb: Venthyr are always treated as evil for the purposes of spells and effects other than those of the Divination school. Venthyr are harmed by positive energy like undead, except they take nonlethal damage instead. Venthyr are also healed by negative energy like undead, except they only receive half as much health. Damaging spells and effects with the light descriptor deal half again as much damage to venthyr and treated venthyr as undead that are vulnerable to sunlight.',
			'bb/Languages/bb: Venthyr begin play speaking Shadowspeak. Venthyr with high Intelligence scores may know any language (other than secret languages).'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>