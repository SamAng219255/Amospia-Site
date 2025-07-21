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
				'Channeling',
				'link' => 'enchants.php#block-Channeling',
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
				'Flame',
				'link' => 'enchants.php#block-Flame',
				'+2 bonus'
			],
			[
				'Impaling',
				'link' => 'enchants.php#block-Impaling',
				'+1 bonus'
			],
			[
				'Infinity',
				'link' => 'enchants.php#block-Infinity',
				'+2 bonus'
			],
			[
				'Loyalty',
				'link' => 'enchants.php#block-Loyalty',
				'+1 bonus'
			],
			[
				'Mending',
				'link' => 'enchants.php#block-Mending',
				'+12,000 gp'
			],
			[
				'Multishot',
				'link' => 'enchants.php#block-Multishot',
				'+2 bonus'
			],
			[
				'Piercing',
				'link' => 'enchants.php#block-Piercing',
				'+2 bonus'
			],
			[
				'Improved Piercing',
				'link' => 'enchants.php#block-Improved-Piercing',
				'+3 bonus'
			],
			[
				'Greater Piercing',
				'link' => 'enchants.php#block-Greater-Piercing',
				'+4 bonus'
			],
			[
				'Power',
				'link' => 'enchants.php#block-Power',
				'+1 to +5'
			],
			[
				'Punch',
				'link' => 'enchants.php#block-Punch',
				'+2 bonus'
			],
			[
				'Quick Charge',
				'link' => 'enchants.php#block-Quick-Charge',
				'+1 bonus'
			],
			[
				'Smite',
				'link' => 'enchants.php#block-Smite',
				'+1 bonus'
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