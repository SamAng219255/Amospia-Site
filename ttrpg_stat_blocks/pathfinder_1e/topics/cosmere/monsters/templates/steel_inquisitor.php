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
		'Steel Inquisitor (CR +0, see text)',
		'template',
		quick_array([
			'Acquired/Inherited Template Acquired',
			'Simple Template No',
			'Usable with Summons No',
			'',
			'Steel inquisitors are devoted allomancers and feruchemists that have undergone a gruesome procedure and been converted massive abominations with only the flat ends of cold steel spikes jutting from where their eyes should be, the tips of which can be seen poking out the back of their skulls.',
			'Inquisitors are one of the more human hemalurgic constructs despite having the highest spike count of common types of hemalurgic constructs.',
			'Inquisitors generally possess between 9 and 11 spikes including their linchpin spike. The primary spikes that all inquisitors have are one steel spike in each eye socket granting allomantic iron and steel, a gold spike in their ribs granting access to feruchemical gold, and a bronze spike between their ribs granting them allomantic bronze. Beyond these, inquisitors usually have between 4 and 6 more spikes between their ribs granting additional allomantic and feruchemical abilities as needed. Steel Inquisitors are usually made from either mistborn or seekers so that their increased allomantic bronze can pierce copperclouds.',
			'Despite a lack of eyes, Steel Inquisitors are able to see using the properties of allomantic iron and steel to detect trace amounts of metal, granting them 60 foot metal sight. Steel Inquisitors have an innate bloodlust and desire for destruction, but the original personality can often still override this and control their actions.',
			'"Steel Inquisitor" is an inherited template that can be added to any intelligent creature, referred to hereafter as the base creature.',
			'bb/Challenge Rating/bb: The challenge rating of a steel inquisitor does not increase based on the template but their specific arrangement hemalurgic spikes may still increase their CR.',
			'bb/Alignment/bb: A steel inquisitors alignment is one step closer to evil than the base creature.',
			'bb/Senses/bb: Steel inquisitors lose all sight based senses and gain as/general_rules_cosm|Metal Sight|metal sight 60\'/as.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>