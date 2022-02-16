<?php
	require '../pageStart.php';
	$deitiesObj=json_decode(file_get_contents('deities.json'), true);
	$subject;
	$found=false;
	$deityCount=count($deitiesObj);
	for($i=0; $i<$deityCount; $i++) {
		if($deitiesObj[$i]['name']==$_GET['name']) {
			$subject=$deitiesObj[$i];
			$found=true;
			break;
		}
	}
	if($found) {
		$spells='';
		$first=true;
		foreach ($subject['spells'] as $lvl => $name) {
			if($first) {
				$first=false;
			}
			else {
				$spells.=', ';
			}
			$spells.=$lvl.ordinalSuffix($lvl).': ii/'.$name.'/ii';
		}
		block2(
			$subject['name'].' ('.$subject['title'].') ['.$subject['alignment'].']',
			'Deity',
			false,
			[],
			[quick_array(array_merge(
				explode("\n", $subject['desc']),
				[
					'bb/Category/bb '.$subject['pantheon'],
					'bb/Edicts/bb '.$subject['edicts'],
					'bb/Anathema/bb '.$subject['anathema'],
					'bb/Areas of Concern/bb '.$subject['areas_of_concern'],
					'bb/Follower Alignments/bb '.$subject['follower_alignments'],
				]
			))],
			false,
			[
				[
					"title" => "Devotee Benefits",
					"spaced" => false,
					"texts" => quick_format([
						'bb/Divine Ability/bb  '.$subject['ability'],
						'bb/Divine Font/bb '.$subject['divine_font'],
						'bb/Divine Skill/bb '.$subject['skill'],
						'bb/Favored Weapon/bb '.$subject['favored_weapon'],
						'bb/Domains/bb '.$subject['domains'],
						'bb/Alternate Domains/bb '.$subject['alt_domains'],
						'bb/Cleric Spells/bb '.$spells
					])
				]
			]
		);
	}
	else {
		echo '<title>404</title>';
		echo '<h1>Entry Not Found!</h1>';
	}

	require '../pageEnd.php';
?>