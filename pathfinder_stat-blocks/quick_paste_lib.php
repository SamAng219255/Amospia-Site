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
		}
		return quick_format($arr);
	}
	function block($name="", $type="", $texts=[], $spaced=false, $sections=[]) {
		echo '<div class="block '.$type.'" id="block-'.str_replace(' ', '-', $name).'">';
		echo '<div class="block-title">'.$name.'</div>';
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
?>