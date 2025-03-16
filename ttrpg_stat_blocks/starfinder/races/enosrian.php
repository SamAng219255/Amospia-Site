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
		"Enosrian", // $name=''
		[
			"Enosrians are the mortal descendants of succubi and incubi exiled from the Abyss after a demonic coup, thousands of years ago. When their ancestors arrived on the Material Plane, they absorbed its essence and became mortal. A subsequent rebellion among these early generations led them to ally with Sarenrae, forsaking their demonic ways in pursuit of redemption. Despite their efforts, enosrians remain forever marked by their origins—hailed by some as redeemed folk and shunned by many as lingering demons.",
			"Now, thousands of years later, their people are divided, and their fate and indentity, both as a people and as individuals, are uncertain."
		], // $desc=[]
		[
			'con' => +2,
			'cha' => +2,
			'str' => -2
		], // $stats=[]
		6, // $hp=0
		"Enosrians are Medium humanoids with the enosrian subtype. For effects targeting creatures by type, enosrians count as humanoids and as outsiders with the chaotic, demon, and evil subtypes (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Enosrian Movement" => "Enosrians have a land speed of 30 feet and an extraordinary fly speed of 20 feet with average maneuverability.",
			"Resistant" => "Enosrians have resistance 5 to electricity and receive a +2 bonus to saves against poison.",
			"Senses" => "Enosrians possess both low-light vision and blindsense (emotion) to a range of 30 feet. They can see in dim light as though it were normal light and they can sense the emotions of nearby creatures to get a general sense of how a creature feels and to sense the presence and location of creatures within range though they still can't see them precisely and the creatures have total concealment from the enosrian unless they can detect them with a precise sense. Their blindsense only allows them to sense the locations of creatures with emotions, including nearly all living living creatures but not most contructs.",
			"Social Skills" => "Enosrians have a magically magnetic personality that is nearly irresistible. They receive a +2 bonus to Bluff and Diplomacy skill checks. They can also cast ii/charm person/ii once per day as a spell-like ability. ",
			"Cold Iron Weakness" => "Contact with at least a handful of cold iron deals 1d6 damage per round to an enosrian. This effect is negated by the environmental protections built into most armor.",
			"Emotional Dependency" => "In addition to normal sustenance, enosrians must consume positive emotions and must be subject to a positive attitude or else similarly starve. Consuming emotions requires a full-round action and can be done to any creature within range of their blindsense (emotion), leaving the subject devoid of that emotion. If there are at least 4 creatures within the range of their sense that share a positive emotion, the enosrian can leech off of the shared emotion as a full-round action without noticeably affecting the subjects. Additionally, they must spend at least 16 hours a day with a creature whose attitude towards the enosrian is friendly within range of their emotion sense. If the creature's attitude is helpful, the time spent counts as double, requiring only 8 hours of exposure. If there are multiple helpful or friendly creatures within range, treat one of them as contributing the normal amount of time and treat each of the others as contributing only half as much time as normal. In most cases, fellow party members are treated as having a helpful attitude."
		]  // $traits=[]
	);
	blockSF(
		"About the Enosrian",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"The vast majority of enosrians superficially look like humans but they can look like members of almost any race. They possess a pair of bat-like wings but these can be folded up and hidden with amazing skill. They also naturally possess a pair of small horns and a long sinuous tail but these are often removed when they are young to help them better blend in and avoid a reputation from their demonic ancestry. Enosrians usually have little if any difficulty disguising as a member of the race they resemble.",
					"Regardless of what race they appear as, enosrians are always incredibly attractive. When they are around other creatures, their form slowly shifts to be more attractive to nearby creatures, using their emotion sense to guide their transformation. This never performs more than cosmetic changes (such as pigmentation, general build, facial structure, vocal qualities, muscular size/definition, fat quantity/distribution, exact height, skin texture such as smooth or wrinkled, or pheromone production) nor makes them difficult to recognize (they are always clearly the same person regardless of what sense is used to identify them). These changes never differ beyond what is possible for their apparent race. They cannot consciously control these changes but they can consciously, or subconsciously, focus on certain creatures that they become more attractive to. When adjusting to become attractive to an individual not romantically attracted to the enosrian, attractive is defined as having enviable features. When used to aid their transformation, their emotion sense has about four times as much range though it is only subconscious. This transformation usually takes no more than one hour but may take less time for smaller changes. When alone, an enosrian's form reverts to a common standard of beauty for their apparent race.",
					"Their horns are generally removed by tying a tight thin strong cord around them as they come in which makes them painlessly and harmlessly  die and fall off after a time while their tail is generally surgically removed shortly after birth."
				])
			],
			[
				'title' => 'Culture',
				'spaced' => true,
				'texts' => quick_array([
					"Within enosrian society, a long-established tradition—favored especially by the older generations—upholds a way of life that emphasizes ethical choices, self-discipline, and restraint. This tradition is designed to counterbalance their inherited demonic impulses while preserving personal freedoms. Yet this very approach, with its occasional excesses and questionable compromises, has given rise to a vibrant counterculture. More common among younger enosrians (though present across all ages), this rebellious current champions the unfiltered expression of innate instincts and personal freedom. Both paths demand a delicate balance; whether tempering or embracing their demonic heritage, enosrians must constantly navigate the fine line between moral responsibility and the risk of descending into cruelty or unchecked selfishness. Even those who spend much of their lives apart from enosrian communities find themselves gravitating toward one of these paths, always mindful of the danger of exposure in a world that still watches them with suspicion.",
					"Those who live apart from tight-knit enosrian communities need be ever mindful of the danger of exposure. Their supernatural abilities of persuasion, while a potent tool for those unaware of their true nature, have an almost inevitable side effect: they sow doubt in those who know what to watch for. Discovery can quickly erode trust, with witnesses questioning both the enosrian’s true intentions and their own judgments. In addition, in certain environments—especially aboard starships or within guarded institutions—paranoid ship crews and captains covertly employ cold iron tests (for instance, requiring a prospective crew member to open a door with a cold iron knob) to root out potential fiends. Although these traps are designed to detect demons and other fiends, enosrians inadvertently trip them, leading to the assumption that they are demons or at least are in league with them. The consequences of such can be severe; an enosrian caught in such a test risks immediate ostracism at minimum. Moreover, enosrians attempting to hide their nature are forced to avoid many religious institutions and nations equipped with means to detect fiendish auras—often tripping these alerts more readily than the more common tieflings."
				])
			],
			[
				'title' => 'Religion',
				'spaced' => true,
				'texts' => quick_array([
					"Religious practice among enosrians runs parallel to—but is not wholly defined by—their cultural divide. The mainstream tradition venerates Sarenrae, whose teachings offer a framework for redemption and ethical living that resonates deeply with enosrian ideals of self-discipline and renewal. Many enosrians, regardless of personal conviction, participate in her rites as a reaffirmation of their redeemed identity and to honor a tradition that has endured for millennia.",
					"In contrast, the counterculture exhibits a broader religious spectrum. While some reinterpret Sarenrae’s principles to suit their more instinct-driven lifestyle, others reject formal worship altogether, embracing a secular approach or even the philosophies of demon lords that affirm their natural impulses. In either case, the religious landscape reflects the enosrians’ enduring struggle: the challenge of reconciling an inescapable, infernal legacy with the diverse, often conflicting paths toward personal and collective identity."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>