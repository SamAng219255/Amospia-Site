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
		'Feruchemy',
		'desc',
		quick_array([
			'Feruchemy allows the user to store attributes into pieces of metal, called storing, and draw them out later, called tapping. Storing and tapping a metal is a supernatural ability and starting or stopping can be done as a free action.',
			'These attributes can be stored and tapped at differing rates. In order to represent this fact, each metal has a list of increments associated with it. While storing or tapping, the feruchemist picks one of the listed increments at which to store or tap the attribute at. Some increments are denoted by parentheses "()" indicating that it is an increment unit. A feruchemist can pick any number of increment units at a time and can pick them multiple times multiplying the effects granted. The only limitation is that the creature must be capable of taking the associated penalties and all increments chosen must be either storing or tapping depending on which the feruchemist is currently doing. Increment units can be combined with increments of 0 or can be combined with non-zero increments with the same limitations.',
			'Each metal has a burn rate. Once the feruchemist stores an attribute for an amount of time equal to the burn rate, the metalmind acquires an amount of investiture equal to the increment it was stored at. The feruchemist can cease storing during that time but they do not gain the benefit until they store a given increment for the entire duration. When the feruchemist begins tapping, they expend an amount of investiture from their metalmind equal to the increment chosen. This expenditure allows them to tap the attribute up to that increment for the rest of the burn rate before they need to expend additional investiture. If the feruchemist wishes to tap the attribute at a higher increment during that time they must expend the difference in investiture between what they began storing and the new increment allowing them to tap up to that new increment for the remainder of the burn rate.',
			'Increments are written in terms of the cost of tapping the metalmind, so an increment of -1 will add 1 point of investiture to the metalmind while an increment of 1 will remove 1 point of investiture.',
			'It is possible to tap or store into multiple of the same type of metalmind simultaneously. It is also possible for a feruchemist to tap a metalmind of the same type as they are currently storing an attribute in, combining the increments, effectively transferring stores from one metalmind to another. It is also possible to directly transfer points from one metalmind to another.',
			'With few exceptions, investiture stored in a metalmind is keyed to the identity of the feruchemist who put it there and can only be tapped by them. Multiple feruchemists can store investiture in the same metalmind but the total amount stored cannot be greater than the maximum amount able to be stored in the metalmind.'
		]),
		true,
		[
			[
				'title' => 'Metalminds',
				'spaced' => true,
				'texts' => quick_array([
					'Any piece of metal containing a stored attribute is considered a metalmind though some objects are specifically designed as such and usually appear as metal jewelry. Up to 1 pound of such jewelry can be worn without using up a magic item slot and is considered a single slotless magic item. Any magic item slot can be filled with up to 1 pound of worn metalminds counting as a single magic item of that slot. This takes up the slot and prevents other magic items from being used in that slot. Touched pieces of metal that are not worn can be used but they must be either held or touched while being used.',
					'Up to 256 points of investiture can be stored in a metalmind per pound of its weight. (16 per ounce, 5 per normal sized coin, or 1 per dram which which 1/16th of an ounce) The feruchemist must be in contact with the metalmind the entire time they are storing or tapping. A metalmind with investiture in it has SR equal to 10 + (30 * the number of points of investiture / the maximum points of investiture that can be stored) rounded down. (i.e. A 5 lb. piece of metal that can store 1,280 points of investiture and contains 320 points of investiture has an SR of 10 + (30 * 320 / 1280) = 17)'
				])
			],
			[
				'title' => 'Compounding',
				'spaced' => true,
				'texts' => quick_array([
					'If an individual is able to allomantically burn a metal they are also capable of storing a feruchemical attribute into, when burning a piece of metal that has investiture they could tap, the individual gains the pool of points of investiture that was in the metal and additional points equal half of the number of points of investiture stored in the metal rounded down. These points can be automatically deposited into a metalmind of the correct type, sequestering them away for later use, or spent in that form as though tapping a metalmind. These points of investiture fade if not used or stored within 1 minute.'
				])
			],
			[
				'title' => 'Savantism',
				'spaced' => true,
				'texts' => quick_array([
					'Feruchemists can become savants by continuously compounding a given feruchemical metal. For each point a feruchemist taps from a source, up to the number of additional points gained from compounding in that source, there is a 2% chance that they will earn a point of savantism in that feruchemical metal. This chance increases by 1% for every 2 points of savantism the feruchemist already has in that feruchemical metal. Each day that a feruchemist goes without tapping their compounded metal, there is a 50% chance that they lose 1 point of savantism in that feruchemical metal. This chance is reduced by 1% per 2 points of savantism in that feruchemical metal. Each metal has a table describing the effects of savantism on the user while tapping the metal. Some tables list a drawback column that includes penalties applied while the feruchemist is not tapping that metal. An individual receives all bonuses and penalties of all of the entries less than their number of points of savantism in that metal, stacking with previous entries and any bonuses and penalties in the main description.'
				])
			],
			[
				'title' => 'Metals',
				'spaced' => true,
				'texts' => quick_array([
					'Each of the 16 base metals can have a single unique attribute stored in it. Every god-metal also can have a unique attribute stored in it that generally grants greater ability than those of the base 16. Lastly, each of the base 16 metals can be alloyed with any one of the god-metals to yield an additional metal that can have an additional unique attribute stored within. This would yield a total of 288 unique attributes. This immense number of abilities are not all listed or even known. However, the attributes stored in the 16 base metals, as well as the god-metal atium, are known and listed here.',
					'Eight of the base metals are alloys that are primarily composed of a different one of the eight base metals which is a pure metal. There are 4 categories, called, quadrants, of base metals that each contain two metal-alloy pairs. These categories are Physical (Iron/Steel and Tin/Pewter), Cognitive (Zinc/Brass and Copper/Bronze), Spiritual (Aluminum/Duralumin and Chromium/Nicrosil), and Hybrid (Gold/Electrum and Cadmium/Bendalloy).',
					'It should be noted that these designations are invented by the people of Scadrial and while they do accurately generally describe the abilities of the metals, they do not have to. Meaning some vary slightly in their effect and additional metals are not required to fit in the pattern.'
				])
			],
			[
				'title' => 'Ferrings',
				'spaced' => true,
				'texts' => quick_array([
					'Most abilities that grant access to feruchemy only allow a creature to store and tap an attribute in one type of metal. Such feruchemists are called ferrings.',
					'Ferrings generaly receive a second title, which is based on which metal they can use.'
				])
			],
			[
				'title' => 'Full Feruchemist',
				'spaced' => true,
				'texts' => quick_array([
					'A rare few feruchemists are what are called full feruchemists. Full feruchemists are able to store and tap attributes to and from every type of metal that can have attributes stored in it.'
				])
			]
		]
	);
	table(
		[
			'Metal',
			'User',
			'Effect',
			'Quadrant'
		],
		[
			[
				'Iron',
				'link' => 'feruchemy/iron.php',
				'Skimmer',
				'Stores Physical Weight',
				'Physical'
			],
			[
				'Steel',
				'link' => 'feruchemy/steel.php',
				'Steelrunner',
				'Stores Physical Speed',
				'Physical'
			],
			[
				'Tin',
				'link' => 'feruchemy/tin.php',
				'Windwhisperer',
				'Stores Senses',
				'Physical'
			],
			[
				'Pewter',
				'link' => 'feruchemy/pewter.php',
				'Brute',
				'Stores Physical Strength',
				'Physical'
			],
			[
				'Zinc',
				'link' => 'feruchemy/zinc.php',
				'Sparker',
				'Stores Mental Speed',
				'Cognitive'
			],
			[
				'Brass',
				'link' => 'feruchemy/brass.php',
				'Firesoul',
				'Stores Warmth',
				'Cognitive'
			],
			[
				'Copper',
				'link' => 'feruchemy/copper.php',
				'Archivist',
				'Stores Memories',
				'Cognitive'
			],
			[
				'Bronze',
				'link' => 'feruchemy/bronze.php',
				'Sentry',
				'Stores Wakefulness',
				'Cognitive'
			],
			[
				'Cadmium',
				'link' => 'feruchemy/cadmium.php',
				'Gasper',
				'Stores Breath',
				'Hybrid'
			],
			[
				'Bendalloy',
				'link' => 'feruchemy/bendalloy.php',
				'Subsumer',
				'Stores Energy',
				'Hybrid'
			],
			[
				'Gold',
				'link' => 'feruchemy/gold.php',
				'Bloodmaker',
				'Stores Health',
				'Hybrid'
			],
			[
				'Electrum',
				'link' => 'feruchemy/electrum.php',
				'Pinnacle',
				'Stores Determination',
				'Hybrid'
			],
			[
				'Chromium',
				'link' => 'feruchemy/chromium.php',
				'Spinner',
				'Stores Fortune',
				'Spiritual'
			],
			[
				'Nicrosil',
				'link' => 'feruchemy/nicrosil.php',
				'Soulbearer',
				'Stores Investiture',
				'Spiritual'
			],
			[
				'Aluminum',
				'link' => 'feruchemy/aluminum.php',
				'Trueself',
				'Stores Identity',
				'Spiritual'
			],
			[
				'Duralumin',
				'link' => 'feruchemy/duralumin.php',
				'Connector',
				'Stores Connection',
				'Spiritual'
			],
			[
				'Atium',
				'link' => 'feruchemy/atium.php',
				'—',
				'Stores Youthfulness',
				'Hybrid'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>