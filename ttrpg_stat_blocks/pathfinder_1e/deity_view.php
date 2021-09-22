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
		echo "<title>{$subject['name']}</title>";
		block(
			$subject['name'],
			'deity',
			explode("\n", $subject['desc']),
			false,
			[
				[
					"title" => "Details",
					"spaced" => false,
					"texts" => quick_format([
						'bb/Alignment/bb  '.$subject['alignment'],
						'bb/Pantheon/bb '.$subject['pantheon'],
						'bb/Areas of Concern/bb '.$subject['areas_of_concern'],
						'bb/Domains/bb '.$subject['domains'],
						'bb/Subdomains/bb '.$subject['subdomains'],
						'bb/Favored Weapon/bb '.$subject['favored_weapon'],
						'bb/Symbol/bb '.$subject['symbol'],
						'bb/Sacred Animal(s)/bb '.$subject['animal'],
						'bb/Sacred Color(s)/bb '.$subject['color']
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