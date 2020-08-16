<?php
	header('Content-Type: text/xml; charset=UTF-8');

	$path=explode('/', $GET('path'));
	switch ($path[0]) {
		case 'avatars':
			require 'avatars.php';
			break;
		default:
			echo '<Error><Code>NotImplemented</Code><Message>Endpoint has not been implemented.</Message><Details>Either I haven\'t gotten to it yet or I don\'t need it.</Details></Error>';
			break;
	}
?>