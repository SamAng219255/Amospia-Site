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
	advAlchemySimpleBlock(
		'Tracking Dust',// Name
		'Substance',// Form
		[],// Descriptors
		1,// Level
		'1 day per alchemy level',// Duration
		'none; see text',// Saving Throw
		'This powder is generally stored in a tightly sealed container which is opened and its contents thrown onto an adjacent creature, as a melee touch attack, when used. Doing so is a standard action that does not provoke attacks of opportunity. If the attack lands, the target takes no damage but is indelibly marked by the powder, though the bulk of the substance becomes completely transparent when thinned out and spread across an object. Any creature marked by the powder cannot remove the powder, though it falls off and becomes inactive once the duration expires. Additionally, such an individual leaves small amounts of the powder behind on objects they interact with.
		Individuals with a ii/tracking light/ii receive a +5 bonus on Survival checks to track individuals marked by ii/tracking dust/ii, can make a DC 20 Perception check to identify if they interacted with a specific object, and receive a +5 bonus to Perception checks made to notice them if they are using Stealth or recognize them if they are using Disguise.' // Description
	);
	advAlchemySimpleBlock(
		'Tracking Light',// Name
		'Activation',// Form
		[],// Descriptors
		0,// Level
		'8 hours',// Duration
		'none; see text',// Saving Throw
		'This clear flexible tube contains a clear viscous liquid in which floats a thin glass tube with a cloudy watery substance. When the flexible tube is sufficiently bent, the glass vial shatters allowing the two compounds to mix. This mixture emits what appears to be a faint green light but, in fact, its main purpose is to emit an unusual invisible spectrum of light. When this light is shown on substances such as ii/tracking dust/ii the dust glows a bright green making the othersie undetectable powder quite visible indeed.
		Individuals with a ii/tracking light/ii receive a +5 bonus on Survival checks to track individuals marked by ii/tracking dust/ii, can make a DC 20 Perception check to identify if they interacted with a specific object, and receive a +5 bonus to Perception checks made to notice them if they are using Stealth or recognize them if they are using Disguise.' // Description
	);
	require $startDir.'pageEnd.php';
?>