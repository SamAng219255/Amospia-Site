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
		"Erulian", // $name=''
		[
			""
		], // $desc=[]
		[
			'wis' => +2,
			'cha' => +2,
			'str' => -2
		], // $stats=[]
		2, // $hp=0
		"Erulians are Medium humanoids with the aquatic and erulian subtypes.", // $size_type=''
		[
			"Aquatic" => "Erulians have the water breathing universal creature rule.",
			"Erulian Movement" => "Erulians have a 40-foot swim speed and no land speed.",
			"Senses" => "Erulians have blindsense (sound) to a range of 30 feet. This allows them detect the presence and location of creatures and objects within 30 feet using an ultrasonic song. Unless the erulian can see a creaure or object with another sense, they still have total concealment from the erulian.",
			"Shield" => "When an erulian takes the total defense action, they gain a +6 bonus to their Armor Class instead of the normal +4 bonus, and they also gain the unflankable universal creature rule until the start of their next turn.",
			"Verse Manipulation" => "Erulians gain a +2 bonus to Profession (musician [singer]) checks. Erulians can also cast ii/psychokinetic hand/ii and ii/telekinetic projectile/ii as spelllike abilities at will so long as they can sing.",
			"Surfacing Song" => [
				"In order to interact better with non aquatic races, the erulian people have developed the surfacing song which allows them to dwell above water. This is a supernatural ability that grants them a 20-foot supernatural fly speed with clumsy maneuverability and forms a bubble of water around their head. This bubble exchanges gasses with the environment and allows the erulian to breathe oxygen in the surrounding air but also allows them to be affected by other, potentially hazardous, compounds around them.",
				"Activating or deactivating the surfacing song is a swift action."
			]
		]  // $traits=[]
	);
	blockSF(
		"About the Erulian",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Erulians have a roughly humanoid shape covered in pastel colored scales that vary between green through blue to purple. Despite their humanoid shape, their arms and legs do not terminate in hands and feet but in translucent fins that extend behind them. Erulians are particularly tied to the verse and can use their voice to produce magical songs such as to shield them or to fling loose rocks at attackers. These songs are also used to produce finely controlled short ranged telekinesis that they use in manipulating items."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>