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
		"Numerite", // $name=''
		[
			"Numerites are descendants of outsiders from the plane of Axis that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'int' => +4,
			'str' => +2,
			'con' => -2,
			'cha' => -2
		], // $stats=[]
		6, // $hp=0
		"Numerites are Medium humanoids with the numerite subtype.", // $size_type=''
		[
			"Axiomatic Resistances" => "Numerites gain resistance to electricity 5 and a +2 bonus on saving throws against mind-affecting effects.",
			"Information Form" => "Numerites gain a spell-like ability, usable once per day, that allows them to transform into a cloud of pure information that takes the form of complex mathematical equations. This ability otherwise functions as ii/nanite form/ii.",
			"Low-Light Vision" => "Numerites can see in dim light as if it were normal light."
		]  // $traits=[]
	);
	blockSF(
		"About the Numerite",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Numerites generally appear like elves though their thought processes are much more alien. Numerites are perfectly logical in their thinking and think entirely in absolutes, with no room for intuition or assumptions."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>