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
?>
<script>
	initialSort=true;
	profNum={'basic melee':0,'advanced melee':1,'small arms':2,'longarms':3,'heavy':3,'sniper':3,'grenade':3,'solarian':3,'special':3,'':Infinity};
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 16 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) +
			8 * comp(profNum[a.children[4].innerText.toLowerCase()],profNum[b.children[4].innerText.toLowerCase()]) +
			4 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) +
			2 * comp(a.children[3].innerText.toLowerCase(),b.children[3].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Category',
			'Level',
			'Price',
			'Prof.',
			'Damage',
			'Range',
			'Critical',
			'Capacity',
			'Usage',
			'Bulk',
			'Special' 
		],
		[
			[
				'Cobalt Sphere, Basic',
				'link' => 'items/cobalt_spheres.php#section-Cobalt-Sphere,-Basic',
				'—',
				'2',
				'656',
				'Special',
				'1d6 B',
				'30 ft.',
				'—',
				'—',
				'—',
				'—',
				'<a href="weapon_properties.php#section-Mystic" target="_blank">mystic</a>' 
			],
			[
				'Cobalt Sphere, Blue',
				'link' => 'items/cobalt_spheres.php#section-Cobalt-Sphere,-Blue',
				'—',
				'5',
				'2,600',
				'Special',
				'1d8 B',
				'40 ft.',
				'—',
				'—',
				'—',
				'—',
				'<a href="weapon_properties.php#section-Mystic" target="_blank">mystic</a>' 
			],
			[
				'Cobalt Sphere, Meteoric',
				'link' => 'items/cobalt_spheres.php#section-Cobalt-Sphere,-Meteoric',
				'—',
				'8',
				'8,310',
				'Special',
				'2d8 B',
				'60 ft.',
				'—',
				'—',
				'—',
				'—',
				'<a href="weapon_properties.php#section-Mystic" target="_blank">mystic</a>' 
			],
			[
				'Cobalt Sphere, Draconic',
				'link' => 'items/cobalt_spheres.php#section-Cobalt-Sphere,-Draconic',
				'—',
				'11',
				'25,400',
				'Special',
				'4d6 B',
				'70 ft.',
				'—',
				'—',
				'—',
				'—',
				'<a href="weapon_properties.php#section-Mystic" target="_blank">mystic</a>' 
			],
			[
				'Cobalt Sphere, Stellar',
				'link' => 'items/cobalt_spheres.php#section-Cobalt-Sphere,-Stellar',
				'—',
				'14',
				'77,300',
				'Special',
				'7d6 B',
				'90 ft.',
				'—',
				'—',
				'—',
				'—',
				'<a href="weapon_properties.php#section-Mystic" target="_blank">mystic</a>' 
			],
			[
				'Cobalt Sphere, Interstellar',
				'link' => 'items/cobalt_spheres.php#section-Cobalt-Sphere,-Interstellar',
				'—',
				'17',
				'236,400',
				'Special',
				'8d8 B',
				'100 ft.',
				'—',
				'—',
				'—',
				'—',
				'<a href="weapon_properties.php#section-Mystic" target="_blank">mystic</a>' 
			],
			[
				'Cobalt Sphere, Neutronium Core',
				'link' => 'items/cobalt_spheres.php#section-Cobalt-Sphere,-Neutronium-Core',
				'—',
				'20',
				'727,200',
				'Special',
				'11d8 B',
				'120 ft.',
				'—',
				'—',
				'—',
				'—',
				'<a href="weapon_properties.php#section-Mystic" target="_blank">mystic</a>' 
			]
		]
	);
	require $startDir.'pageEnd.php';
?>