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
		'Elsecalling', // name
		'Transportation', // surge
		'Elsecallers, Willshapers', // access
		'Personal', // range
		'self, see text', // target=false
		false, // effect=false
		false, // area=false
		'20 or 40, see text', // cost
		'none; instantaneous', // interval
		false, // dismiss
		[
			'Elsecalling allows the surgebinder to form a miniature perpendicularity, allowing transport between the realms. This perpendicularity can transport the surgebinder between coexistent planes, despositing them in the same relative position. Non-material realms (such as the Cognitive Realm) are harder to leave than to enter. Travelling from a material plane requires spending 20 points of light whereas travelling from a non-material plane requires 40 points of light. Until achieving the next ideal, radiant surgebinders are only able to leave a non-material plane at certain touching locations.',
			'After achieving the next ideal, radiant surgebinders can bring 1 additional person with them when elsecalling. This number doubles with additional ideal to a maximum of 8.',
			'After achieving their fifth ideal, radiant surgebinders are able to form an elsegate, a tunnel through the Spiritual Realm to a distant location. Forming an elsegate requires a connection to the target location. The elsgate appears within 5 feet of the surgebinder and takes the form of a flat circular hole in space up to 10 feet across through which the target location can be seen. Creatures stepping through the gate are instantly shunted to the other side at the target location. Creatures can pass in either direction through the gate. The gate reamins active so long as the surgebinder concentrates on it and remains within 5 feet. An elsegate can be formed in any realm and always expends 60 points of light per round to maintain.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>