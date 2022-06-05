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
	advAlchemySimpleBlock(
		'Death Diving Draught',// Name
		'Imbibed',
		[
			'death'
		],// Descriptors
		6,// Level
		'24 hours',// Duration
		'Will negates',// Saving Throw
		[
			'This strange opaque black drink kills the drinker and expedites their soul\'s trip toward judgement in the Boneyard, before reviving them again 24 hours later. During this time the mixture artificially preserves their body preventing decomposition, but any damage it takes is acquired by the creature when they are revived.',
			'At the end of the your round after drinking this potion, you arrive at the Boneyard and are swiftly sent off to whatever afterlife you have earned, as determined by the GM. In general, those who made demonic pacts and the like have souls sent off as stated in the pact, followers of a god are sent to their afterlife, and all others are sent to the Outer Plane matching their alignment. This process generally takes less than one hour.',
			'You are able to navigate through wherever you arrive as normal. Your soul takes on a form similar to a petitioner of whatever realm it arrives in though never truly makes the transition to petitioner. You are unable to bring most gear with you with the exception of some artifacts, which transfer to your soul and back again when you revive. Unlike other petitioners, you are able to remember your mortal life with clarity and, similarly unlike other effects, you are able to remember your time spent in the afterlife once revived.',
			'If your soul is slain while you are dead, you are unable to revive at the end of the effect and cannot be saved without the aid of a ii/ true resurrection/ii spell or similar effect.',
			'When you are revived and return to your body, you do not bring anything with you with the exceptions of similar artifacts and that you are able to bring another soul back with you. This soul must either be willing or else restrained by you, in which case it receives a Will save to negate the effect with a +5 bonus. If you succeed in bringing a soul back with you, it occupies your body with you, unable to exert any control but able to communicate with you and access your senses. As a standard action, you can allow the soul to attempt to move to another willing creature.',
			'If they move into a body that possesses no soul, they are able to possess that body and be effectively revived into it. They keep their Intelligence, Wisdom, Charisma, level, class, base attack bonus, base save bonuses, alignment, and mental abilities. The body retains its Strength, Dexterity, Constitution, hit points, natural abilities, and automatic abilities. A body with extra limbs does not allow them to make more attacks (or more advantageous two-weapon attacks) than normal. They can’t choose to activate the body’s extraordinary or supernatural abilities. The creature’s spells and spell-like abilities do not stay with the body. If their own body is restored, they can similarly move into it, reviving them.',
			'Additionally, if the creature housing the soul casts ii/magic jar/ii or a similar spell, they can place the soul they are in housing in the gem instead.'
		] // Description
	);
	require $startDir.'pageEnd.php';
?>