<?php
	if(isset($_POST['light'])) {
		if(isset($_POST['devMode']) && $_POST['devMode']=='true') {
			setcookie(
				'lightMode',
				$_POST['light'],
				[
					'expires' => time() + 60*60*24*30,
					'path' => '/',
					'domain' => 'localhost',
					'secure' => true,
					'httponly' => true,
					'samesite' => 'Strict'
				]
			);
		}
		else {
			setcookie(
				'lightMode',
				$_POST['light'],
				[
					'expires' => time() + 60*60*24*30,
					'path' => '/',
					'domain' => 'adventure.amospia.com',
					'secure' => true,
					'httponly' => true,
					'samesite' => 'Strict'
				]
			);
			echo 'setting cookie'
		}
	}
	var_dump($_POST);
?>