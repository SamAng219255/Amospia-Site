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
							
							case 'flower':
							case 'leaf':
								$entry=$pages['entries'][$ptr['name']];
								echo '<li><a href="'.$entry['directory'].$entry['file_name'].'"><p class="label">'.$ptr['display_name'].'</p></a></li>';
								$tree_indices[$depth]++;
								break;

							case 'petal':
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
			<div id="top-nav">
				<?php
					function retrieveAtDepth($arr,$path,$initial_depth=0) {
						$depth=count($path);
						$ptr=$arr;
						for($i=$initial_depth; $i<$depth; $i++) {
							$ptr=$ptr[$path[$i]];
						}
						return $ptr;
					}

					$pageId="";
					$pageCount=count($pages['entries']);
					$filename=pathinfo(debug_backtrace()[0]['file'])['basename'];
					foreach($pages['entries'] as $id => $entry) {
						if($entry['file_name']==$filename) {
							$pageId=$id;
						}
					}

					$depth=0;
					$tree_path=[$pages['sort_tree']];
					$node_list=[];
					$tree_index=0;
					$tree_count=count($tree_path[$depth]);
					$next_node=[];
					$get_path=explode(',', $_GET['path']);

					$sanity=100;
					while($depth<count($tree_path)) {
						if($sanity<1) {
							echo '<p>Loop has gone insane after 100 iterations.</p>';
							break;
						}
						if($tree_index<$tree_count) {
							$ptr=$tree_path[$depth][$tree_index];
							$match=$ptr['name']==(isset($_GET['path'])?$get_path:$pages['entries'][$pageId]['sort_path'])[$depth];
							if($match) {
								array_push($tree_path, $ptr['nodes']);
								$next_node=$ptr;
							}
							if($tree_index==0) 
								echo '<p class="top-row">';
							else
								echo ' | ';
							if($ptr['type']=='branch') {
								$search_path='';
								foreach($node_list as $node) {
									$search_path.=$node['name'].',';
								}
								$search_path.=$ptr['name'];
								echo '<a href="'.$pages['origin'].'?path='.$search_path.'" class="top-label'.($match || $ptr['name'] == $pageId ? ' selected' : '').'">'.$ptr['display_name'].'</a>';
							}
							else {
								$entry=$pages['entries'][$ptr['name']];
								echo '<a href="'.$entry['directory'].$entry['file_name'].'" class="top-label'.($match || $ptr['name'] == $pageId ? ' selected' : '').'">'.$ptr['display_name'].'</a>';
							}
							$tree_index++;
						}
						else {
							echo '</p><hr>';
							$depth++;
							if($depth>=count($tree_path))
								break;
							$tree_index=0;
							$tree_count=count($tree_path[$depth]);
							array_push($node_list, $next_node);
						}
						$sanity--;
					}
				?>
			</div>
		</div>
		<div id="content">
