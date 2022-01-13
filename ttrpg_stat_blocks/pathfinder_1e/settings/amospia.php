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
	block(
		'Amospia',
		'setting',
		quick_array([
			'Amsopia is a setting originally created for my Minecraft server that has grown far larger. It includes several nations written by me and my friends and more lore than I can possibly include here. If you want to know more here is a link to the world anvil site for the setting. <a href="https://www.worldanvil.com/w/amospia-pharaohcrab">link</a>'
		])
	);
	require $startDir.'pageEnd.php';
?>