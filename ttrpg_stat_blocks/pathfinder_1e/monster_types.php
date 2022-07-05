<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	block(
		'Monster Types',
		'types',
		[
			'Each creature has one type, which broadly defines its abilities. Some creatures also have one or more subtypes. A creature cannot violate the rules of its subtype without a special ability or quality to explain the difference—templates can often change a creature\'s type drastically.'
		],
		true,
		[
			[
				'title' => 'False Animate',
				'titleLevel' => '3a',
				'spaced' => true,
				'texts' => quick_array([
					'A false animate is a creature formed of non-living matter that has received a twisted semblance of life from the innate syntropy (orderliness) of Positive Energy. False animates and undead have an innate hatred of each other and the two are automatically hostile.',
					'The creation of false animates is generally considered an evil act (as it is seen as a perverted mockery of true life) though many good aligned gods, outsiders, and temples will employ either naturally created ones (or ones that they believe to be naturally created) in their work.',
					'Most good aligned outsiders and deities like to forget that false animates exist as their existence mars the apparent truly good nature of positive energy. These individuals generally seek out and destroy ones they find. The Jyoti are among the strongest opponents to the existence of false animates.',
					'A false animate has the following features.',
					'<ul>
						<li>d8 Hit Die.</li>
						<li>Base attack bonus equal to 3/4 total Hit Dice (medium progression).</li>
						<li>Good Will saves.</li>
						<li>Skill points equal to 4 + Int modifier (minimum 1) per Hit Die. Many false animates, however, are mindless and gain no skill points or feats. The following are class skills for false animates: Climb, Disguise, Fly, Intimidate, Knowledge (arcana), Knowledge (religion), Perception, Sense Motive, Spellcraft, and Stealth.</li>
					</ul>',
					[
						'text' => 'Traits',
						'titleLevel' => 3
					],
					'A false animate creature possesses the following traits (unless otherwise noted in a creature\'s entry).',
					'<ul>
						<li>No Constitution score. False animates use their Charisma score in place of their Constitution score when calculating hit points, Fortitude saves, and any special ability that relies on Constitution (such as when calculating a breath weapon\'s DC).</li>
						<li>Darkvision 60 feet.</li>
						<li>Immunity to all mind-affecting effects (charms, compulsions, morale effects, patterns, and phantasms).</li>
						<li>Immunity to bleed, death effects, disease, paralysis, poison, sleep effects, and stunning.</li>
						<li>Not subject to nonlethal damage, ability drain, or energy overload. Immune to damage to its physical ability scores (Constitution, Dexterity, and Strength), as well as to exhaustion and fatigue effects.</li>
						<li>Cannot heal damage on its own if it has no Intelligence score, although it can be healed. The fast healing special quality works regardless of the creature\'s Intelligence score.</li>
						<li>Immunity to any effect that requires a Fortitude save (unless the effect also works on objects or is harmless).</li>
						<li>Not at risk of death from massive damage, but is immediately destroyed when reduced to 0 hit points.</li>
						<li>A false animate cannot be raised or resurrected.</li>
						<li>False animates do not possess a soul.</li>
						<li>Proficient with its natural weapons, all simple weapons, and any weapons mentioned in its entry.</li>
						<li>Proficient with whatever type of armor (light, medium, or heavy) it is described as wearing, as well as all lighter types. False animates not indicated as wearing armor are not proficient with armor. False animates are proficient with shields if they are proficient with any form of armor.</li>
						<li>False animates do not breathe, eat, or sleep.</li>
					</ul>'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>