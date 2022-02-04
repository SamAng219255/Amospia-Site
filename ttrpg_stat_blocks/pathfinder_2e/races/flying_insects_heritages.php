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
	block2(
		'Muuyine Heritages',
		'',
		false,
		[],
		[
			quick_array('You select a heritage at 1st level to reflect abilities passed down to you from your ancestors or common among those of your ancestry in the environment where you were born or grew up. You have only one heritage and can’t change it later. A heritage is not the same as a culture or ethnicity, though some cultures or ethnicities might have more or fewer members from a particular heritage.')
		],
		false,
		[
			[
				'title' => 'TODO',
				'spaced' => false,
				'texts' => quick_array([
					'Desc',
					'TODO',
					'/tt/1st Ed. Hybrid Description:',
					'TODO'
				])
			],
			[
				'title' => 'TODO',
				'spaced' => false,
				'texts' => quick_array([
					'Desc',
					'TODO',
					'/tt/1st Ed. Hybrid Description:',
					'TODO'
				])
			],
			[
				'title' => 'TODO',
				'spaced' => false,
				'texts' => quick_array([
					'Desc',
					'TODO',
					'/tt/1st Ed. Hybrid Description:',
					'TODO'
				])
			],
			[
				'title' => 'TODO',
				'spaced' => false,
				'texts' => quick_array([
					'Desc',
					'TODO',
					'/tt/1st Ed. Hybrid Description:',
					'TODO'
				])
			],
			[
				'title' => 'TODO',
				'spaced' => false,
				'texts' => quick_array([
					'Desc',
					'TODO',
					'/tt/1st Ed. Hybrid Description:',
					'TODO'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>