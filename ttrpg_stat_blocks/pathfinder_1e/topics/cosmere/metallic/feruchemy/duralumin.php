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
	feruchemy(
		'Duralumin', // Metal
		'Connector', // User
		[
			'Quadrant' => 'Spiritual'
		], // Categories
		'1 hour',
		[
			'A connector is able to store spiritual connection. This connection comes in many forms and because all forms of connection are stored at once, it can have some strange effects.',
			'While storing connection, other people feel a diminished connection to the connector, be that connection good or bad. This results in creatures acting a step closer to neutral and a penalty to Diplomacy and Intimidation checks. This also allows a connector to go unnoticed giving an equal bonus to Stealth and Sleight of Hand. The connector will also lose their connection towards a patron or deity which can cause them to be treated as a lower level for level dependent variables and for qualifying for class features in classes that receive power from a patron or deity. This does not make spellcasters lose prepared spells or slots but they may be unable to prepare as many while storing connection.',
			'Tapping connection has an inverse effect making connections stronger and allowing connections to form faster. This results in creatures acting a step farther from neutral and a bonus to Diplomacy and Intimidation checks. This also makes a connector more noticed giving an equal penalty to Stealth and Sleight of Hand. The connector acquires a strengthened connection towards any patrons or deities making them be treated at a higher level for level dependent variables but does not grant additional access to class features including how many spells can be prepared or slots regained.',
			'When tapping connection, the connector also acquires a connection to any lands they visit allowing them to speak in the native language of wherever they are currently located so long as they are tapping an increment of 4 or higher. Repeatedly storing their connection can harm the bond between a connector and their patron or deity.'
		], // Description
		[
			'columns' => [
				'Bonus to Diplomacy and Intimidate',
				'Bonus to Stealth and Sleight of Hand',
				'Level for dependent variables',
				'Level for access to class features'
			],
			'rows' => [
				[
					'-8', // IncrSrch
					'-16',
					'+12',
					'0',
					'0' 
				],
				[
					'-6', // IncrSrch
					'-12',
					'+9',
					'level/4',
					'level/4' 
				],
				[
					'-4', // IncrSrch
					'-8',
					'+6',
					'level/2',
					'level/2' 
				],
				[
					'-2', // IncrSrch
					'-4',
					'+3',
					'3/4 level',
					'3/4 level' 
				],
				[
					'0', // IncrSrch
					'+0',
					'+0',
					'level',
					'level' 
				],
				[
					'2', // IncrSrch
					'+4',
					'-3',
					'level+1',
					'level' 
				],
				[
					'4', // IncrSrch
					'+8',
					'-6',
					'level+2',
					'level' 
				],
				[
					'6', // IncrSrch
					'+12',
					'-9',
					'level+3',
					'level' 
				],
				[
					'8', // IncrSrch
					'+16',
					'-12',
					'level+4',
					'level' 
				],
				[
					'16', // IncrSrch
					'+24',
					'-18',
					'level+6',
					'level' 
				],
				[
					'24', // IncrSrch
					'+32',
					'-24',
					'level+7',
					'level' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'Grants access to the following increment (Increment 8; Bonus to Diplomacy and Intimidate +32; Bonus to Stealth and Sleight of Hand -24; Level for dependent variables level+8; Level for access to class features level)',
				'draw' => 'The connector takes a -4 penalty on Diplomacy and Intimidate checks.'
			],
			50 => [
				'effect' => 'Creatures are automatically trusting and helpful or angry and hostile toward the connector while at increment 4.',
				'draw' => 'The connector takes a -4 penalty on Diplomacy and Intimidate checks.'
			],
			100 => [
				'effect' => 'The connector can focus on strengthening specific connections and can avoid weakening others. This allows receiving the benefit of an increment for a single connection for half of the cost of investiture and avoiding the effects against a single connection while storing half the investiture.',
				'draw' => 'The connector takes a -4 penalty on Diplomacy and Intimidate checks.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>