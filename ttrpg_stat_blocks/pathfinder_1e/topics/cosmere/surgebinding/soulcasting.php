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
	surgeBlock(
		'Soulcasting', // name
		'Transformation', // surge
		'Touch', // range
		'one creature or object', // target=false
		false, // effect=false
		false, // area=false
		'varies', // cost
		'none; instantaneous', // interval
		false, // dismiss
		[
			'Using soulcasting, a surgebinder can change an object into another material. When doing so, the surgebinder must use stormlight currently held in a gemstone and cannot use their internal reserve. Additionally, which gemstone is used determines what materials the target object can be soulcast into. Each of the ten polestone gems are capable of soulcasting objects into one of aa/ten_essences_cosm|the ten essences/aa and materials related to that essence. Certain substances are easier to soulcast into while some objects are harder to soulcast. Difficulty to soulcast is defined in steps, with smaller numbers correlating to easier transformations.',
			'The process referred to as soulcasting first involves the surgebinder to mentally pass somewhat into the cognitive realm where they must convince the cognitive representation of the object to undergo the desired transformation. Investiture is required to convince the object to transform and to allow the object to undergo the transformation. Initiating soulcasting without available investiture allows the surgebinder to pass into the cognitive realm but they cannot successfully transform the object. Whether or not the surgebinder is successful, the surgebinder is forced back into the physical realm once the process is complete.',
			'Successful soulcasting requires making a diplomacy check equal to 20 plus 3 per step of difficulty. A surgebinder receives a bonus equal to their level. Up to 20 additional points of investiture may be given to the representation of the object in order to gain a bonus equal to the number of points of investiture. This cost is not reduced by the knight radiant\'s stormlight efficiency.',
			'In order to enable the cognitive representation to undergo the transformation, it must be infused with at least 20 points of investiture. This amount is affected by the knight radiant\'s stormlight efficiency.',
			'The following tables indicate how many steps of difficulty are involved in a given transformation.',
			labeledSTable(
				'Difficulty Based on Desired Material',
				[
					'Resulting Material',
					'Steps'
				],
				[
					[
						'Primary Essence',
						'+0'
					],
					[
						'Secondary Essence',
						'+2'
					],
					[
						'Tertiary Essence',
						'+6'
					],
					[
						'Generic Substance (Oil, Water, Glass, etc.)',
						'+0'
					],
					[
						'Specific Substance (Canola Oil, Blue Glass, Toxic Gas, etc.)',
						'+1'
					],
					[
						'Mixture (Occluded Quartz, Alloys, Salt Water, etc.)',
						'+3'
					],
					[
						'Has Additional Structure (Kernels of Grain, Fabric, Specific Organs, etc.)',
						'+6'
					],
					[
						'Polestones',
						'Impossible'
					],
					[
						'Innately Invested Materials (God-Metals)',
						'Impossible'
					]
				],
				true,
				false,
				false
			),
			labeledSTable(
				'Difficulty Based on Target',
				[
					'Target Object',
					'Steps'
				],
				[
					[
						'Living Creatures',
						'+10' 
					],
					[
						'Living Plants',
						'+5' 
					],
					[
						'Highly Invested Individuals (Knights Radiant, Heralds, Allomancers, etc.)',
						'Impossible' 
					],
					[
						'Aluminum',
						'Impossible' 
					]
				],
				true,
				false,
				false
			)
		]  // desc
	);
	require $startDir.'pageEnd.php';
?>