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
			$temp=$arr[$i];
			$head='';
			$foot='';
			if(substr($temp, 0, 4)=='/mm/') {
				$head.='<span class="inset">';
				$tail='</span>'.$tail;
				$temp=trim(substr($temp,4));
			}
			if(substr($temp, 0, 4)=='/ee/') {
				$head.='<span class="enlarged">';
				$tail='</span>'.$tail;
				$temp=trim(substr($temp,4));
			}
			if(substr($temp, 0, 4)=='/rr/') {
				$head.='<span class="reduced">';
				$tail='</span>'.$tail;
				$temp=trim(substr($temp,4));
			}
			if(substr($temp, 0, 4)=='/tt/') {
				$head.='<span class="subtitle">';
				$tail='</span>'.$tail;
				$temp=trim(substr($temp,4));
			}
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
				$will+=($saves[1]['good'][$ind] ? floor($hdPool[0]/2)+2 : floor($hdPool[0]/3));
				$refl+=($saves[2]['good'][$ind] ? floor($hdPool[0]/2)+2 : floor($hdPool[0]/3));
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
			$will+=($saves[1]['good'] ? floor($hdpTotal[0]/2)+2 : floor($hdpTotal[0]/3));
			$refl+=($saves[2]['good'] ? floor($hdpTotal[0]/2)+2 : floor($hdpTotal[0]/3));
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
					sprintf('bb/Fort/bb %+d, bb/Ref/bb %+d, bb/Will/bb %+d',
						$statMods['con'] + $saves[0]['mod'] + $fort,
						$statMods['dex'] + $saves[1]['mod'] + $will,
						$statMods['wis'] + $saves[2]['mod'] + $refl
					)
				])
			],
			[
				'title' => 'Offense',
				'spaced' => false,
				'texts' => quick_array([
					'bb/Speed/bb '.(is_numeric($speed)?$speed.' ft.':$speed),
					"bb/Space/bb {$spaces[$size]} ft., bb/Reach/bb {$reach} ft."
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
				$lines=[sprintf('%s Spells %s (CL %d%s; concentration %+d)',
					$class['class'],
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
			$descriptorTxt=' (';
			$first=true;
			foreach ($descriptors as $descriptor) {
				if($first)
					$first=false;
				else
					$descriptorTxt.=', ';
				$descriptorTxt.=$descriptor;
			}
			$descriptorTxt.=')';
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
	function sTable($headers, $rows, $horizontal=true, $expand=true) {
		$str='<table'.($expand?' class="expand"':'').'>';
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
	function table($headers, $rows, $horizontal=true, $expand=true) {
		echo sTable($headers, $rows, $horizontal, $expand);
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