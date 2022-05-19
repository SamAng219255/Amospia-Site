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
		'Hemalurgy',
		'info',
		quick_array([
			'Hemalurgy can theoretically be used by anybody, though the law of intent prevents it from being done entirely by accident. It is still possible for the individual performing the hemalurgy to be unaware of what they\'re doing so long as they were instructed or guided by someone who did intend to perform hemalurgy.',
			'The ability to perform hemalurgy relies on the user\'s knowledge of where to put the spikes to acquire the desired effect. The process entails killing an individual, the victim, by piercing their body with a piece of metal, usually a spike, such that it touches their blood. This spike is then inserted into the body of an individual, the recipient, in one of hundreds of bind points. The standard effect of this spike is to grant the recipient some attribute possessed by the victim; however by correctly placing the proper spikes in the proper locations, far more advanced procedures can be performed; often resulting in what is known as a hemalurgic construct. The spike does not interfere with the operation of the recipient\'s body even if it is placed piercing vital organs, though if it is removed it will most likely kill them. Over time the organs shift and change shape as to accommodate the space taken up by the spike. Once this is complete, the spike can be removed but will still leave an open hole in the previous recipient\'s body from which they may bleed out. If a spike is removed from a recipient it can be transferred to another recipient.',
			'After a spike has been used to kill the victim it is charged but will decay over time becoming weaker. It is possible to store a spike in a jar of either real blood or proper fake blood to reduce the rate of decay. While in a recipient, the spike does not decay.',
			'Outside of certain hemalurgic constructs, and unless otherwise specified, a creature can only be the recipient of 1 spike of each type. If multiple spikes of the same type, conferring the same type of bonus, are used on the same creature, only the strongest effect applies.',
			'Any attack performed using a valid spike, including a coup de grace, that results in the death of the target can be used to charge a spike, however any attack roll must pass the target\'s AC by 5 or more to land in the proper location. Placing a spike requires a melee attack made with a -5 penalty or to be placed in a helpless or willing target as a standard action.',
			'If the victim has regeneration, charging the spike only requires lowering the hit points to an amount such that they would die without having their regeneration. Damage dealt beyond what would otherwise be sufficient to kill them as part of charging a hemalurgic spike is multiplied by 2. If the creature fails to heal itself above what would otherwise kill them within 2d4 rounds, they are instantly killed, ignoring their regeneration. For that duration spells and effects treat them as dead. Regardless of whether the creature survives, they lose whatever was stolen from them by the spike the moment the spike was charged. This effect is listed in the metal\'s description.',//For allomancy this means losing the ability to burn that store of metal. For feruchemy this means losing the ability to store or compound that metal or to tap unkeyed metalminds of that metal, though they can still tap their own metalminds. For iron spikes, this reduces their strength to 1. For tin spikes, this makes them lose all of their senses, though they can still benefit from senses granted by magic that do not otherwise require a sense they do not possess. For emotional fortitude this means automatically failing saves vs fear. For mental fortitude, this means automatically failing will saves not vs fear. For memory, this means losing all of their memories and all of their ranks in knowledge skills. For intelligence, this means reducing their intelligence to 1. For duralumin spikes, this removes their connection and identity, permanently adjusting their stats and granting effects as though storing connection and identity both at the maximum increment. Aluminum has no effect on a surviving victim.
			'If a spike is removed from a recipient that is in vital location (such as in the torso, skull, arm, or leg), they take 1d8 points of bleed damage immediately and proceed to take 1d4 points of continuous bleed damage on subsequent rounds until the hole is adequetely healed or covered, as normal, or until the spike is replaced. Inserted hemalurgic spikes can be removed using either Sleight of Hand or the Steal combat maneuver. In the latter case, uncovered spikes on the back of the body are treated like loosely attached while those on the front are treated as fastened. Opponents may choose to place some type of covering over spike or worn objects such as clothing or armor may inherently cover a spike. Covered spikes cannot be removed without first clearing the covering.',
			'When a creature is spiked it damages their soulweb ripping off a portion and tacking it onto the recipient\'s soulweb. This brings with it sufficient identity such that the recipient can tap metalminds belonging to the victim as though they were their own. If the victim survives the spiking with the aid of regeneration, they can heal the missing portion of their soulweb by spending 100 points of healing that does not go towards healing physical damage, thus removing any penalties from being spiked.',
			'If the victim was under an effect that granted an ability or a bonus that was stolen by a spike, the effect transfers to the recipient. The duration of temporary effects continues to decrease after it is stolen whether or not the spike is currently in a creature.'
		]),
		true,
		[
			[
				'title' => 'Hemalurgic Constructs',
				'spaced' => true,
				'texts' => quick_array([
					'By correctly placing hemalurgic spikes it is possible to mutate the recipient into something often less than human. In theory, there is no difference between a hemalurgic construct and an individual with hemalurgic spikes. The distinction is usually made when the subject becomes mutated by way of the spikes such that they no longer appear to be members of their original species. Hemalurgic spikes damage the recipient\'s soulweb and tack on a piece of the victim\'s as well as creating a connection to the shard Ruin. If a hemalurgic construct has at least 2 hemalurgic spikes they are susceptible to be controlled via emotional allomancy.'
				])
			],
			[
				'title' => 'Linchpin',
				'spaced' => true,
				'texts' => quick_array([
					'Giving a creature more than 4 hemalurgic spikes causes their soulweb to fray. This can be prevented by adding a linchpin spike. This can be any charged spike and has no other effect. The linchpin spike is placed in the center of the back between their shoulder blades. If a linchpin spike is removed, the recipient immediately dies.'
				])
			]
		]
	);
	block(
		'Metals',
		'desc',
		[],
		false,
		[
			[
				'title' => 'Iron',
				'spaced' => true,
				'texts' => quick_array([
					'Steals strength, granting the recipient an untyped bonus to their strength score equal to 5 plus the victim\'s strength modifier.',
					'The victim\'s strength score is reduced to 1.'
				])
			],
			[
				'title' => 'Steel',
				'spaced' => true,
				'texts' => quick_array([
					'Steals one of the physical allomantic abilities possessed by the victim granting it to the recipient. If they already possess the associated ability, they receive a +1 spell level bonus on that ability.',
					'The victim loses whichever allomantic ability that was stolen.'
				])
			],
			[
				'title' => 'Tin',
				'spaced' => true,
				'texts' => quick_array([
					'Steals senses, granting the recipient an untyped bonus to their perception equal to 2 plus the victim\'s perception bonus and granting the recipient any senses possessed by the victim. If the sense is granted by a specific organ, this organ spontaneously grows on the recipient and shrivels up and dies if the spike is later removed.',
					'The victim loses all senses, though they can still benefit from senses granted by magic that do not otherwise require a sense they do not possess. Spells such as ii/remove blindness//deafness/ii are unable to restore their senses as they are treated as never possessing the sense to begin with.'
				])
			],
			[
				'title' => 'Pewter',
				'spaced' => true,
				'texts' => quick_array([
					'Steals one of the physical feruchemical abilities possessed by the victim granting it to the recipient. If they already possess the associated ability, they receive a +1 spell level bonus on that ability.',
					'The victim loses whichever allomantic ability that was stolen.'
				])
			],
			[
				'title' => 'Zinc',
				'spaced' => true,
				'texts' => quick_array([
					'Steals emotional fortitude, granting the recipient an untyped bonus to will saves vs fear equal to 2 plus half of the victim\'s will save vs fear and other emotional effects and granting SR equal to 10 plus the victim\'s wisdom modifier vs emotional allomancy.',
					'The victim loses their emotional fortitude, becoming impossible to contain or control their emotions and automatically failing saves vs fear.'
				])
			],
			[
				'title' => 'Brass',
				'spaced' => true,
				'texts' => quick_array([
					'Steals one of the cognitive feruchemical abilities possessed by the victim granting it to the recipient. If they already possess the associated ability, they receive a +1 spell level bonus on that ability.',
					'The victim loses whichever allomantic ability that was stolen.'
				])
			],
			[
				'title' => 'Copper',
				'spaced' => true,
				'texts' => quick_array([
					'Steals mental fortitude, memory, or intelligence chosen by the wielder.',
					'Stealing mental fortitude grants the recipient an untyped bonus to will saves except vs fear or other emotional effects equal to 2 plus half of the victim\'s will save.',
					'If mental fortitude was stolen, the victim automatically failing will saves not vs fear and is unable to driave themselves towards a course of action or to resist performing actions suggested by another creature in an almost vegetative state similar to being a puppet that takes no action on its own but follows all instructions immediately and continues to do so until it is impossible or given further instructions.',
					'Stealing memory grants the recipient the memories of the victim and a bonus to one of their knowledge skills equal to the victim\'s bonus to that skill.',
					'If memory was stolen, the victim loses their entire memory as well as all their ranks in knowledge skills.',
					'Stealing intelligence grants the recipient an untyped bonus to their intelligence score equal to 5 plus the victim\'s intelligence modifier.',
					'If intelligence was stolen, the victim\'s intelligence score is reduced to 1.'
				])
			],
			[
				'title' => 'Bronze',
				'spaced' => true,
				'texts' => quick_array([
					'Steals one of the mental allomantic abilities possessed by the victim granting it to the recipient. If they already possess the associated ability, they receive a +1 spell level bonus on that ability.',
					'The victim loses whichever allomantic ability that was stolen.'
				])
			],
			[
				'title' => 'Cadmium',
				'spaced' => true,
				'texts' => quick_array([
					'Steals one of the temporal allomantic abilities possessed by the victim granting it to the recipient. If they already possess the associated ability, they receive a +1 spell level bonus on that ability.',
					'The victim loses whichever allomantic ability that was stolen.'
				])
			],
			[
				'title' => 'Bendalloy',
				'spaced' => true,
				'texts' => quick_array([
					'Steals one of the spiritual feruchemical abilities possessed by the victim granting it to the recipient. If they already possess the associated ability, they receive a +1 spell level bonus on that ability.',
					'The victim loses whichever allomantic ability that was stolen.'
				])
			],
			[
				'title' => 'Gold',
				'spaced' => true,
				'texts' => quick_array([
					'Steals one of the hybrid feruchemical abilities possessed by the victim granting it to the recipient. If they already possess the associated ability, they receive a +1 spell level bonus on that ability.',
					'The victim loses whichever allomantic ability that was stolen.'
				])
			],
			[
				'title' => 'Electrum',
				'spaced' => true,
				'texts' => quick_array([
					'Steals one of the enhancement allomantic abilities possessed by the victim granting it to the recipient. If they already possess the associated ability, they receive a +1 spell level bonus on that ability.',
					'The victim loses whichever allomantic ability that was stolen.'
				])
			],
			[
				'title' => 'Chromium',
				'spaced' => true,
				'texts' => quick_array([
					'Steals "destiny". (Interpretation of this effect is up to the DM but probably includes, in addition to obvious pieces of destiny, things such as luck and fate.)'
				])
			],
			[
				'title' => 'Nicrosil (WIP)',
				'spaced' => true,
				'texts' => quick_array([
					'Steals "Investiture".',
					'This ability has yet to be used within the released books and the proper interpretation of its effect is currently largely unknown. It should be noted that the feruchemical ability to "store investiture" stores ones abilities to used investiture and while the other metallic arts have other listed spikes it may allow stealling other invested abilities or qualities.'
				])
			],
			[
				'title' => 'Aluminum',
				'spaced' => true,
				'texts' => quick_array([
					'Charging an aluminum spike by killing a victim, makes it nullify all investiture abilities of the recipient.',
					'An aluminum spike does not actually steal any attribute of the victim leaving a victim otherwise unharmed.'
				])
			],
			[
				'title' => 'Duralumin',
				'spaced' => true,
				'texts' => quick_array([
					'Steals connection and identity. The recipient learns the victim\'s native languages and acquires any and all class features, including spellcasting, the victim acquired from classes that receive power from a patron or deity and receives the same standing with the deity as the victim had. Though they may quickly lose it depending on their behaviour. Similarlu, they acquire any familiars, animal companions, cohorts, followers, or similar aids possessed by the victim. They also acquire any standing the victim had with other creatures adding the attitude they had toward the victim, starting from from indifferent, to that which they already had toward the recipient, as well as inheriting any other relationships they had. The recipient also acquires the appearance, accent, mannerisms, and speech-patterns of the victim on top of their own. They do not change race but their appearance changes to be more similar to that of the victim and their accent mixes with the victim\'s when speaking languages spoken by victim that the recipient already spoke. The victim\'s accent replaces the recipient\'s accent entirely while speaking languages learned from the victim. In all, so long as they are the same race or are unable to be seen by their target, the recipient receives a +10 bonus to disguise as the victim and a +5 bonus to bluff claiming to be the victim. This bonus is reduced by half if they are not the same race and can be seen by their target. The recipient also possesses any alignment auras or other identity based auras possessed by the victim. The recipient can tap metalminds and use magic items as though they were the victim.',
					'The victim becomes unrecognizable with those who knew them feeling no connection to them and their appearance wiped to the most generic version of a member of their race. They can no longer tap any of their metalminds and any metalminds they store into are unkeyed similar to fully storing into aluminum.'
				])
			],
			[
				'title' => 'Atium',
				'spaced' => true,
				'texts' => quick_array([
					'Can be used in place of any other spike with the exception that the effect receives a +50% bonus.'
				])
			],
			[
				'title' => 'Lerasium',
				'spaced' => true,
				'texts' => quick_array([
					'Simultaneously steals all attributes of the base 16 metals.'
				])
			]
		]
	);
	require $startDir.'pageEnd.php';
?>