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
		"Werver", // $name=''
		[
			""
		], // $desc=[]
		[
			'dex' => +2
		], // $stats=[]
		6, // $hp=0
		"Wervers are Small humanoids with the werver subtype.", // $size_type=''
		[
			"Built for Falling" => "A werver's body is designed to reduce their terminal velocity and sustain an impact without injury which together make them immune to damage from falling while in normal or lower gravity and take only 1 point of nonlethal damage per 10 feet fallen while in heavy gravity. They may take at least half of normal falling damage as entirely nonlethal damage when falling in extreme gravity environments. In environments without an atmosphere, all falling damage is converted to nonlethal damage instead. Wervers are also never knocked prone from a fall but might immediately fall unconscious if taking too much nonlethal damage.",
			"Dexterous Movement" => "Each time they move their speed, wervers can ignore the first square of difficult terrain.",
			"Jumpers" => "Wervers halve the DC of Athletics checks to jump.",
			"Low-Light Vision" => "Wervers can see in dim light as if it were normal light.",
			"Werver Movement" => "Wervers have a 30-foot base speed and a 30-foot climb speed."
		]  // $traits=[]
	);
	blockSF(
		"About the Werver",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Wervers are roughly human, with hair that tends towards red or brown though gray and occasionally black is also not uncommon. The major difference is the presence of a massive fur-covered bushy trail that extends almost straight up in the air most of the time though may extend backwards while running for balance and extends straight out whilst falling to create additional drag. Wervers also sport tall fur-covered ears that stick up from the sides of their head and a pair of mildly buck teeth.  Despite not being visibly much different, a werver's legs are designed to evenly distribute weight and to cushion a fall when landing though particularly far falls may require bending down on all fours to fully cushion the blow."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>