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
		'Type II BioChromatic Entities',
		'info',
		quick_array([
			'Type II BioChromatic entities are Mindless Manifestations in a Deceased Host, or more commonly known as "Lifeless", and are non-sentient reanimated humanoid or animal remains. Their brains continue to function; they are therefore able to interpret old commands and receive new commands. These creatures are made via complex Commands that reanimate a dead person or animal. These Commands are guarded closely by those who know them. To an appropriately skilled awakener, Lifeless are easy to create requiring only 1 Breath.',
			'Once a Lifeless is created, it will obey any instructions given to it that include a predetermined Command Phrase (similar to a password). Lifeless retain the hit dice, ability scores, BAB, skills, and Feats they possessed in life as well as any natural abilities such as movement speeds, natural attacks, and senses. A Lifeless\'s ability to understand a command can be partially limited by its intelligence.',
			'The Lifeless can function for a long time if cared for and repaired. Lifeless can withstand otherwise mortal wounds, but too much damage will eventually cause the Lifeless to cease activity, which means that Lifeless bodies need to be maintained and repaired (e.g. by sewing its wounds shut) when needed, otherwise they are going to need a new Breath. One innovation in Lifeless maintenance is the use of ichor-alcohol, a substance that could act as blood for Lifeless and that greatly prolongs their viability.',
			'It is possible to create lifeless without the entire body through this will impact the Lifeless\'s ability to function and still requires most of the flesh to be intact. It is also theoretically possible to encase a skeleton in a material as a replacement flesh or to transmute a body into another material before awakening it into a Lifeless to increase the hardness and durability of a Lifeless. These materials do not have to be organic.',
			'An example command to create a Lifeless is "ii/Awaken to my Breath, serve my needs, live at my Command and my word/ii".'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>