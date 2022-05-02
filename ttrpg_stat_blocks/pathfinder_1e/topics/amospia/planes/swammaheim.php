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
	block(
		'Swammaheim',
		'plane',
		[
			'Also known as the "mushroom dimension", the entire ecology of this plane is dominated by exotic forms of mushroom producing fungi many which stand as tall as trees. Swammaheim is an upper plane.'
		],
		true,
		[
			[
				'title' => 'Traits',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Gravity/bb: Normal',
					'bb/Time/bb: Normal',
					'bb/Realm/bb: Immeasurable',
					'bb/Structure/bb: Lasting',
					'bb/Essence/bb: Mixed',
					'bb/Alignment/bb: Mildly Neutral-Aligned',
					'bb/Magic/bb: Normal, though spells that create plants can only yield equivalent mushrooms and spells that improve or affect plants kill them off and replace them with equivalent mushrooms. Mushrooms on this plane are otherwise treated as plants for the purposes of spells and effects. Some examples may be ii/goodberry/ii enchanting 2d4 fresh small mushrooms or ii/entangle/ii causing nearby mycelium to reach up from the ground and wrap around creatures. Additionally, spells that create animals create mushroom infected versions like li/https://minecraft.fandom.com/wiki/Mooshroom|mooshrooms/li.',
				])
			],
			[
				'title' => 'Denizens',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Mooshrooms/bb: Mooshrooms are a bovine creature native to the plane which live in symbiosis with a mycelial network that extands through their body and grows spore spreading mushrooms from their backs. These mushrooms come in two different varieties, red with white spots and solid brown, and the the hosts patterning will change to match the patterning of the mushroom. In theory, the mycelia can take any bovine species as a valid host though only a few are found on the plane. While it is unclear what exact relation the mycelia and hosts have it is clear that the fungus does not need a bovine host and can grow in soil, that the fungus does not harm the host in any way, and that the host is afforded a great deal of resistance to toxins and disease. Additionally, approximately half of a host cow\'s teats will appear to be covered in mycelium and when milked will yield a warm creamy mushroom stew in place of milk. The stew from brown mooshrooms will often be heavily affected by what the cow has recently eaten and may be highly toxic or extra nourishing as a result.'
				])
			],
			[
				'title' => 'Divinities',
				'spaced' => true,
				'texts' => quick_array([
					'No known divinities reside in Swammaheim',
					'bb/Outsiders/bb: None',
					'bb/Petitioners/bb: None'
				])
			],
			[
				'title' => 'Infusions',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Basic/bb: You gain a +1 bonus on Fortitude saves, a +2 bonus on Knowledge (nature) checks to identify fungus and fungal creatures and their effects, abilities, and weaknesses, and a +2 bonus on Survival checks to forage for food. When you gain the improved infusion, you can make a DC 25 Survival check to forage for food as a standard action to grow a number of ii/ironbloom sprouts/ii as though they were targetted by the spell.',
					'bb/Improved/bb: You can use ii/fungal infestation/ii once per day as a spell-like ability. Treat this ability as being heightened, such as by the metamagic feat Heighten Spell, to a level equal to half your character level, rounded down.',
					'bb/Greater/bb: You can use ii/green caress/ii once per day as a spell-like ability, though the target always takes the form of a mushroom of the same size as the creature. Treat this ability as being heightened, such as by the metamagic feat Heighten Spell, to a level equal to half your character level, rounded down.',
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>