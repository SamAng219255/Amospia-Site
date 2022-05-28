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
?>
<script>
	initialSort=true;
	surgesOrder={"adhesion":0,"gravitation":1,"division":2,"abrasion":3,"progression":4,"illumination":5,"transformation":6,"transportation":7,"cohesion":8,"tension":9};
	function surgeComp(a,b) {
		if(surgesOrder[a]!==undefined) {
			if(surgesOrder[b]!==undefined) {
				return surgesOrder[a] > surgesOrder[b] ? 1 : -1;
			}
			else {
				return -1;
			}
		}
		else if(surgesOrder[b]!==undefined) {
			return 1;
		}
		else {
			return comp(a,b);
		}
	}
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;

		return 2 * surgeComp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) + 
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Surge',
			'Description'
		],
		[
			[
				'Full Lashing',
				'link' => 'surgebinding/full_lashing.php',
				'Adhesion',
				'Infuse a region that tightly adheres to other objects.'
			],
			[
				'Basic Lashing',
				'link' => 'surgebinding/basic_lashing.php',
				'Gravitation',
				'Change the direction of gravity for a touched creature or object.'
			],
			[
				'Half Lashing',
				'link' => 'surgebinding/half_lashing.php',
				'Gravitation',
				'Cancel out the direction of gravity for a touched creature or object.'
			],
			[
				'Practiced Lashing',
				'link' => 'surgebinding/practiced_lashing.php',
				'Gravitation',
				'Grants you a gravitic flight speed.'
			],
			[
				'Decay',
				'link' => 'surgebinding/decay.php',
				'Division',
				'Cause touched object or creature to crumble, burn, or otherwise break down.'
			],
			[
				'Slicking',
				'link' => 'surgebinding/slicking.php',
				'Abrasion',
				'Touched surface becomes slick.'
			],
			[
				'Anti-Slicking',
				'link' => 'surgebinding/anti_slicking.php',
				'Abrasion',
				'Touched surface becomes easy to hold onto.'
			],
			[
				'Growth',
				'link' => 'surgebinding/growth.php',
				'Progression',
				'Makes one or more plants grow.'
			],
			[
				'Regrowth',
				'link' => 'surgebinding/regrowth.php',
				'Progression',
				'Heals touched creature.'
			],
			[
				'Lightweaving',
				'link' => 'surgebinding/lightweaving.php',
				'Illumination',
				'Creates a visual illusion.'
			],
			[
				'Soulcasting',
				'link' => 'surgebinding/soulcasting.php',
				'Transformation',
				'Transmutes the substance of an object into something else.'
			],
			[
				'Elsecalling',
				'link' => 'surgebinding/elsecalling.php',
				'Transportation',
				'Transports you and up to 7 other creatures to another plane.'
			],
			[
				'Stoneshaping',
				'link' => 'surgebinding/stoneshaping.php',
				'Cohesion',
				'Stone becomes easy to shape.'
			],
			[
				'Stoneshaping, Greater',
				'link' => 'surgebinding/stoneshaping_greater.php',
				'Cohesion',
				'Stone takes forms on command.'
			],
			[
				'Harden/Soften',
				'link' => 'surgebinding/harden_soften.php',
				'Tension',
				'Touched object becomes harder or softer.'
			],
			[
				'Reverse Lashing',
				'link' => 'surgebinding/reverse_lashing.php',
				'Special',
				'Touched object attracts other objects.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>