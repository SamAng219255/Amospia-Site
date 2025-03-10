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
		'Sticking', // name
		'Abrasion', // surge
		'Dustbringers, Edgedancers, Flowing Ones', // access
		'personal', // range
		'self', // target=false
		false, // effect=false
		false, // area=false
		10, // cost
		'1 minute', // interval
		true, // dismiss
		[
			'The surgebinder actively increases their own friction and that of the surfaces they touch to increase their ability to climb and cross difficult surfaces. The surgebinder automatically succeeds at any Climb check they could otherwise attempt as well as Acrobatics checks made to Cross Narrow Surfaces or Uneven Ground.',
			'The surgebinder also gain the ability to touch a 10-foot square within their reach as a swift action to make it "sticky" for one round. Sticky regions are invisible but creatures attempting to move through the area using any ability that allows them to move at least twice their base movement speed are tripped by the surface. Their movement immediately ends and they are knocked prone.'
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>