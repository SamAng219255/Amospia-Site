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
	// (?<=[+-]\d [a-z]{3})[a-z]+
?>
<h2>Races</h2>
<h3>1-10 Race Points</h3>
<dl>
	<dt><a href="races/halfnar.php">Halfnar</a> (8 RP)</dt>
	<dd>+2 Dex, +2 Cha, -2 Str</dd>
	<dd>Halfnars are the descendents of humans and halflings.</dd>
	<dt><a href="races/knarm.php">Knarm</a> (8 RP)</dt>
	<dd>+2 Con, +2 Int, -2 Dex</dd>
	<dd>Knarm are the descendents of humans and knom.</dd>
	<dt><a href="races/half_nar.php">Half-Nar</a> (9 RP)</dt>
	<dd>+2 Any</dd>
	<dd>Half-nar are the descendents of humans and narmen.</dd>
	<dt><a href="races/enspelled.php">Enspelled</a> (9 RP)</dt>
	<dd>+2 Dex, +2 Int, -2 Str</dd>
	<dd>Enspelled are a generic narman sub-race created to grant access to a specific racial trait at a lower race point total. Check with the GM before picking this race.</dd>
	<dt><a href="races/ashen.php">Ashen</a> (9 RP)</dt>
	<dd>+2 Con, +2 Wis, -2 Int</dd>
	<dd>Ashen are a race neglected peoples descendant from the indentured slaves who are tasked with gathering the bounties of the Diamond Mount.</dd>
	<dt><a href="../minecraft/races/piglins.php">Piglin</a> (9 RP)</dt>
	<dd>+2 Str, +2 Wis, -2 Con</dd>
	<dd>This block is from the Minecraft topic section. In the Amospia setting, piglins were the fourth race created by Zovilla. After the narmen had failed their purpose she created a new warrior race that was quickly conquered by The Dark One and brought into undeath. Recently, angelic invasions into the Nether have resulted in some piglins being cured of their undeath, though they remain a primitive and savage species.</dd>
	<dt><a href="races/enmorn.php">Enmorn</a> (10 RP)</dt>
	<dd>+2 Any</dd>
	<dd>Enmorn are the evolution of darkened narmen who ceased being narmen.</dd>
	<dt><a href="../minecraft/races/illagers.php">Illagers</a> (10 RP)</dt>
	<dd>+2 Con, +2 Any</dd>
	<dd>This block is from the Minecraft topic section. In the Amospia setting, illagers are corrupted Knom that work in secret in the remote parts of the world and serve and revere the demon Herobrine. (Yes, that Herobrine.)</dd>
	<dt><a href="../minecraft/races/knom.php">Knom</a> (10 RP)</dt>
	<dd>+2 Dex, +2 Wis, -2 Int</dd>
	<dd>This block is from the Minecraft topic section. In the Amospia setting, knom were one of the first races created by Zovilla, along with the Narmen and the Andina.</dd>
	<dt><a href="races/vandalusians.php">Knom, Vandalusian</a> (10 RP)</dt>
	<dd>+2 Con, +2 Int, -2 Dex</dd>
	<dd>An offshoot from the other knom, vandalusian knom are more an ethnicity than anything else though despite this they have grown quite a bit more advanced in the areas of technology and culture</dd>
	<dt><a href="races/kunthin.php">Kunthin</a> (10 RP)</dt>
	<dd>+2 Any</dd>
	<dd>Kunthin are the evolution of basic narmen from Kunthij who ceased being narmen.</dd>
	<dt><a href="races/narmen_plains.php">Narmen, Plains</a> (10 RP)</dt>
	<dd>+2 Dex, +2 Wis, -2 Con</dd>
	<dd>Plains narmen are a sub-race that specialize in horeback archery</dd>
