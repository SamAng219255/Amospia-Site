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
		'Amospia',
		'setting',
		quick_array([
			'Amospia is a setting originally created for my Minecraft server that has grown far larger. It includes several nations written by me and my friends and more lore than I can possibly include here. There is a <a href="https://www.worldanvil.com/w/amospia-pharaohcrab">world anvil site</a> that includes the majority of the lore.'
		])
	);
	require $startDir.'pageEnd.php';
?>