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
		"Xempehl", // $name=''
		[
			""
		], // $desc=[]
		[
			'con' => +2,
			'wis' => +2,
			'int' => -2
		], // $stats=[]
		4, // $hp=0
		"Xempehls are Medium plants though, for effects targeting creatures by type, they count as both plants and as fey (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Defensive Aspect" => [
				"When a xempehl takes the total defense action, they gain a +6 bonus to their Armor Class instead of the normal +4 bonus, and they also gain the unflankable universal creature rule until the start of their next turn."
			],
			"Mighty Grip" => [
				"Xempehls gain a +2 species bonus to grapple combat maneuvers and Athletics checks to climb."
			],
			"Senses" => [
				"Xempehls have low-light vision and sense through (vision [wood and plants only]).",
				"Xempehls can see in dim light as if it were normal light and they can see things through and wood or plants in their way."
			],
			"Xempehl Movement" => "Xempehls have both a base speed and a climb speed of 20 feet."
		]  // $traits=[]
	);
	blockSF(
		"About the Xempehl",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Xempehls are plant creatures and have a general shape somewhat resembling sloths though they possess a second pair of arms above the first that are used for manipulating objects. Their bodies are covered in a woody layer, like an exoskeleton, and they are segmented in a way that resembles arthropods. They use their four back limbs for locomotion, hanging from and pulling themselves along branches when climbing and then walking low to the ground when not climbing. They then have two additional limbs next to the front of the back two and between them and their head which are used exclusively for manipulating objects.",
					"Xempehls generally move slowly but can move quickly when needed though this often leaves them quite tired."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>