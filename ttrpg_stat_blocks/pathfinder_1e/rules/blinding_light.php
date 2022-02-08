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
	block(
		'Blinding Light',
		'rule',
		quick_array([
			'A counterpart to supernatural darkness, blinding light is supernatural light so bright in cannot be seen through effectively. Abrupt exposure to blinding light blinds most creatures for 1 round; on subsequent rounds, they are dazzled as long as they remain in the affected area. Creatures with light sensitivity or light blindness are rendered completely blind in areas of blinding light and creatures with light blindness also remain blind for an additional 1d4 rounds after leaving an area of blinding light. Creatures with shadow vision are unable to see anything within the area of blinding light as though it were supernatural darkness to a creature without shadow vision.'
		])
	);
	require $startDir.'pageEnd.php';
?>