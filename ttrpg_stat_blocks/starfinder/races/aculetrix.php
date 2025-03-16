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
		"Aculetrix", // $name=''
		[
			""
		], // $desc=[]
		[
			'any' => +2
		], // $stats=[]
		6, // $hp=0
		"Aculetrices are Medium monstrous humanoids though, for effects targeting creatures by type, they count as both monstrous humanoids and as vermin (whichever type allows an ability to affect them for abilities that affect only one type, and whichever is worse for abilities that affect both types).", // $size_type=''
		[
			"Aculetrix Movement" => "Aculetrices have a base speed of 20' and fly speed of 30' with average maneuverability.",
			"Carrier" => "Aculetrices increase their carrying capacity by 50%.",
			"Senses" => "Aculetrices have low-light vision and blindsense (scent) to a range of 30 feet.",
			"Sting" => [
				"Aculetrices can attack with a special unarmed strike, in the form of their sting, that deals lethal damage, doesn't count as archaic, and threatens squares. Using their sting can only be done while flying but an aculetrix can use her wings to momentarily launch herself into the air to use her sting as part of an attack with it while standing.",
				"Additionally, an aculetrix can load her sting with venom as part of her attack action. Once loaded, a creature that takes at 1 point of damage from the sting is poisoned and the sting is no longer loaded. Once an aculetrix loads her sting it remains loaded until she successfully deals damage to an opponent. She cannot load her sting again until she's spent a Resolve Point to recover Stamina Points after a 10-minute rest. She also cannot load her sting if it is already loaded.",
				"ii/Aculetricis Venom/ii; bb/Type/bb poison (injury); bb/Save/bb Fortitude DC 10 + the acultrix's level + her Constitution modifier; bb/Track/bb Dexterity; bb/Frequency/bb 1/round for 6 rounds; bb/End State/bb Immobile",
				"Aculetrices gain a special version of the Weapon Specialization feat with their sting at 3rd level, allowing them to add 1–1/2 × their character level to their damage rolls for this unarmed strike (instead of just adding their character level, as usual)."
			]
		]  // $traits=[]
	);
	blockSF(
		"About the Aculetrix",
		"race-description",
		[],
		false,
		[
			[
				'title' => 'Morphology',
				'spaced' => true,
				'texts' => quick_array([
					"Aculetrices have bodies similar to insects in the same clade such as ants, bees, and wasps. Aculetrices have adapted to raise their thoraxes vertical and off of the ground most of the time and their mid and hind legs are set close to their abdomen to support them while their forelegs have evolved grasping claws to hold and manipulate objects. All members possess a pair of wings typical for the clade and are capable of flight. While flying, aculetrices will bring their abdomen in below them and can use a stinger at the end to strike opponents.",
					"Like other eusocial insects in their clade, aculetrices are divided into workers, queens, and drones though most other races rarely if ever see any members other than workers and all adventurers are assumed to be workers."
				])
			],
			[
				'title' => 'Society',
				'spaced' => true,
				'texts' => quick_array([
					"Within aculetrix colonies, a small number of queens lay eggs which are provided for by workers. These workers are feminine but are incapable of laying their own eggs. Male members are relatively short-lived and mostly are sent to other colonies to fertilize its queen's eggs. Their short lifespan has led to them not developing a full sapience and instead simply following orders and instinct. Queens are tied down, unable to move due to their enlarged abdomens and must be tended and provided for by their worker daughters. Workers, then, are the only members able to freely move about and they live lives roughly akin to other races with jobs established for the betterment of the colony. Workers have little instinct for promoting their own needs, instead thinking only about the needs of their colony. This being largely due to them being unable to have their own offspring and instead their legacy lies in the cooperative effort of nurturing their sisters who will become new queens. Those who leave the colonies often find replacement colonies that they are equally invested in the betterment of, even at their own expense. This has led to aculetrices acquiring a reputation for diligence and work ethic as well as several megacorporations taking advantage of lone aculetrices and \"finding them a home\" in their hardest jobs for little pay."
				])
			],
			[
				'title' => 'Communication',
				'spaced' => true,
				'texts' => quick_array([
					"Aculetrices primarily communicate through releasing a complex series of pheromones, a method that has proven more than capable of satisfying most needs for both spoken and written communication methods used by other species. Despite this, aculetrices do have a more standard written language consisting of symbols representing the series of pheromones that would otherwise be used. This was primarily invented for use in records that need to be more enduring than the deposited pheromones that are standardly used and fade over time. After encountering other species from other worlds, aculetrices also discovered the need to be able to perform some form of verbal communication or else be unable to effectively communicate with outsiders. This led to the creation of small devices worn by aculetrices that possess pheromone sensors and map certain combinations of pheromones to preprogrammed syllables. These devices are worn by almost all aculetrices traveling outside of the colonies and player characters are assumed to be equipped with one. Matching devices can also be worn on the ears by travelers to the colonies to convert pheromones in the environment to sounds that they can distinguish."
				])
			]
		],
		true
	);
	require $startDir.'pageEnd.php';
?>