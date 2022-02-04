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
		'Muuyine',// Name
		'Uncommon',
		'Humanoid',// Creature Type Trait(s)
		'Muuyine are largely insectoid humanoids that live in the middle and lower bows of the mighty tree Geldrine which occupies the entirety of their home plane. Its branches support all manner of life and it is said that despite how far you travel you will not find their end nor trunk, not that many tested that claim. Though portals to the trunk can be found thoughout the inhabited regions of the branches, created either by gods or by powerful druids to unite the people of trunk and bows. The roots of the mighty Geldrine extend far, far below and are anchored in other planes of existence. Through these roots the people of the bows and trunk are able to create gateways to other realms and often trade with other planes.',// description
		[
			
		],// You Might...
		[
			
		],// Others Probably...
		'Muuyine stand largely upright, using their back two sets of appendages to stand on while using their front set to hold and carry things. Muuyine generally have large wings that they use to fly through the branches.',// Physical Description
		'TODO',// Society
		'TODO',// Alignment and Religion
		'TODO',// Adventurers
		'8',
		'Medium',
		'25',
		'Strength, TODO, Free',
		'Charisma',
		'Common
		Muuyine
		Additional languages equal to your Intelligence modifier (if it\'s positive). Choose from Avian, Floran, Mathine, Sylvan, Wernan, and any other languages to which you have access (such as the languages prevalent in your region).',
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
					'title' => 'Buzz',
					'spaced' => false,
					'texts' => quick_array(
						'You can fly through the air in short bursts at half your land Speed. If you don\'t end your movement on solid ground, you fall at the end of your turn.
						You can make a reaction with the move trait whose trigger is when you fall for any reason to use your wings and prevent you from taking any fall damage from that fall.
						When Leaping horizontally, you move an additional 5 feet. You don\'t automatically fail your checks to High Jump or Long Jump if you don\'t Stride at least 10 feet first. In addition, when you make a Long Jump, you can jump a distance up to 10 feet further than your Athletics check result, though still with the normal maximum of your Speed.
						/tt/1st Ed. Hybrid Description:
						You gain a fly speed equal to half your base speed. If you don\'t end you turn on solid ground, you fall.
						As an immediate action, as long as you are not denied your dexterity to AC, you can ignore damage from a fall.
						You are always treated as having a running start when jumping. In addition, when you make a long jump, you can jump a distance up to 10 feet further than your Athletics check result, though you still cannot exceed your maximum movement for the round.'
					)
				]
			]
	);
	require $startDir.'pageEnd.php';
?>