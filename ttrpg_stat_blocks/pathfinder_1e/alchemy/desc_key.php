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
				'title' => 'Form (Sub-Form)',
				'spaced' => true,
				'texts' => quick_array([
					'Beneath the recipe name is a line giving the form (and the sub-form, if any) to which the recipe belongs.',
					'Every recipe belongs to one of eight forms. A form is a group of related recipes that work in similar ways.',
					'/mm/ /ee/ <h4>Activated</h4>',
					'/mm/ Activated recipes create substances that are designed to be activated after creation through means such as breaking the seal seperating two or more substances or by striking the container with some type of percussive force. These could produce a variety of effects on demand such as releasing a cloud of gas, emitting light, or heating up. Unless specified otherwise, activated recipes yield an object that can be activated later as a standard action that does not provoke an attack of opportunity.',
					'/mm/ /ee/ <h4>Application</h4>',
					'/mm/ Application recipes are designed to applied to a surface and may be designed to activate any properties when exposed to the intended surface or to air or moisture. Application recipes could mimic aa/alchemical_oils|alchemical oils/aa, make surfaces slippery, or transmute one substance to another. Unless specified otherwise, application recipes yield a substance that can be applied to a surface or object later as a standard action that provokes attacks of opportunity.',
					'/mm/ /ee/ <h4>Bomb</h4>',
					'/mm/ Bomb recipes are generally stored in inexpensive breakable vials designed to release their volatile contents onto a target. Some examples of classical bomb recipes are acid flasks and alchemist fire. Unless specified otherwise, bomb recipes yield a highly breakable item that is a ranged weapon can be thrown as splash weapons with a range of 20 feet. These items have 1 hardness, 1 hit point, and an AC of 9. If they are destroyed, their effects activate and nearby creatures are affected by their splash and any other effects. If it is currently being held by a creature, the creature may add any dexterity, dodge, or deflection bonuses they possess to the AC of the item, but if it is destroyed they become the target of the bomb.',
					'/mm/ bb/ ii/Sub-Forms/ii /bb',
					'/m2/ bb/Grenade/bb: Like a normal bomb recipe, a grenade can be thrown as a splash weapon with a range of 20 feet, however, grenades do not detonate on impact and destroying the grenade does not cause the grenade to activate. Rather, after lighting and throwing the grenade, it explodes at the end of your turn. Additionally, the target never takes any direct hit damage, instead taking the listed splash damage. When a grenade is thrown, any creature within 5 feet of the grenade can make a DC 25 Reflex save to grab the grenade and throw it away. If they succeed, they throw the grenade 2d4 squares in a random direction. However, if they make their save by 10 or more, they may throw the grenade in any square they wish as throwing a splash weapon. Each time the grenade lands, nearby creatures can attempt to remove the grenade again, but the DC increases by 5 each time it is thrown. If multiple creature make the save, whichever rolled the highest is the one who throws it. The original creature can also choose to throw the grenade as a full round action instead, in which case they are timing out the remaining duration such that there is no time left to throw it again and nearby creatures do not get a save to throw it.',
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
					'/mm/ Rocket recipes are often more complicated to construct, increasing the crafting DC by 5.',
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
				'title' => 'Aiming a Recipe',
				'spaced' => true,
				'texts' => quick_array([
					'When performing some cauldron recipes, you must make choices about whom the recipe is to affect or where an effect is to originate, depending on a recipe\'s type. In which case, the next entry in the recipe description defines the recipe\'s target (or targets), its effect, or its area, as appropriate.',
					'You must also aim a bomb or rocket recipe though you do so as a ranged attack, modified by the previous descriptions.',
					'/ee/ <h4>Target or Targets</h4>',
					'Some recipes have a target or targets. With these recipes you can target creatures or objects, as defined by the recipe itself. You must be able to specify the target as described in the recipe\'s descriptive text. You do not have to select your target until you finish preapring the recipe.',
					'If the target of a recipe is yourself (the Target line of the recipe description includes “You”), you do not receive a saving throw. The saving throw line is omitted or marked as none in such recipes.',
					'Some recipes restrict you to willing targets only. Declaring yourself as a willing target is something that can be done at any time (even if you\'re flat-footed or it isn\'t your turn). Unconscious creatures are automatically considered willing, but a character who is conscious but immobile or helpless (such as one who is bound, cowering, grappling, paralyzed, pinned, or stunned) is not automatically willing.',
					'Some recipes allow you to redirect the effect to new targets or areas after you cast the recipe. Redirecting a recipe is a standard action that does not provoke attacks of opportunity.',
					'/ee/ <h4>Effect</h4>',
					'Some recipes create or summon things rather than affecting things that are already present.
					You must designate the location where these things are to appear, genrally by defining it as part of preapring the recipe. Range determines how far away an effect can appear, but if the effect is mobile, after it appears it can move regardless of the recipes\'s range.',
					'/ee/ <h5>Spread</h5>',
					'Some effects, notably clouds and fogs, spread out from a point of origin, which must be a grid intersection. The effect can extend around corners and into areas that you can\'t see. Figure distance by actual distance traveled, taking into account turns the alchemical effect takes. When determining distance for spread effects, count around walls, not through them. As with movement, do not trace diagonals across corners. You must designate the point of origin for such an effect, but you need not have line of effect (see below) to all portions of the effect.',
					'/ee/ <h5>Area</h5>',
					'Some recipes affect an area. Sometimes a recipe description specifies a specially defined area, but usually an area falls into one of the normal categories for recipe effect areas.',
					'Regardless of the shape of the area, you select the point where the effect originates, but otherwise you don\'t control which creatures or objects the recipe affects. The point of origin of a recipe is always a grid intersection. When determining whether a given creature is within the area of a recipe, count out the distance from the point of origin in squares just as you do when moving a character or when determining the range for a ranged attack. The only difference is that instead of counting from the center of one square to the center of the next, you count from intersection to intersection.',
					'You can count diagonally across a square, but remember that every second diagonal counts as 2 squares of distance. If the far edge of a square is within the recipe\'s area, anything within that square is within the recipe\'s area. If the recipe\'s area only touches the near edge of a square, however, anything within that square is unaffected by the recipe.',
					'Most recipes that affect an area function as a burst, an emanation, or a spread. In each case, you select the recipe\'s point of origin and measure its effect from that point.',
					'/mm/ <h5>Burst</h5>',
					'/mm/ A burst effect affects whatever it catches in its area, including creatures that you can\'t see. It can\'t affect creatures with total cover from its point of origin (in other words, its effects don\'t extend around corners). The default shape for a burst effect is a sphere, but some burst spells are specifically described as cone-shaped. a burst\'s area defines how far from the point of origin the recipe\'s effect extends.',
					'/mm/ <h5>Emanation</h5>',
					'/mm/ An emanation effect functions like a burst effect, except that the effect continues to radiate from the point of origin for the duration of the effect. Most emanations are cones or spheres.',
					'/mm/ <h5>Spread</h5>',
					'/mm/ A spread effect extends out like a burst but can turn corners. You select the point of origin, and the effect spreads out a given distance in all directions. Figure the area the recipe effect fills by taking into account any turns the recipe effect takes.',
					'Most spells that affect an area take the shape of a cone, cylinder, line, or sphere.',
					'/mm/ <h5>Cone</h5>',
					'/mm/ A cone-shaped effect shoots away from you in a quarter-circle in the direction you designate. It starts from any corner of the square the recipe is in and widens out as it goes. Most cones are either bursts or emanations (see above), and thus won’t go around corners.',
					'/mm/ <h5>Cylinder</h5>',
					'/mm/ When preapring a recipes with a cylinder-shaped effect, you select the effect\'s point of origin. This point is the center of a horizontal circle, and the effect shoots down from the circle, filling a cylinder. A cylinder-shaped effect ignores any obstructions within its area.',
					'/mm/ <h5>Line</h5>',
					'/mm/ A line-shaped effect shoots away from the location of the recipe in a line in the direction you designate. It starts from any corner of the square the recipe is in and extends to the limit of its range or until it strikes a barrier that blocks line of effect. A line-shaped effect affects all creatures in squares through which the line passes.',
					'/mm/ <h5>Sphere</h5>',
					'/mm/ A sphere-shaped effect expands from its point of origin to fill a spherical area. Spheres may be bursts, emanations, or spreads.',
					'/ee/ <h5>Creatures</h5>',
					'A recipe with this kind of area affects creatures directly (like a targeted recipe), but it affects all creatures in an area of some kind rather than individual creatures you select. The area might be a spherical burst, a cone-shaped burst, or some other shape.',
					'Many spells affect "living creatures", which means all creatures other than constructs and undead. Creatures in the recipe\'s area that are not of the appropriate type do not count against the creatures affected.',
					'/ee/ <h5>Objects</h5>',
					'A recipe with this kind of area affects objects within an area you select (as Creatures, but affecting objects instead).',
					'/ee/ <h5>Other</h5>',
					'A recipe can have a unique area, as defined in its description.',
					'/ee/ <h5>(S) Shapeable</h5>',
					'If an area or effect entry ends with "(S)", you can shape the recipe. a shaped effect or area can have no dimension smaller than 10 feet. Many effects or areas are given as cubes to make it easy to model irregular shapes. Three-dimensional volumes are most often needed to define aerial or underwater effects and areas.'
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