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
<h2 class="sf">Races</h2>
<div class="table-wrapper"><table>
	<tr><th>Name</th><th>Hit Points</th><th>Str</th><th>Dex</th><th>Con</th><th>Int</th><th>Wis</th><th>Cha</th><th>Size</th><th>Type</th><th>Subtype(s)</th><th>Secondary Type</th><th>Category</th></tr>
	<tr><td><a href="races/zrillnek.php">Zrill'Nek</a></td><td>6</td><td>+4</td><td>-2</td><td>+2</td><td></td><td>-2</td><td></td><td>Medium</td><td>Monstrous Humanoid</td><td></td><td></td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/cephaloid.php">Cephaloid</a></td><td>4</td><td></td><td>+2</td><td></td><td>+2</td><td></td><td>-2</td><td>Small</td><td>Animal</td><td></td><td></td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/ashen.php">Ashen</a></td><td>4</td><td></td><td></td><td>+2</td><td>-2</td><td></td><td>+2</td><td>Medium</td><td>Outsider</td><td>elemental, fire</td><td>Humanoid</td><td>Amospian Space</td></tr>
	<tr><td><a href="races/enosrian.php">Enosrian</a></td><td>6</td><td>-2</td><td></td><td>+2</td><td></td><td></td><td>+2</td><td>Medium</td><td>Humanoid</td><td>enosrian</td><td>Outsider (chaotic, demon, evil)</td><td>Star Evolved</td></tr>
	<tr><td><a href="races/sleaj.php">Sleaj</a></td><td>6</td><td></td><td></td><td>+2</td><td></td><td></td><td></td><td>Medium</td><td>Ooze</td><td>shapechanger</td><td></td><td>Star Evolved</td></tr>
	<tr><td><a href="races/ranaver.php">Ranaver</a></td><td>2</td><td></td><td>+4</td><td></td><td></td><td></td><td>-2</td><td>Tiny</td><td>Humanoid</td><td>aquatic, ranaver</td><td></td><td>Star Evolved</td></tr>
	<tr><td><a href="races/mandriff.php">Mandriff</a></td><td>6</td><td>+4</td><td></td><td></td><td></td><td></td><td>-2</td><td>Small, Medium, or Large</td><td>Monstrous Humanoid</td><td></td><td></td><td>Star Evolved</td></tr>
	<tr><td><a href="races/sculker.php">Sculker</a></td><td>6</td><td></td><td>+2</td><td>+2</td><td></td><td></td><td>-2</td><td>Medium</td><td>Aberration</td><td></td><td>Construct (magical), Undead</td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/sparkling.php">Sparkling</a></td><td>4</td><td></td><td></td><td></td><td></td><td></td><td>+2</td><td>Medium</td><td>Humanoid</td><td>sparkling</td><td>Outsider (elemental, fire)</td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/duskling.php">Duskling</a></td><td>4</td><td></td><td></td><td></td><td></td><td></td><td>+2</td><td>Medium</td><td>Humanoid</td><td>duskling</td><td>Outsider (elemental)</td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/lhi.php">LHI</a></td><td>4</td><td>any</td><td>any</td><td>any</td><td>any</td><td>any</td><td>any</td><td>Medium</td><td>Humanoid</td><td>LHI, technological</td><td></td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/skadian.php">Skadian</a></td><td>4</td><td>any</td><td>any</td><td>any</td><td>any</td><td>any</td><td>any</td><td>Medium</td><td>Humanoid</td><td>elf, skadian</td><td></td><td>Star Evolved</td></tr>
	<tr><td><a href="races/narman.php">Narman (Celestial)</a></td><td>6</td><td>+2</td><td></td><td></td><td></td><td>-2</td><td>+2</td><td>Medium</td><td>Outsider</td><td>aquatic, native</td><td></td><td>Amospian Space</td></tr>
	<tr><td><a href="races/narman.php">Narman (Imperial)</a></td><td>6</td><td>+2</td><td></td><td></td><td>+2</td><td>-2</td><td></td><td>Medium</td><td>Outsider</td><td>aquatic, native</td><td></td><td>Amospian Space</td></tr>
	<tr><td><a href="races/narman.php">Narman (Void Seer)</a></td><td>6</td><td>+2</td><td></td><td></td><td></td><td>-2</td><td>+2</td><td>Medium</td><td>Outsider</td><td>aquatic, native</td><td></td><td>Amospian Space</td></tr>
	<tr><td><a href="races/werver.php">Werver</a></td><td>4</td><td></td><td>+2</td><td></td><td></td><td></td><td></td><td>Medium</td><td>Humanoid</td><td>werver</td><td></td><td>Star Evolved</td></tr>
	<tr><td><a href="races/aculetrix.php">Aculetrix</a></td><td>6</td><td>any</td><td>any</td><td>any</td><td>any</td><td>any</td><td>any</td><td>Medium</td><td>Monstrous Humanoid</td><td></td><td>Vermin</td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/lithofiran.php">Lithofiran</a></td><td>6</td><td>+2</td><td></td><td></td><td>+2</td><td></td><td>-2</td><td>Medium</td><td>Humanoid</td><td>lithofiran</td><td></td><td>Amospian Space</td></tr>
	<tr><td><a href="races/gumodeuza.php#block-Gumodeuza-(Medium-or-Large)">Gumodeuza (Medium and Large) </a></td><td>6</td><td>+2</td><td>-2</td><td></td><td></td><td>+2</td><td></td><td>Medium or Large</td><td>Fey</td><td></td><td></td><td>Star Evolved</td></tr>
	<tr><td><a href="races/gumodeuza.php#block-Gumodeuza-(Tiny-or-Small)">Gumodeuza (Tiny and Small) </a></td><td>4</td><td></td><td>+2</td><td></td><td></td><td>-2</td><td>+2</td><td>Tiny or Small</td><td>Fey</td><td></td><td></td><td>Star Evolved</td></tr>
	<tr><td><a href="races/bioghoul.php">Bio-Ghoul</a></td><td>4</td><td></td><td>+2</td><td>+2</td><td>-2</td><td></td><td></td><td>Medium</td><td>Humanoid</td><td>bio-ghoul</td><td></td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/vai.php">Vai</a></td><td>4</td><td></td><td></td><td>+2</td><td>+2</td><td></td><td>-2</td><td>Medium</td><td>Fey</td><td></td><td></td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/karkal.php">Karkal</a></td><td>4</td><td>+2</td><td>-2</td><td>+2</td><td></td><td></td><td></td><td>Small</td><td>Magical Beast</td><td>earth</td><td>Outsider (earth, elemental)</td><td>Elemental Worlds</td></tr>
	<tr><td><a href="races/esh.php">Esh</a></td><td>4</td><td>+2</td><td></td><td></td><td></td><td>-2</td><td>+2</td><td>Medium</td><td>Ooze</td><td>fire</td><td>Outsider (elemental, fire)</td><td>Elemental Worlds</td></tr>
	<tr><td><a href="races/aviran.php">Aviran</a></td><td>4</td><td>-2</td><td>+2</td><td></td><td></td><td>+2</td><td></td><td>Medium</td><td>Aberration</td><td>air</td><td>Outsider (air, elemental)</td><td>Elemental Worlds</td></tr>
	<tr><td><a href="races/marqua.php">Marqua</a></td><td>4</td><td>+2</td><td></td><td></td><td>+2</td><td></td><td>-2</td><td>Medium</td><td>Vermin</td><td>aquatic, water</td><td>Outsider (elemental, water)</td><td>Elemental Worlds</td></tr>
	<tr><td><a href="races/xempehl.php">Xempehl</a></td><td>4</td><td></td><td></td><td>+2</td><td>-2</td><td>+2</td><td></td><td>Medium</td><td>Plant</td><td></td><td>Fey</td><td>Elemental Worlds</td></tr>
	<tr><td><a href="races/wysp.php">Wysp</a></td><td>2</td><td>-2</td><td>+2</td><td></td><td></td><td></td><td>+2</td><td>Tiny</td><td>Outsider</td><td>elemental</td><td></td><td>Elemental Worlds</td></tr>
	<tr><td><a href="races/erulian.php">Erulian</a></td><td>2</td><td>-2</td><td></td><td></td><td></td><td>+2</td><td>+2</td><td>Medium</td><td>Humanoid</td><td>aquatic, erulian</td><td></td><td>Aquarian Space</td></tr>
	<tr><td><a href="races/krotite.php">Krotite</a></td><td>6</td><td>+2</td><td></td><td>+2</td><td></td><td></td><td>-2</td><td>Medium</td><td>Monstrous Humanoid</td><td>aquatic</td><td></td><td>Aquarian Space</td></tr>
	<tr><td><a href="races/mithalan.php">Mithalan</a></td><td>4</td><td>any</td><td>any</td><td>any</td><td>any</td><td>any</td><td>any</td><td>Medium</td><td>Humanoid</td><td>aquatic, mithalan</td><td></td><td>Aquarian Space</td></tr>
	<tr><td><a href="races/mithalan_bestial.php">Mithalan (Bestial)</a></td><td>6</td><td>+2</td><td>+2</td><td></td><td>-2</td><td></td><td></td><td>Medium</td><td>Monstrous Humanoid</td><td>aquatic, mithalan</td><td></td><td>Aquarian Space</td></tr>
	<tr><td><a href="races/druniad.php">Druniad</a></td><td>4</td><td>-2</td><td></td><td>+2</td><td></td><td>+2</td><td></td><td>Medium</td><td>Humanoid</td><td>aquatic, druniad</td><td>Plant</td><td>Aquarian Space</td></tr>
	<tr><td><a href="races/lumerean.php">Lumerean</a></td><td>4</td><td>-2</td><td></td><td>+2</td><td>+2</td><td></td><td></td><td>Medium</td><td>Humanoid</td><td>aquatic, lumerean</td><td></td><td>Aquarian Space</td></tr>
	<tr><td><a href="races/arnassi.php">Arnassi</a></td><td>4</td><td>+2</td><td>+2</td><td></td><td></td><td></td><td>-2</td><td>Medium</td><td>Humanoid</td><td>arnassi, aquatic</td><td></td><td>Aquarian Space</td></tr>
	<tr><td><a href="races/shrinalla.php">Shrinalla</a></td><td>4</td><td>-2</td><td>+2</td><td></td><td></td><td></td><td>+2</td><td>Medium</td><td>Outsider</td><td>native</td><td></td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/chromaceph.php">Chromaceph</a></td><td>2</td><td></td><td>+2</td><td></td><td></td><td>+2</td><td>-2</td><td>Small</td><td>Magical Beast</td><td></td><td></td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/iaii.php">I'ai'i</a></td><td>2</td><td></td><td>+2</td><td>-2</td><td></td><td>+2</td><td></td><td>Medium</td><td>Monstrous Humanoid</td><td></td><td></td><td>Amospian Space</td></tr>
	<tr><td><a href="races/quattin_vallorica.php">Quattin Vallorica</a></td><td>2</td><td>-2</td><td>+2</td><td></td><td></td><td>+2</td><td></td><td>Medium</td><td>Humanoid</td><td>quattin vallorica</td><td></td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/necrian.php">Necrian</a></td><td>4</td><td>any</td><td>any</td><td>any</td><td>any</td><td>any</td><td>any</td><td>Medium</td><td>Humanoid</td><td>necrian</td><td>Undead</td><td>Amospian Space</td></tr>
	<tr><td><a href="races/kohnx.php">Kohnx</a></td><td>4</td><td></td><td></td><td></td><td>any</td><td>any</td><td>any</td><td>Medium</td><td>Humanoid</td><td>kohnx</td><td></td><td>Asauran Aliens</td></tr>
	<tr><td><a href="races/bellar.php">Bellar</a></td><td>6</td><td>+2</td><td></td><td></td><td></td><td>-2</td><td>+2</td><td>Large</td><td>Outsider</td><td>demon, native</td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/yeereckuul.php">Yeereckuul</a></td><td>4</td><td>-2</td><td>+2</td><td></td><td>+2</td><td></td><td></td><td>Medium</td><td>Humanoid</td><td>yeereckuul, human</td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/gheltom.php">Gheltom</a></td><td>6</td><td></td><td></td><td></td><td>+2</td><td>+2</td><td>-2</td><td>Large</td><td>Monstrous Humanoid</td><td>extraplanar</td><td>Outsider (chaotic, demon, evil, native)</td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/drudger.php">Drudger</a></td><td>2</td><td>+2</td><td>-2</td><td>+2</td><td></td><td></td><td></td><td>Small</td><td>Humanoid</td><td>drudger</td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/foarg.php">Foarg</a></td><td>4</td><td>+2</td><td></td><td>+2</td><td></td><td>-2</td><td></td><td>Medium</td><td>Humanoid</td><td>foarg</td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/bliteg.php">Bliteg</a></td><td>4</td><td></td><td>+2</td><td></td><td></td><td>-2</td><td>+2</td><td>Medium</td><td>Monstrous Humanoid</td><td></td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/cedit.php">Cedit</a></td><td>4</td><td>+2</td><td>+2</td><td></td><td>-2</td><td></td><td></td><td>Medium</td><td>Humanoid</td><td>aquatic, cedit</td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/yarallian.php">Yarallian</a></td><td>4</td><td>+2</td><td></td><td></td><td>+2</td><td></td><td>-2</td><td>Medium</td><td>Construct</td><td>magical, yarallian</td><td>Construct (technological)</td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/zelerrian.php">Zelerrian</a></td><td>4</td><td>+2</td><td></td><td></td><td>-2</td><td>+2</td><td></td><td>Large</td><td>Construct</td><td>magical, zelerrian</td><td>Construct (technological)</td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/lhaksharian.php">Lhaksharian</a></td><td>4</td><td>+2</td><td></td><td></td><td></td><td>+2</td><td>-2</td><td>Medium</td><td>Construct</td><td>magical, lhaksharian</td><td>Construct (technological)</td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/vacnnuullid.php">Vacnnuullid</a></td><td>2</td><td></td><td>+2</td><td></td><td></td><td>-2</td><td>+2</td><td>Tiny</td><td>Magical Beast</td><td></td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/juhzabor.php">Juhzabor</a></td><td>4</td><td>+2</td><td></td><td></td><td></td><td>-2</td><td>+2</td><td>Medium</td><td>Monstrous Humanoid</td><td></td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/imp.php">Imp</a></td><td>2</td><td>-2</td><td>+2</td><td></td><td></td><td></td><td>+2</td><td>Tiny</td><td>Monstrous Humanoid</td><td></td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/pistophylan.php">Pistophylan</a></td><td>4</td><td>-2</td><td></td><td></td><td>+2</td><td></td><td>+2</td><td>Medium</td><td>Humanoid</td><td>pistophylan</td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/susprax.php">Susprax</a></td><td>4</td><td>+2</td><td>-2</td><td>+2</td><td></td><td></td><td></td><td>Medium</td><td>Humanoid</td><td>necrospatium</td><td>Undead</td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/velkris.php">Velkris</a></td><td>6</td><td></td><td>+2</td><td>+2</td><td></td><td>-2</td><td></td><td>Medium</td><td>Humanoid</td><td>necrospatium</td><td>Undead</td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/malvian.php">Malvian</a></td><td>4</td><td>+2</td><td></td><td>+2</td><td>-2</td><td></td><td></td><td>Medium</td><td>Humanoid</td><td>necrospatium</td><td>Undead</td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/hylagir.php">Hylagir</a></td><td>4</td><td>+2</td><td></td><td></td><td>-2</td><td>+2</td><td></td><td>Medium</td><td>Humanoid</td><td>sowanaz</td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/numerite.php">Numerite</a></td><td>6</td><td>+2</td><td></td><td>-2</td><td>+4</td><td></td><td>-2</td><td>Medium</td><td>Humanoid</td><td>numerite</td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/cyralien.php">Cyralien</a></td><td>2</td><td>-4</td><td>+2</td><td></td><td></td><td>+2</td><td>+2</td><td>Tiny</td><td>Humanoid</td><td>cyralien</td><td>Fey</td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/ventruah.php">Ventruah</a></td><td>4</td><td></td><td>+2</td><td>+2</td><td>-2</td><td></td><td></td><td>Medium</td><td>Humanoid</td><td>ventruah</td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/ignesh.php">Ignesh</a></td><td>6</td><td>+2</td><td></td><td></td><td>-2</td><td></td><td>+2</td><td>Medium</td><td>Humanoid</td><td>ignesh</td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/enrald.php">Enrald</a></td><td>2</td><td>-2</td><td>+2</td><td></td><td></td><td>+2</td><td></td><td>Tiny</td><td>Aberration</td><td></td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/kadurote.php">Kadurote</a></td><td>4</td><td></td><td>+2</td><td>-2</td><td></td><td>+2</td><td></td><td>Large</td><td>Aberration</td><td></td><td></td><td>Planar Legacies</td></tr>
	<tr><td><a href="races/klevine.php">Klevine</a></td><td>4</td><td>+2</td><td></td><td></td><td>-2</td><td>+2</td><td></td><td>Medium</td><td>Humanoid</td><td>klevine</td><td></td><td>Planar Legacies</td></tr>
</table></div>
<?php require $startDir.'pageEnd.php'; ?>