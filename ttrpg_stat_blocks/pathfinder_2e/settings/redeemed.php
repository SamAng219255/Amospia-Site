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
	block(
		'Redeemed',
		'setting',
		quick_array([
			'The Thyllkthoron are a race of fiends that have become native to the material plane. They live in a series of villages in a land they call Enosria and are often mistaken for tieflings, mortals with fiendish blood.'
		]),
		false,
		[
			[
				'title' => 'History',
				'spaced' => false,
				'texts' => quick_array([
					'Many centuries ago, the ancestors of the Redeemed were succubi and incubi exiled to the material plane following a failed coup of a demon lord and the subsequent death of their queen. After some time their essence was slowly modified by the material plane eventually allowing them to birth mortal children. These children were less inclined to the parents evil ways and after a few generations they overthrew them. In time they became more and more diverse in their alignments though their appearance has changed little and they have preserved some portion of their gifts. Redeemed have made themselves many demonic enemies in their history as they have fought to diffrentiate themselves from their demonic ancestors.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>