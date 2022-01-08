<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<title>The Nether</title>
<?php
	block(
		'The Nether',
		'plane',
		[
			'The Nether is coexistent with the Overworld (Material Plane). Every location in the Overworld has a one to one correlation with location in the Nether but these regions in the Nether are about eight times closer together. When combined with the ease with which portals can be manufactured to transport creatures from to other, this makes the Nether popular for building express roads from one location to another. Despite being coexistent as such, neither creatures nor other phenomenon, besides portals and other means of express interdimensional connection, are able to interact from one plane to another. The Nether is a land of death, undeath, fire, torture, evil, and souls though some life still thrives.',
			'The majority of the terrain in the Nether is composed of a relatively soft red rock that forms large caverns that hold oceans of magma that flow like water. In several regions though, the environment varies. Two, nearly identical, varieties of "forests" can be found amidst the fire and rock of the nether. The crimson forests are filled with strange red fungus that grows to the size of trees. These tree sized fungus can be chopped down and their stems can be used like wood. The smaller fungus feeds the voracious appetites of the hoglins, though they are not against adding some meat to their diet if some were to wander along and they have a habit of resortting to cannibalism if food grows scarce. The hoglins on turn are hunted by the piglins for food though they too will eat some amount of the red fungus. The other forests that can be found are the warped forests. Warped forests contain a warped version of the crimson fungus that has been infected by the energies of the End and has turned a blue color. This warped fungus is deadly toxic to the hoglins and piglins and they have learned to avoid it. These forests tend to spring up around locations close to the End and enderman often jump the gaps in these locations and wander the forests of blue fungus. Other environments can also be found in the Nether, including soul sand valleys baslat delatas, Soul sand valleys have much deper cave systems and the ground is covered in a patchwork of soul sand and soul soil, concentrated souls from over the millenia trapped like coal. These regions also contain many bones of differing sizes though there is much debate as to where they originate. Some of the more human sized bones often collect together and are animated by some of the souls becoming undead skeletons. Basalt deltas are primarily home to magma cubes and striders and contain many basalt "castles" where regions of basalt columns have formed together with only the lower portions remaining leaving odd block of basalt said by some to resemble castles. The other primarily feature of the delta are terraces of magma where lips have formed of baslat though magma occasionally pours over from one level to another.'
		],
		true,
		[
			[
				'title' => 'Traits',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Gravity/bb: Normal',
					'bb/Time/bb: Normal',
					'bb/Realm/bb: Immeasurable',
					'bb/Structure/bb: Lasting',
					'bb/Essence/bb: Mixed',
					'bb/Alignment/bb: Mildly Evil-Aligned',
					'bb/Magic/bb: Enhanced (spells and spell-like abilities of the necromancy school or with the evil or fire descriptor) and Impeded (spells and spell-like abilities with the cold, good, healing, or water descriptor)',
				])
			],
			[
				'title' => 'Denizens',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Blaze/bb: Blaze are quick to anger, though uncommon outside the fortresses where swarms of them are summoned by the wither skeleton masters, and will generally attack on sight anything they can get away with, potentially firing its flame blasts from hundreds of feet away if it can see a target.',
					'bb/Corporeal Undead/bb: It is not uncommon to find roaming packs of skeletons and zombies created via different magics though by far more common are nether zombies, created naturally from the local piglin population, and the dreaded wither skeletons. Pgiglins turned into nether zombies are generally not hostile but one must be quite careful not to set them off. If even one decides it doesn\'t like you the entire pack will be on your tail in moments calling out to any others that can hear to join the hunt. Wither skeletons generally remain in their fortresses plotting and planning only venturing outward to recruit more undead for their armies. Regular skeletons are particularly common in the soul sand valleys throughout the Nether.',
					'bb/Ghast/bb: Ghast are the petitioners of the Nether, these petitioners cry out in torment contantly and their cries travel much further than they should. Should they spot a mortal wandering by they are likely to take out their torment on them, hurling exploding balls of fire in their direction. After many millenia, ghast eventually find it difficult to maintain their forms and sink to the lower areas of the nether where their forms dissolve and they join their predecessors in being compressed and concentrated forming more soul sand.',
					'bb/Hoglins/bb: Hoglins resemble large, wild, hairless boars, thoough still retaining a few bristles that go down their backs like a horse\'s mane. These animals are aggresive and will attack, and eat, anything they feel like they can get away with. Though they mostly stick to the crimson firests where they can find the greatest adundance of food.',
					'bb/Magma Cubes/bb: Magma cubes are found uncommonly bobbing in the magma oceans or around their edges though can be found in great numbers in the basalt deltas. It is unknown how these oozes feed themselves though they will hungrily chase after any creature that approaches.',
					'bb/Piglins/bb: Piglins are the only humanoid inhabitants of the Nether and are constantly on the move to avoid danger. Piglins generally reside in the crimson forests where they can find food and materials from which to build tools and temporary shelters. Piglins regularly travel the spaces of wasteland that dominate the landscape of the nether on search of gold (to use in their forge-work), richer forests, and the potential shelter of a bastion ruin.',
					'bb/Striders/bb: A strange animal found in the magma oceans, striders take advantage of the rock-like density of the magma and use specially designed feet to effectively walk across its surface. Striders are uncommonly passive for denizens of the Nether, using their speed in the magma to avoid confrontation. Striders, oddly, like feeding on the warped fungus from the warped forests and it can be used to attract a dtrider and train it as a mount though they are used to the heat of the magma and do poorly outside of it.'
				])
			],
			[
				'title' => 'Divinities',
				'spaced' => true,
				'texts' => quick_array([
					'No known divinities reside in the Nether',
					'bb/Outsiders/bb: Blaze',
					'bb/Petitioners/bb: <a href="../monsters/ghast.php">Ghast</a>'
				])
			],
			[
				'title' => 'Infusions',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Basic/bb: You are infused with the Nether\'s unique mix of fire and undeath. You gain a +2 bonus on saving throws against fire effects and are affected by positive and negative energy as if you were undead.',
					'bb/Improved/bb: You can summon a <a href="../monsters/blaze_lesser.php">Lesser Blaze</a> to fight for you as ii/summon monster/ii once per day as a spell-like ability. At level 13 you can use this ability to summon a <a href="../monsters/blaze.php">Blaze</a> instead and at level 15 you can use this ability to summon an <a href="../monsters/inferno.php">Inferno</a>.',
					'bb/Greater/bb: You can cast ii/create undead/ii as a spell-like ability once per day. At level 17 you can use this ability to ii/create greater undead/ii as well but can only cast one or the other each day.',
				])
			]
		]
	);
