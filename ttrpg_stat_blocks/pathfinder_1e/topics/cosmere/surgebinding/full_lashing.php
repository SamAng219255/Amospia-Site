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
		'Full Lashing', // name
		'Adhesion', // surge
		'5 feet', // range
		'one object or one square up to 10-ft.', // target=false
		false, // effect=false
		false, // area=false
		10, // cost
		'1 minute', // interval
		true, // dismiss
		[
			'You infuse a surface with investiture, causing it to glow faintly. Any object or creature that touches the surface is instantly and tightly adhered, becoming entangled and anchored to the surface.',
			'You can also infuse an object or a part of the object, making any object or creature which touches it be instantly stuck to it and unable to let go or remove it.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>