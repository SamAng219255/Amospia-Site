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
		'BioChromatic Breaths',
		'info',
		quick_array([
			'Each nalthian is born with a single BioChromatic Breath, often shortened to simply Breath. This Breath is an indivisible unit of investiture that can be used to awaken objects granting a semblance of life. Beyond this mundane type of breath, individuals known as returned possess a larger breath, called a Divine Breath, with different properties and an amount of investiture equal to 2,000 standard Breaths, granting such individuals the fifth heightening. Awakening requires more than just Breath however, the process of awakening drains the color (often in the form of pigmentation) out of nearby objects as fuel. Objects drained of color will usually turn gray, though an awakener of at least the tenth heightening can drain the color all the way to white. Black and brown do count as a colors and can be drained to fuel awakening.'
		]),
		true,
		[
			[
				'title' => 'Heightenings',
				'spaced' => true,
				'texts' => quick_array([
					'An individual will gain boons based on the number of breaths they are carrying. While these boons are acquired gradually, each breath adding to the ability, they become strongest and most obvious at certain checkpoints called heightenings. The list of heightenings and the abilities they grant are shown on the table below. Precise mechanics for the behavior of these abilities are primarily suggestions, the GM is encouraged to add or remove from this list as the situation needs at their discretion.',
					labeledSTable(
						'Heightenings',
						[
							'Number',
							'Breaths needed',
							'Abilities granted'
						],
						[
							[
								'First',
								'50',
								'Aura recognition'
							],
							[
								'Second',
								'200',
								'Perfect pitch'
							],
							[
								'Third',
								'600',
								'Perfect color recognition'
							],
							[
								'Fourth',
								'1,000',
								'Perfect life sense'
							],
							[
								'Fifth',
								'2,000',
								'Agelessness'
							],
							[
								'Sixth',
								'3,500',
								'Instinctive awakening'
							],
							[
								'Seventh',
								'5,000',
								'Invested breath recognition'
							],
							[
								'Eighth',
								'10,000',
								'Command breaking'
							],
							[
								'Ninth',
								'20,000',
								'Greater awakening, audible command'
							],
							[
								'Tenth',
								'50,000',
								'Color distortion, perfect invocation, mental commands, possibly others'
							]
						],
						true,
						false,
						false
					),
					'bb/Aura Recognition/bb Individuals with aura recognition are able to see the exact number of Breaths a person has merely by seeing them.',
					'bb/Perfect Pitch/bb The Second Heightening grants Perfect Pitch to those who receive it. This grants a +10 bonus to perform checks made by singing.',
					'bb/Perfect Color/bb Recognition The Third Heightening grants Perfect Color Recognition, the ability to instantly and instinctively determine exact shades of colors and their hue harmonics. This grants a +10 bonus to craft (painting) and profession (painter) checks as well as appraise checks made to identify or judge the price of gemstones.',
					'bb/Perfect Life Sense/bb Perfect Life Sense enhances the awakener\'s ability to sense the presence of nearby creatures allowing them to sense the presence and location of nearby living and undead creatures within 60 feet as if it possessed the blindsense ability except that it can detect creatures that are not in line of sight. This qualifies as a divination effect and can be affected by a coppercloud of any level. Exceptions include drabs and feruchemists filling a nicrosilmind at the maximum increment.',
					'bb/Agelessness/bb An awakener with agelessness stops aging and becomes immune to poisons and disease. They also receive a +10 bonus on saves vs effects that change their age.',
					'bb/Instinctive Awakening/bb The Sixth Heightening grants Instinctive Awakening, the ability to immediately understand and use basic Awakening Commands without training or practice.',
					'bb/Invested Breath Recognition/bb Invested Breath recognition grants the awakener the benefits of arcane sight and the ability to instantly identify if an object has been awakened and how many breaths it contains.',
					'bb/Command Breaking/bb Command Breaking allows the awakener to change the command of an awakened object or to remove its awakening.',
					'bb/Greater Awakening/bb Greater Awakening grants the awakener the ability to awaken stone and other entirely non-organic materials such as steel.',
					'bb/Audible Command/bb Audible Command allows an awakener to awaken any object within the sound of their voice instead of having to touch the object.',
					'bb/Color Distortion/bb Color Distortion is the intrinsic ability to bend light around white objects within their BioChroma, creating colors from them as if from a prism.',
					'bb/Perfect Invocation/bb When awakening, awakeners with Perfect Invocation can drain color from gray objects or drain twice as much color from non-gray objects in either case turning them white.',
					'bb/Mental Command/bb While made possible by possessing the tenth heightening, Mental Command is a skill that must be learned and is quite difficult. Mental Command allows an awakener to awaken objects without speaking by simply thinking of the intended command.',
					'There are rumors of other powers granted by the Tenth Heightening which are not understood or have not been made known by those who have achieved it.'
				])
			],
			[
				'title' => 'Transferring Breath',
				'spaced' => true,
				'texts' => quick_array([
					'As a standard action by using the Command "ii/My life to yours, my Breath become yours./ii" an individual can transfer their entire store of Breaths to another individual. This can also be used to store Breaths in an object where it can be retrieved from later, using the command "ii/Your Breath to mine./ii" as a standard action. Breaths stored in an object can only be retrieved by the individual who put them there unless they were storing an aluminummind at the maximum increment at the time.'
				])
			],
			[
				'title' => 'Awakening',
				'spaced' => true,
				'texts' => quick_array([
					'In most cases an awakener must be physically touching an object to awaken it. When awakening, the awakener speaks aloud a command that gives instruction to the object and mentally visualizes what they want the object to do. Awakening is a spell-like ability that does not allow a Will save, is affected by spell resistance, and requires vocal and thought components. Awakening results in what is called a BioChromatic entity. There are 4 types of BioChromatic entities depending mostly on what object is used as the subject of awakening. Each type of awakening requires a different amount of breath. This amount increases the less the object resembles a living thing.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>