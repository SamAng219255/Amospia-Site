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
		'Badizon Key',
		'Transmutation',
		'1st, see text',
		'none',
		'—',
		'—',
		'A ii/badizon key/ii looks like an ornate key with a strange toothing that molds to the shape of the lock at the command of the wielder and can be used to open any lock. ii/Badizon keys/ii draw on the wielder\'s Disable Device skill and specifically their ability pick locks. A ii/badizon key/ii wielded by a creature with ranks in Disable Device has a caster level equal to the wielder\'s number of ranks in Disable Device.
		A ii/badizon key/ii has three modes that can be chosen by a wielder; Spatial, Potential, and Mental. In the Spatial mode, the key has the ability to lock and unlock forms of teleportation, allowing you to open doorways in space from location to another, lockdown creature\'s abilties to teleport, and remove the same types of retrictions. In Potential mode it can lock and unlock a creature\'s potential, allowing you to expand your ability to grow, lock up your opponents ability, and temporarily unlock your full potential allowing you to perform great feats. Lastly, in Mental mode it can lock and unlock creature\'s minds and memories allowing to stun creatures by locking up their mental faculties, make creatures forget things by locking them away, or unlock a creature\'s mind breaking enchantments and restoring lost memories.
		In addition to its powers, as you are using a key, whenever you use a ii/badizon key/ii to pick a lock you receive a +20 circumstance bonus to Sleight of Hand or a +10 circumstance bonus to Bluff checks to hide that you are picking the lock instead of using the actual key.
		A ii/badizon key/ii grants the wielder access to the following powers so long as the wielder has at least the listed number of ranks in Disable Device.
		/mm/ ii/0 ranks/ii — Functions as a skeleton key except that it can be used an additional number of times on a given lock equal to your number of ranks in Disable Device. As the key shifts to other shapes of skeletons keys you know.
		/mm/ ii/1 rank/ii — Functions as a set of masterwork thieves tools granting a +2 circumstance bonus to your Disable Device skill as you command the keys teeth to form various shapes allowing you to pick the lock. The keys teeth can also form other shapes allowing it to be used for any task requiring thieves tools.
		/mm/ ii/2 ranks/ii — The key able to magically bind an opening closed as per the ii/hold portal/ii spell as a supernatural ability once per day plus an additional time per day for every 2 ranks beyond the second you have.
		/mm/ ii/3 ranks/ii — The key provides further aid to your ability, granting a +5 competence bonus to your Disable Device skill. For every 3 ranks beyond the 3rd, this bonus increases by +5, to a maximum of +30 at level 18.
		/mm/ ii/4 ranks/ii — The key able to magically lock and unlock objects allowing you to cast ii/arcane lock/ii and ii/knock/ii each once per day as a supernatural ability. You can cast each of these spell this way an additional number of times per day for every two ranks beyond the fourth.
		/mm/ ii/11 ranks/ii — The key\'s ability to magically lock and unlock things expands. When using the key to cast ii/arcane lock/ii the DC to open an affected lock increases to your number of ranks in Disable Device and the DC to open an affected door that does not otherwise have a lock increases to 10 plus you number of ranks in Disable Device. Additionally, when using the key to cast ii/knock/ii it instead becomes ii/unshackle/ii affecting one means of closure per rank in Disable Device, no two of which can be more than 30 feet apart.
		/mm/ ii/20 ranks/ii — The key\'s full potential has been realised, a number of times per day equal to your dexterity modifier you can either automatically open any lock without needing to make a check or magically seal a door, chest, portal, or similar object for up to 48 hours, during which time you can open it without issue but no other creature can without breaking it. Magically sealed objects receive 10 additional hardness, an additional 100 hit points, and their break DC increases by 30.
		When the key is in bb/Spatial mode/bb the list of powers also inlcude the following:
		/mm/ ii/5 ranks/ii — The key can open doors in space that allow you to travel short distances. This is a supernatural ability that functions as the spell ii/dimension door/ii. You can use this ability a number of times per day equal to half your number of ranks in Disable Device rounded up. You can also use this ability as a move action instead by expending two uses.
		/mm/ ii/7 ranks/ii — The key can lock a creature to this plane preventing teleportation. This is a supernatural ability that functions as ii/dimensional anchor/ii. You can use this ability a number of times per day equal to half your number of ranks in Disable Device rounded up. This ability can also be used to dispel a casting of ii/dimensional anchor/ii as the targeted dispel ability of ii/dispel magic/ii naming the ii/dimensional anchor/ii spell and using your number of ranks in Disable Device in place of your caster level.
		/mm/ ii/10 ranks/ii — The key can now open doors in space that allow for farther travel and persist long enough for other creatures to travel with you. Once per day, you can create a longer range doorway in your square as a standard action that can be entered by you and up to one other creature per three ranks in Disable Device you possess that you designate when creating the doorway. This doorway lasts for one round or until all of the designated creatures have passed through, you cannot see through the doorway and it cannot be entered from the far side. The far side of the doorway can be up 100 miles away per rank you possess in Disable Device and interplanar travel is not possible. You must have some clear idea of the location and layout of the destination and can arrive in the wrong location or suffer consequences of a mishap like when casting ii/teleport/ii. This is a supernatural ability.
		/mm/ ii/13 ranks/ii — The key\'s ability to open doorways for more distant travel has expanded. You can now use the ability twice per day and an additional time for every 3 ranks after the 13th. You can also expend two uses of this ability to remove the maximum distance away the far side can located at, remove the chance of landing off target, you do not need to have seen your destination, and return to your original location in the case of a mishap as ii/greater teleport/ii instead of ii/teleport/ii.
		/mm/ ii/16 ranks/ii — The key can lock out teleport within an entire area instea of on a single target. This is a supernatural ability that functions as ii/dimensional lock/ii. Doing so requires expending two uses of its ability lock creatures to the plane as ii/dimensional anchor/ii. This ability can also be used to dispel a casting of ii/dimensional lock/ii as the targeted dispel ability of ii/dispel magic/ii naming the ii/dimensional lock/ii spell and using your number of ranks in Disable Device in place of your caster level.
		/mm/ ii/17 ranks/ii — The key is now capable of opening doorways to other planes. Once per the you can use the key cast ii/gate/ii as a supernatural ability except it cannot be used to call a creature through it.
		/mm/ ii/20 ranks/ii — The key\'s full potential has been realised, you can use the key to open up a doorway in space that takes you up to four times your movement speed and step through it in place of a 5 foot step. As an immediate action, you can also immediately end any effect that would directly prevent you from teleporting or prevent a creature within 400 feet from teleporting for the next 1 minute.
		When the key is in bb/Potential mode/bb the list of powers also inlcude the following:
		/mm/ ii/5 ranks/ii — Once per day, as a swift action, you can make a DC 20 Disable Device check to unlock access to your future abilties. For 1d4 rounds you are treated as having one additional level in your favored class plus one additional level for every 6 by which you beat the DC. You do not gain the additional feats from odd levels, additional skill ranks, or increases to your ability scores, only class features are gained. You do gain a bonus equal to the number of levels gained to your Disable Device skill and several other skills of your choice. The number of additional skills you gain a bonus is equal to your intelligence modifier, if positive. You also gain an increased base attack bonus and base saving throws as appropriate for your new level. If one of the features you gained requires a decision, you can make a different decision each time you use this ability. At levels 10, 15, and 20, you gain an additional use of this ability per day and it lasts for an additional 1d4 rounds. Multiple uses of this ability do not stack.
		/mm/ ii/7 ranks/ii — 
		/mm/ ii/10 ranks/ii — If you gain a level while carrying this key (including at the level when you unlock this ability), you can assign additional skill ranks beyond the maximum number from your number of hit dice but each skill rank assigned beyond the maximum costs two ranks to assign. If you do so, when assigning skill ranks at following levels, first tally up how many skill ranks you have spent paying two ranks only for each rank assigned past the new maximum, potentially refunding some the extra ranks previously spent. These additional ranks beyond the maximum do not allow you to unlock additional abilties from Badizon relics, instead you are treated as only having a number equal to your maximum. If you stop carrying this key, you lose access to any ranks assigned beyond the maximum but can retrain them following the normal rules treating each rank beyond the maximum as two ranks.
		/mm/ ii/13 ranks/ii — 
		/mm/ ii/16 ranks/ii — 
		/mm/ ii/17 ranks/ii — 
		/mm/ ii/20 ranks/ii — 
		When the key is in bb/Mental mode/bb the list of powers also inlcude the following:
		/mm/ ii/5 ranks/ii — 
		/mm/ ii/7 ranks/ii — 
		/mm/ ii/10 ranks/ii — 
		/mm/ ii/13 ranks/ii — 
		/mm/ ii/16 ranks/ii — 
		/mm/ ii/17 ranks/ii — 
		/mm/ ii/20 ranks/ii — ',
		true,
		'WIP'
	);
	require $startDir.'pageEnd.php';
?>