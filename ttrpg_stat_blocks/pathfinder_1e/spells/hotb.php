<?php 
    $startDir='';
    for($i=0; $i<5; $i++) {
        if(file_exists($startDir.'pageStart.php')) {
            require $startDir.'pageStart.php';
            break;
        }
        else {
            $startDir='../'.$startDir;
        }
    }
    spellBlockAuto(
        'Halls of the Bard',// $name,
        'Divination',// $school,
        []'',// $descriptors=[],
        [
            'bard' => 5,
            'sorcerer' => 5,
            'wizard' => 5
        ],// $levels=['wizard'=>0],
        [
            'V'=>1,
            'S'=>1,
            'M'=>1,
            'F'=>0,
            'DF'=>0
        ],// $components=['V'=>0,'S'=>0,'M'=>0,'F'=>0,'DF'=>0],
        '1 full-round action',// $time='1 standard action',
        'personal',// $range='Close',
        'self',// $target=false,
        false,// $effect=false,
        false,// $area=false,
        '1 round/level (D)',// $duration='instantaneous',
        false,// $save='none',
        false,// $sr=false,
        [
            'Your mind is carried away into a realm of bardic poetry and storytelling. You can still see and hear your surroundings but you are considered flat-footed and take a -5 penalty on all Perception checks.',
            'You can search these tales of yore as part of making a check to recall knowledge. This grants a +10 circumstance bonus to the check and allows you to use 15 instead when taking a 10 and allows you to take a 10 even if rushed or threatened.'
        ] // $desc='' 
    );
    require $startDir.'pageEnd.php';
?>