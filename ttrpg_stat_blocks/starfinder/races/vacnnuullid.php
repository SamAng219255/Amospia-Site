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
		"Vacnnuullid", // $name=''
		[
			"Vacnnuullids are descendants of outsiders from the Maelstrom that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'dex' => +2,
			'cha' => +2,
			'wis' => -2
		], // $stats=[]
		2, // $hp=0
		"Vacnnuullids are Tiny magical beasts.", // $size_type=''
		[
			"Amorphous" => "Vacnnuulids have the amorphous universal creature rule.",
			"Energy Resistance" => "Each round, a vacnnuullid has resistance 5 to random energy type from between acid, electricity, or sonic. Roll a d4 at the beginning of the vacnnuullid's turn. On a 1 or 2, they are resistant to acid. On a 3 they are resistant to electricity. On a 4 they are resistant to sonic. This lasts until they roll again at the start of their next turn.",
			"Spellcasting" => "Vacnnuullids can cast ii/lesser confusion/ii once per day as a spell-like ability and can cast ii/ghost sound/ii and ii/token spell/ii as at will spell-like abilities. These spells' caster level is equal to character level.",
			"Vacnnuullid Movement" => "Vacnnuullids have a 20-foot land speed and a 30-foot extraordinary fly speed with average maneuverability."
		]  // $traits=[]
	);
	blockSF(
		"About the Vacnnuullid",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Vacnnuullids are a serpent shaped race with a pair of feathery wings. Their entire body is iridescent with complex patterns and no two vacnnuullids are very similar. Vacnnuullids interact with the world through the use of short ranged telekinesis."
				])
			],
			[
				'title' => 'Psychology',
				'spaced' => true,
				'texts' => quick_array([
					"Vacnnuullids are creatures of the moment. They only barely grasp cause and effect, and the past has no more substance or significance for them than a dream. As such, vacnnuullids are known for their whimsical and carefree nature."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>