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
        'Fauflaʒ',// name
        false,// alt name
        'An ox-headed figure towers before you, its sheer will inspiring an awe and terror that could strike the mightiest of foes paralyzed with fear. Its four pairs of massive wings resemble those of a dragon with red and gold scales, an eagle, a vampire bat, and a single pair of dragonfly wings.',// lore text
        23,// CR
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
            'individualism' => 0,
            'knowledge' => 1,
            'work' => 2
        ],// Alignment
        'Large',// Size
        'outsider (extraplanar, narubarc)',// Type
        4,// Misc Initiative Mod
        false,// Mythic Initiative
        'darkvision 120 ft.',// Senses
        0,// Misc Perception Mod
        'power 160 ft. (DC 38)',// Aura
        [
            'deflection' => +5,
            'dodge' => +1,
            'natural' => +20
        ],// Misc AC bonuses
        [30,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
        'bb/DR/bb 10/—; bb/Immune/bb death effects, fire, fear effects; bb/Resistance/bb acid 10, cold 10, sonic 10; bb/SR/bb 34',// Defensive Abilities
        '',// Weaknesses
        '30 ft., fly 120 ft. (perfect)',// Speed
        [
            [
                'type' => 'Melee',
                'list' => [
                    [
                        'name' => '2 slams',
                        'mod' => 0,
                        'stat' => 'str',
                        'damage' => '1d6+5 B plus energy drain'
                    ],
                    [
                        'name' => '8 wings',
                        'mod' => -5,
                        'stat' => 'str',
                        'damage' => '1d6+2 B'
                    ]
                ]
            ],
            [
                'type' => 'Ranged',
                'list' => [
                    [
                        'name' => 'bow',
                        'mod' => -2,
                        'stat' => 'dex',
                        'damage' => '2d8+26',
                        'iterative' => 0
                    ]
                ]
            ]
        ],// Attacks
        10,// Reach
        'energy drain (2 levels, DC 30), enspell arrows',// Special Attacks
        [
            'level' => 20,
            'conc' => 0,
            'spells' => [
                [
                    'perday' => 'at-will',
                    'list' => [
                        'teleport',
                        'plane shift'
                    ]
                ]
            ]
        ],// Spell-like Abilities
        [],// Spell Casting
        false,// Spell Casting Note
        [
            'str' => 20,
            'dex' => 23,
            'con' => 31,
            'int' => 20,
            'wis' => 42,
            'cha' => 20
        ],// Stats
        1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
        0,// CMB misc bonus and special cases
        0,// CMD misc bonus and special cases
        [
            'Deadly Aim',
            'Dodge',
            'Improved Initiative',
            'Improved Precise Shot',
            'Improved Vital Strike',
            'Far Shot',
            'Greater Vital Strike',
            'Hover',
            'Mobility',
            'Pinpoint Targeting',
            'Point Blank Shot',
            'Precise Shot',
            'Shot on the Run',
            'Vital Strike',
            'Weapon Focus (bow)'
        ],//Feats
        [
            [
                'skill' => 'Acrobatics',
                'stat' => 'dex',
                'bonus' => 30
            ],
            [
                'skill' => 'Diplomacy',
                'stat' => 'dex',
                'bonus' => 30
            ],
            [
                'skill' => 'Escape Artist',
                'stat' => 'dex',
                'bonus' => 30
            ],
            [
                'skill' => 'Fly',
                'stat' => 'dex',
                'bonus' => 40
            ],
            [
                'skill' => 'Intimidate',
                'stat' => 'cha',
                'bonus' => 33
            ],
            [
                'skill' => 'Knowledge (arcana)',
                'stat' => 'int',
                'bonus' => 33
            ],
            [
                'skill' => 'Knowledge (planes)',
                'stat' => 'int',
                'bonus' => 33
            ],
            [
                'skill' => 'Knowledge (religion)',
                'stat' => 'int',
                'bonus' => 33
            ],
            [
                'skill' => 'Perception',
                'stat' => 'wis',
                'bonus' => 33
            ],
            [
                'skill' => 'Sense Motive',
                'stat' => 'wis',
                'bonus' => 33
            ],
            [
                'skill' => 'Use Magic Device',
                'stat' => 'cha',
                'bonus' => 33
            ]
        ],// Skills
        'Abyssal, Celestial, Common, Draconic, Ignan, Infernal, Necril',// Languages
        '',// Special Qualities
        'Any',// Environment
        'solitary, pair',// Organization
        'None',// Treasure
        [
            [
                'name' => 'Enspell Arrows',
                'type' => 'Su',
                'desc' => [
                    'A fauflaʒ may enspell an arrow they are firing as part of an attack action. This enspelled arrow is treated as having a +5 enhancement bonus, deals an additional +20d6 points of damage plus their Wisdom modifier (+16) on a successful hit, and is infused with a specific energy. ',
                    '/mm/ii/Acid/ii: The additional damage is acid and, if the target is vulnerable to acid or has the air subtype, the weapon damage ignores any DR the target might have.',
                    '/mm/ii/Anarchic/ii: The arrow is chaotic aligned and, if the target is lawful, the damage from the arrow ignores any DR the target might have.',
                    '/mm/ii/Axiomatic/ii: The arrow is lawful aligned and, if the target is chaotic, the damage from the arrow ignores any DR the target might have.',
                    '/mm/ii/Cold/ii: The additional damage is cold and, if the target is vulnerable to cold or has the fire subtype, the weapon damage ignores any DR the target might have.',
                    '/mm/ii/Electricity/ii: The additional damage is electricity and, if the target is vulnerable to electricity or has the earth subtype, the weapon damage ignores any DR the target might have.',
                    '/mm/ii/Fire/ii: The additional damage is fire and, if the target is vulnerable to fire or has the cold or water subtypes, the weapon damage ignores any DR the target might have.',
                    '/mm/ii/Holy/ii: The arrow is good aligned and, if the target is evil, the damage from the arrow ignores any DR the target might have.',
                    '/mm/ii/Negative/ii: The additional damage is negative energy and, if the target is a false animate, the weapon damage ignores any DR the target might have. Living targets also take 2 negative levels as if from the fauflaʒ\'s energy drain ability. ',
                    '/mm/ii/Positive/ii: The additional damage is positive and, if the target is undead or harmed by positive energy as an undead, the weapon damage ignores any DR the target might have.',
                    '/mm/ii/Sonic/ii: The additional damage is sonic, all the damage dealt ignores any hardness or DR adamantine the target may have and, if the target is vulnerable to sonic, the weapon damage ignores any DR the target might have.',
                    '/mm/ii/Unholy/ii: The arrow is evil aligned and, if the target is good, the damage from the arrow ignores any DR the target might have.'
                ]
            ]
        ],// Special Abilities
        [
            'A fauflaʒ is a being of sheer resolve and is quite adept at overcoming any obstacle. They have the head and legs of an ox and four pairs of wings. Most fauflaʒs have a figure like a muscular elf and have pure black skin. Fauflaʒs generally stand around 16 feet tall.'
        ],// Description
        [
            'Gear' => [
                'ii/+5 composite longbow/ii',
                'ii/+5 ring of protection/ii'
            ]
        ]//Gear
    );
    require $startDir.'pageEnd.php';
?>