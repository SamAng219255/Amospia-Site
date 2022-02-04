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
<script>
	initialSort=true;
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 2 * comp(a.children[3].innerText.toLowerCase(),b.children[3].innerText.toLowerCase()) + 
			comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Rarity',
			'Traits',
			'Level',
			'Prerequisites',
			'Benefit'
		],
		[
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'1',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'1',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'1',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'1',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'1',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'1',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'5',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'5',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'5',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'5',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'9',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'9',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'13',
				'',
				'TODO'
			],
			[
				'<a href="ettinkin_feat_display.php#block-TODO">TODO</a>',
				'Common',
				'gardinian',
				'13',
				'',
				'TODO'
			],
		]
	);
	require $startDir.'pageEnd.php';
?>