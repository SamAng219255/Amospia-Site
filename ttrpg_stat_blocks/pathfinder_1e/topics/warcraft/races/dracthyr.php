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
		'Dracthyr',
		15,
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
			'cha' => 2
		],
		'',
		[
			'bb/Monstrous Humanoid/bb: Dracthyr are monstrous humanoids creatures with the reptilian subtype.',
			'bb/Medium/bb: Dracthyr are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Dracthyr have a base speed of 30 feet and a fly speed of 30 feet with clumsy maneuverability.',
			'bb/Discerning Eye/bb: Dracthyr have darkvision to a range of 60 feet, low-light vision, and receive a +2 racial bonus on Perception checks.',
			'bb/Visage/bb: Dracthyr gain the following supernatural ability: Dracthyr can assume the appearance of a single form of a single Medium or Small humanoid race with added draconic features such as horns or patches of scales. The form is static and cannot be changed each time they take this form. The dracthyr gains a +10 racial bonus on Disguise checks made to appear as the member of the race whose appearance they assume. Changing their shape is a standard action. This trait otherwise functions as ii/alter self/ii, save that the dracthyr does not adjust its ability scores.',
			'bb/Languages/bb: Dracthyr begin play speaking Draconic. Dracthyr with high Intelligence scores can choose from Centaur, Common, Orcish, and Kalu\'ak.'
		],
		false,
		[
			[
				'Alternate Racial Traits',
				[
					'bb/Stability/bb',
					'/mm/You receive a +4 racial bonus to your CMD when resisting bull rush or trip attempts while standing on the ground.',
					'/mm/This replaces hardiness.'
				]
			]
		]
	);
	block(
		'Favored Class Bonus',
		'favored-class-bonus',
		quick_array(
			[
				'Instead of receiving an additional skill rank or hit point whenever they gain a level in a favored class, dracthyr have the option of choosing from a number of other bonuses, depending upon their favored class.',
				'The following options are available to all dracthyr who have the listed favored class.',
				'<br>',
				'Sorcerer: +1/3 level for the purposes of using bloodline powers. This does not grant early access to level based powers.',
				'Wizard: +1 additional new spell for your spellbook. If you are at least 3rd level, this new spell must be lower than the maximum level of spell you can cast.',
				'Any Class with Arcane Spells: You may reduce the required spell slot of an arcane spell with a metamagic feat by -1/4 to a minimum of its original level.'
			]
		),
		false
	);
	racialFeats('dracthyr', [
		[
			'name' => 'Tail Swipe',
			'desc' => '',
			'prereq' => '+7 base attack bonus',
			'benefit' => 'You can use your tail to swipe at and possibly knock down nearby foes. You can use your tail to make attacks of opportunity with a reach of 5 feet. Your tail becomes a natural attack that deals 1d8 points of damage plus your Strength modifier. When you hit with your tail, you can make a trip attack as a free action that does not provoke attacks of opportunity.',
			'special' => false
		],
		[
			'name' => 'Wing Buffet',
			'desc' => '',
			'prereq' => '+1 base attack bonus',
			'benefit' => 'You learn to create powerful winds with your wings that can buffet opponents and knock them back. As a standard action, you can make a bull rush or trip combat maneuver against one creature within 30 feet. This always provokes an attack of opportunity, even if you would not normally provoke an attack when performing the combat maneuver.',
			'special' => false
		]
	]);
	require $startDir.'pageEnd.php';
?>