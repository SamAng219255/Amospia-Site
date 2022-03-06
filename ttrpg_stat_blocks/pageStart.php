<?php
	$devMode=false;

	$lightMode=false;
	if(isset($_COOKIE['lightMode']))
		$lightMode=$_COOKIE['lightMode']=='true';

	$pathstuff=explode('/',$_SERVER['SCRIPT_NAME']);
	$currentDirectory=$pathstuff[count($pathstuff)-2];
	$currentPage=$pathstuff[count($pathstuff)-1];
	$rootDir='';
	for($i=0; $i<20; $i++) {
		if(file_exists($rootDir.'quick_paste_lib.php')) {
			require $rootDir.'quick_paste_lib.php';
			break;
		}
		else {
			$rootDir='../'.$rootDir;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="/jquery.js"></script>
	<script src="/ttrpg_stat_blocks/mobileDetect.js"></script>
	<?php
		echo '	<link rel="stylesheet" type="text/css" href="'.$rootDir.'theme.css?t='.time().'">';
		echo '	<script>rootDir="'.$rootDir.'";'.($devMode ? ' devMode=true;' : '').'</script>';
		echo '	<script src="'.$rootDir.'menu.js?t='.time().'"></script>';
		//echo '	<link rel="shortcut icon" href="'.$rootDir.'../img/icon2_256.png">'
	?>
	<script src="/ttrpg_stat_blocks/table_sort.js"></script>
</head>
<?php echo '<body onload="setup()"'.($lightMode?' class="light"':'').'>' ?>
	<div id="sidebar">
		<div id="nav-controls">
			<div id="menu-close"></div>
		</div>
		<p id="sidebar-label">Navigation</p>
		<ul class="menu-vertical">
			<?php
				$string=file_get_contents($rootDir.'pages.json');
				$pages=json_decode($string, true);

				$string_entries=file_get_contents($rootDir.'pages_entries.json');
				$pages['entries']=json_decode($string_entries, true)['entries'];

				$depth=0;
				$tree_path=[$pages['sort_tree']];
				$tree_indices=[0];
				$tree_counts=[count($pages['sort_tree'])];

				$sanity=1000;
				while($depth>=0) {
					if($sanity<1) {
						echo '<p>Loop has gone insane after 1000 iterations.</p>';
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
							
							case 'limb':
								echo '<li class="has-dropdown">';
								echo '<p class="label">'.$ptr['display_name'].'</p>';
								echo '<ul class="menu-vertical">';
								$entry=$pages['entries'][$ptr['name']];
								echo '<li><a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'"><p class="label">View Section Home</p></a></li>';
								$depth++;
								$tree_path[$depth]=$ptr['nodes'];
								$tree_indices[$depth]=0;
								$tree_counts[$depth]=count($ptr['nodes']);
								break;
							
							case 'flower':
							case 'leaf':
								$entry=$pages['entries'][$ptr['name']];
								echo '<li><a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'"><p class="label">'.$ptr['display_name'].'</p></a></li>';
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
			<div id="controls">
				<div id="menu-open"></div>
				<label class="switch" id="light-switch">
					<?php echo '<input type="checkbox" id="light"'.($lightMode?'checked':'').'>' ?>
					<span class="slider"></span>
				</label>
			</div>
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

					$pageId='';
					$pageCount=count($pages['entries']);
					$filePathInfo=pathinfo(debug_backtrace()[0]['file']);
					$getStr='';
					if(count($_GET)>0) {
						$getStr='?';
						$first=true;
						foreach ($_GET as $name => $val) {
							if($first)
								$first=false;
							else
								$getStr.='&';
							$getStr.=$name.'='.urlencode($val);
						}
					}
					foreach($pages['entries'] as $id => $entry) {
						if($entry['file_name']===$filePathInfo['basename'].$getStr && endsWith($filePathInfo['dirname'],substr($entry['directory'],0,-1))) {
							$pageId=$id;
							echo '<title>'.$entry['display_name'].'</title>';
						}
					}

					$depth=0;
					$tree_path=[$pages['sort_tree']];
					$node_list=[];
					$tree_index=0;
					$tree_count=count($tree_path[$depth]);
					$next_node=[];
					$get_path=explode(',', $_GET['path']);
					$final_node=[];
					$starting_flower=false;
					$flower_node=[];

					$sanity=1000;
					while($depth<count($tree_path)) {
						if($sanity<1) {
							echo '<p>Loop has gone insane after 1000 iterations.</p>';
							break;
						}
						if($tree_index<$tree_count) {
							$ptr=$tree_path[$depth][$tree_index];
							if($tree_index==0) {
								echo '<p class="top-row">';
								if($starting_flower) {
									$starting_flower=false;
									if(isset($flower_node['petal_display_name'])) {
										$entry=$pages['entries'][$flower_node['name']];
										echo '<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'" class="top-label status-'.$entry['status'].'">'.$flower_node['petal_display_name'].'</a> | ';
									}
								}
							}
							else
								echo ' | ';
							$match=($ptr['name']==(isset($_GET['path'])?$get_path[$depth]:(isset($pages['entries'][$pageId]) && $depth==count($pages['entries'][$pageId]['sort_path']) && $ptr['type']=='limb'?$pageId:$pages['entries'][$pageId]['sort_path'][$depth])));
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
								echo '<a href="'.$pages['origin'].'?path='.$search_path.'" class="top-label'.($match || $ptr['name'] == $pageId ? ' selected' : '').' status-'.$pages['entries'][$ptr['name']]['status'].'">'.$ptr['display_name'].'</a>';
							}
							else {
								$entry=$pages['entries'][$ptr['name']];
								echo '<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'" class="top-label'.($match || $ptr['name'] == $pageId ? ' selected' : '').' status-'.(isset($ptr['petal_display_name'])?'done':$entry['status']).'">'.$ptr['display_name'].'</a>';
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
					if($final_node['type']=='flower') {
						echo '<p class="top-row">';
						if(isset($final_node['petal_display_name'])) {
							$entry=$pages['entries'][$final_node['name']];
							echo '<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'" class="top-label selected status-'.$entry['status'].'">'.$final_node['petal_display_name'].'</a> | ';
						}
						$node_count=count($final_node['nodes']);
						for($i=0; $i<$node_count; $i++) {
							if($i>0)
								echo ' | ';
							$ptr=$final_node['nodes'][$i];
							$entry=$pages['entries'][$ptr['name']];
							echo '<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'" class="top-label status-'.$entry['status'].'">'.$ptr['display_name'].'</a>';
						}
						echo '</p><hr>';
					}
				?>
			</div>
		</div>
		<div id="content">
			<?php
				if($pageId!='' && $pages['entries'][$pageId]['status']=='wip') {
					echo '<div id="wip-note"><p>This page is currently a Work In Progress and may have unfinished, placeholder, and missing information.</p></div>';
				}
			?>
