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
		'Dynamic Skill Abilities',
		'rule',
		quick_array([
			'Sometimes it would make sense for a character to be aided by one of their abilities or to able to use a different ability entirely when using a skill.',
			'With this rule, players could describe ways their character attempts to use a different ability than the normal to use a skill. The GM would then decide whether to allow it or to deny it and, if they allow it, whether that ability modifier replaces or aids their skill check. If it replaces, they can roll the skill check using the different ability modifier. If it aids their skill, they roll the skill twice, the first time with the different ability modifier and the second with the original. Only the second roll determines whether they succeed, but, if they would have succeeded on the first roll, they may add the alternate ability modifier to the second roll in addition to the normal modifier.'
		])
	);
	require $startDir.'pageEnd.php';
?>