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
		'Piccilli',
		'Uncommon',
		'Humanoid',
		'Piccilli are humanoids that hail from the high bows and have been gifted the form of birds from the goddess Fluut, one of the three gods of the high bows of the mighty tree Geldrine which occupies the entirety of their home plane. Its branches support all manner of life and it is said that despite how far you travel you will not find their end nor trunk, not that many tested that claim. Though portals to the trunk can be found thoughout the inhabited regions of the branches, created either by gods or by powerful druids to unite the people of trunk and bows. The roots of the mighty Geldrine extend far, far below and are anchored in other planes of existence. Through these roots the people of the bows and trunk are able to create gateways to other realms and often trade with other planes.',
		[
			
		],
		[
			
		],
		'Piccilli have an overall humanoid look though their arms extend both below and to the sides into a pair of powerful wings. From the last joint on their wings they do have 3 fingers and thumb that can be used for grasping and holding objects but, unfortunately, doing so prevents their wings from being able to properly extend to generate lift so they must either stow carried items or hold them some other way before taking off. Their mouth and nose are replaced with an appropriate beak for the bird species they resemble and the colors and exact patterning of their feathers generally follow suit. Most of their feathers and small and soft and lay flat against their bodies with the exception of their wings, tail, and several tufts of feather on their head, above their eyes, and sometimes on their faces that are reminiscent of the hair of more mammalian humanoids. Their featers end a little down their lower legs and gives way to an almost scaly skin and their feet and shaped like and equipped with the talons or claws of the bird they resemble.',
		'Piccilli live fairly peaceful lives in the upper bows building houses by shaping the branches either magically or with patience and effort or by finding a suitable location to construct a house out of branches found elsewhere. From these dwellings they look down at the middle and lower bows often darting out to catch some prey. Their society has little organization and often plays by the rule "If you don\'t bother me I won\'t bother you," though respect is always paid to the priestesses and priests of the gods and especially those of Fluut.',
		'Piccilli\'s passive attitudes generally tend them towards more neutral alignment though it is in no way uncommon to see extreme ones. Most Piccilli primarily revere Fluut but many also follow the decrees of the other gods of the high bows and almost all respect the green faith.',
		'It is far from uncommon for Piccilli to tire of their mundane life and seek adventure. Most never return either travelling from place to place or settling elsewhere within the upper bows even another plane. A great many of these individuals find themselves adventureing for some time for one reason or another.',
		'8',
		'Medium',
		'25',
		'Dexterity, Intelligence, Free',
		'Strength',
		'Common
		Avian
		Additional languages equal to your Intelligence modifier (if it\'s positive). Choose from Auran, Celestial, Floran, Mathine, Muuyine, Sylvan, Wernan, and any other languages to which you have access (such as the languages prevalent in your region).',
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
					'title' => 'Flutter',
					'spaced' => false,
					'texts' => quick_array(
						'You can fly through the air in short bursts at half your land Speed. If you don\'t end your movement on solid ground, you fall at the end of your turn.
						You can make a reaction with the move trait whose trigger is when you fall for any reason to use your wings and prevent you from taking any fall damage from that fall.
						When Leaping horizontally, you move an additional 5 feet. You don\'t automatically fail your checks to High Jump or Long Jump if you don\'t Stride at least 10 feet first. In addition, when you make a Long Jump, you can jump a distance up to 10 feet further than your Athletics check result, though still with the normal maximum of your Speed.
						You cannot take advantage of this ability while holding an object of 1 bulk or more in either hand.
						/tt/1st Ed. Hybrid Description:
						You gain a fly speed equal to half your base speed. If you don\'t end you turn on solid ground, you fall.
						As an immediate action, as long as you are not denied your dexterity to AC, you can ignore damage from a fall.
						You are always treated as having a running start when jumping. In addition, when you make a long jump, you can jump a distance up to 10 feet further than your Athletics check result, though you still cannot exceed your maximum movement for the round.
						You cannot take advantage of this ability while holding an object weighing more than a pound in either hand.'
					)
				]
			]
	);
	require $startDir.'pageEnd.php';
?>