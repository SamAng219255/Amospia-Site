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
		'Black Arrow',// Name
		'Necromancy',// School
		25,// CL
		'none',// Slot
		'—',// Price
		'—',// Weight
		[
			'The triangular heads of these arrows absorb all light and emit thin black smoke. The head transitions smoothly into the shaft which appears to be formed of dark hexagonal basalt and is twisted and lined with sharp rocky protrusions shaped like rose thorns. The fletching is formed from two rows of short, thin twigs tilted back on opposite sides. When fired, the arrow streaks black energy.',
			'A living creature struck by a ii/black arrow/ii immediately takes 2d4 permanent negative levels. At the start of their next turn and each round after, they must make a DC 35 Fortitude save or else take another 1d4 negative levels. If they successfully make two consecutive saves against this effect, it ends and they do not have to make any more saves. If they are shot with another arrow while this effect is active, they must make saves against each one separately. Creatures that die while under the effects of an arrow are hard to resurrect as though slain by a death effect. Undead shot by these arrows receive a similar effect but they take Charisma damage instead of negative levels, they must make Will saves instead of Fortitude saves, and it is not treated as a death effect. In either case this is a curse effect that ignores all immunities and can only be dispelled by a ii/remove curse/ii, targeted dispel ii/greater dispel magic/ii, ii/limited wish/ii, ii/wish/ii, or ii/miracle/ii spell. In each case, a DC 35 dispel check (1d20 + caster level) is required. ii/Antimagic field/ii, ii/mage\'s disjunction/ii, ii/spellbane/ii, and similar spells and effects that dispel, negate, suppress, disjoin, or otherwise end or render ineffectual magical or curse effects in an area have no effect on this curse. ii/Mage\'s disjunction/ii can be cast targeting the subject of this curse to make a dispel check with a +5 bonus against the curse instead of its normal effect.',
			'Objects and constructs struck by these arrows are immediately reduced to 0 hit points and destroyed unless they make a DC 35 Will save. Targets that make their save are reduced only to half of their hit points and receive the broken condition instead. Unattended items automatically fail this save while artifacts and other largely indestructible items automatically succeed at this save.',
			'Once an arrow\'s target has been slain or destroyed, once the arrow\'s effect has ended, or if the arrow fails to strike its target, it rapidly dissolves into black mist before reforming the round after, in the quiver or hand of the creature who fired it, at the beginning of their turn. If the creature does not have a quiver or free hand to accept the arrow, it manifests on the ground beside them. A ii/black arrow/ii cannot be removed from the target before this time.',
			'These arrows are generally conjured by The Dark Lord from his own power and never leave his side. However, a few brave, or foolhardy, individuals have managed to successfully steal some of these arrows which are often used to great effect. Despite their usefulness, The Dark Lord often seeks out these stolen arrows, making possessing one potentially quite dangerous.'
		],// Desc
		true,// isArtifact
		'If positive energy is channeled into the arrow, it will dissolve into a fine black powder. Arrows fired into a creature or object are immune to destruction until they have dissolved and reformed.'// Construction/Destruction
	);
	require $startDir.'pageEnd.php';
?>