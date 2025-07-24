<?php
	$devMode=false;

	$lightMode=false;
	if(isset($_COOKIE['lightMode']))
		$lightMode=$_COOKIE['lightMode']=='true';

	$pathstuff=explode('/',$_SERVER['SCRIPT_NAME']);
	$currentDirectory=$pathstuff[count($pathstuff)-2];
	$currentPage=$pathstuff[count($pathstuff)-1];
	$rootDir='';
	$pages=[];
	for($i=0; $i<20; $i++) {
		if(file_exists($rootDir.'pages.json')) {
			$string=file_get_contents($rootDir.'pages.json');
			$pages=json_decode($string, true);
			break;
		}
		else {
			$rootDir='../'.$rootDir;
		}
	}
	$originDir=$pages['origin'];
	require $rootDir.'quick_paste_lib.php';

	function retrieveAtDepth($arr,$path,$initial_depth=0) {
		$depth=count($path);
		$ptr=$arr;
		for($i=$initial_depth; $i<$depth; $i++) {
			$ptr=$ptr[$path[$i]];
		}
		return $ptr;
	}
	function retrieveNodeAtDepth($arr,$path,$initial_depth=0) {
		$depth=count($path);
		$ptr=$arr;
		if(!isset($ptr['nodes']))
			$ptr=['nodes'=>$ptr];
		for($i=$initial_depth; $i<$depth; $i++) {
			if(!isset($ptr['nodes']))
				break;
			foreach ($ptr['nodes'] as $node) {
				if($node['name']===$path[$i]) {
					$ptr=$node;
					break;
				}
			}
		}
		return $ptr;
	}
	function retrieveNodeAtDepthTruncate($arr,&$path,$initial_depth=0) {
		$depth=count($path);
		$ptr=$arr;
		if(!isset($ptr['nodes']))
			$ptr=['nodes'=>$ptr];
		for($i=$initial_depth; $i<$depth; $i++) {
			if(!isset($ptr['nodes'])) {
				array_pop($path);
				continue;
			}
			$found=false;
			foreach ($ptr['nodes'] as $node) {
				if($node['name']===$path[$i]) {
					$ptr=$node;
					$found=true;
					break;
				}
			}
			if(!$found)
				array_pop($path);
		}
		return $ptr;
	}


	$string_entries=file_get_contents($rootDir.'pages_entries.json');
	$pages['entries']=json_decode($string_entries, true)['entries'];
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="/ttrpg_stat_blocks/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/ttrpg_stat_blocks/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/ttrpg_stat_blocks/img/favicon-16x16.png">
	<link rel="manifest" href="/ttrpg_stat_blocks/img/site.webmanifest">
	<link rel="mask-icon" href="/ttrpg_stat_blocks/img/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/ttrpg_stat_blocks/img/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="/ttrpg_stat_blocks/img/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
	<script>
		lightActions=[];
		darkActions=[];
	</script>
	<?php
		echo '	<link rel="stylesheet" type="text/css" href="'.$originDir.'theme.css?t='.filemtime($rootDir.'theme.css').'">';
		echo '	<script>rootDir="'.$originDir.'";'.($devMode ? ' devMode=true;' : '').'</script>';
		echo '	<script src="'.$originDir.'menu.js?t='.filemtime($rootDir.'menu.js').'" defer></script>';
		echo '	<script src="'.$originDir.'controllers.js" defer></script>';
	?>
	<script>let cancelDefaultTableSort=false; let initialSort=false; let initialSortFunc=function(a,b){return 0};</script>
	<script src="/ttrpg_stat_blocks/table_sort.js" defer></script>
	<?php
		$desc_str='';
		$pageId='';
		$pageCount=count($pages['entries']);
		$filePathInfo=pathinfo(debug_backtrace()[0]['file']);
		$getStr='';
		$location_title_str='';

		if(count($_GET)>0) {
			$getStr='?';
			$first=true;
			foreach ($_GET as $name => $val) {
				if($name==='opennav')
					continue;
				if($first)
					$first=false;
				else
					$getStr.='&';
				$getStr.=$name.'='.urlencode($val);
			}
		}

		if(isset($_GET['path'])) {
			$get_path=explode(',', $_GET['path']);
			$get_path_len=count($get_path);
		}

		$childCount=0;
		foreach($pages['entries'] as $id => $entry) {
			if($pageId=='' && $entry['file_name']===$filePathInfo['basename'].$getStr && endsWith($filePathInfo['dirname'],substr($entry['directory'],0,-1))) {
				$pageId=$id;

				if($entry['sort_path'][0] == 'pathfinder_1e') {
					$desc_str .= 'System = Pathfinder, Pathfinder 1st Ed, Pathfinder 1E, Pathfinder 1st Edition; ';
				}
				elseif($entry['sort_path'][0] == 'pathfinder_2e') {
					$desc_str .= 'System = Pathfinder 2nd Ed, Pathfinder 2E, Pathfinder 2nd Edition; ';
				}
				elseif($entry['sort_path'][0] == 'starfinder') {
					$desc_str .= 'System = Starfinder;';
				}
				elseif($entry['sort_path'][0] == 'dnd_5e') {
					$desc_str .= 'System = D&D, DnD, Dungeons and Dragons, 5e, 5th Edition; ';
				}

				if(isset($entry['setting'])) {
					$desc_str .= 'Setting = ' . $pages['entries'][$entry['setting']]['display_name'] . '; ';
				}

				if(isset($entry['meta-desc'])) {
					$desc_str .= $entry['meta-desc'] . '; ';
				}

				echo '<title>'.$entry['display_name'].'</title>';
				$desc_str .= $entry['display_name'];
			}
			if(isset($get_path) && $get_path_len<=count($entry['sort_path'])) {
				$match=true;
				foreach ($get_path as $ind => $level) {
					if($level!==$entry['sort_path'][$ind]) {
						$match=false;
						break;
					}
				}
				if($match)
					$childCount++;
			}
		}
		if($pageId=='') {
			foreach($pages['entries'] as $id => $entry) {
				if($entry['file_name']===$filePathInfo['basename'] && endsWith($filePathInfo['dirname'],substr($entry['directory'],0,-1))) {
					$pageId=$id;
					echo '<title>'.$entry['display_name'].'</title>';
					$desc_str .= $entry['display_name'];
					break;
				}
			}
		}

		if(isset($_GET['path'])) {
			$path_str_list=explode(',',$_GET['path']);
			$path_pos=['nodes' => $pages['sort_tree']];
			$location_title_str='';
			$location_not_found=false;
			foreach($path_str_list as $new_path_str) {
				if($location_title_str != '')
					$location_title_str = ' / '.$location_title_str;
				$found=false;
				foreach($path_pos['nodes'] as $potential_location_item) {
					if($potential_location_item['name'] == $new_path_str) {
						$path_pos=$potential_location_item;
						$found=true;
						break;
					}
				}
				if(!$found) {
					$location_not_found=true;
					break;
				}
				$location_title_str = $path_pos['display_name'].$location_title_str;
			}
			if($location_not_found) {
				echo '<title>Error</title>';
				$desc_str .= 'Error getting page information.';
			}
			else {
				echo '<title>'.$location_title_str.'</title>';
				$desc_str .= 'Navigation page; path: '.$location_title_str;
			}
		}
		elseif(isset($index_page) and $index_page) {
			echo "<title>Mordan's Vault</title>";
			$desc_str .= 'Home Page with update notes.';
		}
		echo '<meta name="description" content="Mordan\'s Vault; table-top rpg stat blocks; '.$desc_str.'">';
	?>
