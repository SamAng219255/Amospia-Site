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
		"Sparkling", // $name=''
		[
			""
		], // $desc=[]
		[
			'cha' => +2
		], // $stats=[]
		4, // $hp=0
		"Sparklings are Medium humanoids but, for effects targeting creatures by type, sparklings count as humanoids and as outsiders (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Non-Biological" => "Sparklings do not breathe, granting all the effects of the no breath rule. They also do not eat but while outside of a solar atmosphere, they must become dormant for periods of time similar to sleep during which time their light dims drastically.",
			"Plasmic Form" => [
				"Sparklings have resistance 5 to fire and electricity. Additionally when they make a melee attack, they can change half of the damage to either fire or electricity. If at least half of the attack's damage is either fire or electricity damage, the damage becomes half fire and half electricity. Otherwise, the sparkling must choose whether half of the damage becomes fire or electricity, replacing one of the damage types if the attack damage is already split between two damage types. If the attack is already half fire and half electricity damage, such as a plasma weapon, they can instead make the weapon illuminate the area within 20 feet of the target for 1 round following the attack, increasing the illumination level by one step, to a maximum of normal light, as though it had the bright property.",
				"Sparklings also increase the light level by 2 steps in a 10 foot radius and by 1 step for an additional 10 feet beyond.",
				"If a sparkling enters the atmosphere of a star, their field drops and they become immune to fire and electricity and gain the solar adaptation universal creature rule."
			],
			"Senses" => [
				"Sparklings have high-light vision and blindsense (life) with a range of 30 feet.",
				"Sparklings are adapted to the extreme brightness of the stars they are native to and as such have difficulty seeing in dim light and treat it as darkness. They are also immune to light based blindness and dazzle.",
				"Sparklings can also sense the lifeforce of nearby creatures, allowing them to detect the presence and location of living creatures within range, though the creatures are still considered to have total concealment from the sparkling unless they can see them using another sense."
			],
			"Sparkling Movement" => "Sparklings have a 20-foot base speed and a 30-foot supernatural fly speed with average maneuverability."
		]  // $traits=[]
	);
	blockSF(
		"About the Sparkling",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Sparklings are sparks of solar nuclear plasma given life and intelligence from exposure to the positive energy from the rift at the center of most stars. A sparkling's form is made of and wreathed in solar plasma though it is held in shape by a specialized energy field that allows them to leave their native environment. ",
					"Despite their origin and nature, sparklings strangely possess a sexual dimorphism typical of mammalian humanoids with corresponding differences in their identity."
				])
			],
			[
				'title' => 'Dusklings',
				'spaced' => true,
				'texts' => quick_array([
					"While in a solar atmosphere, sparklings can theoretically live indefinitely though they have a limited lifespan outside of them which is none-the-less considered lengthy by other races, reaching potentially thousands of years. Sparklings in the atmosphere of a star that collapses into a black hole, or some of those that perish outside of a star, transform into a darkened form called a duskling, resembling a star's transition into a black hole. After this transformation, they can rarely remember any of their previous life and they generally become the opposite of their original alignment, attitude, and general mentality.",
					"Sparklings that die outside of the atmosphere of a star have a 5% chance per level of becoming a duskling upon their death though those that die of old age or from necromancy effects have twice the probability to become dusklings upon their death. Such dusklings that are subject to resurrection magic are restored to their sparkling form with their original memories and abilities as though they were simply slain."
				])
			],
			[
				'title' => 'Psychology',
				'spaced' => true,
				'texts' => quick_array([
					"Sparklings are immensely whimsical and carefree beings, often living fully in the present without much regard for the past or future. This tendency can make them seem distracted, even unpredictable, but it is a product of their nature. The concept of time itself is often fluid for Sparklings, and they rarely feel the burden of urgency that most other species experience.",
					"They also tend to lack the same sense of long-term direction as other races. While some sparklings develop deep personal bonds or pursue long-term projects, many prefer to drift through life, exploring and experiencing whatever the universe throws their way. This isn't to say they lack depth—they are curious and often exhibit profound creativity, especially in art, music, or any form of expression that allows them to channel their inherent energy. However, they rarely commit to any single pursuit for long, as their interests and passions shift quickly."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>