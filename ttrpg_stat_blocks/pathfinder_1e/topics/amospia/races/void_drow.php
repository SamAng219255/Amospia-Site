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
		"Void Drow",// Name
		20,// Race Points
		"Infused with the ambient void magic of their native caverns Void Drow are have their skin darkened, their magic tainted, and their minds invaded by the whispers of the void. Despite their natural inclination towards evil, the Void Drow are a kind hearted people who do battle only when necessary, though are quite proficient at combat. The major reason for this is the influence of their immortal ruler, Queen Spellfang. Their magic is centered around their familiar dark energies and empowering magical items with their innate power. In combat they prefer to remain unseen, striking from the shadows, or to keep their distance, firing magically imbued arrows. The body of a Void Drow acts somewhat like a sponge, absorbing magic in their environment. This process over time may transform the drow permanently into one of the many castes of Void Drow depending on the composition of the energies found in an area. Within their home realm, towns have cropped up around the regions known for facilitating certain transformations and drow apprentices seeking to join a caste will travel to these settlements in hopes that they will be permitted to remain there and undergo the change.",// Desc
		"",// Physical Desc
		"",// Society
		"",// Relations
		"",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"dex" => 2,
			"con" => 2
		],// Ability Mofifiers
		"Common Void Drow are naturally nimble and hardy, possessing innate magic and an adaptation to complete darkness.",// Ability Description
		[
			"bb/Medium/bb: Void Drow are Medium creatures and have no bonuses or penalties due to their size.",
			"bb/Humanoid/bb: Void Drow are humanoids with the elf subtype.",
			"bb/Normal Speed/bb: Void Drow have a base speed of 30 feet.",
			"bb/See In Darkness/bb: Void Drow can see perfectly in darkness, even supernatural darkness ",
			"bb/Elven Immunities/bb: Void Drow are immune to magic sleep effects and possess +4 bonus vs enchantment spells. ",
			"bb/Shadow Resistance/bb: Void Drow have 5 resistance vs cold and electricity.",
			"bb/Nimble Attacks/bb: Void Drow receive Weapon Finesse as a bonus feat at 1st level.",
			"bb/Poison Use/bb: Void Drow are skilled with poison and never risk poisoning themselves when applying poison to weapons",
			"bb/Weapon Familiarity/bb: Void Drow are proficient with Elven Weapons and Spiked Chains.",
			"bb/Light and Dark/bb: Once per day as an immediate action Void Drow can treat positive and negative energy as though they were undead. This ability lasts for 1 minute once activated.",
			"bb/Elven Magic/bb: Void Drow gain a +2 bonus vs SR.",
			"bb/Void Magics/bb: Void Drow have +2 bonus to most spellcraft checks and a +4 on spellcraft checks made to identify magic items. Additionally, spells cast of the shadow sub-school have their DC increased by 1.",
			"bb/Spell-Like Abilities/bb: Void Drow can cast bb/ghost sound/bb, bb/pass without trace/bb, and bb/ventriloquism/bb each once per day.",
			"bb/Light Blindness/bb: Void Drow are ill-adapted to light and so are dazzled as long as they remain in areas of bright light and are blinded for 1 round upon abrupt exposure. ",
			"bb/Languages/bb: Void Drow begin play speaking Elven and Undercommon. Void Drow with high Intelligence scores can choose from the following languages: Aklo, Common, Dark Folk, Drow Sign Language, Dwarven, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/void-drow-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>