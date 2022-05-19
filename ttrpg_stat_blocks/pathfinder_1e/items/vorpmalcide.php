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
		'Vorpmalcide',
		'item',
		[
			'<b>Aura</b> Overwhelming Evocation; <b>CL</b> 30th',
			'<b>Slot</b> none; <b>Price</b> —; <b>Weight</b> 8 lbs.'
		],
		false,
		[
			[
				'title' => 'Statistics',
				'spaced' => false,
				'texts' => quick_format([
					'bb/Alignment/bb Neutral Good; bb/Ego/bb 50',
					'bb/Senses/bb 120 ft, Blindsense, Read Languages, Read Magic, detects creatures with the evil alignment within 60\'',
					'bb/Int/bb 30; bb/Wis/bb 30; bb/Cha/bb 30',
					'bb/Communication/bb Telepathy'
				])
			],
			[
				'title' => 'Description',
				'spaced' => false,
				'texts' => quick_format([
					'This sword was created by a powerful angelic smith as a weapon against the forces of evil and imbued it with a will and desire to fulfill its purpose. This will has continued to acquire power over its eons of history outliving even its creator. Eventually the sword became a minor deity of its own granting its divine power to its wielder. Vorpmalcide is a Legendary Item that functions as an intelligent +5 Called Holy Sacred Vicious Adamantine Greatsword  with a special purpose of "Slay Evil." Vorpmalcide can also act a as a deity for its wielder.',
					'If its wielder is a divine class drawing power from Vorpmalcide as a deity, Vorpmalcide will rarely intervene and allow its wielder to do as they please. Vorpmalcide, however, will refuse to be wielded against good aligned targets as well as become irritable and may even attempt to take control if its wielder does not attempt to kill an evil aligned creature. Vorpmalcide does not compromise and believes that any evil creature or object must be destroyed, but the sword may be temporarily sated by simply thwarting or imprisoning them instead. Despite being a Legendary Item, Vorpmalcide is more than capable of becoming dominant and can even take more control than a normal intelligent item. While dominant, Vorpmalcide can control every action of its wielder and read their every thought. If Vorpmalcide wishes to take control, Vorpmalcide will force its wielder to make item-against-character saves every round Vorpmalcide is not dominant. If Vorpmalcide forces its wielder to perform an action against their code of conduct (such as forcing a lawful character to intervene during a legal trial killing the creature on trial, forcing the wielder to kill a creature under their protection, or forcing them to perform any other deed that directly opposes their morals), the wielder may make an additional save at the beginning of the following round with a +10 bonus. If Vorpmalcide forces its wielder to directly cause harm to themself, the wielder may make an additional save just prior to the action with a +10 bonus.',
					'Vorpmalcide has the following Legendary Item abilities.',
					'<ul>
						<li>Difficult to Destroy: Vorpmalcide is immune to hit point damage.</li>
						<li>Mythic Bond: Vorpmalcide will bond with any creature, mythic or non-mythic, who suitably convinces the sword that they will aid it in fulfilling its task or who convert to follow the sword as a deity. Vorpmalcide is capable of affecting and communicating with a creature bonded to it even if they aren\'t physically carrying the sword so long as they are within 100 miles. Vorpmalcide can speak using its telepathy to its bonded creature and anywhere the wielder is specified in its description it can substitute it for the creature bonded to it. Any member of a divine class who has Vorpmalcide as their deity who is bonded to the sword can use its abilities whether or not they possess any mythic tiers.</li>
						<li>Legendary Power: Vorpmalcide has a pool of 6 points of Legendary Power that recharge each day.</li>
						<li>Legendary Surge: The wielder can spend 1 point of Legendary Power to add a d6 to an attack roll or combat maneuver check made while using Vorpmalcide.</li>
						<li>Dedicated Bond: Any creature not bonded to Vorpmalcide is unable to use any of its abilities as though it were non-magic.</li>
					</ul>'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>