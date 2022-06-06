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
	advAlchemySimpleBlock(
		'Elixir of Healing, Maximum',// Name
		'Imbibed',
		[
			'healing'
		],// Descriptors
		5,// Level
		'instantaneous',// Duration
		'Fortitude negates (harmless)',// Saving Throw
		[
			'This mixture replicates the drinker\'s natural healing, restoring 5d8 points of damage +1 point per alchemy level (maximum +25). This healing is not inherently positive or negative energy and, unlike other ii/elixirs of healing/ii, is able to restore health to creatures that are normally unable to recover hit points naturally.',
			'Additionally, unlike other effects that heal damage, a ii/maximum elixir of healing/ii can bring recently slain creatures back to life. If administered to a deceased creature, their body knits itself back together and is restored as though it was living but is not restored to life unless they died within the last round. If the creature has died within 1 round, and the healed creature\'s hit point total is at a negative amount less than its Constitution score after administering the potion, it comes back to life and stabilizes at its new hit point total. If the creature’s hit point total is at a negative amount equal to or greater than its Constitution score, the creature remains dead. Creatures brought back to life this way gain a temporary negative level that lasts for 1 day.',
			'Creatures slain by death effects cannot be saved by revived by this potion.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>