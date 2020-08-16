<?php
	$path=explode('/', $GET('path'));
	header('Content-Type: image/'.explode('.',$path[1])[1]);
	readfile('img/avatars/'.$path[1]));
?>