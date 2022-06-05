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
	advAlchemyCreationBlock(
		'Annort',// Name
		[],// Descriptors
		3,// Level
		[
			'This recipe creates one and half pounds of as/special_materials|Annort|annort/as. Annort is an alchemically engineered metal that opposes necromantic forces of undeath, similar to how many creatures are weakened by cold iron or silver.',
			'Annort weapons are treated as good, silver, and magic for the purposes of overcoming the damage reduction of undead creatures. Annort weapons also overcome half the damage reduction of undead that would be overcome if the weapon were piercing, slashing, or bludgeoning, as well as half the damage reduction that does not have a listed method to overcome it (DR /—).',
			'Annort weapons can also be used to better strike incorporeal undead. Non-magic annort weapons are treated as magic for the purpose of harming incorporeal undead and magic annort weapons are treated as having the ghost touch property for the purpose of harming incorporeal undead.',
			'Annort has 30 hit points per inch of thickness and hardness 10. The same as steel.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>