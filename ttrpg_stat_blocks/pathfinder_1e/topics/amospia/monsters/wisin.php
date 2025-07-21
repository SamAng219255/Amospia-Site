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
        'Wisin',// name
        false,// alt name
        'In an unnerving, potentially highly disturbing sight, this singular human-like eyeball hovers in air, scanning across the pages of a book that hovers, open, in front of it.',// lore text
        1,// CR
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
            'loyalty' => 0,
            'law' => 0,
            'individualism' => 0,
            'knowledge' => 2,
            'work' => 1
        ],// Alignment
        'Fine',// Size
        'outsider (extraplanar, narubarc)',// Type
        0,// Misc Initiative Mod
        false,// Mythic Initiative
        'darkvision 120 ft., read magic',// Senses
        0,// Misc Perception Mod
        '',// Aura
        [],// Misc AC bonuses
        [2,10],// Number of hit dice, Hit dice size, <additional hp bonus>, <hp notes (fast healing/regen/etc)>
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
        'bb/DR/bb 10/—; bb/Immune/bb death effects, fire, fear effects; bb/Resistance/bb acid 10, cold 10, sonic 10',// Defensive Abilities
        '',// Weaknesses
        'fly 20 ft. (clumsy)',// Speed
        [],// Attacks
        0,// Reach
        'knowledge blast (DC 12, 1d4+5)',// Special Attacks
        [
            'level' => 2,
            'conc' => 0,
            'spells' => [
                [
                    'perday' => 'constant',
                    'list' => [
                        'read magic',
                        'comprehend languages'
                    ]
                ],
                [
                    'perday' => 'at-will',
                    'list' => [
                        'mage hand',
                        [
                            'name' => 'invisibility',
                            'note' => 'self only'
                        ]
                    ]
                ]
            ]
        ],// Spell-like Abilities
        [],// Spell Casting
        false,// Spell Casting Note
        [
            'str' => 1,
            'dex' => 18,
            'con' => 8,
            'int' => 20,
            'wis' => 18,
            'cha' => 12
        ],// Stats
        1,// BAB (1=full, 0.75=3/4 or medium, 0.5=half or slow)
        0,// CMB misc bonus and special cases
        0,// CMD misc bonus and special cases
        [
            'Skill Focus (one Knowledge skill)' // Feats
        ],
        [
            [
                'skill' => 'Fly',
                'stat' => 'dex',
                'bonus' => 8
            ],
            [
                'skill' => 'Knowledge (all)',
                'stat' => 'int',
                'bonus' => 5
            ],
            [
                'skill' => 'Perception',
                'stat' => 'wis',
                'bonus' => 4
            ],
            [
                'skill' => 'Use Magic Device',
                'stat' => 'cha',
                'bonus' => 1
            ]
        ],// Skills
        'Draconic, Necril; comprehend languages, telepathy (100 ft.); Cannot verbally speak.',// Languages
        'Change Shape, Magic Manipulation',// Special Qualities
        'Any',// Environment
        'Solitary',// Organization
        'None',// Treasure
        [
            [
                'name' => 'Change Shape',
                'type' => 'Su',
                'desc' => 'Wisin can take the form of any creature from the standard or improved familiar list. This otherwise functions as ii/beast shape II/ii except that it lasts until dismissed and that they do not modify their ability scores.'
            ],
            [
                'name' => 'Knowledge Blast',
                'type' => 'Sp',
                'desc' => 'Wisin can perform a telepathic attack against a target within 30 feet as a standard action that deals 1d4 points of damage plus the wisin\'s Intelligence modifier. This is a mind-affecting effect and the target receives a DC 12 Will save to negate the damage. This effect is also subject to spell resistance and the wisin uses their number of hit dice as their caster level for this ability. The DC is Charisma-based.'
            ],
            [
                'name' => 'Magic Manipulation',
                'type' => 'Su',
                'desc' => [
                    'Wisin can use ii/mage hand/ii to perform fine manipulation. While using ii/mage hand/ii, a wisin can use it to perform any action that a creature could perform with their main hand so long as the action does not require an attack roll.',
                    'Like normal, wisin cannot affect attended items or items weighing more than 5 pounds with their ii/mage hand/ii, but they are able to hold and manipulate magical items using it.'
                ]
            ]
        ],// Special Abilities
        [
            'Wisin are a type of narubarc, outsider servants to the god Arcane, which take the form of a singular floating eyeball. Wisin are formed from the souls of determined, and often desperate, scholars who followed Arcane, hoping to receive hidden knowledge.',
            'Wisin are naturally among the least and least favored of the narubarcs and only those with multiple class levels can manifest the narubarcs\' aura of power. Despite this, many powerful wisin who have grown and proved themselves serve in Arcane\'s grand university, studying all manner of things. Those less powerful often seek seclusion to study in peace or wander the planes in search of answers. Many of the latter will serve as a wizard\'s familiar. A spellcaster must have the Improved Familiar feat, follow Arcane, and be an arcane caster level of 7th or higher to gain a wisin familiar.'
        ]// Description
    );
    require $startDir.'pageEnd.php';
?>