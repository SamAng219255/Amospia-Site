<style>
	#content * {
		white-space: normal;
	}
	bold {
		font-weight: bold;
	}
</style>
<div style="height: 755">
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Unity WebGL Player | DropBlock</title>
	<link rel="shortcut icon" href="games/DropBlock/TemplateData/favicon.ico">
	<link rel="stylesheet" href="games/DropBlock/TemplateData/style.css">
	<script src="games/DropBlock/TemplateData/UnityProgress.js"></script>  
	<script src="games/DropBlock/Build/UnityLoader.js"></script>
	<script>
		var gameInstance = UnityLoader.instantiate("gameContainer", "games/DropBlock/Build/DropBlock.json", {onProgress: UnityProgress});
	</script>
	<div class="webgl-content">
		<div id="gameContainer" style="width: 960px; height: 600px"></div>
		<div class="footer">
			<div class="webgl-logo"></div>
			<div class="title">DropBlock</div>
		</div>
	</div>
</div>
<p>Instructions:</p>
<ul>
	<li>The <bold>Left</bold> and <bold>Right Arrow Keys</bold> (or <bold>A</bold> and <bold>D</bold>) will move the currently falling block left or right respectively.</li>
	<li>The <bold>Down Arrow Key</bold> (or <bold>S</bold>) will cause the current block to fall the rest of the way down immediately.</li>
	<li>Pressing the <bold>Escape Key</bold> at any time will pause the game.</li>
	<li>Connect four or more blocks of the same color in any shape to remove them and gain points.</li>
	<li>You get one point per block removed.</li>
	<li>Connecting more than four blocks will cause the region around the last block to be removed as well and give you extra points.</li>
	<li>Every five matches that you make will increase the speed at which the blocks fall.</li>
	<li>You lose when the blocks reach the top.</li>
</ul>
