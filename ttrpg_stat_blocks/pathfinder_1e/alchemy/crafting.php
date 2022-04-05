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
		'Crafting',
		'description',
		quick_array([
			'Items created through advanced alchemy have a market price and a crafting cost that is equal to half the price and that must be paid in alchemical supplies before the item can be created. For most items, the price is equal to the recipe level times the alchemy level of the creator times 50 gp. Level 0 recipes treat their recipe level as being 1/2 for the purposes of determining their price and cost. Objects produced by substance recipes are worth less based on how long ago they were produced. For example, an item with only 3/4 of its duration remaining will have a price that is 3/4 as much. It is often possible to hire a practicer of advanced alchemy to perform a cauldron recipe for the same price as buying the product of a recipe of the same level and alchemy level. They can also be paid to continue tending the pot at 250 gp an hour or 2,000 gp a day though it may be better to opt for paying an expert hireling, trained in alchemy, to tend the mixture at 10 gp a day.',
			'Crafting advanced alchemy recipes generally takes 8 hours or 1 day for each 1,000 gp in its base price or 2 hours if its base price is 250 gp or less. You can choose to increase the DC by 5 to double the rate of crafting to 4 hours for each 1,00 gp or 1 if its base price is 250 gp or less. At the begining of the first hour each day you attempt to work on an advanced alchemy recipe when you have already spent at least 8 hours working on advanced alchemy recipes you become fatigued and gain a -4 penalty to all of your mental stats and you must make a Craft (alchemy) check equal to 15 plus the level of the recipe or else the previous hour of work is lost. At the beginning of each hour of work afterwards the penalty increases by -2 and you must make another check to avoid losing the previous hour of work, the DC of which increases by 2. Once the penalty increases to where it would become equal to or greater than your intelligence score, you immediately fall unconscious. The penalty is removed after spending at least 8 consecutive hours resting.',
			'While crafting an advanced alchemy recipe, you must spend at least 2 hours a day working on it or else the mixture is ruined and all of the time and materials spent lost. A character can spend up to 4 hours a day crafting an advanced alchemy recipe while adventuring.',
			'When crafting an advanced alchemy recipe, you may voluntarily decrease your effect alchemy level reducing both the potency and cost of the recipe, though, you take a cumulative -1 penalty to your Craft (alchemy) check to create the recipe for each level you lower your effective level by in this way and you cannot lower your effective alchemy level below the minimum alchemy level to create a recipe of its level.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>