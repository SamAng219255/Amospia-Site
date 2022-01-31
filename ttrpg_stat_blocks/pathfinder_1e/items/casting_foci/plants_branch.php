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
		'Genesis Branch',
		'Conjuration',
		9,
		'Focus',
		18600,
		'—',
		'This branch appears to be an ordinary sprig of holly but exhibits magic far beyond an ordinary branch.
		This branch can be used as a divine focus by a druid or similar divine casters in parallel with iᛏs use as a casting focus.
		When used as a casting focus for a spell that affects or creates plant matter—such as entangle or spike growth—its magic manifests, causing numerous seeds of different types to suddenly grow from the branch, fall off, and bury themself into the ground nearby. They then spring up to create any vegetation or grass that the spell requires to function inside of the spell’s area of effect. The vegetation created by the branch grows regardless of the terrain, and lasts the full duration of the spell, allowing the user to cast plant-altering or plant-creating spells in deserts, badlands, and other harsh terrains.
		The plants created are imbued with the power of nature and produce stronger effects. All spells that create or affect plants that are cast with this casting focus are cast at +1 caster level.
		The branch can be upgraded to grow ii/goodberries/ii once per day as the spell. These berries are the size and shape of holly berries and even grow on the branch where the berries would naturally grow but are are light blue-white in color and have a lavender sheen on them.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/plant growth/ii; bb/Cost/bb 9,300 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/goodberry/ii; bb/Cost/bb 540 gp'
	);
	require $startDir.'pageEnd.php';
?>