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
	function itemBlock($name, $aura, $cl, $slot, $price, $weight, $description, $construction, $destruction) {
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
	function itemBlockAuto($name, $school, $cl, $slot, $price, $weight, $description, $isArtifact, $extra) {
		global $dashes;
		itemBlock(
			$name,
			in_array($school,$dashes)?'—':(is_string($cl)?$school:($cl<6 ? "Faint" : ($cl<12 ? "Moderate" : ($cl<21 ? "Strong" : "Overwhelming"))).' '.$school),
			in_array($cl,$dashes)?'—':(is_string($cl)?$cl:$cl.($cl>10 && $cl<20 ? "th" : ($cl%10==1 ? "st" : ($cl%10==2 ? "nd" : ($cl%10==3 ? "rd" : "th"))))),
			$slot,
			in_array($price,$dashes)?'—':(is_string($price)?$price:number_format($price)." gp"),
			in_array($weight,$dashes)?'—':(is_string($weight)?$weight:number_format($weight).($weight==1 ? " lb." : " lbs.")),
			is_array($description) ? $description : explode("\n", $description),
			$isArtifact ? false : is_array($extra) ? $extra : explode("\n", $extra),
			$isArtifact ? is_array($extra) ? $extra : explode("\n", $extra) : false
		);
	}
?>