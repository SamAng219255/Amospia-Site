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
		'The Ten Essences',
		'info',
		quick_array([
			'The Ten Essences is the traditional Vorin term associated with both Soulcasting properties and the Heralds.',
			'Each Essence is connected to a particular gemstone. In order to Soulcast an object into a new material, a Soulcaster must use the gemstone that corresponds to the new material\'s Essence.',
			'Modern Vorin teachings connect each Essence with a Herald and that Herald\'s divine attributes.',
			'Vorin doctrine also associates each Essence with a "Body Focus" related to the human body. It is believed that the concept is attributable to Vorin philosophy rather than any actual aspect of Rosharan Investiture. However, it may in fact have some significance. Body Focuses do not directly correspond to Hemalurgic bindpoints, but there is a loose relationship.'
		])
	);
?>
<table class="expand no-sort">
	<tr>
		<th rowspan="2" colspan="2">Number</th>
		<th rowspan="2">Gemstone</th>
		<th rowspan="2">Essence</th>
		<th rowspan="2">Body Focus</th>
		<th colspan="3">Soulcasting Properties</th>
		<th rowspan="2" colspan="2">Divine Attributes</th>
	</tr>
	<tr>
		<th>Primary Essence</th>
		<th>Secondary Essence</th>
		<th>Tertiary Essence</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Jes</td>
		<td>Sapphire</td>
		<td>Zephyr</td>
		<td>Inhalation</td>
		<td>Air (Standard For Area)</td>
		<td>Standard Atmospheric Gases</td>
		<td>Other Transparent Gases</td>
		<td>Protecting</td>
		<td>Leading</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Nan</td>
		<td>Smokestone</td>
		<td>Vapor</td>
		<td>Exhalation</td>
		<td>Smoke</td>
		<td>Fog</td>
		<td>Other Opaque Gases</td>
		<td>Just</td>
		<td>Confident</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Chach</td>
		<td>Ruby</td>
		<td>Spark</td>
		<td>The Soul</td>
		<td>Fire</td>
		<td></td>
		<td></td>
		<td>Brave</td>
		<td>Obedient</td>
	</tr>
	<tr>
		<td>4</td>
		<td>Vev</td>
		<td>Diamond</td>
		<td>Lucentia</td>
		<td>The Eyes</td>
		<td>Quartz</td>
		<td>Glass, Transparent Crystals</td>
		<td>Translucent Minerals</td>
		<td>Loving</td>
		<td>Healing</td>
	</tr>
	<tr>
		<td>5</td>
		<td>Palah</td>
		<td>Emerald</td>
		<td>Pulp</td>
		<td>The Hair</td>
		<td>Wood</td>
		<td>Leaves, Stems</td>
		<td>Fruit, Grains, Other Parts of Plants</td>
		<td>Learned</td>
		<td>Giving</td>
	</tr>
	<tr>
		<td>6</td>
		<td>Shash</td>
		<td>Garnet</td>
		<td>Blood</td>
		<td>The Blood</td>
		<td>Blood</td>
		<td>Water</td>
		<td>Other Non-Oil Liquids</td>
		<td>Creative</td>
		<td>Honest</td>
	</tr>
	<tr>
		<td>7</td>
		<td>Betab</td>
		<td>Zircon</td>
		<td>Tallow</td>
		<td>Oil</td>
		<td>Vegetable Oil</td>
		<td>Other Translucent Oils</td>
		<td>Other Oils</td>
		<td>Wise</td>
		<td>Careful</td>
	</tr>
	<tr>
		<td>8</td>
		<td>Kak</td>
		<td>Amethyst</td>
		<td>Foil</td>
		<td>The Nails</td>
		<td>Iron</td>
		<td>Base Metals (Lead, Tin, etc.)</td>
		<td>Other Metals (Copper, Silver, Gold, Platinum, Mithral, Adamantine), etc.</td>
		<td>Resolute</td>
		<td>Builder</td>
	</tr>
	<tr>
		<td>9</td>
		<td>Tanat</td>
		<td>Topaz</td>
		<td>Talus</td>
		<td>The Bone</td>
		<td>Stone (Standard For Area)</td>
		<td>Generic Rock</td>
		<td>Luxury Stone (Marble, Granite), Entirely Opaque Minerals</td>
		<td>Dependable</td>
		<td>Resourceful</td>
	</tr>
	<tr>
		<td>10</td>
		<td>Ishi</td>
		<td>Heliodor</td>
		<td>Sinew</td>
		<td>Flesh</td>
		<td>Skin-like Flesh</td>
		<td>Meaty Flesh</td>
		<td>Other Flesh and Organic Animal Materials</td>
		<td>Pious</td>
		<td>Guiding</td>
	</tr>
</table>
<?php require $startDir.'pageEnd.php'; ?>