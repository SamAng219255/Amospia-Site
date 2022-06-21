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
<h2>Races</h2>
<h3>0-10 Race Points</h3>
<dl>
	<dt><a href="races/tirn.php">Tirn</a> ( 0 RP)</dt>
	<dd>+2 Dex, -2 Con, -4 Str</dd>
	<dd>Tirn are a weak, cave dwelling race that relies on strength in numbers to survive.</dd>
	<dt><a href="races/drem.php">Drem</a> ( 8 RP)</dt>
	<dd>+2 Str, +2 Int, -2 Con</dd>
	<dd>Drem are relatives of the Tirn who have strengthened their ability to work in a group and have grown stronger physically from the healthier lifestyle they are able to lead.</dd>
</dl>
<h3>11-20 Race Points</h3>
<dl>
	<dt><a href="races/planewalkers.php">Plane Walkers</a> (11 RP)</dt>
	<dd>+2 Int, +2 Cha</dd>
	<dd>An enigmatic and nomadic race with a natural ability to travel between planes that often form multi-planar caravans.</dd>
	<dt><a href="races/sprix.php">Sprix</a> (14 RP)</dt>
	<dd>+2 Cha, +2 varies</dd>
	<dd>Sprix are a highly varied race of small elemental fey.</dd>
	<dt><a href="races/doubles.php">Double Walkers</a> (15 RP)</dt>
	<dd>+2 Str, +2 Cha, -2 Con</dd>
	<dd>Double Walkers, often shortened to doubles, are related to doppelgangers and possess some of their ability to change their form and mimic other creatures.</dd>
	<dt><a href="races/redeemed.php">Redeemed</a> (15 RP)</dt>
	<dd>+2 Con, +2 Cha, -2 Str</dd>
	<dd>Redeemed are the result of what happens when an outsider remains on the material planes too long. They become mortal. In the case of the Redeemed, they were succubi and incubi, banished to the material planes after a failed coup who, after becoming mortal, were taken in by the goddess Sarenrae who gave them their name.</dd>
	<dt><a href="races/sculkers.php">Sculkers</a> (15 RP)</dt>
	<dd>+2 Dex, +2 Con</dd>
	<dd>Sculkers are a secretive race that live deep underground and sense motion and sound instead of possessing normal sight.</dd>
	<dt><a href="races/shapeshifters.php">Shape Shifters</a> (15 RP)</dt>
	<dd>+2 Str, +2 Cha, -4 Int</dd>
	<dd>The race simply known as "Shape Shifters" truly live up to their name. The result of experimentation to blend the various types of shape shifters, this race have no natural forms and instead are able to take on many different forms on a whim.</dd>
	<dt><a href="races/aniflors.php">Aniflors</a> (16 RP)</dt>
	<dd>+2 Con, +2 Wis, +2 Cha, -2 Str, -4 Int</dd>
	<dd>Aniflors are one of the plant races of the <?php echo quick_format('aa/tangled_grove|Tangled Grove/aa'); ?>. Aniflors are largely human-like in nature and are known for being versatile, able to adapt to whatever role needs filled in the community.</dd>
	<dt><a href="races/gumodeuza.php">Gumodeuza</a> (18 RP)</dt>
	<dd>+2 Any</dd>
	<dd>Gumodeuza are a race of native and human-like fey. Each member of their race is able to take on a specific animal form.</dd>
	<dt><a href="races/tehswin.php">Tehswin</a> (18 RP)</dt>
	<dd>+2 Dex, +2 Any, -2 Int</dd>
	<dd>Tehswin are the rare children of proteans and have inherited some limited ability to change their shape.</dd>
	<dt><a href="races/mandriff_small.php">Mandriff, Small</a> (19 RP)</dt>
	<dd>+2 str, +2 Wis, -2 Int</dd>
	<dd>Mandriff are a powerful race with the body and head of an animal but the torso of a human where the neck should be.</dd>
	<dt><a href="races/mandriff_medium.php">Mandriff, Medium</a> (19 RP)</dt>
	<dd>+2 str, +2 Wis, -2 Int</dd>
	<dd>Mandriff are a powerful race with the body and head of an animal but the torso of a human where the neck should be.</dd>
</dl>
<h3>21-30 Race Points</h3>
<dl>
	<dt><a href="races/redwoods_young.php">Redwoods, Young</a> (23 RP)</dt>
	<dd>+2 Con, +2 Wis, -2 Dex</dd>
	<dd>Redwoods are one of the plant races of the <?php echo quick_format('aa/tangled_grove|Tangled Grove/aa'); ?>. Redwoods often fill the role of leaders and act as repositories of knowledge.</dd>
	<dt><a href="races/nightshades.php">Nightshades</a> (24 RP)</dt>
	<dd>+2 Str, +2 Dex, -2 Cha</dd>
	<dd>Nightshades are one of the plant races of the <?php echo quick_format('aa/tangled_grove|Tangled Grove/aa'); ?>. Nightshades are natural assassins though they generally use these skills to hunt for food and to hide their grove from other races.</dd>
	<dt><a href="races/lorax.php">Lo'raks</a> (25 RP)</dt>
	<dd>+4 Str, +2 Dex, +2 Con, -2 Int</dd>
	<dd>Lo'raks are one of the plant races of the <?php echo quick_format('aa/tangled_grove|Tangled Grove/aa'); ?>. Lo'raks most often find themselves tasked with holding off the horde of the undead that threatens their border and are trained and grown to excel at it.</dd>
	<dt><a href="races/mandriff_large.php">Mandriff, Large</a> (26 RP)</dt>
	<dd>+4 Str, +2 Wis, -2 Dex, -2 Int</dd>
	<dd>Mandriff are a powerful race with the body and head of an animal but the torso of a human where the neck should be.</dd>
</dl>
<h3>31+ Race Points</h3>
<dl>
	<dt><a href="races/redeemed_converted.php">Redeemed, Converted</a> (36 RP)</dt>
	<dd>+2 Wis, +2 Cha, -2 Str</dd>
	<dd>Converted Redeemed are something of a subrace of Redeemed that have been blessed with angelic power from Sarenrae.</dd>
	<dt><a href="races/redeemed_full.php">Redeemed, Full Blooded</a> (36 RP)</dt>
	<dd>+4 Cha, +2 Con, -2 Str, -2 Wis</dd>
	<dd>Full Blooded Redeemed are those Redeemed whose demonic blood flows more strongly through their veins and still possess a number of their demonic abilities.</dd>
	<dt><a href="races/redwoods_ancient.php">Redwoods, Ancient</a> (41 RP)</dt>
	<dd>+2 Str, +2 Con, +2 Wis, -2 Dex</dd>
	<dd>Redwoods are one of the plant races of the <?php echo quick_format('aa/tangled_grove|Tangled Grove/aa'); ?>. Redwoods often fill the role of leaders and act as repositories of knowledge.</dd>
</dl>
<?php require $startDir.'pageEnd.php'; ?>