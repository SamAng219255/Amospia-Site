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
	magicBuildingBlockAuto(
		'The Citadel of the Elements',// Name
		20,// CL
		['string' => '—'],// Price
		'Probably the best example of modernly designed Magic Architecture, the Citadel is capable of affecting the balance of the elements within a given region, either amplifying or diminishing the effect of certain elements. Each element is associated with two categories of spells, one which is amplified with the element and one which is amplified with the lack of the element. The former are cast as though effected by the empower meta-magic feat save level increase when the element is amplified and cast with all variable numeric effects halved including bonuses to those rolls when the element is diminished. The latter spells are affected inversely. (halved when the element is amplified and empowered when the element is diminished.)
		Additionally, amplifying and diminishing elements has one or more secondary effects within the region. The Citadel can only target a single region at a time and can only amplify one element at a time and diminish one element at a time. The Citadel has unlimited range but cannot reach other planes of existence. The maximum area of effect is 777 square miles per combined caster level of the casters operating the Citadel. The Citadel must be operated by exactly five individuals capable of casting spells. When activated, everyone operating the Citadel must make a DC 40 spellcraft check. If everyone is successful the citadel activates. If anyone failed the check and the sum of the amounts by which anyone who failed did so is at least 10, the Citadel cannot be operated for the next 24 hours. Each day the Citadel remains active, the five casters who activated the Citadel must spend at least eight hours concentrating together within the Citadel during which they must all make a DC 30 spellcraft check. If anyone fails the check, all five of the casters must spend an additional eight hours concentrating together. If any of the casters fail the check by five or more, the Citadel\'s effects immediately end. If the original casters do not spend sufficient time maintaining the Citadel\'s effects, the effects end at the end of that day.
		bb/Effects by Element/bb'.sTable(
			[
				'Element',
				'Spells Empowered',
				'Spells Weakened',
				'Effect when Empowered',
				'Effect when Diminished'
			],
			[
				[
					'Air',
					'Spells with the Air descriptor',
					'Spells with the Earth descriptor',
					'All creatures have their land and fly speeds doubled and can move twice as far as part of a 5 foot step. The DC for jumping is reduced by half. Creatures which are able to breathe air are able to breathe anywhere in the region.',
					'All creatures have their land and fly speeds halved and cannot take a 5 foot step. The DC for jumping is doubled. All creatures in the region which are breathing air must make a DC 10 fortitude save each round to or else become fatigued. Holding ones breath can be used to delay the effect. Each round creatures continue breathing the affected air or holding their breath, the save increases by 5. The fatigued condition from the air persists for 1d4 rounds after the creature stops breathing the affected air.'
				],
				[
					'Fire',
					'Spells with the Fire descriptor',
					'Spells with the Cold descriptor',
					'Creatures who are immune to fire are treated as having fire resistance 20. Creatures who are resistant to fire are treated as having 10 less resistance. Creatures who are not immune or resistant to fire are treated as being vulnerable to fire. Creatures who are vulnerable to cold are treated as though they were not. Creatures who aren\'t vulnerable to cold are treated as gaining +10 resistance to cold (stacking with any existing resistance). Creatures who would otherwise have at least 20 cold resistance become immune to cold. Light from fire extends twice as far.',
					'Creatures who are immune to cold are treated as having cold resistance 20. Creatures who are resistant to cold are treated as having 10 less resistance. Creatures who are not immune or resistant to cold are treated as being vulnerable to cold. Creatures who are vulnerable to fire are treated as though they were not. Creatures who aren\'t vulnerable to fire are treated as gaining +10 resistance to fire (stacking with any existing resistance). Creatures who would otherwise have at least 20 fire resistance become immune to fire. Light from fire extends half as far.'
				],
				[
					'Healing',
					'Spells of the Healing sub-school',
					'Spells of the Necromancy school',
					'Plants are effected as though by the enrichment effect of the plant growth spell. For undead and the purposes of summoning or creating undead the area is effected as by a consecrate spell.',
					'Plants are effected as though by the stunt growth effect of the diminish plants spell. For undead and the purposes of summoning or creating undead the area is effected as by a desecrate spell.'
				],
				[
					'Luck',
					'Spells of the Creation sub-school',
					'Spells with the Curse descriptor',
					'Whenever a creature in this area makes a saving throw, they make the check an extra time with any modifiers, rerolls, and other such effects that were had on the first attempt and take the better of those attempts. Additionally, add 1d10 to all rolls made to earn income.',
					'Whenever a creature in this area makes a saving throw, they make the check an extra time with any modifiers, rerolls, and other such effects that were had on the first attempt and take the worse of those attempts. Additionally, subtract 1d10 from all rolls made to earn income.'
				],
				[
					'Water',
					'Spells with the Water descriptor',
					'WIP',
					'Creatures which would be hurt or otherwise affected in any way by contact with water are treated as though they are permanently touching the same body water or water as all other creatures within 30\'. Creatures which can breathe water are able to breathe anywhere in the region.',
					'Creatures with the aquatic subtype gain up to 2 permanent negative levels which cannot be removed as long as they remain in the area. These negative levels are not counted when determining death from negative levels. Creatures without a swim speed are treated as being under the effects of freedom of movement for the purposes of actions taken underwater. All creatures in the region which are breathing water must make a DC 10 fortitude save each round to or else become fatigued. Holding ones breath can be used to delay the effect. Each round creatures continue breathing the affected water or holding their breath, the save increases by 5. The fatigued condition from the water persists for 1d4 rounds after the creature stops breathing the affected water.'
				]
			]
		),// Desc
		true,// Destruction
		'While the Citadel is immune to mundane attacks, a special ritual can be performed around the Citadel requiring a number of spell casters capable of casting 9th level spells whose combined caster level is at least 420. This ritual can performed while the citadel is active to create a destructive resonance with the Citadel\'s energies that with cause the Citadel to crumble.'// Construction
	);
	require $startDir.'pageEnd.php';
?>