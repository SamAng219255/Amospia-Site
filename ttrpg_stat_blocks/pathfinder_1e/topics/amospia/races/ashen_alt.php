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
	raceBlockAuto(
		'Ashen Brother/Sister, Alternate',// Name
		12,// Race Points
		'Confined to the ashen fields in the shadow of the diamond mount, it is easy to lose your sense of being human (narman) though those in the volcano\'s shadow have forged an unbreakable brotherhood.',// Desc
		'Their tusks kept breaking off before, now they only grow a bony nub. Their skin is mottled dark gray and black in a way that makes them appear to be covered in ash and soot though their skin sparkles a little in bright light reminiscent of the grains of diamond dust.',// Physical Desc
		'Ashen brothers and sisters have an unbreakable bond forged from working together in the ashen fields, though this also makes it particularly painful when betrayal occurs and a betrayer\'s standing can only rarely be recovered.',// Society
		'Ashen are neglected and ignored by their narman masters and rarely get the chance to meet other races. Ashen brothers and sisters usually refer to each as "ashen brother" or "ashen sister" but their narman masters usually refer all of them as "ashen". It is debated among ashen brothers and sisters which way they would prefer other races to refer to them. Some associate being called simply ashen with their cruel masters and as derogatory as though they are being called "dirty", "uncivilized", or "worthless". Others consider it arrogant and imposing of other peoples to refer to them as brother or sister when they do not share the pain of working the ashen fields and the bond of camaraderie it builds.',// Relations
		'',// Alignment and Religion
		'',// Adventurers
		'WIP',// Male Names
		'WIP',// Female Names
		[
			'con' => 2,
			'int' => -2,
			'wis' => 2
		],// Ability Modifiers
		'Ashen brothers and sisters are a hearty and thoughtful people who have little time for scholarly pursuits.',// Ability Description
		[
			'bb/Medium/bb: Ashen brothers and sisters are Medium creatures and have no bonuses or penalties due to their size.',
			'bb/Outsider/bb: These ashen brothers and sisters are ousiders with the alial, ashen, elemental, fire, and native subtypes. As native elementals, they do not receive elemental immunities.',
			'bb/Normal Speed/bb: Ashen brothers and sisters have a base speed of 30 feet.',
			'bb/Darkvision/bb: These ashen brothers and sisters can see in the dark up to 60 feet.',
			'bb/Ash Sight/bb: Ashen brothers and sisters can see five times as far through ash and smoke in the air.',
			'bb/Filtered Breathing/bb: Ashen brothers\' and sisters\' breathing is unaffected by airborne particulates such as ash, sand, or dust in the air.',
			'bb/Fire Immunity/bb: These ashen brothers and sisters have immunity to fire and vulnerability to cold.',
			'bb/Ashen Endurance/bb: Ashen brothers and sisters gain a +4 racial bonus on Constitution checks and Fortitude saves to avoid fatigue and exhaustion, as well as any other ill effects from running, forced marches, starvation, thirst, and hot environments.',
			'bb/Pyromancy/bb: Ashen brothers and sisters gain a +1 racial bonus to their level for the purposes of casting spells with the fire descriptor, using granted powers of the Fire domain, using bloodline powers of the fire elemental bloodline, using the revelations of the oracle’s flame mystery, and determining the damage of alchemist bombs that deal fire damage. Ashen brothers and sisters also gain the following spell-like abilities:',
			'/mm/at-will — ii/spark/ii',
			'/mm/1/day — ii/dancing lights/ii (appears as flames), ii/flare/ii, ii/produce flame/ii',
			'bb/Languages/bb: Ashen brothers and sisters begin play speaking ashen. Ashen brothers and sisters with high Intelligence scores can know aquan, common, ignan, and narman. Ashen has its own writing system and sign language.',
			'bb/Eye For Diamonds/bb: An ashen brother or sister can spend 8 hours searching for diamonds at the end of which they make a single DC 15 Perception check. From this searching, they find an amount of raw diamonds and diamond dust worth 1 gold piece. For every 5 by which they beat the DC, the total worth of their findings increases by 5 silver pieces. If they roll a natural 20 on their roll, however, they find a single raw diamond worth that amount instead. These diamonds are generally quite small and imperfect, with inclusions and discoloration.',
			'bb/Unbreakable Bond/bb: Ashen brothers and sisters almost always have a starting attitude of helpful towards other ashen brothers and sisters. If, however, an ashen brother or sister betrays this trust, their attitude generally drops to outright hostile and can rarely be fully recovered.'
		],// Racial Traits
		false// Subraces
	);
	block(
		'Alial Object',
		'alial-object',
		[
			'Alial races have (generally suppressed) magical energy that infuses a specific part of their body. Though this energy may be present in the object before the creature\'s death, alial objects are non-magical until after the creature\'s death and only acquire their abilities if they are still part of the creature when they die. This body part must be hard like bone or a gemstone. This object can otherwise take many different forms.',
			'Alial objects contain a significantly strong impression of the owner\'s identity. Whether or not the creature is deceased, alial objects can be used as a focus for any spell that requires identifying a creature, such as scrying, to perfectly identify the owner. The owner also receives no saves against such spells.',
			'Alial objects can also be incorporated into specific type of magic items, granting bonuses but potentially changing their effect. Alial objects do not impart their weapon properties or spell modifiers unless stated otherwise or incorporated into an item that uses them.'
		],
		true,
		[
			[
				'title' => 'Description',
				'spaced' => true,
				'texts' => quick_array([
					'Upon death, an ashen brother\'s/sister\'s body rapidly transforms into hardened ash. In this ash, a single large raw diamond, called an aliadamant, worth approximately 500 gp can be found. This diamond functions as their alial object.',
					'bb/Weapon Properties/bb ii/Flaming/ii (Alial weapons made from aliadamants do not gain any enhancement bonus even though they are still magic and possess the ii/flaming/ii property. At least a +1 enhancement bonus must still be added before adding any other properties.)',
					'An aliadamant may be used with the Adamant Manufacture feat to create a diamond edged alial weapon satisfying the requirement both for at least 500 gp of diamond and an alial object.',
					'bb/Spell Modifiers/bb Spells that conjure invaluable stone, gravel, sand, or similar materials instead create a diamond-like material or diamond-like gravel or sand as appropriate. The hardness of such conjured material increases to 20 though the hit points remain unchanged. Such spells that deal damage also bypass DR adamantine and have their damage increased by 1 point per caster level. This conjured material has no value and cannot be sold nor used as a material component for crafting or spell casting.',
					sTable(
						[
							'CL/DC Modifier',
							'Spells'
						],
						[
							[
								'+1',
								'fire spells'
							],
							[
								'-1',
								'cold spells'
							]
						],
						true,
						false,
						false,
						true
					)
				])
			]
		]
	);
	racialFeats('ashen brother/sister', [
		[
			'name' => 'Adamant Form',
			'desc' => '',
			'prereq' => '6 levels in any class',
			'benefit' => 'You gain the following supernatural ability that you can use a number of times per day equal to your Constitution modifier: As a swift action, you can transform your body and objects you are wearing or carrying into diamond. This effect functions as ii/stoneskin/ii except you also gain a +2 racial bonus to AC against rays and you can deflect a single ray attack targeted at you as if you were using the Deflect Arrows feat though you can only do so once per usage of this ability.',
			'special' => 'This feat can be taken in place of any other category of feat (combat, metamagic, item creation, etc.) when choosing a bonus feat from your class.'
		],
		[
			'name' => 'Adamant Manufacture',
			'desc' => '',
			'prereq' => 'Diamond Former, 5 ranks in a relevant Craft skill',
			'benefit' => 'Using only a hammer, anvil, and your uncanny and downright supernatural ability, you can transform an amount of coal into a raw diamond worth the same price though this price can be increased if properly cut. The process of making the diamond requires spending 8 hours a day for 1 day for every 1,000 gp worth of diamond to be created.
				You can only spend up to 8 hours per day forming diamonds and this duration is shared with crafting magic items.',
			'special' => false
		],
		[
			'name' => 'Diamond Former',
			'desc' => '',
			'prereq' => '3 levels in any class',
			'benefit' => 'You can add diamond edges to tools and weapons you craft to enhance their functionality. Any tools that possess sharp edges or points can be enhanced when crafting to grant a +3 enhancement bonus to skill checks made with them, increasing the cost by 900 gp which adds 300 gp of raw diamond to the required materials. Masterwork piercing and slashing weapons can also be enhanced to grant a +1 enhancement bonus to weapon damage and allow it to overcome DR adamantine though, because it changes the material of the edge of the blade, it prevents the weapon\'s material from allowing it to overcome DR. This increases the price, and therefore construction time, of the masterwork component by 1,500 gp which adds 500 gp of raw diamond to the required materials.',
			'special' => false
		]
	]);
	require $startDir.'pageEnd.php';
?>