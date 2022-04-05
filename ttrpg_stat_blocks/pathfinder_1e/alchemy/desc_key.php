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
	block(
		'Recipe Descriptions',
		'description',
		quick_array([
			'The description of each recipe is presented in a standard format. Each category of information is explained and defined below.'
		]),
		true,
		[
			[
				'title' => 'Name',
				'spaced' => true,
				'texts' => quick_array([
					'The first line of every recipe description gives the name by which the recipe is generally known.'
				])
			],
			[
				'title' => 'Form',
				'spaced' => true,
				'texts' => quick_array([
					'Beneath the recipe name is a line giving the form to which the recipe belongs.',
					'Every recipe belongs to one of eight forms. A form is a group of related recipes that work in similar ways.',
					'/mm/ /ee/ <h4>Activated</h4>',
					'/mm/ Activated recipes create substances that are designed to be activated after creation through means such as breaking the seal seperating two or more substances or by striking the container with some type of percussive force. These could produce a variety of effects on demand such as releasing a cloud of gas, emitting light, or heating up. Unless specified otherwise, activated recipes yield an object that can be activated later as a standard action that does not provoke an attack of opportunity.',
					'/mm/ /ee/ <h4>Application</h4>',
					'/mm/ Application recipes are designed to applied to a surface and may be designed to activate any properties when exposed to the intended surface or to air or moisture. Application recipes could mimic aa/alchemical_oils|alchemical oils/aa, make surfaces slippery, or transmute one substance to another. Unless specified otherwise, application recipes yield a substance that can be applied to a surface or object later as a standard action that provokes attacks of opportunity.',
					'/mm/ /ee/ <h4>Bomb</h4>',
					'/mm/ Bomb recipes are generally stored in inexpensive breakable vials designed to release their volatile contents onto a target. Some examples of classical bomb recipes are acid flasks and alchemist fire. Unless specified otherwise, bomb recipes yield a highly breakable item that is a ranged weapon can be thrown as splash weapons with a range of 20 feet. These items have 1 hardness, 1 hit point, and an AC of 9. If they are destroyed, their effects activate and nearby creatures are affected by their splash and any other effects. If it is currently being held by a creature, the creature may add any dexterity, dodge, or deflection bonuses they possess to the AC of the item, but if it is destroyed they become the target of the bomb.',
					'/mm/ /ee/ <h4>Cauldron</h4>',
					'/mm/ Cauldron recipes are so named as they are often brewed in a large cauldron. Cauldron recipes require spending long periods of time tending a mixture making specific adjustments as time goes on. This mixture, either while it is being tended or after it is finished, produces some grand or impossible effect such as changing the weather or creating a doorway to another plane. Cauldron recipes produce their effects once the practicer has spent the required time brewing the mixture.',
					'/mm/ If the duration line ends with "(S)" its effects persist so long as the practicer continues tending and stirring the mixture. Tending the mixture is a standard action that provokes attacks of opportunity unless the practicer does so defensively. Tending a recipe defensively requires a concentration check equal to 15 plus twice the recipe level. If the practicer fails this check they fail to tend the recipe. If a practicer takes damage while performing the action to tend a recipe, they must make a concentration check equal to 10 plus the recipe level plus the amount of damage they took. A practicer cannot tend a recipe while under an effect that would deny them their dexterity modifier. Another practicer other than the one who began the recipe can attempt to tend a recipe but if a creature attempts to tend a recipe where they were not the last creature to attempt to tend the recipe, they must make a Craft (alchemy) check equal to 20 plus twice the level of recipe or else they fail to tend it. Any creature can attempt to tend a recipe but they can only succeed if the have at least one alchemy level or rank in Craft (alchemy). If they are not capable of creating the recipe they must also be able to receive verbal, written, or similar instruction from one who can in order to successfully tend the recipe. If the last creature who successfully tended the recipe does not successfully tend the recipe on their turn, it ends at the begining of their next turn if no other creature has successfully tended it before then.',
					'/mm/ /ee/ <h4>Creation</h4>',
					'/mm/ Creation recipes produce a specific object or material from various reagents. Creation recipes yield a created object that is generally not alchemical in nature on its own though it may possess unusual or seemingly impossible properties.',
					'/mm/ /ee/ <h4>Imbibed</h4>',
					'/mm/ Imbibed recipes are generally designed to be drunk and have a specific effect created by interacting with the imbiber\'s biology. Imbibed recipes yield a consumable substance that can be eaten, or more often drank, later to provide their effect. Consuming an imbibed recipe is a standard action that provokes attacks of opportunity. Due to their reliance on the target creatures biology, imbibed recipes have no effect on constructs or elementals and the creator must make an alchemy level check for the recipe to affect undead or aberrations with a DC equal to 11 plus their CR unless it was created by the same type of undead or aberration. Creatures immune to poison are also immune to the harmful effects of imbibed recipes. Creatures that are unable to eat or drink (as opposed to ones that don\'t need to) are incapable of consuming an imbibed recipe.',
					'/mm/ /ee/ <h4>Rocket</h4>',
					'/mm/ Rocket recipes use gunpowder and other explosive and flammable materials, or similar substances, to propel themselves long distances before often exploding. Unless specified otherwise, rocket recipes yield a ranged weapon containing volatile materials capable of propelling itself potentially long distances before releasing its payload or otherwise providing its other effects. Igniting and aiming a rocket recipe is a standard action.',
					'/mm/ Rocket recipes quickly travel a specific distance before exploding though most are designed so that their target distance can be adjusted while lighting. Rocket recipes list a maximum range and a range increment and can be used to make a ranged touch attack at a target or square within their maximum range applying any penalties from the distance due to the range increment. Treat squares as having an AC of 5. On a miss, the rocket still explodes, potentially nearby. If the attack failed only due to a miss chance, the rocket explodes in the target\'s square or the square the creature firing it believes the target is in. If the target has a bonus due to cover and the attack would have missed against an AC of 10 plus the cover bonus, the rocket deflects off the cover and travels the remaining distance to the target in a random direction before exploding in that square. Otherwise if the attack missed, the rocket explodes a number of squares away in a random direction from the target. The distance away is equal to the number of full range increments away the target is.',
					'/mm/ /ee/ <h4>Substance</h4>',
					'/mm/ Substance recipes produce an alchemically significant substance with specific properties. Unless otherwise specified, substance recipes yield an a specific alchemical substance with special properties. This substance lasts for a given duration before becoming unusable.'
				])
			],
			[
				'title' => '[Descriptor]',
				'spaced' => true,
				'texts' => quick_array([
					'Appearing on the same line as the form, when applicable, is a descriptor that further categorizes the recipe in some way. Some recipes have more than one descriptor.',
					'Recipes have the same list of descriptors as spells.',
					'Most of these descriptors have no game effect by themselves, but they govern how the recipe interacts with other recipes, with spells, with special abilities, with unusual creatures, with alignment, and so on.'
				])
			],
			[
				'title' => 'Level',
				'spaced' => true,
				'texts' => quick_array([
					'On the same line as the recipes form and any descriptors is the recipe\'s level, a number between 0 and 9 that defines the recipes\'s relative power. A recipes\'s level affects the DC for any save allowed against its effects.'
				])
			],
			[
				'title' => 'Activation Time, Application Time, or Ignition Time',
				'spaced' => true,
				'texts' => quick_array([
					'Activated, Application, and Rocket recipes require a specific action to be activated, applied, or ignoted. This is generally 1 standard action.',
					'A recipe that takes 1 round to activate is a full-round action. It comes into effect just before the beginning of your turn in the round after you began activating the recipe. You then act normally after the recipe is completed.',
					'A recipe that takes 1 minute to activate comes into effect just before your turn 1 minute later (and for each of those 10 rounds, you are activating a recipe as a full-round action, just as noted above for 1-round activation times). These actions must be consecutive and uninterrupted, or the recipe automatically fails.',
					'When you begin a recipe that takes 1 round or longer to activate, you must continue the concentration from the current round to just before your turn in the next round (at least). If you lose concentration before the activation is complete, you lose the recipe.',
					'Activating a recipe with an activation time of 1 swift action doesn\'t provoke attacks of opportunity.',
					'You make most pertinent decisions about a recipe (effect, version, and so forth) when the recipe is finished being crafted but the target, distance, area, and duration is determined when you finish activating the recipe.'
				])
			],
			[
				'title' => 'Range Increment and Maximum Distance',
				'spaced' => true,
				'texts' => quick_array([
					'Rocket recipes list their range increment and maximum range. The rocket cannot target a creature or square farther that its maximum distance and the creature firing the rocket takes penalties for shooting at targets beyond the range increment as normal for a ranged weapon.',
					'Assume the range increment of a bomb recipe is 20 feet.'
				])
			],
			[
				'title' => 'Duration',
				'spaced' => true,
				'texts' => quick_array([
					'A recipe\'s duration entry tells you how long the alchemical effect of the recipe lasts. For most recipes, this duration begins once the produced item is triggered by some means, such as activating an activation recipes or throwing a bomb, but for Cauldron, Creation, or Substance recipes this duration begins as soon as the recipe is completed. Creation recipes generally have a duration of instantaneous.',
					'/mm/ /ee/ <h4>Timed Durations</h4>',
					'/mm/ Many durations are measured in rounds, minutes, hours, or other increments. When the time is up, the alchemical reactions end. If a recipe\'s duration is variable, the duration is rolled secretly so the practicer doesn\'t know how long the recipe will last.',
					'/mm/ /ee/ <h4>Instantaneous</h4>',
					'/mm/ The alchemical reaction comes and goes the instant the recipe is triggered or completed, though the consequences might be long-lasting.',
					'/mm/ /ee/ <h4>Permanent</h4>',
					'/mm/ The reaction continues as long as the effect does.',
					'/mm/ /ee/ <h4>Tended</h4>',
					'/mm/ Some cauldron recipes persist so long as a practicer continues to tend them. If the duration is listed as Tended its effects persist so long as the practicer continues tending and stirring the mixture. Tending the mixture is a standard action that provokes attacks of opportunity unless the practicer does so defensively. Tending a recipe defensively requires a concentration check equal to 15 plus twice the recipe level. If the practicer fails this check they fail to tend the recipe. If a practicer takes damage while performing the action to tend a recipe, they must make a concentration check equal to 10 plus the recipe level plus the amount of damage they took. A practicer cannot tend a recipe while under an effect that would deny them their dexterity modifier. Another practicer other than the one who began the recipe can attempt to tend a recipe but if a creature attempts to tend a recipe where they were not the last creature to attempt to tend the recipe, they must make a Craft (alchemy) check equal to 20 plus twice the level of recipe or else they fail to tend it. Any creature can attempt to tend a recipe but they can only succeed if the have at least one alchemy level or rank in Craft (alchemy). If they are not capable of creating the recipe they must also be able to receive verbal, written, or similar instruction from one who can in order to successfully tend the recipe. If the last creature who successfully tended the recipe does not successfully tend the recipe on their turn, it ends at the begining of their next turn if no other creature has successfully tended it before then.',
					'/mm/ /ee/ <h4>Subjects, Effects, and Areas</h4>',
					'/mm/ If the recipe affects creatures directly, the result travels with the subjects for the recipe\'s duration. If the recipe creates an effect, the effect lasts for the duration. The effect might move or remain still. Such an effect can be destroyed prior to when its duration ends. If the recipe affects an area, then the recipe stays with that area for its duration.
					/mm/ Creatures become subject to the recipe when they enter the area and are no longer subject to it when they leave.'
				])
			],
			[
				'title' => 'Saving Throws',
				'spaced' => true,
				'texts' => quick_array([
					'Usually a harmful recipe allows a target to make a saving throw to avoid some or all of the effect. The saving throw entry in a recipe description defines which type of saving throw the recipe allows and describes how saving throws against the recipe work.',
					'/mm/ /ee/ <h4>Negates</h4>',
					'/mm/ The recipe has no effect on a subject that makes a successful saving throw.',
					'/mm/ /ee/ <h4>Partial</h4>',
					'/mm/ The recipe has an effect on its subject. A successful saving throw means that some lesser effect occurs.',
					'/mm/ /ee/ <h4>Half</h4>',
					'/mm/ The recipe deals damage, and a successful saving throw halves the damage taken (round down).',
					'/mm/ /ee/ <h4>None</h4>',
					'/mm/ No saving throw is allowed.',
					'/mm/ /ee/ <h4>Disbelief</h4>',
					'/mm/ A successful save lets the subject ignore the recipe\'s effect.',
					'/mm/ /ee/ <h4>(object)</h4>',
					'/mm/ The recipe can affect objects, which receive saving throws only if they are magical or if they are attended (held, worn, grasped, or the like) by a creature resisting the recipe, in which case the object uses the creature\'s saving throw bonus unless its own bonus is greater. This notation does not mean that a recipe can be used only on objects. Some recipes of this sort can be used on creatures or objects. A magic item\'s saving throw bonuses are each equal to 2 + 1/2 the item\'s caster level.',
					'/mm/ /ee/ <h4>(harmless)</h4>',
					'/mm/ The recipe is usually beneficial, not harmful, but a targeted creature can attempt a saving throw if it desires.',
					'/mm/ /ee/ <h4>Saving Throw Difficulty Class</h4>',
					'/mm/ A saving throw against your recipe has a DC of 10 + the level of the recipe + the creator\'s intelligence bonus.',
					'/mm/ /ee/ <h4>Succeeding on a Saving Throw</h4>',
					'/mm/ A creature that successfully saves against a recipe that has no obvious physical effects gets a strange feeling or a tingle, but cannot deduce the exact nature of the attack. Likewise, if a creature\'s saving throw succeeds against a targeted recipe, you sense that the recipe has failed. You do not sense when creatures succeed on saves against effect and area recipes.',
					'/mm/ /ee/ <h4>Automatic Failures and Successes</h4>',
					'/mm/ A natural 1 (the d20 comes up 1) on a saving throw is always a failure. A natural 20 (the d20 comes up 20) is always a success.',
					'/mm/ /ee/ <h4>Voluntarily Giving up a Saving Throw</h4>',
					'/mm/ A creature can voluntarily forgo a saving throw and willingly accept a recipe\'s result.'

				])
			],
			[
				'title' => 'Descriptive Text',
				'spaced' => true,
				'texts' => quick_array([
					'This portion of a recipe description details what the recipe does and how it works. If one of the previous entries in the description includes “see text,” this is where the explanation is found.'

				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>