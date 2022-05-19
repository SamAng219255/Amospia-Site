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
	block(
		'Quintenium',
		'info',
		quick_array([
			'Quintenium is a completely invented concept effectively representing the god-metal of the shard of magic. Quintenium possesses all the same properties as god-metals and has an entire list of allomantic, feruchemical, and hemalurgic properties for itself and its alloys. These effects are all designed with Pathfinder in mind while keeping the spirit of the originals as best as possible. With a few exceptions, these are not replacements. They are designed to be additional abilities used along side the canon ones. The primary exceptions being the allomantic external temporal metals (quintenium/cadmium and quintenium/bendalloy) followed the allomantic enhancement metals (quintenium/duralumin, quintenium/aluminum, quintenium/nicrosil, and quintenium/chromium).',
			'Allomantic quintenium/cadmium and quintenium/bendalloy follow the same principle as cadmium and bendalloy but instead of the dramatic time manipulation creating convoluted mechanics where half the party is only present for an eighth of the fight, quintenium/cadmium and quintenium/bendalloy apply the effects of the ii/slow/ii and ii/haste/ii spells around the user, slowing or speeding time without need for additional mechanics. As a GM, you may choose that Pulsers and Sliders in your world are granted access to their quintenium alloy variant instead.',
			'The allomantic enhancement metals either supercharge or wipe the allomantic reserves of the user or their target. While interesting it doesn\'t interact outside of the system much and the dramatic supercharge can grow out of proportion. Their quintenium alloy counterparts empower or dispel all magical effects instead, limiting the strength while broadening its potential utilization. These effects are not as much meant to replace the existing ones but, especially if your party doesn\'t include a mistborn, will probably see more use and fill a similar niche.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>