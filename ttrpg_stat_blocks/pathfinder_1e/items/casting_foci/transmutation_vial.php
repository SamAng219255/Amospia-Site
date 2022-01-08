<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<?php
	magicItemBlockAuto(
		"Transmuting Vial",
		"Transmutation",
		9,
		"Focus",
		"(+1) 2,500 gp, (+2) 10,000 gp, (+3) 22,500 gp, (+4) 40,000 gp, (+5) 62,500 gp",
		"—",
		"This sealed vial contains a continuously swirling fluid that flows and pulses in arbitrary ways, changing colors, viscosities, and temperatures as it does so as well as periodically converting part or all of its contents into gas or solids in chaotic patterns that no matter how random they appear seem to hold to some sort of unknown logic never increasing in entropy. When a spell of the transmutation school is cast using this vial, the contents change their behavior all at once to replicate or symbolize the effects of the spell cast before returning to their previous chaotic behavior.
		This vial acts as a casting focus and allows the caster to grant bonuses and penalties to the targts of their spells. Whenever you cast a spell on a creature or object you can choose to grant a number of targets up to your caster level a bonus or penalty on attack rolls for the duration of the spell cast. You can also choose one skill to grant a bonus to instead, in which case the bonus granted is multiplied by 5. If your spell is targeting an object this bonus or penalty applies to the chosen roll or check when made using the object. This effect does nothing to spells with a duration of instantaneous and has a maximum duration of 1 round per caster level. Creatures or objects created by your spells can be affected and the bonus or penalty has no maximum duration, affected checks made with the object for the entirety of its duration.
		This vial can be modified for 2,500 gp times the caster level bonus to allow a character, trained in Craft (alchemy) once per day when preparing spells with the vial, to use otherwise mundane materials to replicate an amount of a variant of the vial's contents. This substance can be used in place of costly components in the creation of a number of alchemical items, each worth 50 gp or less, equal to the vial's caster level bonus. The created items can be created while preparing spells without requiring additional time but each item requires a successful Craft (alchemy) check or else it fails to take form and the materials are wasted. The items are also volatile and will expire after 24 hours becoming useless.",
		false,
		"bb/Requirements/bb Craft Wondrous Item or Brew Potion, ii/heroism/ii; bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Brew Potion or at least 9 ranks in Craft (alchemy), ii/WIP/ii; bb/Cost/bb 2,500 gp"
	);
	require $startDir.'pageEnd.php';
?>