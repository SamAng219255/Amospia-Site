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
?>
<title>Illager</title>
<?php
	raceBlockAuto(
		'Illager',
		10,
		'Illagers are the violent cousins of the knom, opposite in almost every way. Illagers prefer live in massive mansions surrounded by the finest commodities they can get their hands on and are known to make deals with many fiends to get that.',
		'Illagers are almost identical to knom with the excpetions of their comletely gray skin and bushy dark gray eyebrows replacing the knom\'s common unibrow.',
		'Illagers follow a strict pecking order assured by numerous means with several dozen of them living in a single mansion all under the command of a single leader.',
		'Illagers despise all other races and will often raid nearby towns and villages often going so far as to build outposts closer to towns from which to launch the attack from.',
		'Illagers are alomost always chaotic evil and practically all others are some other form of evil. Many illagers "worship" various dark gods and demon lords in the hope that they can wield a portion of their power.',
		'Illagers can rarely escape from their rigid hierarchy to do anything else but it is not unheard of for one to slip away to seek power on his own so that he may return one day and rule over his brothers.',
		'WIP',
		'WIP',
		[
			'con' => 2
		],
		'Illagers are generally hardy but are otherwise quite diverse. Illagers receive a +2 bonus to one other stat chosen at character creation.',
		[
			'Medium: Illagers are Medium creatures and have no bonuses or penalties due to their size.',
			'Normal Speed: Illagers have a base speed of 30 feet.',
			'Hatred: While Illagers hate all other races, the illagers have a particular hatred for their human and knom cousins. Illagers have a +1 racial bonus on attack rolls against humans and knom.',
			'Weapon Familiarity: Illagers train from a young age with weapons familiar to their people. Illagers have proficiency with all simple and martial axes and crossbows.',
			'Spell Resistance: Illagers train an ability to resist magic. Despite the training\'s effectiveness however, it is simply an excuse by the older memebers to use the younger illagers as target dummies for their dark magic. Illagers have spell resistance equal tp 6 plus their level.',
			'Flexible Bonus Feat: Illagers receive an extra feat of their choice at first level.',
			'Languages: Illagers begin play speaking Illager. Illagers with high Intelligence scores can choose from the following languages: Abyssal, Aklo, Common, Infernal, and Knom.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>