?>
<p class="spaced"><b>Exploration</b></p>
<p class="spaced">Travel through the Nether can be dangerous to unwary explorers. The floor of many of the caverns in filled with an ocean of magma and so most creatures spend their time on the many ledges overlooking these oceans and in the smaller caves above.</p>
<p class="spaced"><b>Lighting</b></p>
<p class="spaced">Between the glowing magma and the glowing crystals which hang from the ceiling, the Nether is rarely ever truly dark. Mos tof the Nether is dim lighting though areas near the magma or several crystals can be normal light.</p>
<p class="spaced"><b>Temperature</b></p>
<p class="spaced">The Nether remains a fairly constant temperature of about 100° F and it is reccomended that adventurers bring means of remaining cool such as casting <i>endure elements</i>.</p>
<p class="spaced"><b>Magic in the Nether</b></p>
<p class="spaced">Necromancy and fire are empowered in the nether while cold, good, healing, and water spells are impeded. Given that most denizens of the Nether are undead and even more are immune to fire, this can greatly put a damper on most spellcasters. Non-magical healing is reccomended as well as fire and electricity spells for defense.</p>
<p class="spaced"><b>Structures</b></p>
<p class="spaced">While most of the plane is wilderness there do exist a number of structures in the forms of nether fortresses and bastion remnants.</p>
<p class="spaced">Nether fortresses are made from hardening the natural stone of the area into tough red bricks which are used to build massive networks of bridges over the magma. These fortresses are the domains of the wither skeletons, the primary intelligent undead of the area.</p>
<p class="spaced">Bastion remnants can be found throughout the Nether and are beleived to have been built by the same ancient civilization as created the netherite debris as netherite can be found within many of their ancient stores. Each ruin found appears to be a section of a once mighty wall though their scattered positioning makes it appear as though they were part of many different, but similar, walls. These remnants are often inhabitted by piglins who use them for shelter.</p>
<p class="spaced"><b>Soul Sand</b></p>
<p class="spaced">Strange patches of an odd sandy material compose of concentrated and corrupted souls that tug at the souls of all those that venture near. These patches are generally found in the low-lands of the Nether though can be found in great abundance in the soul sand valleys. Any square containing soul sand is treated as difficult terrain and any creature that ends their turn in a square filled with soul sand must make a will save or else be <i>slowed</i> as per the spell for 1 round. Spells such as <i>death knell</i> that are powered by souls can draw power from soul sand instead of a dead or dying creature.</p>
<?php require $startDir.'pageEnd.php';?>