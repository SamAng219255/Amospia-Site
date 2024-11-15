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
	
	block(
		[
			'text' => 'Elemental Cantrips',
			'titleLevel' => 1
		],
		'elemental-cantrips',
		[
			'Dragon eaters gain access the elemental cantrip matching the energy types of their draconic sources. If an elemental cantrip allows a save, the DC is equal to 10 plus your Charisma modifier.'
		],
		true,
		[
			[
				'title' => 'Acid',
				'spaced' => true,
				'titleLevel' => 2,
				'texts' => [
					'You can make your natural skin oils highly corrosive, allowing you to deal 1d6 points of acid damage to a touched non-magical object that treats its hardness as being one-fourth its actual value. You can also increase the acidity of a touched solution. This increases the damage of a weapon like an acid flask by 1d6 points. If used on food, it becomes less bitter and more sour. If used on water it becomes hazardous to life and unable to support water-breathing life. This can only affect a single continuous body of liquid in a 5-foot cube.'
				]
			],
			[
				'title' => 'Cold',
				'spaced' => true,
				'titleLevel' => 2,
				'texts' => [
					'You can extinguish a touched burning creature or another fire no larger than a 5-foot cube. Once per round, you may chill a touched nonmagical object. If the object is Tiny or smaller, you chill the object by 40°. If it is Small, you chill it by 20°. If it is Medium, you chill it by 10°. If it is Large, you chill it by 5°. You cannot meaningfully chill an object larger than Large size. Regardless of its size, the minimum temperature you can chill it to is -80°.'
				]
			],
			[
				'title' => 'Electricity',
				'spaced' => true,
				'titleLevel' => 2,
				'texts' => [
					'You can create a magnetic field that acts in every way like any given part of you was an extra strong magnet but also grants you a +1 bonus to CMD against attempts to disarm or steal a magnetic object as well as to CMB for disarm or steal to relieve your target of a magnetic object. It also grants a +1 deflection bonus against attacks with magnetic objects. This field lasts until you dismiss it as a free action. You can create an aura of static charge that forms a 5-foot-radius emanation from you and remains until dismissed as a free action. Within this area, hair stands on end and objects readily deliver small non-damaging but occasionally painful electric shocks. Creating this field in a lightning storm also attracts lightning strikes. Each round you emit this field in a lightning storm you have a 5% chance to be struck by lightning. You can also transfer this charge to a touched creature or object which receives a Fortitude save to prevent it. After being successfully transferred, the field only lasts for 1 round per level or until you dismiss it or reform it around yourself. You can also power a touched technological item that is powered by electricity and is Small sized or smaller as long as you are touching it.'
				]
			],
			[
				'title' => 'Fire',
				'spaced' => true,
				'titleLevel' => 2,
				'texts' => [
					'You can light a flammable unattended object no larger than Small size on fire. Magical items receive a Will save against this effect. Once per round, you may heat a touched nonmagical object. If the object is Tiny or smaller, you heat the object by 40°. If it is Small, you heat it by 20°. If it is Medium, you heat it by 10°. If it is Large, you heat it by 5°. You cannot meaningfully heat an object larger than Large size. Regardless of its size, the maximum temperature you can heat it to is 220°.'
				]
			],
			[
				'title' => 'Force',
				'spaced' => true,
				'titleLevel' => 2,
				'texts' => [
					'You can perform minor telekinesis similar to mage hand, except you can move an object that weighs up to 5 pounds per 2 levels you possess (minimum 5 pounds), and you can move magical objects. Additionally, you can create a container of force in order to hold liquids or piles of small objects of the same weight. You can dip the container to pick up or drop a liquid as a move action. You can also duplicate the effects of the open/close cantrip.'
				]
			],
			[
				'title' => 'Negative',
				'spaced' => true,
				'titleLevel' => 2,
				'texts' => [
					'You can touch a creature to replicate the effects of bleed or touch of fatigue. You can also touch an object to place it slightly in shadow, replicating the effects of the spell penumbra.',
					'You can also animate a single corpse or piece of a corpse (such as a severed hand) no larger than a foot across in any direction (Diminutive size). This lasts until it is dismissed and it follows all commands you verbally give it. If it is more than 10 feet away from you, it lasts only 10 minutes per level unless it returns to your presence. It possesses the same mental statistics as you do but its Strength and Dexterity are each 5. It is treated as having all the same skill ranks and class skills as you do. It has an AC of 10 and a number of hit points equal to 4 plus your Charisma modifier. It cannot speak but it is able to non-verbally communicate with you if you can see it and it is within 60 feet. Complete, or nearly complete, corpses retain any movement speeds they possessed as well as any extraordinary abilities and natural attacks they possessed in life that did not require portions lost. Less complete pieces, such as severed hands, skulls, or eyeballs, gain a 10-foot base land speed and a slam primary natural attack that deals 1 point of nonlethal bludgeoning damage.',
					'You can only animate a single object this way. Attempting to animate a new corpse this way ends the previous animation. This ability does not prevent the corpse from being animated again after it ends or is destroyed.'
				]
			],
			[
				'title' => 'Positive',
				'spaced' => true,
				'titleLevel' => 2,
				'texts' => [
					'You can touch a creature to replicate the effects of stabilize or to remove fatigue. The latter of which automatically dispels touch of fatigue. You can also touch an object to make it glow, replicating the spell light. You can also spend a full-round action cause a touched plant to spontaneously grow a month\'s worth of growth. This can only affect a region of a touched plant no larger than a 1-foot radius around the point touched.'
				]
			],
			[
				'title' => 'Sonic',
				'spaced' => true,
				'titleLevel' => 2,
				'texts' => [
					'You can create sound as though singing or playing any instrument though you still require an appropriate Perform check to do so well. You can also replicate the effects of a ghost sound spell or amplify your voice, decreasing the DC to hear you by 10 and granting a bonus to Intimidate checks equal to half your level, minimum +1.'
				]
			],
		]
	);
	block(
		[
			'text' => 'Dragon Talents',
			'titleLevel' => 1
		],
		'desc',
		[
			'Dragon talents are divided into physical and arcane talents. Physical talents grant physical changes to the dragon eater while arcane talents grant or improve magical abilities. Talents that say they use a breath weapon cannot be used unless the breath weapon is available and they prevent the breath weapon from being used for 1d4 rounds as normal. Some dragon talents have prerequisites that must be met before you can take it. These prerequisites tend to restrict talents by level, previously acquired talents, and various attributes of your draconic sources. You may use a talent that requires having a draconic source of a certain category with any of your sources but other prerequisites based on your draconic sources can only be used with sources that meet the prerequisites.'
		],
		true
	);
	block(
		[
			'text' => 'Arcane Talents',
			'titleLevel' => 2
		],
		'desc',
		[
			'Arcane talents either grant or improve the magical abilities of the dragon eater. Unless specified otherwise, arcane talents are supernatural abilities.'
		],
		true
	);
	dragonTalent(
		'Change Shape',
		'You can assume any humanoid form three times per day as if using alter self.'
	);
	block(
		[
			'text' => 'Physical Talents',
			'titleLevel' => 2
		],
		'desc',
		[
			'Physical talents grant physical changes to the dragon eater to make them more draconic. Unless specified otherwise, physical talents are extraordinary abilities.'
		],
		true
	);
	require $startDir.'pageEnd.php';
?>