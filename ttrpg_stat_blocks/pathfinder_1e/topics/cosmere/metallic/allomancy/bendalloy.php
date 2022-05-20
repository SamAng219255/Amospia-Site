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
		'Bendalloy', // Metal
		'Slider', // User
		[
			'Quadrant' => 'Temporal',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pushing'
		], // Categories
		'1 round',
		[
			'While burning bendalloy, the slider creates a "bubble" of distorted time around themself effectively speeding up time for events inside the bubble as seen from the outside. The bubble is a sphere that includes creatures and objects within 5 feet of a chosen corner of the slider\'s square. Every round outside the bubble amounts to 8 rounds inside. This works by all creatures outside the bubble taking their turn in accordance with the current initiative order followed by all creatures inside taking theirs 8 times. (e.x. turn order between 4 people organized A,B,C,D with A and C inside the bubble becomes B,D,A,C,A,C,A,C,A,C,A,C,A,C,A,C,A,C) Any creature leaving the bubble takes no further action until the following round outside the bubble. Melee attacks cannot be made across the bubble. Any ranged attack crossing the surface of the bubble is redirected in a random direction. Roll a d% against a 10% chance the projectile targets the original with the same bonus to hit, otherwise repeat the process for each other creatures within 10 feet starting with the creatures closest to the target. For effects traveling into the bubble, treat non-full-round-actions as resolving on either the 4th or 8th round inside the bubble depending on whether or not a standard or move action was taken prior to performing the action. For full-round-actions, divide the attacks of a full attack action according to the table 1-1 below and all other effects resolve on the 8th round. When the bubble is made, that point in the initiative cycle is treated as the beginning of round for how turns are distributed and is when in the initiative cycle that actions across the bubble are resolved. For actions that resolve after the target has moved, actions that require an attack roll to hit are treated as a ranged attack crossing the bubble starting with the nearest creature within 10 feet of where the target was. For all other actions that resolve after the target has moved, the effect still targets the same creature or object as normally so long as the target can still be targeted. (Is in range and has line of sight for most abilities.)'
		], // Description
		[
			'The time difference is increased from 1:8 to 1:10.'
		], // Flare
		[
			10 => [
				'effect' => 'The slider is able to anchor the bubble to an object making it move with that object.',
				'draw' => ''
			],
			30 => [
				'effect' => 'The slider can change the shape of bubble to include any number of connected squares within the radius that include the slider and can set the time difference treating the normal difference as the maximum.',
				'draw' => ''
			],
			60 => [
				'effect' => 'Maximum time difference increases to 1:10 or 1:12 while flaring.',
				'draw' => ''
			],
			100 => [
				'effect' => 'Maximum time difference increases to 1:12 or 1:14 while flaring.',
				'draw' => ''
			]
		]
	);
?>
<h4>Table: Full Attack Actions Through 1:8 or 8:1 Temporal Bubbles</h4>
<table class="no-sort expand">
	<tr>
		<th></th>
		<th>1st&nbsp;Round</th>
		<th>2nd&nbsp;Round</th>
		<th>3rd&nbsp;Round</th>
		<th>4th&nbsp;Round</th>
		<th>5th&nbsp;Round</th>
		<th>6th&nbsp;Round</th>
		<th>7th&nbsp;Round</th>
		<th>8th&nbsp;Round</th>
	</tr>
	<tr>
		<th>1&nbsp;Attack</th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>1st Attack</td>
	</tr>
	<tr>
		<th>2&nbsp;Attacks</th>
		<td></td>
		<td></td>
		<td></td>
		<td>1st Attack</td>
		<td></td>
		<td></td>
		<td></td>
		<td>2nd Attack</td>
	</tr>
	<tr>
		<th>3&nbsp;Attacks</th>
		<td></td>
		<td></td>
		<td>1st Attack</td>
		<td></td>
		<td>2nd Attack</td>
		<td></td>
		<td></td>
		<td>3rd Attack</td>
	</tr>
	<tr>
		<th>4&nbsp;Attacks</th>
		<td></td>
		<td>1st Attack</td>
		<td></td>
		<td>2nd Attack</td>
		<td></td>
		<td>3rd Attack</td>
		<td></td>
		<td>4th Attack</td>
	</tr>
	<tr>
		<th>5&nbsp;Attacks</th>
		<td></td>
		<td>1st Attack</td>
		<td>2nd Attack</td>
		<td></td>
		<td>3rd Attack</td>
		<td>4th Attack</td>
		<td></td>
		<td>5th Attack</td>
	</tr>
	<tr>
		<th>6&nbsp;Attacks</th>
		<td></td>
		<td>1st Attack</td>
		<td>2nd Attack</td>
		<td></td>
		<td>3rd Attack</td>
		<td>4th Attack</td>
		<td>5th Attack</td>
		<td>6th Attack</td>
	</tr>
	<tr>
		<th>7&nbsp;Attacks</th>
		<td></td>
		<td>1st Attack</td>
		<td>2nd Attack</td>
		<td>3rd Attack</td>
		<td>4th Attack</td>
		<td>5th Attack</td>
		<td>6th Attack</td>
		<td>7th Attack</td>
	</tr>
	<tr>
		<th>8&nbsp;Attacks</th>
		<td>1st Attack</td>
		<td>2nd Attack</td>
		<td>3rd Attack</td>
		<td>4th Attack</td>
		<td>5th Attack</td>
		<td>6th Attack</td>
		<td>7th Attack</td>
		<td>8th Attack</td>
	</tr>
	<tr>
		<th>9&nbsp;Attacks</th>
		<td>1st Attack</td>
		<td>2nd Attack</td>
		<td>3rd Attack</td>
		<td>4th Attack</td>
		<td>5th Attack</td>
		<td>6th Attack</td>
		<td>7th Attack</td>
		<td>8th & 9th Attacks</td>
	</tr>
	<tr>
		<th>10&nbsp;Attacks</th>
		<td>1st Attack</td>
		<td>2nd Attack</td>
		<td>3rd Attack</td>
		<td>4th & 5th Attacks</td>
		<td>6th Attack</td>
		<td>7th Attack</td>
		<td>8th Attack</td>
		<td>9th & 10th Attacks</td>
	</tr>
	<tr>
		<th>11&nbsp;Attacks</th>
		<td>1st Attack</td>
		<td>2nd Attack</td>
		<td>3rd & 4th Attacks</td>
		<td>5th Attack</td>
		<td>6th & 7th Attacks</td>
		<td>8th Attack</td>
		<td>9th Attack</td>
		<td>10th & 11th Attacks</td>
	</tr>
	<tr>
		<th>12&nbsp;Attacks</th>
		<td>1st Attack</td>
		<td>2nd & 3rd  Attacks</td>
		<td>4th Attack</td>
		<td>5th & 6th Attacks</td>
		<td>7th Attack</td>
		<td>8th & 9th Attacks</td>
		<td>10th Attack</td>
		<td>11th & 12th Attacks</td>
	</tr>
</table>
<?php require $startDir.'pageEnd.php'; ?>