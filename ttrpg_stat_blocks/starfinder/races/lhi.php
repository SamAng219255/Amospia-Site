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
		"LHI", // $name=''
		[
			""
		], // $desc=[]
		[
			'any' => +2
		], // $stats=[]
		4, // $hp=0
		"LHIs are Medium humanoids with the LHI and technological subtypes. For effects targeting creatures by type, LHIs count as humanoids and constructs (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Charged" => "LHIs do not need to eat but they must be powered. LHIs can absorb a charge from a touched battery. They can only hold 1 charge this way and they cannot absorb charges in excess of this amount. LHIs expend a charge every 24 hours. A LHI can install or remove a battery into themself as placing it into or taking it out of a weapon. This increases the maximum number of charges they can store to that of the battery. If they do not receive charge they starve using the same rules as other creatures.",
			"Glowing" => "LHIs glow like the screen of most devices and in darkness they are plainly visible, forcing them to take a -5 penalty to stealth. They also raise the light level of the square they occupy to dim light.",
			"Holographic Form" => "Despite being holograms, the programming and nature of LHIs allow you to treat them as though they were normal creatures with the exceptions listed.",
			"Low-Light Vision" => "LHIs can see in dim light as if it were normal light.",
			"Lumonic Resilience" => "LHIs receive a +2 bonus to saving throws against bleed, poison, and polymorph effects due to their unusual makeup. Their lack of biology and structures analogous to organs also grants them the amorphous universal creature rule.",
			"No Breath" => "LHIs do not breathe and possess the no breath universal creature rule."
		]  // $traits=[]
	);
	blockSF(
		"About the LHI",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"LHIs are made of light but specifically they are made of \"lumons\" or atoms of light, a form of matter discovered whilst exploring a distant world covered in organisms made of light. Lumonic matter (matter made of lumons) is not normally solid to ordinary matter which can pass straight through it. LHIs, however, possess a layer around their exterior that functions similar to so-called \"optical tweezers\" and resists intrusion by and allows interaction with standard matter with similar strength to the epidermal layer of most species. If an object penetrates this layer (say for instance, if they are shot with a bullet) it can do significant damage as it cleaves through their internal light structures.",
					"LHIs are generally humanoid but can theoretically resemble any race. The exact appearance of an LHI can vary wildly and appearance packs can stretch this even further.",
					"LHIs can be formed by lumonic AI assistants becoming complex enough to gain sapience but most are created by existing LHIs as \"children\". Attempting to directly clone an LHI's code and put it in a new LHI does not work. The complexity is simply too high and attempting to read it is a quantum impossibility. It is possible for an LHI to perform calculations on their code to derive an approximation of one of two pieces of information known as their chaos seed and their chaos function. These pieces of information are sufficient to, together when added to a standard Laia, recreate the LHI. Unfortunately deriving one permanently prevents them from being able to acquire the other. Instead, two LHIs can work together, one adding their chaos function to the code and the other adding their chaos seed, to create a new LHI with a mixture of the \"parents\"' qualities. As the derived function and seed are only approximations, however,  there is a certain degree of variance. Using a derived function or seed causes the information to be lost and a new one must be derived for additional \"offspring\" to be created."
				])
			],
			[
				'title' => 'Holographic Modules',
				'spaced' => true,
				'texts' => quick_array([
					"LHIs are artificial creatures, originally the result of advanced lumonic AI assistants becoming complex enough to gain sapience, as such they are programmed similar to a computer and many of their behaviors and abilities are limited to match organic creatures. LHIs can install additional holographic modules that can change their abilities or grant additional abilities. Most of these function as augmentations though there are other modules such as clothing and appearance packs, delimiters, and holographic equipment. ",
					"Standard clothing and appearance packs generally come with 5 appearances that can be changed out as a full-round action though usually only 1 or 2 are any good while the others in the pack are rather sub-par. These appearances usually include cosmetic changes to the LHI's look similar to what could be accomplished with clothing and makeup though their nature as holograms allows for additional creative freedom. These packs are usually divided into everyday, formal, professional, and costume. The contents of the everyday, formal, and professional packs are similar to the corresponding type of clothing and cost as much as buying the same number of sets of clothing of that type as there are appearances in the pack. Costume packs include unusual and often wild and extravagant costumes, many of which could only ever be accomplished with holograms. These packs are a favorite among certain circles though they provide little benefit. They do grant a +1 circumstance bonus to Diplomacy when talking to an npc the GM determines is suitably impressed. These packs cost 5 credits for each appearance in the pack.",
					"Delimiters are scripts either sold by official distributors or by hackers that deactivate certain pieces of code that limit the LHI to behavior expected of an organic creature. The most common of which being the gravity delimiter which costs 500 credits and removes the code that forces the LHI to replicate the pull of gravity. This grants the LHI a fly speed equal to their base speed with average maneuverability. This module may also include cosmetic changes such as adding the appearance of fantastical wings.",
					"Holographic equipment allows a handful of pieces of equipment to be replicated by the LHI's own hologram. Generally, this includes energy weapons, hologram producing items such as holoskins or holographic sashimonos, hand-held comm units, datapads, and other computers of light or negligible bulk but the GM can determine other items can be holographically replicated. Each piece of holographic equipment occupies the augment slot of the region of body it appears in, for weapons and other handheld items this is generally a hand. Holographic equipment can be transferred to another hand, taken off, or even set down but it cannot be disarmed, stolen, used, or damaged by other creatures. Additionally, if a LHI moves out of line of sight or 30 feet from a piece of equipment, it winks out. Summoning or dismissing a piece of equipment can be done as a move action. Holographic equipment draws charge from the LHI's internal charge, meaning that installing a battery is highly recommended to properly power the equipment. Holographic equipment costs 110% of the cost of the base piece of equipment.",
					"Delimiter modules must be installed and removed like augmentation modules and both require a Computers check instead of the normal check to install or remove. Clothing and appearance packs and holographic equipment can be installed or removed by the LHI by spending 10 minutes reconfiguring themself during which time they are helpless and unconscious. All modules, when not installed, take the form of a flat holographic card about the dimensions of most playing cards. These have negligible bulk."
				])
			],
			[
				'title' => 'Lumonic AI Assistants',
				'spaced' => true,
				'texts' => quick_array([
					"Lumonic AI assistants, or \"Laia\"s, can be purchased and mostly use the rules for LHIs except they aren't sapient and instead are computerized autonomous holograms with artificial personalities. Laias follow all commands given by their owners. Laias come in multiple tiers like computers and cost the same as a computer of the same tier with an artificial personality and any other desired modules plus an additional 10% of the computer's base price. Laias require a control module to operate weapons and other devices that a computer would require one to operate. Laias can receive holographic modules as LHIs though they still require an additional control module to operate holographic equipment and some augmentations. Out of the box, so to speak, each laia uses the name-like designation of \"Laia\" and while users can change this designation at any time many don't. Almost all laia units are set up to be controlled by another computer and to control that computer, requiring an appropriate control module on both systems. Such laias usually have a tier of 1. If a laia is controlled by another computer, that computer possesses a hologram projector that can summon or dismiss the laia's physical hologram form. While dismissed, the laia functions similarly to an artificial personality on the other computer. When purchasing a laia unit, users may use an existing personality from the controlling computer to install into the laia."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>