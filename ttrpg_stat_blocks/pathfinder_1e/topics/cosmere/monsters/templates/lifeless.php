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
		'Lifeless (+0, see text)',
		'template',
		quick_array([
			'Acquired/Inherited Template Acquired',
			'Simple Template No',
			'Usable with Summons No',
			'',
			'Type II BioChromatic entities are Mindless Manifestations in a Deceased Host, or more commonly known as "Lifeless", and are non-sentient reanimated humanoid or animal remains. Their brains continue to function; they are therefore able to interpret old commands and receive new commands. These creatures are made via complex Commands that reanimate a dead person or animal. These Commands are guarded closely by those who know them. To an appropriately skilled awakener, lifeless are easy to create requiring only 1 Breath.',
			'"Lifeless" is an inherited template that can be added to the corpse of any creature, referred to hereafter as the base creature.',
			'bb/Challenge Rating/bb: The CR of a lifeless doesn\'t usually change as they maintain most of their abilities but base creatures with especially high constitution scores or that rely on magical abilities will produce weaker lifeless.',
			'bb/Alignment/bb: A lifeless\'s alignment is changed to N.',
			'bb/Type/bb: A lifeless\'s type changes to construct.',
			'bb/Hit Dice/bb: A lifeless retains all hit dice possessed by the base creature and gains bonus hit points as appropriate for a construct of its size.',
			'bb/Defensive Abilities/bb: A lifeless loses all of its supernatural and spell-like defensive abilities and gains all of the immunities and traits possessed by constructs.',
			'bb/Attacks/bb: A lifeless retains all the natural and manufactured weapon attacks and weapon and armor proficiencies of the base creature.',
			'bb/Special Attacks/bb: A lifeless loses all of the base creature\'s supernatural and spell-like special attacks but retains all other special attacks.',
			'bb/Spell-like Abilities/bb: A lifeless loses all spell-like abilities possessed by the base creature.',
			'bb/Spellcasting/bb: A lifeless loses all spellcasting possessed by the base creature.',
			'bb/Abilities/bb: A lifeless has no constitution score and a minimum intelligence of 5.',
			'bb/Base Attack Bonus/bb: A lifeless\' base attack bonus is equal to its number of Hit Dice.',
			'bb/Feats/bb: A lifeless retains its feats though it cannot use feats it no longer meets the prerequisistes of.',
			'bb/Skills/bb: A lifeless loses or gains a number of skill points to match their new intelligence.',
			'bb/Languages/bb: A lifeless retains all languages possessed by the base creature and gains the native language of the awakener that created them if they do not already possess it.',
			'bb/Special Qualities/bb: A lifeless loses all spell-like and supernatural abilities possessed by the base creature.'
		]),
		true
	);
	block(
		'Variant Lifeless',
		'variants',
		[
			'Typical lifeless are constructed from corpses without modification other than basic preservation techniques, but various augmentations can be performed on a body before awakening it to yield a stronger construct.'
		],
		false,
		[
			[
				'title' => 'Stone Lifeless',
				'spaced' => true,
				'texts' => quick_array([
					'Stone Lifeless are created by encasing a skeleton in stone or transmuting a body into stone before awakening it. If the body is encased in, or transmuted to, a different material instead, they instead receive the hardness of that material instead and may receive more or less additional hit points.',
					'bb/Hit Dice/bb: A stone lifeless gains an additional hit dice as a creature two size categories larger. Gargantuan stone lifeless receive 100 additional hit points and Colossal stone lifeless receive 120 additional hit points.',
					'bb/Defensive Abilities/bb: Stone lifeless also gain hardness 8.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>