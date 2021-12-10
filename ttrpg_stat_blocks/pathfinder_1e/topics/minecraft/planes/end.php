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
?>
<title>The End</title>
<?php
	block(
		'The End',
		'plane',
		[
			'The End borders no other planes and can generally only be accessed via special portals though it comes close the Nether in some places and enderman can use their special teleportation to travel to and from the End. The most notable feature of the End is the central island which contains a collection of 12 obsidian pillars that extend seemingly infinitely into the darkness. In the center of these pillars, composed of seemingly indestructible stone, sits the lone, known, exit portal. Located elsewhere on this island can also be found the obsidian platform. A perfectly square, immovable and indestructible, platform of obsidian that sits on the island and acts as the arrival point for all of the ancient portals leading to the plane.',
			'The majority of the terrain in the End is composed of a strange beige stone shaped into numerous floating islands with purple chorus plants growing up from them in strange, tall, branching stalks that sound like a haunting choir when the wind blows. These plants can be harvested both for building materials, in the form a lavender "popped" chrous fruit being turned into a substance called purpur, and sustenance, in the form of strange unpopped chorus fruit whose energies momentarily cast the eater from reality before returning them elsewhere.'
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
					'bb/Magic/bb: Normal, though spells and abilities that rely on travelling to other planes automatically fail.',
				])
			],
			[
				'title' => 'Denizens',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Enderman/bb: These enigmatic humanoid aberrations dominate the plane though never seem to act with any consistent will or goal.',
					'bb/Enderdragon/bb: The guardian of the central island, this massive dragon is reborn like a phoenix, leaving behind an egg that will awaken and hatch after 100 years to continue the dragon\'s vigil. The dragon attacks all who arrive at the central island other than the enderman. It is unknown why it performs this task or where it came from.'
				])
			],
			[
				'title' => 'Divinities',
				'spaced' => true,
				'texts' => quick_array([
					'No known divinities reside in the End',
					'bb/Outsiders/bb: None',
					'bb/Petitioners/bb: None'
				])
			],
			[
				'title' => 'Infusions',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Basic/bb: You gain a +4 bonus on concentration checks when casting teleportation spells.',
					'bb/Improved/bb: You can cast ii/dimension door/ii as a spell-like ability 3 times per day except you pass outside of reality instead of travelling to a specific plane.',
					'bb/Greater/bb: You can use your ability from the Improved Planar Infusion at-will instead and as a move action. You also gain the benefits of the Dimensional Agility feat with this ability. You qualify as having the Dimensional Agility feat for the purpose of qualifying for other feats and abilities but can only use them with this ability unless you also have the Dimensional Agility feat.',
				])
			]
		]
	);
?>
<?php require $startDir.'pageEnd.php';?>