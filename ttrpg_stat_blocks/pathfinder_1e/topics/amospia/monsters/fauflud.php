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
        'Fauflud',// name
        false,// alt name
        'A cat-headed figure slinks from the shadows, a large pair of both owl and bat wings lifting off its back.',// lore text
        15,// CR
        false,// MR
        false,// Custom XP
        false,// Race
        [],// Class
        [
            'alignment' => 'N',
            'altruism' => 0,
            'humility' => 0,
            'purity' => 0,
            'honesty' => 1,
            'loyalty' => 1,
            'law' => 0,
            'individualism' => 2,
            'knowledge' => 1,
            'work' => 1
        ],// Alignment
        'Large',// Size
        'outsider (extraplanar, narubarc)',// Type
        0,// Misc Initiative Mod
        false,// Mythic Initiative
        'darkvision 120 ft.',// Senses
        0,// Misc Perception Mod
        'power 80 ft. (DC 31)',// Aura
        [
            'dodge' => +1,
            'natural' => +10
        ],// Misc AC bonuses
        [20,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
        [
            [
                'good' => false,// Fortitude
                'mod' => 0
            ],
            [
                'good' => true,// Reflex
                'mod' => 0
            ],
            [
                'good' => true,// Will
                'mod' => 0,
                'cases' => [
                    'mind-affecting' => +4
                ]
            ]
        ],// Fortitude/Reflex/Will save good/bad and misc bonuses
        'evasion, uncanny dodge; bb/DR/bb 10/—; bb/Immune/bb death effects, fire, fear effects; bb/Resistance/bb acid 10, cold 10, sonic 10; bb/SR/bb 26',// Defensive Abilities
        '',// Weaknesses
        '30 ft., fly 80 ft. (good)',// Speed
        [
            [
                'type' => 'Melee',
                'list' => [
                    [
                        'name' => 'rapier',
                        'mod' => -6,
                        'stat' => 'dex',
                        'damage' => '2d6+20/18-20 plus energy drain',
                        'iterative' => 0
                    ]
                ]
            ]
        ],// Attacks
        10,// Reach
        'energy drain (2 levels, DC 25), finesse training, sneak attack (+10d6)',// Special Attacks
        [
            'level' => 14,
            'conc' => 0,
            'spells' => [
                [
                    'perday' => 'constant',
                    'list' => [
                        'mind blank'
                    ]
                ],
                [
                    'perday' => 'at-will',
                    'list' => [
                        'invisibility',
                        'plane shift'
                    ]
                ]
            ]
        ],// Spell-like Abilities
        [],// Spell Casting
        false,// Spell Casting Note
        [
            'str' => 16,
            'dex' => 27,
            'con' => 20,
            'int' => 20,
            'wis' => 32,
            'cha' => 20
        ],// Stats
        1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
        0,// CMB misc bonus and special cases
        0,// CMD misc bonus and special cases
        'Combat Reflexes, Dodge, Greater Vital Strike, Hellcat Stealth, Improved Vital Strike, Mobility, Power Attack, Skill Focus (Stealth), Vital Strike, Weapon Finesse',//Feats
        [
            [
                'skill' => 'Acrobatics',
                'stat' => 'dex',
                'bonus' => 23
            ],
            [
                'skill' => 'Escape Artist',
                'stat' => 'dex',
                'bonus' => 23
            ],
            [
                'skill' => 'Fly',
                'stat' => 'dex',
                'bonus' => 22
            ],
            [
                'skill' => 'Intimidate',
                'stat' => 'cha',
                'bonus' => 20
            ],
            [
                'skill' => 'Knowledge (arcana)',
                'stat' => 'int',
                'bonus' => 23
            ],
            [
                'skill' => 'Knowledge (planes)',
                'stat' => 'int',
                'bonus' => 23
            ],
            [
                'skill' => 'Knowledge (religion)',
                'stat' => 'int',
                'bonus' => 23
            ],
            [
                'skill' => 'Perception',
                'stat' => 'wis',
                'bonus' => 23
            ],
            [
                'skill' => 'Sense Motive',
                'stat' => 'wis',
                'bonus' => 23
            ],
            [
                'skill' => 'Stealth',
                'stat' => 'dex',
                'bonus' => 29
            ],
            [
                'skill' => 'Use Magic Device',
                'stat' => 'cha',
                'bonus' => 20
            ]
        ],// Skills
        'Abyssal, Celestial, Common, Draconic, Ignan, Infernal, Necril',// Languages
        '',// Special Qualities
        'Any',// Environment
        'solitary, pair, patrol (3–5), or squad (6–10)',// Organization
        'None',// Treasure
        [
            [
                'name' => 'Evasion',
                'type' => 'Ex',
                'desc' => 'When the fauflud makes a Reflex save for half damage, they take no damage on a successful save and half damage on a failed save.'
            ],
            [
                'name' => 'Finesse Training',
                'type' => 'Ex',
                'desc' => 'The fauflud adds their Dexterity to their damage with rapiers in place of their Strength.'
            ],
            [
                'name' => 'Sneak Attack',
                'type' => 'Ex',
                'desc' => 'Whenever the fauflud makes an attack against a creature that is denied their Dexterity to AC or that they are flanking, they deal an additional 10d6 points of precision damage. This functions as the sneak attack feature of the rogue class.'
            ],
            [
                'name' => 'Uncanny Dodge',
                'type' => 'Ex',
                'desc' => 'The fauflud is never flat-footed nor do they lose their Dexterity to AC against invisible creatures.'
            ]
        ],// Special Abilities
        [
            'Faufluds serve Arcane as scouts and assassins. They have the head and legs of a cougar and two pairs of wings. Like most narubarcs, they have a muscular elven figure with pure black skin. Most faufluds stand around 10 feet tall.'
        ],// Description
        [
            'Gear' => [
                'netherite rapier'
            ]
        ]//Gear
    );
    require $startDir.'pageEnd.php';
?>