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
<title>Minecraft</title>
<?php 
	block(
		'Minecraft',
		'info',
		quick_array(
			'Minecraft is blocky sandbox survival game originally created by Notch and is owned by the company Mojang Studios who in turn has been bought out by Microsoft. The game is divided into three versions, the orignal Java Edition, the newer Bedrock Edition, and the most recent Education Edition. I will not be including any features exclusive to the education edition as they are meant to bring real world concepts into minecraft to aid education and are far from compatible with most fantasy settings and I lack access to it making content based on it near impossible. While the other two versions are largely in feature parity, they are not quite the same. As I began playing nearer the beginning of the game I have become most accustomed to the older Java Edition and so that is the version I defer to when discrepancies arise. There is, in addition, a number of spin-off games including Minecraft Story Mode, Minecraft Earth, and Minecraft Dungeons. Each of these games have sought to expand the world and lore in their own ways however I do not currently intend to include any features exclusive to these versions because much of the lore of the world must be adapted to accustom these additions with the excpetions of additions irrelevant to an adventuring setting such as a muddy variant of the pig. There is also content that had the possibility of being added during various community votes that lost out to features that were in turn included. While I intend to add some of this content it may prove a great challenge to add most of it as it hasn\'t yet been fully designed and flushed out, or if it has that information is unavailable.
			While many of Minecraft\'s mechanics focus on survival and tech progression through acquiring materials to craft better equipment, the portions of the game that I have translated over primarily focus on the combat and exploration portions of the game as that is what Pathfinder 1st Edition (PF1E) is most compatible with. I have included all of the creatures in the game capable of combat and the three races of npcs that can be found. I have created translations of all of the game\'s enchantments hat can be converted to PF1E. I have also included a list of alchemical items that mirror the effects of Minecraft\'s potion system and several special materials to compensate for exotic tool materials found in Minecraft. Explanations for how the materials make sense and what they do are included with their descriptions.
			Minecraft\'s most well known special materials for making tools is diamond and try as I might I cannot imagine an actual sword made of solid diamond nor how such a thing would be manufactured. As such, given the nature of diamond tools and the fact that diamonds etymologically owe their name to adamantine, in my default setting for these rules adamantine will replace diamonds as a material. If you wish to include diamond tools I reccomend using the same statistics as adamaentine.
			bb/TODO:/bb
			Wither
			Ender Dragon
			Soul Torch/Lantern'
		)
	);
	require $startDir.'pageEnd.php';
?>