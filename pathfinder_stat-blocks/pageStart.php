<?php
	$pathstuff=explode('/',$_SERVER['SCRIPT_NAME']);
	$currentDirectory=$pathstuff[count($pathstuff)-2];
	$currentPage=$pathstuff[count($pathstuff)-1];
	require ($currentDirectory!='pathfinder_stat-blocks' ? '../' : '').'quick_paste_lib.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		echo '	<link rel="stylesheet" type="text/css" href="'.($currentDirectory!='pathfinder_stat-blocks' ? '../' : '').'theme.css">';
	?>
</head>
<body>