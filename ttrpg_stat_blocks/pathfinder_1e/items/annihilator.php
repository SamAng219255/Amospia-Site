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
		'Annihilator', // name
		'Necromancy', // school
		25, // cl
		'none', // slot
		'—', // price
		20, // weight
		[
			'An ii/annihilator/ii is shaped mostly like a heavy crossbow except it lacks the arms and the body where the bolt would sit is extended to be two feet in length. It is made entirely from some unknown form of steel that is impervious to damage and unusually heavy. Like a crossbow, it has a trigger and aiming the device and pulling the trigger fires a ray of extremely concentrated negative energy. This is a ranged touch attack that deals 250 points of damage on a successful hit and has a range of 1,400 feet. Half of the damage is negative energy damage but the other half is untyped and is unaffected by resistance or immunity. Despite dealing negative energy damage, this attack never heals creatures healed by negative energy.',
			'An ii/annihilator/ii is treated as a heavy crossbow for the purposes of weapon proficiency, abilities, and feats, though it can only ever be fired once per round and cannot be used as part of a full-attack action.'
		], // description
		true, // isArtifact
		'If an ii/annihilator/ii is left on the Plane of Positive Energy for an extended period, it will slowly deteriorate. After 10 years, it will gain the broken condition and be unable to fire. After 100 years it will be completely destroyed. Casting ii/make whole/ii automatically restores 5 years worth of damage from the ii/annihilator/ii. Some regions of the Plane of Positive Energy are more concentrated and leaving an ii/annihilator/ii in such a location can cause it to deteriorate faster.' // extra
	);
	require $startDir.'pageEnd.php';
?>