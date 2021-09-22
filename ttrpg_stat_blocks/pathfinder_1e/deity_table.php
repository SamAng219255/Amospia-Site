<?php
	if(!function_exists("table")) {
		require 'quick_paste_lib.php';
	}

	$deitiesObj=json_decode(file_get_contents('deities.json'), true);

	$deities=[];
	$deityCount=count($deitiesObj);
	for($i=0; $i<$deityCount; $i++) {
		array_push($deities, [
			$deitiesObj[$i]['name'],
			$deitiesObj[$i]['pantheon'],
			$deitiesObj[$i]['alignment'],
			$deitiesObj[$i]['areas_of_concern'],
			$deitiesObj[$i]['domains'],
			$deitiesObj[$i]['favored_weapon']
		]);
	}

	$sortColumn;
	$sortOrder;
	function sortDeities($a, $b) {
		global $sortColumn, $sortOrder;
		$al = strtolower($a[$sortColumn]);
		$bl = strtolower($b[$sortColumn]);
		if ($al == $bl) {
			return 0;
		}
		return (($al < $bl) ? -1 : 1) * ($sortOrder==1 ? 1 : -1);
	}

	if(isset($_GET['sort']) && isset($_GET['asc'])) {
		$sortColumn=$_GET['sort'];
		$sortOrder=$_GET['asc'];
		usort($deities, 'sortDeities');
	}

	for($i=0; $i<$deityCount; $i++) {
		$deities[$i][0]='<a href="./deity_view.php?name='.$deities[$i][0].'">'.$deities[$i][0].'</a>';
	}

	table(
		[
			"Name",
			"Pantheon",
			"Alignment",
			"Areas of Concern",
			"Domains",
			"Favored Weapon"
		],
		$deities
	);
?>