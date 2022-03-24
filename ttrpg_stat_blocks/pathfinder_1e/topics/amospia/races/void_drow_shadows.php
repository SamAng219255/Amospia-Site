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
		"Void Drow Shadows",// Name
		"45; Void Drow Shadows are not recommended for play characters due to their rarity and incorporeality.",// Race Points
		"Almost exclusively coming from a single, small village in one of the caverns beneath the capital city, Void Drow Shadows are true masters of darkness, their form converting entirely into shadow stuff. Void Drow Shadows are often secretive and untrusting of other type of Void Drow and other races; not a single individual has been permitted to come close enough even to see their home village. Void Drow Shadows do not often leave their village but those that do are often employed as assassins and rangers by Queen Spellfang.",// Desc
		"",// Physical Desc
		"",// Society
		"",// Relations
		"",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"dex" => 2,
			"cha" => 2
		],// Ability Mofifiers
		"Common Void Drow are naturally nimble and hardy, possessing innate magic and an adaptation to complete darkness.",// Ability Description
		[
			"bb/Medium/bb: Void Drow Shadows are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Humanoid/bb: Void Drow Shadows are humanoids with the elf and half-undead subtypes.",
			"bb/Normal Speed/bb: Void Drow Shadows have a base speed of 30 feet.",
			"bb/See In Darkness/bb: Void Drow Shadows can see perfectly in darkness, even supernatural darkness ",
			"bb/Elven Immunities/bb: Void Drow Shadows are immune to magic sleep effects and possess +4 bonus vs enchantment spells. ",
			"bb/Shadow Resistance/bb: Void Drow Shadows have 5 resistance vs cold and electricity.",
			"bb/Nimble Attacks/bb: Void Drow Shadows receive Weapon Finesse as a bonus feat at 1st level.",
			"bb/Poison Use/bb: Void Drow Shadows are skilled with poison and never risk poisoning themselves when applying poison to weapons",
			"bb/Weapon Familiarity/bb: Void Drow Shadows are proficient with Elven Weapons and Spiked Chains.",
			"bb/Elven Magic/bb: Void Drow Shadows gain a +2 bonus vs SR.",
			"bb/Void Magics/bb: Void Drow Shadows have +2 bonus to most spellcraft checks and a +4 on spellcraft checks made to identify magic items. Additionally, spells cast of the shadow sub-school have their DC increased by 1.",
			"bb/Spell-Like Abilities/bb: Void Drow Shadows can cast bb/ghost sound/bb, bb/pass without trace/bb, and bb/ventriloquism/bb each once per day.",
			"bb/Light Blindness/bb: Void Drow Shadows are ill-adapted to light and so are dazzled as long as they remain in areas of bright light and are blinded for 1 round upon abrupt exposure.",
			"bb/Spell-Resistance/bb: Void Drow Shadows have SR equal to their 11 plus their level.",
			"bb/Unnatural/bb: Void Drow Shadows unnerve normal animals, and train to defend themselves against the inevitable attacks from such creatures. Void Drow Shadows take a –4 penalty on all Charisma-based skill checks to affect creatures of the animal type, and receive a +4 dodge bonus to AC against animals. Animals’ starting attitude toward Void Drow Shadows is one step worse than normal.",
			"bb/Swift as Shadows/bb: The penalty for moving at full speed while stealthing is reduced by and penalty for sniping is reduced by 10.",
			"bb/Living Shadow/bb: Void Drow Shadow's bodies are formed of the matter of the plane of shadow as the shadow body spell save that their gear is unaffected and that they are able to physically manipulate objects and can therefore perform physical attacks with weapons. However, they are still unable to make unarmed strikes or natural attacks.",
			"bb/Languages/bb: Void Drow begin play speaking Elven and Undercommon. Void Drow with high Intelligence scores can choose from the following languages: Aklo, Common, Dark Folk, Drow Sign Language, Dwarven, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/void-drow-shadows-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>