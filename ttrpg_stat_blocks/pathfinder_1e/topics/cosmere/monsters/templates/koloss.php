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
		'Koloss (varies)',
		'template',
		quick_array([
			'Acquired/Inherited Template Acquired',
			'Simple Template No',
			'Usable with Summons No',
			'',
			'Koloss possess exactly 4 iron spikes that grant them increased strength. Koloss begin at their normal size and grow at a normal pace for a young member of their species until they reach around twice their average natural height (12 feet for humans) at which point their heart gives out and they die.',
			'"Koloss" is an inherited template that can be added to any mortal creature, referred to hereafter as the base creature.',
			'bb/Challenge Rating/bb: A medium sized koloss has a CR equal equal to 11 plus 3/4 its number of hit dice.',
			'bb/Hit Dice/bb: A koloss\' racial hit dice become d12s and loses any hit dice from class levels which become additional racial hit dice. Koloss also lose any class levels and abilities from class levels they may possess. Koloss also receive 130 bonus hit points.',
			'bb/Attacks/bb: Koloss retain all natural and manufactured weapon attacks and proficiencies of the base creature and are proficient with all simple and martial weapons, with all types of armor (heavy, medium, and light), and with shields (except tower shields). Koloss are also proficient with improvised weapons and do not take the normal -4 penalty when wielding one.',
			'bb/Abilities/bb: Despite the effects of hemalurgic spikes normally not stacking, a koloss receives the strength of all four spikes it possesses. Receiving the full bonus of the spike with the highest bonus and half of the other three spikes. Their wisdom becomes 10 if the base creature\'s was higher, their intelligence becomes 5, and their constitution becomes 33. When a koloss becomes old enough, and therefore large enough, that their size category increases, its strength increases by an additional +2 and its dexterity is lowered by -2, to a minimum score of 1.',
			'bb/Base Attack Bonus/bb: A koloss\' base attack bonus is equal to its number of Hit Dice.',
			'bb/Feats/bb: A koloss retains its feats though it cannot use feats it no longer meets the prerequisistes of. Koloss racial hit dice count as levels of fighter for the purposes of meeting the prequisistes. Koloss also gain Power Attack as a bonus feat.',
			'bb/Skills/bb: A koloss loses or gains a number of skill points to match their new intelligence.',
			'bb/Special Qualities/bb: Koloss gain the ii/Colossal Weapons/ii special quality that allows them to wield weapons of one size category larger as though they were the same size category.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>