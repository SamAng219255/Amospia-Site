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
	block(
		'Destruction',
		'rule',
		quick_array([
			'This is an additional descriptor added to better classify spells for aa/shadow|shadows/aa and their kin who have an affinity for destructive spells.',
			'Spells with the destruction descriptor do not necessarily deal damage nor are most damaging spells destruction spells. Destruction spells are, instead, spells which directly cause the destruction of an object, similar to how spells of the creation sub-school directly create something regardless of what was created and goal of creating the thing.',
			'As this descriptor is designed to be applied to existing canon spells retroactively, the following is a list of spells that gain the destruction descriptor. This list is incomplete and I will add to it as I determine additional spells.'
		])
	);
?>
<ul>
	<li>boneshatter</li>
	<li>break</li>
	<li>burst bonds</li>
	<li>detonate</li>
	<li>disintegrate</li>
	<li>earthquake</li>
	<li>eroding ray</li>
	<li>greater break</li>
	<li>greater shout</li>
	<li>greater snap</li>
	<li>implosion</li>
	<li>lesser snap</li>
	<li>mage's disjunction</li>
	<li>remove curse</li>
	<li>resounding blow</li>
	<li>rusting grasp</li>
	<li>shatter</li>
	<li>shout</li>
	<li>snap</li>
	<li>sympathetic vibration</li>
	<li>thunderous snap</li>
</ul>
<?php require $startDir.'pageEnd.php'; ?>