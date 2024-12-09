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
	raceBlockAuto(
		'Void Elf',
		10,
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 2,
			'int' => 2,
			'str' => -2
		],
		'',
		[
			'bb/Humanoid/bb: Void elves are humanoid creatures with the elf subtype.',
			'bb/Medium/bb: Void elves are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Normal Speed/bb: Void elves have a base speed of 30 feet.',
			'bb/Darkvision/bb: Void elves can see perfectly in darkness up to 120 feet away though they can only see in black and white in the dark.',
			'bb/Light Blindness/bb: Abrupt exposure to bright light blinds void elves for 1 round; on subsequent rounds, they are dazzled as long as they remain in the affected area.',
			'bb/Chill of Night/bb: A void elf is alive, but is healed by negative energy and harmed by positive energy, as if they were an undead creature. Void elves take no penalty from energy-draining effects, though a void elf can still be killed if they accrue more negative levels than they have Hit Dice. After 24 hours, any negative levels a void elf has accrued are removed without the need for any additional saving throws.',
			'bb/Ethereal Connection/bb: Void elves receive a +2 racial bonus on Spellcraft checks to create magic items with extradimensional spaces such as bags of holding, portable holes, and handy haversacks. Void elves also increase the DCs of any Illusion (glamer) or Illusion (shadow) spells they cast by +1.',
			'bb/Preternatural Calm/bb: Void elves gain a +2 racial bonus on concentration checks made to cast arcane spells defensively.',
			'bb/Spatial Rift/bb: When a void elf reaches 9th level in any combination of classes, they gain ii/shadow walk/ii (self only) as a spell-like ability they can use once per day. hen a void elf reaches 13th level in any combination of classes, they gain ii/plane shift/ii (self only to the Shadow Plane or the Material Plane only) as a spell-like ability they can use once per day. The caster level for both abilities is equal to the user\'s character level.',
			'bb/Languages/bb: Void elves begin play speaking Common and Thalassian. Void elves with high Intelligence scores can choose from Darnassian, Draenei, Dwarven, Gnomish, Orcish, and Pandaren.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>