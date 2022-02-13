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
		'Deconstruction (Int; Trained Only)',
		'skill',
		quick_array([
			'You are skilled at disassembling and breaking down a class of items. Like Craft, Knowledge, Perform, and Profession, Deconstruction is actually a number of seperate skills. You could have several Deconstruction skills, each with their own ranks. While the types of Deconstruction skills are similar to the types of Craft skills, Deconstruction skills are often slightly more broad as methods of disassembly can often overlap.',
			'Deconstruction skills break down items into the same components that would be needed to Craft the item. For instance, Deconstruction (alchemy) is able to use alchemical tools to refine out the constituent reagents, Deconstruction (paintings) would be able to seperate out the different paints used and return them to a usable state as well as leaving the canvas completely clear, and Deconstruction (weapons) would be able to recover any wooden parts and any raw metal used in its creation.',
			'bb/Check/bb: You can practice your trade scrapping items to make a decent living, earning half your check result in gold pieces per week of dedicating work. You know how to use the tools of your trade, how to perform the trade\'s daily tasks, how to supervise untrained helpers, and how to handle common problems. (Untrained laborers and assistants earn an average of 1 silver piece per day.)',
			'The basic function of the Deconstruction skill, however, is to allow you to recover the materials from an item of the appropriate type. The DC depends on the complexity of the item to be broken down. The DC, your check result, and the price of the item determine how long it takes to break down a particular item. The item\'s price also determines the amount of raw materials produced.',
			'All deconstruction requires artisan\'s tools to give the best chance of success. If improvised tools are used, the check is made with a -1 penalty. On the other hand, masterwork astisan\'s tools provide a +2 circumstance bonus on the check.',
			'To determine how much time it takes to break down an item and how many gold pieces worth of materials to produced, follow these steps.',
			'<ol>
				<li>Find the item’s price in silver pieces (1 gp = 10 sp).</li>
				<li>Find the item’s DC such from the table listed on the Craft skill or listed in the entry of an alchemical item.</li>
				<li>If you succeed you will receive 1/3 the item\'s price in raw materials.</li>
				<li>Make an appropriate Deconstruction check representing one day\'s worth of work. If the check succeeds, multiply your check result by the DC. If the result × the DC equals the price of the item in sp, then you have completed breaking down the item. (If the result × the DC equals double or triple the price of the item in silver pieces, then you’ve completed the task in one-half or one-third of the time. Other multiples of the DC reduce the time in the same manner.) If the result × the DC doesn’t equal the price, then it represents the progress you’ve made this week. Record the result and make a new Deconstruction check for the next week. Each week, you make more progress until your total reaches the price of the item in silver pieces.</li>
			</ol>',
			'If you fail a check by 4 or less, you make no progress this week. If you fail by 5 or more, you ruin half the remaining raw materials and will receive fewer raw materials from the item.',
			'Recovered materials can be used to make or repair items of the same materials or sold at half their price like ordinary objects.',
			'bb/Action/bb: Does not apply. Deconstruction checks are made by the day or week (see above).',
			'bb/Try Again/bb: Yes, but each time you fail by 5 or more, you ruin half the remaining raw materials.',
			'bb/Special/bb: You may voluntarily add +10 to the indicated DC to deconstruct an item. This allows you to break down the item more quickly (since you’ll be multiplying this higher DC by your Deconstruction check result to determine progress). You must decide whether to increase the DC before you make each weekly or daily check.',
			'To make an item using Deconstruction (alchemy), you must have alchemical equipment. Alchemical equipment can be difficult or impossible to come by in some places. Purchasing and maintaining an alchemist’s lab grants a +2 circumstance bonus on Deconstruction (alchemy) checks because you have the perfect tools for the job, but it does not affect the cost of any items made using the skill. ',
			'A gnome can choose to receive a +2 bonus on a Deconstruction of their choice in place of a Craft or Profession skill.',
			'If using the Salvage rules, a creature trained in a Deconstruction skill can use it in place of a Craft skill when salvaging an appropriate item, representing a less careful way of breaking down an item.',
			'On any other check, ranks in a Deconstruction skill can be used in place of rank in an appropriate Craft skill with a -5 penalty and ranks in a Craft skill can be use in place of ranks in an appropriate Deconstruction skill with a -10 penalty.',
			'An appropriate Deconstruction skill check can be used in place of a Disable Device skill check to perform action such as opening a lock or disarming a trap by carefully disassembling the object in place just enough to disable it.',
			'Finally, ranks in an appropriate Deconstruction can be used in place of a creature\'s BAB when making sunder attempts against an object. If so, and if the check succeeds, you can treat the item\'s hardness as being reduced by an amount equal to your intelligence modifier.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>