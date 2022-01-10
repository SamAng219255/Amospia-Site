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
			'Cost',
			'Weight'
		],
		[
			[
				'Camera',
				'link' => 'items/camera.php',
				'3,000 gp',
				'3 lbs.'
			],
			[
				'Darkvision Lens',
				'link' => 'items/camera.php',
				'300 gp',
				'1 lbs.'
			],
			[
				'Blank Image Capture Plate, Black and White',
				'link' => 'items/image_plate.php',
				'5 gp',
				'—'
			],
			[
				'Blank Image Capture Plate, Three Color',
				'link' => 'items/image_plate.php',
				'20 gp',
				'—'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>