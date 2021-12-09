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
?>
<title>Enchanted Golden Apple</title>
<?php
	magicItemBlockAuto(
		"Enchanted Golden Apple",// Name
		"Universal",// School
		11,// CL
		"none",// SLot
		8700,// Price
		10,// Weight
		"This apple is made of solid gold yet can be eaten like a normal apple, its surface shimmers with colors. Taking a bite reveals it to be the single most delicious thing the creature has ever eaten. The first creature to take a bite from this apple receives fast healing 4, temporary hit points equal to four times their number of hit dice for the next minute and 30 acid, cold, electricity, fire, and sonic resistance and DR 30/— for the next 10 minutes. Taking a bite can be done as the same action as drinking a potion. After the first bite the apple no longer grants these benefits but any creature that eats at least about 1/16th of the apple receives nourishment as if it were normal meal for a creature of their size.
		The apple does not spoil nor can it be poisoned or made unclean. Any contaminates are automatically purified from the fruit. The apple can be divided before consumption and each piece remains linked and provides its normal effect. The first creature to take bite of any piece receives the effect.
		A creature that takes a bite of a golden apple cannot benefit from eating another golden apple for one minute and does not count as the first creature if they take a bite of another.",// Desc
		false,// Destruction
		"bb/Requirements/bb Craft Wondrous Item, ii/celestial healing, greater/ii, ii/false life, greater/ii, ii/goodberry/ii, ii/resist energy/ii, ii/stoneskin/ii; bb/Cost/bb 4,600 gp"// Construction
	);
	require $startDir.'pageEnd.php';
?>