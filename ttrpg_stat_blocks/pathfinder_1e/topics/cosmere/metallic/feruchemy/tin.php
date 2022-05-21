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
		'Tin', // Metal
		'Windwhisperer', // User
		[
			'Quadrant' => 'Physical'
		], // Categories
		'1 hour',
		[
			'Windwhisperer may store senses in tin. Windwhisperers can store any sense into a tinmind, but may only store one kind of sense per tinmind.',
			'Some abilities are treated as the same sense while others are considered different senses and cannot be stored. Here are several example groupings:',
			'/mm/• Smell, detailed taste, scent, keen scent, and scent based blindsense and blindsight.',
			'/mm/• Sight, low-light vision, see in darkness, greensight, and mistsight.',
			'/mm/• Darkvision, as it functions in Pathfinder 1st Ed., is not categorized with other visual senses due to its odd behavior.',
			'/mm/• Touch, tremorsense, and tactile vibration based blindsense and blindsight.',
			'/mm/• Hearing and sound based blindsight and blindsense.',
			'/mm/• Lifesense and spiritsense.',
			'/mm/• Thoughtsense is not categorized with any other senses that have been listed.',
			'Storing a sense gives a multiplicative penalty to any checks made with that sense, multiplicatively reduces the range of senses with a specific range (such as darkvision or scent), and may nullify it altogether, while tapping it grants a multiplicative bonus to such checks and multiplicatively increases the range.',
			'Magical means of sensing can be similarly stored, including a seekers ability. This does not include all divination effects, in most cases the determination will be up to the GM, but some specific cases include that all detect spells (spells whose name begins with "detect") can be stored while the effects of true seeing and scrying cannot. In general, if a spell or effect perceives the same things (magic auras, a given alignment, alignments in general, thoughts, etc) and specifies it operates "similar to" or "as" another spell or effect then that can be categorized similarly and stored as though the same sense. The ability to see magic auras similar to the spell detect magic can be combined to form the effects of similar, more potent, spells as seen on the increment table. Additionally, storing those abilities may yield as many points of investiture as must be tapped to produce it. Other spells may be able to be combined similarly at GM discretion. Otherwise the magical sense can be tapped at an increment of 4 to replicate the exact effects of the original effect or spell with is stored at an increment of -4.'
		], // Description
		[
			'columns' => [
				'Perception & Range',
				'Effects on seeing Magic Auras' 
			],
			'rows' => [
				[
					'-4',
					'-200%',
					'' 
				],
				[
					'-3',
					'-150%',
					'' 
				],
				[
					'-2',
					'-100%',
					'' 
				],
				[
					'-1',
					'-50%',
					'' 
				],
				[
					'0',
					'+0%',
					'no special perception' 
				],
				[
					'2',
					'+50%',
					'' 
				],
				[
					'4',
					'+100%',
					'detect magic' 
				],
				[
					'8',
					'+200%',
					'arcane sight or detect magic, greater' 
				],
				[
					'12',
					'+300%',
					'arcane sight, greater' 
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'The windwhisperer gains access to the following increment: (Increment 4; Percpetion & Range +400%)',
				'draw' => 'The windwhisperer takes a -5 penalty on perception.'
			],
			30 => [
				'effect' => 'The windwhisperer gains access to the following increment: (Increment 5; Percpetion & Range +500%)',
				'draw' => 'The windwhisperer takes a -5 penalty on perception.'
			],
			60 => [
				'effect' => 'The windwhisperer gains access to the following increment: (Increment 6; Percpetion & Range +600%)',
				'draw' => 'The windwhisperer takes a -5 penalty on perception.'
			],
			100 => [
				'effect' => 'The windwhisperer gains access to the following increment: (Increment 7; Percpetion & Range +700%)',
				'draw' => 'The windwhisperer takes a -5 penalty on perception.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>