<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<script type="module" src="scripts/hexploration.js"></script>
<canvas></canvas>
<p id="hex-output"></p>
<button id="hex-generate">Generate</button>
<div class="hex-options">

</div>
<?
	require $startDir.'pageEnd.php';
?>