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
		'Drakheim',
		'plane',
		[
			'One of the planes recently contacted by the Overworld is Drakheim, literally Home of the Dragons. Drakheim is a lower plane. It was here that many thousands of years ago, but not as many as the first three races, Dragons first evolved and gained intelligence. On this plane there are now many species of dragon, drakkonoid, and lizard races, both of animal and sentient intelligence. This plane is unique as the only plane to naturally yield sentient life, all other sentient life originated by way of divine or profane intervention. More ancient than most modern races and located deeper into the void planes, the races of Drakheim have interacted with the planes for many thousands of years and there are several prevalent demonic and angelic races that originate there, most known to the Overworld being the race of End Dragons. It is also thought by some to be the true origin of the Lizardmen/Lizardfolk races of the Overworld and from the home plane of the mysterious Super Blocker civilization. In fact the more intelligent races of Drakheim claim that the native Lizardfolk race has spread to more planes than they care to keep track of.'
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
					'bb/Essence/bb: Mixed with Fire or Ice Dominant regions',
					'bb/Alignment/bb: Mildly Neutral-Aligned',
					'bb/Magic/bb: Normal, though fire spells are enhanced and cold spells are impeded in fire dominant regions and cold spells are enhanced while fire spells are impeded in ice dominant regions',
				])
			],
			[
				'title' => 'Denizens',
				'spaced' => true,
				'texts' => quick_array([
					'/ee/Arcane Dragons',
					'/mm/Arcane dragons are the first dragons to exist and are often the size of whole mountains. Arcane dragons possess vast arcane magic capable of bending reality to their will. They often use these powers to take on humanoid guises to interact with persons from other planes. Each arcane dragon possesses a breath weapon with two separate energies or substances. These breath weapons can vary wildly. The true form of an arcane dragon can also greatly vary, with any form that can generally be considered “draconic” being a possibility. An arcane dragon\'s body is covered with scales though these scales may be hidden behind feathers or fur in patches or across their bodies. The scales, feathers, and fur colors can be any hue or shade though metallic or gem-like ones are most common.',
					'/ee/Grand Dragons',
					'/mm/Grand dragons are generally the most powerful dragons most explorers of Drakheim will ever meet. They can grow up to 1,000 feet tall but most stand around 600 or so feet tall. Grand dragons have the same level of variation among their true forms as arcane dragons but lack much of their power. Grand dragons are capable of wielding powerful arcane magic (usually around that available to the most powerful [20th level] mortals). They have a breath weapon that usually takes the form of an energy attack.',
					'/ee/True Dragons',
					'/mm/So-called “true” dragons are the most powerful dragons, and closest to the originals, that most peoples of the Overworld have ever encountered. As such, many Overworld scholars have erroneously determined them to be the ultimate progenitors of dragon-kind and have thus given them the title of “true dragons”. True dragons are divided into classes that are further divided into distinct types of dragon. These types are clearly divided by appearance, mostly notably by scale color. Classes tend to have a theme to their appearances as well as several shared aspects of their mentalities. The most well known classes of true dragons are metallic and chromatic dragons.',
					'/ee/Lesser Dragons',
					'/mm/Various species of lesser dragons exist which are superficially similar to true dragons but are generally smaller and weaker. Some lesser ndragons are sentient while others have regressed to a bestial state. Lesser dragons usually have a breath weapon of some sort but may or may not have magical abilities beyond that.',
					'/ee/Minor Dragons',
					'/mm/Minor dragons refers to a number of species of rather small dragons that are generally sentient and highly intelligent. Minor dragons generally have significant skill in magic.',
					'/ee/Drakes',
					'/mm/Drakes are bestial dragons that retain the general form and breath weapon of greater dragons but none of the intelligence. They can vary significantly in their appearance but are universally winged and four-legged',
					'/ee/Wyverns',
					'/mm/Wyverns are a group of dragons whose body-plan resembles that of a great scaly bat, having only two legs. Some wyverns have two pairs of wings and the wyverns with only a single pair of wings have signs of vestigial wing-joints in their skeletal structures. Wyverns are animal-like and highly agressive. They have no magic beyond their elemental breath weapons but often have tail tipped with a venomous sting.',
					'/ee/Dragonkin',
					'/mm/Dragonkin refers to the many dragon-like species of not-quite-dragons. Many of these are hybrids between dragon races and non-draconic races. They vary significantly in what traits they present.',
					'/ee/Lizard-Peoples',
					'/mm/There are many varieties of lizardmen, lizardfolk, or the such. These races are characterized by being humanoid races of lizards. They come in many varieties and while not all originate from Drakheim a surprising number do and, among non Drakheim originating lizard-peoples, it is not uncommon for some amount of blood from a lizard-person of draconic descent to be mixed in. Lizard-people are some of the least among the draconic races and generally lack all innate arcane powers. Despite this, lizard-people have quite a knack for winding up on other planes and establishing colonies thereon.',
					'/ee/Burgolds',
					'/mm/Burgolds are akin to kobolds but, where kobolds share an affinity with chromatic dragons, burgolds have affinity with and scales matching metallic dragons.',
					'/ee/Kobolds',
					'/mm/Kobolds are the rock bottom of the draconic hierarchy. Kobolds are fairly small humanoid lizard people with several draconic features. Kobolds have scales matching the colors of chromatic dragons. Kobolds often serve chromatic dragons of their same color as minor minions and often do not fare well without the aid of a more powerful dragon.'
				])
			],
			[
				'title' => 'Divinities',
				'spaced' => true,
				'texts' => quick_array([
					'No known divinities reside in Drakheim',
					'bb/Outsiders/bb: None',
					'bb/Petitioners/bb: None'
				])
			],
			[
				'title' => 'Infusions',
				'spaced' => true,
				'texts' => quick_array([
					'bb/Basic/bb: Choose a specific type of dragon that possesses a breath weapon that deals damage. You gain +5 resistance vs the damage type of their breath weapon or are treated as having 5 damage reduction that only applies against that damage type if it is physical. You are also treated as having +2 AC against attack rolls to confirm critical hits.',
					'bb/Improved/bb: You can cast ii/dragon\'s breath/ii once per day as a spell-like ability except you can only do so to copy the breath weapon of the dragon you chose, even if the spell does not normally allow the correct damage type. It must manifest as either a 60-foot line or 30-foot cone.',
					'bb/Greater/bb: You may take the form of the dragon you chose as ii/form of the dragon II/ii, ii/form of the exotic dragon II/ii, or ii/form of the alien dragon II/ii. If none of those spells are able to replicate your chosen type of dragon, you may take the form as ii/form of the dragon II/ii with an appropriate list of abilities as determined by the GM.',
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>