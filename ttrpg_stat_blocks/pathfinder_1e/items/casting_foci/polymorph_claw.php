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
?>
<?php
	magicItemBlockAuto(
		'Blessed Claw',
		'Transmutation',
		5,
		'Focus',
		5000,
		'—',
		'While normally this artifact takes the form of a claw, it can be created from any hard and sharp item taken from the body of an animal or magical beast such as a talon, fang, or beak. The item is then attached to a piece of leather strapped to the palm of the wearer\'s hand.
		While wearing this item while under the effects of a polymorph effect, the caster receives a +5 bonus to concentration checks to cast spells in combat plus any enhancement bonus possessed by the item.
		This item can be upgraded to empower the wearer\'s natural attacks. This grants the wearer a +1 enhancement bonus on attack rolls with one natural attack chosen when the wearer puts on the item or when the wearer is placed under a polymorph effect reverting to the previous choice when it ends. Once upgraded, the item can be enchanted as a melee weapon with the melee weapon enchantments applying to the effected natural attack. The Enhancement bonuses do not stack. Alternatively, the item can be upgraded for twice the normal cost to grant its effects to all natural weapons possessed by the wearer. This also doubles the cost of enchantments to the melee weapon functionality after the price is reduced for overlapping enchantments.',
		false,
		'bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb 2,500 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/greater magic fang/ii; bb/Cost/bb 150 gp, see text'
	);
	require $startDir.'pageEnd.php';
?>