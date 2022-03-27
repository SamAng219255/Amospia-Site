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
		'Stoiw',// Name
		'Evocation',// School
		21,// CL
		'none',// Slot
		'—',// Price
		8,// Weight
		'One of the three artifacts created in combination of the magic of one the Narmen Sects and the power of the Arkon. This ii/+10 flaming glorious holy greatsword/ii is made from as/special_materials_am|Rune Inscribed Gold|rune inscribed gold/as that empowers the runic enchantments that it bears. While wielding this blade the wielder is empowered granting a +10 untyped bonus to all physical stats, +10 deflection bonus, and a +5 luck bonus to all skills and saves. When making a full attack action with the sword, the wielder can make an additional atack at their full base attack bonus against each target within range that wasn\'t successfully hit by a previous attack.
		The save DC against the sword\'s ii/glorious/ii weapon quality is increased from the normal DC to 30. Additionally, the light from the weapon cannot be suppressed by any effect and if the blade enters the area of any darkness effect the darkness effect immediately ends.',// Desc
		true,// Destruction
		'Should the sword be used by a fiend to slay an exceptionally power celestial, the light will flicker out and all of the magical effects, including those of the rune inscribed gold, will end and the sword will revert to a lump of roughly sword shaped gold.'// Construction
	);
	require $startDir.'pageEnd.php';
?>