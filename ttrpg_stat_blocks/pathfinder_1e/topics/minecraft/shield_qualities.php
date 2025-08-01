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
				'Mending',
				'link' => 'enchants.php#block-Mending',
				'+12,000 gp'
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