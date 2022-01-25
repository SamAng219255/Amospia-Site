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
	categoryNum={'—':-1,'Unarmed':0,'Simple':1,'Martial':2,'Advanced':3,'':Infinity};
	typeNum={'—':-1,'Melee':0,'Ranged':1,'':Infinity};
	rarityNum={'—':-1,'Common':0,'Uncommon':1,'Rare':2,'Unique':3,'':Infinity};
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 32 * comp(categoryNum[a.children[2].innerText.toLowerCase()],categoryNum[b.children[2].innerText.toLowerCase()]) +
			16 * comp(typeNum[a.children[1].innerText.toLowerCase()],typeNum[b.children[1].innerText.toLowerCase()]) +
			8 * comp(a.children[4].innerText.toLowerCase(),b.children[4].innerText.toLowerCase()) +
			4 * comp(rarityNum[a.children[3].innerText.toLowerCase()],rarityNum[b.children[3].innerText.toLowerCase()]) +
			2 * comp(a.children[5].innerText.toLowerCase(),b.children[5].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Type',
			'Category',
			'Rarity',
			'Level',
			'Price',
			'Damage',
			'Hands',
			'Range',
			'Reload',
			'Bulk',
			'Group' 
		],
		[
			[
				'Cobalt Spheres',
				'link' => 'equipment/cobalt_spheres.php',
				'Ranged',
				'Simple',
				'Uncommon',
				'3',
				'55 gp',
				'1d6 B',
				'1',
				'60 ft.',
				'0',
				'—',
				'—' 
			]
		]
	);
	require $startDir.'pageEnd.php';
?>