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
<title>Potions</title>
<?php
	block(
		'Potions',
		'intro',
		[
			'Potions come with many different effects. Each different effect can be found in regular, splash, and lingering variants. Splash potions can be thrown as throwing weapons with a range increment of 10 feet except that they deal no damage, instead a splash potion affects all creatures who are splashed by the potion though they had drank the potion. Lingering potions behave similarly except that they can only be thrown targetting grid intersections and they leave an alchemical mist behind that lasts for 3d6 rounds afterward. This mist does not obscure vision but, any creature who passes through this mist, or ends their turn in it, take, are affected by the original potion, however each time a creature receives this effect the duration of the mist is reduced by one round. If the duration is reduced to zero, the mist ends. Alchemical ammunition can also be created that carry the properties of the properties of the potion. Any creature hit with an attack from one of these pieces of ammunition is affected as though they had drank the potion. Splash potions cost an additional 300 gp plus 400 gp per caster level of the potion unless specified otherwise. Lingering potions cost an additional 1,400 gp plus 800 gp per caster level of the potion unless specified otherwise. Alchemical ammunition costs the same as a splash potion of the same type unless specified otherwise. Any effect that has a duration can be bought in an extended duration version that increases the duration and doubles the price. All lingering potions can be bought with an extended duration and doing so also doubles the duration of the resulting mist.'
		]
	);
	contents(
		[
			'Potion of Regeneration',
			'Potion of Swiftness',
			'Potion of Energy Resistance',
			'Potion of Healing',
			'Potion of Night Vision',
			'Potion of Strength',
			'Potion of Leaping',
			'Potion of Water Breathing',
			'Potion of Invisibility',
			'Potion of Slow Falling',
			'Potion of Poison',
			'Potion of Weakness',
			'Potion of Slowness',
			'Potion of Harming'
		]
	);
	magicItemBlockAuto(
		'Potion of Regeneration',// Name
		'Conjuration',// School
		'1st (Level I), 3rd (Level II), 5th (Level III), 7th (Level IV), 9th (Level V)',// CL
		'—',// Slot
		'50 gp (Level I), 300 gp (Level II), 750 gp (Level III), 1,400 gp (Level IV), 2,250 gp (Level V)',// Price
		'—',// Weight
		'The drinker of this potion receives fast healing equal to the level of the potion for 1 minute or 2 minutes if extended.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/infernal healing/ii or ii/celestial healing/ii; bb/Cost/bb 25 gp (Level I), 150 gp (Level II), 375 gp (Level III), 700 gp (Level IV), 1,125 gp (Level V)'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Swiftness',// Name
		'Transmutation',// School
		'1st (Level I), 1st (Level II), 2nd (Level III), 3rd (Level IV), 4th (Level V)',// CL
		'—',// Slot
		'25 gp (Level I), 50 gp (Level II), 150 gp (Level III), 300 gp (Level IV), 500 gp (Level V)',// Price
		'—',// Weight
		'The drinker of this potion receives an increase to their base speed equal to 5 feet per level of the potion, and an increase to their other movement types equal to half of that. This effect lasts for 10 minutes or 1 hour if extended.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/longstrider/ii; bb/Cost/bb 12 gp (Level I), 25 gp (Level II), 75 gp (Level III), 150 gp (Level IV), 250 gp (Level V)'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Energy Resistance',// Name
		'Abjuration',// School
		'3rd (Level I), 5th (Level II), 7th (Level III), 9th (Level IV), 11th (Level V)',// CL
		'—',// Slot
		'300 gp (Level I), 500 gp (Level II), 700 gp (Level III), 900 gp (Level IV), 1,100 gp (Level V)',// Price
		'—',// Weight
		'The drinker of this potion receives resistance to one type of energy chosen when the potion is create. The drinker receives resistance equal to 5 plus 5 per level of the potion. (10 at Level I, 15 at Level II, 20 at Level III, etc.) This effect lasts for 10 minutes per caster level of the potion or twice that duration if extended.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/resist energy/ii; bb/Cost/bb 150 gp (Level I), 250 gp (Level II), 350 gp (Level III), 450 gp (Level IV), 550 gp (Level V)'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Healing',// Name
		'Conjuration',// School
		'1st (Level I), 3rd (Level II), 5th (Level III), 7th (Level IV), 9th (Level V)',// CL
		'—',// Slot
		'50 gp (Level I), 300 gp (Level II), 750 gp (Level III), 1,400 gp (Level IV), 2,250 gp (Level V)',// Price
		'—',// Weight
		'The drinker of this potion receives a number of d6 points of healing equal to the level of of the potion. This a positive energy effect. Creatures who are damaged by positive energy take the listed amount of healing as damage instead.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, any ii/cure/ii spell; bb/Cost/bb 25 gp (Level I), 150 gp (Level II), 375 gp (Level III), 700 gp (Level IV), 1,125 gp (Level V)'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Night Vision',// Name
		'Transmutation',// School
		'1st (Level I), 3rd (Level II), 7th (Level III)',// CL
		'—',// Slot
		'25 gp (Level I), 300 gp (Level II), 1,400 gp (Level III)',// Price
		'—',// Weight
		'The drinker of a level I ii/potion of night vision/ii receives low-light vision. The drinker of a level II ii/potion of night vision/ii receives darkvision to a range of 60 feet. The drinker of a level III ii/potion of night vision/ii receives darkvision to a range of 120 feet. This effect lasts for 1 hour minutes or 12 hours if extended.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/darkvision/ii or ii/darkvision, greater/ii; bb/Cost/bb 12 gp (Level I), 150 gp (Level II), 700 gp (Level III)'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Strength',// Name
		'Transmutation',// School
		'1st (Level I), 3rd (Level II), 7th (Level III)',// CL
		'—',// Slot
		'50 gp (Level I), 300 gp (Level II), 750 gp (Level III)',// Price
		'—',// Weight
		'The drinker of this potion receives an alchemical bonus to their strength equal twice the level of the potion. This effect lasts for 10 minutes or 1 hour if extended.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/bull\'s strength/ii; bb/Cost/bb 25 gp (Level I), 150 gp (Level II), 375 gp (Level III)'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Leaping',// Name
		'Transmutation',// School
		'1st (Level I), 5th (Level II), 9th (Level III)',// CL
		'—',// Slot
		'50 gp (Level I), 250 gp (Level II), 450 gp (Level III)',// Price
		'—',// Weight
		'The drinker of this potion receives an alchemical bonus acrobatics checks made to high jump or long jump equal to +10 times the level of the potion. This effect lasts for 1 minute or 10 minutes if extended.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/jump/ii; bb/Cost/bb 25 gp (Level I), 125 gp (Level II), 225 gp (Level III)'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Water Breathing',// Name
		'Transmutation',// School
		5,// CL
		'—',// Slot
		750,// Price
		'—',// Weight
		'The drinker of this potion can breathe water freely. This effect lasts for 1 hour or 12 hours if extended.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/water breathing/ii; bb/Cost/bb 375 gp'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Invisibility',// Name
		'Illusion',// School
		'3rd (Level I), 7th (Level II)',// CL
		'—',// Slot
		'300 gp (Level I), 1,400 gp (Level II)',// Price
		'—',// Weight
		'The drinker of this potion turns invisible as ii/invisibility/ii, or ii/invisibility, greater/ii if the potion is level II. This effect lasts for 1 minute or 10 minutes if extended.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/invisibility/ii or ii/invisibility, greater/ii; bb/Cost/bb 375 gp'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Slow Falling',// Name
		'Transmutation',// School
		1,// CL
		'—',// Slot
		50,// Price
		'—',// Weight
		'The drinker of this potion fall slowly and do not take fall damage as the spell ii/feather fall/ii except that the effect does not end when the drinker lands. This effect lasts for 1 minute or 10 minutes if extended.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/feather falling/ii; bb/Cost/bb 25 gp'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Poison',// Name
		'Necromancy',// School
		'1st (Level I), 3rd (Level II), 5th (Level III), 7th (Level IV), 9th (Level V)',// CL
		'—',// Slot
		'25 gp (Level I), 150 gp (Level II), 375 gp (Level III), 700 gp (Level IV), 1,125 gp (Level V)',// Price
		'—',// Weight
		'The drinker of this potion receives 1d6 points of nonlethal poison damage per level of the potion each round for 1 minute or 2 minutes if extended. Splash versions of this potions only cost twice the regular price and lingering potions cost four times the listed price.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/poisoned egg/ii or ii/poison/ii; bb/Cost/bb 12 gp (Level I), 75 gp (Level II), 187 gp (Level III), 350 gp (Level IV), 562 gp (Level V)'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Weakness',// Name
		'Transmutation',// School
		'1st (Level I), 3rd (Level II), 7th (Level III)',// CL
		'—',// Slot
		'50 gp (Level I), 300 gp (Level II), 750 gp (Level III)',// Price
		'—',// Weight
		'The drinker of this potion a penalty to their strength equal to -2 times the level of the potion. Splash versions of this potions only cost twice the regular price and lingering potions cost four times the listed price. This effect lasts for 1 minute or 10 minutes if extended.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/ray of enfeeblement/ii; bb/Cost/bb 25 gp (Level I), 150 gp (Level II), 375 gp (Level III)'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Slowness',// Name
		'Transmutation',// School
		'1st (Level I), 1st (Level II), 2nd (Level III), 3rd (Level IV), 4th (Level V)',// CL
		'—',// Slot
		'25 gp (Level I), 50 gp (Level II), 150 gp (Level III), 300 gp (Level IV), 500 gp (Level V)',// Price
		'—',// Weight
		'The drinker of this potion a penalty to all of their speed equal to 5 feet per level of the potion. This effect lasts for 10 minutes or 1 hour if extended. Splash versions of this potions only cost twice the regular price and lingering potions cost four times the listed price.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, ii/glue seal/ii or ii/entangle/ii; bb/Cost/bb 12 gp (Level I), 25 gp (Level II), 75 gp (Level III), 150 gp (Level IV), 250 gp (Level V)'// Construction/Destruction
	);
	magicItemBlockAuto(
		'Potion of Harming',// Name
		'Necromancy',// School
		'1st (Level I), 3rd (Level II), 5th (Level III), 7th (Level IV), 9th (Level V)',// CL
		'—',// Slot
		'50 gp (Level I), 300 gp (Level II), 750 gp (Level III), 1,400 gp (Level IV), 2,250 gp (Level V)',// Price
		'—',// Weight
		'The drinker of this potion takes a number of d6 points of damage equal to the level of of the potion. This a negative energy effect. Creatures who are healed by negative energy receive the listed amount of damage as healing instead.',// Desc
		false,// Is Artifact
		'bb/Requirements/bb a number of ranks in Craft (alchemy) equal to the caster level of the potion, any ii/inflict/ii spell; bb/Cost/bb 25 gp (Level I), 150 gp (Level II), 375 gp (Level III), 700 gp (Level IV), 1,125 gp (Level V)'// Construction/Destruction
	);
	require $startDir.'pageEnd.php';
?>