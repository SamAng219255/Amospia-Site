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
		'Future Seeing',
		'rule',
		quick_array([
			'All methods for seeing the future foresee the future as it will occur if only the user possesses this power and is unable to properly compensate for others with the same ability. Regions of time affected by individuals capable of foreseeing the future become divergent and impossible to predict. There are two types of future sight, near-future and distant-future. When the timeline of creatures and objects becomes near-future divergent, it only lasts for as long as the future sight is active and for that duration prevents all attempts at near-future sight involving the creature or object as the abilities create a feedback loop that generates an infinite number of possible near-futures. Distant-future sight attempting to perceive a region of the future involving a creature or object whose timeline is near-future divergent has a 30% chance to similarly fail. When the timeline of a creature or object becomes distant-future divergent, it lasts until the foreseen event comes to pass or would have if it were not prevented. This makes the regions of space and time nearby the creature impossible to see using distant-future sight with only a black mark visible hiding the truth. Despite this, it has no effect on near-future sight. ',
			'Distant-future timeline divergence can be considered contagious in a way. If a creature whose timeline is distant-future divergent takes action specifically and directly related to a foreseen event that has the capability to potentially ensure or prevent the event, the timeline of any creature or object involved becomes distant-future divergent with respect to that event and can spread it similarly. A creature\'s timeline can be distant-future divergent in respect to multiple events.'
		]),
		true
	);
	block(
		'Multiplicative Effects',
		'rule',
		quick_array([
			'Some effects and abilities can multiply a statistic. In general this means that a numerical effect, whether static or variable, is multiplied by that amount. This multiplication is factored after variable amounts are determined. These bonuses can also be applied to an effect or ability, doing so applies the bonus to every numerical effect of the ability. When an invested ability is multiplied, it is also usually correlated with a similar multiplication of investiture required to power the ability. Both scores and modifiers such as bonuses and penalties can be affected by multiplicative effects.',
			'Multiplicative effects are generally measured by adding a percentage, such as +50% or +100%. These bonuses stack by adding so if one ability grants +50% and another grants +100% the resulting bonus will be +150% or 2-1/2 times the original value.',
			'When applied to strength, dexterity, constitution, intelligence, wisdom, and charisma, multiplicative penalties change the base score and then the modifiers accordingly while multiplicative bonuses are applied directly to the modifiers increasing the base score by +2 for every +1 added to the modifier. (i.e. 15 strength (modifier of +2) with a -60% penalty becomes a 6 strength (modifier of -2) while a +100% bonus yields a 19 strength (modifier of +4).) Multiplicative penalties can go beyond -100% turning a bonus into a penalty and the other way. When applied to a score that is otherwise negative (perception total of -5 not a -5 penalty to perception), multiplicative bonuses have an inverse effect.',
			'When applied to a spell or other ability, this effect also increases any associated caster level and spell level for purposes of overcoming spell resistance, spell DCs, and comparing caster and spell levels. This adds 2 caster levels and 1 spell level times a fourth of the percentage added to the ability. (i.e. +400% equals +2 CL and +1 spell level while +800% equals +4 CL and +2 spell level) This can result in non-whole-number caster and spell levels and can place the caster level over 20 and the spell level over 9.'
		]),
		true
	);
	block(
		'Gravitic Flight',
		'rule',
		quick_array([
			'By continually manipulating gravity, various individuals can achieve what amounts to flight though technically they are falling for the entire distance. Due to the differing nature and methods, gravitic flight follows different rules from normal flight.',
			'Regardless of the gravitic flight speed, one hour overland "walk" distance is 80 miles.',
			'Creatures can run at 4 times their speed as a full round action while flying in a straight line regardless of whether they are wearing heavy armor or are otherwise encumbered. Creatures can also run at twice their speed as a move action in a straight line.',
			'There are no limits on how long a creature can run or hustle while flying, but it may require spending additional investiture to acquire such speeds.',
			'Up to 3 additional creatures or objects may be transported while flying Overland.',
			'Movement at a 45° angle either to the grid or, upwards or downwards, costs double for every second square. (1 square = 5 feet, 2 squares = 15 feet, 3 squares = 20 feet, 4 squares = 30 feet, etc.)',
			'Movement at a 45° angle to both the grid and, upwards or downwards, costs double for every square. (1 square = 10 feet, 2 squares = 20 feet, 3 squares = 30 feet, 4 squares = 40 feet, etc.)',
			'If a creature falls unconscious while flying they continue traveling in a straight line.',
			'A creature that abruptly ends movement while moving at least 90 feet in one round (simply not continuing to move on the following round, or by stopping then taking another action to travel a different direction) or that turns at least 90° in one square while traveling at least 90 feet in one round, must succeed at a DC 15 constitution save or be staggered for 1 round and sickened for 1d4 rounds. If the creature fails by 5 or more they instead fall unconscious. This DC increases by 1 for every additional 5 feet moved in that round. Creatures that end their movement facing a solid object that moved at least 90 feet that round must make a fly check with the same DC or else take 1d6 nonlethal bludgeoning for every 20 feet moved that round as they run into the object.',
			'Every 45° degree angle turned costs an additional 5 feet of movement.',
			'Creatures must travel a certain distance before they are able to turn determined by their maneuverability. Creatures with perfect maneuverability do not incur the penalty for turning more than 90° in one square at high speed unless they turn at least 135° degrees.',
			'Creatures that move at least 90 feet in one round count as being 1 size category larger for the effects of wind plus an additional size category for every additional 60 feet travelled that round.'
		]),
		true
	);
	block(
		'Metal Sight',
		'rule',
		quick_array([
			'Some creatures in the cosmere are able to detect metals sufficiently well that they can sense their environment accurately with it. Metal sight is a precise sense that, in practice, functions similarly to a combination of blindsight and darkvision except that it can see through walls. Creatures with metal sight can see any creature or object that contains even trace amounts of metal. This includes almost all objects with exceptions including incorporeal creatures and objects transmuted into gaseous or non-metallic liquid materials. While the creature can detect what types of metal are present, they can see nothing else preventing them from telling features like colors. However they can tell individuals apart and recognize specific creatures and objects. Aluminum, and all objects entirely within a quarter of an inch of aluminum, are entirely invisible to a creature with metal sight. Similarly, creatures with metal sight cannot see creatures or objects on the other side of at least 1 inch of aluminum.'
		]),
		true
	);
	block(
		'Soulwebs',
		'rule',
		quick_array([
			'Everything with a soul possesses a soulweb. This soulweb contains information about their spiritual nature including things like magical ability, a sense of identity, and connections to objects or other individuals. It is possible for a soulweb to become damaged. When this manifests, it usually does so as erratic behavior but usually there is no way to tell on the surface. If a soulweb is destroyed, the individual loses all of their mental stats and enters a vegetative state. Damage to a soulweb opens the mind to outside influences. While most shards can communicate to anybody, it is easiest for them to communicate with an individual with a damaged soulweb. In addition, having a damaged soulweb makes an individual more susceptible to mental effects.',
			'An example of things which can damage a soulweb are negative levels. If a creature dies from negative levels, their soulweb is destroyed.'
		]),
		true
	);
	block(
		'Savantism',
		'rule',
		quick_array([
			'Overuse or misuse of various cosmere magics can lead to a condition known as savantism. Individuals with savantism are known as savants. Each method of contracting savantism has its own version of savantism. Each with its own specifics. In general, a savant becomes significantly better at the magic which caused the savantism at the cost of dependency and other drawbacks. Savantism is measured as points of savantism. After an individual has acquired at least 10 points of savantism they are officially considered a savant and the effects begin to show. ii/Lesser restoration/ii will remove 1d4 points of savantism so long as the individual has less than 10. ii/Restoration/ii will remove all points of savantism so long as the individual has less than 10, otherwise it will only remove 4d4 points. In both cases, the caster can choose to not remove the target\'s savantism and instead only provide the other benefits of the spell.'
		]),
		true
	);
	block(
		'Aluminum',
		'rule',
		quick_array([
			'For unknown and mysterious reasons, aluminum is incredibly resistant to applications of investiture and can even shield nearby objects to some extent. Magic powered by investiture has no effect on aluminum nor can it affect anything within at least one quarter of an inch of a piece of aluminum weighing at least 1 pound. Similarly, such magic cannot affect an object through at least 1 inch of aluminum nor can it affect an object sufficiently surrounded by aluminum. Such applications of this are aluminum lined hats that prevent the effects of mind-affecting magic, aluminum bullets and guns to prevent interference from coinshots and lurchers, and aluminum panels to block or contain magical effects.'
		]),
		true
	);
	block(
		'Healing',
		'rule',
		quick_array([
			'When healing is performed by invested arts, the actual process taking place is that the physical form of an object is being changed to match their spiritual idealized form as filtered by their cognitive version of itself and that of the creature performing the healing. What this means is that wounds that are not accepted as a part of oneself can be healed regardless of age but even fresh wounds that have been internalized as a part of oneself cannot be healed. (i.e. If a creature loses a leg they can be healed and have the leg returned up until they come to accept that they have been permanently handicapped and view the loss of the leg as their normal state.) It also means that if they view themself as something other than what they physically are, healing will change their physical self to match. (Such as a transgender individual receiving healing and their body changing to match their mental view of their sex.) Beyond just healing the body, most healing using invested arts can be used to repair the spiritual version of oneself if it becomes damaged. Most methods of damaging a soul will list the requirements to have the damage healed.'
		]),
		true
	);
	block(
		'Intangible',
		'rule',
		quick_array([
			'Intangible is a condition similar to being incorporeal but with different rules. If a creature or object is intangible no object, creature, or spell can effectively touch them but they are not able to pass through solid matter. Certain energies or objects can interact with specific intangible creatures or objects, as listed in their descriptions. Most intangible creatures have some method of flight or otherwise moving without touching the floor, but due to the fact that they cannot pass through solid objects, they can walk on the floor, though many can walk on walls as well. They cannot push themself through an object but if a solid object were to be pushed through the creature, it does not collide and simply passes through.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>