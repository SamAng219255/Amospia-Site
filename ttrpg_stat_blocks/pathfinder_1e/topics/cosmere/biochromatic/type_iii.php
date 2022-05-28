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
		'Type III BioChromatic Entities',
		'info',
		quick_array([
			'The process generally thought of as Awakening creates Type III entities, a BioChromatic manifestation in an organic host far removed from being alive. Examples include Awakened ropes, cloth, or skeletal remains.',
			'Awakening a Type II entity requires a minimum of 100 Breaths. Ways by which it differs increase the cost. A table is provided below of various properties and conditions vs how much Breath is required to awaken it. Interpretable properties (such as how much it looks like a given creature or how well it could replicate a shape) are first determined by the player playing the awakener then passed by GM to determine the possibility of such.',
			labeledSTable(
				'Breath Requirements',
				[
					'Property or Condition',
					'Breath Required'
				],
				[
					[
						'Made of "Flesh" (Leather, meat, or similar)',
						'x1' 
					],
					[
						'Made of Bone',
						'x1.5' 
					],
					[
						'Made of animal byproducts (fur, wool, claws, horns, antlers, etc.)',
						'x1.5' 
					],
					[
						'Made of plant matter',
						'x2' 
					],
					[
						'Made of miscellaneous organic matter',
						'x5' 
					],
					[
						'Shaped like a member of the awakener\'s species',
						'x1' 
					],
					[
						'Shaped like a different type humanoid or animal familiar to the awakener',
						'x2' 
					],
					[
						'Can be shaped into a member of the awakener\'s species',
						'x1.5' 
					],
					[
						'Shaped like a part of creature useable to perform it\'s command',
						'x1.5' 
					],
					[
						'Can be shaped into a part of creature useable to perform it\'s command',
						'x2' 
					],
					[
						'Shape does not at all resemble a creature or relevant creature part',
						'x5' 
					],
					[
						'Small or smaller size',
						'x1' 
					],
					[
						'Larger than Small size',
						'x(0.5 times the number of size categories above small)' 
					],
					[
						'Has the Broken condition',
						'x1.5' 
					],
					[
						'At least 1 square foot of color available.',
						'x1' 
					],
					[
						'Less than a square foot of color available',
						'x2' 
					]
				]
			),
			'Numerous different commands can be given to the object to awaken it. Once awakened an object will attempt to perform its task until it is destroyed or the awakener who awakened it removes its Breath which can be done like taking the Breath out of an object where it is stored. A Small or smaller Type III entity has a strength score of 10 minus 4 per category below Small and a dexterity score of 12 plus 2 per category below Small. A Medium or larger Type III entity has a strength score of 14 plus 8 per category above Medium and a dexterity score of 10 minus 2 per category above Medium to a minimum of 6. The following are some examples of what could be done using the right commands ordered by complexity. The complexity of a command is limited by an awakener\'s ability.'
		]),
		true
	);
?>
<dl>
	<dt>"Untie.", "Hold (something).", "Grab (something).", "Twist around.", etc.</dt>
	<dd>A rope could be given a command as per animate rope except that the rope is able to move around at a speed of 15 feet and with a climb speed matching that and that it is capable of grappling a creature.</dd>
	<dt>"(do something) when thrown."</dt>
	<dd>Wait until after it has been thrown to perform its action.</dd>
	<dt>"Grab things.", "Hold things."</dt>
	<dd>Attempts to grab every object and grapple every creature it can, starting with the nearest.</dd>
	<dt>"(do something to) things."</dt>
	<dd>Applies its action to every object and creature it can, starting with the nearest.</dd>
	<dt>"Grab things other than me."</dt>
	<dd>Attempts to grab every object and grapple every creature other than the awakener it can, starting with the nearest.</dd>
	<dt>"Lift me."</dt>
	<dd>Will attempt to pick up the awakener and place them up as high as it can.</dd>
	<dt>"Protect me."</dt>
	<dd>Animates the object to shield the awakener from danger granting a bonus to AC.</dd>
	<dt>"Grab things, then climb things, then pull me up."</dt>
	<dd>A more complicated series of instructions forming a single overall action. The object will attempt to grab a hold of nearby objects, climb up them, then lift the awakener up to the top of them.</dd>
	<dt>"Upon call, become my fingers and grip."</dt>
	<dd>Instructs an object to copy the actions of the awakener's fingers in gripping and releasing objects granting a bonus to relevant checks.</dd>
	<dt>"Become as my legs and give them strength."</dt>
	<dd>Instructs an object to copy the actions of the awakener's legs and reinforce them granting benefits such as reducing fall damage and increasing lift weight.</dd>
	<dt>"Fight for me as if you were me."</dt>
	<dd>Object takes a weapon and copies the relevant attack actions made by the awakener.</dd>
</dl>
<?php require $startDir.'pageEnd.php'; ?>