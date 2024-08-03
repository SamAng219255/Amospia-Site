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
			'Similar to ii/impossible staves/ii, ii/impossible scrolls/ii are epically crafted scrolls of what are normally impossible to cast spells. The energies involved end up being fundamentally different, however, and ii/impossible scrolls/ii do not possess the same list of available spells as ii/impossible staves/ii. ii/Impossible scrolls/ii can only be cast by casters that are ordinarily able to cast 9th level spells by 18th level and are at least 2 levels higher than the level they gain access to 9th level spells. The spells contained in the ii/impossible scrolls/ii also indicate several classes and only casters that meet the previous requirement in one of the listed classes are able to use the scroll. Use Magic Device cannot be used to activate an ii/impossible scroll/ii. The caster level of an ii/impossible scroll/ii is twice the level of the impossible spell that it casts.'
		]),
		true,
		[
			[
				'title' => 'Crafting',
				'spaced' => true,
				'texts' => quick_array([
					'Creating an ii/impossible scroll/ii is no small feat and can only be done by a caster capable of using it. It also requires acquiring a copy of the impossible spell that the scroll is of. Which is often an adventure in of itself as they require incredible knowledge and skill to create and are often closely guarded by those whose possession they are in. A copy of the spell created by the crafter must be included in the creation of the scroll and is consumed in the process. Creating a copy is done as though copying the spell into a spellbook, requiring all the same time, skill checks, and cost. Crafting an ii/impossible scroll/ii requires materials worth the level of the spell times its caster level times 12.5 gp plus any material components required by the spell. For the purpose of determining how long it takes to craft the scroll, calculate the scroll\'s price as normal, using the spell\'s level times the caster level times 25 gp.'
				])
			]
		]
	);
	table(
		[
			'Name',
			'Spell Level',
			'School',
			'Classes',
			'Description'
		],
		[
			[
				'Draconic Ascension',
				'link' => 'spells/impossible/draconic_ascension.php',
				'10th',
				'Transmutation',
				'arcanist, skald, sorcerer, wizard',
				'You unleash ultimate magic and transform yourself into a dragon.'
			],
			[
				'Planar Ascension',
				'link' => 'spells/impossible/planar_ascension.php',
				'10th',
				'Transmutation',
				'arcanist, cleric, oracle, skald, sorcerer, summoner, unchained summoner, warpriest, witch, wizard',
				'You infuse yourself with the essence of an outer plane and ascend to become a powerful outsider.'
			],
			[
				'Starship',
				'link' => 'spells/impossible/starship.php',
				'11th',
				'Transmutation',
				'arcanist, bard, cleric, occultist, oracle, psychic, skald, sorcerer, summoner, unchained summoner, warpriest, wizard',
				'You enchant the target ship to be able to sail through space.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>