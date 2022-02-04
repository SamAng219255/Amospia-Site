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
	race2eBlock(
		'Gardinian',// Name
		'Uncommon',
		['Humanoid', 'Plant'],// Creature Type Trait(s)
		'Gardinians are plant-based humanoids that hail from the bows and are known as the children of Oberron and Titania, two of the three gods of the high bows of the mighty tree Geldrine. Which occupies the entirety of their home plane. Its branches support all manner of life and it is said that despite how far you travel you will not find their end nor trunk, not that many tested that claim. Though portals to the trunk can be found thoughout the inhabited regions of the branches, created either by gods or by powerful druids to unite the people of trunk and bows. The roots of the mighty Geldrine extend far, far below and are anchored in other planes of existence. Through these roots the people of the bows and trunk are able to create gateways to other realms and often trade with other planes.',// description
		[
			
		],// You Might...
		[
			
		],// Others Probably...
		'Gardinians are generally humanoid though their bodies are made entirely of various plants.',// Physical Description
		'TODO',// Society
		'Gardinians\'s alignment vary heavily depending in part on which of their parent deities they favor or if they show disdain for one or the other. Most Gardinians favor Oberron and Titania though not all worhip them favoring the Green Faith instead. Others still show disdain for them and may worhip one of the gods of the roots.',// Alignment and Religion
		'TODO',// Adventurers
		'8',
		'Medium',
		'25',
		'Constitution, Wisdom, Free',
		'Intelligence',
		'Common
		Floran
		Additional languages equal to your Intelligence modifier (if it\'s positive). Choose from Avian, Mathine, Muuyine, Sylvan, Wernan, and any other languages to which you have access (such as the languages prevalent in your region).',
			[
				[
					'title' => 'Low-Light Vision',
					'spaced' => false,
					'texts' => quick_array([
						'You can see in dim light as though it were bright light, so you ignore the concealed condition due to dim light.',
						'/tt/1st Ed. Hybrid Description:',
						'You have low-light vision and can see twice as far as humans in conditions of dim light.'
					])
				],
				[
					'title' => 'TODO',
					'spaced' => false,
					'texts' => quick_array(
						'TODO
						/tt/1st Ed. Hybrid Description:
						TODO'
					)
				]
			]
	);
	require $startDir.'pageEnd.php';
?>