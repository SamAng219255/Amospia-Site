<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	block(
		'Blank Image Capture Plate',
		'item',
		quick_array([
			'bb/Price/bb (Black and White) 5 gp, (Three Color) 20 gp; bb/Weight/bb —'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This inch wide pane of glass is treated with special chemicals that are sensitive to light and can be loaded into a camera to capture an image. Black and white plates only respond to brightness and will produce a gray-scale image based on how bright different parts of the image are. Three color plates use three different pigments that seperately filter out red, green, and blue light producing a full color image.',
					'Image capture plates with a captured image are captured as negatives, with the colors inverted, and will completely darken if revealed to light. In order to use the resulting images, a series of three DC 20 Craft (alchemy), Craft (film), or Profession (dark room technician) checks must be made. First to alchemically stabilize the current image so that it will not fade in light, then to project the negatives onto the final surface, and finally to similarly stabilize the images on the final surface. Additional checks of the same types can be made during this time to make modifications to these images such as creating light and dark spots or superimposing one image onto another. Once a negtive is stabilized it can be used again and again to create additional copies of the image.',
					'Purchasing a service to have your image capture plates stabilized costs 10 gp (black and white) or 40 gp (three color) while performing the task yourself costs 3 gp (black and white) or 12 gp (three color) in addition to making the check. Purchasing a service to have finalized images produced from your negatives costs 15 gp (black and white) or 60 gp (three color) while performing the task yourself costs 5 gp (black and white) or 20 gp (three color) in addition to making the checks to properly project, potentially edit, and stabilize the image.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>