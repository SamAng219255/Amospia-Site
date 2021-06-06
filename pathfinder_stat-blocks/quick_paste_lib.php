<?php
	$dashes=['-','–','—'];
	function quick_format($subject) {
		$str=$subject;
		$str=str_replace('/bb', '</b>', $str);
		$str=str_replace('bb/', '<b>', $str);
		$str=str_replace('/ii', '</i>', $str);
		$str=str_replace('ii/', '<i>', $str);
		$str=str_replace('/uu', '</u>', $str);
		$str=str_replace('uu/', '<u>', $str);
		return $str;
	}
	function quick_array($subject) {
		$arr=[];
		if(is_array($subject)) {
			$arr=$subject;
		}
		else {
			$arr=explode("\n",$subject);
		}

		$lineCount=count($arr);
		for($i=0; $i<$lineCount; $i++) {
			if(/*str_starts_with($arr[$i],'/mm/')*/substr($arr[$i], 0, 4)=='/mm/') {
				$arr[$i]='<span class="inset">'.substr($arr[$i],4).'</span>';
			}
			if(/*str_starts_with($arr[$i],'/ee/')*/substr($arr[$i], 0, 4)=='/ee/') {
				$arr[$i]='<span class="enlarged">'.substr($arr[$i],4).'</span>';
			}
		}
		return quick_format($arr);
	}
	function block($name, $type, $texts, $spaced, $sections) {
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
			is_array($description) ? $description : explode("\n", $description),
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
	function table($headers, $rows, $horizontal=true) {
		echo '<table>';
		if($horizontal) {
			$headerCount=count($headers);
			echo '<tr>';
			for($i=0; $i<$headerCount; $i++) {
				echo "<th>{$headers[$i]}</th>";
			}
			echo '</tr>';
			$rowCount=count($rows);
			for($i=0; $i<$rowCount; $i++) {
				$colCount=count($rows[$i]);
				echo '<tr>';
				for($j=0; $j<$colCount; $j++) {
					echo "<td>{$rows[$i][$j]}</td>";
				}
				echo '</tr>';
			}
		}
		else {
			$rowCount=count($rows);
			$headerCount=count($headers);
			$fullCount=max($rowCount,$headerCount);
			for($i=0; $i<$fullCount; $i++) {
				echo '<tr>';
				if($i<$headerCount) {
					echo "<th>{$headers[$i]}</th>";
				}
				if($i<$rowCount) {
					$colCount=count($rows[$i]);
					for($j=0; $j<$colCount; $j++) {
						echo "<td>{$rows[$i][$j]}</td>";
					}
				}
				echo '</tr>';
			}
		}
		echo '</table>';
	}
?>