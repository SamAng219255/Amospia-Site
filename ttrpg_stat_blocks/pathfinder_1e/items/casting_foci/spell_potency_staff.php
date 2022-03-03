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
	magicItemBlockAuto(
		'Spell Potency Staff',
		'Evocation',
		9,
		'Focus',
		'15,000 gp (+1), 30,000 gp (+2), 45,000 gp (+3)',
		'5 lbs.',
		'This staff acts as a casting focus and grants the caster a bonus to their caster level for spells cast. When a spell is being cast from this staff a bright light shines from he tip momentarily illuminating the region as per the ii/light/ii spell for the duration of the casting time. If a spell of 5th level or higher is cast from the staff it shines as per ii/daylight/ii for the same duration instead.
		A ii/spell potency staff/ii can be wielded and enchanted as though it were a masterwork quarterstaff.
		A ii/spell potency staff/ii can be modified to store spells like a normal staff in addition to its properties as a casting focus in which case the bonus also applies to spells cast from the staff. A spell potency staff be modified to act as an existing type of staff or it can be made into a cutom staff following the standard rules for <a href="https://www.aonprd.com/Rules.aspx?Name=Creating%20Staves&Category=Magic%20Item%20Creation">creating staves</a> found on page 552 of the core rule book. In iether case the price of the added staff is added to the price of the completed item.
		It can also be made into a meta magic rod instead. In which case it costs as much to convert it as out would to create a new metamagic rod of that type.
		A spell potency staff can be used for a retributive strike, requiring it to be broken by its wielder. (If this breaking of the staff is purposeful and declared by the wielder, it can be performed as a standard action that does not require the wielder to make a Strength check.) All charges currently in the staff are instantly released in a 30-foot spread. All creatures and objects within 2 squares of the broken staff take an amount of damage equal to 10 x the number of charges in the staff, those 3 or 4 squares away take an amount of damage equal to 7 x the number of charges, and those 5 or 6 squares away take an amount of damage equal to 5 x the number of charges. For the purpose of the damage from the retributive strike, increase the number of charges by twice the caster level bonus and treat a spell potency staff as having only those charges gained from its caster level bonus if it cannot store spells. All those affected can make DC 17 Reflex saves to reduce the damage by half.
		The character breaking the staff has a 25% chance of traveling to another plane of existence (01—25 on a d%), but if she does not, the explosive release of spell energy instantly destroys her. Only certain items, including the staff of the magi and the staff of power, are capable of being used for a retributive strike.',
		false,
		'bb/Requirements/bb Craft Wondrous Item or Craft Staff; bb/Cost/bb (+1) 7,500 gp, (+2) 15,000 gp, (+3) 22,500 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Staff, spells to be added; bb/Cost/bb read description
		OR
		Same as a the chosen metamagic rod.'
	);
	require $startDir.'pageEnd.php';
?>