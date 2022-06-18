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
?>
<a href="rules.php">View all rules.</a>
<?php
	blockList([
		'name' => 'Forest of Shadows',
		'children' => [
			[
				'name' => 'Exploration',
				'children' => [
					[
						'name' => 'Vision and Light',
						'children' => [
							[
								'name' => 'Blinding Light',
								'link' => 'rules/blinding_light.php'
							]
						]
					]
				]
			],
			[
				'name' => 'Magic',
				'children' => [
					[
						'name' => 'Magic Basics',
						'children' => [
							[
								'name' => 'Spell Descriptions',
								'children' => [
									[
										'name' => 'Descriptor',
										'children' => [
											[
												'name' => 'Destruction',
												'link' => 'rules/destruction_descriptor.php'
											]
										]
									]
								]
							]
						]
					]
				]
			]
		]
	]);
	require $startDir.'pageEnd.php';
?>