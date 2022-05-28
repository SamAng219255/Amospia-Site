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
	surgeBlock(
		'Slicking', // name
		'Abrasion', // surge
		'touch or personal', // range
		'one object, self, or one or more 10-ft. squares; see text', // target=false
		false, // effect=false
		false, // area=false
		5, // cost
		'1 minute', // interval
		true, // dismiss
		[
			'Touched surface loses all friction. This generally functions as a ii/grease/ii spell except as specified below.',
			'The surgebinder may choose to add an additional 5 to the investiture cost to add an additional 10-ft square to the area affected that must form a continuous area. This can be done multiple times to a maximum of 1 per 2 levels over 2nd level.',
			'The surgebinder can also choose to apply the ability to themselves, granting them a bonus similar to using it on their armor or clothing except the bonus increases to +15.',
			'Any surgebinders with this ability can also choose to be unaffected by this ability. Additionally, any surgebinders with this ability can make a DC 20 acrobatics check to move at twice their base movement speed across an area affected by this ability. While the surgebinder who used this ability is doing so, that has at least 2 squares as part of this ability, and they are about to move outside of the area, they can move any square they are not currently occupying to the area they are about to move into as a free action so long as the entire area is still continuous after the move.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>