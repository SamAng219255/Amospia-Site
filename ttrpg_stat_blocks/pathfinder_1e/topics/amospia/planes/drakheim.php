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
		'Drakheim',
		'plane',
		[
			'One of the planes recently contacted by the Overworld is Drakheim, literally Home of the Dragons. It was here that many thousands of years ago, but not as many as the first three races, Dragons first evolved and gained intelligence. On this plane there are now many species of dragon, drakkonoid, and lizard races, both of animal and sentient intelligence. This plane is unique as the only plane to naturally yield sentient life, all other sentient life originated by way of divine or profane intervention. More ancient than most modern races and located deeper into the void planes, the races of Drakheim have interacted with the planes for many thousands of years and there are several prevalent demonic and angelic races that originate there, most known to the Overworld being the race of End Dragons. It is also thought by some to be the true origin of the Lizardmen/Lizardfolk races of the Overworld and from the home plane of the mysterious Super Blocker civilization. In fact the more intelligent races of Drakheim claim that the native Lizardfolk race has spread to more planes than they care to keep track of.'
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
					'bb/Essence/bb: Mixed with Fire or Ice Dominant regions',
					'bb/Alignment/bb: Mildly Neutral-Aligned',
					'bb/Magic/bb: Normal, though fire spells are enhanced and cold spells are impeded in fire dominant regions and cold spells are enhanced while fire spells are impeded in ice dominant regions',
				])
			],
			[
				'title' => 'Denizens',
				'spaced' => true,
				'texts' => quick_array([
					'bb/True Dragons/bb: Of all the races of Drakheim none can compare to the majesty and might of the True Dragons, a race of sentient dragons from Drakheim and the oldest intelligent race from that plane.',
					'As with many dragon and drakkonoid species, True Dragons possess a so-called "type." This "type" is the culmination of its morphological and mental traits and primarily the color of its scales and type of magical breath weapon. In the case of a True Dragon, the type is a primarily an ethnicity representing common collections of genes but is also related to traits that tend to passed together such as a tendency for fire breathing True Dragons to have longer horns. The latter in combination with nature of dragon genetics meaning that while the offspring of two True Dragons of different types is a mixture of their traits, they will often still largely resemble one of two parent types and be classified as such.',
					'True Dragons share the ability with many other races of their home plane to take a humanoid form. They can take the form of a member of any humanoid race that they have seen so long as it is between 2 and 18 feet in height and that they can remember what it looks like. When they do so, they retain a certain facial and body structures that, while it is recognizable between all of their forms, fits naturally with whatever form they take. (i.e. if they are fat with a scar over their right eye they will be a fat version of whichever race with a scar over the right eye and you could still recognize their face despite their race) When they take a humanoid form they acquire most of its physical traits but not usually any its magical ones.',
					'While there are numerous settlements of different sizes of True Dragons both in Drakheim and the other planes, the majority of True Dragons live mostly isolated lives only coming into contact with other individuals of their race an average of once a month.',
					'bb/Dragons/bb: While their exists only one race of True Dragons, many related species of dragons exist with a wide variety of differences. Some of these species are less intelligent, some being little more intelligent than dogs, and some are considered to belong to different categories by some such as wyverns, drakes, ampitheres, wyrms, or many other names. Most dragons retain the so-called types possesed by True Dragons and many intelligent ones possess the ability to take the forms of humanoids.',
					'bb/Drakkonoids/bb: Even more removed from True Dragons, drakkonoids are races species that possess many draconic features such as horns, wings, spines, tails, and potentially even breath weapons possessed by dragon species. Drakkonoids differ in that they generally remain grounded and hold themselves more upright, as well being, on average, smaller.',
					'bb/Lizardfolk/Lizardmen/bb: Upright humanoids with scaly skin that are often classified as demi-humans.',
					'bb/Other Saurid and Ophidian Races/bb: Many other scaled races exist in Drakheim that resemble either lizards or snakes.',
				])
			],
			[
				'title' => 'Divinities',
				'spaced' => true,
				'texts' => quick_array([
					'No known divinities reside in Drakheim',
					'bb/Outsiders/bb: None',
					'bb/Petitioners/bb: None'
				])
			],
			[
				'title' => 'Infusions',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Basic/bb: ',
					'bb/Improved/bb: ',
					'bb/Greater/bb: ',
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>