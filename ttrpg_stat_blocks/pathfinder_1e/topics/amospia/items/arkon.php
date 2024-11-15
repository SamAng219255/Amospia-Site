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
		'The Arkon',// Name
		'Evocation',// School
		30,// CL
		'none',// Slot
		'—',// Price
		5,// Weight
		[
			'This ii/+5 holy knockback arkonite warhammer/ii has a large head that is suspended within a frame with several smaller fragments around it. Despite not being physically connected, all the components are firmly attached.',
			'The wielder of this hammer is filled with heroic might that feeds off of and empowers their own holiness to become focused into a powerful weapon against evil. The ii/Arkon/ii normally deals 2d8 damage but a neutral or good aligned wielder can make a single attack with the hammer as a standard action that deals 5 times as much damage if they are neutral or 10 times as much damage if they are good aligned. This also multiplies the added damage from the holy property but it does not multiply damage from other sources such as the enhancement bonus or the wielder\'s Strength modifier. On a critical hit, the damage is multiplied separately after applying the weapon\'s properties. Attacks with the ii/Arkon/ii, bypass all DR except for DR chaotic, evil, or — and suppress the regeneration of any evil creature for 1 minute or 10 rounds. Creatures with effective immortality that can be overcome with good, silver, or positive energy damage or by sunlight that are reduced to 0 hit points by the ii/Arkon/ii are slain as though fatally exposed to their weakness. Evil-aligned, non-mythic creatures with other forms of effective immortality are similarly slain if reduced to 0 hit points even if their immortality does not have a listed weakness. Deific entities that are not listed as mythic, such as The Dark One, are also immune to this effect.',
			'The ii/Arkon/ii can also act as a beacon. While active, allies within a 120-foot-radius burst gain a +6 enhancement bonus to Wisdom. Good aligned allies in the area also receive an equal enhancement bonus to Strength and Constitution. Evil aligned enemies in the region must make a DC 33 Will save or else be shaken as long as they remain in the area.',
			'A creature wielding the hammer can spend 8 hours meditating with the hammer to manifest an arkonite crystal weighing 1 ounce. The hammer can only manifest 1 crystal a day. On following days, instead of manifesting a new crystal, an additional ounce of crystal can be formed. If the wielder focuses on a given weapon shape, after the crystal has grown to the weight of that weapon, a creature can use it as the material to craft an arkonite weapon. If a check is failed by 5 or more and half of the material is wasted, half of the weight of the crystal is ruined and additional time must be spent in meditation to recover the lost amount.',
			'Arkonite weapons similarly reinforce and weaponize the holiness of the wielder. Good aligned creatures wielding an arkonite weapon can make a single attack as a standard action that deals 5 times the weapon damage. This does not multiply damage that would not be multiplied on a critical hit or from static bonuses. On a critical hit, the damage is multiplied again.'
		],// Desc
		true,// Destruction
		'The head must be bathed in pure concentrated void energy and held there for 6 hours. After which, the crystalline head rapidly melts away leaving the mind stone untouched.'// Construction
	);
	require $startDir.'pageEnd.php';
?>