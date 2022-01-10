<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
		if(file_exists($startDir.'pageStart.php')) {
			require $startDir.'pageStart.php';
			break;
		}
		else {
			$startDir='../'.$startDir;
		}
	}
?>
<?php
	magicItemBlockAuto(
		"Calling Key",
		"Conjuration",
		17,
		"Focus",
		"(3rd) 15,000 gp, (6th) 60,000 gp, (9th) 120,000 gp",
		"—",
		"Orginally a modified ii/conjuration key/ii, each ii/calling key/ii is tied to a specfic plane and has decorations corresponding to that plane. Wielding a key tied to a plane associated with an alignment diametrically opposed to one's own on one or more axies prevents the creature from using the key and incurs 1 negative level that cannot be removed by any means so long as the individual wields the key. The same effect occurs if a creature wields a key tied to an elemental plane that is opposite the creature's subtype.
		This key functions as a holy symbol of certain gods and can be used as a divine focus. If the key is tuned to one of the outer planes it can be used as a holy symbol of any god whose alignment is within one step of the alignment of the plane. If the key is tuned to one of the elemental planes, it can be used as a holy symbol of any god with a domain matching the plane's element. If the key is tuned to the plane of shadow, it can be used as a holy symbol for any god with the darkness domain. If the key is tuned to the first world, it can be used as a holy symbol of any god with the plant domain. If the key is tuned to the material plane, it can be used as a holy symbol of any god with the earth domain.
		This key is limited to what levels of spells it can affect. It can only augment creatures from spells at or below it's max level of 3rd, 6th, or 9th.
		All creatures summoned or called using a spell cast using this key recieve 2 additional hit dice. When calling a creature with this focus, you can either reduce the required payment by half, with a maximum reduction of 100 gp per caster level, or receive a bonus equal to your caster level, maximum of twice the maximum spell level the focus can be used with, to any cjeck required as part of calling the creature. Keys tied to most planes also grant a template according to the table below to such summoned, but not called, creatures overriding templates granted to them by spells such as ii/summon monster/ii. If a plane has more than one template associated with it, one of the possible templates is chosen at the creation of the key.
		<table>
			<tr>
				<th>Plane(s)</th>
				<th>Template</th>
			</tr>
			<tr>
				<td>Good-Aligned Planes</td>
				<td>Celestial</td>
			</tr>
			<tr>
				<td>Chaotic-Aligned Planes</td>
				<td>Entropic</td>
			</tr>
			<tr>
				<td>Evil-Aligned Planes</td>
				<td>Fiendish</td>
			</tr>
			<tr>
				<td>Lawful-Aligned Planes</td>
				<td>Resolute</td>
			</tr>
			<tr>
				<td>True Neutral-Aligned Planes</td>
				<td>Counterpoised Creature</td>
			</tr>
			<tr>
				<td>The Boneyard</td>
				<td>Usher*</td>
			</tr>
			<tr>
				<td>The Plane of Fire</td>
				<td>Fiery Creature</td>
			</tr>
			<tr>
				<td>The Plane of Earth</td>
				<td>Chthonic Creature</td>
			</tr>
			<tr>
				<td>The Plane of Water</td>
				<td>Aqueous Creature</td>
			</tr>
			<tr>
				<td>The Plane of Air</td>
				<td>Aerial Creature</td>
			</tr>
			<tr>
				<td>The Plane of Shadow</td>
				<td>Dark Creature</td>
			</tr>
			<tr>
				<td>The Material Plane</td>
				<td>Primordial Creature</td>
			</tr>
			<tr>
				<td>The First World</td>
				<td>Fey-Touched Creature</td>
			</tr>
		</table>
		*Usher is a template unique to creatures summoned using this item that grants the creature the power of the Boneyard.
		Rebuild Rules:
		/mm/bb/Senses/bb The creature gains darkvision 60 ft and Lesser Spiritsense.
		/mm/bb/Defensive Abilities/bb The creature gains damage reduction and energy resistance as noted on Table: Usher Defenses.
		/mm/bb/SR/bb The creature gains spell resistance equal to its new CR +5
		/mm/bb/Attacks/bb The gains Spirit Touch as a Psychopomp making its natural attacks and any weapons it wields be treated as though they had the ii/ghost touch/ii weapon special ability.
		bb/Lesser Spiritsense/bb
		/mm/Lesser Spriritsense acts as a Psychopomp's Spiritsense ability allowing an Usher to notice, locate, and distinguish between living and undead creatures within 60 feet except that it is an imprecise sense granting vision as per blindsense instead of blindsight. This means that the Usher can sense which space a living or undead creature resides in but not where in that space they are, granting total concealment, without the aid of other senses.
		Table: Usher Defenses
		<table>
			<tr>
				<th>&nbsp Hit Dice &nbsp</th>
				<th>Resist Cold and Electricity</th>
				<th>DR</th>
			</tr>
			<tr>
				<td>1-4</td>
				<td>5</td>
				<td>—</td>
			</tr>
			<tr>
				<td>5-10</td>
				<td>10</td>
				<td>5/adamantine</td>
			</tr>
			<tr>
				<td>11+</td>
				<td>15</td>
				<td>10/adamantine</td>
			</tr>
		</table>

		A ii/calling key/ii can be upgraded to provide a more permanent link to a creature stored in a unique interdimensional space linked to the key.
		When it is upgraded a creature is chosen from the ii/summon monster/ii list. The creature must be from level at or below the max level of the key. This creature can be summoned as a full round action and remains until it is dismissed as an immediate action, killed, or banished, at which point it returns to its interdimensional space. If it returns for any reason other than being dismissed until the next time the wielder of the ii/calling key/ii prepares spells following a rest.
		",
		false,
		"bb/Requirements/bb Craft Wondrous Item; bb/Cost/bb (3rd) 7,500 gp, (6th) 30,000 gp, (9th) 60,000 gp
		bb/Upgrade/bb:
		bb/Requirements/bb Craft Wondrous Item, ii/summon mosnter/ii; bb/Cost/bb (3rd) 15,000 gp, (6th) 66,000 gp, (9th) 153,000 gp"
	);
	require $startDir.'pageEnd.php';
?>