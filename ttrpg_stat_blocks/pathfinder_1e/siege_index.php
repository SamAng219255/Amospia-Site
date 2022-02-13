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
	initialSort=true;
	fireNum={'melee':0,'direct':1,'indirect':2};
	sizeNum={'fine':0,'diminutive':1,'tiny':2,'small':3,'medium':4,'large':5,'huge':6,'gargantuan':7,'colossal':8};
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return 8 * comp(fireNum[a.children[2].innerText.toLowerCase()],fireNum[b.children[2].innerText.toLowerCase()]) +
			4 * comp(sizeNum[a.children[3].innerText.toLowerCase()],sizeNum[b.children[3].innerText.toLowerCase()]) +
			2 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) +
			1 * comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'Cost',
			'Fire Mode',
			'Size',
			'Dmg',
			'Critical',
			'Range',
			'Type',
			'Crew',
			'Aim',
			'Load',
			'Speed',
			'Weight'
		],
		[
			[
				'Spell Prism, 3rd Level',
				'link' => 'items/spell_prism.php',
				'39,000 gp',
				'Direct',
				'Large',
				'varies',
				'x2',
				'varies',
				'varies',
				'1',
				'2',
				'4',
				'10 ft.',
				'12,000 lbs.'
			],
			[
				'Spell Prism, 6th Level',
				'link' => 'items/spell_prism.php',
				'94,500 gp',
				'Direct',
				'Huge',
				'varies',
				'x3',
				'varies',
				'varies',
				'3',
				'2',
				'5',
				'10 ft.',
				'40,000 lbs.'
			],
			[
				'Spell Prism, 9th Level',
				'link' => 'items/spell_prism.php',
				'168,000 gp',
				'Direct',
				'Gargantuan',
				'varies',
				'x4',
				'varies',
				'varies',
				'1',
				'2',
				'6',
				'0 ft.',
				'149,000 lbs.'
			],
			[
				'Amplifying Lenses, 3rd Level',
				'link' => 'items/spell_lens.php',
				'25,000 gp',
				'Direct',
				'Large',
				'varies',
				'19-20/x2',
				'varies',
				'varies',
				'2',
				'1',
				'3',
				'10 ft.',
				'22,000 lbs.'
			],
			[
				'Amplifying Lenses, 6th Level',
				'link' => 'items/spell_lens.php',
				'50,000 gp',
				'Direct',
				'Huge',
				'varies',
				'18-20/x2',
				'varies',
				'varies',
				'3',
				'1',
				'3',
				'0 ft.',
				'75,000 lbs.'
			],
			[
				'Amplifying Lenses, 9th Level',
				'link' => 'items/spell_lens.php',
				'130,000 gp',
				'Direct',
				'Gargantuan',
				'varies',
				'18-20/x3',
				'varies',
				'varies',
				'4',
				'1',
				'3',
				'0 ft.',
				'177,000 lbs.'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>