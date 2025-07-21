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
        'Faþufl',// name
        false,// alt name
        'A six-armed goat-headed figure with three faces hovers before you with a pair of scarab wings, a pair of crow wings, and a pair of pterosaur wings extending from its back.',// lore text
        18,// CR
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
        0,// Misc Initiative Mod
        false,// Mythic Initiative
        'darkvision 120 ft.',// Senses
        0,// Misc Perception Mod
        'power 120 ft. (DC 38), greater arcane sight',// Aura
        [
            'deflection' => +5,
            'dodge' => +1,
            'natural' => +10
        ],// Misc AC bonuses
        [25,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
        'bb/DR/bb 10/—; bb/Immune/bb death effects, fire, fear effects; bb/Resistance/bb acid 10, cold 10, sonic 10; bb/SR/bb 29',// Defensive Abilities
        '',// Weaknesses
        '30 ft., fly 100 ft. (good)',// Speed
        [
            [
                'type' => 'Melee',
                'list' => [
                    [
                        'name' => '6 slams',
                        'mod' => 0,
                        'stat' => 'str',
                        'damage' => '1d6+2 plus energy drain'
                    ]
                ]
            ],
            [
                'type' => 'Ranged',
                'list' => [
                    [
                        'name' => '6 arcane rays',
                        'mod' => +1,
                        'stat' => 'dex',
                        'damage' => '4d6'
                    ]
                ]
            ]
        ],// Attacks
        10,// Reach
        'arcane ray, energy drain (1 level, DC 27)',// Special Attacks
        [
            'level' => 20,
            'conc' => 0,
            'spells' => [
                [
                    'perday' => 'constant',
                    'list' => [
                        'greater arcane sight'
                    ]
                ],
                [
                    'perday' => 'at-will',
                    'list' => [
                        'teleport',
                        'plane shift'
                    ]
                ],
                [
                    'perday' => 1,
                    'list' => [
                        'greater spellcasting contract'
                    ]
                ]
            ]
        ],// Spell-like Abilities
        [
            [
                'class' => '',
                'prep' => true,
                'level' => 20,
                'stat' => 'wis',
                'conc' => 0,
                'spells' => [
                    9 => [
                        'list' => [
                            'freedom',
                            'gate',
                            [
                                'name' => 'implosion',
                                'dc' => true,
                                'dcMod' => +1
                            ], 
                            [
                                'name' => 'massacre',
                                'dc' => true,
                                'dcMod' => +1
                            ], 
                            [
                                'name' => 'meteor swarm',
                                'dc' => true
                            ], 
                            'miracle', 
                            'power word kill', 
                            [
                                'name' => 'weird',
                                'dc' => true
                            ]
                        ]
                    ],
                    8 => [
                        'list' => [
                            'divine vessel', 
                            [
                                'name' => 'grand curse',
                                'dc' => true,
                                'dcMod' => +11
                            ], 
                            [
                                'name' => 'orb of the void',
                                'dc' => true,
                                'dcMod' => +1
                            ], 
                            'prismatic wall', 
                            [
                                'name' => 'pyroclastic blast',
                                'dc' => true
                            ], 
                            'tomb legion', 
                            [
                                'name' => 'rend body IV',
                                'dc' => true
                            ], 
                            [
                                'name' => 'stormbolts',
                                'dc' => true
                            ]
                        ]
                    ],
                    7 => [
                        'list' => [
                            [
                                'name' => 'control undead',
                                'dc' => true,
                                'dcMod' => +1
                            ], 
                            [
                                'name' => 'finger of death',
                                'count' => 2,
                                'dc' => true,
                                'dcMod' => +1
                            ], 
                            [
                                'name' => 'greater scrying',
                                'dc' => true
                            ], 
                            'greater teleport', 
                            [
                                'name' => 'insanity',
                                'count' => 2,
                                'dc' => true
                            ], 
                            [
                                'name' => 'umbral strike',
                                'dc' => true
                            ]
                        ]
                    ],
                    6 => [
                        'list' => [
                            [
                                'name' => 'flesh to stone',
                                'dc' => true
                            ], 
                            [
                                'name' => 'greater dispel magic',
                                'count' => 2
                            ], 
                            [
                                'name' => 'harm',
                                'count' => 2,
                                'dc' => true,
                                'dcMod' => +1
                            ], 
                            [
                                'name' => 'heal',
                                'count' => 2,
                                'dc' => true
                            ], 
                            'invoke deity'
                        ]
                    ],
                    5 => [
                        'list' => [
                            [
                                'name' => 'baleful polymorph',
                                'dc' => true
                            ], 
                            [
                                'name' => 'feeblemind',
                                'count' => 2,
                                'dc' => true
                            ], 
                            [
                                'name' => 'major curse',
                                'dc' => true,
                                'dcMod' => +6
                            ], 
                            [
                                'name' => 'wall of sound',
                                'count' => 3
                            ], 
                            'winds of change'
                        ]
                    ],
                    4 => [
                        'list' => [
                            'arcane eye', 
                            [
                                'name' => 'freedom of movement',
                                'count' => 3
                            ], 
                            [
                                'name' => 'phantasmal killer',
                                'count' => 3,
                                'dc' => true
                            ], 
                            'rusting grasp', 
                            'thoughtsense'
                        ]
                    ],
                    3 => [
                        'list' => [
                            'daylight', 
                            'deeper darkness', 
                            'haste', 
                            [
                                'name' => 'invisibility purge',
                                'count' => 3
                            ], 
                            [
                                'name' => 'slow',
                                'count' => 3,
                                'dc' => true
                            ]
                        ]
                    ],
                    2 => [
                        'list' => [
                            'arcane lock', 
                            [
                                'name' => 'blur',
                                'count' => 2
                            ], 
                            [
                                'name' => 'invisibility',
                                'count' => 3
                            ], 
                            [
                                'name' => 'blindness / deafness',
                                'count' => 2,
                                'dc' => true,
                                'dcMod' => +1
                            ], 
                            [
                                'name' => 'hold person',
                                'dc' => true
                            ]
                        ]
                    ],
                    1 => [
                        'list' => [
                            [
                                'name' => 'bane',
                                'count' => 2,
                                'dc' => true
                            ], 
                            [
                                'name' => 'entangle',
                                'count' => 2,
                                'dc' => true
                            ], 
                            [
                                'name' => 'magic missile',
                                'count' => 4
                            ], 
                            'shield'
                        ]
                    ],
                    0 => [
                        'perday' => 'at-will',
                        'list' => [
                            'detect magic', 
                            'prestidigitation', 
                            'read magic', 
                            'sift'
                        ]
                    ]
                ]
            ]
        ],// Spell Casting
        false,// Spell Casting Note
        [
            'str' => 14,
            'dex' => 20,
            'con' => 19,
            'int' => 30,
            'wis' => 42,
            'cha' => 21
        ],// Stats
        1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
        0,// CMB misc bonus and special cases
        0,// CMD misc bonus and special cases
        [
            'Arcane Strike',
            'Combat Casting',
            'Dodge',
            'Empower Spell',
            'Eschew Materials ',
            'Greater Spell Penetration',
            'Improved Initiative',
            'Iron Will',
            'Lightning Reflexes ',
            'Maximize Spell',
            'Spell Focus (Necromancy)',
            'Spell Penetration',
            'Weapon Focus (ray)'
        ],//Feats
        [
            [
                'skill' => 'Appraise',
                'stat' => 'int',
                'bonus' => 25
            ],
            [
                'skill' => 'Escape Artist',
                'stat' => 'dex',
                'bonus' => 25
            ],
            [
                'skill' => 'Fly',
                'stat' => 'dex',
                'bonus' => 27
            ],
            [
                'skill' => 'Intimidate',
                'stat' => 'cha',
                'bonus' => 25
            ],
            [
                'skill' => 'Knowledge (arcana)',
                'stat' => 'int',
                'bonus' => 28
            ],
            [
                'skill' => 'Knowledge (dungeoneering)',
                'stat' => 'int',
                'bonus' => 25
            ],
            [
                'skill' => 'Knowledge (history)',
                'stat' => 'int',
                'bonus' => 25
            ],
            [
                'skill' => 'Knowledge (local)',
                'stat' => 'int',
                'bonus' => 25
            ],
            [
                'skill' => 'Knowledge (planes)',
                'stat' => 'int',
                'bonus' => 28
            ],
            [
                'skill' => 'Knowledge (religion)',
                'stat' => 'int',
                'bonus' => 32
            ],
            [
                'skill' => 'Linguistics',
                'stat' => 'int',
                'bonus' => 25
            ],
            [
                'skill' => 'Perception',
                'stat' => 'wis',
                'bonus' => 28
            ],
            [
                'skill' => 'Sense Motive',
                'stat' => 'wis',
                'bonus' => 28
            ],
            [
                'skill' => 'Spellcraft',
                'stat' => 'int',
                'bonus' => 28
            ],
            [
                'skill' => 'Stealth',
                'stat' => 'dex',
                'bonus' => 28
            ],
            [
                'skill' => 'Use Magic Device',
                'stat' => 'cha',
                'bonus' => 28
            ]
        ],// Skills
        'Aboleth, Abyssal, Aklo, Aquan, Auran, Celestial, Common, Cyclops, Draconic, Dwarven, Elven, Giant, Goblin, Gnoll, Gnome, Halfling, Ignan, Infernal, Necril, Orc, Protean, Sphinx, Sylvan, Terran, Undercommon; truespeech',// Languages
        '',// Special Qualities
        'Any',// Environment
        'solitary, pair, or coven (3–5)',// Organization
        'None',// Treasure
        [
            [
                'name' => 'Arcane Ray',
                'type' => 'Su',
                'desc' => 'A faþufl can fire rays of arcane power from their outstretched fingers. As a standard action, they can fire one ray from each of their hands which is not occupied. These rays have a maximum range of 1,400 feet and require a ranged touch attack to hit. When they perform this attack, they choose if each ray performs a combat maneuver or deals damage. If a ray deals damage, it deals 4d6 points and the faþufl must also choose if it deals cold, fire, negative energy, or positive energy damage. This never heals the target. The faþufl can also choose for their arcane ray to perform a bull rush, trip, or drag combat maneuver against a distant opponent using the faþufl\'s Intelligence in place of their Strength (+36 CMB).'
            ],
            [
                'name' => 'Triple Cast',
                'type' => 'Ex',
                'desc' => 'Each of a faþufl\'s three faces can focus on spells separately. If at least one face is not concentrating on a spell, the faþufl does not need to take any actions to concentrate on a spell and they can cast additional spells without ceasing their concentration. A faþufl is also able to spend a full-round action to simultaneously cast up to three spells at once. Each head that is not concentrating on a spell is able to cast a spell with a casting time of one standard action or less. The faþufl only needs a free hand for each spell with a somatic component being cast and a separate free hand for each spell with a material or focus component being cast. Each face is able to separately provide any necessary verbal components for spells they cast.'
            ]
        ],// Special Abilities
        [
            'Faþufls are among the most strange looking narubarcs. Their heads are shaped like those of goats but they have three faces and four horns. One face points forward while the other two face slightly to the right and left of the middle face. They also have three pairs of arms that can be used by any face which each are capable of having separate thoughts but which work in perfect unison. They have goat-legs and three pairs of wings. They generally otherwise have muscular elven frames with pure black skin. Most faþufls stand around 11 feet tall.'
        ],// Description
        [
            'Gear' => [
                'ii/+5 ring of protection/ii'
            ]
        ]//Gear
    );
    require $startDir.'pageEnd.php';
?>