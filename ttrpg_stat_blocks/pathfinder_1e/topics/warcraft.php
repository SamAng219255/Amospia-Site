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
		'Warcraft',
		'setting',
		quick_array([
			'Warcraft is used a general term for the fictional setting of a series of games by Blizzard Entertainment including three RTS games (Warcraft I, II, and III) and one MMORPG game (World of Warcraft) with numerous expansions. None of the content herein is official and I don\'t speak for or represent them them in any way. If you are interested in official content, I reccomend checking out the Warcraft RPG system. This content is instead creating by me as a long time fan of the games and the setting based on my observations from extensive hours spent in-game.',
			'Most of the events of the Warcraft universe take place on the world of Azeroth but other worlds such as Draenor and Argus and even other dimensions such as the Twisting Nether and the Shadowlands. There are numerous races who fill these worlds and claimed divinities throughout with vast variety in both but there is one constant across all the universe: war. War unending has shaped the realms for untold ages leaving hardy and dedicated peoples in its wake, ready to brave whatever comes.'
		])
	);
	require $startDir.'pageEnd.php';
?>