</head>
<?php echo '<body'.($lightMode?' class="light"':'').'>' ?>
	<div id="sidebar">
		<div id="nav-controls">
			<button id="menu-close" aria-label="Close Navigation"></button>
		</div>
		<p id="sidebar-label">Navigation</p>
		<nav><ul class="menu-vertical">
			<?php
				$opennav = isset($_GET['opennav']) && $_GET['opennav']=='1';

				$depth=0;
				$tree_path=[$pages['sort_tree']];
				$tree_indices=[0];
				$tree_counts=[count($pages['sort_tree'])];
				$final_type='';
				$final_has_nodes=true;
				$sort_path=[];

				$sanity=1000;
				while($depth>=0) {
					if($sanity<1) {
						echo '<p>Loop has gone insane after 1000 iterations.</p>';
						break;
					}
					if($tree_indices[$depth]<$tree_counts[$depth]) {
						$ptr=$tree_path[$depth][$tree_indices[$depth]];
						$match=($ptr['name']==(isset($_GET['path'])?(isset($get_path[$depth])?$get_path[$depth]:''):(isset($pages['entries'][$pageId])?($depth==count($pages['entries'][$pageId]['sort_path']) && $ptr['type']=='limb'?$pageId:(isset($pages['entries'][$pageId]['sort_path'][$depth])?$pages['entries'][$pageId]['sort_path'][$depth]:'')):'')));
						if($match) {
							$final_type=$ptr['type'];
							$final_has_nodes=isset($ptr['nodes']);
							array_push($sort_path,$ptr['name']);
						}
						switch ($ptr['type']) {
							case 'branch':
								echo '<li class="has-dropdown'.($opennav && $match?' open':'').'">';
								echo '<p class="label">'.$ptr['display_name'].'</p>';
								echo '<ul class="menu-vertical">';
								$depth++;
								$tree_path[$depth]=$ptr['nodes'];
								$tree_indices[$depth]=0;
								$tree_counts[$depth]=count($ptr['nodes']);
								break;
							
							case 'limb':
								echo '<li class="has-dropdown'.($opennav && $match?' open':'').'">';
								echo '<p class="label">'.$ptr['display_name'].'</p>';
								echo '<ul class="menu-vertical">';
								$entry=$pages['entries'][$ptr['name']];
								echo '<li><a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'?opennav=1"><p class="label">View Section Home</p></a></li>';
								$depth++;
								$tree_path[$depth]=$ptr['nodes'];
								$tree_indices[$depth]=0;
								$tree_counts[$depth]=count($ptr['nodes']);
								break;
							
							case 'flower':
							case 'leaf':
								$entry=$pages['entries'][$ptr['name']];
								echo '<li><a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'?opennav=1"><p class="label">'.$ptr['display_name'].'</p></a></li>';
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
						unset($tree_path[$depth]);
						unset($tree_indices[$depth]);
						unset($tree_counts[$depth]);
						$depth--;
						if($depth>=0) {
							$tree_indices[$depth]++;
							echo '</ul></li>';
						}
					}
					$sanity--;
				}

				if(!isset($get_path) && $pageId!=='') {
					$sort_path=$pages['entries'][$pageId]['sort_path'];
					array_push($sort_path,$pageId);
					$page_node=retrieveNodeAtDepthTruncate($pages['sort_tree'],$sort_path);
					while(in_array($page_node['type'], ['petal']) || $page_node['childless']==true) {
						array_pop($sort_path);
						$page_node=retrieveNodeAtDepthTruncate($pages['sort_tree'],$sort_path);
					}
					if(in_array($page_node['type'], ['flower','petal','limb','leaf']))
						$childCount++;
					$sort_path_len=count($sort_path);
					foreach ($pages['entries'] as $id => $entry) {
						if($sort_path_len<=count($entry['sort_path'])) {
							$match=true;
							foreach($sort_path as $ind => $level) {
								if($level!==$entry['sort_path'][$ind]) {
									$match=false;
									break;
								}
							}
							if($match) {
								$childCount++;
							}
						}
					}
				}
			?>
		</ul></nav>
	</div>
	<div id="center">
		<div id="top-section">
			<button id="menu-open" aria-label="Open Navigation"></button>
			<h1>Mordan's Vault</h1>
			<label class="switch" id="light-switch">
				<?php echo '<input type="checkbox" id="light"'.($lightMode?'checked':'').' aria-label="Light / Dark mode toggle switch.">' ?>
				<span class="slider"></span>
			</label>
			<nav id="top-nav">
				<div id="long-nav">
				<?php
					$depth=0;
					$tree_path=[$pages['sort_tree']];
					$node_list=[];
					$tree_index=0;
					$tree_count=count($tree_path[$depth]);
					$next_node=[];
					$final_node=[];
					$starting_flower=false;
					$flower_node=[];
					$short_nav='<a href="'.$pages['origin'].'" class="top-label">Home</a>';
					$last_level='';

					$sanity=1000;
					while($depth<count($tree_path)) {
						if($sanity<1) {
							echo '<p>Loop has gone insane after 1000 iterations.</p>';
							break;
						}
						if($tree_index<$tree_count) {
							$ptr=$tree_path[$depth][$tree_index];
							if($tree_index==0) {
								$last_level='';
								echo '<p class="top-row">';
								if($starting_flower) {
									$starting_flower=false;
									if(isset($flower_node['petal_display_name'])) {
										$entry=$pages['entries'][$flower_node['name']];
										$new_entry='<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'" class="top-label status-'.$entry['status'].'">'.$flower_node['petal_display_name'].'</a> | ';
										echo $new_entry;
										$last_level.=$new_entry;
									}
								}
							}
							else {
								echo ' | ';
								$last_level.=' | ';
							}
							$match=($ptr['name']==(isset($_GET['path'])?(isset($get_path[$depth])?$get_path[$depth]:''):(isset($pages['entries'][$pageId])?($depth==count($pages['entries'][$pageId]['sort_path']) && $ptr['type']=='limb'?$pageId:(isset($pages['entries'][$pageId]['sort_path'][$depth])?$pages['entries'][$pageId]['sort_path'][$depth]:'')):'')));
							if($match) {
								if(isset($ptr['nodes']))
									array_push($tree_path, $ptr['nodes']);
								$next_node=$ptr;
								if($next_node['type']=='flower' || $next_node['type']=='limb') {
									$starting_flower=true;
									$flower_node=$ptr;
								}
							}
							echo '<!--'.$ptr['type'].'-->';
							if($ptr['type']=='branch') {
								$search_path='';
								foreach($node_list as $node) {
									$search_path.=$node['name'].',';
								}
								$search_path.=$ptr['name'];
								$new_entry='<a href="'.$pages['origin'].'nav.php?path='.$search_path.'" class="top-label'.($match || $ptr['name'] == $pageId ? ' selected' : '').(isset($pages['entries'][$ptr['name']])?' status-'.$pages['entries'][$ptr['name']]['status']:'').'">'.$ptr['display_name'].'</a>';
								echo $new_entry;
								$last_level.=$new_entry;
								if($match || $ptr['name'] == $pageId)
									$short_nav .= ' > <a href="'.$pages['origin'].'nav.php?path='.$search_path.'" class="top-label">'.$ptr['display_name'].'</a>';
							}
							else {
								$entry=$pages['entries'][$ptr['name']];
								$new_entry = '<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'" class="top-label'.($match || $ptr['name'] == $pageId ? ' selected' : '').' status-'.(isset($ptr['petal_display_name'])?'done':$entry['status']).'">'.$ptr['display_name'].'</a>';
								echo $new_entry;
								$last_level.=$new_entry;
								if($match || $ptr['name'] == $pageId)
									$short_nav .= ' > <a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'" class="top-label">'.$ptr['display_name'].'</a>';
							}
							if($ptr['name'] == $pageId)
								$final_node=$ptr;
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
					if(isset($final_node['type']) && $final_node['type']=='flower') {
						$last_level='';
						echo '<p class="top-row">';
						if(isset($final_node['petal_display_name'])) {
							$entry=$pages['entries'][$final_node['name']];
							$new_entry = '<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'" class="top-label selected status-'.$entry['status'].'">'.$final_node['petal_display_name'].'</a> | ';
							echo $new_entry;
							$last_level.=$new_entry;
							$short_nav .= ' > <a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'" class="top-label">'.$final_node['petal_display_name'].'</a>';
						}
						$node_count=count($final_node['nodes']);
						for($i=0; $i<$node_count; $i++) {
							if($i>0) {
								echo ' | ';
								$last_level.=' | ';
							}
							$ptr=$final_node['nodes'][$i];
							$entry=$pages['entries'][$ptr['name']];
							$new_entry='<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'" class="top-label status-'.$entry['status'].'">'.$ptr['display_name'].'</a>';
							echo $new_entry;
							$last_level.=$new_entry;
						}
						echo '</p><hr>';
					}

					echo '</div><div id="short-nav">';
					echo $short_nav;
					if(isset($final_node['nodes']) || isset($ptr['nodes'])) {
						echo '<hr>';
						echo $last_level;
					}
				?>
				</div>
			</nav>
		</div>
		<main id="content">
			<?php
				if($pageId!='' && $pages['entries'][$pageId]['status']=='wip') {
					if(isset($pages['entries'][$pageId]['note']))
						echo '<div id="wip-note"><p>This page is currently a Work In Progress and may have unfinished, placeholder, and missing information.</p><p><b>Reason</b>: '.$pages['entries'][$pageId]['note'].'</p></div>';
					else
						echo '<div id="wip-note"><p>This page is currently a Work In Progress and may have unfinished, placeholder, and missing information.</p></div>';
				}
			?>
