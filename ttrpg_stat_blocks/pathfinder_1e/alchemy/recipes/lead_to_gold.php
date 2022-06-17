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
		'Transmute Lead Into Gold',// Name
		'Transmutation',// Sub-Form(s)
		[],// Descriptors
		9,// Level
		[
			'With this recipe you have finally accomplished one of the ultimate goals of alchemy: converting lead into gold. All lead used as a reagent in this recipe is converted into gold worth 50 gp per pound.',
			'The ruby used in this recipe must have received at least 8 hours of sunlight each day for the past 30 days. If the sun is obscured by only clouds or fog the ruby is still counted as being in sunlight but any other obstruction will prevent that time from counting. After being used in this recipe, the amount of sunlight received is reset.'
		], // Description
		[
			'up to 1,000 pounds of lead (3,300 gp)'
		],// Exceptional Reagents
		[
			'an alchemically created perfect ruby worth 75,000 gp'
		]// Exceptional Catalysts
	);
	require $startDir.'pageEnd.php';
?>