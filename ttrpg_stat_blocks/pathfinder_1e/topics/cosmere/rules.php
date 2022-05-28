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
	blockList([
		'name' => 'Rules',
		'children' => [
			[
				'name' => 'Basic',
				'children' => [
					[
						'name' => 'Multiplicative Effects',
						'link' => 'rules/general.php#block-Multiplicative-Effects'
					]
				]
			],
			[
				'name' => 'Exploration',
				'children' => [
					[
						'name' => 'Movement',
						'children' => [
							[
								'name' => 'Gravitic Flight',
								'link' => 'rules/general.php#block-Gravitic-Flight'
							]
						]
					],
					[
						'name' => 'Vision and Light',
						'children' => [
							[
								'name' => 'Metal Sight',
								'link' => 'rules/general.php#block-Metal-Sight'
							]
						]
					]
				]
			],
			[
				'name' => 'Magic',
				'children' => [
					[
						'name' => 'Aluminum',
						'link' => 'rules/general.php#block-Aluminum'
					],
					[
						'name' => 'Future Seeing',
						'link' => 'rules/general.php#block-Future-Seeing'
					],
					[
						'name' => 'Healing',
						'link' => 'rules/general.php#block-Healing'
					],
					[
						'name' => 'Savantism',
						'link' => 'rules/general.php#block-Savantism'
					],
					[
						'name' => 'The Ten Essences',
						'link' => 'rules/ten_essences.php'
					]
				]
			],
			[
				'name' => 'Combat',
				'children' => [
					[
						'name' => 'Conditions',
						'children' => [
							[
								'name' => 'Intangible',
								'link' => 'rules/general.php#block-Intangible'
							]
						]
					]
				]
			],
			[
				'name' => 'Misc',
				'children' => [
					[
						'name' => 'Soulwebs',
						'link' => 'rules/general.php#block-Soulwebs'
					]
				]
			]
		]
	]);
	require $startDir.'pageEnd.php';
?>