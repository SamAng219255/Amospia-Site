<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	magicItemBlockAuto(
		'Conjuring Key',
		'Conjuration',
		17,
		'Focus',
		'10,000 gp (3rd), 36,700 gp (6th), 81,700 gp (9th)',
		'—',
		'This key generally comes in one of four forms, but many forms are possible. The standard types are an ornate gilded key with flowing lines and depictions of angels; a dull black key with spikes and hard edges with shapes like horns, teeth, and claws; a finely crafted steel key cut to perfect precision with depictions of hammers, anvils, and other such artifacts; or a sparkling crystal key shaped from many gaps and rods all parallel to the shaft with a representation of a hey hole on the bow. Conjuration spells including somatic components cast using this key requires slotting the key into an imaginary lock before turning it, in place of its normal movements.
		This key acts as a casting focus and strengthens and prolongs the duration of conjured objects and creatures, though it is limited as to what levels of spells it can affect. It can only affect spells up to its max level of 3rd, 6th, or 9th. Creatures and objects summoned or created by spells cast with this key last twice as long as though using the Extend Spell feat. Creature created by spells cast with this key also gain 2 additional hit dice and objects created by these spells gain 5 additional hardness and 10 additional hit points plus 2 hardness and 10 hit points for each +1 enhancment bonus on the key.
		A ii/conjuring key/ii can be used in place of forked metal rods tuned to a number of planes equal to the maximum spell level the key can affect. Which planes a key is tuned to is determined by the creator while it is being made.
		A ii/conjuring key/ii can be further enchanted to act similarly to a skeleton key. A ii/conjuring key/ii that can affect a maximum of 3rd level spells has a +5 disable device and costs 50 gp to enchant, a ii/conjuring key/ii that can affect a maximum of 6th level spells has a +10 disable device and costs 100 gp to enchant, and a ii/conjuring key/ii that can affect a maximum of 9th level spells has a +20 disable device and costs 200 gp to enchant. Further, a ii/conjuring key/ii negates the bonus to a lock\'s DC from the ii/arcane lock/ii spell and can be used to open a door without a lock that is affected by the ii/arcane lock/ii spell with a DC 10 disable device check using the key\'s bonus instead of your own.
		Alternatively, a ii/conjuring key/ii can instead be further enchanted to allow the wielder to open doorways through space and to lock dimensional travel. A ii/conjuring key/ii that can affect a maximum of 3rd level spells can be commanded at-will to open a doorway in space that will teleport the wielder up to 400 feet as per ii/dimension door/ii as a spell-like ability as well as being able to cast ii/dimensional anchor/ii 3 times per day as a spell-like ability. A ii/conjuring key/ii that can affect a maximum of 6th level spells can also be commanded, once per day, to cast ii/greater teleport/ii as a spell-like ability. A ii/conjuring key/ii that can affect a maximum of 9th level spells can also be commanded, once per day each, to cast ii/gate/ii and ii/dimensional lock/ii as spell-like abilities.',
		false,
		'bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb 5,000 gp (3rd), 18,350 gp (6th), 40,850 gp (9th)
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/knock/ii; bb/Cost/bb 50 gp (3rd), 100 gp (6th), 200 gp (9th)
		OR
		bb/Requirements/bb Craft Wondrous Item, ii/dimension door/ii, ii/dimensional anchor/ii, ii/greater teleport/ii (6th or 9th), ii/gate/ii (9th), ii/dimensional lock/ii (9th); bb/Cost/bb 21,000 gp (3rd), 38,000 gp (6th), 90,000 gp (9th)'
	);
	require $startDir.'pageEnd.php';
?>