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
		'aa/alidens|Alidensi/aa can be included when forging sword-like weapons. Such weapons are always made to be masterwork and inherit the magical properties of the alidens used. Including a tusk as such a weapon costs the same amount in material components as normal for the enchantments given but does not require a skill check or the ability to craft magic weapons.
		Only sword-like weapons of sufficient blade length (around 3 ft) may be made into an ii/aliden blade/ii. This list includes bastard swords, elven curve blades, falchions, greatswords, longswords, rapiers, scimitars, and two-bladed swords. Construction of double weapon ii/aliden blades/ii may require that multiple alidensi are used, one for each blade that receives the bonuses. If multiple alidensi are in a single weapon, either due to the double property or for other reasons, they must all be the same alignment, if not, the magic is not transferred to the blade. Additionally, the enchantments can only be applied to it once and do not stack with multiple alidensi.
		When creating or improving the blade, the properties inherited from the alidens cannot be removed, however they can have their blessed energies corrupted or their evil ones purged. ii/Aliden blades/ii made with non-infused alidensi can have either the ii/unholy/ii or ii/holy/ii properties to them to convert their ii/bane/ii property to good-outsiders or evil-outsiders respectively. Ones with infused alidensi or with the ii/holy/ii or ii/unholy/ii properties can be made into ii/ aa/corrupted_enchant|corrupted/aa /ii or ii/redeemed/ii weapons, switching their bane property to good-outsiders or evil-outsiders respectively.',
		false,
		'bb/Requirements/bb the alidens to be included; +4,000 gp, +16,000 gp (Infused)'
	);
	require $startDir.'pageEnd.php';
?>