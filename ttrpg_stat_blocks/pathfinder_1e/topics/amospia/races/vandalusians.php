<?php 
	$startDir='';
	for($i=0; $i<20; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
	raceBlockAuto(
		"Vandalusian Knom",// Name
		10,// Race Points
		"",// Desc
		"",// Physical Desc
		"",// Society
		"",// Relations
		"",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"dex" => -2,
			"con" => 2,
			"int" => 2
		],// Ability Mofifiers
		"",// Ability Description
		[
			"bb/Medium/bb: Vandalusian knom are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Humanoid/bb: Vandalusian knom are humanoids with the knom subtype.",
			"bb/Normal Speed/bb: Vandalusian knom have a base speed of 30 feet.",
			"bb/Mountain-Born/bb: Vandalusian knom receive a +2 racial bonus to Acrobatics checks made to cross narrow ledges and a +2 racial bonus to saving throws against altitude fatigue and sickness.",
			"bb/Palace Builders/bb: Vandalusian knom receive a +2 racial bonus to Knowledge (nobility) and Knowledge (engineering) and always treat them as class skills.",
			"bb/Skilled/bb: Vandalusian knom gain an extra skill rank at each level.",
			"bb/Languages/bb: Vandalusian knom begin play speaking Vandalusian, Knom, and Common. Vandalusian knom with high Intelligence scores can choose from the following languages: Donovian, Dwarven, Elven, Idgyptian, Narman, Necril, and Undercommon."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/vandalusia-article"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>