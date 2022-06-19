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
		'Sculkers',// Name
		15,// Race Points
		'Little is known about sculkers due to their secretive nature but it is known they bear some connection to various soul constructs that can be found in some of the other caves that are similar to where they live. These caves also tend to include the ruins of eleborate cities though it is unlikely that the sculker once dwelled in these cities. More likely is that they are some mutant creation by the ever-growing soul constructs that guard the cities. The sculkers themselves claim no allegiance to the network of detection and defense mechanisms but they are able to speak the strange language possessed by the constructs and in fact do so natively. Thus they can fool the constructs into ignoring their presence.',// Desc
		'Sculkers are roughly humanoid with long thick limbs. Most of their body is a shade of slightly greenish blue that is almost black. Small protrusions, the color of old bones, go up their spine while their skin fades to a similar color along their upper and lower arms and legs but fades back around their knees and elbows. Plates of material of the same color can also be seen on their chest, lining up with their ribs. Their face has no eyes but a pair of blue-green feathery antennae extend outward and upward from either side of their heads. These allow them to sense vibrations and light up an almost cyan color when they do. Material almost resembling short hair, no more than an inch long, can be found on their heads though it is the same color as their antennae with slightly glows spots strewn throughout.',// Physical Desc
		'Sculkers live in small groups that are generally aware of the current locations of all the others in the area and often send envoys back and forth for trade and send information. They have little if any true organization, simply following along as they always have.',// Society
		'Sculkers are automatically distrusted by nearly all other creatures and generally have no realtions with outsiders. They use often use advanced scouts to discover and avoid any unwanted atention from other races.',// Relations
		'Sculkers are generally true neutral though immediate distrust by all but the vilest of characters has lead more than a few towards more evil alignments. Sculkers have no religions among their people but have no particular dislike or distrust of religion.',// Alignment and Religion
		'',// Adventurers
		'WIP',// Male Names
		'WIP',// Female Names
		[
			'dex' => 2,
			'con' => 2
		],// Ability Mofifiers
		'Sculkers are sneaky and hardy people, built to sneak about in the darkness and take their enemies by surprise while being sturdy enough to take a hit from the carious dangerous denizens found in the caves.',// Ability Description
		[
			'bb/Medium/bb: Sculkers are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Aberration/bb: Sculkers are aberrations.',
			'bb/Normal Speed/bb: Sculkers have a base speed of 30 feet.',
			'bb/Blind/bb: Sculkers are blind and unable to see visually. By default, all creatures are treated as being invisible to the sculkers.',
			'bb/Vibration Sense/bb: Sculkers are able to sense vibrations caused by movement, granting them blindsense with a range of 30 feet with the exceptions that they must still make perception checks to discover the location of a hiding creature, though they receive a +5 bonus to notice them, and creatures that are moving faster then half speed, swinging an object, making audible noise, or performing similar activities only receive partial concealment from the sculker\'s lack of sight.',
			'bb/Soul Seer/bb: Sculkers receive ii/deathwatch/ii as a constant spell-like ability, allowing them to sense if creatures are dead, fragile (alive and wounded, with 3 or fewer hit points left), fighting off death (alive with 4 or more hit points), healthy, undead, or neither alive nor dead (such as a construct).',
			'bb/Blind Fighters/bb: Sculkers receive Blind Fight as a bonus feat at first level.',
			'bb/Sneaky Stalker/bb: Sculkers receive a +4 racial bonus to Stealth and they always treat Stealth and Perception as class skills.',
			'bb/Shriek/bb: Sculkers may make a supernatural shriek attack as a standard action. This shriek is incredibly loud and can be heard at great distances and is able to be heard through physical barriers wothout issue. In addition, when performing this shriek the sculker may choose a single target within 30 feet in line of sight. This target takes 1d6 points of sonic damage plus 1d6 points of damage per two levels over first. The target may make a Fortitude save to take half damage with a DC of 10 plus half the sculker\'s number of hit dice plus their constitution modifier.',
			'bb/Negative Energy Affinity/bb: Sculkers are healed by negative energy and harmed by positive energy like undead.',
			'bb/Truly Unnatural/bb: Sculkers bear an unnatural presence that often wards off other creatures. Sculkers take a -4 penalty on all Charisma based skill checks, other than Intimidate, to affect creatures that noticed this aura that are not evil, undead, aberrations, or constructs. Such creatures\' starting attitude toward the sculker is also one step worse than normal.',
			'Animals and magical beasts automatically sense this aura. All other creatures, other than constructs, make a DC 15 wisdom check the first time they meet the sculker to notice the aura.',
			'Sculkers also bear an aura of necromancy whose caster level is equal to their number of hit dice, and an aura of undeath similar to an undead with the same number of hit dice.',
			'bb/Languages/bb: Sculkers begin play speaking Sculk-Speech. Sculk-Speech is an unusual language that cannot be spoken nor understood by most creatures and is often described as sounding like strange chirping. Only creatures natively able to speak Sculk-Speech are able to learn Sculk-Speech. Sculkers with high Intelligence scores can choose from the following languages: Aklo, Common, Necril, and Undercommon.'
		],// Racial Traits
		false// Subraces
	);
	require $startDir.'pageEnd.php';
?>