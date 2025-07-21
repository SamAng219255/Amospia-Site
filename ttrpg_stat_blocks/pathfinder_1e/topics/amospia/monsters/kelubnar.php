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
        'Kelubnar',// name
        false,// alt name
        'A hooded figure in plain, billowing robes drifts before you, the fabric rippling as if stirred by an unseen breeze—yet you can\'t see any sort of form or body underneath their hood.',// lore text
        8,// CR
        false,// MR
        false,// Custom XP
        false,// Race
        [],// Class
        [
            'alignment' => 'NG',
            'altruism' => 2,
            'humility' => 1,
            'purity' => 0,
            'honesty' => 0,
            'loyalty' => 1,
            'law' => 0,
            'individualism' => 0,
            'knowledge' => 1,
            'work' => 1
        ],// Alignment
        'Medium',// Size
        'outsider (extraplanar, incorporeal, narubarc)',// Type
        4,// Misc Initiative Mod
        false,// Mythic Initiative
        'healer\'s sight',// Senses
        0,// Misc Perception Mod
        'power 30 ft. (DC 14), protection 30 ft. (+1, 8 rounds)',// Aura
        [
            'deflection' => +4
        ],// Misc AC bonuses
        [8,10,8],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
        'incorporeal; bb/DR/bb 10/—; bb/Immune/bb death effects, fire, fear effects; bb/Resistance/bb acid 10, cold 10, sonic 10',// Defensive Abilities
        '',// Weaknesses
        'fly 30 ft. (perfect)',// Speed
        [],// Attacks
        5,// Reach
        'burning touch +12 (1d8+4 or 1 Con)',// Special Attacks
        [
            'level' => 8,
            'conc' => 0,
            'spells' => [
                [
                    'perday' => 3,
                    'list' => [
                        'breath of life'
                    ]
                ]
            ]
        ],// Spell-like Abilities
        [
            [
                'class' => 'Cleric',
                'prep' => true,
                'level' => 8,
                'stat' => 'wis',
                'conc' => 0,
                'spells' => [
                    0 => [
                        'perday' => 'at-will',
                        'list' => [
                            'light',
                            'guidance',
                            'stabilize',
                            'virtue' 
                        ]
                    ],
                    1 => [
                        'list' => [
                            [
                                'name' => 'bless',
                                'dc' => false
                            ],
                            [
                                'name' => 'cure light wounds',
                                'dc' => true,
                                'domain' => true
                            ],
                            [
                                'name' => 'protection from evil',
                                'dc' => false
                            ],
                            [
                                'name' => 'sanctuary',
                                'count' => 2,
                                'dc' => true
                            ],
                            [
                                'name' => 'shield of faith',
                                'dc' => false
                            ]
                        ]
                    ],
                    2 => [
                        'list' => [
                            [
                                'name' => 'cure moderate wounds',
                                'dc' => true,
                                'domain' => true
                            ],
                            [
                                'name' => 'grace',
                                'dc' => false
                            ],
                            [
                                'name' => 'lesser restoration',
                                'dc' => false
                            ],
                            [
                                'name' => 'shield other',
                                'dc' => false
                            ]
                        ]
                    ],
                    3 => [
                        'list' => [
                            [
                                'name' => 'cure serious wounds',
                                'dc' => true,
                                'domain' => true
                            ],
                            [
                                'name' => 'dispel magic',
                                'dc' => false
                            ],
                            [
                                'name' => 'remove curse',
                                'dc' => false
                            ],
                            [
                                'name' => 'searing light',
                                'dc' => false
                            ]
                        ]
                    ],
                    4 => [
                        'list' => [
                            [
                                'name' => 'blessing of fervor',
                                'dc' => true
                            ],
                            [
                                'name' => 'cure critical wounds',
                                'dc' => true,
                                'domain' => true
                            ],
                            [
                                'name' => 'freedom of movement',
                                'dc' => true
                            ]
                        ]
                    ]
                ]
            ]
        ],// Spell Casting
        'bb/Domains/bb Healing, Protection',// Spell Casting Note
        [
            'str' => 0,
            'dex' => 18,
            'con' => 15,
            'int' => 10,
            'wis' => 20,
            'cha' => 18
        ],// Stats
        1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
        0,// CMB misc bonus and special cases
        0,// CMD misc bonus and special cases
        [
            'Improved Initiative',
            'Selective Channeling',
            'Toughness',
            'Quick Channel'
        ],// Feats
        [
            [
                'skill' => 'Fly',
                'stat' => 'dex',
                'bonus' => 8
            ],
            [
                'skill' => 'Heal',
                'stat' => 'wis',
                'bonus' => 11
            ],
            [
                'skill' => 'Knowledge (planes)',
                'stat' => 'int',
                'bonus' => 11
            ],
            [
                'skill' => 'Knowledge (religion)',
                'stat' => 'int',
                'bonus' => 11
            ],
            [
                'skill' => 'Perception',
                'stat' => 'wis',
                'bonus' => 11
            ],
            [
                'skill' => 'Sense Motive',
                'stat' => 'wis',
                'bonus' => 11
            ],
            [
                'skill' => 'Spellcraft',
                'stat' => 'int',
                'bonus' => 11
            ]
        ],// Skills
        [
            'Abyssal',
            'Celestial',
            'Common',
            'Draconic',
            'Infernal',
            'Necril'
        ],// Languages
        'channel energy (4d6, 7/day), healer\'s blessing, rebuke death, resistant touch',// Special Qualities
        'Any',// Environment
        'Solitary',// Organization
        'None',// Treasure
        [
            [
                'name' => 'Burning Touch',
                'type' => 'Su',
                'desc' => 'The creature can infuse their touch with positive energy, which glows a warm orange, to burn their enemies. Touched undead, and creatures harmed by negative energy like undead, take 1d6 points of damage plus the creature\'s charisma modifier. Living creatures are nauseated instead and take 1 point of Constitution damage. A successful DC 14 Fortitude save negates the Constitution damage. This DC is Charisma-based.'
            ],
            [
                'name' => 'Healer\'s Sight',
                'type' => 'Su',
                'desc' => [
                    'The creature can perceive the status of others within its sight. The creature can perceive any conditions affecting their targets as well as their relative remaining life-force, able to tell if a creature is unharmed (no damage), injured (any damage), wounded (less than half their hit points), fragile (less than 3 hit points), dying (less than 0 hit points), or dead. They can also tell if a creature is living or undead. This sight only functions on living and undead creatures.',
                    'When another creature within 60 feet takes damage, the creature with this ability can sense the life-force leaving them and is immediately aware of their location, how much damage they took, their status, and their relative remaining life-force, even if they cannot otherwise perceive them.'
                ]
            ]
        ],// Special Abilities
        [
            'Dedicated healers are unusual among Arcane\'s followers since neither healing nor protection are among his domains. Despite this, some rare few determined healers, whose allies are going down and are on the brink of death with nowhere else to turn, will call upon Arcane to save their allies. Some of these healers have their request granted and are imbued with one of a number of various twisted healing powers such as being able to transfer the life-force from one creature to another, an incredible burst of healing energy that drains the caster and leaves them passed out for several days, the power to save an ally from death or harm at the expense of having to pay a debt of souls, or the ability to resurrect and render temporarily immortal their allies at the expense of their own life. These healers, if they survive, are marked for life, potentially losing them the favor of their original patron, though they retain the power they received. When these healers die, their souls are received by Arcane and become Kelubnars.'
        ]// Description
    );
    require $startDir.'pageEnd.php';
?>