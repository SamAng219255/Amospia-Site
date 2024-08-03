<?php
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	impossibleStaffBlockAuto(
		'Perfect Health',	#name
		'Conjuration',	#school
		10,	#lvl
		[
			'This brazen staff has the pattern of a snake coiling up its length and the head of the staff resembles a unicorn\'s horn fashioned from mithral which glows with a warm light that sheds light as a torch. Touching the head against a dying creature as a standard action causes them to ii/stabilize/ii as the spell. The staff can be wielded as a spear and it deals an additional 2d6 positive energy damage against undead creatures and overcomes DR silver.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		'Healing',	#subschool
		[],	#descriptors
		[
			'M' => 0,
			'S' => 1,
			'V' => 1
		],	#components
		'1 standard action',	#time
		'Medium',	#range
		'one or more creatures, no two of which can be more than 30 ft. apart',	#target
		false,	#effect
		false,	#area
		'instantaneous and 1 round/level, see text',	#duration
		'Will negates (harmless)',	#save
		'yes (harmless)',	#sr
		[
			'ii/Perfect health/ii enables you to channel a powerful nexus of positive energy to restore targets to nearly perfect health. It cures 10 hit points of damage per level of the caster, to a maximum of 300 points at 30th level. It also immediately ends any and all of the following adverse conditions affecting the target: ability damage, ability drain, blinded, confused, dazed, dazzled, deafened, diseased, exhausted, fatigued, feebleminded, insanity, nauseated, poisoned, sickened, and stunned. ii/Perfect health/ii also removes all permanent and temporary negative levels, dispels all magical effects penalizing the targets\' abilities, and removes all forms of insanity, confusion, and similar mental effects.',
			'Additionally, if any of the creature\'s have severed body members (fingers, toes, hands, feet, arms, legs, tails, or even heads of multiheaded creatures), broken bones, or ruined organs, they grow back. After the spell is cast, the physical regeneration is complete in 1 round if the severed members are present and touching the creature. It takes 2d10 rounds otherwise. ',
			'ii/Perfect health/ii also lingers on the targets, granting them regeneration 5 (negative energy) for a number of rounds equal to the caster level.',
			'If used against an undead creature or other creature that is harmed by positive energy, ii/perfect health/ii instead acts like ii/harm/ii except the maximum damage is increased to 300 points at 30th level and, on a failed save, the target takes a -1 penalty to attack rolls, skill checks, and saves and a -10 penalty to their maximum health. These penalties last for 1 round per caster level and stack with multiple casting of this spell.'
		],	#spellDesc
		['Charging a ii/staff of perfect health/ii requires expending 2 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>