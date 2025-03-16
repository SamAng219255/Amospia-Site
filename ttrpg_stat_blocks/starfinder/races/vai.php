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
		"Vai", // $name=''
		[
			""
		], // $desc=[]
		[
			'con' => +2,
			'int' => +2,
			'cha' => -2
		], // $stats=[]
		4, // $hp=0
		"Vai are Medium fey.", // $size_type=''
		[
			"Cold Iron Form" => "Vai gain a +1 bonus to AC against attacks with natural weapons by creatures that are weak to cold iron.",
			"Low-Light Vision" => "Vai can see in dim light as if it were normal light.",
			"Natural Weapons" => "Vai can attack with a special unarmed strike that deals lethal damage, doesn't count as archaic, threatens squares, and is treated as being made of cold iron. Vai gain a special version of the Weapon Specialization feat with this unarmed strike at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual).",
			"Technophile" => "Vai receive a +2 bonus to Computers and Engineering checks."
		]  // $traits=[]
	);
	blockSF(
		"About the Vai",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Physiology',
				'spaced' => true,
				'texts' => quick_array([
					"Vai are humanoid with sharp features, gray metallic skin, short black hair, and pointed ears that stick straight up and reach above the tops of their heads. Despite their appearance, vai are not made of cold iron but they seem to have an affinity for the substance and share some of its properties.",
					"Almost all vai are not fertile and cannot have offspring, a side effect of certain of their technologies. While they could cure this condition, most decide not to. Offspring are generally produced artificially in a facility from a controlled mixture of the parent's DNA plus any additional modifications the parents wish to make. The children are then rapidly grown to approximately toddler age in the facility and are then picked up by the new parents, only a few hours after they placed their order."
				])
			],
			[
				'title' => 'Homeworld',
				'spaced' => true,
				'texts' => quick_array([
					"The homeworld of the vai is rich with cold iron and possesses a strange energy to it that converts regular iron into cold iron. This same field seems to have affected much of the, now extinct, plant and animal life including the vai. Forging cold iron is simple on this world because, even after the heating and cooling that normally causes cold iron to lose its properties, any iron is transformed into cold iron after about an hour of exposure. This also applies to steel, making previously unheard of cold steel rather common.",
					"The entirety of the vai's homeworld has been converted to urban areas with buildings extending hundreds of stories in most regions. A massive ceiling extends over the surface of the entire planet and creates and regulates artificial weather and creates fake skies using detailed holograms. These artificial skies align the day/night cycle of the entire planet such that it is always the same time of day everywhere in the world. At night, the skies create artificially brilliant stars that can be seen above the incredible light pollution of the cities. They also display various advertisements for companies in the regions below. Occasional airlock-style portholes dot this sky to allow ships to exit and enter.",
					"There remain no other natural life forms on this planet, with all native plant and animal species having gone extinct some time ago. Despite this, genetically engineered crops and decorative plants still exist across the world as well as similarly engineered exotic pets though they are all a far cry from their origins. The plants receive their energy from being plugged into the wall instead of from sunlight and produce perfect, predictable, and inorganic shapes that are perfect copies of all the others of their species. The animals are similar though they are generally genetically engineered and cybernetically enhanced designer pets that can look like nearly anything, follow their master's orders to the letter, know thousands of preprogrammed tricks, and draw sustenance from a combination of air, water, and the wireless power grid."
				])
			],
			[
				'title' => 'Technology',
				'spaced' => true,
				'texts' => quick_array([
					"The vai have incredibly advanced technology in most fields though they pretty much entirely lack biotech. While not yet attempted, it is widely believed that, if they tried, the vai could even travel to distant galaxies. Instead, vai mostly focus on quality of life technologies, though it is a matter of pride that they have possessed non-drift-based faster-than-light engines since a time prior to the Signal. These engines are generally known simply as cold steel engines though their technical name is a holographic engine. Holographic engines are named after the holographic principle that notes a similarity in the amount of information that can be stored in a spherical space to the surface area of the bounding sphere, implying that reality may be simply a holographic projection on a spherical surface. These engines use a quirk of these calculations to effectively move faster-than-light in a mode similar to a shadow sweeping across a surface. The shadow can appear to move at any speed, including faster-than-light, because the information actually comes from a central source instead. ",
					"Unfortunately, cold steel engines are almost universally slower than using drift engines for most journeys and little research has gone into improving them since the Signal and the creation of the drift engine. Despite their impracticality for most trips, modern cold steel engines are often used for transport between the various neighboring systems of the vai, for which it is greatly superior, being able to make the trip in a static amount of time between 10 minutes to 4 hours depending on the distance between the systems. Unfortunately, trips outside of the vai's globular cluster often take a minimum of a week making it impractical for traveling to most other systems. Most vai ships traveling beyond their home systems are still often equipped with cold steel engines for use as incredibly effective engines for traveling within a single star system, being able to travel around a single star system in seconds though entering the target location still often takes several minutes. ",
					"Vai quality of life technologies include a near ubiquitous use of tier 9 or 10 personal comm units with advanced artificial personalities. These units often strap onto the user's head like a headband and use directional holographic displays and sound shaping and negating technologies to allow their users to interact with displays and hear sounds including recorded or automatically generated music as well as speak into it without nearby creatures seeing the display or hearing the device or the person speaking. Transport around planets is generally done through incredibly efficient and almost luxurious public transport systems that are requested through the use of one's comm unit and then calculate which automated unit should pick the requesting person to optimize travel times. Meals are often made by automated chefs while the people never have to prepare anything or take care of dishes. Cleaning is also done away with with the commonality of cleaning drones that are able to spotlessly clean both inside residential and commercial buildings as well as keeping the streets and the exterior of buildings clean. Shopping is generally done over local infospheres using the holographic displays on the comm units. Purchased items are then automatically shipped to the individual's residence or even constructed at their residence using advanced devices able to create most objects in seconds with only a power requirement and the proper information. Most people also wear specialized personal force fields that protect them from most minor injuries. Medical technology has also become highly advanced and common, with population-wide complete vaccination and other practices that makes the population immune to all known diseases, automated on-site medical drones that can repair any injuries including reattaching or even growing a new limb, anti-aging technology that that has eliminated the detriments of old age as well as their population's maximum age, and advanced medical centers that can even restore the dead.",
					"Recent advances in vai technology include promising attempts at virtualizing standard sized objects as tachyon fields that are sent through a tachyonic anti-telephone to achieve time travel and some even claim to be already seeing evidence of self-proving causality paradoxes (also sometimes called bootstrap paradoxes) as a result of future successful attempts.",
					"The secret to this advanced technology lies in their unprecedented use of cold steel in their technological items. As it turns out, cold steel is invaluable in producing a wide variety of technological marvels and high tier computers."
				])
			],
			[
				'title' => 'Society',
				'spaced' => true,
				'texts' => quick_array([
					"Vai society is governed by numerous guilds of large corporations that resemble a republic system where each guild sends a representative to a council to vote on decisions and to create laws. Each citizen is required to register with a single guild. Each representative then receives a number of votes based on the size of their guild. Corporations in a guild are known to offer special offers, deals, and discounts to those in their guild in order to incentivize joining the guild and increasing their vote.",
					"While each guild differs greatly from one another in their opinions on most matters of policy, one topic all vai can agree on is their distaste for magic. Vai generally view magic as a cheat, a cop-out, or the lazy way to do things and will avoid using magic at all costs and even shun those who do use it. ",
					"When outside of their own communities and among other groups more welcoming of magic, vai tend to retain their dislike of using magic but often learn to tolerate the presence, and even occasionally aid, of those who wield magic.",
					"In general, it can be assumed with the vai that anything that is natural has been either replaced by something wholly and completely unnatural or transformed and corrupted in the same fashion.",
					"Vai do not see themselves as fey nor do other fey claim them and the fights between vai and fey are often the stuff of legend. Simply referring to a vai as fey is often sufficient to at the very least earn you a lecture on the difference if not a laser beam through your skull."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>