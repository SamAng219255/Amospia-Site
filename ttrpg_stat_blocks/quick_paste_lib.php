<?php
	$dashes=['-','–','—'];
	function intPow($base,$exp) {
		$res=1;
		if($exp>0) {
			for($i=0; $i<$exp; $i++) {
				$res*=$base;
			}
		}
		else {
			for($i=0; $i>$exp; $i--) {
				$res/=$base;
			}
		}
		return $res;
	}
	function array_append(&$arr,$elements) {
		foreach($elements as $element) {
			array_push($arr,$element);
		}
	}
	function addSign($x) {
		return ($x<0?''.$x:'+'.$x);
	}
	function endsWith($haystack, $needle) {
		$length = strlen($needle);
		return $length > 0 ? substr($haystack, -$length) === $needle : true;
	}
	function debugPrint($val) {
		echo '<pre>';
		var_dump($val);
		echo '</pre>';
	}
	function ordinalSuffix($x) {
		if($x==0)
			return '';
		$x1=$x%100;
		if($x1>10 && $x1<20)
			return 'th';
		$x2=$x1%10;
		if($x2==1)
			return 'st';
		if($x2==2)
			return 'nd';
		if($x2==3)
			return 'rd';
		return 'th';
	}
	function quick_link_format(&$str) {
		global $pages;
		$matches=[];
		if(preg_match_all('/aa\/(.+?)\|/', $str, $matches)) {
			foreach ($matches[1] as $match) {
				$entry=$pages['entries'][$match];
				$str=preg_replace('/aa\/(.+?)\|/', '<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'" target="_blank">', $str, 1);
				$str=preg_replace('/ ?\/aa/', '</a>', $str, 1);
			}
		}
		$matches=[];
		if(preg_match_all('/as\/(.+?)\|(.+?)\|/', $str, $matches)) {
			foreach ($matches[1] as $ind=>$match) {
				$entry=$pages['entries'][$match];
				$str=preg_replace('/as\/(.+?)\|(.+?)\|/', '<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'#section-'.str_replace(' ','-',$matches[2][$ind]).'" target="_blank">', $str, 1);
				$str=preg_replace('/ ?\/as/', '</a>', $str, 1);
			}
		}
		$matches=[];
		if(preg_match_all('/ab\/(.+?)\|(.+?)\|/', $str, $matches)) {
			foreach ($matches[1] as $ind=>$match) {
				$entry=$pages['entries'][$match];
				$str=preg_replace('/ab\/(.+?)\|(.+?)\|/', '<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'#block-'.str_replace(' ','-',$matches[2][$ind]).'" target="_blank">', $str, 1);
				$str=preg_replace('/ ?\/ab/', '</a>', $str, 1);
			}
		}
		$matches=[];
		if(preg_match_all('/li\/(.+?)\|/', $str, $matches)) {
			foreach ($matches[1] as $match) {
				$str=preg_replace('/li\/(.+?)\|/', '<a href="'.$match.'" target="_blank">', $str, 1);
				$str=preg_replace('/ ?\/li/', '</a>', $str, 1);
			}
		}
	}
	function quick_format_string($subject) {
		$str=$subject;
		$str=preg_replace('/\/\//', "\u{E100}", $str);
		$str=preg_replace('/ ?\/bb/', '</b>', $str);
		$str=preg_replace('/bb\/ ?/', '<b>', $str);
		$str=preg_replace('/ ?\/ii/', '</i>', $str);
		$str=preg_replace('/ii\/ ?/', '<i>', $str);
		$str=preg_replace('/ ?\/uu/', '</u>', $str);
		$str=preg_replace('/uu\/ ?/', '<u>', $str);
		$str=preg_replace('/ ?\/ss/', '</sup>&#x200B;', $str);
		$str=preg_replace('/ss\/ ?/', '&#x200B;<sup>', $str);
		$str=preg_replace('/ ?\/__/', '</sub>&#x200B;', $str);
		$str=preg_replace('/__\/ ?/', '&#x200B;<sub>', $str);
		$str=preg_replace('/\/fa\//', '<img src="https://2e.aonprd.com/Images/Actions/FreeAction.png" alt="Free Action" class="action-img">', $str);
		$str=preg_replace('/\/ra\//', '<img src="https://2e.aonprd.com/Images/Actions/Reaction.png" alt="Rection" class="action-img">', $str);
		$str=preg_replace('/\/1a\//', '<img src="https://2e.aonprd.com/Images/Actions/OneAction.png" alt="One Action" class="action-img">', $str);
		$str=preg_replace('/\/2a\//', '<img src="https://2e.aonprd.com/Images/Actions/TwoActions.png" alt="Two Actions" class="action-img">', $str);
		$str=preg_replace('/\/3a\//', '<img src="https://2e.aonprd.com/Images/Actions/ThreeActions.png" alt="Three Actions" class="action-img">', $str);
		$str=preg_replace('/\/fl\//', '<img src="https://2e.aonprd.com/Images/Actions/FreeAction_I.png" alt="Free Action" class="action-img">', $str);
		$str=preg_replace('/\/rl\//', '<img src="https://2e.aonprd.com/Images/Actions/Reaction_I.png" alt="Rection" class="action-img">', $str);
		$str=preg_replace('/\/1l\//', '<img src="https://2e.aonprd.com/Images/Actions/OneAction_I.png" alt="One Action" class="action-img">', $str);
		$str=preg_replace('/\/2l\//', '<img src="https://2e.aonprd.com/Images/Actions/TwoActions_I.png" alt="Two Actions" class="action-img">', $str);
		$str=preg_replace('/\/3l\//', '<img src="https://2e.aonprd.com/Images/Actions/ThreeActions_I.png" alt="Three Actions" class="action-img">', $str);
		$str=preg_replace('/ ?\/qq/', '</span>', $str);
		$str=preg_replace('/qq\/ ?/', '<span class="trait">', $str);
		$str=preg_replace('/ ?\/qb/', '</span>', $str);
		$str=preg_replace('/qb\/ ?/', '<span class="trait trait-blue">', $str);
		$str=preg_replace('/ ?\/qo/', '</span>', $str);
		$str=preg_replace('/qo\/ ?/', '<span class="trait trait-orange">', $str);
		$str=str_replace("\u{E100}", "/", $str);

		quick_link_format($str);

		return $str;
	}
	function quick_format($subject) {
		$str=$subject;

		if(is_array($str)) {
			foreach ($str as $ind=>$trueStr) {
				$str[$ind]=quick_format_string($str[$ind]);
			}
		}
		else {
			$str=quick_format_string($str);
		}

		return $str;
	}
	function quick_array($subject) {
		$arr=[];
		if(is_array($subject)) {
			$arr=$subject;
		}
		else {
			$arr=explode("\n",str_replace('/nn/', "\n", $subject));
		}

		$lineCount=count($arr);
		for($i=0; $i<$lineCount; $i++) {
			if(is_string($arr[$i]))
				$temp=$arr[$i];
			elseif(isset($arr[$i]['text']))
				$temp=$arr[$i]['text'];
			else
				continue;
			$temp=trim($temp);
			$head='';
			$foot='';
			$found=false;
			do {
				$found=false;
				if(substr($temp, 0, 4)=='/mm/') {
					$head.='<span class="inset">';
					$foot='</span>'.$foot;
					$temp=trim(substr($temp,4));
					$found=true;
				}
				if(substr($temp, 0, 4)=='/m2/') {
					$head.='<span class="inset-double">';
					$foot='</span>'.$foot;
					$temp=trim(substr($temp,4));
					$found=true;
				}
				if(substr($temp, 0, 4)=='/m3/') {
					$head.='<span class="inset-triple">';
					$foot='</span>'.$foot;
					$temp=trim(substr($temp,4));
					$found=true;
				}
				if(substr($temp, 0, 4)=='/m4/') {
					$head.='<span class="inset-quad">';
					$foot='</span>'.$foot;
					$temp=trim(substr($temp,4));
					$found=true;
				}
				if(substr($temp, 0, 4)=='/ee/') {
					$head.='<span class="enlarged">';
					$foot='</span>'.$foot;
					$temp=trim(substr($temp,4));
					$found=true;
				}
				if(substr($temp, 0, 4)=='/rr/') {
					$head.='<span class="reduced">';
					$foot='</span>'.$foot;
					$temp=trim(substr($temp,4));
					$found=true;
				}
				if(substr($temp, 0, 4)=='/tt/') {
					$head.='<span class="subtitle">';
					$foot='</span>'.$foot;
					$temp=trim(substr($temp,4));
					$found=true;
				}
			}
			while($found);
			if(is_string($arr[$i]))
				$arr[$i]=quick_format($head.$temp.$foot);
			else
				$arr[$i]['text']=quick_format($head.$temp.$foot);
		}
		return $arr;
	}
	function quick_array_explode($subject, $delimiter) {
		$arr=[];
		if(is_array($subject)) {
			$arr=$subject;
		}
		else {
			$arr=explode($delimiter,$subject);
		}
		return quick_array($arr);
	}
	function block($name='', $type='', $texts=[], $spaced=false, $sections=[], $isLayered=false) {
		$name_str=is_string($name) ? $name : $name['text'];
		echo '<section class="block '.$type.($isLayered?' layered-block':'').'" id="block-'.str_replace(' ', '-', $name_str).'">';
		echo '<header class="block-title'.(!is_string($name) && isset($name['titleLevel']) ? ' h'.$name['titleLevel'] : '').'">'.$name_str.'<a href="#" class="goto-top">Back to Top</a></header>';
		$textCount=count($texts);
		for($i=0; $i<$textCount; $i++) {
			$lineClasses='';
			if(is_array($texts[$i])) {
				if(isset($texts[$i]['spacing'])) {
					$spacebits=[
						1=>'spaced',
						2=>'top-spaced',
						4=>'double-spaced',
						8=>'top-double-spaced'
					];
					foreach ($spacebits as $bit => $class) {
						if($texts[$i]['spacing']&$bit)
							$lineClasses.=' '.$class;
					}
				}
				elseif($spaced) {
					$lineClasses.=' spaced';
				}
				if(isset($texts[$i]['titleLevel'])) {
					$lineClasses.=' h'.$texts[$i]['titleLevel'];
				}
				echo '<div class="p'.$lineClasses.'">'.$texts[$i]['text'].'</div>';
			}
			else {
				if($spaced)
					$lineClasses=' spaced';
				echo '<div class="p'.$lineClasses.'">'.$texts[$i].'</div>';
			}
		}
		$sectionCount=count($sections);
		for($i=0; $i<$sectionCount; $i++) {
			echo '<div class="block-section">';
			echo '<div class="block-section-title'.(isset($sections[$i]['titleLevel'])?' section-title-'.$sections[$i]['titleLevel']:'').'">'.$sections[$i]['title'].'</div>';
			$sectionTextCount=count($sections[$i]['texts']);
			for($j=0; $j<$sectionTextCount; $j++) {
				$lineClasses='';
				if(is_array($sections[$i]['texts'][$j])) {
					if(isset($sections[$i]['texts'][$j]['spacing'])) {
						$spacebits=[
							1=>'spaced',
							2=>'top-spaced',
							4=>'double-spaced',
							8=>'top-double-spaced'
						];
						foreach ($spacebits as $bit => $class) {
							if($sections[$i]['texts'][$j]['spacing']&$bit)
								$lineClasses.=' '.$class;
						}
					}
					elseif($sections[$i]['spaced']) {
						$lineClasses.=' spaced';
					}
					if(isset($sections[$i]['texts'][$j]['titleLevel'])) {
						$lineClasses.=' h'.$sections[$i]['texts'][$j]['titleLevel'];
					}
					echo '<div class="p'.$lineClasses.'">'.$sections[$i]['texts'][$j]['text'].'</div>';
				}
				else {
					if($sections[$i]['spaced'])
						$lineClasses.=' spaced';
					echo '<div class="p'.$lineClasses.'">'.$sections[$i]['texts'][$j].'</div>';
				}
			}
			echo '</div>';
		}
		echo '</section>';
	}
	function block2($name='', $type='', $level=false, $traits=[], $texts=[], $spaced=false, $sections=[]) {
		echo '<section class="block block2 '.$type.'" id="block-'.str_replace(' ', '-', $name).'">';
		echo '<header class="block-title">'.$name.'&nbsp;<span class="level-label">'.$type.' '.($level===false?'':$level).'</span></header>';
		echo '<a href="#" class="goto-top-2">Back to Top</a>';
		echo '<div class="traits">';
		foreach ($traits as $trait) {
			$color='';
			switch ($trait) {
				case 'Uncommon':
					$color='trait-orange';
					break;
				case 'Rare':
				case 'Unique':
					$color='trait-blue';
					break;
				default:
					$color='';
					break;
			}
			echo '<span class="trait '.$color.'">'.$trait.'</span>';
		}
		echo '</div>';
		foreach ($texts as $ind => $segment) {
			if($ind>0)
				echo "<hr>";
		 	foreach ($segment as $text) {
				echo '<div class="p'.($spaced ? ' spaced' : '').'">'.$text.'</div>';
			}
		}
		$sectionCount=count($sections);
		for($i=0; $i<$sectionCount; $i++) {
			echo '<div class="block-section">';
			echo '<div class="block-section-title-alt">'.$sections[$i]['title'].(isset($sections[$i]['level'])?'<span class="level-label">'.$type.' '.$sections[$i]['level'].'</span>':'').'</div>';
			if(isset($sections[$i]['traits'])) {
				echo '<div class="traits">';
				foreach ($sections[$i]['traits'] as $trait) {
					$color='';
					switch ($trait) {
						case 'Uncommon':
							$color='trait-orange';
							break;
						case 'Rare':
						case 'Unique':
							$color='trait-blue';
							break;
						default:
							$color='';
							break;
					}
					echo '<span class="trait '.$color.'">'.$trait.'</span>';
				}
				echo '</div>';
			}
			$sectionTextCount=count($sections[$i]['texts']);
			foreach ($sections[$i]['texts'] as $text) {
				echo '<div class="p'.($sections[$i]['spaced'] ? ' spaced' : '').'">'.quick_format($text).'</div>';
			}
			echo '</div>';
		}
		echo '</section>';
	}
	function blockSF($name='', $type='', $texts=[], $spaced=false, $sections=[], $anchorSections=true) {
		echo '<section class="block block-sf '.$type.'" id="block-'.str_replace(' ', '-', $name).'">';
		echo '<header class="block-title">'.$name.'<a href="#" class="goto-top">Back to Top</a></header>';
		$textCount=count($texts);
		for($i=0; $i<$textCount; $i++) {
			echo '<div class="p'.($spaced ? ' spaced' : '').'">'.$texts[$i].'</div>';
		}
		$sectionCount=count($sections);
		for($i=0; $i<$sectionCount; $i++) {
			echo '<div class="block-section">';
			echo '<div class="block-section-title"'.($anchorSections?' id="section-'.str_replace(' ', '-', $sections[$i]['title']).'"':'').'>'.$sections[$i]['title'].'</div>';
			$sectionTextCount=count($sections[$i]['texts']);
			for($j=0; $j<$sectionTextCount; $j++) {
				echo '<div class="p'.($sections[$i]['spaced'] ? ' spaced' : '').'">'.$sections[$i]['texts'][$j].'</div>';
			}
			echo '</div>';
		}
		echo '</section>';
	}

	function blockStack($name='', $type='', $texts=[], $spaced=false, $sections=[], $isTop=true) {
		echo '<section class="block '.$type.($isTop?'':' layered-block').'" id="block-'.str_replace(' ', '-', $name).'">';
		echo '<header class="block-title">'.$name.'<a href="#" class="goto-top">Back to Top</a></header>';
		$textCount=count($texts);
		for($i=0; $i<$textCount; $i++) {
			$lineClasses='';
			if(is_array($texts[$i])) {
				if(isset($texts[$i]['block']) && $texts[$i]['block']) {
					if(isset($texts[$i]['sections'])) {
						blockStack($texts[$i]['name'],$texts[$i]['type'],$texts[$i]['texts'],$texts[$i]['spaced'],$texts[$i]['sections'],false);
					}
					elseif (isset($texts[$i]['spaced'])) {
						blockStack($texts[$i]['name'],$texts[$i]['type'],$texts[$i]['texts'],$texts[$i]['spaced'],[],false);
					}
					else {
						blockStack($texts[$i]['name'],$texts[$i]['type'],$texts[$i]['texts'],false,[],false);
					}
				}
				else {
					if(isset($texts[$i]['spacing'])) {
						$spacebits=[
							1=>'spaced',
							2=>'top-spaced',
							4=>'double-spaced',
							8=>'top-double-spaced'
						];
						foreach ($spacebits as $bit => $class) {
							if($texts[$i]['spacing']&$bit)
								$lineClasses.=' '.$class;
						}
					}
					elseif($spaced) {
						$lineClasses.=' spaced';
					}
					if(isset($texts[$i]['titleLevel'])) {
						$lineClasses.=' h'.$texts[$i]['titleLevel'];
					}
					echo '<div class="p'.$lineClasses.'">'.$texts[$i]['text'].'</div>';
				}
			}
			else {
				if($spaced)
					$lineClasses=' spaced';
				echo '<div class="p'.$lineClasses.'">'.$texts[$i].'</div>';
			}
		}
		$sectionCount=count($sections);
		for($i=0; $i<$sectionCount; $i++) {
			echo '<div class="block-section">';
			echo '<div class="block-section-title'.(isset($sections[$i]['titleLevel'])?' section-title-'.$sections[$i]['titleLevel']:'').'">'.$sections[$i]['title'].'</div>';
			$sectionTextCount=count($sections[$i]['texts']);
			for($j=0; $j<$sectionTextCount; $j++) {
				$lineClasses='';
				if(is_array($sections[$i]['texts'][$j])) {
					if(isset($sections[$i]['texts'][$j]['block']) && $sections[$i]['texts'][$j]['block']) {
						if(isset($sections[$i]['texts'][$j]['sections'])) {
							blockStack($sections[$i]['texts'][$j]['name'],$sections[$i]['texts'][$j]['type'],$sections[$i]['texts'][$j]['texts'],$sections[$i]['texts'][$j]['spaced'],$sections[$i]['texts'][$j]['sections'],false);
						}
						elseif (isset($sections[$i]['texts'][$j]['spaced'])) {
							blockStack($sections[$i]['texts'][$j]['name'],$sections[$i]['texts'][$j]['type'],$sections[$i]['texts'][$j]['texts'],$sections[$i]['texts'][$j]['spaced'],[],false);
						}
						else {
							blockStack($sections[$i]['texts'][$j]['name'],$sections[$i]['texts'][$j]['type'],$sections[$i]['texts'][$j]['texts'],false,[],false);
						}

					}
					else {
						if(isset($sections[$i]['texts'][$j]['spacing'])) {
							$spacebits=[
								1=>'spaced',
								2=>'top-spaced',
								4=>'double-spaced',
								8=>'top-double-spaced'
							];
							foreach ($spacebits as $bit => $class) {
								if($sections[$i]['texts'][$j]['spacing']&$bit)
									$lineClasses.=' '.$class;
							}
						}
						elseif($sections[$i]['spaced']) {
							$lineClasses.=' spaced';
						}
						if(isset($sections[$i]['texts'][$j]['titleLevel'])) {
							$lineClasses.=' h'.$sections[$i]['texts'][$j]['titleLevel'];
						}
						echo '<div class="p'.$lineClasses.'">'.$sections[$i]['texts'][$j]['text'].'</div>';
					}
				}
				else {
					if($sections[$i]['spaced'])
						$lineClasses.=' spaced';
					echo '<div class="p'.$lineClasses.'">'.$sections[$i]['texts'][$j].'</div>';
				}
			}
			echo '</div>';
		}
		echo '</section>';
	}
	function blockList($tree) {
		if(!isset($tree['children'])) {
			block(isset($tree['link'])?'<a href="'.$tree['link'].'">'.quick_format($tree['name']).'</a>':quick_format($tree['name']));
			return;
		}
		$sections=[];
		foreach ($tree['children'] as $toplvl_child) {
			$section=[
				'title' => isset($toplvl_child['link']) ? '<a href="'.$toplvl_child['link'].'">'.quick_format($toplvl_child['name']).'</a>' : quick_format($toplvl_child['name']),
				'spaced' => false,
				'texts' => []
			];
			if(isset($toplvl_child['children'])) {
				$text='<ul>';

				$depth=0;
				$path=[$toplvl_child];
				$ind=[0];
				$sanity=10000;
				while($depth>=0 && $sanity-->0) {
					if(isset($path[$depth]['children'][$ind[$depth]])) {
						$here=$path[$depth]['children'][$ind[$depth]++];
						$text .= '<li>';
						$text .= isset($here['link']) ? '<a href="'.$here['link'].'">'.quick_format($here['name']).'</a>' : '<span>'.quick_format($here['name']).'</span>';
						if(isset($here['children'])) {
							$depth++;
							$path[$depth]=$here;
							$ind[$depth]=0;
							$text.='<ul>';
						}
						else {
							$text.='</li>';
						}
					}
					else {
						$depth--;
						$text.='</ul></li>';
					}
				}

				$section['texts']=[quick_format($text)];
			}
			array_push($sections, $section);
		}
		block(
			isset($tree['link']) ? '<a href="'.$tree['link'].'">'.quick_format($tree['name']).'</a>' : quick_format($tree['name']),
			'list',
			[],
			false,
			$sections
		);
	}
	function magicItemBlock($name, $aura, $cl, $slot, $price, $weight, $description, $construction, $destruction) {
		$sections=[
			[
				"title" => "Description",
				"spaced" => true,
				"texts" => quick_format($description)
			]
		];
		if($construction) {
			array_push($sections, [
				"title" => "Construction",
				"spaced" => false,
				"texts" => quick_format($construction)
			]);
		}
		if($destruction) {
			array_push($sections, [
				"title" => "Destruction",
				"spaced" => false,
				"texts" => quick_format($destruction)
			]);
		}
		block($name, 'item', [
			"<b>Aura</b> {$aura}; <b>CL</b> {$cl}",
			"<b>Slot</b> {$slot}; <b>Price</b> {$price}; <b>Weight</b> {$weight}"
		], false, $sections);
	}
	function magicItemBlockAuto($name, $school, $cl, $slot, $price, $weight, $description, $isArtifact, $extra) {
		global $dashes;
		magicItemBlock(
			$name,
			in_array($school,$dashes)?'—':(is_string($cl)?$school:($cl<6 ? "Faint" : ($cl<12 ? "Moderate" : ($cl<21 ? "Strong" : "Overwhelming"))).' '.$school),
			in_array($cl,$dashes)?'—':(is_string($cl)?$cl:$cl.($cl>10 && $cl<20 ? "th" : ($cl%10==1 ? "st" : ($cl%10==2 ? "nd" : ($cl%10==3 ? "rd" : "th"))))),
			$slot,
			in_array($price,$dashes)?'—':(is_string($price)?$price:number_format($price)." gp"),
			in_array($weight,$dashes)?'—':(is_string($weight)?$weight:number_format($weight).($weight==1 ? " lb." : " lbs.")),
			quick_array($description),
			$isArtifact ? false : (is_array($extra) ? $extra : explode("\n", $extra)),
			$isArtifact ? (is_array($extra) ? $extra : explode("\n", $extra)) : false
		);
	}
	function magicBuildingBlock($name, $aura, $cl, $price, $description, $construction, $destruction) {
		$sections=[
			[
				"title" => "Description",
				"spaced" => true,
				"texts" => quick_format($description)
			]
		];
		if($construction) {
			array_push($sections, [
				"title" => "Construction",
				"spaced" => false,
				"texts" => quick_format($construction)
			]);
		}
		if($destruction) {
			array_push($sections, [
				"title" => "Destruction",
				"spaced" => false,
				"texts" => quick_format($destruction)
			]);
		}
		$topInfo=["<b>Aura</b> {$aura}; <b>CL</b> {$cl}"];
		if($price!==false)
			array_push($topInfo, "<b>Price</b> {$price}");
		block($name, 'item', $topInfo, false, $sections);
	}
	function magicBuildingBlockAuto($name, $cl, $price, $description, $isArtifact, $extra, $school='Universal') {
		global $dashes;
		$priceStr='—';
		if(!in_array($price,$dashes)) {
			if(is_string($price)) {
				$priceStr=$price;
			}
			elseif(isset($price['string'])) {
				$priceStr=$price['string'];
			}
			else {
				$priceStr=narmenPriceToTableRef($price);
			}
		}
		magicBuildingBlock(
			$name,
			(is_string($cl)?$cl:($cl<6 ? "Faint" : ($cl<12 ? "Moderate" : ($cl<21 ? "Strong" : "Overwhelming"))).' '.$school),
			in_array($cl,$dashes)?'—':(is_string($cl)?$cl:$cl.ordinalSuffix($cl)),
			$priceStr,
			quick_array($description),
			$isArtifact ? false : (is_array($extra) ? $extra : explode("\n", $extra)),
			$isArtifact ? (is_array($extra) ? $extra : explode("\n", $extra)) : false
		);
	}
	function armorBlock($name, $cost, $weight, $armor_bonus, $max_dex, $armor_check, $asfc, $speed, $proficiency, $description) {
		block($name, 'item', [], false, [
			[
				"title" => "Statistics",
				"spaced" => false,
				"texts" => quick_format([
					"bb/Cost/bb {$cost}; bb/Weight/bb {$weight}",
					"bb/Armor Bonus/bb {$armor_bonus}; bb/Max Dex Bonus/bb {$max_dex}; bb/Armor Check Penalty/bb {$armor_check}",
					"bb/Arcane Spell Failure Chance/bb {$asfc}; bb/Speed/bb {$speed}",
					"bb/Proficiency/bb {$proficiency}"
				])
			],
			[
				"title" => "Description",
				"spaced" => false,
				"texts" => quick_array($description)
			]
		]);
	}
	function armorBlockAuto($name, $cost, $weight, $armor_bonus, $max_dex, $armor_check, $asfc, $slow, $proficiency, $description) {
		global $dashes;
		armorBlock(
			$name,
			in_array($cost,$dashes)?'—':(is_string($cost)?$cost:number_format($cost)." gp"),
			in_array($weight,$dashes)?'—':(is_string($weight)?$weight:number_format($weight).($weight==1 ? " lb." : " lbs.")),
			$armor_bonus,
			$max_dex,
			$armor_check,
			$asfc,
			$slow ? '20 ft./15 ft.' : '30 ft./20 ft.',
			$proficiency,
			$description
		);
	}
	function weaponBlock($name, $cost, $weight, $damage, $crit, $range, $type, $special, $category, $prof, $groups, $description) {
		block($name, 'item', [], false, [
			[
				"title" => "Statistics",
				"spaced" => false,
				"texts" => quick_format([
					"bb/Cost/bb {$cost}; bb/Weight/bb {$weight}",
					"bb/Damage/bb {$damage}; bb/Critical/bb {$crit}; bb/Range/bb {$range}; bb/Type/bb {$type}; bb/Special/bb {$special}",
					"bb/Category/bb {$category}; bb/Proficiency/bb {$prof}",
					"bb/Weapon Groups/bb {$groups}"
				])
			],
			[
				"title" => "Description",
				"spaced" => false,
				"texts" => quick_array($description)
			]
		]);
	}
	function weaponBlockAuto($name, $cost, $weight, $damage, $crit, $range, $type, $special, $category, $prof, $groups, $description) {
		global $dashes;
		$dmgStr='';
		if(is_array($damage)){
			$first=true;
			foreach ($damage as $size => $val) {
				if($first)
					$first=false;
				else
					$dmgStr.=', ';

				$dmgStr.=$val.' ('.$size.')';
			}
		}
		else
			$dmgStr=$damage;
		$rangeStr='';
		$ranges=['Personal'=>'personal','Touch'=>'touch','Close'=>'close (25 ft. + 5 ft./2 levels)','Medium'=>'medium (100 ft. + 10 ft./level)','Long'=>'long (400 ft. + 40 ft./level)','Unlimited'=>'unlimited'];
		if(isset($ranges[$range]))
			$rangeStr=$ranges[$range];
		elseif(is_numeric($range))
			$rangeStr=$range.' ft.';
		else
			$rangeStr=$range;
		$groupStr='';
		if(is_array($groups)){
			$first=true;
			foreach ($groups as $group) {
				if($first)
					$first=false;
				else
					$groupStr.=', ';

				$groupStr.=$group;
			}
		}
		else
			$groupStr=$groups;
		weaponBlock(
			$name,
			in_array($cost,$dashes)?'—':(is_string($cost)?$cost:number_format($cost)." gp"),
			in_array($weight,$dashes)?'—':(is_string($weight)?$weight:number_format($weight).($weight==1 ? " lb." : " lbs.")),
			$dmgStr,
			$crit,
			$rangeStr,
			$type,
			$special,
			$category,
			$prof,
			$groupStr,
			$description
		);
	}
	function raceBlock($name, $description, $raceTraits, $subraces=false, $traitsSections=false) {
		block($name, 'race-desc', quick_array($description), true);
		if($traitsSections)
			block("{$name} Racial Traits", 'race-traits', quick_array($raceTraits), true, $traitsSections);
		else
			block("{$name} Racial Traits", 'race-traits', quick_array($raceTraits), true);
		if($subraces) {
			block("Subraces", 'race-traits', [], false, $subraces);
		}
	}
	function raceBlockAuto($name, $racePoints, $loreDesc, $physDesc, $society, $relations, $alignRelig, $adventurers, $maleNames, $femaleNames, $stats, $statDesc, $racialTraits, $subraces=false, $traitsSections=false) {
		$description=$racePoints || $racePoints===0 ? ["/rr/Race Points: {$racePoints}"] : [];
		if($loreDesc && $loreDesc!='' && $loreDesc!='WIP') array_append($description, quick_array($loreDesc));
		if($physDesc && $physDesc!='' && $physDesc!='WIP') array_append($description, quick_array("Physical Description: ".$physDesc));
		if($society && $society!='' && $society!='WIP') array_append($description, quick_array("Society: ".$society));
		if($relations && $relations!='' && $relations!='WIP') array_append($description, quick_array("Relations: ".$relations));
		if($alignRelig && $alignRelig!='' && $alignRelig!='WIP') array_append($description, quick_array("Alignment and Religion: ".$alignRelig));
		if($adventurers && $adventurers!='' && $adventurers!='WIP') array_append($description, quick_array("Adventurers: ".$adventurers));
		if($maleNames && $maleNames!='' && $maleNames!='WIP') array_append($description, quick_array("Male Names: ".$maleNames));
		if($femaleNames && $femaleNames!='' && $femaleNames!='WIP') array_append($description, quick_array("Female Names: ".$femaleNames));
		$statStr='';
		if(($stat=(isset($stats["str"]) ? $stats["str"] : (isset($stats[0]) ? $stats[0] : 0)))!=0) {
			$statStr.=sprintf("%+d Strength, ",$stat);
		}
		if(($stat=(isset($stats["dex"]) ? $stats["dex"] : (isset($stats[1]) ? $stats[1] : 0)))!=0) {
			$statStr.=sprintf("%+d Dexterity, ",$stat);
		}
		if(($stat=(isset($stats["con"]) ? $stats["con"] : (isset($stats[2]) ? $stats[2] : 0)))!=0) {
			$statStr.=sprintf("%+d Constitution, ",$stat);
		}
		if(($stat=(isset($stats["int"]) ? $stats["int"] : (isset($stats[3]) ? $stats[3] : 0)))!=0) {
			$statStr.=sprintf("%+d Intelligence, ",$stat);
		}
		if(($stat=(isset($stats["wis"]) ? $stats["wis"] : (isset($stats[4]) ? $stats[4] : 0)))!=0) {
			$statStr.=sprintf("%+d Wisdom, ",$stat);
		}
		if(($stat=(isset($stats["cha"]) ? $stats["cha"] : (isset($stats[5]) ? $stats[5] : 0)))!=0) {
			$statStr.=sprintf("%+d Charisma, ",$stat);
		}
		if(($stat=(isset($stats["any"]) ? $stats["any"] : (isset($stats[5]) ? $stats[5] : 0)))!=0) {
			$statStr.=sprintf("%+d to One Ability Score, ",$stat);
		}
		if(strlen($statStr)>0) {
			$statStr=substr($statStr, 0, -2);
		}
		if($statDesc) {
			if(strlen($statStr)>0) {
				$statStr.=": ";
			}
			$statStr.=$statDesc;
		}
		$raceTraits=strlen($statStr)>0 ? [$statStr] : [];
		array_append($raceTraits, quick_array($racialTraits));
		$subraceSections=false;
		if($subraces) {
			$subraceSections=[];
			foreach($subraces as $subrace) {
				array_push($subraceSections, [
					"title" => $subrace[0],
					"spaced" => false,
					"texts" => quick_array($subrace[1])
				]);
			}
		}
		$traitSectionsNew=false;
		if($traitsSections) {
			$traitSectionsNew=[];
			foreach($traitsSections as $traitSection) {
				array_push($traitSectionsNew, [
					"title" => $traitSection[0],
					"spaced" => false,
					"texts" => quick_array($traitSection[1])
				]);
			}
		}
		raceBlock($name, $description, $raceTraits, $subraceSections, $traitSectionsNew);
	}
	function raceBlockAutoSections($name, $racePoints, $loreDesc, $physDesc, $society, $relations, $alignRelig, $adventurers, $maleNames, $femaleNames, $stats, $statDesc, $racialTraits, $traitsSections, $subraces=false) {
		raceBlockAuto($name, $racePoints, $loreDesc, $physDesc, $society, $relations, $alignRelig, $adventurers, $maleNames, $femaleNames, $stats, $statDesc, $racialTraits, $subraces, $traitsSections);
	}
	function feat($name, $desc, $benefit, $prereq=false, $special=false, $layered=false) {
		$text=$desc;
		if($prereq) {
			$text.="/nn/Prerequisites: {$prereq}";
		}
		$text.="/nn/Benefit: {$benefit}";
		if($special) {
			$text.="/nn/Special: {$special}";
		}
		block(
			$name,
			"feat",
			quick_array($text),
			true,
			[],
			$layered
		);
	}
	function racialFeats($race, $feats) {
		echo '<div class="block racial-feats" id="block-Racial-Feats">';
		echo '<div class="block-title">Racial Feats</div><div class="interior">';
		foreach ($feats as $feat) {
			feat($feat['name'],$feat['desc'],$feat['benefit'],$race.', '.$feat['prereq'],$feat['special'], true);
		}
		echo '</div></div>';
	}
	function stanceAxisValue($stance1, $stance2, $stance3) {
		$opp1 = $stance1 < 0;
		$opp2 = $stance2 < 0;
		$opp3 = $stance3 < 0;
		$for1 = $stance1 > 0;
		$for2 = $stance2 > 0;
		$for3 = $stance3 > 0;
		$axis = ($opp1 && $opp2) || ($opp2 && $opp3) || ($opp1 && $opp3) ? -1 : (($for1 && $for2) || ($for2 && $for3) || ($for1 && $for3) ? 1 : 0);
		if(($axis > -1) && ($stance1 == -2 || $stance2 == -2 || $stance3 == -2)) {
			$axis--;
		}
		if(($axis < 1) && ($stance1 == 2 || $stance2 == 2 || $stance3 == 2)) {
			$axis--;
		}
		return $axis;
	}
	function monsterBlockAuto($name='',$name2=false,$lore='',$cr=1,$mr=false,$customXp=false,$race='',$classes=[],$alignment="N",$size="Medium",$type='',$initMod=0,$mythInit=false,$senses='',$percMod=0,$aura='',$ac=[],$hdp=[1,8],$saves=[['good'=>false,'mod'=>0],['good'=>false,'mod'=>0],['good'=>false,'mod'=>0]],$defAb='',$weak='',$speed=30,$attacks=[],$reach=5,$specAtt='',$spelllike=false,$spellcast=[],$spellnote='',$stats=[],$bab=1,$cmbSpec=0,$cmdSpec=0,$feats='',$skills='',$lang='',$sq='',$enviro='',$organiz='',$treas='',$specAb=[],$desc='',$gear=[]) {
		/*echo '<pre>name ';
		var_dump($name);
		echo '<br>name2 ';
		var_dump($name2);
		echo '<br>lore ';
		var_dump($lore);
		echo '<br>cr ';
		var_dump($cr);
		echo '<br>mr ';
		var_dump($mr);
		echo '<br>customXp ';
		var_dump($customXp);
		echo '<br>race ';
		var_dump($race);
		echo '<br>classes ';
		var_dump($classes);
		echo '<br>alignment ';
		var_dump($alignment);
		echo '<br>size ';
		var_dump($size);
		echo '<br>type ';
		var_dump($type);
		echo '<br>initMod ';
		var_dump($initMod);
		echo '<br>mythInit ';
		var_dump($mythInit);
		echo '<br>senses ';
		var_dump($senses);
		echo '<br>percMod ';
		var_dump($percMod);
		echo '<br>aura ';
		var_dump($aura);
		echo '<br>ac ';
		var_dump($ac);
		echo '<br>hdp ';
		var_dump($hdp);
		echo '<br>saves ';
		var_dump($saves);
		echo '<br>defAb ';
		var_dump($defAb);
		echo '<br>weak ';
		var_dump($weak);
		echo '<br>speed ';
		var_dump($speed);
		echo '<br>attacks ';
		var_dump($attacks);
		echo '<br>reach ';
		var_dump($reach);
		echo '<br>specAtt ';
		var_dump($specAtt);
		echo '<br>spelllike ';
		var_dump($spelllike);
		echo '<br>spellcast ';
		var_dump($spellcast);
		echo '<br>spellnote ';
		var_dump($spellnote);
		echo '<br>stats ';
		var_dump($stats);
		echo '<br>bab ';
		var_dump($bab);
		echo '<br>cmbSpec ';
		var_dump($cmbSpec);
		echo '<br>cmdSpec ';
		var_dump($cmdSpec);
		echo '<br>feats ';
		var_dump($feats);
		echo '<br>skills ';
		var_dump($skills);
		echo '<br>lang ';
		var_dump($lang);
		echo '<br>sq ';
		var_dump($sq);
		echo '<br>enviro ';
		var_dump($enviro);
		echo '<br>organiz ';
		var_dump($organiz);
		echo '<br>treas ';
		var_dump($treas);
		echo '<br>specAb ';
		var_dump($specAb);
		echo '<br>desc ';
		var_dump($desc);
		echo '</pre>';*/
		$sizes=['Fine'=>8,'Diminutive'=>4,'Tiny'=>2,'Small'=>1,'Medium'=>0,'Large'=>-1,'Huge'=>-2,'Gargantuan'=>-4,'Colossal'=>-8];
		$spaces=['Fine'=>'1/2','Diminutive'=>'1','Tiny'=>'2-1/2','Small'=>'5','Medium'=>'5','Large'=>'10','Huge'=>'15','Gargantuan'=>'20','Colossal'=>'30'];
		$sizeMod=$sizes[$size];
		$subOneXp=['1/2'=>200,'1/3'=>135,'1/4'=>100,'1/6'=>65,'1/8'=>50];
		$xp=($customXp?$customXp:(isset($subOneXp[$cr])?$subOneXp[$cr]:($cr%2==0?400*intPow(2,$cr/2):600*intPow(2,($cr-1)/2))));
		$align=false;
		$stance=false;
		$stanceStrs=[-2=>'Opp (P)',-1=>'Opp',0=>'Und',1=>'For',2=>'For (P)'];
		if(is_string($alignment)) {
			$align = $alignment;
		}
		else {
			if(isset($alignment['alignment'])) {
				$align = $alignment['alignment'];
			}
			$s_holy = stanceAxisValue($alignment['altruism'], $alignment['humility'], $alignment['purity']);
			$s_order = stanceAxisValue($alignment['honesty'], $alignment['loyalty'], $alignment['law']);
			$s_independent = stanceAxisValue($alignment['individualism'], $alignment['knowledge'], $alignment['work']);
			$stance='bb/Stance/bb <input type="button" class="show-stance" value="Show"><ul class="stance">';
			$stance.='<li class="axis"><b>Holiness</b> '.$stanceStrs[$s_holy].'</li>';
			$stance.='<li>Altruism '.$stanceStrs[$alignment['altruism']].'</li>';
			$stance.='<li>Humility '.$stanceStrs[$alignment['humility']].'</li>';
			$stance.='<li>Purity '.$stanceStrs[$alignment['purity']].'</li>';
			$stance.='<li class="axis"><b>Order</b> '.$stanceStrs[$s_order].'</li>';
			$stance.='<li>Honesty '.$stanceStrs[$alignment['honesty']].'</li>';
			$stance.='<li>Loyalty '.$stanceStrs[$alignment['loyalty']].'</li>';
			$stance.='<li>Law '.$stanceStrs[$alignment['law']].'</li>';
			$stance.='<li class="axis"><b>Independence</b> '.$stanceStrs[$s_independent].'</li>';
			$stance.='<li>Individualism '.$stanceStrs[$alignment['individualism']].'</li>';
			$stance.='<li>Knowledge '.$stanceStrs[$alignment['knowledge']].'</li>';
			$stance.='<li>Work '.$stanceStrs[$alignment['work']].'</li>';
			$stance.='</ul>';
		}
		$stats['non']=10;
		$statMods=['non' => 0];
		if(!isset($stats['str']))
			$stats['str']=10;
		if(!isset($stats['dex']))
			$stats['dex']=10;
		if(!isset($stats['con']))
			$stats['con']=10;
		if(!isset($stats['int']))
			$stats['int']=10;
		if(!isset($stats['wis']))
			$stats['wis']=10;
		if(!isset($stats['cha']))
			$stats['cha']=10;
		foreach ($stats as $stat => $val) {
			if($stat=='maxDex')
				continue;
			if(is_string($val)) {
				$statMods[$stat]=floor($stats[$val]/2)-5;
				$stats[$stat]=0;
			}
			else
				$statMods[$stat]=floor($val/2)-5;
		}
		if(isset($stats['maxDex']) && $stats['maxDex']<$statMods['dex'])
			$statMods['dex']=$stats['maxDex'];
		$perc=$statMods['wis']+$percMod;
		$acVals=[
			'ac' => 10,
			'touch' => 10,
			'flat' => 10
		];
		$acVals['ac']+=$statMods['dex'];
		$acVals['touch']+=$statMods['dex'];
		$acVals['flat']=min($acVals['ac'],$acVals['flat']);
		$no_touch=['armor','shield','natural'];
		$no_flat=['dodge'];
		$acModStr='(';
		foreach ($ac as $modName => $val) {
			$acModStr.=sprintf('%+d %s, ',$val,$modName);
			$acVals['ac']+=$val;
			if(!in_array($modName, $no_touch))
				$acVals['touch']+=$val;
			if(!in_array($modName, $no_flat))
				$acVals['flat']+=$val;
		}
		$acModStr.=sprintf('%+d size, ',$sizeMod);
		$acVals['ac']+=$sizeMod;
		$acVals['touch']+=$sizeMod;
		$acVals['flat']+=$sizeMod;
		$acModStr.=sprintf('%+d Dex)',$statMods['dex']);
		$hdpTotal=[0,0,0];
		$babNum=0;
		$hp=0;
		$hpStr='';
		$fort=0;
		$will=0;
		$refl=0;
		if(is_array($hdp[0])) {
			$hdList='';
			$ind=0;
			foreach ($hdp as $key=>$hdPool) {
				if($key==='note')
					continue;
				if($key==='stat')
					continue;
				$hdpTotal[0]+=$hdPool[0];
				$hdpTotal[1]+=$hdPool[1]*$hdPool[0];
				$hdpTotal[2]+=$hdPool[2];
				$hp+=floor($hdPool[0]*($hdPool[1]+1)/2)+($hdPool[2]+$statMods[isset($hdp['stat'])?$hdp['stat']:'con']*$hdPool[0]);
				if($ind>0)
					$hdList.=', ';
				$hdList.=sprintf('%dd%d',$hdPool[0],$hdPool[1]);
				$babNum+=floor($hdPool[0]*$bab[$ind]);
				$fort+=($saves[0]['good'][$ind] ? floor($hdPool[0]/2)+2 : floor($hdPool[0]/3));
				$refl+=($saves[1]['good'][$ind] ? floor($hdPool[0]/2)+2 : floor($hdPool[0]/3));
				$will+=($saves[2]['good'][$ind] ? floor($hdPool[0]/2)+2 : floor($hdPool[0]/3));
				$ind++;
			}
			$hdpTotal[1]/=$hdpTotal[0];
			$hpStr=sprintf('bb/hp/bb %d (%s %s)',
				$hp,
				$hdList,
				sprintf('%+d',$hdpTotal[2]+$statMods[isset($hdp['stat'])?$hdp['stat']:'con']*$hdpTotal[0])
			).(isset($hdp['note'])?$hdp['note']:'');
		}
		else {
			if(!isset($hdp[2]))
				$hdp[2]=0;
			$hdpTotal[0]=$hdp[0];
			$hdpTotal[1]=$hdp[1];
			$hdpTotal[2]=$hdp[2];
			$babNum=floor($hdpTotal[0]*$bab);
			$hp=floor($hdp[0]*($hdp[1]+1)/2)+($hdp[2]+$statMods[isset($hdp['stat'])?$hdp['stat']:'con']*$hdp[0]);
			$hpStr=sprintf("bb/hp/bb %d (%dd%d%s)",
				$hp,
				$hdp[0],
				$hdp[1],
				sprintf('%+d',$hdp[2]+$statMods[isset($hdp['stat'])?$hdp['stat']:'con']*$hdp[0])
			).(isset($hdp[3])?$hdp[3]:'');
			$fort+=($saves[0]['good'] ? floor($hdpTotal[0]/2)+2 : floor($hdpTotal[0]/3));
			$refl+=($saves[1]['good'] ? floor($hdpTotal[0]/2)+2 : floor($hdpTotal[0]/3));
			$will+=($saves[2]['good'] ? floor($hdpTotal[0]/2)+2 : floor($hdpTotal[0]/3));
		}
		$fortFinal=$statMods['con'] + $saves[0]['mod'] + $fort;
		$fortNote='';
		if(isset($saves[0]['cases'])) {
			$fortNote=' (';
			$first=true;
			foreach ($saves[0]['cases'] as $case => $val) {
				if($first)
					$first=false;
				else
					$fortNote.=', ';
				$fortNote.=sprintf('%+d vs. %s',$fortFinal+$val,$case);
			}
			if($first)
				$fortNote='';
			else
				$fortNote.=')';
		}
		$reflFinal=$statMods['dex'] + $saves[1]['mod'] + $refl;
		$reflNote='';
		if(isset($saves[1]['cases'])) {
			$reflNote=' (';
			$first=true;
			foreach ($saves[1]['cases'] as $case => $val) {
				if($first)
					$first=false;
				else
					$reflNote.=', ';
				$reflNote.=sprintf('%+d vs. %s',$reflFinal+$val,$case);
			}
			if($first)
				$reflNote='';
			else
				$reflNote.=')';
		}
		$willFinal=$statMods['wis'] + $saves[2]['mod'] + $will;
		$willNote='';
		if(isset($saves[2]['cases'])) {
			$willNote=' (';
			$first=true;
			foreach ($saves[2]['cases'] as $case => $val) {
				if($first)
					$first=false;
				else
					$willNote.=', ';
				$willNote.=sprintf('%+d vs. %s',$willFinal+$val,$case);
			}
			if($first)
				$willNote='';
			else
				$willNote.=')';
		}
		$cmbCaseStr='';
		$cmbStr='';
		$cmbVal=0;
		if(is_string($cmbSpec)) {
			$cmbStr=$cmbSpec;
			$cmbCaseStr='';
		}
		else {
			$cmbVal=$babNum+$statMods['str']-$sizeMod;
			if(is_numeric($cmbSpec)) {
				$cmbVal+=$cmbSpec;
			}
			else {
				if(isset($cmbSpec['base']))
					$cmbVal+=$cmbSpec['base'];
				$cmbCaseStr=' (';
				$first=true;
				foreach ($cmbSpec as $case => $mod) {
					if($case=='base')
						continue;
					if($case=='notes')
						continue;
					if($first) {
						$first=false;
					}
					else {
						$cmbCaseStr.=', ';
					}
					$cmbCaseStr.=sprintf('%+d %s',$cmbVal+$mod,$case);
				}
				if(isset($cmbSpec['notes']))
					$cmbCaseStr.=($cmbCaseStr!=' ('?', ':'').$cmbSpec['notes'];
				$cmbCaseStr.=')';
			}
			$cmbStr=addSign($cmbVal);
		}
		$cmdCaseStr='';
		$cmdStr='';
		$cmdVal=0;
		if(is_string($cmdSpec)) {
			$cmdStr=$cmdSpec;
			$cmdCaseStr='';
		}
		else {
			$cmdVal=10+$babNum+$statMods['str']+$statMods['dex']-$sizeMod;
			if(is_numeric($cmdSpec)) {
				$cmdVal+=$cmdSpec;
			}
			else {
				if(isset($cmdSpec['base']))
					$cmdVal+=$cmdSpec['base'];
				$cmdCaseStr=' (';
				$first=true;
				foreach ($cmdSpec as $case => $mod) {
					if($case=='base')
						continue;
					if($case=='notes')
						continue;
					if($first) {
						$first=false;
					}
					else {
						$cmdCaseStr.=', ';
					}
					$cmdCaseStr.=sprintf('%d vs. %s',$cmdVal+$mod,$case);
				}
				if(isset($cmdSpec['notes']))
					$cmdCaseStr.=($cmdCaseStr!=' ('?', ':'').$cmdSpec['notes'];
				$cmdCaseStr.=')';
			}
			$cmdStr=$cmdVal;
		}
		$sections=[
			[
				'title' => 'Defense',
				'spaced' => false,
				'texts' => quick_array([
					"bb/AC/bb {$acVals['ac']}, bb/touch/bb {$acVals['touch']}, bb/flat-footed/bb {$acVals['flat']} {$acModStr}",
					$hpStr,
					sprintf('bb/Fort/bb %+d%s, bb/Ref/bb %+d%s, bb/Will/bb %+d%s%s',
						$fortFinal,
						$fortNote,
						$reflFinal,
						$reflNote,
						$willFinal,
						$willNote,
						isset($saves[3])?'; '.$saves[3]:''
					)
				])
			],
			[
				'title' => 'Offense',
				'spaced' => false,
				'texts' => quick_array([
					'bb/Speed/bb '.(is_numeric($speed)?$speed.' ft.':$speed),
					'bb/Space/bb '.$spaces[$size].' ft., bb/Reach/bb '.$reach.(is_string($reach)?'':' ft.')
				])
			],
			[
				'title' => 'Statistics',
				'spaced' => false,
				'texts' => quick_array([
					sprintf('bb/Str/bb %s, bb/Dex/bb %s, bb/Con/bb %s, bb/Int/bb %s, bb/Wis/bb %s, bb/Cha/bb %s',
						$stats['str']==0?'—':$stats['str'],
						$stats['dex']==0?'—':$stats['dex'],
						$stats['con']==0?'—':$stats['con'],
						$stats['int']==0?'—':$stats['int'],
						$stats['wis']==0?'—':$stats['wis'],
						$stats['cha']==0?'—':$stats['cha']
					),
					sprintf('bb/Base Atk/bb %+d; bb/CMB/bb %s%s; bb/CMD/bb %s%s',
						$babNum,
						$cmbStr,
						$cmbCaseStr,
						$cmdStr,
						$cmdCaseStr
					)
				])
			],
			[
				'title' => 'Ecology',
				'spaced' => false,
				'texts' => quick_array([
					'bb/Environment/bb '.$enviro,
					'bb/Organization/bb '.$organiz,
					'bb/Treasure/bb '.$treas
				])
			]
		];
		if($defAb!='')
			array_push($sections[0]['texts'], quick_format('bb/Defensive Abilities/bb '.$defAb));
		if($weak!='')
			array_push($sections[0]['texts'], quick_format('bb/Weaknesses/bb '.$weak));
		$spliceInd=1;
		foreach ($attacks as $attackSet) {
			$attackSetStr='bb/'.$attackSet['type'].'/bb ';
			$first=true;
			foreach ($attackSet['list'] as $attack) {
				if($first) {
					$first=false;
				}
				else {
					$attackSetStr.=', ';
				}
				if(isset($attack['auto']) && $attack['auto']) {
					$attackSetStr.=sprintf('%s (%s)',
						$attack['name'],
						$attack['damage']
					);
				}
				else {
					$attackRoll=sprintf('%+d',$attack['mod']+$statMods[$attack['stat']]+$babNum+$sizeMod);
					if(isset($attack['iterative'])) {
						for($i=$babNum-5; $i>0; $i-=5) { 
							$attackRoll.=sprintf('/%+d',$attack['mod']+$statMods[$attack['stat']]+$i+$sizeMod+$attack['iterative']);
						}
					}
					$attackSetStr.=sprintf('%s %s (%s)',
						$attack['name'],
						$attackRoll,
						$attack['damage']
					);
				}
			}
			array_splice($sections[1]['texts'],$spliceInd,0,[quick_format($attackSetStr)]);
			$spliceInd++;
		}
		if($specAtt!='')
			array_push($sections[1]['texts'], quick_format('bb/Special Attacks/bb '.$specAtt));
		if($spelllike) {
			$lines=[sprintf('Spell-Like Abilities (CL %d%s; concentration %+d)',
				$spelllike['level'],
				ordinalSuffix($spelllike['level']),
				$spelllike['level']+$statMods['cha']+$spelllike['conc']
			)];
			foreach ($spelllike['spells'] as $spells) {
				$spellLine=sprintf('/mm/%s—',$spells['perday'].(is_string($spells['perday'])?'':'/day'));
				$first=true;
				foreach ($spells['list'] as $spell) {
					if($first) {
						$first=false;
					}
					else {
						$spellLine.=', ';
					}
					if(is_string($spell))
						$spellLine.='ii/'.$spell.'/ii';
					else {
						$spellLine.='ii/'.$spell['name'].'/ii';
						if(isset($spell['domain']) && $spell['domain'])
							$spellLine.='ss/D/ss';
						if(isset($spell['dc']) && $spell['dc'])
							$spellLine.=sprintf(' (DC %d)',10+$spell['level']+$statMods['cha']+(isset($spell['dcMod'])?$spell['dcMod']:0));
						if(isset($spell['note']))
							$spellLine.=sprintf(' (%s)',$spell['note']);
					}
				}
				array_push($lines, $spellLine);
			}
			$sections[1]['texts']=array_merge($sections[1]['texts'],quick_array($lines));
		}
		if(count($spellcast)>0) {
			foreach ($spellcast as $class) {
				$lines=[sprintf('%s %s %s (CL %d%s; concentration %+d)',
					$class['class'],
					isset($class['spellForm'])?$class['spellForm']:'Spells',
					$class['prep'] ? 'Prepared' : 'Known',
					$class['level'],
					ordinalSuffix($class['level']),
					$class['level']+$statMods[$class['stat']]+$class['conc']
				)];
				for($sl=12; $sl>=0; $sl--) {
					if(!isset($class['spells'][$sl]))
						continue;
					$spells=$class['spells'][$sl];
					$spellLine=sprintf('/mm/%d%s%s—',
						$sl,
						ordinalSuffix($sl),
						isset($spells['perday'])?sprintf(' (%s)',$spells['perday'].(is_string($spells['perday'])?'':'/day')):''
					);
					$first=true;
					foreach ($spells['list'] as $spell) {
						if($first) {
							$first=false;
						}
						else {
							$spellLine.=', ';
						}
						if(is_string($spell))
							$spellLine.='ii/'.$spell.'/ii';
						else {
							$spellLine.='ii/'.$spell['name'].'/ii';
							if(isset($spell['domain']) && $spell['domain'])
								$spellLine.='ss/D/ss';
							if(isset($spell['count']) && $spell['count']>1)
								$spellLine.=' x'.$spell['count'];
							if(isset($spell['dc']) && $spell['dc'])
								$spellLine.=sprintf(' (DC %d)',10+$sl+$statMods[$class['stat']]+(isset($spell['dcMod'])?$spell['dcMod']:0));
							if(isset($spell['note']))
								$spellLine.=sprintf(' (%s)',$spell['note']);
						}
					}
					array_push($lines, $spellLine);
				}
				$sections[1]['texts']=array_merge($sections[1]['texts'],quick_array($lines));
			}
		}
		if($spellnote!='')
			array_push($sections[1]['texts'], quick_format($spellnote));
		if(is_string($feats)) {
			if($feats!='')
				array_push($sections[2]['texts'], quick_format('Feats '.$feats));
		}
		else {
			if(count($feats)>0) {
				$featStr='bb/Feats/bb ';
				$first=true;
				foreach ($feats as $key => $feat) {
					if($key==='note')
						continue;
					if($first) {
						$first=false;
					}
					else {
						$featStr.=', ';
					}
					$featStr.=$feat;
				}
				array_push($sections[2]['texts'], quick_format($featStr));
				if(isset($feats['note']))
					array_push($sections[2]['texts'], quick_array($feats['note'])[0]);
			}
		}
		if(is_string($skills)) {
			if($skills!='')
				array_push($sections[2]['texts'], quick_format('Skills '.$skills));
		}
		else {
			if(count($skills)>0) {
				$skillStr='bb/Skills/bb ';
				$skillExtras='';
				$first=true;
				foreach ($skills as $key=>$skill) {
					if(is_string($key)) {
						$skillExtras.='; ';
						if($key==='racial') {
							$skillExtras.='bb/Racial Bonuses/bb ';
							$first=true;
							foreach ($skill as $racialSkill=>$bonus) {
								if($first)
									$first=false;
								else
									$skillExtras.=', ';
								$skillExtras.=sprintf('%s %+d',$racialSkill,$bonus);
							}
							continue;
						}
						$skillExtras.='bb/'.$key.'/bb '.$skill;
						continue;
					}
					if($first) {
						$first=false;
					}
					else {
						$skillStr.=', ';
					}
					$bonus=0;
					$noteStr='';
					if(is_numeric($skill['bonus'])) {
						$bonus=$statMods[$skill['stat']]+$skill['bonus'];
					}
					else {
						if(isset($skill['bonus']['base']))
							$bonus=$statMods[$skill['stat']]+$skill['bonus']['base'];
						foreach ($skill['bonus'] as $case => $val) {
							if($case==='base')
								continue;
							if($case==='note')
								continue;
							if($noteStr!='')
								$noteStr.=', ';
							$noteStr.=sprintf('%+d %s',$bonus+$val,$case);
						}
						if(isset($skill['bonus']['note'])) {
							if($noteStr!='')
								$noteStr.=', ';
							$noteStr.=$skill['bonus']['note'];
						}
					}
					if($skill['skill']=='Perception')
						$perc=$bonus;
					if($noteStr==='')
						$skillStr.=sprintf('%s %+d',$skill['skill'],$bonus);
					else
						$skillStr.=sprintf('%s %+d (%s)',$skill['skill'],$bonus,$noteStr);
					if(isset($skill['note']))
						$skillStr.=$skill['note'];
				}
				array_push($sections[2]['texts'], quick_format($skillStr.$skillExtras));
			}
		}
		if(is_string($lang)) {
			if($lang!='')
				array_push($sections[2]['texts'], quick_format('Languages '.$lang));
		}
		else {
			if(count($lang)>0) {
				$langStr='bb/Languages/bb ';
				$first=true;
				foreach ($lang as $languge) {
					if($first) {
						$first=false;
					}
					else {
						$langStr.=', ';
					}
					$langStr.=$languge;
				}
				array_push($sections[2]['texts'], quick_format($langStr));
			}
		}
		if(is_string($sq)) {
			if($sq!='')
				array_push($sections[2]['texts'], quick_format('bb/SQ/bb '.$sq));
		}
		else {
			if(count($sq)>0) {
				$sqStr='bb/SQ/bb ';
				$first=true;
				foreach ($sq as $quality) {
					if($first) {
						$first=false;
					}
					else {
						$sqStr.=', ';
					}
					$sqStr.=$quality;
				}
				array_push($sections[2]['texts'], quick_format($sqStr));
			}
		}
		if(is_string($gear)) {
			if($gear!='')
				array_push($sections[2]['texts'], quick_format($gear));
		}
		else {
			if(count($gear)>0) {
				$gearStr='';
				$firstList=true;
				foreach ($gear as $key=>$list) {
					if($firstList) {
						$firstList=false;
					}
					else {
						$gearStr.='; ';
					}
					$gearStr.='bb/'.$key.'/bb ';
					$firstItem=true;
					foreach ($list as $item) {
						if($firstItem) {
							$firstItem=false;
						}
						else {
							$gearStr.=', ';
						}
						$gearStr.=$item;
					}
				}
				array_push($sections[2]['texts'], quick_format($gearStr));
			}
		}
		if(count($specAb)>0) {
			$section=[
				'title' => 'Special Abilities',
				'spaced' => true,
				'texts' => []
			];
			foreach ($specAb as $specAbility) {
				$specAbilityLines=quick_array($specAbility['desc']);
				if(isset($specAbility['type']) && $specAbility['type']!==false)
					array_push($section['texts'], quick_format("bb/{$specAbility['name']}/bb ({$specAbility['type']}) {$specAbilityLines[0]}"));
				else
					array_push($section['texts'], quick_format("bb/{$specAbility['name']}/bb {$specAbilityLines[0]}"));
				$first=true;
				foreach ($specAbilityLines as $specAbilityLine) {
					if($first)
						$first=false;
					else
						array_push($section['texts'], $specAbilityLine);
				}
			}
			array_push($sections, $section);
		}
		if($desc!='')
			array_push($sections, [
				'title' => 'Description',
				'spaced' => false,
				'texts' => quick_array($desc)
			]);
		$vitals=[
			'bb/XP/bb '.number_format($xp),
			($align?$align.' ':'')."{$size} {$type}",
			sprintf('bb/Init/bb %+d',$statMods['dex']+$initMod).($mythInit?'&#x200B;ss/M/ss':'').($senses!=''?'; bb/Senses/bb '.$senses:'').sprintf('; bb/Perception/bb %+d',$perc)
		];
		if($stance) {
			array_splice($vitals, 2, 0, $stance);
		}
		if(count($classes)>0 || $race!='') {
			$raceClassLine=$race==''?'':$race.' ';
			$first=true;
			foreach ($classes as $class => $level) {
				if($first)
					$first=false;
				else
					$raceClassLine.=', ';
				$raceClassLine.=$class.' '.$level;
			}
			array_splice($vitals,1,0,[$raceClassLine]);
		}
		if($aura!='')
			array_push($vitals,'bb/Aura/bb '.$aura);
		block($name,'monster-header',[quick_format('ii/'.$lore.'/ii')]);
		block(
			quick_format(($name2?$name2:$name).' bb/CR '.$cr.($mr?'/MR '.$mr:'').'/bb'),
			'monster',
			quick_array($vitals),
			false,
			$sections
		);
	}
	function spellBlockAutoArray($name, $school, $descriptors=[], $levels=['wizard'=>0], $components=['V'=>0,'S'=>0,'M'=>0,'F'=>0,'DF'=>0], $time='1 standard action', $range='Close', $target=false, $effect=false, $area=false, $duration='instantaneous', $save='none', $sr=false, $desc='') {
		$descriptorTxt='';
		if(count($descriptors)>0) {
			$descriptorTxt=' [';
			$first=true;
			foreach ($descriptors as $descriptor) {
				if($first)
					$first=false;
				else
					$descriptorTxt.=', ';
				$descriptorTxt.=$descriptor;
			}
			$descriptorTxt.=']';
		}
		$levelTxt='';
		$first=true;
		foreach ($levels as $class=>$level) {
			if($first)
				$first=false;
			else
				$levelTxt.=', ';
			if($class == 'level')
				$levelTxt.=$level;
			else
				$levelTxt.=$class.' '.$level;
		}
		if(!isset($components['V']))
			$components['V']=0;
		if(!isset($components['S']))
			$components['S']=0;
		if(!isset($components['M']))
			$components['M']=0;
		if(!isset($components['F']))
			$components['F']=0;
		if(!isset($components['DF']))
			$components['DF']=0;
		$compTxt='';
		$first=true;
		$componentList=['V','S','M','F','DF'];
		foreach ($componentList as $comp) {
			if($components[$comp]) {
				if($first)
					$first=false;
				else
					$compTxt.=', ';
				$compTxt.=$comp;
				if($components[$comp]===2)
					$compTxt.='/DF';
				if(isset($components[$comp.'Note']))
					$compTxt.=" ({$components[$comp.'Note']})";
			}
		}
		$effects=[];
		$ranges=['Personal'=>'personal','Touch'=>'touch','Close'=>'close (25 ft. + 5 ft./2 levels)','Medium'=>'medium (100 ft. + 10 ft./level)','Long'=>'long (400 ft. + 40 ft./level)','Unlimited'=>'unlimited'];
		if(isset($ranges[$range]))
			array_push($effects,'bb/Range/bb '.$ranges[$range]);
		elseif(is_numeric($range))
			array_push($effects,'bb/Range/bb '.$range.' ft.');
		else
			array_push($effects,'bb/Range/bb '.$range);
		if($target)
			array_push($effects,'bb/Target(s)/bb '.$target);
		if($effect)
			array_push($effects,'bb/Effect/bb '.$effect);
		if($area)
			array_push($effects,'bb/Area/bb '.$area);
		array_push($effects,'bb/Duration/bb '.$duration);
		array_push($effects,'bb/Saving Throw/bb '.$save.'; bb/Spell Resistance/bb '.($sr===true?'yes':($sr===false?'no':$sr)));
		return [
			'block' => true,
			'name' => $name,
			'type' => 'spell',
			'texts' => quick_array([
				sprintf(
					'bb/School/bb %s%s; bb/Level/bb %s',
					$school,
					$descriptorTxt,
					$levelTxt
				)
			]),
			'spaced' => 0,
			'sections' => [
				[
					'title' => 'Casting',
					'spaced' => false,
					'texts' => quick_array([
						'bb/Casting Time/bb '.$time,
						'bb/Components/bb '.$compTxt
					])
				],
				[
					'title' => 'Effect',
					'spaced' => false,
					'texts' => quick_array($effects)
				],
				[
					'title' => 'Description',
					'spaced' => true,
					'texts' => quick_array($desc)
				]
			]
		];
	}
	function spellBlockAuto($name, $school, $descriptors=[], $levels=['wizard'=>0], $components=['V'=>0,'S'=>0,'M'=>0,'F'=>0,'DF'=>0], $time='1 standard action', $range='Close', $target=false, $effect=false, $area=false, $duration='instantaneous', $save='none', $sr=false, $desc='') {
		$spellArray = spellBlockAutoArray($name, $school, $descriptors, $levels, $components, $time, $range, $target, $effect, $area, $duration, $save, $sr, $desc);
		block(
			$spellArray['name'],
			$spellArray['type'],
			$spellArray['texts'],
			$spellArray['spaced'],
			$spellArray['sections']
		);
	}
	function advAlchemyBlock($name, $form, $descriptors, $level, $additional, $duration, $save, $desc, $reagents=false, $catalysts=false) {
		$descriptorTxt='';
		if(count($descriptors)>0) {
			$descriptorTxt=' [';
			$first=true;
			foreach ($descriptors as $descriptor) {
				if($first)
					$first=false;
				else
					$descriptorTxt.=', ';
				$descriptorTxt.=$descriptor;
			}
			$descriptorTxt.=']';
		}
		$properties=[];
		if($reagents!==false) {
			if(is_string($reagents))
				array_push($properties,'bb/Exceptional Reagent/bb '.$reagents);
			else {
				$reagentstr='';
				$first=true;
				foreach ($reagents as $reagent) {
					if($first)
						$first=false;
					else
						$reagentstr.=', ';
					$reagentstr.=$reagent;
				}
				array_push($properties,'bb/Exceptional Reagents/bb '.$reagentstr);
			}
		}
		if($catalysts!==false) {
			if(is_string($catalysts))
				array_push($properties,'bb/Exceptional Catalyst/bb '.$catalysts);
			else {
				$catalyststr='';
				$first=true;
				foreach ($catalysts as $catalyst) {
					if($first)
						$first=false;
					else
						$catalyststr.=', ';
					$catalyststr.=$catalyst;
				}
				array_push($properties,'bb/Exceptional Catalysts/bb '.$catalyststr);
			}
		}
		$ranges=['Personal'=>'personal','Touch'=>'touch','Close'=>'close (25 ft. + 5 ft./2 levels)','Medium'=>'medium (100 ft. + 10 ft./level)','Long'=>'long (400 ft. + 40 ft./level)','Unlimited'=>'unlimited'];
		foreach ($additional as $property => $value) {
			if(is_array($value)) {
				$lineStr='';
				$isFirst=true;
				foreach ($value as $subProperty => $subValue) {
					if($isFirst)
						$isFirst=false;
					else
						$lineStr.='; ';
					$valStr=$subValue;
					if(str_contains(strtolower($subProperty),'range')) {
						if(isset($ranges[$valStr]))
							$valStr=$ranges[$valStr];
						elseif(is_numeric($valStr))
							$valStr=$valStr.' ft.';
						else
							$valStr=$valStr;
					}
					$lineStr.='bb/'.$subProperty.'/bb '.$valStr;
				}
				array_push($properties,$lineStr);
			}
			else {
				$valStr=$value;
				if(str_contains(strtolower($property),'range')) {
					if(isset($ranges[$valStr]))
						$valStr=$ranges[$valStr];
					elseif(is_numeric($valStr))
						$valStr=$valStr.' ft.';
					else
						$valStr=$valStr;
				}
				array_push($properties,'bb/'.$property.'/bb '.$valStr);
			}
		}
		if($duration!==false)
			array_push($properties,'bb/Duration/bb '.$duration);
		if($save!==false)
			array_push($properties,'bb/Saving Throw/bb '.$save);
		$sections=[];
		if(count($properties)>0)
			array_push(
				$sections,
				[
					'title' => 'Properties',
					'spaced' => false,
					'texts' => quick_array($properties)
				]
			);
		array_push(
			$sections,
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array($desc)
			]
		);
		block(
			$name,
			'recipe',
			quick_array([
				sprintf(
					'bb/Form/bb %s%s; bb/Level/bb %s',
					$form,
					$descriptorTxt,
					$level
				)
			]),
			false,
			$sections
		);
	}
	function advAlchemyFormSubformBlock($name, $form, $subforms, $descriptors, $level, $additional, $duration, $save, $desc, $reagents=false, $catalysts=false) {
		$subformsStr='';
		if($subforms!==false) {
			if(is_string($subforms)) {
				$subformsStr=$subforms;
			}
			else {
				$first=true;
				foreach ($subforms as $subform) {
					if($first)
						$first=false;
					else
						$subformsStr.=' ';
					$subformsStr.=$subform;
				}
			}
		}
		advAlchemyBlock($name, $form.($subforms===false?'':' ('.$subformsStr.')'), $descriptors, $level, $additional, $duration, $save, $desc, $reagents, $catalysts);
	}
	function advAlchemySimpleBlock($name, $form, $descriptors, $level, $duration, $save, $desc, $reagents=false, $catalysts=false) {
		advAlchemyBlock($name, $form, $descriptors, $level, [], $duration, $save, $desc, $reagents, $catalysts);
	}
	function advAlchemyActivatedBlock($name, $subforms, $descriptors, $level, $activationTime, $duration, $save, $desc, $reagents=false, $catalysts=false) {
		advAlchemyFormSubformBlock($name, 'Activated', $subforms, $descriptors, $level, ['Activation Time' => $activationTime], $duration, $save, $desc, $reagents, $catalysts);
	}
	function advAlchemyAppliedBlock($name, $subforms, $descriptors, $level, $applicationTime, $duration, $save, $desc, $reagents=false, $catalysts=false) {
		advAlchemyFormSubformBlock($name, 'Applied', $subforms, $descriptors, $level, ['Activation Time' => $applicationTime], $duration, $save, $desc, $reagents, $catalysts);
	}
	function advAlchemyRocketBlock($name, $subforms, $descriptors, $level, $ignitionTime, $rangeIncr, $maxRange, $duration, $save, $desc, $reagents=false, $catalysts=false) {
		advAlchemyFormSubformBlock($name, 'Rocket', $subforms, $descriptors, $level, ['Activation Time' => $ignitionTime, ['Range Increment' => $rangeIncr, 'Max Range' => $maxRange]], $duration, $save, $desc, $reagents, $catalysts);
	}
	function advAlchemyCreationBlock($name, $subforms, $descriptors, $level, $desc, $reagents=false, $catalysts=false) {
		advAlchemyFormSubformBlock($name, 'Creation', $subforms, $descriptors, $level, [], false, false, $desc, $reagents, $catalysts);
	}
	function impossibleStaffBlockAuto($name, $school, $lvl=10, $staffDescPt1=[""], $subschool=false, $descriptors=[], $components=['V'=>0,'S'=>0,'M'=>0,'F'=>0,'DF'=>0], $time='1 standard action', $range='Close', $target=false, $effect=false, $area=false, $duration='instantaneous', $save='none', $sr=false, $spellDesc='', $staffDescPt2=[""], $construction=false, $extraCost=0) {
		global $dashes;
		$lvl_formatted = $lvl.ordinalSuffix($lvl);
		$cl = $lvl * 2 + 1;
		$cl_formatted = $cl.ordinalSuffix($cl);
		$aura = in_array($school,$dashes)?'—':(is_string($cl)?$school:($cl<6 ? "Faint" : ($cl<12 ? "Moderate" : ($cl<21 ? "Strong" : "Overwhelming"))).' '.$school);
		$price = number_format($lvl * $cl * 400)." gp";
		$spellBlockArrray = spellBlockAutoArray($name, $school.($subschool?' ('.$subschool.')':''), $descriptors, ['level'=>$lvl], $components, $time, $range, $target, $effect, $area, $duration, $save, $sr, $spellDesc);
		$sections=[
			[
				"title" => "Description",
				"spaced" => true,
				"texts" => array_merge(
					quick_array($staffDescPt1),
					[$spellBlockArrray],
					quick_array($staffDescPt2)
				)
			],
			[
				"title" => "Construction",
				"spaced" => false,
				"texts" => quick_array('bb/Prerequisite/bb Craft Staves, a written copy of ii/'.strtolower($name).'/ii'.($construction?', '.$construction:'').'; bb/Cost/bb: '.number_format($lvl * $cl * 200 + $extraCost).' gp')
			]
		];
		blockStack('Staff of '.$name, 'item', [
			"<b>Aura</b> {$aura}; <b>CL</b> {$cl_formatted}",
			"<b>Slot</b> —; <b>Price</b> {$price}; <b>Weight</b> 5 lb."
		], false, $sections);
	}
	function surgeBlock($name, $surge, $access, $range='Touch', $target=false, $effect=false, $area=false, $cost=1, $interval='1 round', $dismiss=true, $desc='') {
		$properties=[];
		$ranges=['Personal'=>'personal','Touch'=>'touch','Close'=>'close (25 ft. + 5 ft./2 levels)','Medium'=>'medium (100 ft. + 10 ft./level)','Long'=>'long (400 ft. + 40 ft./level)','Unlimited'=>'unlimited'];
		if(isset($ranges[$range]))
			array_push($properties,'bb/Range/bb '.$ranges[$range]);
		elseif(is_numeric($range))
			array_push($properties,'bb/Range/bb '.$range.' ft.');
		else
			array_push($properties,'bb/Range/bb '.$range);
		if($target)
			array_push($properties,'bb/Target(s)/bb '.$target);
		if($effect)
			array_push($properties,'bb/Effect/bb '.$effect);
		if($area)
			array_push($properties,'bb/Area/bb '.$area);
		array_push($properties,'bb/Investiture Cost/bb '.$cost.'; bb/Interval/bb '.$interval);
		array_push($properties,'bb/Dismissable/bb '.(is_string($dismiss)?$dismiss:($dismiss?'yes':'no')));
		block(
			$name,
			'surgebinding',
			quick_array([
				'bb/Surge/bb '.$surge,
				'bb/Access/bb '.$access
			]),
			false,
			[
				[
					'title' => 'Properties',
					'spaced' => false,
					'texts' => quick_array($properties)
				],
				[
					'title' => 'Description',
					'spaced' => true,
					'texts' => quick_array($desc)
				]
			]
		);
	}
	function goodSaveCalc($level) {
		return floor($level/2)+2;
	}
	function badSaveCalc($level) {
		return floor($level/3);
	}
	function goodPrestigeSaveCalc($level) {
		return ceil($level/2);
	}
	function badPrestigeSaveCalc($level) {
		return floor(($level+1)/3);
	}
	function classBlock($name, $desc, $role, $align, $hd, $parentClasses, $startWealth, $require, $classSkills, $skillsPerLevel, $bab, $showIter, $saves, $specials, $spells, $spellsSecondary, $features) {
		echo '<section class="block class"><header><h2>'.$name.'</h2></header>';
		echo '<p class="spaced">'.$desc.'</p>';
		echo '<p class="spaced"><b>Role</b>: '.$role.'</p>';
		echo '<p><b>Alignment</b>: '.$align.'.</p>';
		if($hd!==false)
			echo '<p><b>Hit Die</b>: '.(is_string($hd)?$hd:'d'.$hd).'.</p>';
		if($parentClasses!==false)
			echo '<p><b>Parent Class(es)</b>: '.$parentClasses.'.</p>';
		if($startWealth!==false)
			echo '<p><b>Starting Wealth</b>: '.(is_string($startWealth)?$startWealth:$startWealth.'d6 x 10 gp (average '.($startWealth*35).' gp)').'.</p>';
		if($require!==false) {
			echo '<h3 class="alt">Requirements</h3><p class="spaced">To qualify to become an '.$name.', a character must fulfill all the following criteria.</p>';
			foreach ($require as $attr => $cond) {
				echo '<p>'.$attr.': '.$cond.'</p>';
			}
		}
		echo '<h3 class="alt">Class Skills</h3>';
		$skillsTxt='';
		$skillAbilities=[
			'Acrobatics' => 'Dex',
			'Appraise' => 'Int',
			'Bluff' => 'Cha',
			'Climb' => 'Str',
			'Craft' => 'Int',
			'Diplomacy' => 'Cha',
			'Disable Device' => 'Cha',
			'Disguise' => 'Cha',
			'Escape Artist' => 'Dex',
			'Fly' => 'Dex',
			'Handle Animal' => 'Cha',
			'Heal' => 'Wis',
			'Intimidate' => 'Cha',
			'Knowledge' => 'Int',
			'Linguistics' => 'Int',
			'Perception' => 'Wis',
			'Perform' => 'Cha',
			'Profession' => 'Wis',
			'Ride' => 'Dex',
			'Sense Motive' => 'Wis',
			'Sleight of Hand' => 'Dex',
			'Spellcraft' => 'Int',
			'Stealth' => 'Dex',
			'Survival' => 'Wis',
			'Swim' => 'Str',
			'Use Magic Device' => 'Cha' 
		];
		$andInd=count($classSkills)-1;
		$first=true;
		foreach ($classSkills as $ind=>$skill) {
			if($first)
				$first=false;
			elseif($ind==$andInd)
				$skillsTxt.=', and ';
			else
				$skillsTxt.=', ';
			$skillsTxt.=$skill.' '.(isset($skillAbilities[$skill])?'('.$skillAbilities[$skill].')':(str_starts_with($skill,'Knowledge')?'(Int)':''));
		}
		echo '<p>The '.$name.'\'s class skills are '.$skillsTxt.'.</p>';
		echo '<p><b>Skill Points at each Level</b>: '.$skillsPerLevel.' + Int modifier.</p>';
		echo '<h3 class="alt">Class Features</h3>';
		$perDayRow='';
		$spellLevels='';
		$spellCounts=['','','','','','','','','','','','','','','','','','','',''];
		if($spells!==false) {
			$levelCount=0;
			foreach($spells as $level => $spellCount) {
				$spellLevels.='<th>'.$level.ordinalSuffix($level).'</th>';
				$levelCount++;
				for($i=0; $i<count($spellCount); $i++) {
					$spellCounts[$i].='<td>'.($spellCount[$i]===0?'—':$spellCount[$i]).'</td>';
				}
			}
			$perDayRow='<tr><th colspan="6"></th><th colspan="'.$levelCount.'">Spells Per Day</th></tr>';
		}
		$saveHeaders='<th>Fort Save</th><th>Ref Save</th><th>Will Save</th>';
		if(isset($saves['custom']) && $saves['custom']) {
			$saveHeaders='';
			foreach ($saves as $save => $saveType) {
				if($save!='custom')
					$saveHeaders.='<th>'.ucwords($save).' Save</th>';
			}
		}
		echo '<table class="class-features no-sort">'.$perDayRow.'<tr><th>Level</th><th>Base Attack Bonus</th>'.$saveHeaders.'<th>Special</th>'.$spellLevels.'</tr>';
		for($i=0; $i<count($specials); $i++) {
			$level=$i+1;
			echo '<tr>';
			echo '<td>'.$level.ordinalSuffix($level).'</td>';
			$babTxt='';
			$tmpBab=floor($bab*$level);
			$first=true;
			do {
				if($first)
					$first=false;
				else
					$babTxt.='/';
				$babTxt.='+'.$tmpBab;
				$tmpBab-=5;
				if(!$showIter)
					break;
			}
			while($tmpBab>0);
			echo '<td>'.$babTxt.'</td>';
			$saveTypes=[
				'good' => 'goodSaveCalc',
				'bad' => 'badSaveCalc',
				'good_prestige' => 'goodPrestigeSaveCalc',
				'bad_prestige' => 'badPrestigeSaveCalc'
			];
			if(isset($saves['custom']) && $saves['custom']) {
				$saveHeaders='';
				foreach ($saves as $save => $saveType) {
					if($save!='custom')
						echo '<td>+'.$saveTypes[$saveType]($level).'</td>';
				}
			}
			else {
				echo '<td>+'.$saveTypes[$saves['fort']]($level).'</td>';
				echo '<td>+'.$saveTypes[$saves['refl']]($level).'</td>';
				echo '<td>+'.$saveTypes[$saves['will']]($level).'</td>';
			}
			echo '<td>'.$specials[$i].'</td>';
			echo $spellCounts[$i];
			echo '</tr>';
		}
		echo '</table>';
		foreach ($features as $feature => $texts) {
			$ftexts=quick_array($texts);
			$first=true;
			foreach ($ftexts as $text) {
				echo '<p class="spaced'.($first?' top-double-spaced':'').'">';
				if($first) {
					$first=false;
					echo '<b>'.$feature.'</b>: ';
				}
				echo $text.'</p>';
			}
		}
		echo '</section>';
	}
	function dragonTalent($name='', $desc='', $prereq=false) {
		$texts = '';
		if($prereq !== false) {
			$texts = quick_format('bb/Prerequisites/bb '.$prereq);
		}
		block(
			[
				'text' => $name,
				'titleLevel' => 4
			],
			'dragon_talent',
			[
				$texts
			],
			true,
			[
				[
					'title' => 'Description',
					'spaced' => true,
					'texts' => quick_array($desc)
				]
			]
		);
	}
	function item2eBlock($name, $level=false, $rarity="Common", $traits=[], $price=false, $hands=false, $usage=false, $bulk=0, $activate=false, $description=[], $variations=[]) {
		$compTraits=quick_format($traits);
		if($rarity!='Common')
			array_unshift($compTraits, $rarity);
		$properties=[];
		if($price!==false)
			array_push($properties, 'Price '.quick_format($price));
		$properties_line2='';
		if($hands!==false)
			$properties_line2.=($properties_line2!=''?'; ':'').'Hands '.quick_format($hands);
		if($usage!==false)
			$properties_line2.=($properties_line2!=''?'; ':'').'Usage '.quick_format($usage);
		if($bulk)
			$properties_line2.=($properties_line2!=''?'; ':'').'Bulk '.quick_format($bulk);
		if($properties_line2!='')
			array_push($properties, $properties_line2);
		if($activate!==false)
			array_push($properties, 'Activate '.quick_format($activate));
		$segments=[];
		if(is_array($description) && is_array($description[0])) {
			foreach ($description as $segement) {
				array_push($segments, quick_array($segement));
			}
		}
		else {
			$segments=[quick_array($description)];
		}
		if(count($properties)>0)
			array_unshift($segments, $properties);
		block2(
			$name,
			'Item',
			$level,
			$compTraits,
			$segments,
			false,
			$variations
		);
	}
	function item2eBlockAuto($name, $level=false, $rarity="Common", $traits=[], $price=false, $hands=false, $usage=false, $bulk=0, $activateTime=false, $activateType=false, $description=[], $variations=[]) {
		$newPrice=$price;
		if($price && !is_string($price))
			$newPrice.=' gp';
		$activate=false;
		if($activateTime!==false || $activateType!==false) {
			$activateActions=false;
			switch ($activateTime) {
				case '/fa/':
					$activateActions='/fl/';
					break;
				case '/ra/':
					$activateActions='/rl/';
					break;
				case 1:
				case '/1a/':
					$activateActions='/1l/';
					break;
				case 2:
				case '/2a/':
					$activateActions='/2l/';
					break;
				case 3:
				case '/3a/':
					$activateActions='/3l/';
					break;
				default:
					$activateActions=$activateTime;
					break;
			}
			$activate=($activateActions===false?'':$activateActions).' '.($activateType===false?'':$activateType);
		}
		$sortedTraits=$traits;
		sort($sortedTraits,SORT_STRING);
		item2eBlock(
			$name,
			$level,
			$rarity,
			$sortedTraits,
			$newPrice,
			$hands,
			$usage,
			$bulk,
			$activate,
			$description,
			$variations
		);
	}
	function race2eBlock($name, $rarity, $typeTrait, $loreDesc, $youmight, $othersprobably, $physDesc, $society, $alignRelig, $adventurers, $hitpoints, $size, $speed, $boosts, $flaws, $languages, $racetraits) {
		$opinions=[];
		if(count($youmight)>0) {
			$youmight_text='<ul>';
			foreach ($youmight as $li) {
				$youmight_text.="<li>{$li}</li>";
			}
			$youmight_text.='</ul>';
			array_push($opinions, ["title" => "You Might...","spaced" => false,"texts" => [$youmight_text]]);
		}
		if(count($othersprobably)>0) {
			$othersprobably_text='<ul>';
			foreach ($othersprobably as $li) {
				$othersprobably_text.="<li>{$li}</li>";
			}
			$othersprobably_text.='</ul>';
			array_push($opinions, ["title" => "Others Probably...","spaced" => false,"texts" => [$othersprobably_text]]);
		}
		block2(
			$name,
			'Race',
			false,
			array_merge($rarity==='Common' ? [] : [$rarity], is_string($typeTrait) ? [$name, $typeTrait] : array_merge([$name], $typeTrait)),
			[
				[
					$loreDesc
				]
			],
			false,
			array_merge(
				$opinions,
				[
					[
						"title" => "Physical Description",
						"spaced" => false,
						"texts" => quick_array($physDesc)
					],
					[
						"title" => "Society",
						"spaced" => false,
						"texts" => quick_array($society)
					],
					[
						"title" => "Alignment and Religion",
						"spaced" => false,
						"texts" => quick_array($alignRelig)
					],
					[
						"title" => "Adventurers",
						"spaced" => false,
						"texts" => quick_array($adventurers)
					]
				]
			)
		);
		block2(
			$name.' Mechanics',
			'',
			false,
			[],
			[],
			false,
			array_merge(
				[
					[
						"title" => "Hit Points",
						"spaced" => false,
						"texts" => quick_array($hitpoints)
					],
					[
						"title" => "Size",
						"spaced" => false,
						"texts" => quick_array($size)
					],
					[
						"title" => "Speed",
						"spaced" => false,
						"texts" => quick_array($speed)
					],
					[
						"title" => "Ability Boosts",
						"spaced" => false,
						"texts" => quick_array_explode($boosts, ', ')
					]
				],
				($flaws!='' ? [[
						"title" => "Ability Flaw(s)",
						"spaced" => false,
						"texts" => quick_array_explode($flaws, ', ')
					]] : []),
				[
					[
						"title" => "Languages",
						"spaced" => false,
						"texts" => quick_array($languages)
					]
				],
				$racetraits
			)
		);
	}
	function itemSFBlock($name='', $properties=[], $desc=false, $variants=[]) {
		$textLines=[];
		foreach($properties as $propertyLine) {
			$line='';
			$first=true;
			foreach ($propertyLine as $property => $val) {
				if($first)
					$first=false;
				else
					$line.='; ';
				$line.='bb/'.$property.'/bb '.$val;
			}
			array_push($textLines, $line);
		}
		if($desc!==false) {
			if(count($textLines)>0)
				array_push($textLines, '/tt/ Description');
			array_append($textLines,quick_array($desc));
		}
		$sections=[];
		if(count($variants)>0) {
			foreach($variants as $variant) {
				$sectionPropLines=[];
				foreach($variant['properties'] as $propertyLine) {
					$line='';
					$first=true;
					foreach ($propertyLine as $property => $val) {
						if($first)
							$first=false;
						else
							$line.='; ';
						$line.='bb/'.$property.'/bb '.$val;
					}
					array_push($sectionPropLines, $line);
				}
				if(count($sectionPropLines)>0 && count($variant['texts'])>0)
					array_push($sectionPropLines, '/tt/ Description');
				array_push($sections, [
					'title' => $variant['title'],
					'spaced' => false,
					'texts' => array_merge(quick_array($sectionPropLines),quick_array($variant['texts']))
				]);
			}
		}
		blockSF(
			$name,
			'item',
			$textLines,
			false,
			$sections
		);
	}
	function itemSFBlockAuto($name='', $properties=[], $desc=false, $variants=[], $level=1, $price=0, $hands='—', $bulk='—', $charges=false) {
		$prop=[];
		if(count($properties)>0) {
			$prop=array_merge([['Level'=>$level, 'Price'=>$price]],$properties);
			if($charges)
				array_push($prop, ['Capacity'=>$charges['capacity'], 'Usage'=>$charges['usage']]);
			array_push($prop, ['Hands'=>$hands, 'Bulk'=>$bulk]);
		}
		$varnts=[];
		foreach ($variants as $ind=>$variant) {
			array_push($varnts,[
				'title' => $variant['title'],
				'title' => array_slice($variant['properties'],0),
				'texts' => array_slice($variant['texts'],0)
			]);
			if(count($variant['properties'])>0) {
				$varnts[$ind]['properties']=array_merge(
					[[
						'Level'=>$variant['level'],
						'Price'=>$variant['price']
					]],
					$variant['properties']
				);
				if(isset($variant['capacity'])) {
					array_push($prop, [
						'Capacity'=>$variant['capacity'],
						'Usage'=>$variant['usage']]
					);
				}
				array_push($varnts[$ind]['properties'], [
					'Hands'=>$variant['hands'],
					'Bulk'=>$variant['bulk']
				]);
			}
		}
		itemSFBlock(
			$name,
			$prop,
			$desc,
			$variants
		);
	}
	function weaponSFBlockAuto($name='', $properties=false, $desc=false, $variants=[], $level=1, $price=0, $hands='—', $prof='', $dmg='', $range=false, $crit='', $bulk='—', $special='', $charges=false) {
		$prop=[];
		if($properties!==false) {
			$dmgLine=[
				'Damage'=>$dmg
			];
			if($range!==false)
				$dmgLine['Range']=(is_numeric($range)?$range.' ft.':$range);
			$dmgLine['Critical']=$crit;
			$prop=array_merge([
				[
					'Level'=>$level,
					'Price'=>(is_numeric($price)?number_format($price):$price)
				],
				[
					'Hands'=>$hands,
					'Proficiency'=>$prof
				]
			],[$dmgLine],$properties);
			if($charges)
				array_push($prop, ['Capacity'=>$charges['capacity'], 'Usage'=>$charges['usage']]);
			array_push($prop, ['Bulk'=>$bulk, 'Special'=>$special]);
		}
		$varnts=[];
		foreach ($variants as $ind=>$variant) {
			array_push($varnts,[
				'title' => $variant['title'],
				'properties' => array_slice($variant['properties'],0),
				'texts' => array_slice($variant['texts'],0)
			]);
			if($variant['properties']!==false) {
				$varDmgLine=['Damage'=>$variant['dmg']];
				if($variant['range']!==false)
					$varDmgLine['Range']=(is_numeric($variant['range'])?$variant['range'].' ft.':$variant['range']);
				$varDmgLine['Critical']=$variant['crit'];
				$varnts[$ind]['properties']=array_merge(
					[
						[
							'Level'=>$variant['level'],
							'Price'=>(is_numeric($variant['price'])?number_format($variant['price']):$variant['price'])
						],
						[
							'Hands'=>$variant['hands'],
							'Proficiency'=>$variant['prof']
						]
					],
					[$varDmgLine],
					$variant['properties']
				);
				if(isset($variant['capacity'])) {
					array_push($prop,
						[
							'Capacity'=>$variant['capacity'],
							'Usage'=>$variant['usage']
						]
					);
				}
				array_push($varnts[$ind]['properties'], [
					'Bulk'=>$variant['bulk'],
					'Special'=>$variant['special']
				]);
			}
		}
		itemSFBlock(
			$name,
			$prop,
			$desc,
			$varnts
		);
	}
	function raceSFBlock($name='', $desc=[], $stats=[], $hp=0, $size_type='', $traits=[]) {
		$full_desc=$desc;
		if(count($full_desc)>0) {
			array_push($full_desc, "");
		}
		$statStr='Ability Modifiers ';
		if(is_array($stats)) {
			if(($stat=(isset($stats["str"]) ? $stats["str"] : (isset($stats[0]) ? $stats[0] : 0)))!=0) {
				$statStr.=sprintf("%+d Strength, ",$stat);
			}
			if(($stat=(isset($stats["dex"]) ? $stats["dex"] : (isset($stats[1]) ? $stats[1] : 0)))!=0) {
				$statStr.=sprintf("%+d Dexterity, ",$stat);
			}
			if(($stat=(isset($stats["con"]) ? $stats["con"] : (isset($stats[2]) ? $stats[2] : 0)))!=0) {
				$statStr.=sprintf("%+d Constitution, ",$stat);
			}
			if(($stat=(isset($stats["int"]) ? $stats["int"] : (isset($stats[3]) ? $stats[3] : 0)))!=0) {
				$statStr.=sprintf("%+d Intelligence, ",$stat);
			}
			if(($stat=(isset($stats["wis"]) ? $stats["wis"] : (isset($stats[4]) ? $stats[4] : 0)))!=0) {
				$statStr.=sprintf("%+d Wisdom, ",$stat);
			}
			if(($stat=(isset($stats["cha"]) ? $stats["cha"] : (isset($stats[5]) ? $stats[5] : 0)))!=0) {
				$statStr.=sprintf("%+d Charisma, ",$stat);
			}
			if(($stat=(isset($stats["any"]) ? $stats["any"] : (isset($stats[5]) ? $stats[5] : 0)))!=0) {
				$statStr.=sprintf("%+d to One Ability Score, ",$stat);
			}
			if(strlen($statStr)>0) {
				$statStr=substr($statStr, 0, -2);
			}
		}
		else {
			$statStr.=quick_format($stats);
		}
		array_push($full_desc, $statStr);
		array_push($full_desc, 'Hit Points '.$hp);
		$sections=[
			[
				'title' => 'Size and Type',
				'spaced' => true,
				'texts' => quick_array($size_type)
			]
		];
		foreach ($traits as $trait_name => $trait_desc) {
			array_push($sections, [
				'title' => $trait_name,
				'spaced' => true,
				'texts' => quick_array($trait_desc)
			]);
		}
		blockSF(
			$name,
			'race-traits',
			quick_array($full_desc),
			true,
			$sections,
			false
		);
	}
	function alienSFBlock($name='',$name2=false,$lore='',$cr='1',$role='combatant',$customXp=false,$race='',$alignment="N",$size="Medium",$type='',$senses='',$aura='',$defAb='',$weak='',$speed=30,$attacks=[],$reach=5,$offAbilities='',$spelllike=false,$spellcast=[],$spellnote='',$scores=[],$skills='',$lang='',$other='',$gear='',$enviro='',$organiz='',$specAb=[],$grafts=[],$desc='') {
		$arrays = [
			'combatant' => [
				'1/3' => ['eac' => 10, 'kac' => 12, 'fort' => 1, 'ref' => 1, 'will' => 0, 'hp' => 6, 'adc' => 8, 'sdc' => 8, 'ability1' => 3, 'ability2' => 1, 'ability3' => 0, 'mSkills' => 7, 'gSkills' => 3, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 4, 'low' => 1], 'ranged' => ['energy' => '1d4', 'kinetic' => '1d4'], 'melee' => ['standard' => '1d6+Str', 'three' => '—', 'four' => '—']],
				'1/2' => ['eac' => 10, 'kac' => 12, 'fort' => 2, 'ref' => 2, 'will' => 0, 'hp' => 13, 'adc' => 9, 'sdc' => 9, 'ability1' => 3, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 9, 'gSkills' => 4, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 6, 'low' => 3], 'ranged' => ['energy' => '1d4', 'kinetic' => '1d6'], 'melee' => ['standard' => '1d6+Str', 'three' => '—', 'four' => '—']],
				'1' => ['eac' => 11, 'kac' => 13, 'fort' => 3, 'ref' => 3, 'will' => 1, 'hp' => 20, 'adc' => 10, 'sdc' => 9, 'ability1' => 4, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 10, 'gSkills' => 5, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 8, 'low' => 5], 'ranged' => ['energy' => '1d4+1', 'kinetic' => '1d6+1'], 'melee' => ['standard' => '1d6+1+Str', 'three' => '—', 'four' => '—']],
				'2' => ['eac' => 13, 'kac' => 15, 'fort' => 4, 'ref' => 4, 'will' => 1, 'hp' => 25, 'adc' => 11, 'sdc' => 10, 'ability1' => 4, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 12, 'gSkills' => 7, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 10, 'low' => 7], 'ranged' => ['energy' => '1d4+2', 'kinetic' => '1d6+2'], 'melee' => ['standard' => '1d6+2+Str', 'three' => '—', 'four' => '—']],
				'3' => ['eac' => 14, 'kac' => 16, 'fort' => 5, 'ref' => 5, 'will' => 2, 'hp' => 40, 'adc' => 12, 'sdc' => 11, 'ability1' => 4, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 13, 'gSkills' => 8, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 11, 'low' => 8], 'ranged' => ['energy' => '1d4+3', 'kinetic' => '1d6+3'], 'melee' => ['standard' => '1d6+3+Str', 'three' => '—', 'four' => '—']],
				'4' => ['eac' => 16, 'kac' => 18, 'fort' => 6, 'ref' => 6, 'will' => 3, 'hp' => 50, 'adc' => 13, 'sdc' => 11, 'ability1' => 5, 'ability2' => 3, 'ability3' => 1, 'mSkills' => 15, 'gSkills' => 10, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 12, 'low' => 9], 'ranged' => ['energy' => '1d4+4', 'kinetic' => '1d6+4'], 'melee' => ['standard' => '1d6+4+Str', 'three' => '—', 'four' => '—']],
				'5' => ['eac' => 17, 'kac' => 19, 'fort' => 7, 'ref' => 7, 'will' => 4, 'hp' => 70, 'adc' => 13, 'sdc' => 11, 'ability1' => 5, 'ability2' => 3, 'ability3' => 2, 'mSkills' => 16, 'gSkills' => 11, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 14, 'low' => 11], 'ranged' => ['energy' => '1d6+5', 'kinetic' => '1d8+5'], 'melee' => ['standard' => '1d6+5+Str', 'three' => '—', 'four' => '—']],
				'6' => ['eac' => 18, 'kac' => 20, 'fort' => 8, 'ref' => 8, 'will' => 5, 'hp' => 90, 'adc' => 14, 'sdc' => 12, 'ability1' => 5, 'ability2' => 3, 'ability3' => 2, 'mSkills' => 18, 'gSkills' => 13, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 16, 'low' => 13], 'ranged' => ['energy' => '1d10+6', 'kinetic' => '2d6+6'], 'melee' => ['standard' => '1d8+6+Str', 'three' => '1d4+6+Str', 'four' => '—']],
				'7' => ['eac' => 19, 'kac' => 21, 'fort' => 9, 'ref' => 9, 'will' => 6, 'hp' => 105, 'adc' => 15, 'sdc' => 13, 'ability1' => 5, 'ability2' => 4, 'ability3' => 2, 'mSkills' => 19, 'gSkills' => 14, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 17, 'low' => 14], 'ranged' => ['energy' => '2d6+7', 'kinetic' => '2d8+7'], 'melee' => ['standard' => '2d6+7+Str', 'three' => '1d8+7+Str', 'four' => '1d6+7+Str']],
				'8' => ['eac' => 20, 'kac' => 22, 'fort' => 10, 'ref' => 10, 'will' => 7, 'hp' => 125, 'adc' => 16, 'sdc' => 13, 'ability1' => 6, 'ability2' => 4, 'ability3' => 2, 'mSkills' => 21, 'gSkills' => 16, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 19, 'low' => 16], 'ranged' => ['energy' => '2d8+8', 'kinetic' => '3d6+8'], 'melee' => ['standard' => '3d4+8+Str', 'three' => '1d10+8+Str', 'four' => '1d6+8+Str']],
				'9' => ['eac' => 22, 'kac' => 24, 'fort' => 11, 'ref' => 11, 'will' => 8, 'hp' => 145, 'adc' => 16, 'sdc' => 13, 'ability1' => 6, 'ability2' => 4, 'ability3' => 3, 'mSkills' => 22, 'gSkills' => 17, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 21, 'low' => 18], 'ranged' => ['energy' => '3d6+9', 'kinetic' => '5d4+9'], 'melee' => ['standard' => '2d10+9+Str', 'three' => '2d6+9+Str', 'four' => '1d10+9+Str']],
				'10' => ['eac' => 23, 'kac' => 25, 'fort' => 12, 'ref' => 12, 'will' => 9, 'hp' => 165, 'adc' => 17, 'sdc' => 14, 'ability1' => 8, 'ability2' => 5, 'ability3' => 3, 'mSkills' => 24, 'gSkills' => 19, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 22, 'low' => 19], 'ranged' => ['energy' => '2d10+10', 'kinetic' => '4d6+10'], 'melee' => ['standard' => '2d10+10+Str', 'three' => '3d4+10+Str', 'four' => '1d10+10+Str']],
				'11' => ['eac' => 24, 'kac' => 26, 'fort' => 13, 'ref' => 13, 'will' => 10, 'hp' => 180, 'adc' => 18, 'sdc' => 14, 'ability1' => 8, 'ability2' => 5, 'ability3' => 3, 'mSkills' => 25, 'gSkills' => 20, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 23, 'low' => 20], 'ranged' => ['energy' => '3d8+11', 'kinetic' => '3d10+11'], 'melee' => ['standard' => '4d6+11+Str', 'three' => '2d8+11+Str', 'four' => '2d6+11+Str']],
				'12' => ['eac' => 26, 'kac' => 28, 'fort' => 14, 'ref' => 14, 'will' => 11, 'hp' => 200, 'adc' => 19, 'sdc' => 15, 'ability1' => 8, 'ability2' => 5, 'ability3' => 4, 'mSkills' => 27, 'gSkills' => 22, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 25, 'low' => 22], 'ranged' => ['energy' => '6d4+12', 'kinetic' => '4d8+12'], 'melee' => ['standard' => '6d4+12+Str', 'three' => '3d6+12+Str', 'four' => '3d4+12+Str']],
				'13' => ['eac' => 27, 'kac' => 29, 'fort' => 15, 'ref' => 15, 'will' => 12, 'hp' => 225, 'adc' => 19, 'sdc' => 15, 'ability1' => 8, 'ability2' => 6, 'ability3' => 4, 'mSkills' => 28, 'gSkills' => 23, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 26, 'low' => 23], 'ranged' => ['energy' => '5d6+13', 'kinetic' => '6d6+13'], 'melee' => ['standard' => '3d12+13+Str', 'three' => '2d12+13+Str', 'four' => '2d8+13+Str']],
				'14' => ['eac' => 28, 'kac' => 30, 'fort' => 16, 'ref' => 16, 'will' => 12, 'hp' => 250, 'adc' => 20, 'sdc' => 15, 'ability1' => 8, 'ability2' => 6, 'ability3' => 4, 'mSkills' => 30, 'gSkills' => 25, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 27, 'low' => 24], 'ranged' => ['energy' => '3d12+14', 'kinetic' => '5d10+14'], 'melee' => ['standard' => '8d6+14+Str', 'three' => '4d8+14+Str', 'four' => '4d6+14+Str']],
				'15' => ['eac' => 29, 'kac' => 31, 'fort' => 17, 'ref' => 17, 'will' => 13, 'hp' => 275, 'adc' => 21, 'sdc' => 16, 'ability1' => 9, 'ability2' => 7, 'ability3' => 5, 'mSkills' => 31, 'gSkills' => 26, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 28, 'low' => 25], 'ranged' => ['energy' => '5d8+15', 'kinetic' => '8d6+15'], 'melee' => ['standard' => '8d6+15+Str', 'three' => '3d12+15+Str', 'four' => '6d4+15+Str']],
				'16' => ['eac' => 30, 'kac' => 32, 'fort' => 18, 'ref' => 18, 'will' => 14, 'hp' => 300, 'adc' => 22, 'sdc' => 16, 'ability1' => 10, 'ability2' => 7, 'ability3' => 5, 'mSkills' => 33, 'gSkills' => 28, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 30, 'low' => 27], 'ranged' => ['energy' => '7d6+16', 'kinetic' => '6d10+16'], 'melee' => ['standard' => '6d10+16+Str', 'three' => '5d8+16+Str', 'four' => '3d10+16+Str']],
				'17' => ['eac' => 31, 'kac' => 33, 'fort' => 19, 'ref' => 19, 'will' => 15, 'hp' => 340, 'adc' => 22, 'sdc' => 16, 'ability1' => 11, 'ability2' => 8, 'ability3' => 5, 'mSkills' => 34, 'gSkills' => 29, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 31, 'low' => 28], 'ranged' => ['energy' => '8d6+17', 'kinetic' => '6d12+17'], 'melee' => ['standard' => '6d12+17+Str', 'three' => '4d12+17+Str', 'four' => '3d12+17+Str']],
				'18' => ['eac' => 32, 'kac' => 34, 'fort' => 19, 'ref' => 19, 'will' => 16, 'hp' => 375, 'adc' => 23, 'sdc' => 17, 'ability1' => 11, 'ability2' => 8, 'ability3' => 6, 'mSkills' => 36, 'gSkills' => 31, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 32, 'low' => 29], 'ranged' => ['energy' => '6d10+18', 'kinetic' => '8d10+18'], 'melee' => ['standard' => '13d6+18+Str', 'three' => '8d6+18+Str', 'four' => '5d8+18+Str']],
				'19' => ['eac' => 33, 'kac' => 35, 'fort' => 20, 'ref' => 20, 'will' => 16, 'hp' => 415, 'adc' => 24, 'sdc' => 18, 'ability1' => 11, 'ability2' => 9, 'ability3' => 6, 'mSkills' => 37, 'gSkills' => 32, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 33, 'low' => 30], 'ranged' => ['energy' => '8d8+19', 'kinetic' => '9d10+19'], 'melee' => ['standard' => '15d6+19+Str', 'three' => '6d10+19+Str', 'four' => '4d12+19+Str']],
				'20' => ['eac' => 35, 'kac' => 37, 'fort' => 21, 'ref' => 21, 'will' => 17, 'hp' => 465, 'adc' => 25, 'sdc' => 19, 'ability1' => 12, 'ability2' => 9, 'ability3' => 6, 'mSkills' => 39, 'gSkills' => 34, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 34, 'low' => 31], 'ranged' => ['energy' => '12d6+20', 'kinetic' => '16d6+20'], 'melee' => ['standard' => '11d10+20+Str', 'three' => '6d12+20+Str', 'four' => '8d6+20+Str']],
				'21' => ['eac' => 36, 'kac' => 38, 'fort' => 22, 'ref' => 22, 'will' => 18, 'hp' => 500, 'adc' => 25, 'sdc' => 19, 'ability1' => 12, 'ability2' => 10, 'ability3' => 7, 'mSkills' => 40, 'gSkills' => 35, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 35, 'low' => 32], 'ranged' => ['energy' => '13d6+21', 'kinetic' => '18d6+21'], 'melee' => ['standard' => '12d10+21+Str', 'three' => '8d10+21+Str', 'four' => '6d10+21+Str']],
				'22' => ['eac' => 38, 'kac' => 40, 'fort' => 22, 'ref' => 22, 'will' => 18, 'hp' => 550, 'adc' => 26, 'sdc' => 20, 'ability1' => 13, 'ability2' => 10, 'ability3' => 7, 'mSkills' => 42, 'gSkills' => 37, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 36, 'low' => 33], 'ranged' => ['energy' => '12d8+22', 'kinetic' => '20d6+22'], 'melee' => ['standard' => '21d6+22+Str', 'three' => '9d10+22+Str', 'four' => '8d8+22+Str']],
				'23' => ['eac' => 39, 'kac' => 41, 'fort' => 23, 'ref' => 23, 'will' => 19, 'hp' => 600, 'adc' => 27, 'sdc' => 21, 'ability1' => 13, 'ability2' => 11, 'ability3' => 7, 'mSkills' => 43, 'gSkills' => 38, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 37, 'low' => 34], 'ranged' => ['energy' => '17d6+23', 'kinetic' => '14d10+23'], 'melee' => ['standard' => '24d6+23+Str', 'three' => '10d10+23+Str', 'four' => '12d6+23+Str']],
				'24' => ['eac' => 41, 'kac' => 43, 'fort' => 24, 'ref' => 24, 'will' => 20, 'hp' => 650, 'adc' => 28, 'sdc' => 22, 'ability1' => 15, 'ability2' => 11, 'ability3' => 8, 'mSkills' => 45, 'gSkills' => 40, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 39, 'low' => 36], 'ranged' => ['energy' => '10d12+24', 'kinetic' => '19d8+24'], 'melee' => ['standard' => '14d12+24+Str', 'three' => '11d10+24+Str', 'four' => '13d6+24+Str']],
				'25' => ['eac' => 42, 'kac' => 44, 'fort' => 25, 'ref' => 25, 'will' => 21, 'hp' => 700, 'adc' => 28, 'sdc' => 22, 'ability1' => 15, 'ability2' => 12, 'ability3' => 8, 'mSkills' => 46, 'gSkills' => 41, 'mSkillCount' => 1, 'gSkillCount' => 2, 'attack' => ['high' => 40, 'low' => 37], 'ranged' => ['energy' => '13d10+25', 'kinetic' => '14d12+25'], 'melee' => ['standard' => '18d10+25+Str', 'three' => '12d10+25+Str', 'four' => '9d10+25+Str']]
			],
			'expert' => [
				'1/3' => ['eac' => 10, 'kac' => 11, 'fort' => 0, 'ref' => 0, 'will' => 2, 'hp' => 6, 'adc' => 10, 'sdc' => 10, 'ability1' => 3, 'ability2' => 1, 'ability3' => 0, 'mSkills' => 7, 'gSkills' => 3, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 2, 'low' => 0], 'ranged' => ['energy' => '1d4', 'kinetic' => '1d4'], 'melee' => ['standard' => '1d4+Str', 'three' => '—', 'four' => '—']],
				'1/2' => ['eac' => 10, 'kac' => 11, 'fort' => 0, 'ref' => 0, 'will' => 3, 'hp' => 12, 'adc' => 11, 'sdc' => 11, 'ability1' => 3, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 9, 'gSkills' => 4, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 4, 'low' => 2], 'ranged' => ['energy' => '1d4', 'kinetic' => '1d4'], 'melee' => ['standard' => '1d4+Str', 'three' => '—', 'four' => '—']],
				'1' => ['eac' => 11, 'kac' => 12, 'fort' => 1, 'ref' => 1, 'will' => 4, 'hp' => 17, 'adc' => 12, 'sdc' => 11, 'ability1' => 4, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 10, 'gSkills' => 5, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 6, 'low' => 4], 'ranged' => ['energy' => '1d4+1', 'kinetic' => '1d4+1'], 'melee' => ['standard' => '1d4+1+Str', 'three' => '—', 'four' => '—']],
				'2' => ['eac' => 13, 'kac' => 14, 'fort' => 1, 'ref' => 1, 'will' => 5, 'hp' => 23, 'adc' => 13, 'sdc' => 12, 'ability1' => 4, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 12, 'gSkills' => 7, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 8, 'low' => 6], 'ranged' => ['energy' => '1d4+2', 'kinetic' => '1d4+2'], 'melee' => ['standard' => '1d4+2+Str', 'three' => '—', 'four' => '—']],
				'3' => ['eac' => 14, 'kac' => 15, 'fort' => 2, 'ref' => 2, 'will' => 6, 'hp' => 35, 'adc' => 14, 'sdc' => 13, 'ability1' => 4, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 13, 'gSkills' => 8, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 9, 'low' => 7], 'ranged' => ['energy' => '1d4+3', 'kinetic' => '1d4+3'], 'melee' => ['standard' => '1d4+3+Str', 'three' => '—', 'four' => '—']],
				'4' => ['eac' => 16, 'kac' => 17, 'fort' => 3, 'ref' => 3, 'will' => 7, 'hp' => 45, 'adc' => 15, 'sdc' => 13, 'ability1' => 5, 'ability2' => 3, 'ability3' => 1, 'mSkills' => 15, 'gSkills' => 10, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 10, 'low' => 8], 'ranged' => ['energy' => '1d4+4', 'kinetic' => '1d4+4'], 'melee' => ['standard' => '1d4+4+Str', 'three' => '—', 'four' => '—']],
				'5' => ['eac' => 17, 'kac' => 18, 'fort' => 4, 'ref' => 4, 'will' => 8, 'hp' => 65, 'adc' => 15, 'sdc' => 13, 'ability1' => 5, 'ability2' => 3, 'ability3' => 2, 'mSkills' => 16, 'gSkills' => 11, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 12, 'low' => 10], 'ranged' => ['energy' => '1d4+5', 'kinetic' => '1d6+5'], 'melee' => ['standard' => '1d4+5+Str', 'three' => '—', 'four' => '—']],
				'6' => ['eac' => 18, 'kac' => 19, 'fort' => 5, 'ref' => 5, 'will' => 9, 'hp' => 80, 'adc' => 16, 'sdc' => 14, 'ability1' => 5, 'ability2' => 3, 'ability3' => 2, 'mSkills' => 18, 'gSkills' => 13, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 14, 'low' => 12], 'ranged' => ['energy' => '1d6+6', 'kinetic' => '1d8+6'], 'melee' => ['standard' => '1d6+6+Str', 'three' => '1d4+6+Str', 'four' => '—']],
				'7' => ['eac' => 19, 'kac' => 20, 'fort' => 6, 'ref' => 6, 'will' => 10, 'hp' => 100, 'adc' => 17, 'sdc' => 15, 'ability1' => 5, 'ability2' => 4, 'ability3' => 2, 'mSkills' => 19, 'gSkills' => 14, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 15, 'low' => 13], 'ranged' => ['energy' => '1d8+7', 'kinetic' => '1d12+7'], 'melee' => ['standard' => '1d8+7+Str', 'three' => '1d4+7+Str', 'four' => '1d4+7+Str']],
				'8' => ['eac' => 20, 'kac' => 21, 'fort' => 7, 'ref' => 7, 'will' => 11, 'hp' => 115, 'adc' => 18, 'sdc' => 15, 'ability1' => 6, 'ability2' => 4, 'ability3' => 2, 'mSkills' => 21, 'gSkills' => 16, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 17, 'low' => 15], 'ranged' => ['energy' => '1d10+8', 'kinetic' => '2d6+8'], 'melee' => ['standard' => '1d12+8+Str', 'three' => '1d8+8+Str', 'four' => '1d4+8+Str']],
				'9' => ['eac' => 22, 'kac' => 23, 'fort' => 8, 'ref' => 8, 'will' => 12, 'hp' => 135, 'adc' => 18, 'sdc' => 15, 'ability1' => 6, 'ability2' => 4, 'ability3' => 3, 'mSkills' => 22, 'gSkills' => 17, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 19, 'low' => 17], 'ranged' => ['energy' => '2d6+9', 'kinetic' => '2d8+9'], 'melee' => ['standard' => '3d4+9+Str', 'three' => '1d10+9+Str', 'four' => '1d6+9+Str']],
				'10' => ['eac' => 23, 'kac' => 24, 'fort' => 9, 'ref' => 9, 'will' => 13, 'hp' => 150, 'adc' => 19, 'sdc' => 16, 'ability1' => 8, 'ability2' => 5, 'ability3' => 3, 'mSkills' => 24, 'gSkills' => 19, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 20, 'low' => 18], 'ranged' => ['energy' => '3d4+10', 'kinetic' => '2d8+10'], 'melee' => ['standard' => '2d8+10+Str', 'three' => '1d10+10+Str', 'four' => '1d8+10+Str']],
				'11' => ['eac' => 24, 'kac' => 25, 'fort' => 10, 'ref' => 10, 'will' => 14, 'hp' => 170, 'adc' => 20, 'sdc' => 16, 'ability1' => 8, 'ability2' => 5, 'ability3' => 3, 'mSkills' => 25, 'gSkills' => 20, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 21, 'low' => 19], 'ranged' => ['energy' => '2d8+11', 'kinetic' => '2d10+11'], 'melee' => ['standard' => '2d10+11+Str', 'three' => '3d4+11+Str', 'four' => '1d10+11+Str']],
				'12' => ['eac' => 26, 'kac' => 27, 'fort' => 11, 'ref' => 11, 'will' => 15, 'hp' => 185, 'adc' => 21, 'sdc' => 17, 'ability1' => 8, 'ability2' => 5, 'ability3' => 4, 'mSkills' => 27, 'gSkills' => 22, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 23, 'low' => 21], 'ranged' => ['energy' => '2d8+12', 'kinetic' => '2d10+12'], 'melee' => ['standard' => '2d12+12+Str', 'three' => '3d4+12+Str', 'four' => '1d12+12+Str']],
				'13' => ['eac' => 27, 'kac' => 28, 'fort' => 12, 'ref' => 12, 'will' => 16, 'hp' => 210, 'adc' => 21, 'sdc' => 17, 'ability1' => 8, 'ability2' => 6, 'ability3' => 4, 'mSkills' => 28, 'gSkills' => 23, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 24, 'low' => 22], 'ranged' => ['energy' => '2d10+13', 'kinetic' => '4d6+13'], 'melee' => ['standard' => '6d4+13+Str', 'three' => '3d6+13+Str', 'four' => '3d4+13+Str']],
				'14' => ['eac' => 28, 'kac' => 29, 'fort' => 12, 'ref' => 12, 'will' => 17, 'hp' => 235, 'adc' => 22, 'sdc' => 17, 'ability1' => 8, 'ability2' => 6, 'ability3' => 4, 'mSkills' => 30, 'gSkills' => 25, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 25, 'low' => 23], 'ranged' => ['energy' => '5d4+14', 'kinetic' => '4d8+14'], 'melee' => ['standard' => '6d6+14+Str', 'three' => '4d6+14+Str', 'four' => '3d6+14+Str']],
				'15' => ['eac' => 29, 'kac' => 30, 'fort' => 13, 'ref' => 13, 'will' => 18, 'hp' => 255, 'adc' => 23, 'sdc' => 18, 'ability1' => 9, 'ability2' => 7, 'ability3' => 5, 'mSkills' => 31, 'gSkills' => 26, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 26, 'low' => 24], 'ranged' => ['energy' => '4d6+15', 'kinetic' => '6d6+15'], 'melee' => ['standard' => '5d8+15+Str', 'three' => '6d4+15+Str', 'four' => '2d10+15+Str']],
				'16' => ['eac' => 30, 'kac' => 31, 'fort' => 14, 'ref' => 14, 'will' => 19, 'hp' => 280, 'adc' => 24, 'sdc' => 18, 'ability1' => 10, 'ability2' => 7, 'ability3' => 5, 'mSkills' => 33, 'gSkills' => 28, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 28, 'low' => 26], 'ranged' => ['energy' => '6d4+16', 'kinetic' => '5d8+16'], 'melee' => ['standard' => '6d8+16+Str', 'three' => '4d8+16+Str', 'four' => '3d8+16+Str']],
				'17' => ['eac' => 31, 'kac' => 32, 'fort' => 15, 'ref' => 15, 'will' => 20, 'hp' => 315, 'adc' => 24, 'sdc' => 18, 'ability1' => 11, 'ability2' => 8, 'ability3' => 5, 'mSkills' => 34, 'gSkills' => 29, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 29, 'low' => 27], 'ranged' => ['energy' => '4d8+17', 'kinetic' => '4d12+17'], 'melee' => ['standard' => '8d6+17+Str', 'three' => '3d12+17+Str', 'four' => '6d4+17+Str']],
				'18' => ['eac' => 32, 'kac' => 33, 'fort' => 16, 'ref' => 16, 'will' => 20, 'hp' => 350, 'adc' => 25, 'sdc' => 19, 'ability1' => 11, 'ability2' => 8, 'ability3' => 6, 'mSkills' => 36, 'gSkills' => 31, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 30, 'low' => 28], 'ranged' => ['energy' => '3d12+18', 'kinetic' => '8d6+18'], 'melee' => ['standard' => '8d8+18+Str', 'three' => '5d8+18+Str', 'four' => '4d8+18+Str']],
				'19' => ['eac' => 33, 'kac' => 34, 'fort' => 16, 'ref' => 16, 'will' => 21, 'hp' => 385, 'adc' => 26, 'sdc' => 20, 'ability1' => 11, 'ability2' => 9, 'ability3' => 6, 'mSkills' => 37, 'gSkills' => 32, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 31, 'low' => 29], 'ranged' => ['energy' => '5d8+19', 'kinetic' => '6d10+19'], 'melee' => ['standard' => '9d8+19+Str', 'three' => '6d8+19+Str', 'four' => '3d12+19+Str']],
				'20' => ['eac' => 35, 'kac' => 36, 'fort' => 17, 'ref' => 17, 'will' => 22, 'hp' => 430, 'adc' => 27, 'sdc' => 21, 'ability1' => 12, 'ability2' => 9, 'ability3' => 6, 'mSkills' => 39, 'gSkills' => 34, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 32, 'low' => 30], 'ranged' => ['energy' => '4d12+20', 'kinetic' => '8d8+20'], 'melee' => ['standard' => '13d6+20+Str', 'three' => '9d6+20+Str', 'four' => '5d8+20+Str']],
				'21' => ['eac' => 36, 'kac' => 37, 'fort' => 18, 'ref' => 18, 'will' => 23, 'hp' => 465, 'adc' => 27, 'sdc' => 21, 'ability1' => 12, 'ability2' => 10, 'ability3' => 7, 'mSkills' => 40, 'gSkills' => 35, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 33, 'low' => 31], 'ranged' => ['energy' => '8d6+21', 'kinetic' => '6d12+21'], 'melee' => ['standard' => '15d6+21+Str', 'three' => '10d6+21+Str', 'four' => '4d12+21+Str']],
				'22' => ['eac' => 38, 'kac' => 39, 'fort' => 18, 'ref' => 18, 'will' => 23, 'hp' => 500, 'adc' => 28, 'sdc' => 22, 'ability1' => 13, 'ability2' => 10, 'ability3' => 7, 'mSkills' => 42, 'gSkills' => 37, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 34, 'low' => 32], 'ranged' => ['energy' => '6d10+22', 'kinetic' => '8d10+22'], 'melee' => ['standard' => '17d6+22+Str', 'three' => '6d12+22+Str', 'four' => '8d6+22+Str']],
				'23' => ['eac' => 39, 'kac' => 40, 'fort' => 19, 'ref' => 19, 'will' => 24, 'hp' => 550, 'adc' => 29, 'sdc' => 23, 'ability1' => 13, 'ability2' => 11, 'ability3' => 7, 'mSkills' => 43, 'gSkills' => 38, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 35, 'low' => 33], 'ranged' => ['energy' => '8d8+23', 'kinetic' => '13d6+23'], 'melee' => ['standard' => '12d10+23+Str', 'three' => '8d10+23+Str', 'four' => '6d10+23+Str']],
				'24' => ['eac' => 41, 'kac' => 42, 'fort' => 20, 'ref' => 20, 'will' => 25, 'hp' => 600, 'adc' => 30, 'sdc' => 24, 'ability1' => 15, 'ability2' => 11, 'ability3' => 8, 'mSkills' => 45, 'gSkills' => 40, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 37, 'low' => 35], 'ranged' => ['energy' => '9d8+24', 'kinetic' => '15d6+24'], 'melee' => ['standard' => '21d6+24+Str', 'three' => '9d10+24+Str', 'four' => '8d8+24+Str']],
				'25' => ['eac' => 42, 'kac' => 43, 'fort' => 21, 'ref' => 21, 'will' => 26, 'hp' => 650, 'adc' => 30, 'sdc' => 24, 'ability1' => 15, 'ability2' => 12, 'ability3' => 8, 'mSkills' => 46, 'gSkills' => 41, 'mSkillCount' => 3, 'gSkillCount' => 2, 'attack' => ['high' => 38, 'low' => 36], 'ranged' => ['energy' => '8d10+25', 'kinetic' => '16d6+25'], 'melee' => ['standard' => '12d12+25+Str', 'three' => '15d6+25+Str', 'four' => '6d12+25+Str']]
			],
			'spellcaster' => [
				'1/3' => ['eac' => 9, 'kac' => 10, 'fort' => 0, 'ref' => 0, 'will' => 2, 'hp' => 5, 'adc' => 10, 'sdc' => 12, 'ability1' => 3, 'ability2' => 1, 'ability3' => 0, 'mSkills' => 7, 'gSkills' => 3, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 0, 'low' => -2], 'ranged' => ['energy' => '1d4', 'kinetic' => '1d4'], 'melee' => ['standard' => '1d4+Str', 'three' => '—', 'four' => '—']],
				'1/2' => ['eac' => 9, 'kac' => 10, 'fort' => 0, 'ref' => 0, 'will' => 3, 'hp' => 11, 'adc' => 11, 'sdc' => 13, 'ability1' => 3, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 9, 'gSkills' => 4, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 2, 'low' => 0], 'ranged' => ['energy' => '1d4', 'kinetic' => '1d4'], 'melee' => ['standard' => '1d4+Str', 'three' => '—', 'four' => '—']],
				'1' => ['eac' => 10, 'kac' => 11, 'fort' => 1, 'ref' => 1, 'will' => 4, 'hp' => 16, 'adc' => 12, 'sdc' => 13, 'ability1' => 4, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 10, 'gSkills' => 5, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 4, 'low' => 2], 'ranged' => ['energy' => '1d4+1', 'kinetic' => '1d4+1'], 'melee' => ['standard' => '1d4+1+Str', 'three' => '—', 'four' => '—']],
				'2' => ['eac' => 12, 'kac' => 13, 'fort' => 1, 'ref' => 1, 'will' => 5, 'hp' => 21, 'adc' => 13, 'sdc' => 14, 'ability1' => 4, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 12, 'gSkills' => 7, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 6, 'low' => 4], 'ranged' => ['energy' => '1d4+2', 'kinetic' => '1d4+2'], 'melee' => ['standard' => '1d4+2+Str', 'three' => '—', 'four' => '—']],
				'3' => ['eac' => 13, 'kac' => 14, 'fort' => 2, 'ref' => 2, 'will' => 6, 'hp' => 32, 'adc' => 14, 'sdc' => 15, 'ability1' => 4, 'ability2' => 2, 'ability3' => 1, 'mSkills' => 13, 'gSkills' => 8, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 7, 'low' => 5], 'ranged' => ['energy' => '1d4+3', 'kinetic' => '1d4+3'], 'melee' => ['standard' => '1d4+3+Str', 'three' => '—', 'four' => '—']],
				'4' => ['eac' => 15, 'kac' => 16, 'fort' => 3, 'ref' => 3, 'will' => 7, 'hp' => 43, 'adc' => 15, 'sdc' => 15, 'ability1' => 5, 'ability2' => 3, 'ability3' => 1, 'mSkills' => 15, 'gSkills' => 10, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 8, 'low' => 6], 'ranged' => ['energy' => '1d4+4', 'kinetic' => '1d4+4'], 'melee' => ['standard' => '1d4+4+Str', 'three' => '—', 'four' => '—']],
				'5' => ['eac' => 16, 'kac' => 17, 'fort' => 4, 'ref' => 4, 'will' => 8, 'hp' => 60, 'adc' => 15, 'sdc' => 15, 'ability1' => 5, 'ability2' => 3, 'ability3' => 2, 'mSkills' => 16, 'gSkills' => 11, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 10, 'low' => 8], 'ranged' => ['energy' => '1d4+5', 'kinetic' => '1d6+5'], 'melee' => ['standard' => '1d4+5+Str', 'three' => '—', 'four' => '—']],
				'6' => ['eac' => 17, 'kac' => 18, 'fort' => 5, 'ref' => 5, 'will' => 9, 'hp' => 75, 'adc' => 16, 'sdc' => 16, 'ability1' => 5, 'ability2' => 3, 'ability3' => 2, 'mSkills' => 18, 'gSkills' => 13, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 12, 'low' => 10], 'ranged' => ['energy' => '1d6+6', 'kinetic' => '1d8+6'], 'melee' => ['standard' => '1d6+6+Str', 'three' => '1d4+6+Str', 'four' => '—']],
				'7' => ['eac' => 18, 'kac' => 19, 'fort' => 6, 'ref' => 6, 'will' => 10, 'hp' => 90, 'adc' => 17, 'sdc' => 17, 'ability1' => 5, 'ability2' => 4, 'ability3' => 2, 'mSkills' => 19, 'gSkills' => 14, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 13, 'low' => 11], 'ranged' => ['energy' => '1d8+7', 'kinetic' => '1d12+7'], 'melee' => ['standard' => '1d8+7+Str', 'three' => '1d4+7+Str', 'four' => '1d4+7+Str']],
				'8' => ['eac' => 19, 'kac' => 20, 'fort' => 7, 'ref' => 7, 'will' => 11, 'hp' => 105, 'adc' => 18, 'sdc' => 17, 'ability1' => 6, 'ability2' => 4, 'ability3' => 2, 'mSkills' => 21, 'gSkills' => 16, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 15, 'low' => 13], 'ranged' => ['energy' => '1d10+8', 'kinetic' => '2d6+8'], 'melee' => ['standard' => '1d12+8+Str', 'three' => '1d8+8+Str', 'four' => '1d4+8+Str']],
				'9' => ['eac' => 21, 'kac' => 22, 'fort' => 8, 'ref' => 8, 'will' => 12, 'hp' => 120, 'adc' => 18, 'sdc' => 17, 'ability1' => 6, 'ability2' => 4, 'ability3' => 3, 'mSkills' => 22, 'gSkills' => 17, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 17, 'low' => 15], 'ranged' => ['energy' => '2d6+9', 'kinetic' => '2d8+9'], 'melee' => ['standard' => '3d4+9+Str', 'three' => '1d10+9+Str', 'four' => '1d6+9+Str']],
				'10' => ['eac' => 22, 'kac' => 23, 'fort' => 9, 'ref' => 9, 'will' => 13, 'hp' => 140, 'adc' => 19, 'sdc' => 18, 'ability1' => 8, 'ability2' => 5, 'ability3' => 3, 'mSkills' => 24, 'gSkills' => 19, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 18, 'low' => 16], 'ranged' => ['energy' => '3d4+10', 'kinetic' => '2d8+10'], 'melee' => ['standard' => '2d8+10+Str', 'three' => '1d10+10+Str', 'four' => '1d8+10+Str']],
				'11' => ['eac' => 23, 'kac' => 24, 'fort' => 10, 'ref' => 10, 'will' => 14, 'hp' => 155, 'adc' => 20, 'sdc' => 18, 'ability1' => 8, 'ability2' => 5, 'ability3' => 3, 'mSkills' => 25, 'gSkills' => 20, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 19, 'low' => 17], 'ranged' => ['energy' => '2d8+11', 'kinetic' => '2d10+11'], 'melee' => ['standard' => '2d10+11+Str', 'three' => '3d4+11+Str', 'four' => '1d10+11+Str']],
				'12' => ['eac' => 25, 'kac' => 26, 'fort' => 11, 'ref' => 11, 'will' => 15, 'hp' => 170, 'adc' => 21, 'sdc' => 19, 'ability1' => 8, 'ability2' => 5, 'ability3' => 4, 'mSkills' => 27, 'gSkills' => 22, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 21, 'low' => 19], 'ranged' => ['energy' => '2d8+12', 'kinetic' => '2d10+12'], 'melee' => ['standard' => '2d12+12+Str', 'three' => '3d4+12+Str', 'four' => '1d12+12+Str']],
				'13' => ['eac' => 26, 'kac' => 27, 'fort' => 12, 'ref' => 12, 'will' => 16, 'hp' => 190, 'adc' => 21, 'sdc' => 19, 'ability1' => 8, 'ability2' => 6, 'ability3' => 4, 'mSkills' => 28, 'gSkills' => 23, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 22, 'low' => 20], 'ranged' => ['energy' => '2d10+13', 'kinetic' => '4d6+13'], 'melee' => ['standard' => '6d4+13+Str', 'three' => '3d6+13+Str', 'four' => '3d4+13+Str']],
				'14' => ['eac' => 27, 'kac' => 28, 'fort' => 12, 'ref' => 12, 'will' => 17, 'hp' => 215, 'adc' => 22, 'sdc' => 19, 'ability1' => 8, 'ability2' => 6, 'ability3' => 4, 'mSkills' => 30, 'gSkills' => 25, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 23, 'low' => 21], 'ranged' => ['energy' => '5d4+14', 'kinetic' => '4d8+14'], 'melee' => ['standard' => '6d6+14+Str', 'three' => '4d6+14+Str', 'four' => '3d6+14+Str']],
				'15' => ['eac' => 28, 'kac' => 29, 'fort' => 13, 'ref' => 13, 'will' => 18, 'hp' => 235, 'adc' => 23, 'sdc' => 20, 'ability1' => 9, 'ability2' => 7, 'ability3' => 5, 'mSkills' => 31, 'gSkills' => 26, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 24, 'low' => 22], 'ranged' => ['energy' => '4d6+15', 'kinetic' => '6d6+15'], 'melee' => ['standard' => '5d8+15+Str', 'three' => '6d4+15+Str', 'four' => '2d10+15+Str']],
				'16' => ['eac' => 29, 'kac' => 30, 'fort' => 14, 'ref' => 14, 'will' => 19, 'hp' => 255, 'adc' => 24, 'sdc' => 20, 'ability1' => 10, 'ability2' => 7, 'ability3' => 5, 'mSkills' => 33, 'gSkills' => 28, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 26, 'low' => 24], 'ranged' => ['energy' => '6d4+16', 'kinetic' => '5d8+16'], 'melee' => ['standard' => '6d8+16+Str', 'three' => '4d8+16+Str', 'four' => '3d8+16+Str']],
				'17' => ['eac' => 30, 'kac' => 31, 'fort' => 15, 'ref' => 15, 'will' => 20, 'hp' => 285, 'adc' => 24, 'sdc' => 20, 'ability1' => 11, 'ability2' => 8, 'ability3' => 5, 'mSkills' => 34, 'gSkills' => 29, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 27, 'low' => 25], 'ranged' => ['energy' => '4d8+17', 'kinetic' => '4d12+17'], 'melee' => ['standard' => '8d6+17+Str', 'three' => '3d12+17+Str', 'four' => '6d4+17+Str']],
				'18' => ['eac' => 31, 'kac' => 32, 'fort' => 16, 'ref' => 16, 'will' => 20, 'hp' => 320, 'adc' => 25, 'sdc' => 21, 'ability1' => 11, 'ability2' => 8, 'ability3' => 6, 'mSkills' => 36, 'gSkills' => 31, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 28, 'low' => 26], 'ranged' => ['energy' => '3d12+18', 'kinetic' => '8d6+18'], 'melee' => ['standard' => '8d8+18+Str', 'three' => '5d8+18+Str', 'four' => '4d8+18+Str']],
				'19' => ['eac' => 32, 'kac' => 33, 'fort' => 16, 'ref' => 16, 'will' => 21, 'hp' => 350, 'adc' => 26, 'sdc' => 22, 'ability1' => 11, 'ability2' => 9, 'ability3' => 6, 'mSkills' => 37, 'gSkills' => 32, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 29, 'low' => 27], 'ranged' => ['energy' => '5d8+19', 'kinetic' => '6d10+19'], 'melee' => ['standard' => '9d8+19+Str', 'three' => '6d8+19+Str', 'four' => '3d12+19+Str']],
				'20' => ['eac' => 34, 'kac' => 35, 'fort' => 17, 'ref' => 17, 'will' => 22, 'hp' => 395, 'adc' => 27, 'sdc' => 23, 'ability1' => 12, 'ability2' => 9, 'ability3' => 6, 'mSkills' => 39, 'gSkills' => 34, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 30, 'low' => 28], 'ranged' => ['energy' => '4d12+20', 'kinetic' => '8d8+20'], 'melee' => ['standard' => '13d6+20+Str', 'three' => '9d6+20+Str', 'four' => '5d8+20+Str']],
				'21' => ['eac' => 35, 'kac' => 36, 'fort' => 18, 'ref' => 18, 'will' => 23, 'hp' => 425, 'adc' => 27, 'sdc' => 23, 'ability1' => 12, 'ability2' => 10, 'ability3' => 7, 'mSkills' => 40, 'gSkills' => 35, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 31, 'low' => 29], 'ranged' => ['energy' => '8d6+21', 'kinetic' => '6d12+21'], 'melee' => ['standard' => '15d6+21+Str', 'three' => '10d6+21+Str', 'four' => '4d12+21+Str']],
				'22' => ['eac' => 37, 'kac' => 38, 'fort' => 18, 'ref' => 18, 'will' => 23, 'hp' => 470, 'adc' => 28, 'sdc' => 24, 'ability1' => 13, 'ability2' => 10, 'ability3' => 7, 'mSkills' => 42, 'gSkills' => 37, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 32, 'low' => 30], 'ranged' => ['energy' => '6d10+22', 'kinetic' => '8d10+22'], 'melee' => ['standard' => '17d6+22+Str', 'three' => '6d12+22+Str', 'four' => '8d6+22+Str']],
				'23' => ['eac' => 38, 'kac' => 39, 'fort' => 19, 'ref' => 19, 'will' => 24, 'hp' => 510, 'adc' => 29, 'sdc' => 25, 'ability1' => 13, 'ability2' => 11, 'ability3' => 7, 'mSkills' => 43, 'gSkills' => 38, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 33, 'low' => 31], 'ranged' => ['energy' => '8d8+23', 'kinetic' => '13d6+23'], 'melee' => ['standard' => '12d10+23+Str', 'three' => '8d10+23+Str', 'four' => '6d10+23+Str']],
				'24' => ['eac' => 40, 'kac' => 41, 'fort' => 20, 'ref' => 20, 'will' => 25, 'hp' => 550, 'adc' => 30, 'sdc' => 26, 'ability1' => 15, 'ability2' => 11, 'ability3' => 8, 'mSkills' => 45, 'gSkills' => 40, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 35, 'low' => 33], 'ranged' => ['energy' => '9d8+24', 'kinetic' => '15d6+24'], 'melee' => ['standard' => '21d6+24+Str', 'three' => '9d10+24+Str', 'four' => '8d8+24+Str']],
				'25' => ['eac' => 41, 'kac' => 42, 'fort' => 21, 'ref' => 21, 'will' => 26, 'hp' => 600, 'adc' => 30, 'sdc' => 26, 'ability1' => 15, 'ability2' => 12, 'ability3' => 8, 'mSkills' => 46, 'gSkills' => 41, 'mSkillCount' => 2, 'gSkillCount' => 1, 'attack' => ['high' => 36, 'low' => 34], 'ranged' => ['energy' => '8d10+25', 'kinetic' => '16d6+25'], 'melee' => ['standard' => '12d12+25+Str', 'three' => '15d6+25+Str', 'four' => '6d12+25+Str']]
			]
		];
		$sizes=['Fine'=>8,'Diminutive'=>4,'Tiny'=>2,'Small'=>1,'Medium'=>0,'Large'=>-1,'Huge'=>-2,'Gargantuan'=>-4,'Colossal'=>-8];
		$spaces=['Fine'=>'1/2','Diminutive'=>'1','Tiny'=>'2-1/2','Small'=>'5','Medium'=>'5','Large'=>'10','Huge'=>'15','Gargantuan'=>'20','Colossal'=>'30'];
		$sizeMod=$sizes[$size];
		$subOneXp=['1/2'=>200,'1/3'=>135];
		$xp=($customXp?$customXp:(isset($subOneXp[$cr])?$subOneXp[$cr]:($cr%2==0?400*intPow(2,$cr/2):600*intPow(2,($cr-1)/2))));
		$align=false;
		$stance=false;
		$stanceStrs=[-2=>'Opp (P)',-1=>'Opp',0=>'Und',1=>'For',2=>'For (P)'];
		if(is_string($alignment)) {
			$align = $alignment;
		}
		else {
			if(isset($alignment['alignment'])) {
				$align = $alignment['alignment'];
			}
			$s_holy = stanceAxisValue($alignment['altruism'], $alignment['humility'], $alignment['purity']);
			$s_order = stanceAxisValue($alignment['honesty'], $alignment['loyalty'], $alignment['law']);
			$s_independent = stanceAxisValue($alignment['individualism'], $alignment['knowledge'], $alignment['work']);
			$stance='bb/Stance/bb <input type="button" class="show-stance" value="Show"><ul class="stance">';
			$stance.='<li class="axis"><b>Holiness</b> '.$stanceStrs[$s_holy].'</li>';
			$stance.='<li>Altruism '.$stanceStrs[$alignment['altruism']].'</li>';
			$stance.='<li>Humility '.$stanceStrs[$alignment['humility']].'</li>';
			$stance.='<li>Purity '.$stanceStrs[$alignment['purity']].'</li>';
			$stance.='<li class="axis"><b>Order</b> '.$stanceStrs[$s_order].'</li>';
			$stance.='<li>Honesty '.$stanceStrs[$alignment['honesty']].'</li>';
			$stance.='<li>Loyalty '.$stanceStrs[$alignment['loyalty']].'</li>';
			$stance.='<li>Law '.$stanceStrs[$alignment['law']].'</li>';
			$stance.='<li class="axis"><b>Independence</b> '.$stanceStrs[$s_independent].'</li>';
			$stance.='<li>Individualism '.$stanceStrs[$alignment['individualism']].'</li>';
			$stance.='<li>Knowledge '.$stanceStrs[$alignment['knowledge']].'</li>';
			$stance.='<li>Work '.$stanceStrs[$alignment['work']].'</li>';
			$stance.='</ul>';
		}
		$stats = $arrays[$role][strval($cr)];
		$stats['scores'] = [];
		foreach($scores as $score => $value) {
			if(is_string($value)) {
				switch ($value) {
					case 'first':
						$stats['scores'][$score] = $stats['ability1'];
						break;
					case 'second':
						$stats['scores'][$score] = $stats['ability2'];
						break;
					case 'third':
						$stats['scores'][$score] = $stats['ability3'];
						break;
					default:
						$stats['scores'][$score] = 0;
						break;
				}
			}
			else {
				$stats['scores'][$score] = $value;
			}
		}
		foreach(['str','dex','con','int','wis','cha'] as $score) {
			if(!isset($stats['scores'][$score]))
				$stats['scores'][$score] = 0;
		}
		$stats['init'] = $stats['scores']['dex'];
		$skillAbilities=[
			'Acrobatics' => 'dex',
			'Athletics' => 'str',
			'Bluff' => 'cha',
			'Computers' => 'int',
			'Culture' => 'int',
			'Diplomacy' => 'cha',
			'Disguise' => 'cha',
			'Engineering' => 'int',
			'Intimidate' => 'cha',
			'Life Science' => 'int',
			'Medicine' => 'int',
			'Mysticism' => 'wis',
			'Perception' => 'wis',
			'Physical Science' => 'int',
			'Piloting' => 'dex',
			'Profession' => isset($skills['profScore'])?$skills['profScore']:'',
			'Sense Motive' => 'wis',
			'Sleight of Hand' => 'dex',
			'Stealth' => 'dex',
			'Survival' => 'wis'
		];
		$stats['skills']=[];
		if(is_array($skills)) {
			foreach($skills as $skill => $value) {
				if($skill=='profScore')
					continue;
				if(is_string($value)) {
					switch ($value) {
						case 'master':
							$stats['skills'][$skill]=max($stats['mSkills'],isset($skillAbilities[$skill])?$stats['scores'][$skillAbilities[$skill]]:-INF);
							break;
						case 'good':
							$stats['skills'][$skill]=max($stats['gSkills'],isset($skillAbilities[$skill])?$stats['scores'][$skillAbilities[$skill]]:-INF);
							break;
						default:
							$stats['skills'][$skill]=isset($skillAbilities[$skill])?$stats['scores'][$skillAbilities[$skill]]:0;
							break;
					}
				}
				else {
					$stats['skills'][$skill]=$value;
				}
			}
		}
		else {
			$matches=[];
			if(preg_match('/Perception \+?(-?[0-9]+)/', $skills, $matches))
				$stats['skills']['Perception']=intval($matches[1]);
		}
		if(!isset($stats['skills']['Perception']))
			$stats['skills']['Perception']=$stats['scores']['wis'];
		foreach($grafts as $graft) {
			foreach($graft as $stat => $mod) {
				if(is_array($mod)) {
					foreach($mod as $innerStat => $actualMod) {
						$stats[$stat][$innerStat] += $actualMod;
					}
				}
				else {
					$stats[$stat] += $mod;
				}
			}
		}
		$sections=[
			[
				'title' => 'Defense',
				'spaced' => false,
				'texts' => quick_array([
					"bb/HP/bb {$stats['hp']}",
					"bb/EAC/bb {$stats['eac']}, bb/KAC/bb {$stats['kac']}",
					sprintf('bb/Fort/bb %+d, bb/Ref/bb %+d, bb/Will/bb %+d',
						$stats['fort'],
						$stats['ref'],
						$stats['will']
					)
				])
			],
			[
				'title' => 'Offense',
				'spaced' => false,
				'texts' => quick_array([
					'bb/Speed/bb '.(is_numeric($speed)?$speed.' ft.':$speed),
					'bb/Space/bb '.$spaces[$size].' ft., bb/Reach/bb '.$reach.(is_string($reach)?'':' ft.')
				])
			],
			[
				'title' => 'Statistics',
				'spaced' => false,
				'texts' => quick_array([
					sprintf('bb/STR/bb %+d, bb/DEX/bb %+d, bb/CON/bb %+d, bb/INT/bb %+d, bb/WIS/bb %+d, bb/CHA/bb %+d',
						$stats['scores']['str']==-5?'—':$stats['scores']['str'],
						$stats['scores']['dex']==-5?'—':$stats['scores']['dex'],
						$stats['scores']['con']==-5?'—':$stats['scores']['con'],
						$stats['scores']['int']==-5?'—':$stats['scores']['int'],
						$stats['scores']['wis']==-5?'—':$stats['scores']['wis'],
						$stats['scores']['cha']==-5?'—':$stats['scores']['cha']
					)
				])
			],
			[
				'title' => 'Ecology',
				'spaced' => false,
				'texts' => quick_array([
					'bb/Environment/bb '.$enviro,
					'bb/Organization/bb '.$organiz
				])
			]
		];
		if($defAb!='')
			array_push($sections[0]['texts'], quick_format('bb/Defensive Abilities/bb '.$defAb));
		if($weak!='')
			array_push($sections[0]['texts'], quick_format('bb/Weaknesses/bb '.$weak));
		$spliceInd=1;
		foreach ($attacks as $attackSet) {
			$attackSetStr='bb/'.$attackSet['type'].'/bb ';
			$lastAttack=count($attackSet['list'])-1;
			$two=$lastAttack==1;
			foreach ($attackSet['list'] as $ind => $attack) {
				if($ind>0) {
					if($attackSet['type'] == 'Multiattack') {
						$attackSetStr.=', ';
					}
					elseif($two) {
						$attackSetStr.=' or ';
					}
					else {
						$attackSetStr.=', ';
						if($ind==$lastAttack) {
							$attackSetStr.='or ';
						}
					}
				}
				$atkDmg='';
				if(isset($attack['customDmg']))
					$atkDmg=$attack['customDmg'];
				else
					$atkDmg=$stats[$attackSet['type']=='Ranged'?'ranged':'melee'][$attack['dmg']];
				$dmgStrConstMatch=[];
				if(preg_match('/(\d+)\+str/i',$atkDmg,$dmgStrConstMatch)) {
					$atkDmg=preg_replace('/\d+\+str/i',strval(intval($dmgStrConstMatch[1])+$stats['scores']['str']),$atkDmg);
				}
				$atkExtras='';
				if(isset($attack['note']))
					$atkExtras='; '.$attack['note'];
				$attackSetStr.=sprintf('%s %+d (%s %s%s)',
					$attack['name'],
					$stats['attack'][$attack['attack']],
					$atkDmg,
					$attack['dmgType'],
					$atkExtras
				);
			}
			array_splice($sections[1]['texts'],$spliceInd,0,[quick_format($attackSetStr)]);
			$spliceInd++;
		}
		if($offAbilities!='')
			array_push($sections[1]['texts'], quick_format('bb/Offensive Abilities/bb '.$offAbilities));
		if($spelllike) {
			$lines=[sprintf('Spell-Like Abilities (CL %d%s)',
				$spelllike['level'],
				ordinalSuffix($spelllike['level'])
			)];
			foreach ($spelllike['spells'] as $spells) {
				$spellLine=sprintf('/mm/%s—',$spells['perday'].(is_string($spells['perday'])?'':'/day'));
				$first=true;
				foreach ($spells['list'] as $spell) {
					if($first) {
						$first=false;
					}
					else {
						$spellLine.=', ';
					}
					if(is_string($spell))
						$spellLine.='ii/'.$spell.'/ii';
					else {
						$spellLine.='ii/'.$spell['name'].'/ii';
						if(isset($spell['dc']) && $spell['dc'])
							$spellLine.=sprintf(' (DC %d)',$spell['level']+$stats['sdc']);
						if(isset($spell['note']))
							$spellLine.=sprintf(' (%s)',$spell['note']);
					}
				}
				array_push($lines, $spellLine);
			}
			$sections[1]['texts']=array_merge($sections[1]['texts'],quick_array($lines));
		}
		if(count($spellcast)>0) {
			foreach ($spellcast as $class) {
				$lines=[sprintf('%s Spells Known (CL %d%s; ranged %+d)',
					$class['class'],
					$class['level'],
					ordinalSuffix($class['level']),
					$stats['attack']['high']
				)];
				for($sl=12; $sl>=0; $sl--) {
					if(!isset($class['spells'][$sl]))
						continue;
					$spells=$class['spells'][$sl];
					$spellLine=sprintf('/mm/%d%s%s—',
						$sl,
						ordinalSuffix($sl),
						isset($spells['perday'])?sprintf(' (%s)',$spells['perday'].(is_string($spells['perday'])?'':'/day')):''
					);
					$first=true;
					foreach ($spells['list'] as $spell) {
						if($first) {
							$first=false;
						}
						else {
							$spellLine.=', ';
						}
						if(is_string($spell))
							$spellLine.='ii/'.$spell.'/ii';
						else {
							$spellLine.='ii/'.$spell['name'].'/ii';
							if(isset($spell['count']) && $spell['count']>1)
								$spellLine.=' x'.$spell['count'];
							if(isset($spell['dc']) && $spell['dc'])
								$spellLine.=sprintf(' (DC %d)',$sl+$stats['sdc']);
							if(isset($spell['note']))
								$spellLine.=sprintf(' (%s)',$spell['note']);
						}
					}
					array_push($lines, $spellLine);
				}
				$sections[1]['texts']=array_merge($sections[1]['texts'],quick_array($lines));
			}
		}
		if($spellnote!='')
			array_push($sections[1]['texts'], quick_format($spellnote));
		if($skills!='') {
			$skillStr='bb/Skills/bb ';
			if(is_string($skills)) {
				$skillStr.=$skills;
			}
			else {
				$first=true;
				foreach($stats['skills'] as $skill => $mod) {
					if($first)
						$first=false;
					else
						$skillStr.=', ';
					$skillStr.=sprintf('%s %+d',$skill,$mod);
				}
			}
			array_push($sections[2]['texts'], quick_format($skillStr));
		}
		if(is_string($lang)) {
			if($lang!='')
				array_push($sections[2]['texts'], quick_format('Languages '.$lang));
		}
		else {
			if(count($lang)>0) {
				$langStr='bb/Languages/bb ';
				$first=true;
				foreach ($lang as $languge) {
					if($first) {
						$first=false;
					}
					else {
						$langStr.=', ';
					}
					$langStr.=$languge;
				}
				array_push($sections[2]['texts'], quick_format($langStr));
			}
		}
		if(is_string($other)) {
			if($other!='')
				array_push($sections[2]['texts'], quick_format('bb/Other Abilities/bb '.$other));
		}
		else {
			if(count($other)>0) {
				$otherStr='bb/Other Abilities/bb ';
				$first=true;
				foreach ($other as $ability) {
					if($first) {
						$first=false;
					}
					else {
						$otherStr.=', ';
					}
					$otherStr.=$ability;
				}
				array_push($sections[2]['texts'], quick_format($otherStr));
			}
		}
		if($gear!='')
			array_push($sections[2]['texts'], quick_format('bb/Gear/bb '.$gear));
		if(count($specAb)>0) {
			$section=[
				'title' => 'Special Abilities',
				'spaced' => true,
				'texts' => []
			];
			foreach ($specAb as $specAbility) {
				$specAbilityLines=quick_array($specAbility['desc']);
				for ($i=0; $i < count($specAbilityLines); $i++) { 
					$specAbilityLines[$i]=preg_replace('/\$adc\$/',strval($stats['adc']),$specAbilityLines[$i]);
				}
				if(isset($specAbility['type']) && $specAbility['type']!==false)
					array_push($section['texts'], quick_format("bb/{$specAbility['name']}/bb ({$specAbility['type']}) {$specAbilityLines[0]}"));
				else
					array_push($section['texts'], quick_format("bb/{$specAbility['name']}/bb {$specAbilityLines[0]}"));
				$first=true;
				foreach ($specAbilityLines as $specAbilityLine) {
					if($first)
						$first=false;
					else
						array_push($section['texts'], $specAbilityLine);
				}
			}
			array_push($sections, $section);
		}
		if($desc!='')
			array_push($sections, [
				'title' => 'Description',
				'spaced' => false,
				'texts' => quick_array($desc)
			]);
		$vitals=[
			'bb/XP/bb '.number_format($xp),
			($align?$align.' ':'')."{$size} {$type}",
			sprintf('bb/Init/bb %+d',$stats['init']).($senses!=''?'; bb/Senses/bb '.$senses:'').sprintf('; bb/Perception/bb %+d',$stats['skills']['Perception'])
		];
		if($stance)
			array_splice($vitals, 2, 0, $stance);
		if($race!='')
			array_splice($vitals,1,0,[$race]);
		if($aura!='')
			array_push($vitals,'bb/Aura/bb '.$aura);
		blockSF($name,'monster-header',[quick_format('ii/'.$lore.'/ii')]);
		blockSF(
			quick_format(($name2?$name2:$name).' bb/CR '.$cr.'/bb'),
			'monster',
			quick_array($vitals),
			false,
			$sections
		);
	}
	function allomancy($metal='', $user=false, $categories=[], $burnTime='', $desc='', $flare='', $savantism=false) {
		$prop=[
			'bb/Burn Time/bb '.$burnTime
		];
		if($user)
			array_push($prop, 'bb/User/bb '.$user);
		if($categories!==false && count($categories)>0) {
			$catLine='';
			$first=true;
			foreach ($categories as $category => $entry) {
				if($first)
					$first=false;
				else
					$catLine.='; ';
				$catLine.='bb/'.$category.'/bb '.$entry;
			}
			array_push($prop, $catLine);
		}
		$sections=[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array($desc)
			],
			[
				'title' => 'Flare',
				'spaced' => true,
				'texts' => quick_array($flare)
			]
		];
		if($savantism!==false) {
			$savantismNote='';
			$savantRows=[];
			$savantRowsNoThird=[];
			$hasDrawbacks=false;
			foreach ($savantism as $points => $effects) {
				if($points==='note') {
					$savantismNote='Note: '.$effects;
					continue;
				}
				if($points==='special') {
					$savantismNote='bb/Special/bb '.$effects;
					continue;
				}
				if($effects['draw']!=='' && $effects['draw']!==false)
					$hasDrawbacks=true;
				array_push($savantRows, [$points.'',$effects['effect'],$effects['draw']]);
				array_push($savantRowsNoThird, [$points.'',$effects['effect']]);
			}
			$texts=[];
			if($hasDrawbacks)
				array_push($texts,sTable(['Points','Effect(s) While Using','Drawback'],$savantRows,true,false,false));
			else
				array_push($texts,sTable(['Points','Effect(s) While Using'],$savantRowsNoThird,true,false,false));
			if($savantismNote!=='')
				array_push($texts, $savantismNote);
			array_push($sections, ['title'=>'Allomantic '.$metal.' Savantism Effects','spaced'=>false,'texts'=>quick_array($texts)]);
		}
		block(
			'Allomantic '.$metal,
			'allomancy',
			quick_array($prop),
			false,
			$sections
		);
	}
	function feruchemy($metal='', $user=false, $categories=[], $burnTime='', $desc='', $increments=['columns'=>[],'rows'=>[]], $savantism=false) {
		$prop=[
			'bb/Burn Rate/bb '.$burnTime
		];
		if($user)
			array_push($prop, 'bb/User/bb '.$user);
		if($categories!==false && count($categories)>0) {
			$catLine='';
			$first=true;
			foreach ($categories as $category => $entry) {
				if($first)
					$first=false;
				else
					$catLine.='; ';
				$catLine.='bb/'.$category.'/bb '.$entry;
			}
			array_push($prop, $catLine);
		}
		$sections=[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array($desc)
			],
			[
				'title' => $metal.' Increments',
				'spaced' => true,
				'texts' => quick_array(sTable(array_merge(['Increment'],$increments['columns']),$increments['rows'],true,false,false))
			]
		];
		if($savantism!==false) {
			$savantismNote='';
			$savantRows=[];
			$savantRowsNoThird=[];
			$hasDrawbacks=false;
			foreach ($savantism as $points => $effects) {
				if($points==='note') {
					$savantismNote='Note: '.$effects;
					continue;
				}
				if($points==='special') {
					$savantismNote='bb/Special/bb '.$effects;
					continue;
				}
				if($effects['draw']!=='' && $effects['draw']!==false)
					$hasDrawbacks=true;
				array_push($savantRows, [$points.'',$effects['effect'],$effects['draw']]);
				array_push($savantRowsNoThird, [$points.'',$effects['effect']]);
			}
			$texts=[];
			if($hasDrawbacks)
				array_push($texts,sTable(['Points','Effect(s) While Using','Drawback'],$savantRows,true,false,false));
			else
				array_push($texts,sTable(['Points','Effect(s) While Using'],$savantRowsNoThird,true,false,false));
			if($savantismNote!=='')
				array_push($texts, $savantismNote);
			array_push($sections, ['title'=>'Feruchemical '.$metal.' Savantism Effects','spaced'=>false,'texts'=>quick_array($texts)]);
		}
		block(
			'Feruchemical '.$metal,
			'feruchemy',
			quick_array($prop),
			false,
			$sections
		);
	}
	function sTable($headers, $rows, $horizontal=true, $expand=true, $allowSort=true, $inline=false) {
		$classes='';
		if($expand)
			$classes.=($classes===''?'':' ').'expand';
		if(!$horizontal)
			$classes.=($classes===''?'':' ').'vertical';
		if(!$allowSort)
			$classes.=($classes===''?'':' ').'no-sort';
		if($inline)
			$classes.=($classes===''?'':' ').'inline';
		$str='<div class="table-wrapper'.($classes!==''?' '.$classes:'').'"><table'.($classes!==''?' class="'.$classes.'"':'').'>';
		if($horizontal) {
			$headerCount=count($headers);
			$str .= '<tr>';
			for($i=0; $i<$headerCount; $i++) {
				$str .= "<th>{$headers[$i]}</th>";
			}
			$str .= '</tr>';
			$rowCount=count($rows);
			for($i=0; $i<$rowCount; $i++) {
				$colCount=count($rows[$i]);
				$str .= '<tr>';
				for($j=0; $j<$colCount; $j++) {
					if($j==0 && isset($rows[$i]['link'])) {
						$str .= "<td><a href=\"{$rows[$i]['link']}\">{$rows[$i][$j]}</a></td>";
						$colCount--;
					}
					else
						$str .= "<td>{$rows[$i][$j]}</td>";
				}
				$str .= '</tr>';
			}
		}
		else {
			$rowCount=count($rows);
			$headerCount=count($headers);
			$fullCount=max($rowCount,$headerCount);
			for($i=0; $i<$fullCount; $i++) {
				$str .= '<tr>';
				if($i<$headerCount) {
					$str .= "<th>{$headers[$i]}</th>";
				}
				if($i<$rowCount) {
					$colCount=count($rows[$i]);
					for($j=0; $j<$colCount; $j++) {
						if($j==0 && isset($rows[$i]['link'])) {
							$str .= "<td><a href=\"{$rows[$i]['link']}\">{$rows[$i][$j]}</a></td>";
							$colCount--;
						}
						else
							$str .= "<td>{$rows[$i][$j]}</td>";
					}
				}
				$str .= '</tr>';
			}
		}
		$str .= '</table></div>';
		return $str;
	}
	function table($headers, $rows, $horizontal=true, $expand=true, $allowSort=true, $inline=false) {
		echo sTable($headers, $rows, $horizontal, $expand, $allowSort, $inline);
	}
	function labeledSTable($label ,$headers, $rows, $horizontal=true, $expand=true, $allowSort=true, $inline=false) {
		return '<p class="table-label'.($expand?' expand':'').'">'.$label.'</p>'.sTable($headers, $rows, $horizontal=true, $expand, $allowSort, $inline);
	}
	function labeledTable($label ,$headers, $rows, $horizontal=true, $expand=true, $allowSort=true, $inline=false) {
		echo labeledSTable($label ,$headers, $rows, $horizontal, $expand, $allowSort, $inline);
	}
	function contents($items, $custom_title=false, $primary=true) {
		echo '<nav class="to-contents"'.($primary ? ' id="top"' : '').'>';
		echo '<div class="toc-title">'.($custom_title ? $custom_title : 'Contents').'</div>';
		echo '<ul class="toc-contents">';

		$treeDepth=0;
		$treePath=[$items];
		$treeCounts=[count($treePath[$treeDepth])];
		$treeIndicies=[0];

		$sanity=1000;
		while($treeDepth>=0) {
			if($sanity<1) {
				echo '<p>Loop has gone insane after 1000 iterations.</p>';
				break;
			}
			if($treeIndicies[$treeDepth]<$treeCounts[$treeDepth]) {
				$ptr=$treePath[$treeDepth][$treeIndicies[$treeDepth]];
				if(is_string($ptr)) {
					echo '<li><a class="toc-label" href="#block-'.str_replace(' ','-',$ptr).'">'.$ptr.'</a>';
					$treeIndicies[$treeDepth]++;
				}
				else {
					$refId = isset($ptr['id']) ? $ptr['id'] : 'block-'.$ptr['name'];
					echo '<li><a class="toc-label" href="#'.$refId.'">'.$ptr['name'].'</a>';
					if(isset($ptr['nodes'])) {
						$treeDepth++;
						$treePath[$treeDepth]=$ptr['nodes'];
						$treeCounts[$treeDepth]=count($treePath[$treeDepth]);
						$treeIndicies[$treeDepth]=0;
						echo '<ul>';
					}
					else {
						echo '</li>';
						$treeIndicies[$treeDepth]++;
					}
				}
			}
			else {
				echo '</ul></li>';
				unset($treePath[$treeDepth]);
				unset($treeIndicies[$treeDepth]);
				unset($treeCounts[$treeDepth]);
				$treeDepth--;
				if($treeDepth>=0)
					$treeIndicies[$treeDepth]++;
			}
			$sanity--;
		}
		echo '</ul></nav>';
	}
	function prices_IDec2I(&$price) {
		$price['I']='0x'.strtoupper(dechex($price['IDec']));
	}
	function prices_I2IDec(&$price) {
		if(!str_starts_with($price['I'],'0x'))
			$price['I']='0x'.$price['I'];
		$price['IDec']=hexdec(substr($price['I'],2));
	}
	function prices_IDec2NBPDec(&$price) {
		$price['NBPDec']=round($price['IDec']/256);
	}
	function prices_NBPDec2IDec(&$price) {
		$price['IDec']=$price['NBPDec']*256;
	}
	function prices_NBP2NBPDec(&$price) {
		if(!str_starts_with($price['NBP'],'0x'))
			$price['NBP']='0x'.$price['NBP'];
		$price['NBPDec']=hexdec(substr($price['NBP'],2));
	}
	function prices_gp2I(&$price) {
		$price['IDec']=round($price['gp']*0.96)/16;
		$price['I']='0x'.strtoupper(dechex($price['IDec']));
	}
	function prices_IDec2gp(&$price) {
		$price['gp']=round($price['IDec']*16/0.96);
	}
	function prices_BP2gp(&$price) {
		$price['gp']=$price['BP']*4000;
	}
	function prices_gp2BP(&$price) {
		$price['BP']=round($price['gp']/4000);
	}
	function prices_NBPDec2NBP(&$price) {
		$price['NBP']='0x'.strtoupper(dechex($price['NBPDec']));
	}
	function fillOutNarmenPrices(&$price) {
		if(!isset($price['I'])) {
			if(isset($price['IDec'])) {
				prices_IDec2I($price);
			}
			elseif(isset($price['NBPDec'])) {
				prices_NBPDec2IDec($price);
				prices_IDec2I($price);
			}
			elseif(isset($price['NBP'])) {
				prices_NBP2NBPDec($price);
				prices_NBPDec2IDec($price);
				prices_IDec2I($price);
			}
			elseif(isset($price['gp'])) {
				prices_gp2I($price);
			}
			elseif(isset($price['BP'])) {
				prices_BP2gp($price);
				prices_gp2I($price);
			}
		}
		if(!isset($price['NBP'])) {
			if(isset($price['NBPDec'])) {
				prices_NBPDec2NBP($price);
			}
			elseif(isset($price['IDec'])) {
				prices_IDec2NBPDec($price);
				prices_NBPDec2NBP($price);
			}
			elseif(isset($price['I'])) {
				prices_I2IDec($price);
				prices_IDec2NBPDec($price);
				prices_NBPDec2NBP($price);
			}
		}
		if(!isset($price['gp'])) {
			if(isset($price['BP'])) {
				prices_BP2gp($price);
			}
			elseif(isset($price['IDec'])) {
				prices_IDec2gp($price);
			}
			elseif(isset($price['I'])) {
				prices_I2IDec($price);
				prices_IDec2gp($price);
			}
		}
		if(!isset($price['BP'])) {
			if(isset($price['gp'])) {
				prices_gp2BP($price);
			}
		}
	}
	function formatLargeHexNumber($str) {
		if(str_starts_with($str,'0x'))
			$str=substr($str,2);
		if(strlen($str)>4)
			return '0x'.substr(formatLargeHexNumber(substr($str,0,-4)),2).','.substr($str,-4);
		else
			return '0x'.$str;
	}
	function narmenPriceToStrRef(&$price) {
		fillOutNarmenPrices($price);
		$str='';
		$noSep=true;
		if(isset($price['gp'])) {
			$str=number_format($price['gp']).' gp / '.number_format($price['BP']).' BP / '.formatLargeHexNumber($price['I']).' I / '.formatLargeHexNumber($price['NBP']).' NBP';
			$noSep=false;
		}
		if(isset($price['labeled'])) {
			foreach ($price['labeled'] as $label => $labeledPrice) {
				if($noSep) {
					$noSep=false;
				}
				else {
					$str.=', ';
				}
				$str.=narmenPriceToStr($labeledPrice).' ('.$label.')';
			}
		}
		return $str;
	}
	function narmenPriceToStr($price) {
		return narmenPriceToStrRef($price);
	}
	function narmenPriceToTableRef(&$price) {
		$headers=[];
		$rows=[];
		fillOutNarmenPrices($price);
		if(isset($price['gp'])) {
			if(isset($price['labeled']))
				array_push($headers,'');
			array_push($rows,[number_format($price['gp']).' gp', number_format($price['BP']).' BP', formatLargeHexNumber($price['I']).' I', formatLargeHexNumber($price['NBP']).' NBP']);
		}
		if(isset($price['labeled'])) {
			foreach ($price['labeled'] as $label => $labeledPrice) {
				fillOutNarmenPrices($labeledPrice);
				array_push($headers,$label);
				array_push($rows,[number_format($labeledPrice['gp']).' gp', number_format($labeledPrice['BP']).' BP', formatLargeHexNumber($labeledPrice['I']).' I', formatLargeHexNumber($labeledPrice['NBP']).' NBP']);
			}
		}
		return sTable(
			$headers, 
			$rows, 
			false, 
			false, 
			false,
			true
		);
	}
	function narmenPriceToTable($price) {
		return narmenPriceToTableRef($price);
	}
?>