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
		'Age Resisting Draught, Lesser',// Name
		'Imbibed',// Form (Sub-Form(s))
		[],// Descriptors
		4,// Level
		'24 hours',// Duration
		'none',// Saving Throw
		[
			'The drinker ignores the physical detriments of being middle-aged. This recipe does not cause the drinker to look younger, nor does it prevent the drinker from dying of old age, but as long as the potion is in effect, the drinker ignores the –1 penalties to Strength, Dexterity, and Constitution that accrue once they become middle-aged. They retain the age-related bonuses to Intelligence, Wisdom, and Charisma while under the effects of this recipe. Additional penalties that they accrue upon becoming old or venerable apply in full.'
		] // Description
	);
	advAlchemySimpleBlock(
		'Age Resisting Draught',// Name
		'Imbibed',// Form (Sub-Form(s))
		[],// Descriptors
		6,// Level
		'24 hours',// Duration
		'none',// Saving Throw
		[
			'This recipe functions as ii/lesser age resisting draught/ii, except the drinker ignores the Strength, Dexterity, and Constitution penalties gained at middle and old age.'
		] // Description
	);
	advAlchemySimpleBlock(
		'Age Resisting Draught, Greater',// Name
		'Imbibed',// Form (Sub-Form(s))
		[],// Descriptors
		7,// Level
		'24 hours',// Duration
		'none',// Saving Throw
		[
			'This recipe functions as ii/lesser age resisting draught/ii, except the drinker ignores all Strength, Dexterity, and Constitution penalties gained from middle age, old age, and venerable age.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>