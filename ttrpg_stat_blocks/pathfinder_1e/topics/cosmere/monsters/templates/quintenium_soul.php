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
		'Quintenium-Soul (varies)',
		'template',
		quick_array([
			'Acquired/Inherited Template Acquired',
			'Simple Template No',
			'Usable with Summons No',
			'',
			'This template is not based on canon. See aa/quintenium|quintenium/aa for more details.',
			'While burning pure quintenium, a creature\'s soul is enhanced and they take the form of a powerful outsider.',
			'"Quintenium-Soul" is an inherited template that can be added to any mortal creature, referred to hereafter as the base creature.',
			'bb/Challenge Rating/bb: A Quintenium-Soul\'s CR is higher than the base creature\'s by an amount equal to the spell level of their allomantic quinteium.',
			'bb/Type/bb: The creatures\'s type changes to Outsider and they lose the native subtype.',
			'bb/Senses/bb: The quintenium-soul retains any senses possessed by the base creature and gains 60\' darkvision.',
			'bb/Hit Dice/bb: They gain a number of racial hit dice equal to the spell level of their allomantic quintenium and any other racial hit dice possessed by the base creature become d10s.',
			'bb/Saves/bb: Racial base save bonuses become Fort +1/3 racial HD, Ref +1/2 racial HD + 2, and Will +1/2 racial HD + 2. Retain save bonuses from class levels.',
			'bb/Base Attack Bonus/bb: A quintenium-soul\'s base attack from any racial hit dice it possesses is equal to its racial Hit Dice. It retains any base attack bonuses from class levels.',
			'bb/Skills/bb: A quintenium-soul retains all the skill ranks of the base creature and gains skill ranks such that their total number of skill ranks from racial Hit Dice is equal to 6 + their Int modifier (minimum 1) per racial Hit Die. Unless the creature has at least 30 points of savantism, gained skill ranks are distributed as follows:',
			'Skill ranks are added to already trained skills until they are maxed out, starting first with whichever skill the base creature has the most ranks in and continuing in descending number of ranks. If there is at any point in this process a tie, skill ranks are evenly divided among the tied skills. If there are no more skills in which the base creature is trained and there are remaining skill ranks, the remaining ranks are placed into skills in the following order skipping skills that the base creature has already maxed out: Knowledge (planes), Knowledge (religion), Linguistics, Perception, and Sense Motive. Any additional skill ranks are lost.',
			'bb/Languages/bb: The quintenium-soul retains all languages possessed by the base creature. If they gained ranks in Linguistics, they acquire additional languages. Unless the quintenium-soul has at least 30 points of savantism, languages acquired are gained as follows based on their alignment:',
			'If the quintenium-soul is good they first learn Celestial then Infernal, Abyssal, Auran, Aquan, Terran, and Ignan. If the quintenium-soul is evil they first learn Abyssal, if they are chaotic, or Infernal, if they are lawful, followed by either Infernal or Abyssal respectively, then they learn Celestial, Ignan, Terran, Aquan, and Auran. If the quintenium-soul is neutral they must choose the first time they burn Quintenium whether they gain languages like they are evil or like they are good or if they learn them in one of the following order: If they are lawful they learn Terran, Aquan, Ignan, Auran, Celestial, Infernal, and then Abyssal; if the are chaotic they learn Ignan, Auran, Terran, Aquan, Abyssal, Infernal, and then Celestial; and if they are true neutral they can choose either one of the previous options when initially deciding.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>