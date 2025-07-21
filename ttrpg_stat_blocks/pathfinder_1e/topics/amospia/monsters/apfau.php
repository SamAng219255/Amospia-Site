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
    monsterBlockAuto(
        'Apfau',// name
        false,// alt name
        'This large humanoid entity resembles a wild boar with coarse black hair that covers their body and as well as their massive wings.',// lore text
        8,// CR
        false,// MR
        false,// Custom XP
        false,// Race
        [
            'fighter' => 9
        ],// Class
        [
            'alignment' => 'N',
            'altruism' => 0,
            'humility' => 0,
            'purity' => 0,
            'honesty' => 1,
            'loyalty' => 1,
            'law' => 0,
            'individualism' => 1,
            'knowledge' => 1,
            'work' => 2
        ],// Alignment
        'Large',// Size
        'outsider (extraplanar, narubarc)',// Type
        0,// Misc Initiative Mod
        false,// Mythic Initiative
        'darkvision 120 ft.',// Senses
        0,// Misc Perception Mod
        'power 30 ft. (DC 18)',// Aura
        [
            'armor' => +10,
            'dodge' => +1
        ],// Misc AC bonuses
        [10,10,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
        [
            [
                'good' => true,// Fortitude
                'mod' => 1
            ],
            [
                'good' => false,// Reflex
                'mod' => 0
            ],
            [
                'good' => false,// Will
                'mod' => 2,
                'cases' => [
                    'mind-affecting' => +4
                ]
            ]
        ],// Fortitude/Reflex/Will save good/bad and misc bonuses
        'bravery +2; bb/DR/bb 10/—; bb/Immune/bb death effects, fire, fear effects; bb/Resistance/bb acid 10, cold 10, sonic 10',// Defensive Abilities
        '',// Weaknesses
        '30 ft., fly 40 ft. (average)',// Speed
        [
            [
                'type' => 'Melee',
                'list' => [
                    [
                        'name' => 'greataxe',
                        'mod' => +2,
                        'stat' => 'str',
                        'damage' => '3d6+17/19-20/x3',
                        'iterative' => 0
                    ]
                ]
            ],
            [
                'type' => 'Ranged',
                'list' => [
                    [
                        'name' => 'light crossbow',
                        'mod' => +1,
                        'stat' => 'dex',
                        'damage' => '2d8/19-20'
                    ]
                ]
            ]
        ],// Attacks
        10,// Reach
        'weapon training (axes +2, crossbows +1)',// Special Attacks
        [],// Spell-like Abilities
        [],// Spell Casting
        false,// Spell Casting Note
        [
            'str' => 18,
            'dex' => 12,
            'con' => 12,
            'int' => 8,
            'wis' => 16,
            'cha' => 10
        ],// Stats
        1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
        [
            'sunder' => +4
        ],// CMB misc bonus and special cases
        [
            'sunder' => +4
        ],// CMD misc bonus and special cases
        [
            'Cleave',
            'Dodge',
            'Great Cleave',
            'Greater Weapon Specialization (Greataxe)',
            'Improved Critical (Greataxe)',
            'Improved Sunder',
            'Power Attack',
            'Toughness',
            'Vital Strike',
            'Weapon Focus (Greataxe)',
            'Weapon Specialization (Greataxe)'
        ],//Feats
        [
            [
                'skill' => 'Fly',
                'stat' => 'dex',
                'bonus' => -1
            ],
            [
                'skill' => 'Knowledge (arcana)',
                'stat' => 'int',
                'bonus' => +4
            ],
            [
                'skill' => 'Perception',
                'stat' => 'dex',
                'bonus' => +10
            ],
            [
                'skill' => 'Sense Motive',
                'stat' => 'dex',
                'bonus' => +4
            ],
            [
                'skill' => 'Use Magic Device',
                'stat' => 'cha',
                'bonus' => +4
            ]
        ],// Skills
        'Abyssal, Celestial, Common, Draconic, Ignan, Infernal, Piglin, Necril',// Languages
        'armor training 2',// Special Qualities
        'Any',// Environment
        'solitary, pair, patrol (3–5), or squad (6–10)',// Organization
        'None',// Treasure
        [],// Special Abilities
        [
            'Apfaus are the least of the narubarcs but, like all servants of Arcane, they possess great potential for growth. Most undergo rigorous training that makes them true threats indeed. Apfaus resemble anthropomorphic boars with coarse short black hair and stubby fingers and toes. They also have a pair of large wings made of stretched skin and covered in the same coarse black hair. Most stand around 9 feet tall.'
        ],// Description
        [
            'Gear' => [
                'netherite great axe',
                'ii/+1 full plate/ii',
                'light crossbow',
                'crossbows bolts (20)'
            ]
        ]//Gear
    );
    require $startDir.'pageEnd.php';
?>