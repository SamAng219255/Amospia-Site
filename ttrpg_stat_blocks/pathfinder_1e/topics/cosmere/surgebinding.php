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
				return surgesOrder[a] > surgesOrder[b] ? 1 : (surgesOrder[a] < surgesOrder[b] ? -1 : 0);
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

		return 2 * surgeComp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) + 
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Surges',
			'Access',
			'Description'
		],
		[
			[
				'Full Lashing',
				'link' => 'surgebinding/full_lashing.php',
				'Adhesion',
				'Windrunners',
				'Infuse a region that tightly adheres to other objects.'
			],
			[
				'Basic Lashing',
				'link' => 'surgebinding/basic_lashing.php',
				'Gravitation',
				'Heavenly Ones, Skybreakers, Windrunners',
				'Change the direction of gravity for a touched creature or object.'
			],
			[
				'Half Lashing',
				'link' => 'surgebinding/half_lashing.php',
				'Gravitation',
				'Heavenly Ones, Skybreakers, Windrunners',
				'Cancel out the direction of gravity for a touched creature or object.'
			],
			[
				'Advanced Lashings',
				'link' => 'surgebinding/advanced_lashings.php',
				'Gravitation',
				'Heavenly Ones, Skybreakers, Windrunners',
				'Grants you a gravitic flight speed.'
			],
			[
				'Decay',
				'link' => 'surgebinding/decay.php',
				'Division',
				'Devastating Ones, Dustbringers, Skybreakers',
				'Cause touched object or creature to crumble, burn, or otherwise break down.'
			],
			[
				'Slicking',
				'link' => 'surgebinding/slicking.php',
				'Abrasion',
				'Dustbringers, Edgedancers, Flowing Ones',
				'Touched surface becomes slick.'
			],
			[
				'Sticking',
				'link' => 'surgebinding/sticking.php',
				'Abrasion',
				'Dustbringers, Edgedancers, Flowing Ones',
				'Touched surface becomes easy to hold onto.'
			],
			[
				'Growth',
				'link' => 'surgebinding/growth.php',
				'Progression',
				'Edgedancers, Truthwatchers',
				'Makes one or more plants grow.'
			],
			[
				'Regrowth',
				'link' => 'surgebinding/regrowth.php',
				'Progression',
				'Edgedancers, Truthwatchers',
				'Heals touched creature.'
			],
			[
				'Carapace Growth',
				'link' => 'surgebinding/carapace_growth.php',
				'Progression',
				'Magnified Ones',
				'Grows and shapes carapce.'
			],
			[
				'Lightweaving',
				'link' => 'surgebinding/lightweaving.php',
				'Illumination',
				'Lightweavers, Masked Ones, Truthwatchers',
				'Creates a visual illusion.'
			],
			[
				'Soulcasting',
				'link' => 'surgebinding/soulcasting.php',
				'Transformation',
				'Altered Ones, Elsecallers, Lightweavers',
				'Transmutes the substance of an object into something else.'
			],
			[
				'Elsecalling',
				'link' => 'surgebinding/elsecalling.php',
				'Transportation',
				'Elsecallers, Willshapers',
				'Transports you and up to 7 other creatures to another plane.'
			],
			[
				'Evacuate',
				'link' => 'surgebinding/evacuate.php',
				'Transportation',
				'Husked Ones',
				'Leave your body and generate a new one a short distance away.'
			],
			[
				'Stoneshaping',
				'link' => 'surgebinding/stoneshaping.php',
				'Cohesion',
				'Stonewards, Willshapers',
				'Stone becomes easy to shape.'
			],
			[
				'Stoneshaping, Greater',
				'link' => 'surgebinding/stoneshaping_greater.php',
				'Cohesion',
				'Stonewards, Willshapers',
				'Stone takes forms on command.'
			],
			[
				'Stone Phase',
				'link' => 'surgebinding/stone_phase.php',
				'Cohesion',
				'Deepest Ones',
				'Allows travelling through solid stone.'
			],
			[
				'Harden/Soften',
				'link' => 'surgebinding/harden_soften.php',
				'Tension',
				'Focused Ones, Stonewards',
				'Touched object becomes harder or softer.'
			],
			[
				'Reverse Lashing',
				'link' => 'surgebinding/reverse_lashing.php',
				'Adhesion, Gravitation',
				'Windrunners',
				'Touched object attracts other objects.'
			],
			[
				'Repair',
				'link' => 'surgebinding/repair.php',
				'Adhesion, Tension',
				'Bondsmiths',
				'Restore broken objects.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>