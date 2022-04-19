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
	monsterBlockAuto(
		'Warden',// name
		false,// alt name
		'As a third piercing shriek rings out through the nearby network of caves, this hulking behemoth pulls itself out of the cave floor, seeming to be covered in the same strange substance that makes up the sculk. Behind its cage-like ribs, numerous tortured souls swirl and pulse with a faint blue glow.',// lore text
		23,// CR
		false,// MR
		3,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'undead',// Type
		4,// Misc Initiative Mod
		false,// Mythic Initiative
		'blind, powerful scent, soul identification, vibration sense 60 ft.',// Senses
		0,// Misc Perception Mod
		'blinding aura (120 ft.), inevitable fear (120 ft., DC 36), soul trap (80 ft.)',// Aura
		[
			'dodge' => 1,
			'natural' => 20
		],// Misc AC bonuses
		[42,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,
				'mod' => 2
			],
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => true,
				'mod' => 2
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'bb/Immune/bb undead traits, fire; bb/SR/bb 33',// Defensive Abilities
		'',// Weaknesses
		'60 ft., 30 ft. burrow, 30 ft. climb',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => 'slam',
						'mod' => -10,
						'stat' => 'str',
						'damage' => '1d8+52/15-20/x4 plus energy drain and soul trap (DC 36)'
					]
				]
			]
		],// Attacks
		10,// Reach
		'powerful slam, sonic boom (60 ft., 10d6 times 3 sonic), terrifying leap',// Special Attacks
		[
			'level' => 42,
			'conc' => 0,
			'spells' => [
				[
					'perday' => 'constant',
					'list' => [
						'freedom of movement'
					]
				]
			]
		],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 40,
			'dex' => 32,
			'con' => 'cha',
			'int' => 10,
			'wis' => 10,
			'cha' => 20
		],// Stats
		1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		[
			"sunder" => 4
		],//CMB misc bonus and special cases
		[
			"sunder" => 2
		],//CMD misc bonus and special cases
		[
			'Blind Fight',
			'Improved Blind Fight',
			'Greater Blind Fight',
			'Cleave',
			'Great Cleave',
			'Cleaving Finish',
			'Combat Reflexes',
			'Dodge*',
			'Gate Breaker',
			'Great Fortitude*',
			'Improved Critical (slam)*',
			'Improved Initiative*',
			'Improved Sunder',
			'Greater Sunder',
			'Iron Will*',
			'Just out of Reach',
			'Mobility',
			'Stand Still',
			'Stunning Irruption',
			'Sundering Strike',
			'Power Attack*',
			'note' => 'Feats marked with * are already included in the creature\'s statistics.'
		],// Feats
		[
			[
				'skill' => 'Acrobatics',
				'stat' => 'dex',
				'bonus' => 42
			],
			[
				'skill' => 'Climb',
				'stat' => 'str',
				'bonus' => 45
			],
			[
				'skill' => 'Intimidate',
				'stat' => 'cha',
				'bonus' => 45
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 45
			]
		],// Skills
		[
			'Sculk-Speech'
		],// Languages
		'stone burrow',// Special Qualities
		'any (Deep Underground)',// Environment
		'solitary',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Blinding Aura',
				'type' => 'Su',
				'desc' => 'The warden emits a necromantic aura that darkens the vision of nearby creatures. This darkness periodically pulses, darkening the vision of all creatures within range to complete darkness with the exception of sources of bright light and the area within 5 feet of such sources which is only reduced to dim light. This effect directly affects the vision of affected creatures and therefore largely ignores the abilities of creatures with low-light vision, darkvision, see in darkness, and similar enhanced sight abilities. There is a 30% chance each time a creature performs an action that their vision is darkened while they attempt to perform the action.
				When outside the Sun is the source of the Bright Light and therefore the Sun can be seen dimly lit and no other areas are treated as Dim Light from it.'
			],
			[
				'name' => 'Inevitable Fear',
				'type' => 'Su',
				'desc' => 'The warden\'s presence to unsettling to foes and brings with it a sense of inevitability that can shake even the stongest warriors. Any opponents with fewer hit dice than the warden (usually 42) within 120 feet of the warden are overcome with dread and are shakened and must make a DC 36 Will save else become frightened instead.
				In addition, all abilities that specifically grant resistance to fear, such as a paladin\'s Aura of Courage or a fighter\'s Bravery, fail to provide protection against any ability while within range and their loss strikes even greater fear into creatures that depend on them. Any creature with a constant ability that grants a bonus vs fear instead grants a penalty vs fear equal to half of the bonus, though this penalty caps out at -10, and creatures that have a constant ability that makes them immune to fear instead take a -15 penalty, though this penalty does not stack with other abilities that normally grant bonuses or immunity to fear.'
			],
			[
				'name' => 'Powerful Scent',
				'type' => 'Ex',
				'desc' => 'Powerful scent function as scent with the following exceptions. A warden can smell creatures from twice as far away, up to 60 feet in normal conditions. When a warden spends a move action to note the direction of a scent that is within 20 feet, they discover which square the scent is in.'
			],
			[
				'name' => 'Powerful Slam',
				'type' => 'Ex',
				'desc' => 'A warden\'s slam attack is particularly potent dealing damage as though they were one size greater, having an 18-20 critical range (15-20 with the Improved Critical feat), and a x4 critical multiplier, in addition to being able to add 1-1/2 their strength modifier due to only having one attack. Wardens always use power attack.'
			],
			[
				'name' => 'Sculk-Speech',
				'type' => 'Ex',
				'desc' => 'All sculk constructs, including wardens, are able to communicate with each other through the creation of specific vibrations that can be detected by other creatures with vibration sense if they are within range. These communications can theoretically convey anything you could convey through normal speech though in practice sculk constructs tend to communicate in short, concise, and monotone messages that more resemble communications through a network of computers than those between intelligent creatures.'
			],
			[
				'name' => 'Sonic Boom',
				'type' => 'Ex',
				'desc' => 'As a full-round action, a warden can make a ranged attack against a target within 60 feet that can travel through obstacles including walls less than 30 feet thick; deals 10d6 times 3 points of sonic damage; and, so long as the warden accurately knows what square the target occupies, hits automatically, without an attack roll and ignoring miss chances.'
			],
			[
				'name' => 'Soul Identification',
				'type' => 'Ex',
				'desc' => 'A warden is able to identify and sense a soul that it interacts closely with. A warden is able to determine the exact location of any creature that touches or attacks the warden, targets the warden with a spell, spell-like ability, supernatural ability, or extraordinary ability, or that the warden successfully hits with their attack. Area effects do not allow the warden to detect the user\'s location unless the area is specifically targetted as being from the warden. In the rare case that their are more one than wardens in an area, a warden is able to accurately communicate the location of any creature it knows the location of to any other warden within range to hear their sculk-speech. As this ability specifically identifies the location of a creature\'s soul, this ability does not work on creatures or objects that lack a soul such as most constructs though all undead can be detected as though they had souls.
				While the warden knows the creature\'s location, this sense is imprecise and the creature is treated having total concealment from the warden, though due to the warden\'s Blind Fight feats this is rarely an issue.'
			],
			[
				'name' => 'Soul Trap',
				'type' => 'Su',
				'desc' => 'Any creature that is lowered to 0 or less hitpoints by a warden\'s slam attack must make a DC 36 Will save or else their soul is sucked into the warden\'s beating core, killing them instantly and granting the warden fast healing 5 for 1 round per hit dice of the slain creature, minus the number of negative levels the creature had, and a +2 enhancement bonus to strength for the next 10 minutes per hit dice of the slain creature. Similarly, if a creature dies for any other reason within 80 feet of a warden their soul is also drawn into the nearest warden\'s core granting the same benefits to the warden. This ability stacks with itself increasing the amount of fast healing and strength granted though each time it is used it has a separate duration.
				Every round when the warden benefits from the fast healing granted by this ability, each soul that is trapped in the warden\'s core receives 1 permanent negative level up to a maximum total number of negative levels equal to their number of hit dice, at which point they no longer grant the warden fast healing.
				If a creature\'s soul has been trapped in a warden\'s core, that creature cannot be returned through ii/clone/ii, ii/raise dead/ii, ii/reincarnation/ii, ii/resurrection/ii, ii/true resurrection/ii, or even a ii/miracle/ii or a ii/wish/ii like the spell ii/soul bind/ii until the warden is slain. If the creature\'s soul is freed they can be returned to life as normal though they do retain any negative levels acquired while trapped and may need the aid of additional or more powerful magic'
			],
			[
				'name' => 'Stone Burrow',
				'type' => 'Ex',
				'desc' => 'A warden is able to burrow through solid rock without difficulty and can run and charge while burrowing.'
			],
			[
				'name' => 'Terrifying Leap',
				'type' => 'Ex',
				'desc' => 'A warden is able to leap great distances to strike foes. As a standard action, the warden can make a DC 20 Acrobatics check to jump. If successful, the warden jumps at least 20 feet horizontally and 10 feet vertically and can jump a maximum horizontal distance of up to 20 feet plus 5 feet per 5 by which the warden beats the DC and a maximum vertical distance of 10 feet plus 5 per 5 by which the warden beats the DC. When they perform this jump, they can make a single slam attack against 1 creature along their arc and every creature occupying one of the squares the warden lands in must make a DC 42 Reflex save or else take damage equal to damage from the warden\'s slam attack.'
			],
			[
				'name' => 'Vibration Sense',
				'type' => 'Ex',
				'desc' => 'Wardens, like many other sculk constructs, have the ability to sense many types of vibrations without having to be in contact with a connected surface. Such types of vibrations include those from any type of movement, a creature falling and taking lethal damage, audible sounds, rapid movements such as a creature shaking water off of themself, eating, a melee or ranged attack hitting a creature or object, tools being used, doors or lids being opened or closed, or other similar actions. The exact determination of what can or cannot be detected by vibration sense is up to the GM.
				It is possible to disguise or hide some vibrations made so that a creature with vibration sense does not notice them. Doing so usually involves making either a Stealth or Sleight of Hand check opposed by the Warden\'s Perception check and usually has a DC of about 5 or 10 higher than disguising the action from being heard depending on the specific action as determined by the GM. It is impossible to hide or disguise the vibrations from the impact of a melee or ranged attack, loud noises such as a bell or roaring, or a creature falling and taking lethal damage.
				While a creature with vibration sense can detect many different types of vibrations, they can rarely determine what the source of the vibrations is and this can cause creatures such as wardens to find themselves chasing dripping or running water before determining that the source of the vibrations is natural. It also means that such creatures can often be confused into going the wrong way by carefully tossing a stone or other object to redirect their attention before they successfully identify their quarry\'s soul.'
			]
		],// Special Abilities
		$desc=''// Description
	);
