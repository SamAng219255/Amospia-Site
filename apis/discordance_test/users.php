<?php
	$path=explode('/', $_GET['path']);
	switch ($path[0]) {
		case 'avatars':
			require 'avatars.php';
			break;
		case 'users':
			require 'users.php';
			break;
		case 'guilds':
			require 'guilds.php';
			break;
		default:
			echo '<Error><Code>NotImplemented</Code><Message>Endpoint has not been implemented.</Message><Details>Either I haven\'t gotten to it yet or I don\'t need it. Path: ';
			var_dump($path);
			echo'</Details></Error>';
			break;
	}
?>