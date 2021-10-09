<?php require '../../pageStart.php'; ?>
<title>Thyllkthoron Heritages</title>
<?php
	block2(
		'Thyllkthoron Heritages',
		'',
		false,
		[],
		[
			quick_array('You select a heritage at 1st level to reflect abilities passed down to you from your ancestors or common among those of your ancestry in the environment where you were born or grew up. You have only one heritage and can’t change it later. A heritage is not the same as a culture or ethnicity, though some cultures or ethnicities might have more or fewer members from a particular heritage.')
		],
		false,
		[
			[
				'title' => 'Ancient Blood Thyllkthoron',
				'spaced' => false,
				'texts' => [
					'Some Thyllkthoron have retained more of their demonic powers and appearance than others. These individuals are referred to as Ancient Blood Thyllkthoron or simply Ancient Bloods.',
					'An Ancient Blood almost always has two tiny horns and a long sinuous tail in addition to their bat like wings.',
					'You gain the Fiend trait in addition to having the Humanoid trait and are treated as both a humanoid and a demon from the Outer Sphere for most purposes including having a stronger alignment aura though only any evil or chaotic components of your alignment aura are stronger. Good or lawful components to your alignment aura are, conversely, one step weaker. You also gain a claw unarmed attack that deals 1d6 slashing damage. Your claws are in the brawling group and have the agile, finesse, and unarmed traits.'
				]
			],
			[
				'title' => 'Converted Thyllkthoron',
				'spaced' => false,
				'texts' => [
					'Some Thyllkthoron have devoted themselves to being good and fighting the forces of evil. Some of these mighty warriors have, at different times, received a blessing from Sarenrae converting their demonic nature into an angelic one. These rare individuals and their descendants are called Converted Thyllkthoron or simply Converted.',
					'A Converted loses the characteristic demonic features from their ancestors and their bat like wings are replaced with pure white feathered wings. These differences in appearance from the rest of their people make a major difference in how other people treat the Converted. Instead of associations with fiends and tieflings, Converted are often mistaken as aasimars or rarely as angels.',
					quick_format('You can cast ii/detect alignment/ii as a divine innate spell heightened to half your level, rounded up. You also gain a +1 circumstance bonus to Religion checks to Recall Knowledge about beings from the Outer Sphere.')
				]
			],
			[
				'title' => 'Cross Bred Thyllkthoron',
				'spaced' => false,
				'texts' => [
					'Due in large part to their origins, Thyllkthoron are genetically compatible with the vast majority of intelligent races and half Thyllkthoron children are not unheard of.',
					'Cross Bred Thyllkthoron appear like a particularly beautiful or handsome member of their non-Thyllkthoron parent or ancestor with the addition of the Thyllkthoron\'s recognizable wings, horns, and tails.',
					'You gain any traits possessed by the other race that you do not already have. You inherit the race\'s speed if it is higher along with any unique mechanics other than vision traits and can choose racial traits from the other race that you meet the prerequisites of.'
				]
			],
			[
				'title' => 'Native Thyllkthoron',
				'spaced' => false,
				'texts' => [
					'Most Thyllkthoron have adapted quite well to their home in the material plane and exhibit less demonic qualities.',
					'A Native Thyllkthoron will usually have a one or two tiny horns if any or more rarely a long sinuous tail.',
					'You become trained in Diplomacy (or another skill if you were already trained in Diplomacy), and you gain the No Cause For Alarm feat.'
				]
			]
		]
	);
	require '../../pageEnd.php';
?>