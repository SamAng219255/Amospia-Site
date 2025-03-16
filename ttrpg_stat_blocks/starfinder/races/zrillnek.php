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
		"Zrill'Nek", // $name=''
		[
			"Many years ago, the first zrill'nek ship arrived at Absalom Station. No one had ever heard of them nor seen them before and neither had they encountered any other intelligent species. After some translation magic was employed, it was discovered that the zrill'nek originated on a rogue planet and its moon which were located deep in the space between galaxies, inside of an anomalous dark nebula that hid even the faint light of the distant galaxies from its skies. ",
			"Since the knowledge of drift drive technology was delivered to the zrill'nek by Triune, they had attempted to discover what its usefulness was, with nowhere to go that they knew of. After just traveling straight in a random direction with the drive they managed to exit the nebula and discovered the light of the distant galaxies. Next they sought a way to reach them. Even with the drift drive, the nearest galaxy was a several hundred year journey. Eventually they made another useful discovery. An asteroid that had broken off from their world long ago was still located in one of the distant galaxies and its shared origin allowed them to use their magic and create a link through time and space that created a portal from the planet to the asteroid. At this point they began establishing a base on the distant asteroid with its strange sky full of stars before launching a ship from it to a massive drift beacon they had detected.",
			"This brought them to their recent arrival at Absalom Station, the largest drift beacon probably in existence. After this time they began integrating with the galaxy and establishing their place."
		], // $desc=[]
		[
			'str' => +4,
			'con' => +2,
			'dex' => -2,
			'wis' => -2
		], // $stats=[]
		6, // $hp=0
		"Zrill'Nek are Medium monstrous humanoids.", // $size_type=''
		[
			"Damage Reduction" => "Zrill'nek possess damage reduction equal to their base attack bonus that can be overcome by bludgeoning or piercing damage.",
			"Energy Resistance" => "The different regions of their home planets possess a great many threats and zrill'nek are evolved to survive these harsh environments. They possess energy resistance 5 to acid, cold, and fire and a +2 bonus to saves against radiation.",
			"Low-Light Vision" => "Zrill'nek can see in dim light as if it were normal light.",
			"Skilled" => "Zrill'nek receive a +2 bonus to intimidate and mysticism.",
			"Darkworld Dweller" => "Those zrill'nek from the darkworld are known to lack any means of sight as it is useless to them with no natural means of illumination. They possess the sightless ability and possess blindsight (sonic) with a range of 60 feet."
		]  // $traits=[]
	);
	blockSF(
		"About the Zrill'Nek",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Zrill'nek appear as largely generic humanoids though they are a good deal bigger than most and they maintain an unparalleled musculature that is the envy of many members of other races. ",
					"Their skin ranges from red through purple to blue and from brightly colored to black. Generally, those of the volcano world will bear redder and brighter skin and those of the darkworld tend to bear darker and bluer skin. ",
					"A pair of horns grow from their head to form a cage-like helmet around their head with the main portion curving down along the cheek to near their chin while 4 branches come off along its length that point backward and surround the top and sides of their head, ultimately curling around the back of their head. Another branch from each horn sticks straight up and curls slightly forward that together complete their terrible visage. Many similar horns cover their body in cage-like shapes slightly off of their skin that almost function as built-in armor. ",
					"The difficulty of fitting clothing over these structures tends to result in zrill'nek preferring to wear clothing over the least of their bodies as possible though they often affix metal jewelry to their horns. Generally this is done by either drilling holes that pieces are pushed or strung through or by screwing items into their horns for more permanent affixtures. What clothing they do wear tends to be made of long strips of cloth, sometimes sewn together at various angles, that are wrapped and tied around their bodies to avoid having to pull it over their horns.",
					"Zrill'nek are obligate carnivores and can digest most meats in the galaxy with shocking little difficulty. ",
					"Zrill'nek possess two layers of dimorphism, one based on gender and one one that isn't. Zrill'nek possess the same type of sexual dimorphism as humans. Additionally, zrill'nek are divided into beelim and daggot. Beelim have much wider builds with thick bodies and limbs while daggot have thinner builds which are nonetheless muscled but instead have a tighter packed and more visibly toned musculature."
				])
			],
			[
				'title' => 'Culture',
				'spaced' => true,
				'texts' => quick_array([
					"Zrill'nek culture is violent yet dignified. Decisions are generally made by group shouting matches culminating in contests of might, most commonly a one-on-one fight limited either to fists or archaic weapons such as swords and battle axes. Slashing weapons are usually preferred as they are seen as being more honorable and requiring greater skill to strike their opponent around their horns. The winner is the first to draw blood. After such a contest though, both parties are quick to help the other up and get along, following the course of action favored by the victor.",
					"Zrill'nek usually see high cooperation once everyone is successfully \"convinced\" of the plan. ",
					"As a whole, zrill'nek society is generally CN with the laws that come and go in a day and are readily and often challenged and something of an apathy for morality but an equal void of a lust for malice. ",
					"Magic, in particular contract, language, and rune magic, are a staple of society and every community has at least a handful of practitioners. ",
					"Zrill'nek tend to occasionally and sporadically give offerings or thanks or make requests of random gods though they never truly worship any of them. A behavior often referred to by others as flirting with the gods. They also tend to include powerful demons, devils, and other outsiders in this behavior. A tendency which often proves more effective. ",
					"Zrill'nek society was leagues behind the rest of the galaxy in technology when the gateway first opened but their love for combat quickly resulted in them importing and then learning to manufacture the latest in weapons technologies. They have also augmented these technologies with their native magics to create hybrid items of even greater strength that they both wield and sell to the rest of the galaxy.",
					"Zrill'nek society has an interesting balance between tradition and progress where they embrace every new piece of technology and simply use it alongside their traditional practices creating an interesting visual clash as the latest shiniest comm unit is being expertly used by an ancient man in a piece of traditional clothing to remind himself of the instructions for using a traditional millennium old rune sequence.",
					"Zrill'nek generally value their own needs over others but are quick to submit when beaten which makes cooperation not uncommon.",
					"Zrill'nek generally regulate behavior by strength but don't tend to be vengeful, spiteful, or malicious by nature making major crime far less common. Additionally, most individuals are capable of holding their own, meaning any given fight could often go either way.",
					"Zrill'nek culture tends to be apathetic toward the rest of the galaxy, neither drawing from nor boasting its greatness. It simply is and zrill'nek often have a hard time grasping that it doesn't work that way everywhere.",
					"In zrill'nek society, cannibalism is not generally considered taboo though murdering for this purpose is still just as villainous as it is in most societies."
				])
			],
			[
				'title' => 'Unique Technology',
				'spaced' => true,
				'texts' => quick_array([
					"Zrill'Nek are skilled at incorporating magic into what would otherwise be technological items. The most common of which being the addition of sin runes. Most zrill'nek manufactured weapons possess one of 7 special weapon fusions associated with a sin rune. These fusions cannot be removed or transferred as they are permanently incorporated into the weapon during its construction. They also cannot be made into a fusion seal. These fusions are treated as having an item level of 0 on their own.",
					"<dl>
						<dt>Envy</dt>
						<dd>This fusion functions as the dispelling fusion.</dd>
						<dt>Gluttony</dt>
						<dd>The weapon gains the leeching critical hit effect.</dd>
						<dt>Greed</dt>
						<dd>This fusion functions as the quantum fusion. </dd>
						<dt>Lust</dt>
						<dd>This fusion functions as the kaleidoscopic fusion except it can be applied to any weapon.</dd>
						<dt>Pride</dt>
						<dd>This fusion functions as the glamered fusion.</dd>
						<dt>Sloth</dt>
						<dd>This fusion functions as the manufacturing fusion.</dd>
						<dt>Wrath</dt>
						<dd>The weapon gains the severe wound critical hit effect.</dd>
					</dl>"
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>