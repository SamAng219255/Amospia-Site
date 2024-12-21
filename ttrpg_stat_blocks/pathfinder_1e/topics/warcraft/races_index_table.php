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
		return 2 * comp(a.children[1].innerText.toLowerCase(),b.children[1].innerText.toLowerCase()) + 
			comp(a.children[0].innerText.toLowerCase(),b.children[0].innerText.toLowerCase());
	};
</script>
<h2>Races</h2>
<table>
	<tr><th>Name</th><th>RP</th><th>Str</th><th>Dex</th><th>Con</th><th>Int</th><th>Wis</th><th>Cha</th><th>Size Str</th><th>Size Dex</th><th>Type</th><th>Subtypes</th></tr>
	<tr><td><a href="races/human.php">Human</a></td><td>9</td><td colspan="6">+2 to one score</td><td>—</td><td>—</td><td>Humanoid</td><td>human</td></tr>
	<tr><td><a href="races/dwarf.php">Dwarf</a></td><td>11</td><td>+2</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>dwarf</td></tr>
	<tr><td><a href="races/nelf.php">Night Elf</a></td><td>9</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>elf</td></tr>
	<tr><td><a href="races/gnome.php">Gnome</a></td><td>9</td><td>-2</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>gnome</td></tr>
	<tr><td><a href="races/draenei.php">Draenei</a></td><td>11</td><td>+4</td><td>-2</td><td>—</td><td>+2</td><td>+2</td><td>+2</td><td>—</td><td>—</td><td>Humanoid</td><td>draenei</td></tr>
	<tr><td><a href="races/worgen.php">Worgen</a></td><td>11</td><td>+2</td><td>+2</td><td>—</td><td>-4</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>human</td></tr>
	<tr><td><a href="races/orc.php">Orc</a></td><td>10</td><td>+2</td><td>—</td><td>+2</td><td>-2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>orc</td></tr>
	<tr><td><a href="races/forsaken.php">Forsaken</a></td><td>11</td><td>—</td><td>—</td><td>+2</td><td>-4</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>Humanoid</td><td>human</td></tr>
	<tr><td><a href="races/tauren.php">Tauren</a></td><td>9</td><td>+2</td><td>-4</td><td>+2</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>tauren</td></tr>
	<tr><td><a href="races/troll.php">Troll</a></td><td>10</td><td>—</td><td>+2</td><td>—</td><td>-4</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>troll</td></tr>
	<tr><td><a href="races/belf.php">Blood Elf</a></td><td>9</td><td>-2</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>elf</td></tr>
	<tr><td><a href="races/goblin.php">Goblin</a></td><td>8</td><td>-2</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>goblin</td></tr>
	<tr><td><a href="races/pandaren.php">Pandaren</a></td><td>10</td><td>—</td><td>-2</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>pandaren</td></tr>
	<tr><td><a href="races/dracthyr.php">Dracthyr</a></td><td>15</td><td>+2</td><td>-2</td><td>—</td><td>—</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>dracthyr</td></tr>
	<tr><td><a href="races/velf.php">Void Elf</a></td><td>10</td><td>-2</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>elf</td></tr>
	<tr><td><a href="races/lightforged.php">Lightforged Draenei</a></td><td>11</td><td>+4</td><td>-2</td><td>—</td><td>+2</td><td>+2</td><td>+2</td><td>—</td><td>—</td><td>Humanoid</td><td>draenei</td></tr>
	<tr><td><a href="races/dark_iron.php">Dark Iron Dwarf</a></td><td>11</td><td>+2</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>dwarf</td></tr>
	<tr><td><a href="races/kultiran.php">Kul Tiran</a></td><td>11</td><td colspan="6">+2 to one score</td><td>—</td><td>—</td><td>Humanoid</td><td>human</td></tr>
	<tr><td><a href="races/mechagnome.php">Mechagnome</a></td><td>11</td><td>-2</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>gnome, half-construct</td></tr>
	<tr><td><a href="races/nightborne.php">Nightborne</a></td><td>12</td><td>-2</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>elf</td></tr>
	<tr><td><a href="races/highmountain.php">Highmountain Tauren</a></td><td>11</td><td>+2</td><td>-4</td><td>+2</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>tauren</td></tr>
	<tr><td><a href="races/maghar.php">Mag'har Orc</a></td><td>11</td><td>+2</td><td>—</td><td>+2</td><td>-2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>orc</td></tr>
	<tr><td><a href="races/zandalari.php">Zandalari Trolls</a></td><td>12</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>+2</td><td>-2</td><td>—</td><td>—</td><td>Humanoid</td><td>troll</td></tr>
	<tr><td><a href="races/vulpera.php">Vulpera</a></td><td>11</td><td>—</td><td>+2</td><td>-2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>vulpera</td></tr>
	<tr><td><a href="races/murloc.php">Murloc</a></td><td>9</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>aquatic, amphibious, murloc</td></tr>
	<tr><td><a href="races/kobold.php">Kobold</a></td><td>7</td><td>-2</td><td>+2</td><td>—</td><td>-4</td><td>—</td><td>-2</td><td>—</td><td>—</td><td>Humanoid</td><td>kobold</td></tr>
	<tr><td><a href="races/nerubian.php">Nerubian</a></td><td>13</td><td>—</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>-2</td><td>—</td><td>—</td><td>Aberration</td><td>aqir</td></tr>
	<tr><td><a href="races/high_arakkoa.php">Arakkoa, High</a></td><td>15</td><td>—</td><td>+2</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>arakkoa</td></tr>
	<tr><td><a href="races/arakkoa.php">Arakkoa</a></td><td>8</td><td>—</td><td>+2</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>arakkoa</td></tr>
	<tr><td><a href="races/centaur.php">Centaur</a></td><td>16</td><td>—</td><td>+4</td><td>—</td><td>-2</td><td>-2</td><td>—</td><td>+2</td><td>-2</td><td>Monstrous Humanoid</td><td>centaur</td></tr>
	<tr><td><a href="races/harpy.php">Harpy</a></td><td>14</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>+2</td><td>-4</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>harpy</td></tr>
	<tr><td><a href="races/furbolg.php">Furbolg</a></td><td>9</td><td>+2</td><td>—</td><td>—</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>furbolg</td></tr>
	<tr><td><a href="races/ogre.php">Ogre</a></td><td>12</td><td>+4</td><td>—</td><td>—</td><td>-4</td><td>-2</td><td>-2</td><td>+2</td><td>-2</td><td>Humanoid</td><td>giant, ogre</td></tr>
	<tr><td><a href="races/helf.php">High Elf</a></td><td>9</td><td>-2</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>elf</td></tr>
	<tr><td><a href="races/drogbar.php">Drogbar</a></td><td>8</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>+2</td><td>-2</td><td>—</td><td>—</td><td>Humanoid</td><td>drogbar</td></tr>
	<tr><td><a href="races/sylvar.php">Sylvar</a></td><td>10</td><td>+2</td><td>—</td><td>-2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Fey</td><td>night fae</td></tr>
	<tr><td><a href="races/fungarian.php">Fungarian</a></td><td>10</td><td>+2</td><td>—</td><td>—</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>fungal</td></tr>
	<tr><td><a href="races/podling.php">Podling</a></td><td>10</td><td>+2</td><td>—</td><td>—</td><td>-4</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>Plant</td><td></td></tr>
	<tr><td><a href="races/sporeling.php">Sporeling</a></td><td>12</td><td>-2</td><td>—</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Plant</td><td></td></tr>
	<tr><td><a href="races/grell.php">Grell</a></td><td>8</td><td>-2</td><td>+4</td><td>—</td><td>-2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Fey</td><td></td></tr>
	<tr><td><a href="races/satyr.php">Satyr</a></td><td>12</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>elf</td></tr>
	<tr><td><a href="races/mok_nathal.php">Mok'nathal</a></td><td>11</td><td>+4</td><td>-2</td><td>—</td><td>-2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>ogre, orc</td></tr>
	<tr><td><a href="races/half_orc.php">Oshu'nei</a></td><td>11</td><td>+2</td><td>—</td><td>+2</td><td>-2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>draenei, orc</td></tr>
	<tr><td><a href="races/half_elf.php">Half-Elf</a></td><td>9</td><td>-2</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>elf, human</td></tr>
	<tr><td><a href="races/botani.php">Botani</a></td><td>12</td><td>—</td><td>+2</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Plant</td><td></td></tr>
	<tr><td><a href="races/quilboar.php">Quilboar</a></td><td>10</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>-2</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>quilboar</td></tr>
	<tr><td><a href="races/gnoll.php">Gnoll</a></td><td>6</td><td>+2</td><td>—</td><td>+2</td><td>-4</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>gnoll</td></tr>
	<tr><td><a href="races/ethereal.php">Ethereal</a></td><td>23</td><td>—</td><td>+2</td><td>-4</td><td>+4</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Outsider</td><td>native</td></tr>
	<tr><td><a href="races/makrura.php">Makrura</a></td><td>11</td><td>+2</td><td>—</td><td>—</td><td>-4</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>aquatic, amphibious, makrura</td></tr>
	<tr><td><a href="races/saberon.php">Saberon</a></td><td>14</td><td>+4</td><td>—</td><td>—</td><td>-2</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>saberon</td></tr>
	<tr><td><a href="races/virmen.php">Virmen</a></td><td>8</td><td>—</td><td>+2</td><td>—</td><td>-4</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>virmen</td></tr>
	<tr><td><a href="races/faerie.php">Faerie</a></td><td>12</td><td>—</td><td>+2</td><td>-2</td><td>—</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>Fey</td><td>night fae</td></tr>
	<tr><td><a href="races/vorkai.php">Vorkai</a></td><td>15</td><td>+4</td><td>-2</td><td>—</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Fey</td><td>night fae</td></tr>
	<tr><td><a href="races/hozen.php">Hozen</a></td><td>10</td><td>—</td><td>+4</td><td>—</td><td>-2</td><td>-2</td><td>-2</td><td>—</td><td>—</td><td>Humanoid</td><td>hozen</td></tr>
	<tr><td><a href="races/jinyu.php">Jinyu</a></td><td>10</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>+2</td><td>-2</td><td>—</td><td>—</td><td>Humanoid</td><td>aquatic, amphibious, jinyu</td></tr>
	<tr><td><a href="races/vrykul.php">Vrykul</a></td><td>17</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>-2</td><td>+2</td><td>-2</td><td>Humanoid</td><td>giant, vrykul</td></tr>
	<tr><td><a href="races/tuskarr.php">Tuskarr</a></td><td>8</td><td>—</td><td>-2</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>kalu'ak</td></tr>
	<tr><td><a href="races/wolvar.php">Wolvar</a></td><td>11</td><td>+4</td><td>—</td><td>—</td><td>-4</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>wolvar</td></tr>
	<tr><td><a href="races/gorloc.php">Gorloc</a></td><td>11</td><td>+2</td><td>—</td><td>+2</td><td>-2</td><td>—</td><td>—</td><td>—</td><td>—</td><td>Monstrous Humanoid</td><td>murloc</td></tr>
	<tr><td><a href="races/tortollan.php">Tortollan</a></td><td>10</td><td>—</td><td>-4</td><td>+2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>tortollan</td></tr>
	<tr><td><a href="races/sethrak.php">Sethrak</a></td><td>9</td><td>—</td><td>+2</td><td>-2</td><td>—</td><td>+2</td><td>—</td><td>—</td><td>—</td><td>Humanoid</td><td>sethrak</td></tr>
</table>
<?php require $startDir.'pageEnd.php'; ?>