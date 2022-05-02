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
		'Aquatica',
		'plane',
		[
			'This plane is known by some as the plane of water despite not being wholly liquid. Should one swim far enough up or down they will discover a stone floor and ceiling that hides the same type of indestructible barrier that surrounds all lower planes. Additionally, throughout its depths travellers can locate regions where the stone protrudes further in and forms a series of flooded caverns. Other regions are filled with massive kelp forests and continent sized coral reefs.'
		],
		true,
		[
			[
				'title' => 'Traits',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Gravity/bb: No Gravity',
					'bb/Time/bb: Normal',
					'bb/Realm/bb: Immeasurable',
					'bb/Structure/bb: Lasting',
					'bb/Essence/bb: Water-Dominant',
					'bb/Alignment/bb: Mildly Neutral-Aligned',
					'bb/Magic/bb: Enhanced (spells and spell-like abilities with the water descriptor or that use or create water, including those of the Water domain or the elemental [water] bloodline) and Impeded (spells and spell-like abilities with the fire descriptor or that use or create fire, including spells of the Fire domain, spell-like abilities of the elemental [fire] bloodline, and spells that summon fire elementals or outsiders with the fire subtype). Additionally, non-magical fires are immediately extinguished and cannot be lit.',
				])
			],
			[
				'title' => 'Divinities',
				'spaced' => true,
				'texts' => quick_array([
					'No known divinities reside in Aquatica',
					'bb/Outsiders/bb: None',
					'bb/Petitioners/bb: None'
				])
			],
			[
				'title' => 'Infusions',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Basic/bb: You gain a +2 bonus on Swim checks and a +2 bonus on saving throws against water and cold effects.',
					'bb/Improved/bb: You can use ii/ride the waves/ii once per day as a spell-like ability.',
					'bb/Greater/bb: You can use ii/vortex/ii once per day as a spell-like ability.',
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>