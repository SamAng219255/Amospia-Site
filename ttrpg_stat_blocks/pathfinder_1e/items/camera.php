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
		'Camera',
		'item',
		quick_array([
			'bb/Price/bb (Camera) 3,000 gp, (Darkvision Lens) 300 gp; bb/Weight/bb (Camera) 3 lbs., (Darkvision Lens) 1 lbs.'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'This wooden box contains a small shutter mechanism to limit the exposure of an inserted image capture plate. While the shutter is opened, a simple set of lenses at the front of the camera project the view in front of the camera onto a slotted image capture plate.',
					'An image capture plate can be slotted into or out of the camera as a full-round action. If a blank image capture plate is slotted into the camera the shutter can be opened to capture an image. If the subject of the image is in bright light or normal light the image can be captured as a standard action, or about 3-1/2 seconds. In dim light the image can be captured as a full round action, or about 6 seconds. The image cannot be captured in darkness. Despite the proces of capturing an image requiring a standard action in bright light, the duration for which the shutter is open is only a move action, or about 2-1/2 seconds. Any motion while the shutter is open will result as a blur in the resulting image. While in bright or normal light if the camera is within 20 feet, 1 dose of flash powder can be expended of the subject to reduce the necessary time for the shutter to remain open, from 3-1/2 seconds (a standard action) to 2-1/2 seconds (a move action), and from 2-1/2 seconds (a move action) to 1-1/2 seconds (a swift action). If the camera is instead within 10 feet, the time is reduced twice as much, from 3-1/2 seconds (a standard action) to 1-1/2 seconds (a swift action), and from 2-1/2 seconds (a move action) to a half second (an instantaneous effect). This can often result in less blurring in the resulting image. It can also be used in dim light to reduce the time to about 3-1/2 seconds, reducing the necessary action from a full-round action to standard action.',
					'Image capture plates with a captured image are captured as negatives, with the colors inverted, and will completely darken if revealed to light. In order to use the resulting images, a series of three DC 20 Craft (alchemy), Craft (film), or Profession (dark room technician) checks must be made. First to alchemically stabilize the current image so that it will not fade in light, then to project the negatives onto the final surface, and finally to similarly stabilize the images on the final surface. Additional checks of the same types can be made during this time to make modifications to these images such as creating light and dark spots or superimposing one image onto another. Once a negtive is stabilized it can be used again and again to create additional copies of the image.',
					'Purchasing a service to have your image capture plates stabilized costs 10 gp (black and white) or 40 gp (three color) while performing the task yourself costs 3 gp (black and white) or 12 gp (three color) in addition to making the check. Purchasing a service to have finalized images produced from your negatives costs 15 gp (black and white) or 60 gp (three color) while performing the task yourself costs 5 gp (black and white) or 20 gp (three color) in addition to making the checks to properly project, potentially edit, and stabilize the image.',
					'Single use darkvision lenses can be made or purchased that slot into the camera\'s lenses as a standard action. The next time the shutter is opened to capture an image, the active alchemical components of the lens are activated by a mechanism in the camera. The lens is able to use mechanism similar to the eyes of a creature with darkvision to pick up contrast in the image, even in the dark. The resulting image does not capture any color, even if a color image capture plate is used. The image also requires exactly one standard action to capture the image, however it is able to capture the image so long as the subject is not obscured by supernatural darkness.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>