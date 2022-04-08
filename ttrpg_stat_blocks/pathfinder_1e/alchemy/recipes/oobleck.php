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
	advAlchemyBlock(
		'Oobleck',// Name
		'Cauldron',// Form
		[],// Descriptors
		7,// Level
		[
			'Effect' => '2-mile-radius storm clouds'
		],// Additional Properties
		'24 hours',// Duration
		'none; see text',// Saving Throw
		'This recipe conjures the strange type of weather called oobleck. Within the area, a strange green goopy substance falls. When it starts, the drops are no bigger than a pea but it quickly picks up, with globs growing in size up to 5 feet in diameter. Creatures and objects that end their turn outside of a structure that can protect them from the elements must make a Reflex save or else become ensnared, or further ensnared, by the sticky oobleck.
		On the first failed save, the creature becomes entangled. If the creature fails their save while already entangled by the oobleck, they are automatically treated as being grappled by the oobleck. If they were already treated as being grappled by the oobleck they are instead treated as being pinned. Finally, if they failed their save while already pinned they become bound by the oobleck and are helpless.
		While only entangled by the oobleck, the creature can spend a move action to attempt an Escape Artist or combat maneuver check against the oobleck\'s current CMD to remove the condition. If grappled by the oobleck they can make their checks as normal to escape the grapple though they are still entangled. If the make their check to escape while pinned they do not escape the grapple, only lose the pinned condition. Lastly, if they are bound by the oobleck they cannot escape on their own. Creatures within melee range can attempt to use the aid another action, making an attack roll against AC 10, to grant an ensnared creature a +2 bonus to their check and to grant a creature bound by the oobleck a combat maneuver or Escape Artist check against the oobleck\'s CMD to reduce their condition to pinned though they have the other penalties from the helpless condition, including being treated as having a Dexterity of 0 (-5 modifier).
		The oobleck can only affect creatures up to a given size to a given degree depending on the current severity of the storm which grows worse as it continues. In addition, as the storm grows worse it becomes harder to escape or break free from the oobleck. The base CMB is equal to the practicer\'s alchemy level plus their intelligence modifier. The base CMD is equal to 10 plus the practicer\'s alcehmy level plus twice their intelligence modifier.
		'.sTable(
			[
				'Time since starting',
				'Maximum entangled size',
				'Maximum grappled size',
				'Maximum pinned size',
				'Maximum bound size',
				'Reflex DC',
				'CMB',
				'CMD'
			],
			[
				[
					'0 hours',
					'Diminutive',
					'Fine',
					'—',
					'—',
					'Recipe&nbsp;DC&nbsp;–&nbsp;4',
					'base&nbsp;–&nbsp;4',
					'base&nbsp;–&nbsp;4'
				],
				[
					'15 minutes',
					'Tiny',
					'Diminutive',
					'Fine',
					'—',
					'Recipe&nbsp;DC&nbsp;–&nbsp;2',
					'base&nbsp;–&nbsp;2',
					'base&nbsp;–&nbsp;2'
				],
				[
					'30 minutes',
					'Small',
					'Tiny',
					'Diminutive',
					'Fine',
					'Recipe&nbsp;DC&nbsp;–&nbsp;1',
					'base&nbsp;–&nbsp;1',
					'base&nbsp;–&nbsp;1'
				],
				[
					'1 hour',
					'Medium',
					'Small',
					'Tiny',
					'Diminutive',
					'Recipe&nbsp;DC&nbsp;',
					'base&nbsp;',
					'base&nbsp;'
				],
				[
					'2 hours',
					'Large',
					'Medium',
					'Small',
					'Tiny',
					'Recipe&nbsp;DC&nbsp;+&nbsp;1',
					'base&nbsp;+&nbsp;1',
					'base&nbsp;+&nbsp;1'
				],
				[
					'4 hours',
					'Huge',
					'Large',
					'Medium',
					'Small',
					'Recipe&nbsp;DC&nbsp;+&nbsp;2',
					'base&nbsp;+&nbsp;2',
					'base&nbsp;+&nbsp;2'
				],
				[
					'8 hours',
					'Gargantuan',
					'Huge',
					'Large',
					'Medium',
					'Recipe&nbsp;DC&nbsp;+&nbsp;4',
					'base&nbsp;+&nbsp;4',
					'base&nbsp;+&nbsp;4'
				],
				[
					'16 hours',
					'Colossal',
					'Gargantuan',
					'Huge',
					'Large',
					'Recipe&nbsp;DC&nbsp;+&nbsp;8',
					'base&nbsp;+&nbsp;8',
					'base&nbsp;+&nbsp;8'
				]
			],
			true,
			false,
			false
		).'
		24 hours after the storm starts, it fades with the clouds dispersing leaving a clear sky. Any oobleck exposed to direct sunlight, such as from spells such as ii/searing light/ii or from direct exposure once the clouds disperse, immediately melts away leaving nothing behind.' // Description
	);
	require $startDir.'pageEnd.php';
?>