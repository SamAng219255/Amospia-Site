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
		"Void Drow Nobles",// Name
		"61; They are not recommended for player characters.",// Race Points
		"Hailing primarily from the capital city surrounding Queen Spellfang's Palace, Void Drow Nobles are particularly skilled in magic and diplomacy. Though are not as physically hardy or strong as the common Void Drow.",// Desc
		"",// Physical Desc
		"",// Society
		"",// Relations
		"",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"str" => -2,
			"dex" => 4,
			"int" => 2,
			"wis" => 2,
			"cha" => 2
		],// Ability Mofifiers
		"Void Drow Nobles are naturally extremely nimble as well as being intelligent, wise, and charismatic though lacking in physical strength, possessing powerful innate magic, a knack for diplomacy, and an adaptation to complete darkness.",// Ability Description
		[
			"bb/Medium/bb: Void Drow Nobles are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Humanoid/bb: Void Drow Nobles are humanoids with the elf subtype.",
			"bb/Normal Speed/bb: Void Drow Nobles have a base speed of 30 feet.",
			"bb/See In Darkness/bb: Void Drow Nobles can see perfectly in darkness, even supernatural darkness ",
			"bb/Elven Immunities/bb: Void Drow Nobles are immune to magic sleep effects and possess +4 bonus vs enchantment spells. ",
			"bb/Shadow Resistance/bb: Void Drow Nobles have 5 resistance vs cold and electricity.",
			"bb/Nimble Attacks/bb: Void Drow Nobles receive Weapon Finesse as a bonus feat at 1st level.",
			"bb/Poison Use/bb: Void Drow Nobles are skilled with poison and never risk poisoning themselves when applying poison to weapons",
			"bb/Weapon Familiarity/bb: Void Drow Nobles are proficient with Elven Weapons and Spiked Chains.",
			"bb/Light and Dark/bb: Once per day as an immediate action Void Drow Nobles can treat positive and negative energy as though they were undead. This ability lasts for 1 minute once activated.",
			"bb/Deep Elven Magic/bb: Void Drow Nobles gain a +4 bonus vs SR and a +2 bonus on dispel checks.",
			"bb/Void Magics/bb: Void Drow Nobles have +2 bonus to most spellcraft checks and a +4 on spellcraft checks made to identify magic items. Additionally, spells cast of the shadow sub-school have their DC increased by 1.",
			"bb/Spell-Like Abilities/bb: Void Drow Nobles can cast ii/dancing darkness/ii, ii/deeper darkness/ii, ii/entropic shield/ii, ii/feather fall/ii and ii/levitate/ii at will, and have ii/detect magic/ii as a constant spell-like ability. A drow noble can also cast ii/ghost sound/ii, ii/pass without trace/ii, ii/ventriloquism/ii, and ii/dispel magic/ii each once per day.",
			"bb/Light Blindness/bb: Void Drow Nobles are ill-adapted to light and so are dazzled as long as they remain in areas of bright light and are blinded for 1 round upon abrupt exposure.",
			"bb/Light Blindness/bb: Void Drow are ill-adapted to light and so are dazzled as long as they remain in areas of bright light and are blinded for 1 round upon abrupt exposure.",
			"bb/Spell Resistance/bb: Void Drow Nobles have SR equal to their 11 plus their level.",
			"bb/Skilled/bb: Void Drow Nobles receive an extra skill rank at each level.",
			"bb/Sociable/bb: When Void Drow Nobles attempt to change a creature’s attitude with a Diplomacy check and fail by 5 or more, they can try to influence the creature a second time even if 24 hours have not passed.",
			"bb/Silver Tongued/bb: Void Drow Nobles receive a +2 bonus on all Bluff and Diplomacy checks and can shift a creatures attitude a maximum of 3 steps instead of 2.",
			"bb/Languages/bb: Void Drow Nobles begin play speaking Elven and Undercommon. Void Drow Nobles with high Intelligence scores can choose from the following languages: Aklo, Common, Dark Folk, Drow Sign Language, Dwarven, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/void-drow-nobles-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>