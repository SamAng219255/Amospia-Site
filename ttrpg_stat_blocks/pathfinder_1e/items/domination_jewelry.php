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
	magicItemBlockAuto(
		'Token of Domination',
		'Enchantment',
		9,
		'none',
		45000,
		'—',
		'A ii/token of domination/ii can come in many forms such as a ring, pendant, or earring. The only requirement is that it is always some form of worn jewelry.
		After creation, a creature can spend 1 hour with a ii/token of domination/ii to become the master of the token. After which, no other creature can become the master of the token unless the token loses its master either by the current master relinquishing control as a free action or by the current master dying.
		So long as the token has current master, whenever the token is worn by a creature other than its master, the wearer is affected as by dominate person granting the token master the ability to control the wearer. When the wearer puts on the token they may make a Will save to resist the effects of the token but if that fail, they receive no additional saves until the token is removed or the master loses control. The DC is equal to 15 plus the master\'s charisma modifier. If the wearer is already under a compulsion or charm effect by the token\'s master they do not receive a save. This effect is a curse effect that cannot be removed without an effect that can remove curses.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/dominate person/ii; bb/Cost/bb 22,500 gp'
	);
	require $startDir.'pageEnd.php';
?>