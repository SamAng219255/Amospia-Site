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
	magicItemBlockAuto(
		'Vespran Disguise Mask',
		'Transmutation',
		3,
		'head',
		18000,
		'—',
		[
			'On command, this mask places a disguise on the wearer, altering their appearance to that of a different humanoid creature of the same size. While disguised, the mask is merged into their form until another command is given to dismiss the effect. The exact form taken is determined when the mask is being created and is exactly the same every time. This form, however, does not fully overwrite the subject\'s features. This is a polymorph effect, but the wearer can, as a standard action, cause a specific feature of their base form to protrude through their disguise. Only one feature can protrude through the disguise at a time; if they cause another feature to protrude through their disguise, the previous feature is once again disguised. They can also hide the protruding feature as a standard action. Examples include either the vespran\'s stinger or wings.',
			'As this is a polymorph effect, the wearer receives a +10 bonus to Disguise checks to pretend to be a member of the race they took the form of.'
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, ii/alter self/ii; bb/Cost/bb 9,000 gp'
	);
	require $startDir.'pageEnd.php';
?>