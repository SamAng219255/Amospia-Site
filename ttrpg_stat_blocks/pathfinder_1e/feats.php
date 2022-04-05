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
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Prerequisite',
			'Description'
		],
		[
			[
				'Deconstruct Magic',
				'link' => 'feats/deconstruct_magic.php',
				'Caster level 3rd',
				'Deconstruct magic items'
			],
			[
				'Practice Advanced Alchemy',
				'link' => 'feats/practice_adv_alchemy.php',
				'1 rank in Craft (alchemy)',
				'Create advanced alchemy recipes'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>