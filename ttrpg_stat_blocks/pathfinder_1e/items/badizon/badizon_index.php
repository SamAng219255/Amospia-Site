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
	block(
		'Badizon Relics',
		'description',
		[
			'Badizon Relics, named after the ancient kingdom whose ruins are the major source of these artifacts, are a special type of minor artifacts designed to draw on the skill and ability of their wielder to grant their wielder supernatural ability and aid.',
			'When a badizon relic is not being wielded, or when it is being wielded by a creature that lacks the necessary ability to power it, it has only a weak aura of magic and has a caster level of 1. Otherwise, a badizon relic has a caster level equal to its wielder\'s number of ranks in the given skill, their base attack bonus, their caster level, or whatever other statistic the relic draws its power from.',
			'Badazon relics will include in their descriptions a list powers that are unlocked when the wielder achieves a certain level of skill in the relics dependant ability. A wielder has access to all powers they meet the requirements for.',
			'Most badizon relics have several modes. When a creature first picks up a badizon relic they are capable of powering to an extent that they could unlock a power that is tied to a specific mode, they must choose one of the relic\'s modes. From that point on, anytime they wield that type of badazon relic they can only wield the powers asociated with their chosen mode. They can, however, change which mode they choose whenever they gain a new rank in the listed or otherwise permanently increase the dependant ability.'
		]
	);
	table(
		[
			'Name',
			'Dependant Stat',
			'Slot'
		],
		[
			[
				'Badizon Key',
				'link' => 'key.php',
				'Disable Device',
				'none'
			]
		]
	);
	require $startDir.'pageEnd.php';
?>