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
	bonusFunc=function(x){return x*x*1000;};
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
				valA=x*x*1000;
			}
			else {
				valA=parseInt(matchA[2].replaceAll(',',''));
				valA+=Math.sign(valA);
			}
		}
		if(matchB!=null) {
			if(matchB[1]!=undefined) {
				const x=parseInt(matchB[1]);
				valB=x*x*1000;
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
				'Aqua Affinity',
				'link' => 'enchants.php#block-Aqua-Affinity',
				'+2 bonus'
			],
			[
				'Blast Protection',
				'link' => 'enchants.php#block-Blast-Protection',
				'+1 bonus'
			],
			[
				'Curse of Binding',
				'link' => 'enchants.php#block-Curse-of-Binding',
				'+1,000 gp'
			],
			[
				'Curse of Vanishing',
				'link' => 'enchants.php#block-Curse-of-Vanishing',
				'+8,000 gp'
			],
			[
				'Depth Strider',
				'link' => 'enchants.php#block-Depth-Strider',
				'+1 bonus'
			],
			[
				'Feather Falling',
				'link' => 'enchants.php#block-Feather-Falling',
				'+1 bonus'
			],
			[
				'Fire Protection',
				'link' => 'enchants.php#block-Fire-Protection',
				'+18,000 gp'
			],
			[
				'Frost Walker',
				'link' => 'enchants.php#block-Frost-Walker',
				'+2 bonus'
			],
			[
				'Mending',
				'link' => 'enchants.php#block-Mending',
				'+12,000 gp'
			],
			[
				'Projectile Protection',
				'link' => 'enchants.php#block-Projectile-Protection',
				'+2 bonus'
			],
			[
				'Protection',
				'link' => 'enchants.php#block-Protection',
				'+1 to +5'
			],
			[
				'Respiration',
				'link' => 'enchants.php#block-Respiration',
				'+2 bonus'
			],
			[
				'Thorns',
				'link' => 'enchants.php#block-Thorns',
				'+3 bonus'
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