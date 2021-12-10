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
<title>Enderman</title>
<?php
	monsterBlockAuto(
		'Enderman',// name
		false,// alt name
		'This strange black creature has an odd purple aura around it though appears almost human with the exception that all four of its limbs extend well over 5 feet and that its head appears feature-less with the excpetion of its two glowing purple eyes. The moement your gaze locks onto the creature\'s eyes its head snaps to face and as you watch the lower portion of the head appears to tear open, hinging at the neck, revealing two rows of sharp teeth as an unearthly wail of rage eminates from the creature.',// lore text
		5,// CR
		false,// MR
		false,// Custom XP
		'',// Race
		[],// Class
		'N',// Alignment
		'Large',// Size
		'aberration (extraplanar)',// Type
		0,// Misc Initiative Mod
		false,// Mythic Initiative
		'see in darkness',// Senses
		0,// Misc Perception Mod
		'',// Aura
		[
			'dodge' => 1,
			'natural' => 6
		],// Misc AC bonuses
		[7,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
		[
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => false,
				'mod' => 0
			],
			[
				'good' => true,
				'mod' => 0
			]
		],// Fortitude/Reflex/Will save good/bad and misc bonuses
		'reactionary blink, improved uncanny dodge',// Defensive Abilities
		'water vulnerability',// Weaknesses
		'swim 60 ft.',// Speed
		[
			[
				'type' => 'Melee',
				'list' => [
					[
						'name' => '2 claws',
						'mod' => 0,
						'stat' => 'str',
						'damage' => '1d6+5/19-20'
					]
				]
			]
		],// Attacks
		10,// Reach
		'',// Special Attacks
		[],// Spell-like Abilities
		[],// Spell Casting
		'',// Spell Casting Note
		[
			'str' => 21,
			'dex' => 15,
			'con' => 18,
			'int' => 11,
			'wis' => 17,
			'cha' => 16
		],// Stats
		0.75,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
		0,//CMB misc bonus and special cases
		0,//CMD misc bonus and special cases
		[
			'Critical Focus',
			'Dodge',
			'Improved Critical (claw)',
			'Mobility'
		],// Feats
		[
			[
				'skill' => 'Acrobtics',
				'stat' => 'dex',
				'bonus' => 10
			],
			[
				'skill' => 'Intimidate',
				'stat' => 'cha',
				'bonus' => 10
			],
			[
				'skill' => 'Knowledge (planes)',
				'stat' => 'int',
				'bonus' => 10
			],
			[
				'skill' => 'Perception',
				'stat' => 'wis',
				'bonus' => 10
			]
		],// Skills
		[],// Languages
		'translocate',// Special Qualities
		'any (The End)',// Environment
		'solitary, haunting (2-4), greater haunting (8-32)',// Organization
		'none',// Treasure
		[
			[
				'name' => 'Improved Uncanny Dodge',
				'type' => 'Ex',
				'desc' => 'An enderman can react to danger before ordinary senses would normally allow them to do so. They cannot be caught flat-footed, nor do they lose their Dex bonus to AC if the attacker is invisible. They still loses their Dexterity bonus to AC if immobilized. An enderman with this ability can still lose their Dexterity bonus to AC if an opponent successfully uses the feint action (see Combat) against them. An enderman cannot be flanked. This defense denies a rogue the ability to sneak attack the enderman by flanking them, unless the attacker has at least four more rogue levels than the target has hit dice.'
			],
			[
				'name' => 'Reactionary Blink',
				'type' => 'Su',
				'desc' => 'When is enderman is targetted by an effect such as a spell, attack, or combat maneuver, or when it is in the area of such an effect, an enderman can make a DC 15 reflex save. If the enderman succeeds at this save they momentarily dispear from reality before returning to a location within 60 feet. The enderman can return to the same place they left from but they may be subject to any ongoing effect placed on the area. Enderman receive a +10 bonus to this check if the effect requires a projectile, such as an attack with a bow or a ii/fireball/ii spell, other than a bullet from a firearm. The enderman receives the same bonus if the triggering effect required longer than one standard action to activate. As the enderman is not located on any plane, spells and effects that automatically hit such as ii/magic missile/ii can still be negated.'
			],
			[
				'name' => 'Translocate',
				'type' => 'Su',
				'desc' => 'Enderman can pass through a space outside of reality to a distant point, doing so, however, leaves the enderman momentarily vulnerable. An enderman provokes an attack of opportunity from all nearby creatures when they arrive. An enderman can teleport up to 60 feet as a move action using this ability. Given more time an enderman can teleport longer distances. As a standard action an enderman can teleport 480 feet and as a full round action an enderman can teleport up to 1,000 miles. Multiple enderman working together can transport themselves further distances. When at least two enderman are in contact and use this ability together, they can teleport to any location of the same plane or they can travel to another dimension using the same rules and limitations as ii/plane shift/ii. When an enderman teleports using this ability they create a divinatory sensor at the location to confirm if the site is safe before returning to reality. An enderman does not risk teleporting into a solid object or to an otherwise dangerous location. If the enderman chooses to, they can teleport to a dangerous location but not one intersecting a solid object.'
			],
			[
				'name' => 'Water Vulnerability',
				'type' => 'Ex',
				'desc' => 'Enderman take 1d6 points of damage each round they are in contact with water and splashing them with water deals 1d4 points of damage. Enderman take 10d6 points of damage each round instead if they are fully submerged in water.'
			]
		],// Special Abilities
		$desc=''// Description
	);
	require $startDir.'pageEnd.php';
?>