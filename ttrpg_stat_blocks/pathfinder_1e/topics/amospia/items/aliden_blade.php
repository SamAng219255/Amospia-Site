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
		'Aliden Blade',
		'Moderate Conjuration or Moderate Evocation',
		'8th',
		'none',
		'+2 bonus, +4 bonus gp (Infused)',
		'varies',
		'aa/alidens|Alidensi/aa can be included when forging sword-like weapons. Such weapons are always made to be masterwork and inherit the magical properties of the Alidens used. Including a tusk as such a weapon costs the same amount in material components as normal for the enchantments given but does not require a skill check or the ability to craft magic weapons.
		Only sword-like weapons of sufficient blade length (around 3 ft) may be made into an Aliden Blade. This list includes bastard swords, elven curve blades, falchions, greatswords, longswords, rapiers, scimitars, and two-bladed swords. Construction of double weapon Aliden Blades may require that multiple Alidensi are used, one for each blade that receives the bonuses. If multiple Alidensi are in a single weapon, either due to the double property or for other reasons, they must all be the same alignment, if not, the magic is not transferred to the blade. Additionally, the enchantments can only be applied to it once.',
		false,
		'bb/Requirements/bb the alidens to be included; +4,000 gp, +16,000 gp (Infused)'
	);
	require $startDir.'pageEnd.php';
?>