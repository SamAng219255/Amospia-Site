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
	spellBlockAuto(
		'Starship',// Name
		'Transmutation',// School
		[],// Descriptors
		[
			'arcanist' => 11,
			'bard' => 11,
			'cleric' => 11,
			'occultist' => 11,
			'oracle' => 11,
			'psychic' => 11,
			'skald' => 11,
			'sorcerer' => 11,
			'summoner' => 11,
			'unchained summoner' => 11,
			'warpriest' => 11,
			'wizard' => 11
		],// Levels
		[
			'V' => 1,
			'S' => 1,
			'F' => 1,
			'FNote' => 'a six-pointed brass compass rose with up and down directions and a spiral around the middle marking the orientation'
		],// Components
		'1 full-round action',// Casting Time
		'Medium',// Range
		'one sailing ship',// Target
		false,// Effect
		false,// Area
		'permanent',// Duration
		'none',// Save
		'no',// SR
		[
			'You enchant the target ship to be able to sail through space. The ship gains the ability to sail on an astral sea that allows it to sail off the ocean and into the sky. This astral sea also shortens the distance between distant objects effectively increasing the ship\'s speed as it gets further from the surface of a world to allow sailing to distant planets and even other solar systems.',
			'The ship, as well as creatures and objects on board the ship, are protected as by ii/planetary adaptation/ii and creatures and objects on board the ship are affected by an artificial gravity field that produces normal gravity that matches the orientation of the ship instead of the local gravity.',
			'Sailing out of or into the atmosphere of a planet takes approximately 4 hours after which sailing all the way around the planet takes another 4 hours. Traveling around the solar system takes days while traveling to other solar systems takes weeks to nearby systems or months to further ones but rarely more than a year unless traveling outside of the galaxy which can take decades.',
			'Navigational equipment aboard the ship also transforms to advanced magical forms that are capable of performing equivalent navigational roles in space. This includes navigational devices such as compasses and sextants as well as navigational controls such as the ship\'s wheel.',
			'Dispelling starship causes the magic to fail slowly, hopefully allowing time to put down on a safe world. The starship continues to function, but slowly breaks down as determined by the GM, for 2d4 days after being dispelled.'
		]// Description
	);
	require $startDir.'pageEnd.php';
?>