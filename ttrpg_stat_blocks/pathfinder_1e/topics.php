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
<title>Topics</title>
<?php 
	block(
		'Topics',
		'info',
		quick_array(
			'More than once I\'ve found myself designing stat blocks for things from other games, books, or other media but simply throwing these stat blocks in with the rest feels awfully odd. Creepers from Minecraft don\'t feel they should be next to Knights Radiant from the Stormlight Archives and your standard ghouls. For that purpose I\'ve created this section of the site to section off the odd categories that don\'t quite belong with the others.
			Each section will have a home that gives a brief synopsis of the source, what assumptions and conversions should be made, and what has been translated and added to help understand the content.
			Similar sectioned off portions will be created in the other systems when needed.'
		)
	);
	require $startDir.'pageEnd.php';
?>