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
		"Abjuring Rune Stone",
		"Abjuration",
		7,
		"Focus",
		"(10 hp) 10,000 gp, (20 hp) 30,000 gp, (30 hp) 50,000 gp, (40 hp) 70,000 gp, (50 hp) 90,000 gp",
		"—",
		"This smooth, round, river stone has a faintly glowing symbol of power etched into its surface in wide, shallow strokes and shines brightly when a spell of the abjuration school is cast using it. This stone acts as a casting focus and allows to grant a defensive barrier to the targets of your spells. Whenever you cast a spell that targets one or more creatures or objects or that creates something, you can choose to create a protective barrier around the target that grants it a number temporary hit points for the next 1 minute per level of the spell cast, minimum 5 rounds. This effect does not stack with itself but additional castings can restore the remaining temporary hit points to the number granted by the new spell, if it is greater, and increase the remaining duration of the barrier to the new duration, if it is greater.
		The symbol of power on this stone can be amplified to grant the bearer spell resistance. A +2 ii/abjuring rune stone/ii can grant a spell resistance of up to 16. A +4 ii/abjuring rune stone/ii can grant a spell resistance of up to 21 and a +6 ii/abjuring rune stone/ii can grant a spell resistance up to 26. In any case, adding spell resistance increases the price by 10,000 gp per point of spell resistance over 12 with a minimum spell resistance of 13.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; ii/false life/ii bb/Cost/bb (+2) 11,250 gp, (+4) 22,500 gp, (+6) 33,750 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/spell resistance/ii; bb/Cost/bb see description"
	);
	require $startDir.'pageEnd.php';
?>