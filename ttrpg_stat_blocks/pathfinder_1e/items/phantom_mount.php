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
		'Phantom Mount Whistle',
		'Conjuration',
		5,
		'none',
		24000,
		'—',
		'These whistles can take many forms and can be used by creatures with at least 5 ranks in Ride to call forth a ii/phantom steed/ii as per the spell except it cannot be created for any other person, that it\'s form does not have to be that fo a horse, and that the steed\'s size adjusts to the proper size for a mount for the creature that used the whistle. Using the whistle is a standard action that provokes attacks of opportunity. The caster level for this spell is equal to the user\'s number of ranks in Ride. 
		When the whistle is being crafted the crafter can choose what form the called creature takes. Later, tokens or trophies taken from slain creatures can be attached to the whistle to change the form of the phantom steed to that of the creature the item was taken from. Regardless of the steed\'s form, it uses the statistics given by the ii/phantom steed/ii spell and can only fly if the user has at least 14 ranks in Ride. Though if the steed\'s form normally has a swim speed, the phantom steed can be given an equal swim speed instead of a land speed. Finally, when the steed\'s form comes from an attached item, the phantom receives one of the original creature\'s natural attacks whenever created, treating the phantom as having a strength of 18 and no other abilities or feats.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/phantom steed/ii; bb/Cost/bb 12,000 gp'
	);
	require $startDir.'pageEnd.php';
?>