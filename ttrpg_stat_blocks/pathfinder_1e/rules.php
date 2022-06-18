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
			],
			[
				'name' => 'Misc',
				'children' => [
					[
						'name' => 'Hope Checks',
						'link' => 'rules/hope_checks.php'
					]
				]
			],
			[
				'name' => 'Optional Rule Systems',
				'children' => [
					[
						'name' => 'Unbound Magic',
						'link' => 'rules/unbound_magic.php'
					],
					[
						'name' => 'Dynamic Skill Abilities',
						'link' => 'rules/dynamic_skills.php'
					]
				]
			]
		]
	]);
	require $startDir.'pageEnd.php';
?>