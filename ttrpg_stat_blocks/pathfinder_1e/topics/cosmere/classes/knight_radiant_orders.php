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
	block(
		'Orders of the Knight Radiant',
		'info',
		quick_array([
			'The Knights Radiant is comprised of ten different Orders, some of which have several hundred members. Each Order has two Surges associated with it, and each Surge is used by two different Orders.'
		]),
		true
	);
	contents(
		[
			'Windrunners',
			'Skybreakers',
			'Dustbringers',
			'Edgedancers',
			'Truthwatchers',
			'Lightweavers',
			'Elsecallers',
			'Willshapers',
			'Stonewards',
			'Bondsmiths'
		]
	);
	block(
		'Windrunners',
		'kr-order',
		quick_array([
			'ii/Windrunners bond with honorspren, which gives them the ability to use the Surges of Adhesion and Gravitation. The combination of these two Surges results in the powers known as the Three Lashings. Windrunners are associated with the sapphire polestone, the essence of Zephyr, and the Herald Jezrien./ii',
			'bb/Good Saves/bb Fortitude and Reflex',
			'bb/Bad Saves/bb Will',
			'bb/Primary Surge/bb Adhesion',
			'bb/Secondary Surge/bb Gravitation',
			'bb/Radiant Spren/bb Honorspren',
			'bb/Lesser Spren/bb Windspren',
			'bb/Additional Class Skills/bb Acrobatics, Diplomacy, Fly'
		]),
		false,
		[
			[
				'title' => 'Order Abilities',
				'spaced' => true,
				'texts' => quick_array([
					'ii/Strength of Squires/ii (Su): Windrunners are able to empower more squires and grant them benefits over a longer distance. At 6th level they gain Leadership as a bonus feat with a +4 to their Leadership Score. The cohort and followers gained from this feat become the knight\'s squires and gain benefits as normal. These are in addition to the normal limit of squires a knight radiant can have.',
					'ii/Reverse Lashing/ii: Windrunners gain access to the reverse lashing spell-like surgebinding ability at first level.'
				])
			]
		]
	);
	block(
		'Skybreakers',
		'kr-order',
		quick_array([
			'ii/Skybreakers bond with highspren, which gives them the ability to use the Surges of Gravitation and Division. Skybreakers are associated with the smokestone polestone, the essence of Vapor, and the Herald Nale./ii',
			'bb/Good Saves/bb Fortitude and Will',
			'bb/Bad Saves/bb Reflex',
			'bb/Primary Surge/bb Gravitation',
			'bb/Secondary Surge/bb Division',
			'bb/Radiant Spren/bb Highspren',
			'bb/Lesser Spren/bb ?',
			'bb/Additional Class Skills/bb Fly, Sense Motive, ? (Division)' 
		]),
		false,
		[
			[
				'title' => 'Order Abilities',
				'spaced' => true,
				'texts' => quick_array([
					'ii/Code of Law/ii: Skybreakers must be lawful.',
					'ii/Aura of Law/ii (Ex): The power of a Skybreaker\'s aura of law (see the ii/detect law/ii spell) is equivalent to the aura of a cleric of the same level.',
					'ii/Divining Gaze/ii (Ex): Skybreakers are trained and skilled at separating truth from lie, granting them a +5 bonus Sense Motive and they can make a Sense Motive check against an individual\'s Will save as a full round action. On a success they determine the creature\'s alignment. On a failure the creature may make a Bluff check opposed by a Sense Motive check by the skybreaker. If the creature succeeds at their Bluff check, the skybreaker believes the creature\'s alignment to be whatever the creature decides. If the creature fails, the skybreaker is aware they failed to detect the creature\'s alignment. In any of the cases, the skybreaker cannot make another attempt for 24 hours.'
				])
			]
		]
	);
	block(
		'Dustbringers',
		'kr-order',
		quick_array([
			'ii/Dustbringers - or as they prefer, Releasers - bond with ashspren, which gives them the ability to use the Surges of Division and Abrasion. Their powers tend to be destructive. Dustbringers are associated with the ruby polestone, the essence of Spark, and the Herald Chanarach./ii',
			'bb/Good Saves/bb Fortitude and Will',
			'bb/Bad Saves/bb Reflex',
			'bb/Primary Surge/bb Division',
			'bb/Secondary Surge/bb Abrasion',
			'bb/Radiant Spren/bb Ashspren',
			'bb/Lesser Spren/bb ?',
			'bb/Additional Class Skills/bb Acrobatics, Disable Device, ? (Division)' 
		]),
		false,
		[
			[
				'title' => 'Order Abilities',
				'spaced' => true,
				'texts' => quick_array([
					'ii/Tinkers/ii: Dustbringers are skilled at taking things apart and learning how they work. Dustbringers receive a +5 bonus to Disable Device checks.'
				])
			]
		]
	);
	block(
		'Edgedancers',
		'kr-order',
		quick_array([
			'ii/Edgedancers bond with cultivationspren, which gives them the ability to use the Surges of Abrasion and Progression. Edgedancers are associated with the diamond polestone, the essence of Lucentia, and the Herald Vedel./ii',
			'bb/Good Saves/bb Reflex and Will',
			'bb/Bad Saves/bb Fortitude',
			'bb/Primary Surge/bb Abrasion',
			'bb/Secondary Surge/bb Progression',
			'bb/Radiant Spren/bb Cultivationspren',
			'bb/Lesser Spren/bb Lifespren',
			'bb/Additional Class Skills/bb Acrobatics, Diplomacy, Heal' 
		]),
		false,
		[
			[
				'title' => 'Order Abilities',
				'spaced' => true,
				'texts' => quick_array([
					'ii/Friend of the People/ii: Edgedancers must be good.'
				])
			]
		]
	);
	block(
		'Truthwatchers',
		'kr-order',
		quick_array([
			'ii/Truthwatchers bond with mistspren, gaining the ability to use the Surges of Progression and Illumination. The surge of Progression grants the Truthwatchers the power of regrowth, which allows them to heal people. Truthwatchers are associated with the emerald polestone, the essence of Pulp, and the Herald Pailiah./ii',
			'bb/Good Saves/bb Reflex and Will',
			'bb/Bad Saves/bb Fortitude',
			'bb/Primary Surge/bb Progression',
			'bb/Secondary Surge/bb Illumination',
			'bb/Radiant Spren/bb Mistspren',
			'bb/Lesser Spren/bb ?',
			'bb/Additional Class Skills/bb Heal, Disguise, Sense Motive' 
		]),
		false,
		[
			[
				'title' => 'Order Abilities',
				'spaced' => true,
				'texts' => quick_array([
					'ii/??/ii: ??'
				])
			]
		]
	);
	block(
		'Lightweavers',
		'kr-order',
		quick_array([
			'ii/Lightweavers bond with Cryptics, or liespren, which gives them the ability to use the Surges of Illumination and Transformation. They can create illusions and have the inherent ability to Soulcast. Lightweavers are associated with the garnet polestone, the essence of Blood, and the Herald Shalash./ii',
			'bb/Good Saves/bb Reflex and Will',
			'bb/Bad Saves/bb Fortitude',
			'bb/Primary Surge/bb Illumination',
			'bb/Secondary Surge/bb Transformation',
			'bb/Radiant Spren/bb Cryptics',
			'bb/Lesser Spren/bb Creationspren',
			'bb/Additional Class Skills/bb Bluff, Disguise, Perception' 
		]),
		false,
		[
			[
				'title' => 'Order Abilities',
				'spaced' => true,
				'texts' => quick_array([
					'ii/Mnemonic Ability/ii (Ex): Lightweavers possess the ability to capture a copy of a scene or image in their memory. This copy is perfect, with the exception of text, the contents of which are not retained. While stored as such, the lightweaver cannot directly access the contents of the image. It can be used to replicate the scene while drawing, painting, sculpting, or performing other creative works in order to recreate the image. Once this is done the lightweaver loses the memory and cannot reuse it. A lightweaver may store a maximum number of such images at a time equal to their level.',
					'If an image is used to create an illusion using lightweaving, the lightweaver receives a +5 bonus and is treated as having rolled a 20 on whichever skill was used to create the illusion. Similarly, if a work of art was created using a stored image and then used as a focus to create a lightweaving illusion, the lightweaver is treated as having rolled a 20 on the skill used to create the work of art.'
				])
			]
		]
	);
	block(
		'Elsecallers',
		'kr-order',
		quick_array([
			'ii/Elsecallers bond with inkspren, which gives them the ability to use the Surges of Transformation and Transportation. They have the inherent ability to Soulcast. They have the closest affiliation with Shadesmar out of all the orders. Elsecallers are associated with the zircon polestone, the essence of Tallow, and the Herald Battar./ii',
			'bb/Good Saves/bb Fortitude and Will',
			'bb/Bad Saves/bb Reflex',
			'bb/Primary Surge/bb Transformation',
			'bb/Secondary Surge/bb Transportation',
			'bb/Radiant Spren/bb Inkspren',
			'bb/Lesser Spren/bb Logicspren',
			'bb/Additional Class Skills/bb Knowledge (pick one), Perception, ? (Transportation)' 
		]),
		false,
		[
			[
				'title' => 'Order Abilities',
				'spaced' => true,
				'texts' => quick_array([
					'ii/Distant Soulcasting/ii: Elsecallers are able to use the surge of transportation in aid in their use of the surge of transformation. Doing so allows them to extend the range of the soulcasting ability from touch to close (25 ft + 5 ft./level).'
				])
			]
		]
	);
	block(
		'Willshapers',
		'kr-order',
		quick_array([
			'ii/Willshapers bond with lightspren, also known as Reachers, which gives them the ability to use the Surges of Transportation and Cohesion.[13] Willshapers are associated with the amethyst polestone, the essence of Foil, and the Herald Kalak./ii',
			'bb/Good Saves/bb Fortitude and Will',
			'bb/Bad Saves/bb Reflex',
			'bb/Primary Surge/bb Transportation',
			'bb/Secondary Surge/bb Cohesion',
			'bb/Radiant Spren/bb Lightspren',
			'bb/Lesser Spren/bb ?',
			'bb/Additional Class Skills/bb ? (Cohesion), ? (Transportation), ? (Willshaper)' 
		]),
		false,
		[
			[
				'title' => 'Order Abilities',
				'spaced' => true,
				'texts' => quick_array([
					'ii/??/ii: ??'
				])
			]
		]
	);
	block(
		'Stonewards',
		'kr-order',
		quick_array([
			'ii/Stonewards bond with peakspren, gaining the ability to use the Surges of Cohesion and Tension. Stonewards are associated with the topaz polestone, the essence of Talus, and the Herald Talenel./ii',
			'bb/Good Saves/bb Fortitude and Will',
			'bb/Bad Saves/bb Reflex',
			'bb/Primary Surge/bb Cohesion',
			'bb/Secondary Surge/bb Tension',
			'bb/Radiant Spren/bb Peakspren',
			'bb/Lesser Spren/bb ?',
			'bb/Additional Class Skills/bb Diplomacy, ? (Cohesion), ? (Tension)' 
		]),
		false,
		[
			[
				'title' => 'Order Abilities',
				'spaced' => true,
				'texts' => quick_array([
					'ii/??/ii: ??'
				])
			]
		]
	);
	block(
		'Bondsmiths',
		'kr-order',
		quick_array([
			'ii/Bondsmiths bond with three unique spren—the Stormfather, the Sibling, and the Nightwatcher—which gives them the ability to use the Surges of Tension and Adhesion. Bondsmiths are associated with the heliodor polestone, the essence of Sinew, and the Herald Ishar./ii',
			'bb/Good Saves/bb Fortitude and Will',
			'bb/Bad Saves/bb Reflex',
			'bb/Primary Surge/bb Tension',
			'bb/Secondary Surge/bb Adhesion',
			'bb/Radiant Spren/bb Various (Special, see text)',
			'bb/Lesser Spren/bb Gloryspren',
			'bb/Additional Class Skills/bb Diplomacy, ? (Tension), ? (Bondsmith)' 
		]),
		false,
		[
			[
				'title' => 'Order Abilities',
				'spaced' => true,
				'texts' => quick_array([
					'ii/Greater Spren/ii: Bondsmiths form bonds with one of three incredibly powerful spren. As such there can only be 3 bondsmiths at any given time, though they can each have a number of squires. These spren are the Stormfather, the Nightmother, and the Sibling. Unlike normal radiant spren, distance between the spren and the knight has no effect. These spren do not usually travel with their bonded knight though they can still grant all of the usual benefits and can communicate telepathically and empathically with their bonded knight. Similarly, bondsmiths do not gain access to the Shardblade class feature as their spren cannot be summoned as a blade.',
					'ii/Beacon of Light/ii (Su): Bondsmiths can call large quantities of investiture of a type matching the shard or shards whose investiture composes their bonded spren. This can be collected in nearby gemstones or can be absorbed by individuals capable of absorbing that type of investiture. When the Stormfather\'s bondsmith uses this ability, it calls Honor\'s perpendicularity to them, returning when they stop, which can be used to travel between the Cognitive and Physical Realms.
'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>