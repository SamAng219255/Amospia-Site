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
		'Sulaheim',
		'plane',
		[
			'This plane, which known the mud dimension, earns it name well as the entire plane is wet and dirty. Sulaheim is an upper plane. The portion not underwater is covered with an exotic swamp filled with standing water and deep bogs. There are two types of oceans found here, one filled with massive mushrooms whose weight is supported by the surrounding water, the caps of the tallest one barely breaching the surface, while the other contains what appears to be an ordinary jungle that is completely underwater, as though it was suddenly flooded in a cataclysmic rain.'
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
					'bb/Magic/bb: Enhanced (spells and spell-like abilities with the earth or water descriptor or that create or manipulate mud) and Impeded (spells and spell-like abilities with the fire descriptor or that generate sunlight).',
				])
			],
			[
				'title' => 'Denizens',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Lizardfolk/bb: Humanoid lizards that prefer wetlands. Lizardfolk and their kin are found throughout the planes though they originate from aa/drakheim|Drakheim/aa.'
				])
			],
			[
				'title' => 'Divinities',
				'spaced' => true,
				'texts' => quick_array([
					'No known divinities reside in Sulaheim',
					'bb/Outsiders/bb: None',
					'bb/Petitioners/bb: None'
				])
			],
			[
				'title' => 'Infusions',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Basic/bb: You gain a +2 bonus to your CMD to resist bull rush, reposition, trip, and overrun attempts as long as you are touching the ground. Additionally, you ignore difficult terrain from mud, shallow water, or non-magical vegetation.',
					'bb/Improved/bb: You can use ii/slowing mud/ii once per day as a spell-like ability.',
					'bb/Greater/bb: You can use ii/elemental bombardment/ii once per day as a spell-like ability, but only to hurl mud elementals.',
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>