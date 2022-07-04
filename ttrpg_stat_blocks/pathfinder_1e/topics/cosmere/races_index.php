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
?>
<h2>Races</h2>
<h3>??-?? Race Points</h3>
<dl>
	<dt><a href="races/singers.php">Singers (WIP)</a> (?? RP)</dt>
	<dd>??</dd>
	<dd>The Singers are a humanoid race native to Roshar. Singers are naturally able to hear the Rythyms and change forms depending on which spren they are currently bonded to.</dd>
</dl>
<?php require $startDir.'pageEnd.php'; ?>