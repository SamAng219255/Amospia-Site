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
	<dt><a href="races/gnoll.php">Gnoll</a> (6 RP)</dt>
	<dd>+2 Str, +2 Con, -4 Int</dd>
	<dd>WIP</dd>
	<dt><a href="races/kobold.php">Kobold</a> (7 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/arakkoa.php">Arakkoa</a> (8 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/drogbar.php">Drogbar</a> (8 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/goblin.php">Goblin</a> (8 RP)</dt>
	<dd>+2 Dex, +2 Int, -2 Str</dd>
	<dd>WIP</dd>
	<dt><a href="races/grell.php">Grell</a> (8 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/tuskarr.php">Tuskarr</a> (8 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Virmen</a> (8 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/belf.php">Blood Elf</a> (9 RP)</dt>
	<dd>+2 Dex, +2 Int, -2 Str</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Furbolg</a> (9 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/gnome.php">Gnome</a> (9 RP)</dt>
	<dd>-2 Str, +2 Dex, +2 Int</dd>
	<dd>Gnomes are brilliant and eccentric inventors, known for their tiny stature and exceptional engineering prowess.</dd>
	<dt><a href="races/virmen.php">High Elf</a> (9 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/human.php">Human</a> (9 RP)</dt>
	<dd>+2 Any</dd>
	<dd>Humans are a versatile and ambitious race, exceling at adapting to any situation and possessing a strong sense of justice and honor.</dd>
	<dt><a href="races/virmen.php">Murloc</a> (9 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/night_elf.php">Night Elf</a> (9 RP)</dt>
	<dd>-2 Str, +2 Dex, +2 Wis</dd>
	<dd>Night elves are an ancient and mystical race deeply intertwined with nature and its forces.</dd>
	<dt><a href="races/virmen.php">Sethrak</a> (9 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Sylvar</a> (9 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/tauren.php">Tauren</a> (9 RP)</dt>
	<dd>+2 Str, +2 Con, +2 Wis, -2 Int, -4 Dex</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Fungarian</a> (10 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Half-Human/Elf</a> (10 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Hozen</a> (10 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Jinyu</a> (10 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/orc.php">Orc</a> (10 RP)</dt>
	<dd>+2 Str, +2 Con, -2 Int</dd>
	<dd>WIP</dd>
	<dt><a href="races/pandaren.php">Pandaren</a> (10 RP)</dt>
	<dd>+2 Con, +2 Wis, -2 Dex</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Podling</a> (10 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Quilboar</a> (10 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Tortollan</a> (10 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/troll.php">Troll</a> (10 RP)</dt>
	<dd>+2 Dex, +2 Wis, -4 Int</dd>
	<dd>WIP</dd>
	<dt><a href="races/velf.php">Void Elf</a> (10 RP)</dt>
	<dd>+2 Dex, +2 Int, -2 Str</dd>
	<dd>WIP</dd>
</dl>
<h3>11-20 Race Points</h3>
<dl>
	<dt><a href="races/draenei.php">Draenei</a> (11 RP)</dt>
	<dd>+4 Str, +2 Int, +2 Wis, +2 Cha, -2 Dex</dd>
	<dd>Draenei are towering, blue-skinned beings with a regal bearing and distinctive features like hooves, horns, and glowing eyes, reflecting their noble and mystical heritage. They possess a powerful connection to the Light, granting them exceptional healing abilities and a deep-seated commitment to battling dark forces.</dd>
	<dt><a href="races/dwarf.php">Dwarf</a> (11 RP)</dt>
	<dd>+2 Str, -2 Dex, +2 Con</dd>
	<dd>Dwarves are a stalwart and adventurous race known for their enduring strength and fierce battle skills.</dd>
	<dt><a href="races/virmen.php">Faerie</a> (11 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/forsaken.php">Forsaken</a> (11 RP)</dt>
	<dd>+2 Con, +2 Cha, -4 Int</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Gorloc</a> (11 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Half-Orc/Draenei</a> (11 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/highmountain.php">Highmountain Tauren</a> (11 RP)</dt>
	<dd>+2 Str, +2 Con, +2 Wis, -2 Int, -4 Dex</dd>
	<dd>WIP</dd>
	<dt><a href="races/kultiran.php">Kul Tiran</a> (11 RP)</dt>
	<dd>+2 Any</dd>
	<dd>WIP</dd>
	<dt><a href="races/lightforged.php">Lightforged Draenei</a> (11 RP)</dt>
	<dd>+4 Str, +2 Int, +2 Wis, +2 Cha, -2 Dex</dd>
	<dd>WIP</dd>
	<dt><a href="races/maghar.php">Mag'har Orc</a> (11 RP)</dt>
	<dd>+2 Str, +2 Con, -2 Int</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Makrura</a> (11 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/mechagnome.php">Mechagnome</a> (11 RP)</dt>
	<dd>+2 Dex, +2 Int, -2 Str</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Mok'nathal</a> (11 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/vulpera.php">Vulpera</a> (11 RP)</dt>
	<dd>+2 Dex, +2 Wis, -2 Con</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Wolvar</a> (11 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/worgen.php">Worgen</a> (11 RP)</dt>
	<dd>+2 Str, +2 Dex, -4 Int</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Botani</a> (12 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/dark_iron.php">Dark Iron Dwarf</a> (12 RP)</dt>
	<dd>+2 Str, +2 Con, -2 Dex</dd>
	<dd>WIP</dd>
	<dt><a href="races/earthen.php">Earthen, Khaz Algari</a> (12 RP)</dt>
	<dd>+2 Str, +2 Con, -2 Dex</dd>
	<dd>WIP</dd>
	<dt><a href="races/nightborne.php">Nightborne</a> (12 RP)</dt>
	<dd>+2 Dex, +2 Int, -2 Str</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Ogre</a> (12 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Satyr</a> (12 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Sporeling</a> (12 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/zandalari.php">Zandalari Trolls</a> (12 RP)</dt>
	<dd>+2 Str, +2 Wis, -2 Cha</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Nerubian</a> (13 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Harpy</a> (14 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Saberon</a> (14 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Vorkai</a> (14 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Arakkoa, High</a> (15 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/dracthyr.php">Dracthyr</a> (15 RP)</dt>
	<dd>+2 Str, +2 Cha</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Centaur</a> (16 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
	<dt><a href="races/virmen.php">Vrykul</a> (17 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
</dl>
<h3>21-30 Race Points</h3>
<dl>
	<dt><a href="races/virmen.php">Ethereal</a> (23 RP)</dt>
	<dd>WIP</dd>
	<dd>WIP</dd>
</dl>
<?php require $startDir.'pageEnd.php'; ?>