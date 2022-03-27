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
		'This ii/+5 holy as/enchants_mc|Knockback|knockback/as as/special_materials_am|Arkonite|arkonite/as warhammer/ii has a large head that is suspended within a frame with several smaller fragments around it. Despite not being physically connected, all the components are firmly attached. Any fiend, undead, or evil aligned creature that is struck by this hammer is instantly destroyed, bursting with light leaving only a pile of ash behind. Creatures that are neither good nor evil take 800 weapon damage instead of the 10d8 normal for a arkonite warhammer.
		A creature wielding the hammer can spend 8 hours meditating with the hammer to manifest an arkonite crystal weighing 1 ounce. The hammer can only manifest 1 crystal a day. On following days, instead of manifesting a new crystal, an additional ounce of crystal can be formed. If the wielder focuses on a given weapon shape, after the crystal has grown to the weight of that weapon, a creature can use it as the material to craft an arkonite weapon. If a check is failed by 5 or more and half of the material is wasted, half of the weight of crystal is ruined and additional time must be spent in meditation to receover the lost amount.',// Desc
		true,// Destruction
		'The head must be bathed in pure concentrated void energy and held there for 6 hours.'// Construction
	);
	require $startDir.'pageEnd.php';
?>