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
	advAlchemySimpleBlock(
		'Draught of True Form',// Name
		'Imbibed',// Form
		[],// Descriptors
		3,// Level
		'instantaneous',// Duration
		'Fortitude Negates or Will Negates; see text',// Saving Throw
		'This potion is normally clear but when exposed to the slightest heat, such as the warmth of creature\'s hand when holding the vial, it rapidly becomes opaque and slowly alternates between many different colors. Polymorph spells, at their core, do not fully convert one creature to another. Rather they adapt the subject\'s form to take on aspects of the chosen form. This potion takes advantage of that and works with the drinker\'s body\'s systems to override the magical modifications and restore it to its original form. This does not regrow lost limbs or otherwise heal damage, only counteract the magically imposed form.
		When drunk, any polymorph effects on the drinker are immediately dispelled. If the drinker does not have the shapechanger subtype and was polymorphed by a spell, they also take 1d8 points of non-lethal damage per level of the spell.
		When drunk by an undead, the mixture gives a Will saving throw to resist its effects instead of a Fortitude saving throw, as their form is maintained by their will instead of their health.' // Description
	);
	require $startDir.'pageEnd.php';
?>