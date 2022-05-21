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
		'Feruchemical Copper',
		'feruchemy',
		quick_array([
			'bb/User/bb Archivist',
			'bb/Quadrant/bb Cognitive'
		]),
		false,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'Archivists are able to store memories within pieces of copper referred to as copperminds. While in the coppermind these memories do not decay like normal memories, instead remaining as fresh as they were when they were placed into the coppermind. When a memory is stored in a coppermind, the memory is lost from the archivist. Memories taken out of a coppermind will degrade as normal but can be stored again, albeit at their new level of retention. Archivists often undergo memory retention training in order to best make use of their copperminds. A common technique used by archivists is to read a book or listen to oral instruction and copy it into a coppermind line by line whilst creating an index of each line. Once every line is safely tucked away, the archivist will store the memory of the index as well. Once this is done a similar process can be repeated; retrieving the index from the coppermind, writing it down, store a copy of the index, using the written copy to locate a section of text, retrieving the text from the coppermind, writing it down, and store a copy of the section; in order to safely retrieve any information they have taken the time to store in this manner. This process is generally referred to as archiving.',
					'By taking twice as long to read a book, an archivist can archive it. Once archived, information can be retrieved at a later date. It takes 15 minutes to successfully retrieve and copy a page of text and 2 minutes for only 1 line of text.',
					'Additionally, an archivist can store any number of ranks in knowledge skills into copperminds, while they are stored as such they cannot be retrained into any other skills or in any way used. Such stored ranks can be recovered from the coppermind at no penalty. If an unkeyed coppermind contains ranks in a knowledge skill, those ranks can be acquired by any archivist and are not counted in their total number of ranks. Even if all of an archivist\'s ranks are stored in a coppermind they still considered trained in that skill. Similarly, if an archivist acquires ranks from an unkeyed coppermind, they are not considered trained in that skill unless they possess ranks of their own.',
					'Compounding a coppermind behaves in odd ways as copperminds do not store their attribute as raw points of investiture. Instead any memory stored in a coppermind that is compounded is recovered by the archivist twice as strong. If this is done with ranks in a knowledge skill, the archivist can take a 20 instead of taking a 10 on that skill for the next hour.'
				])
			],
			[
				'title' => 'Feruchemical Copper Savantism Effects',
				'spaced' => false,
				'texts' => quick_array([
					sTable(
						[
							'Points',
							'Effect(s) While Using',
							'Drawback'
						],
						[
							[
								'10',
								'The archivist automatically gains a mental index of any coppermind they can use and are touching that lets them innately pull specific memories out.',
								'The archivist\'s short term memory begins to weaken and they gain the Forgetful drawback trait. They cannot use this drawback for gaining additional traits.'
							],
							[
								'30',
								'The archivist can store only part of a memory, weakening it in their mind and storing a similarly weakened form.',
								'Every hour the archivist must succeed a DC 12 will save or be affected as by the spell ii/make lost/ii.'
							],
							[
								'60',
								'The archivist can store memories in copperminds without forgetting them.',
								'The archivist develops anterograde amnesia, meaning that any memories in their head are lost after resting.'
							],
							[
								'100',
								'The archivist can use copperminds as an extension of their own memory.',
								'The archivist develops gradual retrograde amnesia, meaning that memories stored in their head are slowly lost.'
							]
						]
					)
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>