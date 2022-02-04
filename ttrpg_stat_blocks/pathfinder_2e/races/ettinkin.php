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
		'Ettinkin',// Name
		'Uncommon',
		['Giant', 'Humanoid'],// Creature Type Trait(s)
		'Gardinians are plant-based humanoids that hail from the bows and are known as the children of Oberron and Titania, two of the three gods of the high bows of the mighty tree Geldrine. Which occupies the entirety of their home plane. Its branches support all manner of life and it is said that despite how far you travel you will not find their end nor trunk, not that many tested that claim. Though portals to the trunk can be found thoughout the inhabited regions of the branches, created either by gods or by powerful druids to unite the people of trunk and bows. The roots of the mighty Geldrine extend far, far below and are anchored in other planes of existence. Through these roots the people of the bows and trunk are able to create gateways to other realms and often trade with other planes.',// description
		[
			
		],// You Might...
		[
			
		],// Others Probably...
		'Gardinians are generally humanoid though their bodies are made entirely of various plants.',// Physical Description
		'TODO',// Society
		'Gardinians\'s alignment vary heavily depending in part on which of their parent deities they favor or if they show disdain for one or the other. Most Gardinians favor Oberron and Titania though not all worhip them favoring the Green Faith instead. Others still show disdain for them and may worhip one of the gods of the roots.',// Alignment and Religion
		'TODO',// Adventurers
		'10',
		'Medium',
		'25',
		'Strength, Free',
		'',
		'Common
		Jotünn
		Additional languages equal to your Intelligence modifier (if it\'s positive). Choose from , , , , , , , and any other languages to which you have access (such as the languages prevalent in your region).',
			[
				[
					'title' => 'Darkvision',
					'spaced' => false,
					'texts' => quick_array([
						'You can see in darkness and dim light just as well as you can see in bright light, though your vision in darkness is in black and white.'
					])
				],
				[
					'title' => 'Mental Battler',
					'spaced' => false,
					'texts' => quick_array(
						'Having two minds gives you additional resistance against mental attacks. You receive a bonus equal to one half your level, rounded up, to your will saving throw and save DC. You also have mental resistance equal to half your level rounded up.'
					)
				]
			]
	);
	require $startDir.'pageEnd.php';
?>