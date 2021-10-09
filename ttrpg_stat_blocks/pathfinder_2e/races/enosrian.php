<?php require '../../pageStart.php'; ?>
<title>Thyllkthoron</title>
<?php
	race2eBlock(
		'Thyllkthoron',
		'Humanoid',
		'Many centuries ago, the ancestors of the Thyllkthoron were succubi and incubi exiled to the material plane, in a place they would com to call Enosria, following a failed coup of a demon lord and the subsequent death of their queen. After some time their essence was slowly replaced by that of the material plane eventually allowing them to birth mortal children. These children were less inclined to the parents evil ways and after a few generations they overthrew them. In time they became more and more diverse in their alignments though their appearance has changed little and they have preserved some portion of their gifts. Thyllkthoron have made themselves many demonic enemies in their history as they have foght to diffrentiate themselves from their demonic ancestors.',
		[
			
		],
		[
			'Mistake you for a Tiefling',
			'Associate you with with demons and the Abyss and either fear or despise you.',
			'Believe you\'re attempting to trick them.'
		],
		'Thyllkthoron appear to be particularly beautiful or handsome humans though with bat-like vestigial wings and some members also have one or two small horns or possibly a long sinuous tail.',
		'Thyllkthoron primarily live in a cluster of villages each with a ruling village council which each send a representative to a form a council ruling over their cluster of villages. In years past their would be much politicking and intrigue among these councils but they have since settled down and tend to be filled with wise village elders.',
		'Thyllkthoron run the full gamut of alignments but tend towards chaotic alignments and away from the evil alignments associated with their ancestors.
		Many Thyllkthoron worship Sarenrae and most of the rest have some connection to her as when the Thyllkthoron first took up the fight against evil, she admired their resolve granting them aid and helped them to overcome their demonic tendencies, ultimately granted them the title of Thyllkthoron.',
		'Thyllkthoron often become adventurers either for a taste of adventure or to lead crusades against various demonic forces. A rare few evil ones seek to reinvigorate their demonic connection and seek power. Adventuring is seen as a viable and even normal profession amongst their villages. Many individuals go adventuring as soon as they can and return after reaching great heights. Meaning that their villages have more than their fair sure of high level adventurers in them that often settle down and tell stories to their kids and the other village children of their daring adventures inpiring new generations of adventurers.',
		'8',
		'Medium',
		'25',
		'Constitution, Charisma, Free',
		'Strength',
		'Common
		Enosrian
		Additional languages equal to your Intelligence modifier (if it\'s positive). Choose from Abyssal, Aklo, Celestial, Draconic, Halfling, Infernal, Sylvan, and any other languages to which you have access (such as the languages prevalent in your region).',
			[
				[
					'title' => 'Darkvision',
					'spaced' => false,
					'texts' => [
						'You can see in darkness and dim light just as well as you can see in bright light, though your vision in darkness is in black and white.'
					]
				],
				[
					'title' => 'Change Shape',
					'spaced' => false,
					'texts' => quick_array([
						'As a Thyllkthoron, you gain the Change Shape ability.',
						'/tt/Change Shape /1l/',
						'qq/Concentrate/qqqq/Thyllkthoron/qqqq/Polymorph/qqqq/Transmutation/qq',
						'You transform into a more human-like version of yourself losing any overtly demonic features including your wings and any horns or a tail. Using Change Shape counts as creating a disguise for the Impersonate use of Deception. You can remain in your alternate form indefinitely, and you can shift back to your true form by using this action again.'
					])
				],
				[
					'title' => 'Succubus Vulnerabilities',
					'spaced' => false,
					'texts' => quick_array([
						'You are physical wounded by simply touching cold iron but you are also mentally wounded when rejected. You have weakness 5 to cold iron and simply touching a piece of cold iron does 1d4 damage to you. When you fail a Diplomacy check to Request, or when a creature succeeds at its save against one of your spells or abilities with the mental trait, you take 2d4 mental damage. If you critically failled the check or if the creature critically succeeded its save, the mental damage you take is doubled. For one hour after taking mental damage in this way, a creature can deal 1d4 mental damage to you with a successful Demoralize incorporating your rejection.'
					])
				]
			]
	);
	require '../../pageEnd.php';
?>