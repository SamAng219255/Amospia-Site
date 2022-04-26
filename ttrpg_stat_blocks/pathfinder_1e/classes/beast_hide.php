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
		'Beast Knight',// name,
		'desc',// desc,
		'Beast knights are masters of combat who are skilled at mixing advanced training and rigid study with the wild might of the beasts whose forms they take.',// role,
		'Any',// align,
		10,// hd,
		5,// startWealth,
		[
			'Acrobatics',
			'Climb',
			'Craft',
			'Fly',
			'Handle Animal',
			'Intimidate',
			'Knowledge (geography)',
			'Knowledge (nature)',
			'Perception',
			'Profession',
			'Ride',
			'Stealth',
			'Survival',
			'Swim'
		],// classSkills,
		2,// skillsPerLevel,
		1,// bab,
		[
			'fort' => 'good',
			'refl' => 'good',
			'will' => 'bad' 
		],// saves,
		[
			'Beast Hide Transformation, Skin Training 1',// 1st
			'',// 2nd
			'',// 3rd
			'',// 4th
			'Skin Training 2',// 5th
			'',// 6th
			'',// 7th
			'',// 8th
			'',// 9th
			'Skin Training 3',// 10th
			'',// 11th
			'',// 12th
			'',// 13th
			'',// 14th
			'Skin Training 4',// 15th
			'',// 16th
			'',// 17th
			'',// 18th
			'',// 19th
			'Skin Mastery' // 20th
		],// specials,
		false,// spells,
		false,// spellsSecondary,
		[
			'Weapon and Armor Proficiency' => [
				'A beast knight is proficient with all simple and martial weapons, light armor, medium armor, and shields (except tower shields).'
			],
			'Beast Hide Transformation (Su)' => [
				'Starting at first level, beast knights gain the ability to wear the pelt of certain types of creatures they have slain and gain power from it, as well as take their form.',
				'Beast knights can skin the pelt from an creature with a successful Survival check with a DC equal to 15 plus the CR of the creature. Failing the check by 5 or more ruins the pelt. The beast knight may incorporate a pelt of their same size onto the surface any set of medium or heavy armor by spending 1 hour with them. A given set of armor can only have one incorporated pelt at a time. Switching pelts also takes 1 hour. A larger pelt can be cut down into a single smaller pelt for wearing the pelt of a creature larger than oneself, and smaller pelts may be sewn together, with 4 pelts of a given size being made into 1 pelt one step larger.',
				'Beast knights wearing the pelt of creature they had a hand in killing receive a +2 bonus to either strength or dexterity and +2 natural armor bonus. If the creature had a greater strength than dexterity the bonus is to strength otherwise the bonus goes to dexterity.',
				'Beast knights can also take the form of the creature whose pelt they wear. Taking this form or dismissing it is a standard action and functions as ii/beast shape I/ii, with the same limitations, except it lasts until dismissed.',
				'Starting at 6th level, they may take the form of an animal as ii/beast shape II/ii.',
				'Starting at 8th level, they may take the form of an animal or magical beast as ii/beast shape III/ii.',
				'Starting at 10th level, they may take the form of an animal or magical beast as ii/beast shape IV/ii.',
				'Starting at 12th level, they may take the form of an animal or magical beast as ii/beast shape IV/ii or the form of a dragon as ii/form of the dragon I/ii or ii/form of the exotic dragon I/ii.',
				'Starting at 14th level, they may take the form of an animal or magical beast as ii/beast shape IV/ii or the form of a dragon as ii/form of the dragon II/ii or ii/form of the exotic dragon II/ii.',
				'Starting at 16th level, they may take the form of an animal or magical beast as ii/beast shape IV/ii or the form of a dragon as ii/form of the dragon III/ii or ii/form of the exotic dragon III/ii.',
			],
			'Skin Training' => [
				''
			] 
		]// features
	);
	require $startDir.'pageEnd.php';
?>