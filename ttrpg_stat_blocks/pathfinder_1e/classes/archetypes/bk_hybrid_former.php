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
	block(
		'Lycanthropist',
		'archetype',
		quick_array([
			[
				'text' => 'bb/Lycanthropic Affinity (Su)/bb: If a lycanthropist is an afflicted lycanthrope, they are treated as a natural lycanthrope instead.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Anthropromorphic Forms/bb: When the lycanthropist takes the form of an animal or magical beast using Beast Hide Transformation, instead of fully taking the creature\'s form they take on an anthropromorphized version of its form as that of the hybrid form of of a lycanthrope. The lycanthropist\'s size does not change, their equipment does not meld with their form, they retain the ability to speak, and their hands are able to function as normal but they do gain all the other abilities and statistical changes granted by their current level of ii/beast shape/ii. At 8th level, they gain DR 10/silver while transformed. This ability alters Beast Hide Transformation.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Lycanthropic Empathy (Ex)/bb: While transformed, lycanthropists can communicate and empathize with creatures related to their form. They can use Diplomacy to alter such a creature\'s attitude, and when so doing gain a +4 racial bonus on the check.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Magic Claws (Su)/bb: Starting 5th level, all of the lycanthropist\'s natural attacks receive a +2 enhancement bonus on attack and damage rolls and count as magic while they are transformed. This bonus increases to +3 at 10th level, +4 at 15th level, and +5 at 20th level. These bonuses do allow them to overcome DR like magic weapons. This ability replaces Steel Claws.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Armored Hide (Ex)/bb: Starting at 5th level, the lycanthropist is able to better use their increased might to be more maneuverable while wearing armor. Whenever they are wearing armor while transformed, they reduce the armor check penalty by 1 (to a minimum of 0) and increases the maximum Dexterity bonus allowed by their armor by 1. Every four levels thereafter (9th, 13th, and 17th), these bonuses increase by +1 each time, to a maximum –4 reduction of the armor check penalty and a +4 increase of the maximum Dexterity bonus allowed.',
				'spacing' => 0b1001
			],
			'In addition, a lycanthropist can also move at their normal speed while wearing medium armor. At 9th level, a lycanthropist can move at their normal speed while wearing heavy armor. This ability replaces Steel Hide.',
			[
				'text' => 'bb/Primal Rejuvenation (Ex)/bb: Starting at 11th level, a lycanthropist gain regeneration 5 (silver) while transformed via Beast Hide Transformation. This increases regeneration 10 (silver) at 19th level. This ability replaces the bonus feats gained at 11th level and 19th level.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Drakkonthrope/bb: When a lycanthropist takes the form of a dragon, they likewise take on an anthropromorphized version of that form. The lycanthropist\'s size does not change, their equipment does not meld with their form, they retain the ability to speak, and their hands are able to function as normal but they do gain all the other abilities and statistical changes granted by ii/beast shape IV/ii like taking the form of a magical beast of the same size except they take the form of a dragon.',
				'spacing' => 0b1001
			],
			'Starting at 14th level, when they take the form of a true dragon they still take an anthropromorphized version of that form, but they can gain the abilities and statistical changes granted by ii/form of the dragon I/ii or ii/form of the exotic dragon I/ii instead. This ability alters Draconic Skins.',
			[
				'text' => 'bb/Large Forms/bb: Starting at 16th level, when taking the form of a Large sized, or larger, creature via Beast Hide Transformation, the lycanthropist can take a Large sized form if the form is normally Large sized or larger. If the hide they wear is larger than Large sized, the form they take is Large sized and their reach is reduced by 5 feet for every step above Large the creature normally is, to a minimum of 5 feet. Any natural attacks or other size dependant abilities they gain are likewise modified to their new size.',
				'spacing' => 0b1001
			],
			'When taking the form of Large sized true dragon, they gain the abilities granted by ii/form of the dragon II/ii or ii/form of the exotic dragon II/ii instead. This ability replaces Large and Tiny Forms.',
			[
				'text' => 'bb/Huge Forms/bb: Starting at 18th level, when taking the form of a Huge sized, or larger, creature via Beast Hide Transformation, the lycanthropist can take a Huge sized form if the form is normally Huge sized or larger. If the hide they wear is larger than Huge sized, the form they take is Huge sized and their reach is reduced by 5 feet for every step above Huge the creature normally is, to a minimum of 10 feet. Any natural attacks or other size dependant abilities they gain are likewise modified to their new size.',
				'spacing' => 0b1001
			],
			'When taking the form of Huge sized true dragon, they gain the abilities granted by ii/form of the dragon III/ii or ii/form of the exotic dragon III/ii instead. This ability replaces Huge and Diminutive Forms.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>