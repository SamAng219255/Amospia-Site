<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	magicItemBlockAuto(
		'Divining Sphere',
		'Divination',
		9,
		'Focus',
		'18,000 gp (3rd), 72,000 gp (6th), 162,000 gp (9th)',
		'—',
		'This smokey crystal sphere, just small enough to comfortably fit in your hand, grants viewers occasional glimpses of far off places and times and individuals can spend hours entranced and trying to discern their meaning yet to no avail. When a divination spell is cast using this sphere, the images within align and grant creatures glimpses into what the spell reveals.
		This sphere acts as a casting focus and allows you revert time once per day after the casting a spell to before the spell was cast. Once per day, immediately after resolving the casting of a spell cast using this focus with a casting time of up to one standard action, you can revert time to just before you cast the spell, though it is limited as to what levels of spells it can affect. It can only affect spells up to its max level of 3rd, 6th, or 9th. Everything is reset to before you cast the spell except you still have memory of the events and can choose to perform different actions. If you cast the same spell, any associated rolls made by a given creature are treated as being the same as when they rolled the first time.
		A ii/divining sphere/ii can be modified to function as a crystal ball in addition to its properties as a casting focus, costing as much as would to create a new crystal ball.',
		false,
		'bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb 9,000 gp (3rd), 36,000 gp (6th), 81,000 gp (9th)
		bb/Upgrade/bb:
		Same as a ii/crystal ball/ii with any additional powers chosen.'
	);
	require $startDir.'pageEnd.php';
?>