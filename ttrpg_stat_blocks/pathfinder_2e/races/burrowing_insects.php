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
		'Mathine',// Name
		'Uncommon',
		'Humanoid',// Creature Type Trait(s)
		'Mathine are largely insectoid humanoids that live in the trunk and lower bows of the mighty tree Geldrine which occupies the entirety of their home plane. Its branches support all manner of life and it is said that despite how far you travel you will not find their end nor trunk, not that many tested that claim. Though portals to the trunk can be found thoughout the inhabited regions of the branches, created either by gods or by powerful druids to unite the people of trunk and bows. The roots of the mighty Geldrine extend far, far below and are anchored in other planes of existence. Through these roots the people of the bows and trunk are able to create gateways to other realms and often trade with other planes.',// description
		[
			
		],// You Might...
		[
			
		],// Others Probably...
		'Mathine stand largely upright, using their back two sets of appendages to stand on while using their front set to hold and carry things. Mathine\'s claws on their front appendages as well as their mandibles are adapted to digging and burrowing and while they do possess wings they rarely use them. Mathine also have an acidic saliva that aids in burrowing.',// Physical Description
		'TODO',// Society
		'TODO',// Alignment and Religion
		'TODO',// Adventurers
		'8',
		'Medium',
		'25',
		'Strength, TODO, Free',
		'Charisma',
		'Common
		Mathine
		Additional languages equal to your Intelligence modifier (if it\'s positive). Choose from Avian, Floran, Muuyine, Sylvan, Wernan, and any other languages to which you have access (such as the languages prevalent in your region).',
			[
				[
					'title' => 'Tremorsense',
					'spaced' => false,
					'texts' => quick_array([
						'You gain tremorsense to a distance of 30 feet which is an imprecise which allows you to feel vibrations through a solid surface you are touching. Normally you can only detect things that moving along or through a object you are touching but while burrowing you can feel your own vibrations being reflected by other objects allowing you to detect where the substances you are burrowing through changes such as where it reaches the surface, where it transitions to a harder material (like where dirt meets the rock), and where objects in the substance are located. You can roughly tell where it transitions to being harder or softer or where it meets the surface but nothing else.',
						'/tt/1st Ed. Hybrid Description:',
						'You have 30 foot tremorsense and can additionally tell where the material transitions from one to another.'
					])
				],
				[
					'title' => 'Burrow',
					'spaced' => false,
					'texts' => quick_array(
						'You possess a 10 foot burrow speed that can also be used to burrow through wood.
						/tt/1st Ed. Hybrid Description:
						You possess a 10 foot burrow speed that can be used to burrow through wood.'
					)
				]
			]
	);
	require $startDir.'pageEnd.php';
?>