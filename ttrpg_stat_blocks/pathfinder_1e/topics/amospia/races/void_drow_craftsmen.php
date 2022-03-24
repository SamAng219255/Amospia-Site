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
		"Void Drow Craftsmen",// Name
		"50; Void Drow Craftsmen may be stronger than is recommended for player characters, however many of their abilities are geared towards crafting and they may not fair as well in combat as their race points would predict.",// Race Points
		"Void Drow Craftsmen are the heart of magic item, weapon, and armor production in the Void Drow nation. Originating from various villages, Void Drow Craftsmen have a total of six arms and eight eyes that they've learned to use to create multiple items at once.",// Desc
		"",// Physical Desc
		"",// Society
		"",// Relations
		"",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"dex" => 2,
			"int" => 2
		],// Ability Mofifiers
		"Void Drow Craftsmen are naturally nimble and intelligent, possessing innate magic that they use to fuel the creation of magic items and an adaptation to complete darkness.",// Ability Description
		[
			"bb/Medium/bb: Void Drow Craftsmen are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Aberration/bb: Void Drow Craftsmen are aberrations with the elf subtype.",
			"bb/Normal Speed/bb: Void Drow Craftsmen have a base speed of 30 feet.",
			"bb/See In Darkness/bb: Void Drow Craftsmen can see perfectly in darkness, even supernatural darkness ",
			"bb/Elven Immunities/bb: Void Drow Craftsmen are immune to magic sleep effects and possess +4 bonus vs enchantment spells. ",
			"bb/Shadow Resistance/bb: Void Drow Craftsmen have 5 resistance vs cold and electricity.",
			"bb/Nimble Attacks/bb: Void Drow Craftsmen receive Weapon Finesse as a bonus feat at 1st level.",
			"bb/Poison Use/bb: Void Drow Craftsmen are skilled with poison and never risk poisoning themselves when applying poison to weapons",
			"bb/Weapon Familiarity/bb: Void Drow Craftsmen are proficient with Elven Weapons and Spiked Chains.",
			"bb/Light and Dark/bb: Once per day as an immediate action Void Drow Craftsmen can treat positive and negative energy as though they were undead. This ability lasts for 1 minute once activated.",
			"bb/Elven Magic/bb: Void Drow Craftsmen gain a +2 bonus vs SR.",
			"bb/Void Magics/bb: Void Drow Craftsmen have +2 bonus to most spellcraft checks and a +4 on spellcraft checks made to identify magic items. Additionally, spells cast of the shadow sub-school have their DC increased by 1.",
			"bb/Light Blindness/bb: Void Drow Craftsmen are ill-adapted to light and so are dazzled as long as they remain in areas of bright light and are blinded for 1 round upon abrupt exposure.",
			"bb/Arcane Craftsman/bb: Void Drow Craftsmen gain a +2 bonus on craft checks which increases to a +4 bonus on metal and stone items and a +1 bonus to disable device and knowledge (engineering). Additionally, craft and spellcraft are always considered class skills and Void Drow Craftsmen are always considered proficient with any item they have crafted.",
			"bb/Arcane Sight/bb: Void Drow Craftsmen have detect magic as a constant spell-like effect.",
			"bb/All-Around Vision/bb: Void Drow Craftsmen have eight eyes that can see all around them that grant them a +4 bonus to perception and make them immune to being flanked.",
			"bb/Multi-Armed/bb: Void Drow Craftsmen have six arms that can each hold weapons or be considered free hands. Only one hand is considered their primary hand all others are off hands.",
			"bb/Languages/bb: Void Drow Craftsmen begin play speaking Elven and Undercommon. Void Drow Craftsmen with high Intelligence scores can choose from the following languages: Aklo, Common, Dark Folk, Drow Sign Language, Dwarven, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
	racialFeats("void drow craftsman", [
		[
			"name" => "Six Armed Crafting",
			"desc" => "The ability to reach, hold, and manipulate more at once combined with more eyes to see multiple projects at once allows Drow Craftsmen to accomplish twice what normal crafters can do.",
			"prereq" => "5 ranks in any one craft skill",
			"benefit" => "You are able to craft two non-magic items simultaneously using any craft skill in which you have at least 5 ranks.",
			"special" => false
		],
		[
			"name" => "Six Armed Crafting, Improved",
			"desc" => "The ability to reach, hold, and manipulate more at once combined with more eyes to see multiple projects at once allows Drow Craftsmen to accomplish more than what normal crafters can do.",
			"prereq" => "10 ranks in any one craft skill",
			"benefit" => "You are able to craft three non-magic items simultaneously using any craft skill in which you have at least 5 ranks.
				You may also instead create two magic items simultaneously with a -5 penalty if you have at least 10 ranks in the skill being used.",
			"special" => false
		]
	]);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/void-drow-craftsmen-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>