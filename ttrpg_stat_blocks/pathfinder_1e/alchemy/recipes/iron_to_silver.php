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
	advAlchemyCreationBlock(
		'Transmute Iron Into Silver',// Name
		'Transmutation',// Sub-Form(s)
		[],// Descriptors
		4,// Level
		[
			'With this recipe you are close to finally accomplishing one of the ultimate goals of alchemy by converting a base metal into a precious one. All iron used as a reagent in this recipe is converted into silver worth 5 gp per pound.',
			'This recipe must be entirely performed beneath a full moon.'
		], // Description
		[
			'up to 1,000 pounds of iron (100 gp)'
		],// Exceptional Reagents
		false// Exceptional Catalysts
	);
	require $startDir.'pageEnd.php';
?>