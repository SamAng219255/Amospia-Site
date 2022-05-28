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
		'Type IV BioChromatic Entities',
		'info',
		quick_array([
			'Creating a Type IV entity requires having at least the ninth heightening. Type IV BioChromatic entities are sentient objects made by Awakening inorganic materials like metal and stone.',
			'If an inorganic object is awakened using at least 1,000 Breaths, it becomes an intelligent item with a special purpose matching the command that was used to create it. If it is a weapon or armor, it acquires enhancement bonuses and special qualities themed to its command to increase its equivalent enhancement bonus to at least +8. More breaths will increase the power of the intelligent item and the strength of the enhancements gained.',
			'Type IV entities exist across all three realms. All Type IV entities are treated as having the ii/ghost touch/ii property and Type IV entities which are weapons ignore an object\'s hardness and DR.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>