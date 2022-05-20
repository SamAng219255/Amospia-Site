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
	allomancy(
		'Electrum', // Metal
		'Oracle', // User
		[
			'Quadrant' => 'Temporal',
			'Internal/External' => 'Internal',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 round',
		[
			'While burning electrum, the oracle sees numerous shadows of possible actions they could perform within the next round. If the augur succeeds at a DC 20 intelligence check, they can somewhat discern which actions lead to immediate certain peril such as stepping on a trap, falling off an unseen ledge, or triggering an opponent\'s readied attack. It also lets them know the result of any action that requires a check to discern the outcome or depends on their or another creature\'s choice such as failing to disarm a trap, slipping off a narrow ledge, or provoking an attack of opportunity. On their following turn, the augur may request the GM reveal the results of 1 action plus 1 per 5 by which they beat the DC. At which point if the GM is aware of guaranteed peril they inform the player of such but not what it is. If it is dependent on a roll, the GM rolls it in secret and reveals whether the roll succeeded in imperiling the augur. This effect does not perceive any peril resulting from a creature with a divergent timeline. This is near-future sight and therefore makes the oracle\'s timeline near-future divergent.'
		], // Description
		[
			'Can see further into the future allowing them to spend requests to know the result of actions gained this turn over the next 2 turns.'
		], // Flare
		[
			10 => [
				'effect' => 'They can sense the presence of the shadows allowing them to gain the benefits without needing to be able to physically see the shadows.',
				'draw' => ''
			],
			20 => [
				'effect' => 'They +5 bonus to intelligence to discern the results of actions.',
				'draw' => ''
			],
			40 => [
				'effect' => 'They +5 bonus to intelligence to discern the results of actions.',
				'draw' => ''
			],
			60 => [
				'effect' => 'They +5 bonus to intelligence to discern the results of actions.',
				'draw' => ''
			],
			80 => [
				'effect' => 'They +5 bonus to intelligence to discern the results of actions.',
				'draw' => ''
			],
			100 => [
				'effect' => 'They +5 bonus to intelligence to discern the results of actions.',
				'draw' => ''
			]
		]
	);
	require $startDir.'pageEnd.php';
?>