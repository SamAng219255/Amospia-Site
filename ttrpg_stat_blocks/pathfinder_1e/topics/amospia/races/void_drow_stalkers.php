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
		"Void Drow Stalkers",// Name
		26,// Race Points
		"Void Drow Stalkers are the most common type of Void Drow after standard Void Drow and are skilled at stealth. Void Drow Stalkers tend to be more skilled and less hardy than standard Void Drow and are prefer to remain in the shadows",// Desc
		"",// Physical Desc
		"",// Society
		"",// Relations
		"",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"dex" => 2,
			"con" => -2,
			"int" => 2
		],// Ability Mofifiers
		"Void Drow Stalkers are naturally nimble and intelligent being much less hardy than the typical Void Drow, possessing innate magic, a penchant for stealth, and an adaptation to complete darkness.",// Ability Description
		[
			"bb/Medium/bb: Void Drow Stalkers are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Humanoid/bb: Void Drow Stalkers are humanoids with the elf subtype.",
			"bb/Normal Speed/bb: Void Drow Stalkers have a base speed of 30 feet.",
			"bb/See In Darkness/bb: Void Drow Stalkers can see perfectly in darkness, even supernatural darkness ",
			"bb/Elven Immunities/bb: Void Drow Stalkers are immune to magic sleep effects and possess +4 bonus vs enchantment spells. ",
			"bb/Shadow Resistance/bb: Void Drow Stalkers have 5 resistance vs cold and electricity.",
			"bb/Nimble Attacks/bb: Void Drow Stalkers receive Weapon Finesse as a bonus feat at 1st level.",
			"bb/Poison Use/bb: Void Drow Stalkers are skilled with poison and never risk poisoning themselves when applying poison to weapons",
			"bb/Weapon Familiarity/bb: Void Drow Stalkers are proficient with Elven Weapons and Spiked Chains.",
			"bb/Light and Dark/bb: Once per day as an immediate action Void Drow Stalkers can treat positive and negative energy as though they were undead. This ability lasts for 1 minute once activated.",
			"bb/Elven Magic/bb: Void Drow Stalkers gain a +2 bonus vs SR.",
			"bb/Void Magics/bb: Void Drow Stalkers have +2 bonus to most spellcraft checks and a +4 on spellcraft checks made to identify magic items. Additionally, spells cast of the shadow sub-school have their DC increased by 1.",
			"bb/Spell-Like Abilities/bb: Void Drow Stalkers can cast bb/ghost sound/bb, bb/pass without trace/bb, and bb/ventriloquism/bb each once per day.",
			"bb/Light Blindness/bb: Void Drow Stalkers are ill-adapted to light and so are dazzled as long as they remain in areas of bright light and are blinded for 1 round upon abrupt exposure. ",
			"bb/Shadow Blending/bb: The miss chance to hit hit Void Drow Stalkers is increased 50%. This does not grant them total cover.",
			"bb/Underground Stalker/bb: Void Drow Stalkers gain a +2 on craft (alchemy), perception, and stealth checks and perception and stealth are always considered class skills. Additionally, the bonus to stealth increases to 4 while underground.",
			"bb/Quick Reactions/bb: Void Drow Stalkers gain Improved Initiative as a bonus feat at 1st level granting a +4 bonus on initiative.",
			"bb/Swift as Shadows/bb: The penalty for moving at full speed while stealthing is reduced by and penalty for sniping is reduced by 10.",
			"bb/Toxic/bb: Void Drow Stalkers may coat a weapon with their venom as a swift action. This ability may be used a number of times per day equal to their con modifier, minimum 1.",
			"bb/Venom/bb: Injury; save Fort; frequency 1/round for 6 rounds; effect 1 con; cure 1 save; DC is equal to 10 plus half the Void Drow Stalker's level plus their con modifier. ",
			"bb/Languages/bb: Void Drow begin play speaking Elven and Undercommon. Void Drow with high Intelligence scores can choose from the following languages: Aklo, Common, Dark Folk, Drow Sign Language, Dwarven, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/void-drow-stalkers-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>