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
		'Cadmium', // Metal
		'Pulser', // User
		[
			'Quadrant' => 'Temporal',
			'Internal/External' => 'External',
			'Pushing/Pulling' => 'Pulling'
		], // Categories
		'1 minute',
		[
			'While burning cadmium, the pulser creates a "bubble" of distorted time around themself effectively slowing down time for events inside the bubble as seen from the outside. The bubble is a sphere that includes creatures and objects within 20 feet of a chosen corner of the pulser\'s square. Every round inside the bubble amounts to 8 rounds outside. This works by all creatures inside the bubble taking their turn in accordance with the current initiative order followed by all creatures outside taking theirs 8 times. (e.x. turn order between 4 people organized A,B,C,D with A and C inside the bubble becomes A,C,B,D,B,D,B,D,B,D,B,D,B,D,B,D,B,D) Any creature entering the bubble takes no further action until the following round inside the bubble. Melee attacks cannot be made across the bubble. Any ranged projectile attack crossing the surface of the bubble is redirected in a random direction. Roll a d% against a 10% chance the projectile targets the original with the same bonus to hit, otherwise repeat the process for each other creatures within 10 feet starting with the creatures closest to the target. For effects traveling out of the bubble, treat non-full-round-actions as resolving on either the 4th or 8th round outside the bubble depending on whether or not a standard or move action was taken prior to performing the action. For full-round-actions, divide the attacks of a full attack action according to the table below and all other effects resolve on the 8th round. When the bubble is made, that point in the initiative cycle is treated as the beginning of round for how turns are distributed and is when in the initiative cycle that actions across the bubble are resolved. For actions that resolve after the target has moved, if it require an attack roll to hit it is treated as a ranged projectile crossing the bubble starting with the nearest creature within 10 feet of where the target was. For all other actions that resolve after the target has moved, the effect still targets the same creature or object as normal so long as the target can still be targeted. (Is in range and has line of sight for most abilities.) If a pulser leaves their bubble it is popped, ending the effect.'
		], // Description
		[
			'The time difference is increased from 8:1 to 12:1.'
		], // Flare
		[
			10 => [
				'effect' => 'The pulser is able to anchor the bubble to an object making it move with that object.',
				'draw' => ''
			],
			30 => [
				'effect' => 'The pulser can change the shape of bubble to include any number of connected squares within the radius that include the pulser and can set the time difference treating the normal difference as the maximum.',
				'draw' => ''
			],
			60 => [
				'effect' => 'Maximum time difference increases to 12:1 or 16:1 while flaring.',
				'draw' => ''
			],
			100 => [
				'effect' => 'Maximum time difference increases to 16:1 or 20:1 while flaring.',
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