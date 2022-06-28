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
		'Illusory Glove, Ethereal',
		'Illusion',
		17,
		'Focus',
		'9,300 gp (3rd), 29,300 gp (6th), 78,800 gp (9th)',
		'—',
		'This glove comes in two varieties, an ethereal plain white glove woven from phase spider silk and a shadowy black glove woven from pure shadow. This glove acts as a casting focus and both makes it harder to notice when you perform a spell and harder to magically identify your illusions as such.
		The ethereal threads of your gloves obscure details of hands when casting spells of the illusion school granting a competence bonus to Sleight of Hand checks to draw a palmed material, focus, or divine focus component (normally DC 20), allowing you to perform a Sleight of Hands check to secretly perform necessary somatic components opposed by Perception checks from onlookers (assume unaware onlookers take 10 on their check), and enabling you cast a spell that normally has a verbal component without that component by increasing the casting time to a full-round action or by spending an extra full-round action if the casting time is normally one full-round action or longer.
		Whenever a spell, spell-like ability, or supernatural ability is used to detect, detect the magic aura of, or otherwise identify one of your illusions cast using this glove (such as using ii/detect magic/ii or ii/true sight/ii), the caster of the spell or spell-like effect or user of the supernatural ability must make a caster level check against a DC equal to 10 plus your caster level plus any enhancement bonuses that are applied to your gloves.
		This glove is limited to what spells it can affect, it can only affect spells, and the casting of those spells, up to its max level of 3rd, 6th, or 9th. Gloves with a max level of 3rd grant a +5 bonus to Sleight of Hand to draw a component, gloves with a max level of 6th grant a +10 bonus, and gloves with a max level of 9th grant a +20 bonus.
		The material of this glove is thin and it can be worn under a pair of magic gloves without taking up the slot. It does place an ethereal layer around your hand that makes finely wielding any implement impossible. Items weighing more than one pound can be carried but cannot be wielded though objects weighing one pound or less can be wielded but you are never considered proficient in them.
		These gloves can be modified for 4,500 gp to grant the wearer a +10 competence bonus on Sleight of Hand checks that stacks with the glove\'s bonus when casting a spell.',
		false,
		'bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb 4,650 gp (3rd), 14,650 gp (6th), 39,400 gp (9th)
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/blur/ii; bb/Cost/bb 4,500 gp'
	);
	require $startDir.'pageEnd.php';
?>