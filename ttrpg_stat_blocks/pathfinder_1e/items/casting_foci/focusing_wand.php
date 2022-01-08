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
		"Focusing Wand",
		"Divination",
		1,
		"Focus",
		300,
		"—",
		"This wand acts as a casting focus and grants the caster its enhancement bonus to concentration checks and all other checks made as part of casting the spell. Additionally, a ii/focusing wand/ii is treated as having an enhancement bonus one and a half times its actual enhancement bonus rounded up and if it has no enhancement bonus it is treated as having an enhancement bonus of +1. Spells cast using this wand generally originate from the tip if coming from the caster's square and the standard somatic movements involved with the spell are replaced by skilled waving of the wand.
		A ii/focusing wand/ii can be made into a normal wand in addition to its properties as a casting focus in which case the bonus also affects spells cast from it. It can also be made into a metamagic rod instead. In either case it costs as much to convert it as out would to create a new item of that type.",
		false,
		"bb/Requirements/bb Craft Wondrous Item or Craft Wand, ii/magic weapon/ii; bb/Cost/bb 150 gp
		bb/Upgrade/bb:
		Same as creating a normal wand of the chosen spell or the chosen metamagic rod."
	);
	require $startDir.'pageEnd.php';
?>