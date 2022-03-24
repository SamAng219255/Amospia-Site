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
		"Void Driders",// Name
		"52; Void Driders may be stronger than is recommended for player characters.",// Race Points
		"Making up a large portion of the nation's military might, Void Driders are built for battle though are lacking in magical ability. Void Driders are built like tanks with the upper body of Void Drow and their lower body replaced with that of a giant spider. Void Driders often train specifically to defend against the magic cast by the constant enemy of the Void Drow, the deep Drow.",// Desc
		"",// Physical Desc
		"",// Society
		"",// Relations
		"",// Alignment and Religion
		"",// Adventurers
		"WIP",// Male Names
		"WIP",// Female Names
		[
			"str" => 4,
			"dex" => -2,
			"con" => 2,
			"int" => -2
		],// Ability Mofifiers
		"Void Driders are naturally strong and hardy though are lacking in agility and intelligence, possessing natural defenses and an adaptation to complete darkness.",// Ability Description
		[
			"bb/Large/bb: Void Driders are Large creatures and receive a +1 size to CMB and CMD, a -1 penalty to AC and attack rolls, and a -4 penalty to stealth. Void Driders wear armor and wield weapons as a medium creature.",
			"bb/Aberration/bb: Void Driders are aberrations with the elf subtype.",
			"bb/Eight-Legged Speed/bb: Void Driders have a base speed of 40 feet and a climb speed of 20 feet.",
			"bb/See In Darkness/bb: Void Driders can see perfectly in darkness, even supernatural darkness ",
			"bb/Elven Immunities/bb: Void Driders are immune to magic sleep effects and possess +4 bonus vs enchantment spells. ",
			"bb/Shadow Resistance/bb: Void Driders have 5 resistance vs cold and electricity.",
			"bb/Poison Use/bb: Void Driders are skilled with poison and never risk poisoning themselves when applying poison to weapons",
			"bb/Weapon Familiarity/bb: Void Driders are proficient with Elven Weapons and Spiked Chains.",
			"bb/Light Blindness/bb: Void Driders are ill-adapted to light and so are dazzled as long as they remain in areas of bright light and are blinded for 1 round upon abrupt exposure.",
			"bb/Hardy/bb: Void Driders get a +2 bonus on saves vs poison, spells, and spell-like abilities.",
			"bb/Stability/bb: Void Driders receive a +5 bonus to CMD vs bull rush combat maneuvers, a +17 bonus to CMD vs being tripped, and a +1 bonus to CMD otherwise.",
			"bb/Fast Healing/bb: Void Driders have Fast Healing 1.",
			"bb/Expert Climber/bb: Void Driders can climb on any surface, even on the ceiling, so long as it is not perfectly smooth and have their bonus to the climb skill gained from their climb speed doubled to 16.",
			"bb/Spell Resistance/bb: Void Driders have spell resistance equal 11 plus their level.",
			"bb/Magehunter/bb: Void Driders gain a +1 bonus to spellcraft to identify spells being cast and a +1 bonus on attack rolls to hit spellcasters.",
			"bb/Toxic/bb: Void Driders may coat a weapon with their venom as a swift action. This ability may be used a number of times per day equal to their con modifier, minimum 1.",
			"bb/Bite/bb: Void Driders have a natural Bite attack which is a primary attack that deals 1d6 damage. Additionally, creatures which take at least 1 point of damage from their bite are must make a fortitude save or be poisoned by the Void Drider's venom.",
			"bb/Venom/bb: Injury; save Fort; frequency 1/round for 6 rounds; effect 1 con; cure 1 save; DC is equal to 10 plus half the Void Drider's level plus their con modifier.",
			"bb/Web/bb: Void Driders have the web extraordinary ability.",
			"bb/Languages/bb: Void Driders begin play speaking Elven and Undercommon. Void Driders with high Intelligence scores can choose from the following languages: Aklo, Common, Dark Folk, Drow Sign Language, Dwarven, and Vandalusian."
		],// Racial Traits
		false// Subraces
	);
?>
<a target="_blank" href="https://www.worldanvil.com/w/amospia-pharaohcrab/a/void-drider-species"><p>World Anvil</p></a>
<?php require $startDir.'pageEnd.php'; ?>