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
		'Monster Subtypes',
		'info',
		quick_array([
			'Some creatures have one or more subtypes. Subtypes add additional abilities and qualities to a creature.'
		])
	);
	block(
		'Singer',
		'subtype',
		quick_array([
			'Singers are a race native to Roshar, known to the humans as parsh or parshendi. Singers communicate through special rhythms--hence them being called singers. Singers can bond various spren which change their forms.'
		])
	);
	block(
		'Spren',
		'subtype',
		quick_array([
			'Desc',
			'<ul>
				<li>ii/Regeneration (Ex)/ii No form of attack can suppress a spren\'s regeneration—it regenerates even if disintegrated or slain by a death effect. If a spren fails a save against an effect that would kill it instantly, it rises from death 3 rounds later with 1 hit point if no further damage is dealt to its remains.</li>
				<li>Ability damage and drain cannot lower a spren\'s physical ability scores to less than 1.</li>
				<li>ii/Investiture Form (Ex)/ii A spren\'s body is made out of shaped investiture. While outside of the cognitive realm, a spren is intangible, meaning that it cannot interact with other objects nor can objects interact with them with two primary exceptions. The first being that intangible creatures cannot pass through solid objects though they can move through any gap with the limitation that they cannot willingly enter a gap smaller than a regular creature could fit through. The other being that, whether or not a spren is currently intangible, contact with a specific type of anti-investiture will damage the spren by a listed amount. Damage from anti-investiture cannot be healed by the spren\'s regeneration. Spren also remain conscious when below 0 hit points but are instead helpless. If a spren is lowered to 0 hit points by anti-investiture damage, they are instantly slain.</li>
				<li>ii/Mental Anguish (Ex)/ii Every time a spren takes an amount of damage beyond 0 hit points equal to their number of hit dice, it takes 1 point of wisdom damage. (i.e. An attack that deals 5 damage to a spren with 2 hd at 0 hp will deal 2 points of wisdom damage. If the next attack does another 1 point, it stacks with the previous damage and deals another 1 point of wisdom damage.)</li>
				<li>ii/Cognitive Projection (Ex)/ii Spren with less than 3 intelligence cannot leave the cognitive realm but as a free action they can extend themselves into any other plane other than the spiritual realm and often do so when sensing forces they are tied to. When doing so, they are treated as being in both planes though only part of the spren will be visible on the other plane in addition to being tangible, additionally, they only occupy a coexistent location on the other plane with where they are located.</li>
				<li>ii/Selective Visibility (Ex)/ii With the exception of creatures with sprensight, while on a plane other than the cognitive realm, spren can choose at any time which creatures are able to see them and they are invisible to all others.</li>
			</ul>'
		])
	);
	require $startDir.'pageEnd.php';
?>