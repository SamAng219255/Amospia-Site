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
<h3>11-20 Race Points</h3>
<dl>
	<dt><a href="races/void_drow.php">Void Drow</a> (20 RP)</dt>
	<dd>+2 Dex, +2 Con</dd>
	<dd>Void Drow are a relative of drow and elves that evolved below the mountain plateau atop which sits the knom kingdom of Vandalusia. These elves have had their skin darkened from alow but continual exposure to void energies. They are ruled by God-Queen Spellfang.</dd>
</dl>
<h3>21-30 Race Points</h3>
<dl>
	<dt><a href="races/void_drow_stalkers.php">Void Drow Stalkers</a> (26 RP)</dt>
	<dd>+2 Dex, +2 Int, -2 Con </dd>
	<dd>Void Drow Stalkers are one of the castes of Void Drow who are skilled at stealth.</dd>
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