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
        'Gozʒi',// name
        false,// alt name
        'The large humanoid figure hovers above the ground, it\'s bony face and hands are visible, peaking out of their long black robes.',// lore text
        7,// CR
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
            'knowledge' => 2,
            'work' => 1
        ],// Alignment
        'Large',// Size
        'outsider (extraplanar, narubarc)',// Type
        4,// Misc Initiative Mod
        false,// Mythic Initiative
        'darkvision 120 ft.',// Senses
        0,// Misc Perception Mod
        'power 30 ft. (DC 19)',// Aura
        [
            'natural' => +9
        ],// Misc AC bonuses
        [10,10,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
        'eternal stagnation; bb/DR/bb 10/—; bb/Immune/bb death effects, fire, fear effects; bb/Resistance/bb acid 10, cold 10, sonic 10',// Defensive Abilities
        '',// Weaknesses
        'fly 40 ft. (perfect)',// Speed
        [
            [
                'type' => 'Melee',
                'list' => [
                    [
                        'name' => 'dagger',
                        'mod' => +1,
                        'stat' => 'str',
                        'damage' => '1d8+1',
                        'iterative' => 0
                    ]
                ]
            ]
        ],// Attacks
        10,// Reach
        'chilling ray +12 (200 ft)',// Special Attacks
        [
            'level' => 20,
            'conc' => 0,
            'spells' => [
                [
                    'perday' => 'at-will',
                    'list' => [
                        'greater age resistance', 
                        'halt', 
                        'greater make whole', 
                        'teleport'
                    ]
                ],
                [
                    'perday' => 1,
                    'list' => [
                        'extended time stop'
                    ]
                ]
            ]
        ],// Spell-like Abilities
        [],// Spell Casting
        false,// Spell Casting Note
        [
            'str' => 11,
            'dex' => 15,
            'con' => 16,
            'int' => 18,
            'wis' => 18,
            'cha' => 14
        ],// Stats
        1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
        0,// CMB misc bonus and special cases
        0,// CMD misc bonus and special cases
        [
            'Improved Initiative', 
            'Point Blank Shot', 
            'Precise Shot', 
            'Toughness', 
            'Weapon Focus (ray)'
        ],//Feats
        [
            [
                'skill' => 'Appraise',
                'stat' => 'int',
                'bonus' => 10
            ],
            [
                'skill' => 'Fly',
                'stat' => 'dex',
                'bonus' => 12
            ],
            [
                'skill' => 'Intimidate',
                'stat' => 'cha',
                'bonus' => 10
            ],
            [
                'skill' => 'Knowledge (arcana)',
                'stat' => 'int',
                'bonus' => 13
            ],
            [
                'skill' => 'Knowledge (religion)',
                'stat' => 'int',
                'bonus' => 13
            ],
            [
                'skill' => 'Perception',
                'stat' => 'wis',
                'bonus' => 13
            ],
            [
                'skill' => 'Sense Motive',
                'stat' => 'wis',
                'bonus' => 13
            ],
            [
                'skill' => 'Spellcraft',
                'stat' => 'int',
                'bonus' => 13
            ],
            [
                'skill' => 'Stealth',
                'stat' => 'dex',
                'bonus' => 13
            ],
            [
                'skill' => 'Use Magic Device',
                'stat' => 'cha',
                'bonus' => 13
            ]
        ],// Skills
        'Abyssal, Celestial, Common, Draconic, Infernal, Necril',// Languages
        'stagnate',// Special Qualities
        'Any',// Environment
        'solitary, pair, or coven (3–5)',// Organization
        'None',// Treasure
        [
            [
                'name' => 'Chilling Ray',
                'type' => 'Su',
                'desc' => [
                    'As a standard action, a gozʒi can fire a ray of cool blue energy at a creature within 200 feet, requiring a ranged touch attack to hit. This ray deals 2 temporary negative levels to the target. Targets immune to negative levels instead take 2 points of Charisma damage. The gozʒi also gains 5 temporary hit points for each negative level and point of Charisma damage dealt. Negative levels beyond the target\'s total number of hit dice and Charisma damage beyond their total Charisma do not grant temporary hit points.',
                    'After 24 hours, the targets receive a DC 17 Fortitude save against the negative levels to remove them before they become permanent as normal. This DC is Wisdom based.'
                ]
            ],
            [
                'name' => 'Eternal Stagnation',
                'type' => 'Ex',
                'desc' => 'Gozʒi experience a cursed immortality that traps them in their current state indefinitely. A gozʒi cannot be slain by any mortal means, including by the greater effect of a ii/wish/ii or ii/miracle/ii spell or by exposure to a ii/sphere of annihilation/ii. Effects that reduce one of their statistics to normally fatal levels leaves them unconscious for 1 hour. If they are not healed before the end of the hour, they are automatically restored to full health. Gozʒi lose any conditions, damage, or other ongoing effects they receive after 24 hours; this does not apply to constant effects from items they carry that do not need to be activated.'
            ]
        ],// Special Abilities
        [
            'Gozʒi appear as great, robed, skeletal figures that float in the air. No legs can be seen beneath their robes. Gozʒi are formed from the souls of individuals that strove for immortality in life and many were liches or necromancers.'
        ],// Description
        [
            'Gear' => [
                'ii/+1 dagger/ii'
            ]
        ]//Gear
    );
    require $startDir.'pageEnd.php';
?>