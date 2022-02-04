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
	block2(
		'Ettinkin Heritages',
		'',
		false,
		[],
		[
			quick_array('You select a heritage at 1st level to reflect abilities passed down to you from your ancestors or common among those of your ancestry in the environment where you were born or grew up. You have only one heritage and can’t change it later. A heritage is not the same as a culture or ethnicity, though some cultures or ethnicities might have more or fewer members from a particular heritage.')
		],
		false,
		[
			[
				'title' => 'Dual Dominance',
				'spaced' => false,
				'texts' => quick_array([
					'While most\'s heads agree somewhat, some are of two minds. Your two heads have alignments that are opposite on one or both axis. If you can\'t play an evil character, this may mean that one head will be lawful while the other is chaotic. Your heads will rarely use their actions to aid the other\'s cause unless they are both being actively threatened and may demand favors from the one that got them into trouble. The GM may choose to determine the actions of one of your heads in certain circumstances. These heads may have two different classes and may choose different class feats. When you wake up after being unconscious for at least one round, both heads roll a will save and whichever got the highest is dominant until they spend 3 actions to switch the dominant head or they switch for any other reason. You receive twice the normal bonus to your will from Mental Battler. If you succeed, but not critically succeed, at a Will save against an effect that would have incapacitated you, either by knocking you unconscious or by mind control, or if such an effect an effect fails, but not critically fails, against your Will DC, the non-dominant head can make a Will save against the dominant head\'s Will DC to take control.'
				])
			],
			[
				'title' => 'Symbiotic',
				'spaced' => false,
				'texts' => quick_array([
					'Your two minds are in perfect sync and work together with perfect harmony. Which of the two heads is currently dominant matters little. If either head is incapacitated by an effect, either by being knocked unconscious or by mind control, the other doesn\'t know what to do and is treated as being unconscious. Choose one skill. Whenever you roll this skill check you may roll twice, once for each head, and take the better result.'
				])
			],
			[
				'title' => 'Complete Dominance',
				'spaced' => false,
				'texts' => quick_array([
					'One of your heads has been dominant pretty much your entire life leaving your other head developmentally repressed.'
				])
			],
			[
				'title' => 'Twin Mind',
				'spaced' => false,
				'texts' => quick_array([
					'Your two heads work with each other but are two separate individuals.'
				])
			],
			[
				'title' => 'TODO',
				'spaced' => false,
				'texts' => quick_array([
					'TODO'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>