<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	magicItemBlockAuto(
		'Spell Memory Tome',
		'Universal',
		18,
		'none',
		108000,
		'—',
		[
			'This book resembles a spellbook but its function is quite the reverse. While holding the open book, you can command a spell you have prepared to leap from your mind onto the book\'s pages. This removes the prepared spell from your memory as though you had cast it but converts 1 page per level of the spell into a single scroll that can only be cast by you. Once this scroll has been used, the pages remain and can be used again. A spell can also be ejected from the pages of the book by any creature holding the book open to one of the spell\'s pages as a full-round action.',
			'This book generally comes in one of three forms that determine the number of available pages in the book and the highest level of spell it can hold. It cannot hold a spell if the number of empty pages is less than the number of required pages.',
			sTable(
				[
					'Type',
					'Maximum Spell Level',
					'Pages'
				],
				[
					[
						'Type I',
						'3rd',
						'36'
					],
					[
						'Type II',
						'6th',
						'18'
					],
					[
						'Type III',
						'9th',
						'12'
					]
				],
				true,
				false
			)
		],
		false,
		'bb/Requirements/bb Craft Wondrous Items, Scribe Scroll, ii/scrivener\'s chant/ii; bb/Cost/bb 54,000 gp'
	);
	require $startDir.'pageEnd.php';
?>