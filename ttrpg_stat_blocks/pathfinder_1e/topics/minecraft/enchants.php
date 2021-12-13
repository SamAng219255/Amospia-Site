<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<title>Enchantments</title>
<?php
	block(
		'Enchantments',
		'intro',
		[
			'Enchantments are the key to getting more out of your armor and weapons. In Minecraft you have the ability to apply differing enchantments to each piece of your armor with some being locked one slot. As Pathfinder lacks this concpet of piecemeal armor, magic effects are applied to the armor as a whole. Some enchantments from Minecraft, which are designed for tools, are not represented here though some have been made into wondrous items. The looting enchantment has also not been included due to system incompatibilities. All other enchantments from Minecraft have been listed below for clarity and completeness though some will refer to existing armor and weapon properties and three enchantments (protection, sharpness, and power) I have judged to be equivalent to enhancement bonuses.'
		]
	);
	contents(
		[
			'Aqua Affinity',
			'Blast Protection',
			'Curse of Binding',
			'Curse of Vanishing',
			'Depth Strider',
			'Feather Falling',
			'Fire Protection',
			'Mending',
			'Projectile Protection',
			'Protection',
			'Respiration',
			'Soul Speed',
			'Thorns',
			'Unbreaking'
		],
		'Armor Enchantments',
		true
	);
	contents(
		[
			'Bane of Arthropods',
			'Curse of Vanishing',
			'Efficiency',
			'Fire Aspect',
			'Frost Walker',
			'Impaling',
			'Knockback',
			'Mending',
			'Riptide',
			'Sharpness',
			'Silk Touch',
			'Smite',
			'Sweeping Edge',
			'Unbreaking'
		],
		'Melee Weapon Enchantments',
		false
	);
	contents(
		[
			'Bane of Arthropods',
			'Channeling',
			'Curse of Vanishing',
			'Efficiency',
			'Flame',
			'Impaling',
			'Infinity',
			'Loyalty',
			'Mending',
			'Multishot',
			'Piercing',
			'Improved Piercing',
			'Greater Piercing',
			'Power',
			'Punch',
			'Quick Charge',
			'Smite',
			'Unbreaking'
		],
		'Ranged Weapon Enchantments',
		false
	);
	contents(
		[
			'Curse of Binding',
			'Curse of Vanishing',
			'Mending',
			'Unbreaking'
		],
		'Shield Enchantments',
		false
	);
	magicItemBlockAuto(
		'Aqua Affinity',// Name
		'Transmutation',// School
		5,// CL
		'armor quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'Your armor allows you to make motions underwater without impediment. While this does not aid your ability to move around, it does prevent the -2 penalty on attack rolls and the damage reduction for fighting underwater.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/freedom of movement/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Bane of Arthropods',// Name
		'Conjuration',// School
		7,// CL
		'weapon quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'A ii/bane of arthropods/ii weapon excels at finding the spots between an arthropod\'s plated exoskeleton. Against arthropods, the weapon\'s enhancement bonus is +2 better than its actual bonus and it deals an extra 2d6 points of damage. When an arthropod is struck by a ii/bane of arthropods/ii weapon it becomes staggered for 1 round and can only take a single standard or move action.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/summon minor monster/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Blast Protection',// Name
		'Abjuration',// School
		3,// CL
		'armor quality',// Slot
		'+1 bonus',// Price
		'—',// Weight
		'Armor with this property creates a momentary barrier in response to incoming waves of energy granting the wearer a bonus equal to its enhancement bonus to saves against instantaneous spells and effects with that effect an area.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/resistance/ii; bb/Cost/bb +1 bonus'// Construction
	);
	magicItemBlockAuto(
		'Channeling',// Name
		'Transmutation',// School
		5,// CL
		'weapon quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'Only thrown weapons can receive the ii/channeling/ii enchantment. When thrown, a ii/channeling/ii weapon becomes sheathed in crackling electricity that deals an extra 1d6 points of electricity damage on a successful hit. If wherever a ii/channeling/ii weapon lands is outdoors and in a stormy area – a rain shower, clouds and wind, hot and cloudy conditions, or even a tornado (including a whirlwind formed by a djinni or an air elemental of at least Large size) – it instead calls down a 5-foot-wide, 30-foot-long, vertical bolt of lightning that deals 2d10 points of electricity damage. If the weapon successfully strikes its target, they do not get a save. Otherwise, a creature in the bolt can make a DC 14 reflex save to reduce the damage taken by half.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/call lightning/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Curse of Binding',// Name
		'Transmutation',// School
		7,// CL
		'magic item quality',// Slot
		'+1,000 gp',// Price
		'—',// Weight
		'ii/Curse of binding/ii can be applied to any magic item that can be worn including magic armor with at least a +1 enhancement bonus. The most simple and annoying curse. Any wearable item enchanted with ii/curse of binding/ii cannot be removed once equipped. This is a curse effect and cannot be dispelled, but it can be removed with a ii/break enchantment/ii, ii/limited wish/ii, ii/miracle/ii, ii/remove curse/ii, or ii/wish/ii spell.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/bestow curse/ii; bb/Cost/bb +1,500 gp'// Construction
	);
	magicItemBlockAuto(
		'Curse of Vanishing',// Name
		'Transmutation',// School
		13,// CL
		'magic item quality',// Slot
		'+8,000 gp',// Price
		'—',// Weight
		'ii/Curse of vanishing/ii can be applied to any magic item including magic weapons and armor with at least a +1 enhancement bonus. An odd curse, if the owner of an item enchanted with ii/curse of vanishing/ii dies the item is completely destroyed and reduced to dust. This effect occurs the moment the owner takes fatal damage before effects activate that would save them from death. A creature must be in possession of a ii/curse of vanishing/ii item for 24 hours before it they are counted as its owner. If the item leaves their possession for longer than 24 hours they are no longer considered its owner. ii/Curse of vanishing/ii is often placed on items when the owner doesn\'t want it found after they die.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/break, greater/ii; bb/Cost/bb +4,000 gp'// Construction
	);
	magicItemBlockAuto(
		'Depth Strider',// Name
		'Transmutation',// School
		7,// CL
		'armor quality',// Slot
		'+1 bonus',// Price
		'—',// Weight
		'This armor is designed to ease movement while underwater. While wearer armor with ii/depth strider/ii your speed is not reduced for being underwater.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/freedom of movement/ii; bb/Cost/bb +1 bonus'// Construction
	);
	magicItemBlockAuto(
		'Efficiency',// Name
		'Transmutation',// School
		1,// CL
		'weapon quality',// Slot
		'+1 bonus',// Price
		'—',// Weight
		'This enchantment aids with breaking inanimate objects. Weapons with this enchantment treat the hardness of unattended inanimate objects as being reduced by an amount equal twice the enhancement bonus of the weapon and deal an additional 2d6 points of damage against such targets.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/break/ii; bb/Cost/bb +1 bonus'// Construction
	);
	magicItemBlockAuto(
		'Feather Falling',// Name
		'abjuration',// School
		3,// CL
		'armor quality',// Slot
		'+1 bonus',// Price
		'—',// Weight
		'While whearing this armor you reduce damage from falling by half.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/feather fall/ii; bb/Cost/bb +1 bonus'// Construction
	);
	magicItemBlockAuto(
		'Fire Aspect',// Name
		'Evocation',// School
		12,// CL
		'weapon quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'This enchantment functions as the ii/igniting/ii property.
		A ii/fire aspect/ii weapon functions as a flaming weapon that also causes the target to catch fire upon striking it with a successful critical hit. The target does not get a saving throw to avoid catching fire, but can make a save each round on its turn to put out the fire. The flaming ability must be active for the weapon to set enemies on fire.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/flame blade/ii, ii/flame strike/ii, or ii/fireball/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Fire Protection',// Name
		'Abjuration',// School
		6,// CL
		'armor quality',// Slot
		'+18,000 gp',// Price
		'—',// Weight
		'This enchantment functions as the ii/energy resistance/ii (fire) property.
		A suit of armor or a shield with this special ability protects against fire and is designed with patterns depicting the element it protects against. The armor absorbs the first 10 fire damage per attack that the wearer would normally take (similar to the resist energy spell).',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/resist energy/ii; bb/Cost/bb +9,000 gp'// Construction
	);
	magicItemBlockAuto(
		'Flame',// Name
		'Evocation',// School
		12,// CL
		'weapon quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'This enchantment functions as the ii/igniting/ii property.
		A ii/flame/ii weapon functions as a flaming weapon that also causes the target to catch fire upon striking it with a successful critical hit. The target does not get a saving throw to avoid catching fire, but can make a save each round on its turn to put out the fire. The flaming ability must be active for the weapon to set enemies on fire.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/flame blade/ii, ii/flame strike/ii, or ii/fireball/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Frost Walker',// Name
		'Evocation',// School
		7,// CL
		'armor quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'A wave of cold spreads from the feet of the creature wearing this armor turning water into ice. The ice spreads across the surface of water up to 10 feet from the creature. The ice is hard, strong, and opaque, and is 6 inches thick. Each area of ice can support as many creatures of whatever size as can ordinarily fit in the area without squeezing. If the creature wearing this armor moves more than 10 feet away from a square of ice it melts after 3d6 rounds. This armor also allows the wearer to walk across ice without issue.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/creeping ice/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Impaling',// Name
		'Conjuration',// School
		8,// CL
		'weapon quality',// Slot
		'+1 bonus',// Price
		'—',// Weight
		'An ii/impaling/ii weapon excels against aquatic foes. Against creatures of the aquatic subtype, the weapon\'s enhancement bonus is +2 better than its actual bonus and it deals an extra 2d6 points of damage.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/summon monster I/ii; bb/Cost/bb +1 bonus'// Construction
	);
	magicItemBlockAuto(
		'Infinity',// Name
		'Conjuration',// School
		9,// CL
		'weapon quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'This enchantment functions as the ii/endless ammunition/ii property.
		Only bows and crossbows can be made into endless ammunition weapons—firearms and other projectile weapons cannot. Each time an endless ammunition weapon is nocked, a single nonmagical arrow or bolt is spontaneously created by the magic, so the weapon\'s wielder never needs to load the weapon with ammunition.
		If the wielder attempts to load the weapon with other ammunition, the created arrow or bolt immediately vanishes and the wielder can load the weapon as normal. This ability does not reduce the amount of time required to load or fire the weapon. The created arrow or bolt vanishes if removed from the weapon; it persists only if fired. Unlike normal bow and crossbow ammunition, these arrows and bolts are always destroyed when fired.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/minor creation/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Knockback',// Name
		'Evocation',// School
		5,// CL
		'weapon quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'This enchantment can only be applied to bludgeoning or slashing melee weapons. Blows from this weapon tend to throw opponents backward. Whenever you hit with an attack with this weapon you may make a bull rush attempt using your as a free action adding this weapon\'s enhancment bonus to your CMB. If you make a full attack using this weapon you can attempt a check after every hit but the target does not move until after your attack finishes and only the highest check determines success. You cannot choose to move with the creature when you perform this bull rush.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/battering blast/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Loyalty',// Name
		'Transmutation',// School
		7,// CL
		'weapon quality',// Slot
		'+1 bonus',// Price
		'—',// Weight
		'This special ability can only be placed on a weapon that can be thrown. A ii/loyalty/ii weapon flies through the air back to the creature that threw it. It returns to the thrower just before the creature\'s next turn (and is therefore ready to use again in that turn). Catching a ii/loyalty/ii weapon when it comes back is a free action. If the character can\'t catch it the weapon drops to the ground in the square the character is in. The weapon will attempt to fly back to the character wherever the character is. If the character is more than 10 times the range increment of the weapon away, or is in a another dimension, the weapon instead returns to the square it was thrown from.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/telekinesis/ii; bb/Cost/bb +1 bonus'// Construction
	);
	magicItemBlockAuto(
		'Mending',// Name
		'Transmutation',// School
		5,// CL
		'magic item quality',// Slot
		'+12,000 gp',// Price
		'—',// Weight
		'ii/Mending/ii can be applied to any magic item including magic weapons and armor with at least a +1 enhancement bonus. Objects given the ii/mending/ii enchantment have an uncanny ability to restore themselves as their owners grow more powerful. Whenever a character wielding a weapon, wearing armor, or othereise carrying or using an item with the ii/mending/ii would gain experience (gernerally from enemies being defeated) the item gains 1d6 hit points plus an additional 1d6 hit points per two hit dice of the character over the first.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/make whole/ii; bb/Cost/bb +6,000 gp'// Construction
	);
	magicItemBlockAuto(
		'Multishot',// Name
		'Conjuration',// School
		5,// CL
		'weapon quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'This special ability can only be placed on crossbows. A weapon cannot be given the ii/multishot/ii quality if it possesses the ii/piercing/ii, ii/improved piercing/ii, or ii/greater piercing/ii qualities. When you make an attack with ii/multishot/ii crossbow, you may split the bolt and make up to two additional attacks against different creatures. These two attacks must be be made against against a different creature than the original target and must be different than each other. These attacks can only be made against creatures in a cone facing the original target whose length extends to the end of the range increment the original target was in. These attacks are made with all the bonuses and penalties of the original, with the exception of any spells or other limited-use magical effects that you used to enhance that particular attack, but at a -5 penalty. The attacks are made with identical bolts to the original attack.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/arrow eruption/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Piercing',// Name
		'Transmutation',// School
		6,// CL
		'weapon quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'This special ability can only be placed on crossbows. A weapon cannot be given the ii/piercing/ii quality if it possesses the ii/multishot/ii quality. When you make an attack with this crossbow draw a straight line from the target extending away from you. This line extends for two range increments. You can designate as many creatures in this line beside the original target as you want, but you take a -2 penalty to your attack for each target you designate. The nearest two designated creatures, including the target, whose AC is less than or equal to your attack roll are both hit by your attack. If a spell or other limited-use magical effect is augmenting the damage from your attack, it only applies to the nearest target hit. Otherwise both targts take the same damage.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Improved Piercing',// Name
		'Transmutation',// School
		6,// CL
		'weapon quality',// Slot
		'+3 bonus',// Price
		'—',// Weight
		'This special ability can only be placed on crossbows. A weapon cannot be given the ii/improved piercing/ii quality if it possesses the ii/multishot/ii quality.
		This enchantment functions as the ii/piercing/ii enchantment except the line extends for three range increments and the nearest three designated creatures, including the target, whose AC is less than or equal to your attack roll are hit by your attack.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor; bb/Cost/bb +3 bonus'// Construction
	);
	magicItemBlockAuto(
		'Greater Piercing',// Name
		'Transmutation',// School
		6,// CL
		'weapon quality',// Slot
		'+4 bonus',// Price
		'—',// Weight
		'This special ability can only be placed on crossbows. A weapon cannot be given the ii/greater piercing/ii quality if it possesses the ii/multishot/ii quality.
		This enchantment functions as the ii/piercing/ii enchantment except the line extends for four range increments and the nearest four designated creatures, including the target, whose AC is less than or equal to your attack roll are hit by your attack.',
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor; bb/Cost/bb +4 bonus'// Construction
	);
	magicItemBlockAuto(
		'Power',// Name
		'Evocation',// School
		'varies',// CL
		'weapon quality',// Slot
		'varies',// Price
		'—',// Weight
		'This enchantment functions as an enhancement bonus for ranged weapons. This enchantment can only be placed on ranged weapons. This enchantment can be placed on any masterwork ranged weapon whether or not it already has an enhancement bonus. This enhancement stacks with any existing enhancement bonuses the weapon has and cannot increase the total enhancement bonus over the maximum limit. This enchantment can otherwise grant any degree of enhancement bonus and the cost is equal to adding an enhancement bonus of the same degree. ii/Power/ii properties are generally written with the bonus in roman numerals following the property. (i.e. ii/power II/ii for a +2 bonus)',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/magic weapon/ii or ii/magic weapon, greater/ii; bb/Cost/bb varies'// Construction
	);
	magicItemBlockAuto(
		'Projectile Protection',// Name
		'Abjuration',// School
		5,// CL
		'armor quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'This armor protects the wielder as if he had the Deflect Arrows feat. Once per round when he would normally be struck by a ranged weapon, he can make a DC 20 Reflex save. If the ranged weapon (or piece of ammunition) has an enhancement bonus, the DC increases by that amount. If he succeeds, the armor deflects the weapon. He must be aware of the attack and not flat-footed. Attempting to deflect a ranged weapon doesn\'t count as an action. Exceptional ranged weapons, such as boulders hurled by giants or ii/acid arrows/ii, can\'t be deflected.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/shield/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Protection',// Name
		'Abjuration',// School
		'varies',// CL
		'armor quality',// Slot
		'varies',// Price
		'—',// Weight
		'This enchantment functions as an enhancement bonus for armor. This enchantment can be placed on any masterwork armor whether or not it already has an enhancement bonus. This enhancement stacks with any existing enhancement bonuses the armor has and cannot increase the total enhancement bonus over the maximum limit. This enchantment can otherwise grant any degree of enhancement bonus and the cost is equal to adding an enhancement bonus of the same degree. ii/Protection/ii properties are generally written with the bonus in roman numerals following the property. (i.e. ii/protection II/ii for a +2 bonus)',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/mage armor/ii; bb/Cost/bb varies'// Construction
	);
	magicItemBlockAuto(
		'Punch',// Name
		'Evocation',// School
		5,// CL
		'weapon quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'Projectiles from this weapon tend to throw opponents backward. Whenever you hit with an attack with this weapon you may make a bull rush attempt using your as a free action adding this weapon\'s enhancment bonus to your CMB. If you make a full attack using this weapon you can attempt a check after every hit but the target does not move until after your attack finishes and only the highest check determines success. You cannot choose to move with the creature when you perform this bull rush.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/battering blast/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Quick Charge',// Name
		'Transmutation',// School
		5,// CL
		'weapon quality',// Slot
		'+1 bonus',// Price
		'—',// Weight
		'This special ability can only be placed on crossbows or firearms. This crossbow can be reloaded as if the wielder had the Rapid Reload feat. The time required for them to reload this weapon is reduced to a free action (for a hand or light crossbow), a move action (for heavy crossbow or one-handed firearm), or a standard action (two-handed firearm). Reloading this weapon still provokes attacks of opportunity. If this weapon a hand crossbow or light crossbow, the wielder may fire this weapon as many times in a full-attack action as they could attack if they were using a bow.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/reloading hands/ii; bb/Cost/bb +1 bonus'// Construction
	);
	magicItemBlockAuto(
		'Respiration',// Name
		'Transmutation',// School
		5,// CL
		'armor quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'This enchantment allows the creature limited ability to breath in airless environments. This ability can sustain the wearer for a number of rounds equal to two times their constitution score after which they must hold their breath or seek air to avoid suffocation or drowning. This duration resets when the creature is in breathable air.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/water breathing/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Riptide',// Name
		'Transmutation',// School
		7,// CL
		'weapon quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'This enchantment can be placed on melee piercing weapons. As long as you are in water or heavy rain you can activate this ability as a standard action launching yourself, weapon forward, in a direction. You move 60 feet in any direction, including up and down, but only in a straight line. You can pass through any creatures in your path and any creature you pass through you can roll an attack against using this weapon. You provoke attacks of opportunity as normal along this movement. This ability overwise counts as an overrun combat maneuver.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/hydraulic torrent/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Sharpness',// Name
		'Evocation',// School
		'varies',// CL
		'weapon quality',// Slot
		'varies',// Price
		'—',// Weight
		'This enchantment functions as an enhancement bonus for melee weapons. This enchantment can only be placed on melee weapons. This enchantment can be placed on any masterwork melee weapon whether or not it already has an enhancement bonus. This enhancement stacks with any existing enhancement bonuses the weapon has and cannot increase the total enhancement bonus over the maximum limit. This enchantment can otherwise grant any degree of enhancement bonus and the cost is equal to adding an enhancement bonus of the same degree. ii/Sharpness/ii properties are generally written with the bonus in roman numerals following the property. (i.e. ii/sharpness II/ii for a +2 bonus)',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/magic weapon/ii or ii/magic weapon, greater/ii; bb/Cost/bb varies'// Construction
	);
	magicItemBlockAuto(
		'Silk Touch',// Name
		'conjuration',// School
		5,// CL
		'weapon quality',// Slot
		'+1 bonus',// Price
		'—',// Weight
		'This enchantment functions as the ii/merciful/ii property with the following additions.
		A ii/silk touch/ii weapon deals an extra 1d6 points of damage, but all damage it deals is nonlethal damage. This weapon is capable of dealing non-lethal damage to creature normally immune to non-lethal damage. The target of an attack with a ii/silk touch/ii weapon suffers no physical injuries or damage to themself or their equipment. On command, the weapon suppresses this ability until told to resume it (allowing it to deal lethal damage, but without any bonus damage from this ability).',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/cure light wounds/ii; bb/Cost/bb +1 bonus'// Construction
	);
	magicItemBlockAuto(
		'Smite',// Name
		'Evocation',// School
		5,// CL
		'weapon quality',// Slot
		'+1 bonus',// Price
		'—',// Weight
		'A ii/smite/ii weapon is imbued with holy power. This power makes the weapon good-aligned and thus bypasses the corresponding damage reduction. Against undead, the weapon\'s enhancement bonus is +2 better than its actual bonus. It also deals an extra 2d6 points of damage against undead.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/searing light/ii; bb/Cost/bb +1 bonus'// Construction
	);
	magicItemBlockAuto(
		'Soul Speed',// Name
		'Necromancy',// School
		6,// CL
		'armor quality',// Slot
		'+1 bonus',// Price
		'—',// Weight
		'A rather situational and almost perverse enchantment, armor with the ii/soul speed/ii enchantment takes energy from the concentrated and corrupted souls found in soul sand and soul soil in the Nether to increase the wearers speed. You no longer treat soul sand as difficult terrain and your speed is increased 50% while on soul sand or soul soil.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/death knell/ii; bb/Cost/bb +1 bonus'// Construction
	);
	magicItemBlockAuto(
		'Sweeping Edge',// Name
		'Transmutation',// School
		8,// CL
		'weapon quality',// Slot
		'+2 bonus',// Price
		'—',// Weight
		'This special ability can only be placed on melee weapons. A ii/sweeping edge/ii weapon allows a wielder using the Cleave feat to make one additional attack if the first attack hits, as long as the next foe is adjacent to the first and also within reach. This additional attack cannot be against the first foe. This weapon also deals an extra 1d6 damage to all targets when using the Cleave feat.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/divine power/ii; bb/Cost/bb +2 bonus'// Construction
	);
	magicItemBlockAuto(
		'Thorns',// Name
		'Transmutation',// School
		9,// CL
		'armor quality',// Slot
		'+3 bonus',// Price
		'—',// Weight
		'Any creature that deals damage to the wearer of this armor, before applying defensive abilities such as immunity, resistance, and DR, automatically take 1d6 points of force damage to a maximum of the damage dealt to the wearer before applying defensive abilities such as immunity, resistance, and DR. This damage is increased by the enhancement bonus of the armor after applying the maximum.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor; bb/Cost/bb +3 bonus'// Construction
	);
	magicItemBlockAuto(
		'Unbreaking',// Name
		'Transmutation',// School
		6,// CL
		'magic item quality',// Slot
		'+3,000 gp',// Price
		'—',// Weight
		'ii/Unbreaking/ii can be applied to any magic item including magic weapons and armor with at least a +1 enhancement bonus. An ii/unbreaking/ii item is warded from damage and decay. A metallic item cannot rust and a wooden item cannot rot or warp, even by magical or supernatural means. An impervious item gains double the normal bonus to its hardness and hit points for each point of its enhancement bonus. The break DC for an impervious item and the wielder\'s combat maneuver defense against sunder maneuvers against the impervious item each gain a bonus equal to twice the item\'s enhancement bonus and it gains a bonus on saving throws against direct attacks (such as a rust monster\'s rust ability) equal to its enhancement bonus.',// Desc
		false,// Destruction
		'bb/Requirements/bb Craft Magic Arms and Armor, ii/waterbreathing/ii; bb/Cost/bb +1,500 gp'// Construction
	);
	require $startDir.'pageEnd.php';
?>