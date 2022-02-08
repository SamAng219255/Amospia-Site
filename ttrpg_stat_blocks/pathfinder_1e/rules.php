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
<a href="rules_settings.php">View rules by setting.</a>
<?php
	blockList([
		'name' => 'Rules',
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
			]
		]
	]);
	require $startDir.'pageEnd.php';
?>