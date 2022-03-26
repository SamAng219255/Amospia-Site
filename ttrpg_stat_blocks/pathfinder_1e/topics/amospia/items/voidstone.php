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
		'Voidstone',
		'Necromancy',
		'1st; see text',
		'none',
		2000,
		'—',
		'Some of the ambient void energies, found within the caverns within which live the Void Drow, have coalesced into an almost black gemstone called voidstone. This substance looks black until light is shined through at which point it reveals its deep violet hue. It\'s tough and can withstand a beating but can be reasonably cut like other gems or knapped like stone or glass.
		Voidstone\'s most interesting property is its ability to contain spell energy. While a piece of voidstone contains a spell or other spell energy it is considered active and emits purple light like a candle with wispy streams of deep purple energy that trail behind it as the gem is moved around. Spells, spell-like abilities, and supernatural abilities can be stored in a voidstone and cast from it later. storing or casting from a voidstone requires the same action used to use the ability normally. In order to store a spell-like ability in a voidstone, you must make a Spellcraft check with a DC equal to 10 plus the level of the spell. Storing a supernatural ability similarly requires a DC 15 Spellcraft check and can only be done with abilities with a limited number of uses per day. "Casting" a supernatural ability from a voidstone requires a DC 25 Use Magic Device check unless the caster is also the creature that placed the ability in the voidstone. On a failed Use Magic Device check the ability is not expended from the stone.
		Voidstones inherit the caster level of whatever spell is stored inside them.
		Spells placed into a voidstone a warped and augmented in a number of ways:
		/mm/• All energy (acid, cold, electricity, fire, force, sonic…) and damage (piercing, slashing, bludgeoning, divine, precision…) types used by the spell are converted to negative energy damage. Descriptors do not change.
		/mm/• Spells that would normally have negative effects (penalties, damage, etc) on undead (not non-undead creatures who are affected like undead for the purpose of positive and negative energy) due to positive energy still apply those effects as though it were positive energy. All other spells that would not normally heal creatures healed by negative energy will not heal creatures healed by negative energy when warped.
		/mm/• Any healing and bonuses normally provided by the spell, except negative energy effects, are changed into damage and penalties.
		/mm/• Warped spells do not count as divine, arcane, or psychic for effects that target only some of those types.
		Voidstones can be attached to various items for a number of additional effects:
		/mm/• bb/Melee Weapon/bb: A spell stored in the stone may be automatically cast on a target on a successful hit. Additionally, a spell may be cast into and out of the stone as part of an attack. If the spell has a casting time of less than one standard action, the attack costs an additional swift action to make, otherwise the attack is made as a full round action. Casting the spell still provokes an attack of opportunity if it would normally. If the spell gets interrupted and the caster fails their concentration check, the accompanying attack is made at a -5 penalty. If the spell is stored this way and the attack misses or the stored spell is not discharged, then the spell is lost. Spells with a range of personal cannot be cast against a target. Spells that target one or more creatures or objects target the creature or object hit and do not require an additional attack roll. (They also cannot crit.) Spells that target an area originate in the nearest square of the target creature or object hit facing away from the wielder.
		/mm/• bb/Ranged Projectile/bb: A voidstone attached to a ranged projectile, such as as the tip of an arrow, behaves as though it were a melee weapon except that on a miss the spell is discharged against whatever the arrow hits. If the attack does not specify where the projectile lands on a miss, then determine its behavior based on the following rules: For thrown projectiles, roll 1d8 and assign each side a direction, it lands a number of squares away based on which range increment it is in in the rolled direction. If it hits a wall first then it impacts the wall. For all other projectiles, it travels in a straight line past the target landing on the ground at the end of the range increment. If it hits a wall first, it impacts the wall. If before hitting the wall or landing on the ground, it passes through a space containing a creature or object, make a straight d20 roll with a -10 penalty against the creature or object\'s touch AC. If it hits, it impacts the creature or object dealing no damage from the projectile but triggering the contained spell.
		/mm/• bb/Wand/bb or bb/Staff/bb: So long as at least one charge or use is present the voidstone is active. Spells cannot be stored into the stone however the wand or staff may cast spells through the stone. When casting a spell through the stone, the spell is warped like if it were cast from a voidstone and the spell is cast as though at 1 level higher.
		/mm/• bb/Spellbook/bb: Spells can still be stored and cast from the stone as normal however un-cast spells may also be stored in the stone. When preparing spells with the spellbook, you may store up to 1 spell slot of any level per day into a stone activating it. This slot cannot be recovered until the next time you prepare spells after a rest. When preparing spells from the book you may expend the energy from a voidstone embedded in it in which you have stored a spell slot to prepare an additional spell of that level. The spell must be prepared from the same class it was stored from. You can prepare a maximum number of spells this way equal to the modifier of your main casting stat for the class. Any additionally prepared spells this way are lost if not used before you next time you prepare spells following a rest.
		/mm/• bb/Bonded Item/bb: If affixed to a wizards bonded item it provides all the normal effects it would for an item of that type but also allows you to augment your spell when using it for its ability that it may used to cast any one spell you are capable of casting. Augmenting the spell in this way warps it as though it were cast from a voidstone and increases the caster level by 1.
		/mm/• bb/Holy Symbol/bb: If integrated into a holy symbol it allows a cleric to channel a burst of negative energy to damage creatures using a use of their channel energy ability dealing an additional 1d6 points of negative energy damage. This ability may be used up to 3 times per day and may be used even if the cleric can\'t normally channel negative energy. This ability cannot be used with a feat or other ability that augments channeling (such as control undead). It also allows storing a use channel negative energy either from the above ability or otherwise into any voidstone without a Spellcraft check.
		/mm/• bb/Armor/bb or bb/Shield/bb: When the wearer is attacked the spell stored in the stone may be cast on either the attacker or the wearer determined when the spell is placed in the stone. If affecting the wearer the spell\'s effects affect only the wearer and are not warped. If affecting the attacker it goes off like it was in a melee weapon and you made a successful hit on the attacker. If the spell has a range of touch it will be lost without effecting the attacker if the attack was a ranged attack. Spells with a range of personal may not be used to affect the attacker. If attacked the spell must be discharged.
		Voidstones may be sealed while placing the spell into the stone. When sealing make a Spellcraft check. The result of this check is the DC of the seal. Anyone attempting to access the spell sealed within a voidstone other than the creature who put the spell in it must make a Use Magic Device (UMD) check against the DC of the seal. Failure by 5 or more prevents new attempts by that creature for the next 24 hours. As a standard action, the creator of the seal may grant a touched creature the ability to bypass a seal. Any creature who can bypass a seal either by being the creator or by having the ability granted to them may attempt to diagram the seal. If the creature did not create the seal this requires making a Spellcraft check against the DC of the seal. A successfully diagrammed seal may be read with the aid of ii/read magic/ii to grant a +5 bonus to UMD when trying to access the sealed spell and removes the penalty for failing by 5 or more.',
		false,
		'Voidstone cannot be constructed without great effort. Instead it is quarries and mined in the caverns that the Void Drow live in.'
	);
	require $startDir.'pageEnd.php';
?>