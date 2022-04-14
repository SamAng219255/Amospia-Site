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
		'Cursed Wounds',
		'Necromancy',
		3,
		'weapon quality',
		'+3 bonus',
		'—',
		'This special ability can only be placed on melee weapons.
		Damage dealt by a cursed wounds weapon cannot be healed naturally, and any creature providing magical healing must make a caster level check equal to 12 plus the weapon\'s caster level or else the magic fails to heal the damage. In addition, any healing provided by effects that ignore spell resistance (such as fast healing, regeneration, and some spells) are halved when healing the damage.
		This is a curse effect and can only be removed by spells and abilities that can remove curses such as a break enchantment, limited wish, miracle, remove curse, or wish spell.
		This only applies to weapon damage dealt by this weapon. All other damage can be healed as normal.
		Additionally, on a successful critical hit, the target takes a number of points of bleed damage equal to the weapon\'s enhancement bonus. Multiple critical hits from a cursed wounds weapon increase the bleed damage. Bleeding creatures take the bleed damage at the start of their turns. This bleeding cannot be stopped until the curse is lifted. At which point bleeding can be stopped by a successful DC 15 Heal check or through the application of any spell that cures hit point damage.',
		false,
		'bb/Requirements/bb Craft Wondrous Item, ii/fester/ii; bb/Cost/bb +3 bonus'// Construction
	);
	require $startDir.'pageEnd.php';
?>