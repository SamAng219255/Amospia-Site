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
		'Terragri',
		'plane',
		[
			'Often referred to as the plane of earth, this lower plane is composed of numerous expansive caverns of rock and stone that has a marbled texture as many type of stone blend together. Metals and precious gems can be found in relative abundance here.'
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
					'bb/Essence/bb: Earth-Dominant',
					'bb/Alignment/bb: Mildly Neutral-Aligned',
					'bb/Magic/bb: Enhanced (spells and spell-like abilities with the earth descriptor or that use, manipulate, or create earth or stone; including those of the Earth domain and the elemental [earth] bloodline) and Impeded (spells and spell-like abilities with the air descriptor or that use or create air, including those of the Air domain, spell-like abilities of the elemental [air] bloodline, and spells that summon air elementals or outsiders with the air subtype).',
				])
			],
			[
				'title' => 'Denizens',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Xorn/bb: Strange creatures as big around as they are tall that can swim though stone as easily as a fish through water they consume precious gems and metals.'
				])
			],
			[
				'title' => 'Divinities',
				'spaced' => true,
				'texts' => quick_array([
					'No known divinities reside in Terragri',
					'bb/Outsiders/bb: None',
					'bb/Petitioners/bb: None'
				])
			],
			[
				'title' => 'Infusions',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Basic/bb: You gain a +2 bonus on Climb checks and a +2 bonus on saving throws against earth and acid effects.',
					'bb/Improved/bb: You can use ii/earth glide/ii once per day as a spell-like ability.',
					'bb/Greater/bb: You can use ii/seismic fissure/ii once per day as a spell-like ability.',
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>