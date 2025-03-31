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
	initialSortFunc=function(a,b) {
		if(a.children[0].tagName=='TH')
			return -1;
		else if(b.children[0].tagName=='TH')
			return 1;
		return comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<?php
	table(
		[
			'Name',
			'CR',
			'Type',
			'Environment'
		],
		[
			['Teshainige, Dreklar', 'link' => 'aliens/dreklar.php', 2, 'magical beast', 'The Planet Theares'],
			['Teshainige, Frendrin', 'link' => 'aliens/frendrin.php', 12, 'magical beast', 'The Planet Theares'],
			['Teshainige, Trecklyre', 'link' => 'aliens/trecklyre.php', 16, 'magical beast', 'The Planet Theares'],
			['Teshainige, Protran', 'link' => 'aliens/protran.php', 20, 'magical beast', 'The Planet Theares']
		]
	);
	require $startDir.'pageEnd.php';
?>