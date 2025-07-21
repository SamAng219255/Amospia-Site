<?php 
	$startDir='';
	for($i=0; $i<10; $i++) {
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
	bonusRegEx=/(?:((?:\+|-)\d) bonus|((?:\+|-)\d{1,3}(?:,\d{3})*) gp)/;
	initialSort=true;
	initialSortFunc=function(a,b) {
		const aTxt=a.children[1].innerText.toLowerCase();
		const bTxt=b.children[1].innerText.toLowerCase();
		const matchA=aTxt.match(bonusRegEx);
		const matchB=bTxt.match(bonusRegEx);
		let valA=aTxt, valB=bTxt;
		if(matchA!=null) {
			if(matchA[1]!=undefined) {
				const x=parseInt(matchA[1]);
				valA=x*x*2000;
			}
			else {
				valA=parseInt(matchA[2].replaceAll(',',''));
				valA+=Math.sign(valA);
			}
		}
		if(matchB!=null) {
			if(matchB[1]!=undefined) {
				const x=parseInt(matchB[1]);
				valB=x*x*2000;
			}
			else {
				valB=parseInt(matchB[2].replaceAll(',',''));
				valB+=Math.sign(valB);
			}
		}
		return 2 * comp(valA.toString(),valB.toString()) + comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<p></p>
<?php
	table(
		[
			'Name',
			'Base Price Modifier'
		],
		[
			[
				'Bane of Arthropods',
				'link' => 'enchants.php#block-Bane-of-Arthropods',
				'+2 bonus'
			],
			[
				'Efficiency',
				'link' => 'enchants.php#block-Efficiency',
				'+1 bonus'
			],
			[
				'Curse of Vanishing',
				'link' => 'enchants.php#block-Curse-of-Vanishing',
				'+8,000 gp'
			],
			[
				'Fire Aspect',
				'link' => 'enchants.php#block-Fire-Aspect',
				'+2 bonus'
			],
			[
				'Impaling',
				'link' => 'enchants.php#block-Impaling',
				'+1 bonus'
			],
			[
				'Knockback',
				'link' => 'enchants.php#block-Knockback',
				'+2 bonus'
			],
			[
				'Mending',
				'link' => 'enchants.php#block-Mending',
				'+12,000 gp'
			],
			[
				'Riptide',
				'link' => 'enchants.php#block-Riptide',
				'+2 bonus'
			],
			[
				'Sharpness',
				'link' => 'enchants.php#block-Sharpness',
				'+1 to +5'
			],
			[
				'Silk Touch',
				'link' => 'enchants.php#block-Silk-Touch',
				'+1 bonus'
			],
			[
				'Smite',
				'link' => 'enchants.php#block-Smite',
				'+1 bonus'
			],
			[
				'Sweeping Edge',
				'link' => 'enchants.php#block-Sweeping-Edge',
				'+2 bonus'
			],
			[
				'Unbreaking',
				'link' => 'enchants.php#block-Unbreaking',
				'+3,000 gp'
			]
		],
		true,
		false
	);
	require $startDir.'pageEnd.php';
?>