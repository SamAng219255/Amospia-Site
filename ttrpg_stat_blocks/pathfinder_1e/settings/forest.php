<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	block(
		'The Forest of Shadows',
		'setting',
		quick_array([
			'The Forest of Shadows itself is a demiplane created by the legendary hero Skadwalth as a safe refuge for a group known as the People of Shadows, and this settings includes various blocks and story elements resulting from these events.'
		]),
		false,
		[
			[
				'title' => 'History',
				'spaced' => false,
				'texts' => quick_array([
					'/ee/ bb/The Sceaduinar/bb',
					'The story begins with the mysterious group known as the Sceaduinar.',
					'For those unaware, the Sceaduinar are a crystalline race native to the Plane of Negative Energy and are almost negative energy counterparts to the isolationist Jyoti. Jyoti are native to the Plane of Positive Energy and within their cities they tend gardens of trees made from crystallized positive energy. With the Jyoti\'s aid, these trees transform quintessence from the Maelstrom and the focused ambient positive energy into souls that are sent off to the mortal planes. These postive energy infused souls become mortals before continuing on through the River of Souls and ultimately making up every known living thing in the multiverse with a few notable exceptions. The most well known of which being the Sceaduinar, whose souls are formed from negative energy instead.',
					'There is an ancient hatred possessed by both the Jyoti and the Sceaduinar of one another and the gods. While the Jyoti refuse to say anything on the matter, the Sceaduinar have described a time when there was peace between the Sceaduinar, the Jyoti, and the gods. This peace ended in some unspecified betrayal by the combine forces of the Jyoti and the gods during which the Sceaduinar were cut off entirely from the forces of positive energy. As such, Sceaduinar have no ability to create. How much of this story is true cannot be confirmed however it is the case that the Sceaduinar possess no ability to create anything original. Their building are simply copies, going through the motions forming clones of their enemies\' buildings, and they have no ability for invention or innovation. The Sceaduinar have, however put significant effort into guiding the growth of special trees formed from crystallized negative energy. With the Sceaduinar\'s guidance, these trees manifest ii/spheres of annihilation/ii which the Sceaduinar set loose to float through the plane like deadly balloons. The Sceaduinar have also stated their goals. To take their revenge on positive energy life thoughout the planes, wiping out every one, and to replace it with creatures of negative energy souls.',
					'/ee/ bb/A Hero is Made/bb',
					'The canon of this setting begins to deviate from that of standard Golarion with a group of Sceaduinar having successfully set cultists to spy on the Jyoti and inform the Sceaduinar on what actions are performed by the Jyoti in order to cultivate souls from the trees. Armed with this knowledge, these Sceaduinar replicate the actions with their own trees and for the first time successfully create a soul from negative energy. With the aid of their cultists they infused this soul with great power and engineer it a body. This newly created being is to be their champion who will lead their armies in driving out the creatures of posiive energy.',
					'While the Sceaduinar desire to immediately begin a large batch of souls as their first army, their champion convinces them otherwise saying that it would be unwise to draw attention to themselves by immediately creating an army as there are many who would quickly rise to stop them. Instead the champion suggests that he go into the world, learn everything he can, and grow in power so that when they create their army the champion could defend them while they build strength.',
					'And so the champion set off into the material plane to grow and gather strength, and the name given to this champion as he set out on this journey was Skadwalth.',
					'/ee/ bb/Skadwalth\'s Change of Heart/bb',
					'Skadwalth set out and journeyed across Golarion learning the art of mixing spell and sword, and discovering and aptitude for shadow magic, as he grew in strength. As his soul was composed of negative energy, he wuickly discovered that most "healing" spells seared his flesh and weakened his spirit while spells that used negative energy did restore his vitality. More than a few times he was mistaken for an undead and only the use of spells such as ii/detect evil/ii ii/detect undead/ii could properly convince people otherwise.',
					'Now many may believe that, being the champion of the evil Sceaduinar, he would be evil, but he was new soul, and mortal, and he had never performed nor been complicit in an evil act. As he was formed he was indoctrinated into believing that all those souls of positive energy were guilty of this unknown ancient betrayal and should be put to death. Replaced with a worthier people. But as he stumbled across Golarion he learned the goodness of its people.',
					'At first he thought he could convince the Sceaduinar to not make an army, to instead make a peaceful people to alongside the positive energy peoples. But as he learned more he learned the impossibility of the request. As he learned the history the acts of evil of the Sceaduinar he knew his request would fall upon deaf ears, beyond the fact that the gods and people of Golarion would never allow such being as they would be seen simply as ambominations and perversions. He knew that when he returned to his Sceaduinar creators, he would have the destroy them.',
					'/ee/ bb/The First People of Shadows/bb',
					'When Skadwalth believed himself strong enough, he returned to the Sceaduinar, determined to convinve them to halt their plans or to kill them. Though when he arrived he discovered both plans would be impossible. They had heard of his return and had already begun production of the new souls. Not only that but they spent the intervening time creating a small army of oblivions, colossal, intelligent, omnicidal oozes native from the Negative Energy Plane. Instead he devised a more cunning plan B.',
					'The first wave of mortal souls composed of negative energy were produced and given forms, a menagerie of grayed forms of positive energy humanoids. From here Skadwalth convinced the Sceaduinar to give him charge over the new mortals, saying that he would train them into an unstoppable army. Instead he sought out aid from a recluse arch-fey he had met and befriended on his journeys who ruled over a forest of darkness that existed simultaneously in the Material and Shadow Planes. He told her of his plight and she agreed to allow this people to hide in her forest. And so he whisked his new people from beneath the Sceaduinar\'s gaze into this forest where he taught them magic that would allow them to blend in with the other races of Golarion. He also taught them crafts and encouraged friendly trade with villages outside the forest. All the while expertly convincing the Sceaduinar of how their army needed more time to prepare.',
					'/ee/ bb/The Great Purges/bb',
					'The Sceaduinar created more souls as Skadwalth\'s people gave birth and had families and in time the relatively small forest was not large enough to house them all. As such, some began to move elsewhere with Skadwalth believing that their relations with their neighbors would protect them if any part of the secret got out. Unfortunately, one the people living outside the forest becmae injured in a hunt and when the local priest attempted to heal the unconscious individual, he cried out in pain before dying, leaving a gray body. This began a witch-hunt where in churches of several gods were called in to aid in discovering what were believed to be undead hiding among the living. MAgic was created by Skadwalth and his people to allow themselves to cause positive and negative energy to affect them in reverse in order to better hide but more advanced methods were employed such as wide area anti-magic fields that caused their disguises to fail.',
					'In time, as the methods became more advanced, distinguishing became nearly impossible and villages were wiped out on hearsay. Over time the rumors died down before more people of shadows were discovered causing numerous waves of fear and devastation known as the Great Purges. Skadwalth managed to hide most of these events from the Sceaduinar who had little ability to discern what was taking place in the Material Plane but the task was growing more difficult.',
					'/ee/ bb/The Last Great Purge/bb',
					'During this time it was revealed by several priests of Pharasma the true nature of their enemies. The priests and their god determined that these negative energy souls were a perversion of life and must be wiped out once and for all. After some investigation by Pharasma\'s forces, Vulhi\'s forest was located as the source and a great army of priests, paladins, psychopomps and angels under Pharasma\'s command and surrounded the forest. The investigations from extraplanar entities drew the attention of the Sceaduinar who discovered their army was not only under grave threat but also completely unprepared for open war. They rushed to forest with their oblivions in tow. War raged with Pharasma\'s forces unable to breach very deep into the forest. It was not long before the simple solution came to them, and they lit the forest aflame. As the forest burned, a great many of the forces on both sides were felled and by the the end, Skadwalth had only managed to save a few hundred of his people. Among the casualties were the Sceaduinar, their oblivions, Vulhi, and most of the army of Pharasma. Vulhi was preserved in a way, however, as Skadwalth managed to save her essence in a aa/blade_of_the_forests_shadow|blade/aa.',
					'In truth the battle did not end because the greater military might of one side or the other, but rather because of what happened when Skadwalth fell in battle. Skadwalth arrived on the other side to see vanth cutting down the souls of his people as they died, denying them their afterlives. Upon seeing this a rage burned within Skadwalth and as a vanth appoached him to similarly cut down his soul, Skadwalth called upon the powers his soul was infused with at its creation. He called shadow-stuff from the plane of shadow and formed armor and a sword before wielding it, together with spells he managed to recall despite his death, to wipe out the nearby vanth. He then managed to teleport himself to an artifact he had heard mention of, located at the heart of Absalom city. Here he began to weave a spell to use the power of the Starstone to grant himself god-hood, bypassing any lengthy trial set forth by gods who hated him. It was here that Pharasma herself descended to intervene but it was too late. He was already far enough through the spell as to be able to resist her power long enough to complete it and threaten to wipe all of her temples off the map if she did not call off her forces. Not wanting a war of gods Pharasma reluctantly agreed and allowed him to collect the remainder of his people\'s dead.',
					'/ee/ bb/The New Forest/bb',
					'Skadwalth needed to find a new home for his people. One which would protect them from any future attacks. To this end he devised a demiplane located between the Plane of Shadow and the Material Plane whose contents were an impossible maze from which none could escape except by his grace. It was here that he placed his people. His people could come and go as they pleased but others wandering in would be lost, potentially forever. Those souls that were left after the battle he made into Kyromaws, his psychopomps that would tend the gardens tht grow new souls and carry the souls of his people\'s dead to afterlives that he created for them within regions of the forest.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>