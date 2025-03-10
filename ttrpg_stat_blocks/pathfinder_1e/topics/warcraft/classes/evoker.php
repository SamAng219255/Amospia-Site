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
		'Draconic Evoker',// name,
		'Description here.',// desc,
		'Role here.',// role,
		'Any',// align,
		8,// hd,
		false,// parentClasses
		4,// startWealth,
		false,// require,
		[
			'Fly',
			'Intimidate',
			'Knowledge (arcana)',
			'',
			'',
			'',
			'',
			'',
			'',
			''
		],// classSkills,
		2,// skillsPerLevel,
		0.75,// bab,
		true,// showIter,
		[
			'fort' => 'good',
			'refl' => 'good',
			'will' => 'bad' 
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
		false,// spells,
		false,// spellsSecondary,
		[
			'Weapon and Armor Proficiency' => [
				'Evokers are proficient with all simple and martial weapons, light armor, medium armor, and shields (except tower shields).'
			]
		]// features
	);
	require $startDir.'pageEnd.php';
?>