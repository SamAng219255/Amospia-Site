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
	raceSFBlock(
		"Hylagir", // $name=''
		[
			"Hylagir are descendants of angels that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'str' => +2,
			'wis' => +2,
			'int' => -2
		], // $stats=[]
		4, // $hp=0
		"Hylagir are Medium humanoids with the sowanaz subtype.", // $size_type=''
		[
			"Angelic Resistances" => "Hylagir gain resistance to acid and cold 5 and a +2 bonus to saves against petrification.",
			"Celestial Skills" => "Hylagir gain a +2 bonus to Diplomacy and Mysticism checks.",
			"Hylagir Movement" => "Hylagir have a 30-foot land speed and a 20-foot extraordinary fly speed with average maneuverability.",
			"Senses" => "Hylagir possess both low-light vision and darkvision to a range of 60 feet, allowing them to see in dim light as though it were normal light and to see perfectly in darkness up to 60 feet though only in black and white."
		]  // $traits=[]
	);
	blockSF(
		"About the Hylagir",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Sowanaz are a winged human-like species of incredible beauty, wisdom, and might though they often choose to abandon more intellectual pursuits, especially technology. Their wings resemble those of a dove and are a bright white color. Their skin is almost metallic and is a brilliant bronze while their eyes resemble shining gemstones in hue. Their hair, which they all wear long, varies between all the natural human hair colors but also extends into more exotic hues. They have no facial hair. Their bodies do not degrade with age though their hair will, over a few thousand years, fade to a brilliant white.",
					"Sowanaz have three castes among their people determined by how many wings they have. Hylagir, the most common caste, have a single pair of wings while the Kabbir have two pairs of wings and the mighty Fyrrigir have three pairs. Sowanaz can be born into any of the three but almost all are born as hylagir. Sowanaz can also ascend through the castes, their new wings appearing a bright flash of white light, by attaining a higher level of purity. Kabbir and fyrrigir wield holy powers not available to hylagir."
				])
			],
			[
				'title' => 'Homeworld',
				'spaced' => true,
				'texts' => quick_array([
					"Sowanaz have taken the Eighth Heaven Nebula as their \"homeworld\" though their actual world of origin is unknown.",
					"The Eighth Heaven Nebula is a region of space approximately the size of most solar systems that is infused with the planar energies of Heaven. The edges are surrounded with brilliant white clouds while the interior is filled with breathable air and an even, standard-strength gravitational pull towards an atypical star at the center. Distant objects are obscured by an endless blue sky broken up by numerous shining cloud blanks that fill the space inside the nebula. The “star” at the center is atypical and not composed of standard plasma but is instead composed of a massive, dense, roiling cloud of planar energies pouring from a portal to Heaven at the center. ",
					"Since the discovery of the Eighth Heaven Nebula, it has become the home of the Sowanaz, a race of angelic humanoids. Most sowanaz within the nebula live in a floating city called the Throne of Light.",
					"Certain mystics with ties to Heaven have learned to create a form of conjured matter known as heavenly platinum from the energies of the nebula. This substance has been used to build most of the ships and structures made within the nebula, including making up most of the mass of the Throne of Light."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>