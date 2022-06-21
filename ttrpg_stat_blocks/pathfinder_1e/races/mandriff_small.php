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
	raceBlockAuto(
		'Mandriff, Small',// Name
		19,// Race Points
		'Mandriff arrived in these lands long ago, sailling on massive wooden ships, but those aboard claimed no knowledge of where they came from or how the ships were constructed and no one was able to identify either design nor the materials the ships were made from. Since then mandriff have formed an almost tribalistic society in the jungles, clearing portions of the trees where they build elaborate structures that house entire towns. The structures are often made out of mostly wood with stone bases and shaped like many step pyrmids of different sizes atop each other. Mandriff are known for being highly skilled, both on and off the battlefields. ',// Desc
		'Each mandriff has the head and body of a different animal, but all of them have a human neck and torso, generally one rippling with muscle, where the animal\'s neck would otherwise be. Each mandriff always has the head and body of of the same animal. These animals always have four legs (though some may use what would otherwise be used as arms as the front legs), do not possess wings, and are not aquatic or amphibious. Because of the added weight of the torso, mandriff generally cannot lift their front legs off the ground, at least not for very long, even if these legs would normally be easy or even common for the animal to lift.
		Small sized mandriff are uncommon but not altogether rare, having the head and body of a small sized animal. Such mandriff bear a human-like torso that is smaller than that of human\'s, reduced in size to where it would fit a tiny sized creature.',// Physical Desc
		'Mandriff tribes are generally lead by a chieftain who dwells atop the largest pyramid in the center of the town. Orders come down from him, directing how resources and trade should be mananaged, where to send the hunting parties, and many other aspects of communal life. He is advised by a number of advisors that come from all walks of life and provide expert opinions on various going ons and strategy throughout his domain. The people of these towns generally live simple life, most train in a craft or other profession and all attend traditional mandatory combat training where they train in various forms of combat from hand-to-hand to sword-play to archery.',// Society
		'Mandriff are familiar with the unfamiliar, given that every memeber of their race has the features of a random animal, and attempt to work with other races on their borders. Other races, in turn, often apreciate the trade and aid but feel intimidated somewhat by the mandriff\'s forms.',// Relations
		'Most mandriff are neither particularly lawful nor chaotic and while the majority is true neutral, many are good-aligned and evil-aligned individuals are not wholly uncommon.
		Many mandriff do not follow any religion but their culture is filled with references to "The Great Chieftan". This figure was found in what mythology they had when they first arrived and carved in murals inside their ships but it is unknown if they are a figure from their history or one that is prophesied to come.',// Alignment and Religion
		'Mandriff are trained for combat and often work in tight groups. This lends itself well to the adventuring life leading many to seek it out. Medium and small sized mandriff are more likely to seek out the adventuring life as their decreased strength and size compared to their brethren occasionally mke them feel like outcasts.',// Adventurers
		'WIP',// Male Names
		'WIP',// Female Names
		[
			'str' => 2,
			'wis' => 2,
			'int' => -2
		],// Ability Mofifiers
		'Mandriff are and strong and wise people but are not known for being the most clever or advanced.',// Ability Description
		[
			'Small: A few mandriff are Small creatures and gain a +1 size bonus to their AC, a +1 size bonus on attack rolls, a –1 penalty on combat maneuver checks and to their Combat Maneuver Defense, and a +4 size bonus on Stealth checks.',
			'bb/Monstrous Humanoid/bb: Mandriff are monstrous humanoids.',
			'bb/Normal Speed/bb: Small mandriff have a base speed of 30 feet.',
			'bb/Darkvision/bb: Mandriff have darkvision to a range of 60 feet.',
			'bb/Scent/bb: Mandriff have the scent special ability.',
			'bb/Bond to the Land/bb: Mandriff gain a +2 dodge bonus to AC when in a specific terrain type selected from the ranger\'s list of favored terrains. This choice is made at character creation, and cannot be changed.',
			'bb/Natural Armor/bb: Mandriff\'s hides are thick on their larger animal-like sections that grant a +1 natural armor bonus to the AC.',
			'bb/Skilled/bb: Mandriff gain an additional skill rank at 1st level and one additional skill rank whenever they gain a level.',
			'bb/Natual Attack/bb: Mandriff gain either a bite or gore natural attack. These are primary natural attacks that 1d4 points of damage.',
			'Optionally, some mandriff may have two hoof attacks instead. These attacks are secondary attacks that deal 1d3 points of damage.',
			'bb/Quadruped/bb: Mandriff possess four legs and two arms, granting them a +4 racial bonus to CMD against trip attempts. In addition, mandriff use weapons and armor as if they were Tiny sized (instead of Medium).',
			'bb/Languages/bb: Mandriff begin play speaking Common and Mandriff. Mandriff with high Intelligence scores can choose any languages they want (except secret languages, such as Druidic).'
		],// Racial Traits
		false// Subraces
	);
	require $startDir.'pageEnd.php';
?>