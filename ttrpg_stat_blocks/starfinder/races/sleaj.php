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
	raceSFBlock(
		"Sleaj", // $name=''
		[
			""
		], // $desc=[]
		[
			'con' => +2
		], // $stats=[]
		6, // $hp=0
		"Sleaj are Medium oozes with the shapechanger subtype.", // $size_type=''
		[
			"Amorphous" => "Sleaj possess the amorphous property and don't take multiplied damage from critical hits though they are still affected by critical hit effects as normal.",
			"Change Shape" => "As a standard action, a sleaj can assume the appearance of a Small, Medium, or Large humanoid creature. They can take a form they have taken before but they cannot take the form of a specific creature. They gain a +10 bonus to Disguise checks to appear as that creature. The sleaj can remain in this form indefinitely. This feature can alter the tactile and visual properties of the sleaj but cannot alter their scent and are limited in how much they change how they sound.",
			"Compression" => "Sleaj possess the compression ability and can move through an area as small as one-quarter of their space without squeezing or one-eighth their space when squeezing.",
			"Senses" => "Sleaj have no eyes and gain the sightless universal creature rule. Sleaj can perceive their environment using blindsight (vibration) with a range of 60 feet. This sense can propagate through most mediums and they can sense vibrations through most surfaces and bodies of water. Vibrations through air or spongy surfaces are harder as the compressiblity dampens the vibrations and they can only detect creaures up to half as far away. Sleaj can perceive creatures and objects emitting vibrations are clearly as though they could see them when they are within range and can sense the shape of the terrain by the way that vibrations propagate through it. Creatures standing completely still can potentially hide their presence though breathing and heartbeats still produce some vibrations and their shape can be revealed by other vibrations passing through them, making it difficult to be completely hidden."
		]  // $traits=[]
	);
	blockSF(
		"About the Sleaj",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Sleaj are a race of carnivorous oozes who are skilled at changing their shape and coloration to mimic other species. In nature this skill was used to hide from predators and prey alike as well as to actively entice or scare them away, making them excellent ambush predators. Despite this, modern sleaj have lost a degree of their ability, with most only familiar with taking humanoid shapes. Sleaj natively form a shape like a drop of water on a surface. When not changing their coloration, a sleaj's surface is an iridescent white.",
					"Sleaj reproduce through mitosis. The two halves initially appear to be exact copies though, over time, one of the two will differentiate and become a unique individual while the other will maintain their original identity."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>