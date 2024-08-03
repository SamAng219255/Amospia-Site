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
		'Transmogrification',
		'rule',
		quick_array([
			'Transmogrification is a subschool of Transmutation.',
			'Transmogrification spells function similarly to polymorph spells except instead of simply superficially granting the target a form with a limited set of abilities possessed by the form, Transmogrification spells truly transform the target into a different creature. This grants all the effects of a similar polymorph spell except the target\'s type may be changed as well and the target is assumed to acquire all types, subtypes, abilities, and statistics of their new form, replacing those of their original form, unless specified otherwise. They do not gain class levels or the effects of class levels possessed by their new form and they do not lose changes from any class levels they may possess unless specified otherwise.',
			'Transmogrification spells that transform the target into a creature with one or more alignment subtypes gain the descriptors matching the subtypes.',
			'Transmogrification spells may specify they replace, improve, or reduce the target\'s mental abilities with or to those of their new form. If it says it replaces their mental abilities, their mental ability scores are treated as being equal to those of the form they take. If it states it improves the target\'s mental abilities, their mental ability scores are increased to those of their new form only if they are higher for that score. Otherwise they are unchanged. If it states it reduces the target\'s mental abilities, their mental ability scores are reduced to those of their new form only if they are lower for that score. Otherwise they are unchanged.',
			'The target\'s new ability scores may limit access to spellcasting, feats, and other abilities. A creature with an intelligence of 2 or less or that is mindless does not understand language.',
			'The target\'s alignment does not change, but if they become mindless or their intelligence is reduced to 2 or less, their alignment does not register to magic as anything other than true neutral nor do they possess the intelligence to act on their alignment.',
			'If the target becomes an evil undead, they must make a Will save against the DC of the spell or else their alignment shifts one step closer to evil as thoughts and desires invade their mind. Whether or not they make the save, they do not make another save from being undead for the next 24 hours. After which, if they are still an undead, they must immediately make another save. Similarly, if the target gains an alignment subtype, they must make a Will save every hour or else their alignment shifts one step closer to their subtype. They must make a separate save for each alignment subtype they possess. If their alignment does not match their subtypes, they receive a negative level that cannot be removed for each subtype that does not match.',
			'If a transmogrification spell has a duration of instantaneous, the result is permanent, does not end, persists in regions of no magic, and cannot be dispelled, becoming the target\'s natural form.',
			'A creature can only be under the effect of one transmogrification effect at a time. If a new one is cast on a creature they can choose whether to allow it to replace the old effect or to keep the original effect. This does not apply to instantaneous transmogrification effects. If a creature under the effect of a transmogrification effect comes under the effect of a polymorph effect, the polymorph effect applies on top of the transmogrification effect. If a creature under the effect of a polymorph effect comes under the effect of a transmogrification, the polymorph effect immediately ends with the exception of ii/baleful polymorph/ii and similar spells.'
		])
	);
	require $startDir.'pageEnd.php';
?>