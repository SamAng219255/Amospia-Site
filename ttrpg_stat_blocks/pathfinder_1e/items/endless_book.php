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
<title>Goodberry Sprig</title>
<?php
	magicItemBlockAuto(
		'Book of Endless Pages',
		'Conjuration',
		1,
		'none',
		1500,
		5,
		'This book, which is suitable for use as a spell book, contains as many pages as you can fill. The book begins with 100 pages of parchment but if the last page is filled, flipping it over reveals another. Any creature opening or flipping multiple the pages of this book instantly open or turn the page to one they are looking for so long as they know some piece of identifying information on the page such as the unique subject matter, spell it contains, or simply page number. Pages removed from this book crumble to dust and disappear.',
		false,
		'bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb 750 gp'
	);
	require $startDir.'pageEnd.php';
?>