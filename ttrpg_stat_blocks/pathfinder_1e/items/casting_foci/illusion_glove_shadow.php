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
		"Illusory Glove, Shadowy",
		"Illusion",
		17,
		"Focus",
		"(3rd) 5,000 gp, (6th) 18,300 gp, (9th) 40,800 gp",
		"—",
		"This glove comes in two varieties, a plain white glove woven from phase spider silk and a black glove woven from pure shadow.
		This shadowy glove acts as a casting focus and increases how real the effects of shadow spells you cast with the glove are by 20%.
		The material of this glove is thin and it can be worn under a pair of magic gloves without taking up the slot. It does place an ethereal layer around your hand that makes finely wielding any implement impossible. Items weighing more than one pound can be carried but cannot be wielded though objects weighing one pound or less can be wielded but you are never considered proficient in them.
		These gloves can be modified for 4,500 gp to grant the wearer a +10 competence bonus on sleight of hand checks.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (3rd) 2,500 gp, (6th) 9,150 gp, (9th) 20,400 gp gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/blur/ii; bb/Cost/bb 4,500 gp"
	);
	require $startDir.'pageEnd.php';
?>