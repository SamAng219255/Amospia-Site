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
		'Alidens',
		'Moderate Conjuration or Moderate Evocation',
		'8th',
		'none',
		'8,000 gp, 32,000 gp (Infused)',
		3,
		'With the loss of the magical inscriptions that once covered their form, the Narmen\'s innate magical power found another outlet in the form of the long tusk they gained when they performed the spell to make them aquatic known as an Alidens, plural Alidensi. This tusk, once removed, acts a ii/+1 Bane Rapier/ii, which possesses the alignment of the Narman from which it was taken, except that it requires Exotic Weapon Proficiency to be proficient in it. Darkened and Demonic Narmen have Alidensi that possess Bane (good-outsiders) while all other have Bane (evil-outsiders). Additionally, infused sub-species (Demonic or Saints) have another enchantment, either Holy or Unholy depending on whether they are Demonic or Saints respectively and have an aura of moderate evocation instead.
		These properties can only be accessed if the wielder is aware of them, either by a sucessful Spellcraft check to identify the item, or by being informed via another source.',
		false,
		'Alidensi are not contructed. Rather, an alidens is the tusk of a narman. When a narmen dies their tusk inherits their magic.'
	);
	require $startDir.'pageEnd.php';
?>