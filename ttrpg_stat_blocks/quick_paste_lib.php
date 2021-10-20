<?php
	$dashes=['-','–','—'];
	function array_append(&$arr,$elements) {
		foreach($elements as $element) {
			array_push($arr,$element);
		}
	}
	function quick_format($subject) {
		$str=$subject;
		$str=str_replace('/bb', '</b>', $str);
		$str=str_replace('bb/', '<b>', $str);
		$str=str_replace('/ii', '</i>', $str);
		$str=str_replace('ii/', '<i>', $str);
		$str=str_replace('/uu', '</u>', $str);
		$str=str_replace('uu/', '<u>', $str);
		$str=str_replace('/ss', '</sup>', $str);
		$str=str_replace('ss/', '<sup>', $str);
		$str=str_replace('/__', '</sub>', $str);
		$str=str_replace('__/', '<sub>', $str);
		$str=str_replace('/fa/', '<img src="https://2e.aonprd.com/Images/Actions/FreeAction.png" alt="Free Action" class="action-img">', $str);
		$str=str_replace('/ra/', '<img src="https://2e.aonprd.com/Images/Actions/Reaction.png" alt="Rection" class="action-img">', $str);
		$str=str_replace('/1a/', '<img src="https://2e.aonprd.com/Images/Actions/OneAction.png" alt="One Action" class="action-img">', $str);
		$str=str_replace('/2a/', '<img src="https://2e.aonprd.com/Images/Actions/TwoActions.png" alt="Two Actions" class="action-img">', $str);
		$str=str_replace('/3a/', '<img src="https://2e.aonprd.com/Images/Actions/ThreeActions.png" alt="Three Actions" class="action-img">', $str);
		$str=str_replace('/fl/', '<img src="https://2e.aonprd.com/Images/Actions/FreeAction_I.png" alt="Free Action" class="action-img">', $str);
		$str=str_replace('/rl/', '<img src="https://2e.aonprd.com/Images/Actions/Reaction_I.png" alt="Rection" class="action-img">', $str);
		$str=str_replace('/1l/', '<img src="https://2e.aonprd.com/Images/Actions/OneAction_I.png" alt="One Action" class="action-img">', $str);
		$str=str_replace('/2l/', '<img src="https://2e.aonprd.com/Images/Actions/TwoActions_I.png" alt="Two Actions" class="action-img">', $str);
		$str=str_replace('/3l/', '<img src="https://2e.aonprd.com/Images/Actions/ThreeActions_I.png" alt="Three Actions" class="action-img">', $str);
		$str=str_replace('/qq', '</span>', $str);
		$str=str_replace('qq/', '<span class="trait">', $str);
		$str=str_replace('/qb', '</span>', $str);
		$str=str_replace('qb/', '<span class="trait trait-blue">', $str);
		$str=str_replace('/qo', '</span>', $str);
		$str=str_replace('qo/', '<span class="trait trait-orange">', $str);
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
			if(/*str_starts_with($arr[$i],'/mm/')*/substr($arr[$i], 0, 4)=='/mm/') {
				$arr[$i]='<span class="inset">'.substr($arr[$i],4).'</span>';
			}
			if(/*str_starts_with($arr[$i],'/ee/')*/substr($arr[$i], 0, 4)=='/ee/') {
				$arr[$i]='<span class="enlarged">'.substr($arr[$i],4).'</span>';
			}
			if(/*str_starts_with($arr[$i],'/rr/')*/substr($arr[$i], 0, 4)=='/rr/') {
				$arr[$i]='<span class="reduced">'.substr($arr[$i],4).'</span>';
			}
			if(substr($arr[$i], 0, 4)=='/tt/') {
				$arr[$i]='<span class="subtitle">'.substr($arr[$i],4).'</span>';
			}
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
	function block($name="", $type="", $texts=[], $spaced=false, $sections=[]) {
		echo '<div class="block '.$type.'" id="block-'.str_replace(' ', '-', $name).'">';
		echo '<div class="block-title">'.$name.'<a href="#" class="goto-top">Back to Top</a></div>';
		$textCount=count($texts);
		for($i=0; $i<$textCount; $i++) {
			echo '<p'.($spaced ? ' class="spaced"' : '').'>'.$texts[$i].'</p>';
		}
		$sectionCount=count($sections);
		for($i=0; $i<$sectionCount; $i++) {
			echo '<div class="block-section">';
			echo '<div class="block-section-title">'.$sections[$i]['title'].'</div>';
			$sectionTextCount=count($sections[$i]['texts']);
			for($j=0; $j<$sectionTextCount; $j++) {
				echo '<p'.($sections[$i]['spaced'] ? ' class="spaced"' : '').'>'.$sections[$i]['texts'][$j].'</p>';
			}
			echo '</div>';
		}
		echo '</div>';
	}
	function block2($name="", $type="", $level=false, $traits=[], $texts=[], $spaced=false, $sections=[]) {
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
				echo '<p'.($spaced ? ' class="spaced"' : '').'>'.$text.'</p>';
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
				echo '<p'.($sections[$i]['spaced'] ? ' class="spaced"' : '').'>'.quick_format($text).'</p>';
			}
			echo '</div>';
		}
		echo '</div>';
	}
	function magicItemBlock($name, $aura, $cl, $slot, $price, $weight, $description, $construction, $destruction) {
		$sections=[
			[
				"title" => "Description",
				"spaced" => false,
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
		array_append($description, quick_array($loreDesc));
		array_append($description, quick_array("Physical Description: ".$physDesc));
		array_append($description, quick_array("Society: ".$society));
		array_append($description, quick_array("Relations: ".$relations));
		array_append($description, quick_array("Alignment and Religion: ".$alignRelig));
		array_append($description, quick_array("Adventurers: ".$adventurers));
		array_append($description, quick_array("Male Names: ".$maleNames));
		array_append($description, quick_array("Female Names: ".$femaleNames));
		$statStr="";
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
	function race2eBlock($name, $typeTrait, $loreDesc, $youmight, $othersprobably, $physDesc, $society, $alignRelig, $adventurers, $hitpoints, $size, $speed, $boosts, $flaws, $languages, $racetraits) {
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
			[$name, $typeTrait],
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
					],
					[
						"title" => "Ability Flaw(s)",
						"spaced" => false,
						"texts" => quick_array_explode($flaws, ', ')
					],
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
	function sTable($headers, $rows, $horizontal=true) {
		$str='<table>';
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
						$str .= "<td>{$rows[$i][$j]}</td>";
					}
				}
				$str .= '</tr>';
			}
		}
		$str .= '</table>';
		return $str;
	}
	function table($headers, $rows, $horizontal=true) {
		echo sTable($headers, $rows, $horizontal);
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
?>