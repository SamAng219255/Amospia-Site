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
<script>
	initialSort=false;
</script>
<?php
	block(
		'Impossible Staves',
		'desc',
		quick_array([
			'ii/Impossible staves/ii are staff-like magic items that have been carefully designed to perform magic well beyond what is normally possible.',
			'As all casters know, as a spell grows more powerful (higher level) it also grows more complex, generally indicated by how many pages of a spellbook it occupies. Such more complicated spells require greater skill to cast but there is an ultimate ceiling beyond which even the most experienced casters are incapable of performing the spell. This ceiling unfortunately falls short of a measly 10 pages. Seeking to remedy this, many magical researchers have pooled their efforts to create what is now referred to as an "ii/impossible staff/ii". These staves function as any other but they can only hold a charge for so long, losing any charge 24 hours after it was added, and each contain only one spell effect which does not match any spell on any spell list. Additionally, even with abilities that allow charging multiple staves or adding multiple charges to a staff, ii/impossible staves/ii can only ever hold one charge and charging a different staff or adding a new charge to the staff causes the previous charge to be lost.',
			'Due to the power necessary to operate these staves, they can only be charged by casters that are ordinarily able to cast 9th level spells by 18th level and are at least 2 levels higher than the level they gain access to 9th level spells. Additionally, charging an impossible staff requires expending multiple 9th level spell slots though more than one caster can contribute spell slots to the charging, all of which must be present when charged and of sufficient level for their class. The number of 9th level spell slots that must be consumed is given in each staff\'s description.',
			'Each staff has a listed price but, in practice, these staves are priceless and purchasing one would cost most than a whole kingdom.'
		]),
		true,
		[
			[
				'title' => 'Crafting',
				'spaced' => true,
				'texts' => quick_array([
					'Creating an ii/impossible staff/ii is no small feat and can only be done by a caster of sufficient level to charge one. It also requires acquiring a copy of the impossible spell that the staff is to be infused with. Which is often an adventure in of itself as they require incredible knowledge and skill to create and are often closely guarded by those whose possession they are in. A copy of the spell created by the crafter must be included in the creation of the staff and is consumed in the process. Creating a copy is done as though copying the spell into a spellbook, requiring all the same time, skill checks, and cost.'
				])
			]
		]
	);
	table(
		[
			'Name',
			'Price',
			'CL',
			'Spell Level',
			'School',
			'Description'
		],
		[
			[
				'Staff of Angel-Fire',
				'link' => 'items/impossible/staff/angel_fire.php',
				'96,800 gp',
				'22th',
				'11th',
				'Evocation',
				'Fire and brimstone fall from the sky within a 1-mile-radius area.'
			],
			[
				'Staff of Arcane Arm',
				'link' => 'items/impossible/staff/arcane_arm.php',
				'80,000 gp',
				'20th',
				'10th',
				'Conjuration',
				'Creates a powerful melee weapon out of force that can also function as a wand.'
			],
			[
				'Staff of Antimagic Wave',
				'link' => 'items/impossible/staff/antimagic_wave.php',
				'96,800 gp',
				'22th',
				'11th',
				'Evocation',
				'This spell sends a powerful wave of antimagic that destroys all magic the region.'
			],
			[
				'Staff of Avatar',
				'link' => 'items/impossible/staff/avatar.php',
				'115,200 gp',
				'24th',
				'12th',
				'Transmutation',
				'You channel the power of a god to become their avatar.'
			],
			[
				'Staff of Celestial Lantern',
				'link' => 'items/impossible/staff/celestial_lantern.php',
				'80,000 gp',
				'20th',
				'10th',
				'Conjuration',
				'This spell conjures a floating lantern that holds several light-giving celestial bodies with a variety of effects.'
			],
			[
				'Staff of Demigod\'s Armor',
				'link' => 'items/impossible/staff/demigods_armor.php',
				'80,000 gp',
				'20th',
				'10th',
				'Conjuration',
				'This spell conjures a powerful set of magical armor around you.'
			],
			[
				'Staff of Earthen Rupture',
				'link' => 'items/impossible/staff/earthen_rupture.php',
				'96,800 gp',
				'22th',
				'11th',
				'Evocation',
				'This spell causes the ground to quake and rupture within a 1-mile-radius area.'
			],
			[
				'Staff of Force Field',
				'link' => 'items/impossible/staff/force_field.php',
				'80,000 gp',
				'20th',
				'10th',
				'Abjuration',
				'Surrounds you a protective field of force.'
			],
			[
				'Staff of Frozen Hell',
				'link' => 'items/impossible/staff/frozen_hell.php',
				'96,800 gp',
				'22th',
				'11th',
				'Evocation',
				'The temperature in a 1-mile-radius area rapidly cools so cold that even Hell itself would freeze over.'
			],
			[
				'Staff of Immortality',
				'link' => 'items/impossible/staff/immortality.php',
				'80,000 gp',
				'20th',
				'10th',
				'Transmutation',
				'Eliminates the penalties of old age and prevents death by aging.'
			],
			[
				'Staff of Perfect Health',
				'link' => 'items/impossible/staff/perfect_health.php',
				'80,000 gp',
				'20th',
				'10th',
				'Conjuration',
				'Cures 10 hp per level, removes harmful conditions and energy drain, and regenerates lost members.'
			],
			[
				'Staff of Portal',
				'link' => 'items/impossible/staff/portal.php',
				'80,000 gp',
				'20th',
				'10th',
				'Conjuration',
				'Opens a portal to another location.'
			],
			[
				'Staff of Smiting Rays',
				'link' => 'items/impossible/staff/smiting_rays.php',
				'80,000 gp',
				'20th',
				'10th',
				'Evocation',
				'Fires one or more rays of force that deal a total of 3d6 damage per level.'
			],
			[
				'Staff of Spellship',
				'link' => 'items/impossible/staff/spellship.php',
				'80,000 gp',
				'20th',
				'10th',
				'Transmutation',
				'Creates a magical flying ship.'
			],
			[
				'Staff of Thunder\'s Fury',
				'link' => 'items/impossible/staff/thunders_fury.php',
				'96,800 gp',
				'22th',
				'11th',
				'Evocation',
				'TStorm clouds cover the area as wind and lightning pummel a 1-mile-radius region.'
			],
			[
				'Staff of Transmogrify Any Object',
				'link' => 'items/impossible/staff/transmogrify_any_object.php',
				'80,000 gp',
				'20th',
				'10th',
				'Transmutation',
				'Truly transforms the target into something else.'
			],
			[
				'Staff of True Death',
				'link' => 'items/impossible/staff/true_death.php',
				'80,000 gp',
				'20th',
				'10th',
				'Necromancy',
				'True death instantly slays the 1d8 HD per level worth creatures.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>