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
	<dt><a href="../minecraft/races/illagers.php">Illagers</a> (10 RP)</dt>
	<dd>+2 Con, +2 Any</dd>
	<dd>This block is from the Minecraft topic section. In the Amospia setting, illagers are corrupted Knom that work in secret in the remote parts of the world and serve and revere the demon Herobrine. (Yes, that Herobrine.)</dd>
	<dt><a href="../minecraft/races/knom.php">Knom</a> (10 RP)</dt>
	<dd>+2 Dex, +2 Wis, -2 Int</dd>
	<dd>This block is from the Minecraft topic section. In the Amospia setting, knom were one of the first races created by Zovilla, along with the Narmen and the Andina.</dd>
	<dt><a href="races/vandalusians.php">Knom, Vandalusian</a> (10 RP)</dt>
	<dd>+2 Con, +2 Int, -2 Dex</dd>
	<dd>An offshoot from the other knom, vandalusian knom are more an ethnicity than anything else though despite this they have grown quite a bit more advanced in the areas of technology and culture</dd>
</dl>
<h3>11-20 Race Points</h3>
<dl>
	<dt><a href="races/narmen.php">Narmen</a> (15 RP)</dt>
	<dd>+2 Int, +2 Cha, -2 Str</dd>
	<dd>Narmen are an ancient underwater-dwelling race of humanoids with no hair, pure black skin, gray scars in the shapes of runes, and a long tusk jutting from the middle of their mouth. Narmen have a eep understanding of magic from their long history and were once the chosen warriors of the goddess Zovilla before they were cast down and cursed for their arrogance.</dd>
	<dt><a href="races/void_drow.php">Void Drow</a> (20 RP)</dt>
	<dd>+2 Dex, +2 Con</dd>
	<dd>Void Drow are a relative of drow and elves that evolved below the mountain plateau atop which sits the knom kingdom of Vandalusia. These elves have had their skin darkened from alow but continual exposure to void energies. They are ruled by God-Queen Spellfang.</dd>
</dl>
<h3>21-30 Race Points</h3>
<dl>
	<dt><a href="races/narmen_darkened.php">Narmen, Darkened</a> (23 RP)</dt>
	<dd>+2 Dex, +2 Cha, -2 Wis</dd>
	<dd>Darkened narmen are those descendant from the orginal New World sect of Narmens who, following the end of their long isolation, determined to outright reject Zovilla and delve into the forbidden magics. These individuals found a patron, named N'morahlw'nafh, in their pursuit who granted them demonic powers.</dd>
	<dt><a href="races/narmen_enlightened.php">Narmen, Enlightened</a> (23 RP)</dt>
	<dd>+2 Str, +2 Cha, -2 Int</dd>
	<dd>Enlightened narmen are those descendant from the orginal Return sect of Narmens who, following the end of their long isolation, determined to return to their goddess Zovilla and once again earn her blessings. These individuals have been blessed for their persistence and have regained the smallest portion of their ancient glory.</dd>
	<dt><a href="races/void_drow_stalkers.php">Void Drow Stalkers</a> (26 RP)</dt>
	<dd>+2 Dex, +2 Int, -2 Con </dd>
	<dd>Void Drow Stalkers are one of the castes of Void Drow who are skilled at stealth.</dd>
</dl>
<h3>31-40 Race Points</h3>
<dl>
	<dt><a href="races/narmen_demonic.php">Narmen, Demonic</a> (37 RP)</dt>
	<dd>+4 Cha, +2 Str, +2 Dex, +2 Con, -2 Wis</dd>
	<dd>While it can be rarely passed on genetically, demonic narmen are those who have undergone the so-called Rite of Conversion and become more demon than mortal.</dd>
</dl>
<h3>41-50 Race Points</h3>
<dl>
	<dt><a href="races/narmen_nobles.php">Narmen Nobles</a> (41 RP)</dt>
	<dd>+4 Dex, +2 Int, +2 Wis, +2 Cha, -2 Str</dd>
	<dd>Narmen nobles are a semi-artificially created variant of the Narmen who excel at magic and descend from the highest echelons of Narmen society where arcane power is valued above most all else.</dd>
	<dt><a href="races/narmen_saints.php">Narmen Saints</a> (41 RP)</dt>
	<dd>+4 Str, +2 Con, +2 Cha, +2 Wis, -2 Int</dd>
	<dd>While it can be rarely passed on genetically, narmen saints are those who have earned the right to undergo the Rite of Ascension and receover a larger portion of their ancient glory.</dd>
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
<h3>91-100 Race Points</h3>
<dl>
	<dt><a href="races/narmen_preflood.php">Narmen, Pre-Flood</a> (100 RP)</dt>
	<dd>+4 Str, +2 Dex, +2 Con, +2 Int, +2 Wis, +2 Cha</dd>
	<dd>Before they were cast down, Narmen were the chosen warrior race created by the goddess Zovilla to destroy the demons and their Void God masters. Narmen have since fallen from glory and this ancient Narmen race is never seen outside of tales passed down from long ago.</dd>
</dl>
<?php require $startDir.'pageEnd.php'; ?>