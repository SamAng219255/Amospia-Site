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
			'Base Price Modifier',
			'Description'
		],
		[
			[
				'Casting',
				'link' => 'items/casting_weapon_ranged.php',
				'+2,000 gp',
				'Makes the weapon into a casting focus, allowing it to be used while casting spells.' 
			],
			[
				'Corrupted',
				'link' => 'items/corrupted_enchant_ranged.php',
				'+3 bonus',
				'Deals extra damage against good creatures and grants bonuses to identify good outsiders' 
			]
		],
		true,
		false
	);
	require $startDir.'pageEnd.php';
?>