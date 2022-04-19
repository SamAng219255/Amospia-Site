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
				$str=preg_replace('/as\/(.+?)\|(.+?)\|/', '<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'#block-'.str_replace(' ','-',$matches[2][$ind]).'" target="_blank">', $str, 1);
				$str=preg_replace('/ ?\/as/', '</a>', $str, 1);
			}
		}
		$matches=[];
		if(preg_match_all('/ab\/(.+?)\|(.+?)\|/', $str, $matches)) {
			foreach ($matches[1] as $ind=>$match) {
				$entry=$pages['entries'][$match];
				$str=preg_replace('/ab\/(.+?)\|(.+?)\|/', '<a href="'.$pages['origin'].$entry['directory'].$entry['file_name'].'#section-'.str_replace(' ','-',$matches[2][$ind]).'" target="_blank">', $str, 1);
				$str=preg_replace('/ ?\/ab/', '</a>', $str, 1);
			}
		}
	}
	function quick_format_string($subject) {
		$str=$subject;
		$str=preg_replace('/ ?\/bb/', '</b>', $str);
		$str=preg_replace('/bb\/ ?/', '<b>', $str);
		$str=preg_replace('/ ?\/ii/', '</i>', $str);
		$str=preg_replace('/ii\/ ?/', '<i>', $str);
		$str=preg_replace('/ ?\/uu/', '</u>', $str);
		$str=preg_replace('/uu\/ ?/', '<u>', $str);
		$str=preg_replace('/ ?\/ss/', '</sup>', $str);
		$str=preg_replace('/ss\/ ?/', '<sup>', $str);
		$str=preg_replace('/ ?\/__/', '</sub>', $str);
		$str=preg_replace('/__\/ ?/', '<sub>', $str);
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
			$arr[$i]=trim($arr[$i]);
			$temp=$arr[$i];
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
			$arr[$i]=$head.$temp.$foot;
		}
		return quick_format($arr);
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
	function block($name='', $type='', $texts=[], $spaced=false, $sections=[]) {
		echo '<div class="block '.$type.'" id="block-'.str_replace(' ', '-', $name).'">';
		echo '<div class="block-title">'.$name.'<a href="#" class="goto-top">Back to Top</a></div>';
		$textCount=count($texts);
		for($i=0; $i<$textCount; $i++) {
			echo '<div class="p'.($spaced ? ' spaced' : '').'">'.$texts[$i].'</div>';
		}
		$sectionCount=count($sections);
		for($i=0; $i<$sectionCount; $i++) {
			echo '<div class="block-section">';
			echo '<div class="block-section-title">'.$sections[$i]['title'].'</div>';
			$sectionTextCount=count($sections[$i]['texts']);
			for($j=0; $j<$sectionTextCount; $j++) {
				echo '<div class="p'.($sections[$i]['spaced'] ? ' spaced' : '').'">'.$sections[$i]['texts'][$j].'</div>';
			}
			echo '</div>';
		}
		echo '</div>';
	}
	function block2($name='', $type='', $level=false, $traits=[], $texts=[], $spaced=false, $sections=[]) {
		echo '<div class="block block2 '.$type.'" id="block-'.str_replace(' ', '-', $name).'">';
		echo '<div class="block-title">'.$name.'&nbsp;<span class="level-label">'.$type.' '.($level===false?'':$level).'</span></div>';
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
		echo '</div>';
	}
	function blockSF($name='', $type='', $texts=[], $spaced=false, $sections=[], $anchorSections=true) {
		echo '<div class="block block-sf '.$type.'" id="block-'.str_replace(' ', '-', $name).'">';
		echo '<div class="block-title">'.$name.'<a href="#" class="goto-top">Back to Top</a></div>';
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
		echo '</div>';
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
	function magicBuildingBlockAuto($name, $cl, $price, $description, $isArtifact, $extra) {
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
			(is_string($cl)?'Universal':($cl<6 ? "Faint" : ($cl<12 ? "Moderate" : ($cl<21 ? "Strong" : "Overwhelming"))).' Universal'),
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
				"texts" => quick_format($description)
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
			is_array($description) ? $description : explode("\n", $description)
		);
	}
	function raceBlock($name, $description, $raceTraits, $subraces=false, $traitsSections=false) {
		block($name, 'race-desc', quick_array($description), true);
		if($traitsSections)
			block("{$name} Racial Traits", 'race-traits', quick_array($raceTraits), false, $traitsSections);
		else
			block("{$name} Racial Traits", 'race-traits', quick_array($raceTraits));
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
	function feat($name, $desc, $benefit, $prereq=false, $special=false) {
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
			true
		);
	}
	function racialFeats($race, $feats) {
		echo '<div class="block racial-feats" id="block-Racial-Feats">';
		echo '<div class="block-title">Racial Feats</div><div class="interior">';
		foreach ($feats as $feat) {
			feat($feat['name'],$feat['desc'],$feat['benefit'],$race.', '.$feat['prereq'],$feat['special']);
		}
		echo '</div></div>';
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
				for($sl=10; $sl>=0; $sl--) {
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
				$first=true;
				foreach ($skills as $skill) {
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
				array_push($sections[2]['texts'], quick_format($skillStr));
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
				array_push($section['texts'], quick_format("bb/{$specAbility['name']}/bb ({$specAbility['type']}) {$specAbilityLines[0]}"));
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
			"{$alignment} {$size} {$type}",
			sprintf('bb/Init/bb %+d',$statMods['dex']+$initMod).($mythInit?' ss/M/ss':'').($senses!=''?'; bb/Senses/bb '.$senses:'').sprintf('; bb/Perception/bb %+d',$perc)
		];
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
	function spellBlockAuto($name, $school, $descriptors=[], $levels=['wizard'=>0], $components=['V'=>0,'S'=>0,'M'=>0,'F'=>0,'DF'=>0], $time='1 standard action', $range='Close', $target=false, $effect=false, $area=false, $duration='instantaneous', $save='none', $sr=false, $desc='') {
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
		block(
			$name,
			'spell',
			quick_array([
				sprintf(
					'bb/School/bb %s%s; bb/Level/bb %s',
					$school,
					$descriptorTxt,
					$levelTxt
				)
			]),
			false,
			[
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
		);
	}
	function advAlchemyBlock($name, $form, $descriptors, $level, $additional, $duration, $save, $desc) {
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
		array_push($properties,'bb/Duration/bb '.$duration);
		array_push($properties,'bb/Saving Throw/bb '.$save);
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
	function advAlchemySimpleBlock($name, $form, $descriptors, $level, $duration, $save, $desc) {
		advAlchemyBlock($name, $form, $descriptors, $level, [], $duration, $save, $desc);
	}
	function advAlchemyActivatedBlock($name, $descriptors, $level, $activationTime, $duration, $save, $desc) {
		advAlchemyBlock($name, 'Activated', $descriptors, $level, ['Activation Time' => $activationTime], $duration, $save, $desc);
	}
	function advAlchemyAppliedBlock($name, $descriptors, $level, $applicationTime, $duration, $save, $desc) {
		advAlchemyBlock($name, 'Applied', $descriptors, $level, ['Activation Time' => $applicationTime], $duration, $save, $desc);
	}
	function advAlchemyRocketBlock($name, $descriptors, $level, $ignitionTime, $rangeIncr, $maxRange, $duration, $save, $desc) {
		advAlchemyBlock($name, 'Rocket', $descriptors, $level, ['Activation Time' => $ignitionTime, ['Range Increment' => $rangeIncr, 'Max Range' => $maxRange]], $duration, $save, $desc);
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
	function sTable($headers, $rows, $horizontal=true, $expand=true, $allowSort=true, $inline=true) {
		$classes='';
		if($expand)
			$classes.=($classes===''?'':' ').'expand';
		if(!$horizontal)
			$classes.=($classes===''?'':' ').'vertical';
		if(!$allowSort)
			$classes.=($classes===''?'':' ').'no-sort';
		if($inline)
			$classes.=($classes===''?'':' ').'inline';
		$str='<table'.($classes!==''?' class="'.$classes.'"':'').'>';
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
		$str .= '</table>';
		return $str;
	}
	function table($headers, $rows, $horizontal=true, $expand=true, $allowSort=true, $inline=true) {
		echo sTable($headers, $rows, $horizontal, $expand, $allowSort, $inline);
	}
	function contents($items, $custom_title=false, $primary=true) {
		echo '<div class="to-contents"'.($primary ? ' id="top"' : '').'>';
		echo '<div class="toc-title">'.($custom_title ? $custom_title : 'Contents').'</div>';
		echo '<ul class="toc-contents">';

		$treeDepth=0;
		$treePath=[$items];
		$treeCounts=[count($treePath[$treeDepth])];
		$treeIndicies=[0];

		$sanity=100;
		while($treeDepth>=0) {
			if($sanity<1) {
				echo '<p>Loop has gone insane after 100 iterations.</p>';
				break;
			}
			if($treeIndicies[$treeDepth]<$treeCounts[$treeDepth]) {
				$ptr=$treePath[$treeDepth][$treeIndicies[$treeDepth]];
				if(is_string($ptr)) {
					echo '<li><a class="toc-label" href="#block-'.str_replace(' ','-',$ptr).'">'.$ptr.'</a>';
					$treeIndicies[$treeDepth]++;
				}
				else {
					echo '<li><a class="toc-label" href="#'.$ptr['id'].'">'.$ptr['name'].'</a>';
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
		echo '</ul></div>';
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
		$price['gp']=$price['BP']*2000;
	}
	function prices_gp2BP(&$price) {
		$price['BP']=round($price['gp']/2000);
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