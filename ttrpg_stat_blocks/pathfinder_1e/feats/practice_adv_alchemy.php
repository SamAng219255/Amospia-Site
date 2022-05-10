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
		'Practice Advanced Alchemy',
		'feat',
		quick_array([
			'ii/You can create purely alchemical items whose power rival that of many spells./ii',
			'bb/Prerequisites/bb: 1 rank in Craft (alchemy)',
			'bb/Benefit/bb: You gain an Alchemy Level equal to your number of ranks in Craft (alchemy) and can create any advanced alchemy recipe that you meet the prerequisistes for. Crafting most recipes takes 8 hours or 1 day for each 1,000 gp in its base price or fraction thereof or 2 hours if its base price is 250 gp or less. You can choose to increase the DC by 5 to double the rate of crafting to 4 hours for each 1,000 gp or 1 if its base price is 250 gp or less.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>