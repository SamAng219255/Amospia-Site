<?php
	$pathstuff=explode('/',$_SERVER['SCRIPT_NAME']);
	$currentDirectory=$pathstuff[count($pathstuff)-2];
	$currentPage=$pathstuff[count($pathstuff)-1];
	require ($currentDirectory!='pathfinder_stat-blocks' ? '../' : '').'quick_paste_lib.php';
?>
<!DOCTYPE html>
<html>
<head>
	<script src="/jquery.js"></script>
	<?php
		echo '	<link rel="stylesheet" type="text/css" href="'.($currentDirectory!='pathfinder_stat-blocks' ? '../' : '').'theme.css">';
		echo '	<script src="'.($currentDirectory!='pathfinder_stat-blocks' ? '../' : '').'menu.js"></script>';
	?>
</head>
<body onload="setup()">
	<div id="sidebar">
		<p id="sideber-label">Navigation</p>
		<ul class="menu-vertical">
			<?php
				$string=file_get_contents(($currentDirectory!='pathfinder_stat-blocks' ? '../' : '').'pages.json');
				$pages=json_decode($string, true);

				$depth=0;
				$tree_path=[$pages['sort_tree']];
				$tree_indices=[0];
				$tree_counts=[count($pages['sort_tree'])];

				$sanity=100;
				while($depth>=0) {
					if($sanity<1) {
						echo '<p>Loop has gone insane after 100 iterations.</p>';
						break;
					}
					if($tree_indices[$depth]<$tree_counts[$depth]) {
						$ptr=$tree_path[$depth][$tree_indices[$depth]];
						switch ($ptr['type']) {
							case 'branch':
								echo '<li class="has-dropdown">';
								echo '<p class="label">'.$ptr['display_name'].'</p>';
								echo '<ul class="menu-vertical">';
								$depth++;
								$tree_path[$depth]=$ptr['nodes'];
								$tree_indices[$depth]=0;
								$tree_counts[$depth]=count($ptr['nodes']);
								break;
							
							case 'leaf':
								$entry=$pages['entries'][$ptr['name']];
								echo '<li><a href="'.$entry['directory'].$entry['file_name'].'"><p class="label">'.$ptr['display_name'].'</p></a></li>';
								$tree_indices[$depth]++;
								break;
							
							default:
								echo '<p>'.var_dump($ptr['type']).'</p>';
								$tree_indices[$depth]++;
								break;
						}
					}
					else {
						echo '</ul></li>';
						unset($tree_path[$depth]);
						unset($tree_indices[$depth]);
						unset($tree_counts[$depth]);
						$depth--;
						if($depth>=0)
							$tree_indices[$depth]++;
					}
					$sanity--;
				}
			?>
		</ul>
	</div>
	<div id="center">
		<div id="top">
			<?php
				function retrieveAtDepth($arr,$path,$initial_depth=0) {
					$depth=count($path);
					$ptr=$arr;
					for($i=$initial_depth; $i<$depth; $i++) {
						$ptr=$ptr[$path[$i]];
					}
					return $ptr;
				}


			?>
		</div>
		<div id="content">
