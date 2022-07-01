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
		'Skin Hunter',
		'archetype',
		quick_array([
			[
				'text' => 'bb/Unsavory Practices/bb: Skin hunters must wear the skins of sentient creatures to gain their powers and cannot be good aligned. This alters alignment.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Humanoid Skins/bb: Skin hunters can skin humanoids and monstrous humanoids and afix their hides to their armor as other beast knights can with animals and magical beasts. Skin hunters must wear the hide of a humanoid or monstrous humanoid to gain the benefits of Might of the Beast. This ability alters Beast Skins and Might of the Beast.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Skin Transformation/bb: Starting at 2nd level, as a standard action, a skin hunter can take the form of the humanoid whose skin they wear as ii/alter self/ii except that it lasts until dismissed as another standard action and they gain DR 5/silver while transformed. Starting at 4th level they can take the form of the humanoid whose skin they wear as ii/assume appearance/ii instead, except they can mimic the creature\'s voice as ii/vocal alteration/ii. Skin hunters can only take the form of a skin from a creature they had a hand in slaying.',
				'spacing' => 0b1001
			],
			'Starting at 4th level, they may take the form of the monstrous humanoid whose skin they wear as ii/monstrous physique I/ii.',
			'Starting at 6th level, they may take the form of the monstrous humanoid whose skin they wear as ii/monstrous physique II/ii.',
			'Starting at 8th level, they may take the form of the monstrous humanoid whose skin they wear as ii/monstrous physique III/ii.',
			'Starting at 10th level, they may take the form of the monstrous humanoid whose skin they wear as ii/monstrous physique IV/ii.',
			'Regardless of which spell this transformation functions as, the skin hunter may only take small and medium forms. If the creature whose hide they wear is small sized or smaller, their form is small sized and their reach is increased to be at least 5 feet. If the hide they wear is medium sized or larger, the form they take is medium sized and their reach is reduced by 5 feet for every step above medium the creature normally is, to a minimum of 5 feet. Any natural attacks or other size dependant abilities they gain are likewise modified to their new size. This ability replaces Primal Speed and Beast Hide Transformation. Effects that apply while transformed via Beast Hide Transformation, apply while transformed by Skin Transformation.',
			[
				'text' => 'bb/WIP (Ex)/bb: This ability replaces Steel Claws.',
				'spacing' => 0b1001
			],
			[
				'text' => 'bb/Iron Skinned (Ex)/bb: Starting at 5th level, the skin hunter is able to better use their increased might to be more maneuverable while wearing armor. Whenever they are wearing armor while transformed, they reduce the armor check penalty by 1 (to a minimum of 0) and increases the maximum Dexterity bonus allowed by their armor by 1. Every four levels thereafter (9th, 13th, and 17th), these bonuses increase by +1 each time, to a maximum –4 reduction of the armor check penalty and a +4 increase of the maximum Dexterity bonus allowed.',
				'spacing' => 0b1001
			],
			'In addition, a skin hunter can also move at their normal speed while wearing medium armor. At 9th level, a skin hunter can move at their normal speed while wearing heavy armor. This ability replaces Steel Hide.',
			[
				'text' => 'bb/Giant Skins/bb: Starting at 12th level, a beast knight can wear and gain the strength of giants as well. They can also use Beast Hide Transformation to take the form of a humanoid creature of the giant subtype. This functions as ii/giant form I/ii and allows them to take Large sized forms.',
				'spacing' => 0b1001
			],
			'Starting at 14th level, when they take the form of a humanoid creature of the giant subtype, they do so as ii/giant form II/ii and can take Huge sized forms. This ability replaces Draconic Skins.',
			[
				'text' => 'bb/Overpowering Strike (Ex)/bb: Upon reaching 20th level, the skin hnuter\'s savage might and comabt skills peak, allowing them to deliver particularly devastating blows. Any attacks made against humanoids or monstrous humanoids while transformed automatically confirm all critical threats and have their damage multiplier increased by 1 (×2 becomes ×3, for example). This ability replaces Savage Strike.',
				'spacing' => 0b1001
			]
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>