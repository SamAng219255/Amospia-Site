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
		'Lightstone',
		'Universal',
		7,
		'none',
		'—',
		'—',
		'Following collaboration with the Void Drow, the Return sect of the Narmen empire have learned to produce relatively small quantities of a substance dubbed "Lightstone." By default lightstone appears to be a nearly white silvery metal. Periodically, lightstone generates potentially large quantities of spell energy, when it does so it is considered "active" and rapidly softens and melts away into a blazingly bright golden superfluid liquid that doesn\'t cling to any surface. While active, lightstone leaves a fading afterimage making its movement appear blurred. In either form, lightstone weighs almost nothing.
		The spell energy contained in active lightstone can be channeled and mixed with the energy of a spell being cast, empowering it. When casting a spell or spell-like ability, or using a supernatural ability with a limited number of uses per day; the caster may choose to expend the energy from one or more active lightstones they are carrying to increase the caster level the spell is being cast at and/or apply one or more metamagic feats known to the caster. Every hour after a lightstone\'s energy has been expended, roll 1d12 and if the result is a 12 the stone reactivates. Lightstone is usually measured in units called "sparks" and is generally stored in sealed vials each containing one spark of lightstone. Empowering a spell requires expending the energy in a number of sparks of lightstone equal to the number of additional caster levels plus twice the total level increase of the added metamagic feats, minimum 1.
		Spells empowered by lightstone are modified in the following ways:
		/mm/• Negative energy damage is converted to divine damage and profane bonuses are replaced with sacred bonuses. Spells with the evil descriptor which only deal negative energy damage or grant profane bonuses have the descriptor removed and replaced with the good descriptor. All other spells with the evil descriptor cannot be empowered by lightstone.
		/mm/• Spells that would normally have positive effects (bonuses, healing, etc) on certain creatures due to negative energy do not receive those effects.
		/mm/• Modified spells do not count as divine, arcane, or psychic for effects that target only some of those types.
		Lightstone can be incorporated into various items during creation for a number of additional effects. Unless sated otherwise, lightstone incorporated into an item cannot be used to empower a spell.
		/mm/• bb/Wand/bb: A number of sparks at least twice the level of the spell in the wand may be incorporated allowing the wand to recharge. Every 24 hours there is a 50% the wand gains an additional charge. If the wand loses its last charge it is no longer able to recharge. A new wand can be made out of it, however, and if the number of sparks incorporated is at least twice the level of the spell in the new wand, the new wand is able to recharge. Spells cast from this wand are modified as though that had been empowered by lightstone.
		/mm/• bb/Staff/bb: A number of sparks at least twice the highest level of spell the staff is capable of casting may be incorporated causing the staff to automatically regain one charge every 24 hours. This does not prevent a caster from additionally recharging the staff. Spells cast from this staff are modified as though that had been empowered by lightstone.
		/mm/• bb/Bonded Item/bb: If incorporated into a wizard\'s bonded item, it allows the caster to prepare an additional spell per day of a level less than or equal to half the number of sparks of lightstone incorporated into the item. This spell is modified as though that had been empowered by lightstone.
		/mm/• bb/Holy Symbol/bb: If integrated into a holy symbol it allows a cleric to channel a burst of positive energy to heal or damage creatures, spending a use of their channel energy ability, healing or dealing an additional 1d6 points of positive energy. This ability may be used a number times per day equal to the number of sparks incorporated divided by the number of dice used by the channel energy that are granted by the user\'s class, maximum 5, and may be used even if the cleric can\'t normally channel positive energy. This ability cannot be used with a feat or other ability that augments channeling (such as turn undead).
		/mm/• bb/Weapon/bb: At least eight sparks may be incorporated into a weapon to grant it the Holy and Glorious weapon special abilities. The lightstone in this weapon may be used to empower a spell. If a number sparks of lightstone are expended such that there are fewer than eight active sparks, the weapon loses the Holy weapon special ability. If the number of active sparks is less than six, the weapon also loses the Glorious weapon special ability.
		/mm/• bb/Armor/bb: At least ten sparks may be incorporated into a set of armor to grant it the Righteous and Radiant armor special abilities. The lightstone in this armor may be used to empower a spell. If a number sparks of lightstone are expended such that there are fewer than ten active sparks, the armor loses the Righteous armor special ability. If the number of active sparks is less than six, the weapon also loses the Radiant armor special ability.',
		false,
		'Lightstone is constructed through great effort using large devices that collect exceptionally large amounts of light energy and focus it on a specially prepared nucleation site.'
	);
	require $startDir.'pageEnd.php';
?>