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
		'Adhesive Solvent',// Name
		false,// Sub-Form(s)
		[],// Descriptors
		1,// Level
		[
			'This recipe creates a single dose of so-called ii/ li/https://www.aonprd.com/MagicWondrousDisplay.aspx?FinalName=Universal%20Solvent|universal solvent/li /ii which has the unique property of being able to dissolve ii/sovereign glue/ii, tanglefoot bags, and all other adhesives. Applying the solvent is a standard action.'
		], // Description
		false,// Exceptional Reagents
		false// Exceptional Catalysts
	);
	require $startDir.'pageEnd.php';
?>