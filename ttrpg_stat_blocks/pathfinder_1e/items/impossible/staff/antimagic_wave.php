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
	impossibleStaffBlockAuto(
		'Antimagic Wave',	#name
		'Evocation',	#school
		11,	#lvl
		[
			'This staff resembles iron and has what appears to be a patina of rust across its length. Its top is decorated with a cracked dull gray ioun stone that has had its magical properties destroyed by being filled with antimagic. Touching this stone against an ongoing magical effect weakens it and draws the magic out, reducing the caster level of the effect and any DCs by 1 and making each round it is in contact reduce the remaining duration by 2 rounds instead. Touching multiple staves to an effect does not stack.',
			'By expending a charge from the staff, the following spell can be cast:'
		],	#staffDescPt1
		false,	#subschool
		['antimagic'],	#descriptors
		[
			'M' => 0,
			'S' => 1,
			'V' => 1
		],	#components
		'1 standard action',	#time
		'Close',	#range
		false,	#target
		false,	#effect
		'60-foot-radius spread and 40-foot-radius sphere, see text',	#area
		'instantaneous',	#duration
		'none or Will negates, see text',	#save
		'no',	#sr
		['This spell sends a powerful wave of antimagic to wash over the region.',
		'This wave deals nearly irreparable damage to the region in question, turning a 40-foot-radius spherical region centered on the point of origin into a permanent dead magic region wherein magic does not function.',
		'In a 60-foot-radius spread from the origin, this wave also attempts to wipe all magic from the region which has a number of effects on spells, magical items, and creatures in the area. Any ongoing spells, spell-like abilities, or other supernatural or otherwise magical effects in the area, without the antimagic trait, are automatically dispelled. This includes such magic blocking spells as ii/spellbane/ii. Any magic items in the area must make a Will save or else be rendered non-magical, though they retain any usefulness as a mundane object. Such objects cannot be restored. Artifacts who fail their save are instead only have their magic suppressed for a number of days equal to your caster level. Creatures in the area must also make a save or else be suffused with antimagic that prevents them from casting spells, using spell-like or supernatural abilities, receiving the benefits of magical potions, operating scrolls, wands, and staves, and exercising any other magical ability they may possess for 1 minute per caster level.'
		],	#spellDesc
		['Charging a ii/staff of antimagic wave/ii requires expending 4 9th level spell slots.']	#staffDescPt2
	);
	require $startDir.'pageEnd.php';
?>