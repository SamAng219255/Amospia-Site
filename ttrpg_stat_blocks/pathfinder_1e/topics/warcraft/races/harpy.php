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
		'Harpy',
		14,
		'The origins of hapies is contested though their are two major claims. The first, and most widely accepted, are that they are the creation of Aviana, Wild Goddess of Flight, whose form resmebles a beautiful harpy and who claims them as her own. The other major claim is that they were created from a curse by the ancient sorcerer queen, Azshara, which she placed upon rebellious elves. Whatever their origins, modern observations suggest they are in league the Old Gods based on the dark magic they tend to wield. Old God influence may also explain their repugnant qualities.',
		'Harpies are bird-like humanoids with elven features. Harpies are generally depicted with breath-taking beauty that is often fantasized yet all first-hand accounts are the opposite. Harpies are brutish people that hate everyone and everything and they are universally considered absolutely hideous by those that meet them.',
		'',
		'',
		'',
		'',
		'',
		'',
		[
			'dex' => 2,
			'wis' => 2,
			'cha' => -2
		],
		'Harpies are dextrous and cunning though their appearances are widely considered hideous and their attitudes untolerably rude and cruel.',
		[
			'bb/Monstrous Humanoid/bb: Harpies are monstrous humanoid creatures with the harpy subtype.',
			'bb/Medium/bb: Harpies are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Flying/bb: Harpies primarily fly around but can slowly move along the ground, often in little hops with the aid of their wings or crawling on their wings. They have a base speed of 5 feet and a fly speed of of 30 feet with clumsy maneuverability.',
			'bb/Darkvision/bb: Harpies can see perfectly in darkness up to 60 feet away though they can only see in black and white in the dark.',
			'bb/Air Affinity/bb: If a harpy is a sorcerer with the air elemental bloodline, they treat their Charisma score as 2 points higher for all sorcerer spells and class abilities. Furthermore, a harpy able to cast air domain spells casts their domain powers and spells at +1 caster level. This trait does not give harpies early access to level-based powers; it only affects powers that they could already use without this trait.',
			'bb/Stench Aura/bb: Harpies secrete a terrible scent as a 15-foot aura that nearly every other creature finds offensive. All living creatures (except those with the stench aura ability) within the aura must succeed at a Fortitude saving throw (DC 10 + 1/2 the harpy\'s character level + the harpy\'s Constitution modifier) or be sickened for 5 rounds. Creatures that succeed at the saving throw cannot be sickened by the same harpy\'s stench aura for 24 hours. A ii/delay poison/ii or ii/neutralize poison/ii spell or similar effect removes the effect from the sickened creature. This is a poison effect.',
			'bb/Talons/bb: Harpies have two talon natural attacks that are primary natural attacks that deal 1d4 points of slashing damage. If a character makes natural attacks as part of a full-attack action that includes manufactured weapon attacks, all their natural attacks are treated as being secondary attacks.',
			'bb/Toxic Kiss/bb: Harpies gain the following extraordinary ability: A number of times per day equal to its Constitution modifier (minimum 1/day), a harpy can poison a weapon that she wields with her toxic saliva. Applying poison in this way is a swift action.',
			'ii/Life-Stealing Venom/ii: Injury; save Fort DC 10 + 1/2 the harpy\'s Hit Dice + the harpy\'s Constitution modifier; frequency 1/round for 6 rounds; effect 1 Con; cure 1 save.',
			'Harpies are also known to trick creatures into kissing them and then spending a use of this ability to poison the subject. How they manage to do so in spite of their looks and smell is a true mystery.',
			'bb/Languages/bb: Harpies begin play speaking Darnassian. Harpies with high Intelligence scores can choose from Common, Kalimag (Auran), Orcish, and the language of the winds.'
		],
		false
	);
	require $startDir.'pageEnd.php';
?>