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
		'Smaragdia',
		'plane',
		[
			'Smaragdia is one of the stranger upper planes, composed entirely of emerald landmasses hanging from a ceiling.'
		],
		true,
		[
			[
				'title' => 'Traits',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Gravity/bb: Normal',
					'bb/Time/bb: Normal',
					'bb/Realm/bb: Immeasurable',
					'bb/Structure/bb: Lasting',
					'bb/Essence/bb: Mixed',
					'bb/Alignment/bb: Mildly Neutral-Aligned',
					'bb/Magic/bb: Enhanced (spells and spell-like abilities of the creation sub-school, that generate valuable materials, that grant luck bonuses, or that that otherwise grant good luck or fortune) and Impeded (spells and spell-like abilities with the curse descriptor or that grant bad luck or misfortune).',
				])
			],
			[
				'title' => 'Divinities',
				'spaced' => true,
				'texts' => quick_array([
					'No known divinities reside in Smaragdia',
					'bb/Outsiders/bb: None',
					'bb/Petitioners/bb: None'
				])
			],
			[
				'title' => 'Infusions',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Basic/bb: You gain a +1 bonus on all saving throws and a +2 bonus on skill checks to earn income.',
					'bb/Improved/bb: You can use ii/bit of luck/ii once per day as a spell-like ability.',
					'bb/Greater/bb: Once per day, before making any d20 roll, you can choose to instead treat it as though you rolled a natural 20.' 
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>