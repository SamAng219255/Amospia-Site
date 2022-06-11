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
	advAlchemySimpleBlock(
		'Allsoup, Greater',// Name
		'Imbibed',// Form (Sub-Form(s))
		[],// Descriptors
		6,// Level
		'instantaneous and 12 hours',// Duration
		'none',// Saving Throw
		[
			'This recipe creates 20 servings of an alchemically engineered stew. This stew seems like a standard hearty stew, but the smell and flavor, while impossible to describe, are considered astoundingly good by any creature that smell or consumes it. Each serving of this stew that is consumed will provide sufficient nourishment for a Medium creature for 1 day and is cured of all sickness and poisons as an ii/ aa/aa_antidote|antidote/aa /ii and ii/ aa/aa_anti_plague|anti-plague/aa /ii, gains 1d8 1d8 temporary hit points + 1 point per two alchemy levels (maximum +10), gains a +1 morale bonus on attack rolls and Will saves, and gains a +4 morale bonus on saving throws against poison and fear effects. The granted morale bonuses last for 12 hours.',
			'So long as the stew remains in sealed containsers, such as corked waterskins or bottles, it remains fresh and ready to eat. This does prevent it from being contaminated or poisoned as normal.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>