?>
<hr>
<p>The Warden has many lengthy abilities but largely is more simple than they let on and the number and length of abilities is simply to cover all of the edge cases and fully describe abilities that don't fit cleanly into established abilities. As such a summary of their abilities is provided here.</p>
<ul>
	<li>Blinding Aura: There is a 30% chances creatures within 120 feet can't see unless they are carrying a source of bright light in which case they see dim light within 5 feet of the source.</li>
	<li>Ineviatable Fear: Creatures within 120 feet, must make a Will save, DC 36. On a success they are shaken and on a failure they frightened. Creatures that are normally resistant or immune to fear have penalties instead.</li>
	<li>Powerful Slam: All effects are included in their attacks. The Warden's slam attack has more likely crits and crits more often, in addition to having a larger dice.</li>
	<li>Sculk-Speech: Warden can speak to each other and other sculk contructs as long as they are within range of each other's vibration sense.</li>
	<li>Soul Identification: If the warden attacks a creature or a creature does something to the warden, the warden knows what square they are in without being limited to their normal senses.</li>
	<li>Soul Trap: If a creature is knocked to 0 or fewer hitpoints or dies for other reasons within 80 feet, their soul is trapped in the warden, they start taking negative levels, the warden gets fast healing, and the warden gets a +2 strength bonus.</li>
	<li>Stone Burrow: The warden can burrow through stone.</li>
	<li>Terrifying Leap: The warden can jump really high and far, can attack a crerature while in the air, and damages creature it lands on.</li>
	<li>Vibration Sense: The warden can sense the location of moving or noisy objects but can't tell anything else about them.</li>
	<li>Blind-Fight feats: The warden only has a 20% chance to miss because he can't see and can't roll twice and take the better result.</li>
