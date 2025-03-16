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
		"Skadian", // $name=''
		[
			""
		], // $desc=[]
		[
			'any' => +2
		], // $stats=[]
		4, // $hp=0
		"Skadians are Medium humanoids with the elf and skadian subtypes.", // $size_type=''
		[
			"Senses" => [
				"Skadians possess an unusual type of vision called shadow vision that effectively inverts their ability to see in different levels of brightness, treating bright light as darkness, normal light as dim light, dim light as normal light, and darkness as bright light. This also inverts the effects of other types of vision. Shadow vision also reveals colors where other creatures see grays and vice versa.",
				"Skadians also possess darkvision to a range of 60 feet which, in combination with their shadow vision, allows them to see perfectly in bright light and normal light but only in black and white."
			],
			"Create Darkness" => [
				"Skadians possess the create darkness universal creature rule.",
				"As a standard action, the skadian can create a 20-foot-radius area of darkness centered on themself, which negates the effects of all nonmagical light sources in that area. This darkness lasts for a number of minutes equal to the skadian's CR, and the skadian can dismiss the effect as a standard action. The darkness doesn't move with the skadian. Unless otherwise noted, any magic source of light can increase the light level in the area as normal."
			],
			"Elven Immunities" => "Skadians are immune to magical sleep effects and receive a +2 racial bonus to saving throws against enchantment spells and effects.",
			"Keen Senses" => "Skadians receive a +2 racial bonus to their Perception checks.",
			"Negative Energy Affinity" => "Skadians are harmed by positive energy and healed by negative energy like undead."
		]  // $traits=[]
	);
	blockSF(
		"About the Skadian",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Most skadians are descended from a rare group of good-aligned drow and all of them are descended from a group of unusual humanoids with souls that are naturally composed of negative energy which were created by sceaduinar. They appear similar to drow but their forms are in monotone grays whose true color can only be seen by creatures with shadow vision. Skadians can theoretically be of any race and appear as a monotone form of their parent race and most such have a differing set of racial traits to match their parent race."
				])
			],
			[
				'title' => 'Home World',
				'spaced' => true,
				'texts' => quick_array([
					"Skadians primarily live on Thlaw, a darkened forest world that's been placed halfway between the Material Plane and the Plane of Shadow. Thlaw does not orbit a star but the light of distant stars is enhanced while in it's gravity well, bathing the surface in perpetual dim lighting. During the \"day\" on the planet, vibrant iridescent auroras cover the sky though they fail to increase the amount of light which reaches the surface.",
					"The trees and other plant life resembles that of old golarion but has a dark purple-brown hue to their leaves and a grayish tone to the bark. They sustain themselves on the magically enhanced starlight and the light of the auroras, drawing in a combination of the faint light and the arcane energies that come with it. The planet is also native to many species of wildlife such as birds, deer, and wolves, the latter of which is considered sacred."
				])
			],
			[
				'title' => 'Society',
				'spaced' => true,
				'texts' => quick_array([
					"ii/Accord/ii: Skadians tend to have a high accord as their culture places an emphasis on mutual cooperation. ",
					"ii/Alignment/ii: Most skadians are good but range fairly evenly between lawful to chaotic. Their society as a whole is LG.",
					"ii/Magic/Technology/ii: Skadian society is steeped in hybrid technology and a line is rarely drawn between magic and technology. Every aspect of daily life is aided by magic and technology working in harmony.",
					"ii/Religion/ii: Skadians have their own pantheon with the fallen Hero-God Skadwalth at its head. Skadians tend to be heavily religious as this pantheon is generally seen as the only thing between them and a hostile universe that finds their very existence as being unnatural and corrupt.",
					"ii/Tradition vs Progress/ii: Skadians tend to cling to certain traditions but their pantheon of gods, particularly the god of magic, technology, and knowledge Knull, are always pushing them to embrace the latest advancements for the betterment of the people.",
					"ii/Community vs Individual/ii: Skadian society is centered around communal aid though this does not mean that personal accomplishment is disregarded or discouraged or that they live a communal lifestyle. Instead, as individuals achieve greater heights they are encouraged to lend a hand to their fellow men and bring them up with them.",
					"ii/Liberty vs Law/ii: Skadian society possesses very few absolute laws but instead uses a series of strict guiding principles with judges that make decisions on a case by case basis. These principles safeguard personal liberties but where the line is drawn can vary wildly."
				])
			],
			[
				'title' => 'Unique Technology',
				'spaced' => true,
				'texts' => quick_array([
					"Through the aid of their pantheon, skadians have access to the Forest of Stars, a mind-bending transitive plane that can be traversed for faster-than-light travel comparable to drift travel. The Forest of Stars is a plane that contains many great tree-like nebulae of many different colors that grow stars like fruit and form a great canopy overhead. At the base of these trees is a plane like a calm sea that is perfectly reflective and that ships traveling through the Forest are bound to, hovering mere feet over the top of the surface. Below this surface extend dark-gray nebulae that mirror the trees above and grow black holes instead of stars. Ships passing through can pass through this layer to be on either side but cannot see from one side to the other nor can they see ships on the opposite side. Ships traveling from the Material Plane always arrive on the stellar side while ships from the Plane of Shadows arrive on the black hole side. Exiting from a side brings ships to the same plane it can be reached from. Both of these realms can be traversed at great speeds but can be difficult to navigate.",
					"The Forest of Stars is sentient and contains the echo of Skadwalth's consciousness. It also does not have permanent shape or contents but only exists where it is occupied and fades back into raw planar energies beyond view. Navigating the Forest then requires entreating its consciousness and reading its mood and the hints it leaves as to the correct direction to travel. In theory, the Forest of Stars could transport a ship to distant galaxies in seconds but in practice the journey tends to take much longer and doesn't transport ships as far because the Forest doesn't see a reason for it.",
					"Traversing the Forest poses little danger other than angering or misinterpreting the Forest and getting lost only to emerge in a part of the galaxy completely distant from your destination or even possibly hazardous. This being said, the Forest may prevent or limit travel to certain regions while easing travel to others. In general, areas that are easier to travel to are like traveling to Near Space worlds with the exceptions of travel to Absalom Station or Thlaw which each take only 1d6 days to reach. Traveling to most other worlds takes the same time as traveling to the Vast. The Forest is aware of its visitors, their attitudes, and their histories and may increase the time it takes to travel to a destination, reduce the time, or outright prevent navigation to a destination. Each ship traveling through the Forest has a dedicated astrogator who has a tier similar to the engine rating of a ship that reflects their ability to interpret and entreat the Forest and thus shorten their journey's time. Divide the travel time by the astrogator's tier."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>