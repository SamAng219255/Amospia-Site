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
	magicItemBlockAuto(
		'Shadow Companion Whistle',
		'Illusion (Shadow)',
		13,
		'none',
		30000,
		'—',
		'A ii/shadow companion whistle/ii appears to made out of an unknown black metal and is formed from ectoplasm harvested from a destroyed shadow. Blowing into a ii/shadow mount whistle/ii as appears to create no sound though doing so, once per day as a standard action, summons a shadowy spirit bound to the whistle. This spirit can be bound while the whistle is being created or afterwards, in which case it requires a ritual taking 1 hour. In either case, the spirit must be provided either by using a trapped soul or the body of a dead creature whose soul is not trapped. If a creature whose spirit is bound to whistle is resurrected, their spirit leaves the whistle and the it cannot be used until a new spirit is bound to it. You can also release a bound spirit from the whistle in ritual requiring 10 minutes. You can only bind the spirit of an animal, dragon, magical beast, or vermin to the whistle.
		When a whistle with a spirit bound to it is used, it summons a shadowy creature that is identical to the original creature the spirit is taken from except that it is only 60% real. If another creature makes a DC 20 Will save to disbelieve the spirit, they only take 60% of any damage or healing dealt by the creature and only has a 60% chance to be affected by the creature\'s non damaging or healing abilities. Similarly, the spirit receives only 60% of healing or damage from disbelieving creatures and only has a 60% chance of being affected by such creatures\' non damaging or healing abilities.
		The spirit lasts for 13 hours or until dismissed. If the summoned spirit does not have more hit dice than the summoner has ranks in Handle Animal the summoned spirit automatically obeys the summoner and follows any commands given by the summoner. If the spirit instead has more hit dice than the summoner has ranks in Handle Animal, the summoner must make a Handle Animal check with a DC equal to 10 plus twice the spirit\'s number of hit dice. If the summoner makes their check, the summoned spirit obeys them, following their orders. If the summoner fails their check, the summoned spirit cannot be controlled and acts according to the original creature.
		If the summoner has the Solid Shadows metamagic feat, the summoned spirit is 20% more real.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/shadow conjuration, greater/ii; bb/Cost/bb 15,000 gp'
	);
	magicItemBlockAuto(
		'Shadow Companion Whistle, Lesser',
		'Illusion (Shadow)',
		7,
		'none',
		9000,
		'—',
		'This item functions as a ii/shadow companion whistle/ii except that the summoned creature is only 20% real, the DC to disbelieve is 16, and the summoned creature remains for 7 hours or until dismissed.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/shadow conjuration/ii; bb/Cost/bb 4,500 gp'
	);
	magicItemBlockAuto(
		'Shadow Companion Whistle, Greater',
		'Illusion (Shadow)',
		17,
		'none',
		50000,
		'—',
		'This item functions as a ii/shadow companion whistle/ii except that the summoned creature is 80% real, the DC to disbelieve is 23, and the summoned creature remains for 17 hours or until dismissed.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/shades/ii; bb/Cost/bb 25,000 gp'
	);
	require $startDir.'pageEnd.php';
?>