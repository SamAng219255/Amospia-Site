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
	block(
		'Dread Skull Animus',
		'monster',
		quick_array([
			'A Dread Skull Animus is created by a caster from a ii/ aa/necromancy_skull|dread skull/aa /ii by sacrificing their life force in the form of either 1d4 of 2d4 points of strength damage.',
			'A Dread Skull Animus is a medium mindless undead with the ii/dread skull/ii as its head with a jaw and skeletal body formed from black mist that seems to flow down to the ground from the skull. The eyes of the skull glow with a cold blue light and cloak of black smoke trails down from the skull with the thickest almost liquid part flowing from its mouth and eyes. The smoke spreads out around the body not quite obscuring it.',
			'<br>',
			'bb/Alignment/bb: Neutral Evil',
			'bb/Type/bb: Undead',
			'bb/Armor Class/bb: The Dread Skull Animus has a natural armor of half the creator\'s caster level.',
			'bb/Hit Dice/bb: The Dread Skull Animus has a number of d8 hit dice equal to the creator\'s caster level.',
			'bb/Saves/bb: The Dread Skull Animus base save bonuses are Fort +1/3 HD, Ref +1/3 HD, and Will +1/2 HD + 2.',
			'bb/Defensive Abilities/bb: The Dread Skull Animus has DR 5/magic, immunity to cold, and all of the qualities and immunities granted by the undead type. Any creature that grapples the Dread Skull Animus or hits it with a natural weapon takes a point of strength damage.',
			'bb/Speed/bb: The Dread Skull Animus has a base speed of 30 feet.',
			'bb/Attacks/bb: A Dread Skull Animus has 2 primary claw attacks that deal 1d4 damage and a primary bite attack that deals 1d6 damage.',
			'bb/Special Attacks/bb: Any target successfully hit one of the Dread Skull Animus\'s natural attacks takes 1d2 points of strength damage.',
			'bb/Abilities/bb: A Dread Skull Animus has strength, dexterity, wisdom, and charisma stats of 14 if the ii/dread skull/ii has a maxium spell level of 3rd, 18 if the maximum spell level is 6th, and 22 if its 9th. It has no constitution or intelligence score.',
			'bb/BAB/bb: A Dread Skull Animus\'s base attack bonus is equal to 3/4 of its hit dice.',
			'bb/Feats/bb: A Dread Skull Animus has Improved Initiative and Run as bonus feats.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>