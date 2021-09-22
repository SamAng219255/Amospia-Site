<?php require '../../pageStart.php'; ?>
<title>Unprepared Wizard's Component Pouch</title>
<?php
	magicItemBlockAuto(
		"Unprepared Wizard's Component Pouch",
		"Conjuration",
		5,
		"none",
		135000,
		"1/4 lb.",
		"This spell component pouch magically conjures material components necessary for spellcasting. It functions as a standard spell component pouch except that instead of containing all of the components in advance, it conjures them as they are drawn from the pouch and that material components with a specific cost can be drawn from the pouch. If a costly material component is drawn from the pouch, it attempts to consume coins off the caster's person, from within worn extra-dimensional spaces, and unattended coins within 5 feet adding up to the cost of the component plus an additional 10%. The pouch will attempt to consume coins such that it adds exactly up to the the cost but if it cannot it will consume the smallest gold piece value of coins possible greater than the necessary cost. If not enough coins can be found by the pouch, the caster fails to draw the component and the coins are not spent.",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb 63,500 gp"
	);
	require '../../pageEnd.php';
?>