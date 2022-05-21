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
	block(
		'Feruchemical Bendalloy',
		'feruchemy',
		quick_array([
			'bb/User/bb Subsumer',
			'bb/Quadrant/bb Hybrid'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'Subsumers can store nutrition and calories in their metalminds. Separate metalminds must be used for storing food and water requirements.'
				])
			],
			[
				'title' => 'Bendalloy Increments',
				'spaced' => false,
				'texts' => quick_array([
					sTable(
						[
							'Increment',
							'Necessary Intake'
						],
						[
							[
								'(-4)',
								'+1x'
							],
							[
								'-2',
								'1.5x'
							],
							[
								'0',
								'1x'
							],
							[
								'2',
								'0.5x'
							],
							[
								'4',
								'0x'
							]
						]
					)
				])
			],
			[
				'title' => 'Feruchemical Bendalloy Savantism Effects',
				'spaced' => false,
				'texts' => quick_array([
					'bb/Special/bb Feruchemical bendalloy savantism does not apply any benefits or penalties. However, consistently receiving nutrition entirely via metalmind will cause the subsumer\'s stomach to shrink as though they were starving. Eventually causing them to be largely unable to eat.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>