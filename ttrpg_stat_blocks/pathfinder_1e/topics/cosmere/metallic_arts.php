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
		'Metallic Arts',
		'info',
		quick_array([
			'Native to the planet of Scadrial, the Metallic Arts is the collective name for Allomancy, Feruchemy, and Hemalurgy. Allomancy is fueled primarily by the shard of Preservation and is end-positive, meaning that something is gained though its use such as energy, force, matter, or knowledge. Hemalurgy is fueled primarily by the shard of Ruin and is end-negative, menaing that something is lost through its use. Specifically, hemalurgy steals something from somenone and gives it to someone else but the transfer doesn\'t have perfect efficiency and some is lost. Feruchemy is formed from a balance between Preseration and Ruin and is end-neutral, it perfectly stores somehting for later use.',
			'Across the cosmere, certain metals have corresponding significance. There exists god-metals whose exact appliactions vary based on the planet and shard as well as 16 special metals that interact with investiture in relatively consistent ways though with extensively varying applications. On Scadrial, however, the specific applications of the metals forms the very basis of the magic. Each metallic art provies one method to apply the metal but whose effect is primarily determined by the metal being used. Further deatils on the specific metals is included in the descriptions for the given metals.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>