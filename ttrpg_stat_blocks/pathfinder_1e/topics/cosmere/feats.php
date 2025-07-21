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
				'Craft Hemalurgic Construct',
				'link' => 'feats/hemalurgic_constructs.php',
				'At least 5 ranks in Knowledge (hemalurgy)',
				'You gain the knowledge of how to use hemalurgic linchpins and how to create hemalurgic constructs.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>