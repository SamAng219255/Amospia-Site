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
?>
<script>
	initialSort=true;
	initialSortFunc=function(a,b) {
		return 4 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) +
			2 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Cost',
			'CL',
			'Prof.',
			'Hands',
			'Dmg (S)',
			'Dmg (M)',
			'Critical',
			'Range',
			'Weight',
			'Type',
			'Special'
		],
		[
			[
				'Meteor Sling',
				'link' => 'items/meteor_sling.php',
				'30,000 gp',
				'6th',
				'Simple',
				'Ranged',
				'2d3+1d6 F',
				'2d4+1d6 F',
				'19-20/x2',
				'80 ft.',
				'—',
				'P or B',
				'—'
			],
			[
				'Comet Sling',
				'link' => 'items/comet_sling.php',
				'30,000 gp',
				'6th',
				'Simple',
				'Ranged',
				'2d3+1d6 C',
				'2d4+1d6 C',
				'19-20/x2',
				'80 ft.',
				'—',
				'P or B',
				'—'
			],
			[
				'Cobalt Sphere (master)',
				'link' => 'items/cobalt_spheres.php',
				'7,200 gp',
				'7th',
				'Exotic',
				'Ranged',
				'1d4',
				'1d6',
				'x2',
				'varies',
				'—',
				'B',
				'—'
			],
			[
				'Cobalt Sphere (trailing)',
				'link' => 'items/cobalt_spheres.php',
				'288 gp',
				'7th',
				'Exotic',
				'Ranged',
				'1d4',
				'1d6',
				'x2',
				'varies',
				'—',
				'B',
				'—'
			],
			[
				'Bow of the Hopeful Soul',
				'link' => 'items/hope_bow.php',
				'88,000 gp',
				'15th',
				'Martial',
				'Ranged',
				'1d6',
				'1d8',
				'x3',
				'100 ft.',
				'2 lbs.',
				'P',
				'—'
			],
			[
				'Sword of Holy Light',
				'link' => 'items/light_sword.php',
				'204,000 gp',
				'16th',
				'Martial',
				'Two',
				'1d10',
				'2d6',
				'19-20/x2',
				'—',
				'4 lbs.',
				'Pos.',
				'+2d6 vs evil'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>