</dl>
<h3>11-20 Race Points</h3>
<dl>
	<dt><a href="races/narapau.php">Narapau</a> (11 RP)</dt>
	<dd>+2 Str, +2 Wis, -2 Con</dd>
	<dd>Porcified narmen.</dd>
	<dt><a href="races/strong_tusk.php">Narmen, Strong-Tusk</a> (11 RP)</dt>
	<dd>+2 Str, +2 Cha, -2 Wis</dd>
	<dd>Strong-tusk narmen are those that have learned the ways of the Swords of Strength and blended it with their own abilities.</dd>
	<dt><a href="races/andinar.php">Andinar</a> (12 RP)</dt>
	<dd>+2 Str, +2 Cha, -2 Wis</dd>
	<dd>Andinar are half narman and half enderfolk.</dd>
	<dt><a href="races/ashen_alt.php">Ashen, Alternate</a> (12 RP)</dt>
	<dd>+2 Con, +2 Wis, -2 Int</dd>
	<dd>Some ashen brothers and sisters are slightly different from the others and are more acclimated to the climate.</dd>
	<dt><a href="races/narman_anvil.php">Narmen, Anvil</a> (11 RP)</dt>
	<dd>+2 Str, +2 Cha, -2 Int</dd>
	<dd>Anvil narmen are a sub-race from the Adamantite Anvil.</dd>
	<dt><a href="races/narmen.php">Narmen</a> (15 RP)</dt>
	<dd>+2 Int, +2 Cha, -2 Str</dd>
	<dd>Narmen are an ancient underwater-dwelling race of humanoids with no hair, pure black skin, gray scars in the shapes of runes, and a long tusk jutting from the middle of their mouth. Narmen have a eep understanding of magic from their long history and were once the chosen warriors of the goddess Zovilla before they were cast down and cursed for their arrogance.</dd>
	<dt><a href="races/narmen_darkened.php">Narmen, Darkened</a> (19 RP)</dt>
	<dd>+2 Dex, +2 Cha, -2 Wis</dd>
	<dd>Darkened narmen are those descendant from the orginal New World sect of Narmens who, following the end of their long isolation, determined to outright reject Zovilla and delve into the forbidden magics. These individuals found a patron, named N'morahlw'nafh, in their pursuit who granted them demonic powers.</dd>
	<dt><a href="races/narmen_enlightened.php">Narmen, Enlightened</a> (19 RP)</dt>
	<dd>+2 Str, +2 Cha, -2 Int</dd>
	<dd>Enlightened narmen are those descendant from the orginal Return sect of Narmens who, following the end of their long isolation, determined to return to their goddess Zovilla and once again earn her blessings. These individuals have been blessed for their persistence and have regained the smallest portion of their ancient glory.</dd>
	<dt><a href="races/void_drow.php">Void Drow</a> (20 RP)</dt>
	<dd>+2 Dex, +2 Con</dd>
	<dd>Void Drow are a relative of drow and elves that evolved below the mountain plateau atop which sits the knom kingdom of Vandalusia. These elves have had their skin darkened from alow but continual exposure to void energies. They are ruled by God-Queen Spellfang.</dd>
</dl>
<h3>21-30 Race Points</h3>
<dl>
	<dt><a href="races/narmen_zovill.php">Narmen, Zovill</a> (19 RP)</dt>
	<dd>+2 Str, -2 Dex, +2 Int</dd>
	<dd>The descendants of enlightened narmen who were gifted by the capital, unleashing a portion of their ancient magics.</dd>
	<dt><a href="races/void_drow_stalkers.php">Void Drow Stalkers</a> (26 RP)</dt>
	<dd>+2 Dex, +2 Int, -2 Con </dd>
	<dd>Void Drow Stalkers are one of the castes of Void Drow who are skilled at stealth.</dd>
</dl>
<h3>31-40 Race Points</h3>
<dl>
</dl>
<h3>41-50 Race Points</h3>
<dl>
	<dt><a href="races/void_drow_shadows.php">Void Drow Shadows</a> (45 RP)</dt>
	<dd>+2 Dex, +2 Cha</dd>
	<dd>Void Drow Shadows are one of the castes of Void Drow who are very secretive and have had their forms be converted entirely into shadow stuff.</dd>
	<dt><a href="races/void_drow_craftsmen.php">Void Drow Craftsmen</a> (50 RP)</dt>
	<dd>+2 Dex, +2 Int</dd>
	<dd>Void Drow Craftsmen are one of the castes of Void Drow who have six arms and a knack for creating things.</dd>
</dl>
<h3>51-60 Race Points</h3>
<dl>
	<dt><a href="races/void_driders.php">Void Driders</a> (52 RP)</dt>
	<dd>+4 Str, -2 Dex, +2 Con, -2 Int</dd>
	<dd>Void Driders are one of the castes of Void Drow who have the lower body of a spider and are built for battle.</dd>
</dl>
<h3>61-70 Race Points</h3>
<dl>
	<dt><a href="races/void_drow_nobles.php">Void Drow Nobles</a> (61 RP)</dt>
	<dd>+4 Dex, +2 Int, +2 Wis, +2 Cha, -2 Str </dd>
	<dd>Void Drow Nobles are one of the castes of Void Drow who have are particularly gifted and skilled with magic.</dd>
</dl>
<?php require $startDir.'pageEnd.php'; ?>