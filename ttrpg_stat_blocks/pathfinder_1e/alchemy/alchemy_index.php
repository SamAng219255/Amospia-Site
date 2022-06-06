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
?>
<script>
	initialSort=true;
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 4 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) + 
			2 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) + 
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Level',
			'Form',// Activated, Application, Bomb, Cauldron, Creation, Imbibed, Rocket, Substance
			'Description'
		],
		[
			[
				'Fire Bomb',
				'link' => 'recipes/fire_bomb.php',
				'1',
				'Bomb',
				'Deals 1d6 fire damage per level, maximum 5d6, and half that as splash.' 
			],
			[
				'Advanced Acid',
				'link' => 'recipes/acid.php',
				'1',
				'Bomb',
				'Deals 1d6 acid damage per level, maximum 5d6, and half that as splash.' 
			],
			[
				'Chill Bomb',
				'link' => 'recipes/chill_bomb.php',
				'1',
				'Bomb',
				'Deals 1d6 cold damage per level, maximum 5d6, and half that as splash.' 
			],
			[
				'Volatile Capacitor',
				'link' => 'recipes/volatile_capacitor.php',
				'1',
				'Bomb',
				'Deals 1d6 electricity damage per level, maximum 5d6, and half that as splash.' 
			],
			[
				'Sonic Burst Jar',
				'link' => 'recipes/sonic_jar.php',
				'1',
				'Bomb',
				'Deals 1d6 sonic damage per level, maximum 5d6, and half that as splash.' 
			],
			[
				'Advanced Alchemist Fire',
				'link' => 'recipes/adv_fire.php',
				'3',
				'Bomb',
				'Deals fire damage and covers affected creatures in burning material.' 
			],
			[
				'Concentrated Acid',
				'link' => 'recipes/adv_acid.php',
				'3',
				'Bomb',
				'Deals acid damage that bypasses some hardness and resistance.' 
			],
			[
				'Freezing Bomb',
				'link' => 'recipes/freezing_bomb.php',
				'3',
				'Bomb',
				'Deals cold damage and slows affected creatures.' 
			],
			[
				'Overcharged Capacitor',
				'link' => 'recipes/overcharged_capacitor.php',
				'3',
				'Bomb',
				'Deals electricity damage and may stun the primary target.' 
			],
			[
				'Thunder Jar',
				'link' => 'recipes/thunder_jar.php',
				'3',
				'Bomb',
				'Deals sonic damage and has a chance to deafen.' 
			],
			[
				'Fog Bottle',
				'link' => 'recipes/fog_bottle.php',
				'2',
				'Activated',
				'Creates a cloud of alchemical powder that obsures sight.' 
			],
			[
				'Shimmer Cloud',
				'link' => 'recipes/illusion_cloud.php',
				'2',
				'Activated',
				'Creates a fine mist of particles that reveal illusions.' 
			],
			[
				'Oobleck',
				'link' => 'recipes/oobleck.php',
				'7',
				'Cauldron',
				'Creates a mysterious new form of weather that sticks creatures in the area to the ground.' 
			],
			[
				'Draught of True Form',
				'link' => 'recipes/true_form.php',
				'3',
				'Imbibed',
				'Nullifies polymorph effects on the drinker, returning them to their true form.' 
			],
			[
				'Fire Rocket',
				'link' => 'recipes/fire_rocket.php',
				'3',
				'Rocket',
				'Deals 1d6 fire damage per level in a 20-ft. radius spread.' 
			],
			[
				'Freezing Rocket',
				'link' => 'recipes/ice_rocket.php',
				'6',
				'Rocket',
				'Deals 1d6 cold damage per level in a 40-ft. radius spread.' 
			],
			[
				'Planar Grenade',
				'link' => 'recipes/planar_grenade.php',
				'8',
				'Bomb',
				'Deals 1d6 damage per level, and an additional effect, with a large and powerful splash.' 
			],
			[
				'Grenade',
				'link' => 'recipes/grenade.php',
				'3',
				'Bomb',
				'A more stable, but delayed, explosive that prioritizes explosive force.' 
			],
			[
				'Grenade, Improved',
				'link' => 'recipes/grenade.php#block-Improved-Grenade',
				'5',
				'Bomb',
				'Deals 1d6 damage per level and deafens nearby creatures.' 
			],
			[
				'Elemental Grenade',
				'link' => 'recipes/elemental_grenade.php',
				'6',
				'Bomb',
				'A grenade that deals 1d6 energy damage per level.' 
			],
			[
				'Tracking Dust',
				'link' => 'recipes/tracking_dust.php',
				'1',
				'Substance',
				'An invisible powder that can be used to track an individual.' 
			],
			[
				'Tracking Light',
				'link' => 'recipes/tracking_dust.php#block-Tracking-Powder',
				'0',
				'Activation',
				'The glow from this light reveals tracking powder.' 
			],
			[
				'Annort',
				'link' => 'recipes/annort.php',
				'3',
				'Creation',
				'An engineered metal that opposes necromantic forces of undeath.' 
			],
			[
				'Planar Shunt',
				'link' => 'recipes/planar_shunt.php',
				'7',
				'Cauldron',
				'Shift the cauldron and up to eight creatures to another plane.' 
			],
			[
				'Gateway',
				'link' => 'recipes/gateway.php',
				'9',
				'Cauldron',
				'Creates a portal to another plane as long as it is tended.' 
			],
			[
				'Mist of Astral Projection',
				'link' => 'recipes/astral_projection.php',
				'5',
				'Activated',
				'Creates a mist that casts a creature\'s mind to the astral plane.' 
			],
			[
				'Mist of Ethereal Projection',
				'link' => 'recipes/ethereal_projection.php',
				'5',
				'Activated',
				'Creates a mist that casts a creature\'s mind to the etheral plane.' 
			],
			[
				'Death Diving Draught',
				'link' => 'recipes/death_diving.php',
				'6',
				'Imbibed',
				'Temporarily kills the drinker allowing visitation to the afterlife.' 
			],
			[
				'Light Oil',
				'link' => 'recipes/light_oil.php',
				'0',
				'Applied',
				'Glows like a torch when applied.' 
			],
			[
				'Silver Oil',
				'link' => 'recipes/silver_oil.php',
				'0',
				'Applied',
				'Allows a weapon to overcome DR/silver.' 
			],
			[
				'Cold Iron Oil',
				'link' => 'recipes/cold_iron_oil.php',
				'1',
				'Applied',
				'Allows a weapon to overcome DR/cold iron.' 
			],
			[
				'Adamantine Oil',
				'link' => 'recipes/adamantine_oil.php',
				'2',
				'Applied',
				'Allows a weapon to overcome DR/adamantine and ignore hardness less than 20.' 
			],
			[
				'Annort Oil',
				'link' => 'recipes/annort_oil.php',
				'1',
				'Applied',
				'Allows a weapon to overcome the resistances of undead.' 
			],
			[
				'Flaming Oil',
				'link' => 'recipes/fire_oil.php',
				'1',
				'Applied',
				'Coats a weapon in fire, making it deal an additional 1d6 points of fire damage.' 
			],
			[
				'Frost Oil',
				'link' => 'recipes/cold_oil.php',
				'1',
				'Applied',
				'Coats a weapon in frost, making it deal an additional 1d6 points of cold damage.' 
			],
			[
				'Corrosive Oil',
				'link' => 'recipes/acid_oil.php',
				'1',
				'Applied',
				'Coats a weapon in acid, making it deal an additional 1d6 points of acid damage.' 
			],
			[
				'Shock Oil',
				'link' => 'recipes/shock_oil.php',
				'1',
				'Applied',
				'Coats a weapon in electricity, making it deal an additional 1d6 points of electricity damage.' 
			],
			[
				'Energy Resistance Oil',
				'link' => 'recipes/energy_resistance.php',
				'2',
				'Applied',
				'Grants an object energy resistance.' 
			],
			[
				'Draught of Acid Proof',
				'link' => 'recipes/acid_resist.php',
				'2',
				'Applied',
				'Grants the drinker acid resistance.' 
			],
			[
				'Draught of Cold Proof',
				'link' => 'recipes/cold_resist.php',
				'2',
				'Applied',
				'Grants the drinker cold resistance.' 
			],
			[
				'Draught of Electricity Proof',
				'link' => 'recipes/shock_resist.php',
				'2',
				'Applied',
				'Grants the drinker electricity resistance.' 
			],
			[
				'Draught of Fire Proof',
				'link' => 'recipes/fire_resist.php',
				'2',
				'Applied',
				'Grants the drinker fire resistance.' 
			],
			[
				'Elixir of Healing, Lesser',
				'link' => 'recipes/healing_1.php',
				'1',
				'Imbibed',
				'Restores 1d8 damage + 1/level (max +5).' 
			],
			[
				'Elixir of Healing',
				'link' => 'recipes/healing_2.php',
				'2',
				'Imbibed',
				'Restores 2d8 damage + 1/level (max +10).' 
			],
			[
				'Elixir of Healing, Improved',
				'link' => 'recipes/healing_3.php',
				'3',
				'Imbibed',
				'Restores 3d8 damage + 1/level (max +15).' 
			],
			[
				'Elixir of Healing, Greater',
				'link' => 'recipes/healing_4.php',
				'4',
				'Imbibed',
				'Restores 4d8 damage + 1/level (max +20).' 
			],
			[
				'Elixir of Healing, Maximum',
				'link' => 'recipes/healing_5.php',
				'5',
				'Imbibed',
				'Restores 5d8 damage + 1/level and restores life to recently slain creatures.' 
			],
			[
				'Tindertwig Box',
				'link' => 'recipes/tindertwigs.php',
				'0',
				'Activated',
				'Creates a box of 25 tindertwigs that can be used to light fires.' 
			],
			[
				'Daylight Oil',
				'link' => 'recipes/daylight_oil.php',
				'3',
				'Applied',
				'Shines bright light when applied.' 
			],
			[
				'Sunrod',
				'link' => 'recipes/sunrod.php',
				'0',
				'Activated',
				'Glows brightly when struck.' 
			],
			[
				'Sunrod, Greater',
				'link' => 'recipes/sunrod_greater.php',
				'3',
				'Activated',
				'Shines like the sun when struck.' 
			],
			[
				'Anti-Plague',
				'link' => 'recipes/anti_plague.php',
				'3',
				'Imbibed',
				'Cures diseases affecting the drinker.' 
			],
			[
				'Antidote, Lesser',
				'link' => 'recipes/antidote_lesser.php',
				'1',
				'Imbibed',
				'Helps neutralize poisons affecting the drinker.' 
			],
			[
				'Antidote',
				'link' => 'recipes/antidote.php',
				'3',
				'Imbibed',
				'Neutralizes poisons affecting the drinker.' 
			],
			[
				'Antidote, Greater',
				'link' => 'recipes/antidote_greater.php',
				'5',
				'Imbibed',
				'Automatically neutralizes poisons affecting the drinker and undoes their effects.' 
			],
			[
				'Plague Vial',
				'link' => 'recipes/plague.php',
				'3',
				'Bomb',
				'Infects nearby creatures with a disease.' 
			],
			[
				'Plague Vial, Greater',
				'link' => 'recipes/plague_greater.php',
				'5',
				'Bomb',
				'Infects nearby creatures with a disease.' 
			],
			[
				'Blinding Spray',
				'link' => 'recipes/blinding_spray.php',
				'2',
				'Activated',
				'This fine spray causes blindness in the target.' 
			],
			[
				'Deafening Cell',
				'link' => 'recipes/deafening_cell.php',
				'2',
				'Activated',
				'This object is designed to burst with a sound loud enough to cause permanent deafness.' 
			],
			[
				'Dazing Cell',
				'link' => 'recipes/dazing_cell.php',
				'0',
				'Activated',
				'The target is dazed for 1 round.' 
			],
			[
				'Flash Cell',
				'link' => 'recipes/flash_cell.php',
				'0',
				'Activated',
				'The target is dazzled for 1 minute.' 
			],
			[
				'Water Purifying Salts',
				'link' => 'recipes/purify_water.php',
				'0',
				'Creation',
				'Purifies water when added.' 
			],
			[
				'Bull\'s Strength Mutagen',
				'link' => 'recipes/str_mutagen.php',
				'2',
				'Imbibed',
				'Grants a bonus to strength and a penalty to intelligence.' 
			],
			[
				'Cat\'s Grace Mutagen',
				'link' => 'recipes/dex_mutagen.php',
				'2',
				'Imbibed',
				'Grants a bonus to dexterity and a penalty to wisdom.' 
			],
			[
				'Bear\'s Endurance Mutagen',
				'link' => 'recipes/con_mutagen.php',
				'2',
				'Imbibed',
				'Grants a bonus to constitution and a penalty to charisma.' 
			],
			[
				'Fox\'s Cunning Mutagen',
				'link' => 'recipes/int_mutagen.php',
				'2',
				'Imbibed',
				'Grants a bonus to intelligence and a penalty to strength.' 
			],
			[
				'Owl\'s Wisdom Mutagen',
				'link' => 'recipes/wis_mutagen.php',
				'2',
				'Imbibed',
				'Grants a bonus to wisdom and a penalty to dexterity.' 
			],
			[
				'Eagle\'s Splendor Mutagen',
				'link' => 'recipes/cha_mutagen.php',
				'2',
				'Imbibed',
				'Grants a bonus to charisma and a penalty to constitution.' 
			]
		]
	);
	require $startDir.'pageEnd.php';
?>