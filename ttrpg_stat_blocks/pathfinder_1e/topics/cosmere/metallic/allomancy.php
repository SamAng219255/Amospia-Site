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
		'Allomancy',
		'desc',
		quick_array([
			'Allomancy grants the user the ability to "burn" metals that are within their body in order to channel Preservation\'s investiture into a form they can use.',
			'Most metals grant a passive effect that is treated as a spell-like ability that lasts as long as you burn the metal. Others grant access to one or more spell-like abilities you can use while burning the metal and a few grant both. These abilities are subject to spell resistance unless stated otherwise and dispelling the passive effect of a metal being burned also makes the allomancer stop burning that metal. The spell level of these abilities are dynamic and are both determined by the ability that grants the allomancy and can be increased by various effects. The allomancer\'s caster level for these abilities is treated being twice their spell level.',
			'The most common way of getting metal inside oneself is to ingest it, usually as flakes in an oil or alcohol solution, but any other method that succeeds in getting the metal entirely inside their body will work. (Blades and spikes sticking into the subject do not count as they have created a hole in the body that they are located in rather than being entirely inside.)',
			'Once a metal is burned, it is no longer in the allomancer\'s system. If leftover metal is not burned it will lead to any relevant metal poisoning as would normally be expected ingesting metal. After a metal is ingested its mass is added to the allomancer\'s stores of investiture, this does not have a maximum beyond what is physically able to be ingested by the allomancer.',
			'Burning each metal consumes investiture from the relevant pool at a different rate. Each metal lists a Burn Time which is how long 1/4 ounce or 4 drams of metal lasts. Starting or stopping burning a metal can be done as a free action. Each metal may only be started or stopped once each per round.'
		]),
		true,
		[
			[
				'title' => 'Flaring',
				'spaced' => true,
				'texts' => quick_array([
					'Allomancers can flare a metal they are burning as a swift action, expending an additional 1/4 ounce of metal to produce a greater effect that lasts for the remainder of their burn time. This effect is detailed in the metal\'s description. In addition to this effect, the allomancy counts as being 1 spell level higher.'
				])
			],
			[
				'title' => 'Savantism',
				'spaced' => true,
				'texts' => quick_array([
					'Allomancers can become savants by repeatedly flaring their metal. Each time an allomancer flares their metal there is a 5% chance that they will earn a point of savantism in that allomantic metal. This chance increases by 1% for each point of savantism the allomancer already has in that allomantic metal. Each day that an allomancer goes without flaring their metal, there is a 50% that they lose 1 point of savantism in that allomantic metal. This chance is reduced by 1% per 2 points of savantism in that allomantic metal. Each metal has a table describing the effects of savantism on the user. Some tables list a drawback column that includes penalties applied while the allomancer is not burning that metal. An individual receives all bonuses and penalties of all of the entries less than their number of points of savantism in that metal, stacking with previous entries and any bonuses and penalties in the main description.'
				])
			],
			[
				'title' => 'Metals',
				'spaced' => true,
				'texts' => quick_array([
					'Each of the 16 base metals grant a single unique power to an allomancer that burns it. Every god-metal also grants a unique power that is generally greater than those of the base 16. Lastly, each of the base 16 metals can be alloyed with any one of the god-metals to yield an additional metal that can be burned with an additional unique effect. This would yield a total 288 unique effects. This immense number of abilities are not all listed or even known. However, the powers granted by the 16 base metals are known and given an entry below as well as those of the god-metals lerasium and atium, as well as that of the alloy of gold and atium, which is known as malatium.',
					'Eight of the base metals are alloys that are primarily composed of a different one of the eight base metals which is a pure metal. These metal-alloy pairs generally give related but opposite effects, with the alloy "pushing" while the base metal "pulls". There are 4 categories, called quadrants, of base metals that each contain two metal-alloy pairs. Within each quadrant, one pair is designated as Internal while the other is External. These categories are Physical (Iron/Steel [External] and Tin/Pewter [Internal]), Mental (Zinc/Brass [External] and Copper/Bronze [Internal]), Enhancement (Aluminum/Duralumin [Internal] and Chromium/Nicrosil [External]), and Temporal (Gold/Electrum [Internal] and Cadmium/Bendalloy [External]).',
					'God-metals and their alloys are not generally placed in pushing/pulling, internal/external, and quadrant categories, however they are listed with them for the purposes of game mechanics and categorization for effects that apply to only one of more category of allomantica ability.',
					'It should be noted that these designations are invented by the people of Scadrial and while they do accurately generally describe the abilities of the metals, they do not have to. Meaning some vary slightly in their effect and additional metals are not required to fit in the pattern.'
				])
			],
			[
				'title' => 'Mistings',
				'spaced' => true,
				'texts' => quick_array([
					'Most abilities that grant access to allomancy only allow a creature to burn one type of metal. Such allomancers are called mistings.',
					'Mistings generaly receive a second title, which is based on which metal they can burn.'
				])
			],
			[
				'title' => 'Mistborn',
				'spaced' => true,
				'texts' => quick_array([
					'A rare few allomancers are what are called mistborn. Mistborn are able to burn every type of metal that can be burned.'
				])
			]
		]
	);
	table(
		[
			'Metal',
			'User',
			'Effect',
			'Pushing/Pulling',
			'Internal/External',
			'Quadrant'
		],
		[
			[
				'Iron',
				'link' => 'allomancy/iron.php',
				'Lurcher',
				'Pulls on Nearby Metals',
				'Pulling',
				'External',
				'Physical'
			],
			[
				'Steel',
				'link' => 'allomancy/steel.php',
				'Coinshot',
				'Pushes on Nearby Metals ',
				'Pushing',
				'External',
				'Physical'
			],
			[
				'Tin',
				'link' => 'allomancy/tin.php',
				'Tineye',
				'Increases Senses',
				'Pulling',
				'Internal',
				'Physical'
			],
			[
				'Pewter',
				'link' => 'allomancy/pewter.php',
				'Pewterarm',
				'Increases Physical Abilities',
				'Pushing',
				'Internal',
				'Physical'
			],
			[
				'Zinc',
				'link' => 'allomancy/zinc.php',
				'Rioter',
				'Enflames (riots) Emotions',
				'Pulling',
				'External',
				'Mental'
			],
			[
				'Brass',
				'link' => 'allomancy/brass.php',
				'Soother',
				'Dampens (soothes) Emotions',
				'Pushing',
				'External',
				'Mental'
			],
			[
				'Copper',
				'link' => 'allomancy/copper.php',
				'Smoker',
				'Hide Allomantic Pulses',
				'Pulling',
				'Internal',
				'Mental'
			],
			[
				'Bronze',
				'link' => 'allomancy/bronze.php',
				'Seeker',
				'Can Hear Allomantic Pulses',
				'Pushing',
				'Internal',
				'Mental'
			],
			[
				'Cadmium',
				'link' => 'allomancy/cadmium.php',
				'Pulser',
				'Slows Down Time',
				'Pulling',
				'External',
				'Temporal'
			],
			[
				'Bendalloy',
				'link' => 'allomancy/bendalloy.php',
				'Slider',
				'Speeds Up Time',
				'Pushing',
				'External',
				'Temporal'
			],
			[
				'Gold',
				'link' => 'allomancy/gold.php',
				'Augur',
				'Reveals Your Past Self',
				'Pulling',
				'Internal',
				'Temporal'
			],
			[
				'Electrum',
				'link' => 'allomancy/electrum.php',
				'Oracle',
				'Reveals Your Future',
				'Pushing',
				'Internal',
				'Temporal'
			],
			[
				'Chromium',
				'link' => 'allomancy/chromium.php',
				'Leecher',
				'Wipes Allomantic Reserves of Target',
				'Pulling',
				'External',
				'Enhancement'
			],
			[
				'Nicrosil',
				'link' => 'allomancy/nicrosil.php',
				'Nicroburst',
				'Enhances Allomantic Burn of Target',
				'Pushing',
				'External',
				'Enhancement'
			],
			[
				'Aluminum',
				'link' => 'allomancy/aluminum.php',
				'Aluminum Gnat',
				'Wipes Internal Allomantic Reserves',
				'Pulling',
				'Internal',
				'Enhancement'
			],
			[
				'Duralumin',
				'link' => 'allomancy/duralumin.php',
				'Duralumin Gnat',
				'Enhances Current Metal Burned',
				'Pushing',
				'Internal',
				'Enhancement'
			],
			[
				'Lerasium',
				'link' => 'allomancy/lerasium.php',
				'—',
				'Turns You into a Mistborn',
				'Pushing',
				'Internal',
				'Enhancement'
			],
			[
				'Atium',
				'link' => 'allomancy/atium.php',
				'Seer',
				'Reveals The Future',
				'Pushing',
				'Internal',
				'Temporal'
			],
			[
				'Malatium',
				'link' => 'allomancy/malatium.php',
				'—',
				'Reveals Your Target\'s Past',
				'Pulling',
				'Internal',
				'Temporal'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>