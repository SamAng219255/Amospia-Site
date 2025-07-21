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
        'Fauflang',// name
        false,// alt name
        'This imposing figure towers over you with the head of a mule and a pair of large wasp-like wings.',// lore text
        11,// CR
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
        'power 40 ft. (DC 28)',// Aura
        [
            'dodge' => +1,
            'natural' => +10
        ],// Misc AC bonuses
        [14,10,14],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
        [
            [
                'good' => true,// Fortitude
                'mod' => 0
            ],
            [
                'good' => false,// Reflex
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
        'last stand; bb/DR/bb 10/—; bb/Immune/bb death effects, fire, fear effects; bb/Resistance/bb acid 10, cold 10, sonic 10',// Defensive Abilities
        '',// Weaknesses
        '30 ft., fly 60 ft. (average)',// Speed
        [
            [
                'type' => 'Melee',
                'list' => [
                    [
                        'name' => 'great spear',
                        'mod' => -3,
                        'stat' => 'str',
                        'damage' => '2d8+24/×3 plus reach and energy drain',
                        'iterative' => 0
                    ]
                ]
            ]
        ],// Attacks
        10,// Reach
        'energy drain (2 levels, DC 20)',// Special Attacks
        [
            'level' => 14,
            'conc' => 0,
            'spells' => [
                [
                    'perday' => 'at-will',
                    'list' => [
                        'plane shift'
                    ]
                ]
            ]
        ],// Spell-like Abilities
        [],// Spell Casting
        false,// Spell Casting Note
        [
            'str' => 26,
            'dex' => 19,
            'con' => 24,
            'int' => 18,
            'wis' => 32,
            'cha' => 17
        ],// Stats
        1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
        0,// CMB misc bonus and special cases
        0,// CMD misc bonus and special cases
        'Dodge, Improved Vital Strike, Mobility, Power Attack, Toughness, Vital Strike, Weapon Focus (great spear)',//Feats
        [
            [
                'skill' => 'Diplomacy',
                'stat' => 'cha',
                'bonus' => 14
            ],
            [
                'skill' => 'Escape Artist',
                'stat' => 'dex',
                'bonus' => 11
            ],
            [
                'skill' => 'Fly',
                'stat' => 'dex',
                'bonus' => 13
            ],
            [
                'skill' => 'Intimidate',
                'stat' => 'cha',
                'bonus' => 11
            ],
            [
                'skill' => 'Knowledge (arcana)',
                'stat' => 'int',
                'bonus' => 14
            ],
            [
                'skill' => 'Knowledge (planes)',
                'stat' => 'int',
                'bonus' => 14
            ],
            [
                'skill' => 'Knowledge (religion)',
                'stat' => 'int',
                'bonus' => 14
            ],
            [
                'skill' => 'Perception',
                'stat' => 'wis',
                'bonus' => 14
            ],
            [
                'skill' => 'Sense Motive',
                'stat' => 'wis',
                'bonus' => 14
            ],
            [
                'skill' => 'Use Magic Device',
                'stat' => 'cha',
                'bonus' => 14
            ]
        ],// Skills
        'Abyssal, Celestial, Common, Draconic, Ignan, Infernal, Necril',// Languages
        '',// Special Qualities
        'Any',// Environment
        'solitary, pair, patrol (3–5), or squad (6–10)',// Organization
        'None',// Treasure
        [
            [
                'name' => 'Last Stand',
                'type' => 'Ex',
                'desc' => 'If a fauflang is slain or reduced to 0 hit points, they survive with 1 hit point. They also become immune to all damage for 1d4 rounds. During this time, any ability damage, ability drain, negative levels, movement impairing effects, diseases, or poisons are suppressed as well the confused, cowering, dazed, dazzled, entangled, exhausted, fascinated, fatigued, frightened, nauseated, panicked, shaken, sickened, staggered, or stunned conditions. This does not remove the conditions, but their effects are negated for the duration of this ability. Once this ability ends, the fauflang becomes fatigued and this ability cannot be triggered again until the next time the fauflang is restored to full health.'
            ]
        ],// Special Abilities
        [
            'Fauflangs are the foot-soldiers of Arcane. They bear the head and legs of a mule and have a single pair of wings. Like most narubarcs, they have a muscular elven figure with pure black skin. Most fauflangs stand around 12 feet tall.'
        ],// Description
        [
            'Gear' => [
                'netherite great spear'
            ]
        ]//Gear
    );
    require $startDir.'pageEnd.php';
?>