</ul>
<p>Summary: The warden hits really hard, can't see but can sense movement and noises and can knows the location of any creature that actually gets into a fight with it, makes it hard for other creatures to see (ignoring sight abilities), makes creatures afraid (ignoring resitances), traps the souls of creatures it kills, and can jump to reach high up areas or to strike flying creatures.</p>
<hr>
<p>Wardens are generally found patrolling though the rock near sculk catalysts or beneath the ruins of the ancient cities that seem to be the sorce of the sculk. Wardens won't often be encountered randomly however, rather a network of sculk constructs generally work together to alert the warden of the presence of an intruder.</p>
<p><b>Sculk catalysts</b> can be found throughout the ancient cities and scattered through the surrounding cave networks. Creatures that die within 120 feet of a sculk catalyst have their soul drawn in which is used as fuel to spread the strange sculk substance and generate new sculk constructs.</p>
<p>The most commonly generated type of construct are known as <b>sculk sensors</b>. Sculk sensors have vibration sense and are treated as having a perception bonus of +40. If a sculk sensor detects what it believes to be an intruder it will notify other sculk contructs that can hear of the creature's position.</p>
<p><b>Sculk shriekers</b> are rarer and are used to call a warden to the location. While they do have vibration sense, sculk shriekers do not have a perception modifier and rely on sensors to inform them of intruders. Once notified, a sculk shrieker will let out a wail from the souls trapped within that can be detected by a warden from quite far away.</p>
<p>At which point any nearby warden will begin sprinting through the ground before clawing it way out of the ground below the area and beginning its search. After successfully slaying the intruders, a warden will generally proceed to deposit a portion of the collected souls into a nearby catalyst to grow more sculk.</p>
<p>Despite their name and behavior, all sculk constructs are treated as being undead. Sculk catalysts, sensors, and shriekers have an AC of 5, hardness 5, and 120 hit points.</p>
<p>Souls that are absorbed by sculk catalysts are harder to retrieve and may be impossible as they are physically changed and corrupted to form the sculk and sculk constructs. If the region of sculk or sculk catalyst that was generated from the soul is destroyed, a <i>true resurrection</i>, <i>wish</i>, or <i>miracle</i> may be used to restore the creature to life, otherwise they are destroyed similar to slaying an outsider. A <i>true resurrection</i>, <i>wish</i>, or <i>miracle</i> may also be used to restore the soul and allow them to enter the river of souls without fully resurrecting them. Spells that are able to consume or draw power from souls can consume a portion of sculk instead.</p>
<?php require $startDir.'pageEnd.php'; ?>