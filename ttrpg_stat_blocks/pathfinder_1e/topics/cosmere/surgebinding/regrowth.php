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
	surgeBlock(
		'Regrowth', // name
		'Progression', // surge
		'Edgedancers, Truthwatchers', // access
		'touch', // range
		'one creature', // target=false
		false, // effect=false
		false, // area=false
		10, // cost
		'1 minute', // interval
		false, // dismiss
		[
			'Touched creature gains fast healing 5. If the radiant surgebinder has obtained their next ideal, the creature instead gains regeneration 5 except that it does not prevent the creature from dying. It takes 2d10 rounds to regrow severed body members using regeneration, though, like all invested healing, injuries which have been fully internalized cannot be healed. The surgebinder must remain in physical contact with the target for the entire duration or else the effect ends. The cost may be increased to 25 to double the rate of healing.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>