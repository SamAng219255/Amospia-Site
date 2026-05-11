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
<link rel="stylesheet" type="text/css" href="styles/hexp.css">
<canvas></canvas>
<p id="hex-output"></p>
<button id="hex-generate">Generate</button>
<div id="hexp-options">

</div>
<div id="hexp-json">
	<button id="hexp-json-get">Export as JSON</button>
	<button id="hexp-json-load">Import from JSON</button>
	<textarea id="hexp-json-textarea"></textarea>
</div>
<?php
	require $startDir.'pageEnd.php';
?>