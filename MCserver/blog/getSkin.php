<?php
	session_start();
	require 'db.php';
	$query="SELECT `username`,`uuid` FROM `mcstuff`.`users` WHERE `username`='".$_SESSION['username']."';";
	$queryresult=mysqli_query($conn,$query);
	$row=mysqli_fetch_row($queryresult);
	$uuid=$row[1];
	$firstjson=@file_get_contents('https://sessionserver.mojang.com/session/minecraft/profile/'.$uuid);
	for($i=0; $i<6; $i++) {
		if($firstjson) {
			break;
		}
		else {
			sleep(10);
			$firstjson=@file_get_contents('https://sessionserver.mojang.com/session/minecraft/profile/'.$uuid);
		}
	}
	if($firstjson) {
		$firstobj=json_decode($firstjson);
		$base64='';
		$propCount=count($firstobj->properties);
		for($i=0; $i<$propCount; $i++) {
			if($firstobj->properties[$i]->name=='textures') {
				$base64=$firstobj->properties[$i]->value;
			}
		}
		$secondjson=base64_decode($base64);
		$secondobj=json_decode($secondjson);
		$skin=$secondobj->textures->SKIN->url;
		file_put_contents("./skins/".$_SESSION['username'].".png", fopen($skin, 'r'));
		echo "./skins/".$_SESSION['username'].".png";
	}
	else {
		echo './img/steve.png';
	}
?>