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
		'Advanced Alchemy',
		'description',
		quick_array([
			'Recent developments in alchemical theory has unlocked a new generation of alchemical recipes. This so called bb/Advanced Alchemy/bb functions in methods similar to spells. Each recipe has a bb/Recipe Level/bb from 0 to 9 that roughly correlate to spell levels. When using Advanced Alchemy, another important value is the crafter\'s bb/Alchemy Level/bb. Feats and abilities that grant access to advanced alchemy list what the user\'s alchemy level is. If the user has one or more negative levels and their alchemy level is not already dependant on a statistic affected by negative levels, they take a -1 penalty to their effective alchemy level for each negative level they possess. The practicer may need to make an alchemy level check depending on the circumstances. When making an alchemy level check the player adds their alchemy level to the result of their d20 roll plus any miscellaneous modifiers. Sometimes while using advanced alchemy, a practicer will have to make a concentration check. Concentration checks for maintaining concentration on advanced alchemy uses the practicer\'s alchemy level instead of their caster level.',
			'Practicers of Advanced Alchemy are capable of producing recipes up to level 1. This level increases by 1 for every two alchemy levels beyond 1st they possess up to a maximum of level 9 recipes.',
			'Items created through advanced alchemy have a market price and a crafting cost that is equal to half the price and that must be paid in alchemical supplies before the item can be created. For most items, the price is equal to the recipe level times the alchemy level of the creator times 50 gp. Level 0 recipes treat their recipe level as being 1/2 for the purposes of determining their price and cost. Objects produced by substance recipes are worth less based on how long ago they were produced. For example, an item with only 3/4 of its duration remaining will have a price that is 3/4 as much. It is often possible to hire a practicer of advanced alchemy to perform a cauldron recipe for the same price as buying the product of a recipe of the same level and alchemy level. They can also be paid to continue tending the pot at 250 gp an hour or 2,000 gp a day though it may be better to opt for paying an expert hireling, trained in alchemy, to tend the mixture at 10 gp a day.',
			'When crafting an advanced alchemy recipe, you may voluntarily decrease your effect alchemy level reducing both the potency and cost of the recipe, though, you take a cumulative -1 penalty to your Craft (alchemy) check to create the recipe for each level you lower your effective level by in this way and you cannot lower your effective alchemy level below the minimum alchemy level to create a recipe of its level.',
			'All recipes fall into one of a number of categories known as bb/Forms/bb which are as follows: Activated, Application, Bomb, Cauldron, Creation, Imbibed, Rocket, and Substance. Recipes can also have descriptors, these descriptors are the same as those for spells.'
		]),
		true,
		[
			[
				'title' => 'Activated',
				'spaced' => true,
				'texts' => quick_array([
					'Activated recipes create substances that are designed to be activated after creation through means such as breaking the seal seperating two or more substances or by striking the container with some type of percussive force. These could produce a variety of effects on demand such as releasing a cloud of gas, emitting light, or heating up. Unless specified otherwise, activated recipes yield an object that can be activated later as a standard action that does not provoke an attack of opportunity.'
				])
			],
			[
				'title' => 'Application',
				'spaced' => true,
				'texts' => quick_array([
					'Application recipes are designed to applied to a surface and may be designed to activate any properties when exposed to the intended surface or to air or moisture. Application recipes could mimic aa/alchemical_oils|alchemical oils/aa, make surfaces slippery, or transmute one substance to another. Unless specified otherwise, application recipes yield a substance that can be applied to a surface or object later as a standard action that provokes attacks of opportunity.'
				])
			],
			[
				'title' => 'Bomb',
				'spaced' => true,
				'texts' => quick_array([
					'Bomb recipes are generally stored in inexpensive breakable vials designed to release their volatile contents onto a target. Some examples of classical bomb recipes are acid flasks and alchemist fire. Unless specified otherwise, bomb recipes yield a highly breakable item that is a ranged weapon can be thrown as splash weapons with a range of 20 feet. These items have 1 hardness, 1 hit point, and an AC of 9. If they are destroyed, their effects activate and nearby creatures are affected by their splash and any other effects. If it is currently being held by a creature, the creature may add any dexterity, dodge, or deflection bonuses they possess to the AC of the item, but if it is destroyed they become the target of the bomb.'
				])
			],
			[
				'title' => 'Cauldron',
				'spaced' => true,
				'texts' => quick_array([
					'Cauldron recipes are so named as they are often brewed in a large cauldron. Cauldron recipes require spending long periods of time tending a mixture making specific adjustments as time goes on. This mixture, either while it is being tended or after it is finished, produces some grand or impossible effect such as changing the weather or creating a doorway to another plane. Cauldron recipes produce their effects once the practicer has spent the required time brewing the mixture.',
					'If the duration is listed as Tended its effects persist so long as the practicer continues tending and stirring the mixture. Tending the mixture is a standard action that provokes attacks of opportunity unless the practicer does so defensively. Tending a recipe defensively requires a concentration check equal to 15 plus twice the recipe level. If the practicer fails this check they fail to tend the recipe. If a practicer takes damage while performing the action to tend a recipe, they must make a concentration check equal to 10 plus the recipe level plus the amount of damage they took. A practicer cannot tend a recipe while under an effect that would deny them their dexterity modifier. Another practicer other than the one who began the recipe can attempt to tend a recipe but if a creature attempts to tend a recipe where they were not the last creature to attempt to tend the recipe, they must make a Craft (alchemy) check equal to 20 plus twice the level of recipe or else they fail to tend it. Any creature can attempt to tend a recipe but they can only succeed if the have at least one alchemy level or rank in Craft (alchemy). If they are not capable of creating the recipe they must also be able to receive verbal, written, or similar instruction from one who can in order to successfully tend the recipe. If the last creature who successfully tended the recipe does not successfully tend the recipe on their turn, it ends at the begining of their next turn if no other creature has successfully tended it before then.'
				])
			],
			[
				'title' => 'Creation',
				'spaced' => true,
				'texts' => quick_array([
					'Creation recipes produce a specific object or material from various reagents. Creation recipes yield a created object that is generally not alchemical in nature on its own though it may possess unusual or seemingly impossible properties.'
				])
			],
			[
				'title' => 'Imbibed',
				'spaced' => true,
				'texts' => quick_array([
					'Imbibed recipes are generally designed to be drunk and have a specific effect created by interacting with the imbiber\'s biology. Imbibed recipes yield a consumable substance that can be eaten, or more often drank, later to provide their effect. Consuming an imbibed recipe is a standard action that provokes attacks of opportunity. Due to their reliance on the target creatures biology, imbibed recipes have no effect on constructs or elementals and the creator must make an alchemy level check for the recipe to affect undead or aberrations with a DC equal to 11 plus their CR unless it was created by the same type of undead or aberration. Creatures immune to poison are also immune to the harmful effects of imbibed recipes. Creatures that are unable to eat or drink (as opposed to ones that don\'t need to) are incapable of consuming an imbibed recipe.'
				])
			],
			[
				'title' => 'Rocket',
				'spaced' => true,
				'texts' => quick_array([
					'Rocket recipes use gunpowder and other explosive and flammable materials, or similar substances, to propel themselves long distances before often exploding. Unless specified otherwise, rocket recipes yield a ranged weapon containing volatile materials capable of propelling itself potentially long distances before releasing its payload or otherwise providing its other effects. Igniting and aiming a rocket recipe is a standard action.',
					'Rocket recipes quickly travel a specific distance before exploding though most are designed so that their target distance can be adjusted while lighting. Rocket recipes list a maximum range and a range increment and can be used to make a ranged touch attack at a target or square within their maximum range applying any penalties from the distance due to the range increment. Treat squares as having an AC of 5. On a miss, the rocket still explodes, potentially nearby. If the attack failed only due to a miss chance, the rocket explodes in the target\'s square or the square the creature firing it believes the target is in. If the target has a bonus due to cover and the attack would have missed against an AC of 10 plus the cover bonus, the rocket deflects off the cover and travels the remaining distance to the target in a random direction before exploding in that square. Otherwise if the attack missed, the rocket explodes a number of squares away in a random direction from the target. The distance away is equal to the number of full range increments away the target is.'
				])
			],
			[
				'title' => 'Substance',
				'spaced' => true,
				'texts' => quick_array([
					'Substance recipes produce an alchemically significant substance with specific properties. Unless otherwise specified, substance recipes yield an a specific alchemical substance with special properties. This substance lasts for a given duration before becoming unusable.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>