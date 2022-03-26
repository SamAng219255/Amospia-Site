<?php 
	$startDir='';
	for($i=0; $i<5; $i++) {
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
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
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
		return 4 * comp(valA.toString(),valB.toString()) +
			2 * comp(a.children[2].innerText.toLowerCase(),b.children[2].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Cost',
			'CL',
			'Prof',
			'Hands',
			'Dmg (S)',
			'Dmg (M)',
			'Critical',
			'Range',
			'Weight',
			'Type',
			'Special'
		],
		[
			[
				'Alidens',
				'link' => 'items/alidens.php',
				'8,000 gp',
				'8th',
				'Exotic',
				'Melee',
				'—',
				'1d6',
				'18-20/x2',
				'—',
				'2 lbs.',
				'P',
				'—'
			],
			[
				'Alidens, Infused',
				'link' => 'items/alidens.php',
				'32,000 gp',
				'8th',
				'Exotic',
				'Melee',
				'—',
				'1d6',
				'18-20/x2',
				'—',
				'2 lbs.',
				'P',
				'—'
			],
			[
				'Aliden Blade',
				'link' => 'items/aliden_blade.php',
				'+2 bonus',
				'8th',
				'varies; see text',
				'Melee',
				'—',
				'varies; see text',
				'varies; see text',
				'—',
				'varies; see text',
				'varies; see text',
				'—'
			],
			[
				'Aliden Blade, Infused',
				'link' => 'items/aliden_blade.php',
				'+4 bonus',
				'8th',
				'varies; see text',
				'Melee',
				'—',
				'varies; see text',
				'varies; see text',
				'—',
				'varies; see text',
				'varies; see text',
				'—'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>