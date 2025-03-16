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
		"Yeereckuul", // $name=''
		[
			"Yeereckuuls are descendants of demons of envy that became native to the material plane after extended exposure."
		], // $desc=[]
		[
			'dex' => +2,
			'int' => +2,
			'str' => -2
		], // $stats=[]
		4, // $hp=0
		"Yeereckuuls are Medium humanoids with the yeereckuul and human subtypes.", // $size_type=''
		[
			"Aerobatic" => "Yeereckuuls gain a +2 bonus to Acrobatics checks.",
			"Change Shape" => "As a standard action, a yeereckuul can assume a specific human appearance. They gain a +10 bonus to Disguise checks to appear as a human. The yeereckuul can remain in this form indefinitely. The individual chooses their shape change identity at character creation.",
			"Yeereckuul Movement" => "Yeereckuuls have a 30-foot land speed and a 30-foot extraordinary fly speed with perfect maneuverability.",
			"Cold Iron Weakness" => "Contact with at least a handful of cold iron deals 1d6 damage per round to a yeereckuul. This effect is negated by the environmental protections built into most armor.",
			"Light Blindness" => "Yeereckuuls have the light blindness universal creature rule."
		]  // $traits=[]
	);
	blockSF(
		"About the Yeereckuul",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Yeereckuuls are actually a parasitic species whose true form resembles a rather small translucent black ooze with the capability of crawling into the brain cavity and taking over the minds of humanoid species. Interplanetary law, however, has long since outlawed the practice of taking over sapient hosts. As such, the yeereckuuls were ultimately forced to genetically engineer a host race of non sapient humans. Since that time, yeereckuuls not only lost the ability to dominate the mind of a sapient host but also to detach from the mind of their current host, given as there exists little reason anymore to do so. Some, more malicious, yeereckuuls have learned bioengineering and magical processes to emulate these lost traits though these are illegal practices and kept highly secret. The parasite form of a yeereckuul is also burned by bright light.",
					"The host body of a yeereckuul is transformed somewhat. Their skin turns an exceptionally dark blue whose hue is only revealed when bright lights reflect off of the slightly shiny surface. They also grow a pair of large bat-like wings that extend from their back. Lastly, the colors of their eyes change, the whites becoming black and their irises turning a bright emerald green. The yeereckuul can suppress and disguise these changes though their irises always remain the same shade of bright emerald green.",
					"Yeereckuuls are known for vanity but specifically for the purpose of inspiring envy in others. Which looks they enjoy greatly. Yeereckuuls themselves are also known for their constant envy which, together with their delight in drawing the envy of others, seems to dictate their every action."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>