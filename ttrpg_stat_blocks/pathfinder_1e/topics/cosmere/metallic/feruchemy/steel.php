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
	feruchemy(
		'Steel', // Metal
		'Steelrunner', // User
		[
			'Quadrant' => 'Physical'
		], // Categories
		'10 minutes',
		[
			'Steelrunners can store physical speed granting them faster reaction times and allowing them to travel far quicker while tapping. While tapping, steelrunners receive a multiplicative bonus or penalty to their dexterity and a static bonus or penalty to their movement speeds. Steelrunners may also receive additional or lose existing actions based on their current speed as well as having a different number of attacks available as part of a full attack action.',
			'Because the steelrunner is not able to think any faster, they are limited in what additional actions they can take when sped up. If the steelrunner is also tapping zinc, they receive additional actions. If the steelrunner is tapping both steel and zinc, they may take the greater of the effects of the entry on the normal steel table for their increment of steel and that of the steel with zinc table for the lesser of the increments they are tapping steel and zinc at. For columns only on the normal steel table, the steelrunner uses that table whether or not they are tapping zinc.'
		], // Description
		[
			'columns' => [
				'Dex Bonus',
				'Movement',
				'Actions Change',
				'Additional Attacks'
			],
			'rows' => [
				[
					'-6',
					'-75%',
					'-25 ft',
					'only swift and free',
					'-3'
				],
				[
					'-4',
					'-50%',
					'-15 ft',
					'1 move plus swift and free',
					'-2'
				],
				[
					'-2',
					'-25%',
					'-10 ft',
					'as staggered',
					'-1'
				],
				[
					'0',
					'+0%',
					'no change',
					'normal',
					'+0'
				],
				[
					'4',
					'+50%',
					'+15 ft',
					'normal',
					'+1'
				],
				[
					'8',
					'+100%',
					'+30 ft',
					'+1 move',
					'+1'
				],
				[
					'12',
					'+150%',
					'+45 ft',
					'+1 move',
					'+2'
				],
				[
					'16',
					'+200%',
					'+60 ft',
					'+1 move & may replace 1 move with a second standard',
					'+2'
				]
			]
		], // Increments
		[
			10 => [
				'effect' => 'The steelrunners movement speeds increase by an additional 5 feet.',
				'draw' => 'The steelrunner takes a -2 penalty to dexterity and all of their movement speeds are reduced by 5 ft.'
			],
			30 => [
				'effect' => 'The steelrunner can make better use of their speed and may use the steel and zinc increment table as though they were always tapping zinc at an increment of at least 8.',
				'draw' => 'The steelrunner takes a -2 penalty to dexterity and all of their movement speeds are reduced by 5 ft.'
			],
			60 => [
				'effect' => 'The steelrunner can make better use of their speed and may use the steel and zinc increment table as though they were always tapping zinc at an increment of at least 12.',
				'draw' => 'The steelrunner takes a -2 penalty to dexterity and all of their movement speeds are reduced by 5 ft.'
			],
			100 => [
				'effect' => 'The steelrunner can make better use of their speed and may use the steel and zinc increment table as though they were always tapping zinc at an increment of at least 16.',
				'draw' => 'The steelrunner takes a -2 penalty to dexterity and all of their movement speeds are reduced by 5 ft.'
			]
		]
	);
?>
<h3>Steel with Zinc Increments</h3>
<table class="no-sort">
	<tr>
		<th>Increment</th>
		<th>Actions Change</th>
		<th>Additional Attacks</th>
	</tr>
	<tr>
		<td>-6</td>
		<td>only swift and free</td>
		<td>-3</td>
	</tr>
	<tr>
		<td>-4</td>
		<td>1 move plus swift and free</td>
		<td>-2</td>
	</tr>
	<tr>
		<td>-2</td>
		<td>as staggered</td>
		<td>-1</td>
	</tr>
	<tr>
		<td>0</td>
		<td>normal</td>
		<td>+0</td>
	</tr>
	<tr>
		<td>4</td>
		<td>normal</td>
		<td>+1</td>
	</tr>
	<tr>
		<td>8</td>
		<td>+1 move</td>
		<td>+2</td>
	</tr>
	<tr>
		<td>12</td>
		<td>+1 move & may replace 1 move with a second standard</td>
		<td>+3</td>
	</tr>
	<tr>
		<td>16</td>
		<td>+2 moves & may replace 1 move with a second standard</td>
		<td>+4</td>
	</tr>
</table>
<?php require $startDir.'pageEnd.php'; ?>