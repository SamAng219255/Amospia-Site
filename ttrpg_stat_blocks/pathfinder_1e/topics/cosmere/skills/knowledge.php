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
		'Knowledge (Int; Trained Only)',
		'skill',
		quick_array([
			'Put simply there are more things to know and more topics to study when the Cosmere is added into the equation. Anyone who spent time studying specific topics within the Cosmere can take ranks in additional knowledge skills and can gain access to Cosmere specific knowledge on a topic, though some information may be restricted based on the current scope of the adventure. Below are listed additional and modified fields of study.',
			'<ul>
				<li>Hemalurgy (Hemalurgic Spikes, Hemalurgic Constructs); see below</li>
				<li>Planes (Realmatic Theory, Shards)</li>
			</ul>',
			'bb/Check/bb: In addition to the normal types of knowledge checks, hemalurgic knowledge is all that is required to perform aa/hemalurgy|hemalurgy/aa.',
			'ii/Learn a Spike/ii: Whenever you put a rank into Knowledge (hemalurgy), you learn the necessary bind points to properly charge and apply a hemalurgic spike of an additional metal other than Atium or Lerasium. You can use an Atium spike in place of any type of spike you are already familiar with and you can use a Lerasium spike if you know how to use at least 1 other type of spike.',
			'bb/Special/bb: You cannot take ranks in Knowledge (hemalurgy) without having some prior knowledge of hemalurgy and then be reasonably able to have been instructed on, or to have researched or experimented, how to use the spike learned.'
		]),
		true
	);
	require $startDir.'pageEnd.php';
?>