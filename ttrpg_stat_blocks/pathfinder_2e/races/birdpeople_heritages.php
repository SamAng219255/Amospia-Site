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
		'Gardinian Heritages',
		'',
		false,
		[],
		[
			quick_array('You select a heritage at 1st level to reflect abilities passed down to you from your ancestors or common among those of your ancestry in the environment where you were born or grew up. You have only one heritage and can’t change it later. A heritage is not the same as a culture or ethnicity, though some cultures or ethnicities might have more or fewer members from a particular heritage.')
		],
		false,
		[
			[
				'title' => 'Magpie',
				'spaced' => false,
				'texts' => quick_array([
					'Piccilli who resemble magpies crows and several other types of birds find themselves often attracted to and entranced by a specific class of objects. While for most the subject of interest will genrally be something shiny, brightly colored, or glowing, the specific classification can vary.',
					'When viewing a potential object of interest, you become entranced. While entranced you cannot become entranced with another object. When you would become entranced, you can make a Will save to prevent the effect. The DC is determined by the GM and a good average value might be 10 plus the character\'s level. If the subject of your entrancement sufficiently leaves view, such as being shut in a box or being carried out the door, your entrancement ends though your interest might not. While entranced, you receive a +2 bonus to all checks that are related to the source of your entrancement or acquiring the object (such as attack rolls against the creature holding the object) and you take take a -1 penalty to all other checks. If you are a master in a check related to the source of your entrancement or acquiring it, the bonus increases to +4. If you do not acquire the source of your entrancement within 2d6 rounds after first viewing it your entrancement ends but it may start again if the object is presented at a later time.',
					'/tt/1st Ed. Hybrid Description:',
					'When viewing a potential object of interest, you become entranced. While entranced you cannot become entranced with another object. When you would become entranced, you can make a Will save to prevent the effect with a DC od 10 plus the character\'s level. If the subject of your entrancement sufficiently leaves view, such as being shut in a box or being carried out the door, your entrancement ends though your interest might not. While entranced, you receive a bonus to all checks that are related to the source of your entrancement or acquiring the object (such as attack rolls against the creature holding the object) equal to 1 plus 1 per two levels over 1st (+2 at 3rd, +3 at 5th, etc) and you take take a penalty to all other checks equal have the bonus rounded up. If you do not acquire the source of your entrancement within 2d6 rounds after first viewing it your entrancement ends but it may start again if the object is presented at a later time.'
				])
			],
			[
				'title' => 'Owl',
				'spaced' => false,
				'texts' => quick_array([
					'Piccilli who resemble owls or other nocturnal birds of prey often inherit their abilities to hunt in the darkness.',
					'You gain darkvision and are trained Stealth (or another skill if you were already trained in Stealth).',
					'/tt/1st Ed. Hybrid Description:',
					'You gain darkvision and stealth is always considered a class skill for you.'
				])
			],
			[
				'title' => 'Eagle',
				'spaced' => false,
				'texts' => quick_array([
					'Piccilli who resemble eagles or other power hunters often inherit their skill and prowess, and talons.',
					'You gain a talon melee unarmed attack that deals 1d6 slashing damage made with the talons on your feet. Your talon attack is in the brawling group and has the agile, finesse, and unarmed traits. When you attack with these talons, you generally flap once to push yourself into the air before rotating your body and reaching up with your feet before raking back downwards and landing back on your feet, using your wings to help maneuver, though a clever piccilli can generally devise other methods for succesfully clawing with their feet.',
					'/tt/1st Ed. Hybrid Description:',
					'You gain a talons natural attack that deals 1d6 slashing damage and is a primary attack. When you attack with these talons, you generally flap once to push yourself into the air before rotating your body and reaching up with your feet before raking back downwards and landing back on your feet, using your wings to help maneuver, though a clever piccilli can generally devise other methods for succesfully clawing with their feet.'
				])
			],
			[
				'title' => 'Vulture',
				'spaced' => false,
				'texts' => quick_array([
					'Piccilli who resemble vultures and other scavengers, have a good scense of smell and are able to make the most of what food they can find better.',
					'You gain an imprecise scent sense with a range of 30 feet. This range is increased to 60 feet for wounded creatures and 90 feet for creatures that have dead longer than 1 minute, and 120 feet for rotting creatures. You can eating rotting food without issue.',
					'/tt/1st Ed. Hybrid Description:',
					'You gain the scent ability. The range of your scent is increased to 60 feet to smell wounded creatures, 90 feet for creatures that have dead longer than 1 minute, and 120 for rotting creatures. You can eat rotting food without issue.'
				])
			],
			[
				'title' => 'Nightingale',
				'spaced' => false,
				'texts' => quick_array([
					'Piccilli who resemble nightingales and other songbirds often have an enhanced ability to sing or mimic sounds.',
					'You receive a +1 circumstance bonus on Deception checks to Impersonate a mimicked voice, where the sound of the voice is the only factor; if you are a master in Deception, you gain a +2 circumstance bonus instead. You also gain a +1 circumstance bonus on Performance checks to sing; if you are a master in Performance, you gain a +2 circumstance bonus instead.',
					'/tt/1st Ed. Hybrid Description:',
					'You can mimic voices that you\'ve heard before but creatures that are familiar with a voice can make a perception with a DC equal to 10 plus half your level plus your charisma modifier to detect that the voice is wrong. You also receive Skill Focus (Perform (Sing)) as a bonus feat.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>