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
	classBlock(
		'Caster',// name,
		'desc',// desc,
		'role',// role,
		'Any',// align,
		6,// hd,
		2,// startWealth,
		[
			'Spellcraft'
		],// classSkills,
		2,// skillsPerLevel,
		0.5,// bab,
		[
			'fort' => 'bad',
			'refl' => 'bad',
			'will' => 'good' 
		],// saves,
		[
			'',// 1st
			'',// 2nd
			'',// 3rd
			'',// 4th
			'',// 5th
			'',// 6th
			'',// 7th
			'',// 8th
			'',// 9th
			'',// 10th
			'',// 11th
			'',// 12th
			'',// 13th
			'',// 14th
			'',// 15th
			'',// 16th
			'',// 17th
			'',// 18th
			'',// 19th
			'' // 20th
		],// specials,
		[
			0 => [
				3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4
			],
			1 => [
				1, 2, 2, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4
			],
			2 => [
				0, 0, 1, 2, 2, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4
			],
			3 => [
				0, 0, 0, 0, 1, 2, 2, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4
			],
			4 => [
				0, 0, 0, 0, 0, 0, 1, 2, 2, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4
			],
			5 => [
				0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 2, 3, 3, 3, 4, 4, 4, 4, 4, 4
			],
			6 => [
				0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 2, 3, 3, 3, 4, 4, 4, 4
			],
			7 => [
				0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 2, 3, 3, 3, 4, 4
			],
			8 => [
				0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 2, 3, 3, 4
			],
			9 => [
				0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 3, 4
			]
		],// spells,
		false,// spellsSecondary,
		[
			'Weapon and Armor Proficiency' => [
				'A wizard casts arcane spells drawn from the sorcerer/wizard spell list presented in Spell Lists. A wizard must choose and prepare his spells ahead of time.',
				'To learn, prepare, or cast a spell, the wizard must have an Intelligence score equal to at least 10 + the spell level. The Difficulty Class for a saving throw against a wizard\'s spell is 10 + the spell level + the wizard\'s Intelligence modifier.',
				'A wizard can cast only a certain number of spells of each spell level per day. His base daily spell allotment is given on Table: Wizard. In addition, he receives bonus spells per day if he has a high Intelligence score (see Table: Ability Modifiers and Bonus Spells).',
				'A wizard may know any number of spells. He must choose and prepare his spells ahead of time by getting 8 hours of sleep and spending 1 hour studying his spellbook. While studying, the wizard decides which spells to prepare.'
			]
		]// features
	);
	require $startDir.'pageEnd.php';
?>