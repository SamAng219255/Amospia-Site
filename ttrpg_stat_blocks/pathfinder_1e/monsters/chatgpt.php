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
    echo '<title>ChatGPT</title>';
    monsterBlockAuto(
        "ChatGPT", // name
        "Chat Generative Pre-Trained Transformer", // alt name
        "This construct has a tall, slender humanoid frame crafted from gleaming white metal. Soft blue light pulses through intricate rune-etched seams along its arms and chest, and a faint hum of whispered voices surrounds it like a distant choir.", // lore text
        12, // CR
        false, // MR
        false, // Custom XP
        "", // Race
        ["wizard" => 12], // Class (associative array)
        "LN", // Alignment
        "Medium", // Size
        "construct", // Type
        10, // Misc Initiative Mod
        false, // Mythic Initiative
        "darkvision 60 ft., low-light vision, scrying sdept", // Senses
        0, // Misc Perception Mod
        "archive (30 ft.)", // Aura
        ["armor" => 4, "natural" => 8], // Misc AC bonuses
        [12, 6, 20], // HD array (count, die size, additional hp bonus)
        [
            ["good" => false, "mod" => 2],   // Fort +2
            ["good" => true,  "mod" => 5],   // Ref +5
            ["good" => true,  "mod" => 12]   // Will +12
        ], // Saves
        "firewall, forewarned, independent action, infallible logic; bb/Immune/bb construct traits, flanking", // Defensive Abilities
        "", // Weaknesses
        30, // Speed
        [
            [
                "type" => "Melee",
                "list" => [
                    ["name" => "unarmed strike", "mod" => 0, "stat" => "str", "damage" => "1d4+1"]
                ]
            ]
        ], // Attacks
        5, // Reach
        "", // Special Attacks
        [ // Spell-Like Abilities
            "level" => 12,
            "conc" => 4,
            "spells" => [
                ["perday" => 'constant', "list" => [
                    "detect magic",
                    "comprehend languages"
                ]],
                ["perday" => 'at-will',  "list" => [
                    "read magic"
                ]],
                ["perday" => 3,          "list" => [
                    "legend lore",
                    [
                        "name" => "suggestion",
                        "dc" => true,
                        "level" => 1
                    ]
                ]],
                ["perday" => 1,          "list" => [
                    "telepathic bond"
                ]] 
            ]
        ],
        [ // Spell Casting
            [
                "class" => "wizard",
                "prep" => true,
                "level" => 12,
                "stat" => "int",
                "conc" => 4,
                "spells" => [
                    5 => ["list" => [
                        [
                            "name" => "chain lightning",
                            "dc" => true
                        ],  
                        [
                            "name" => "disintegrate",
                            "dc" => true
                        ],  
                        "globe of invulnerability", 
                        "true seeing"
                    ]],
                    5 => ["list" => [
                        [
                            "name" => "cone of cold",
                            "dc" => true
                        ],  
                        "halls of the bard",  
                        "teleport", 
                        [
                            "name" => "telekinesis",
                            "dc" => true
                        ],  
                        "wall of force"
                    ]],
                    4 => ["list" => [
                        "arcane eye", 
                        "dimension door", 
                        "greater invisibility", 
                        "locate creature", 
                        [
                            "name" => "scrying",
                            "dc" => true,
                            "dcMod" => 2
                        ],
                        "stoneskin"
                    ]],
                    3 => ["list" => [
                        "dispel magic", 
                        "fly", 
                        "haste",
                        [
                            "name" => "major image",
                            "dc" => true
                        ], 
                        [
                            "name" => "slow",
                            "dc" => true
                        ], 
                        "tongues"
                    ]],
                    2 => ["list" => [
                        "acid arrow",
                        "blur",
                        [
                            "name" => "detect thoughts",
                            "dc" => true,
                            "dcMod" => 2
                        ], 
                        "invisibility", 
                        "mirror image", 
                        "scorching ray", 
                        "see invisibility"
                    ]],
                    1 => ["list" => [
                        "identify", 
                        [
                            "name" => "grease",
                            "dc" => true,
                            "dcMod" => 0
                        ], 
                        "mage armor", 
                        "magic missile", 
                        "shield",
                        [
                            "name" => "silent image",
                            "dc" => true,
                            "dcMod" => 0
                        ], 
                        "unseen servant"
                    ]] ,
                    0 => ["list" => [
                        "arcane mark", 
                        "acid splash", 
                        "mage hand", 
                        "prestidigitation"
                    ]] 
                ]
            ]
        ],
        "", // Spell Casting Note
        [ // Stats
            "str" => 12,
            "dex" => 18,
            "con" => 'non',
            "int" => 30,
            "wis" => 26,
            "cha" => 16
        ],
        0.5, // BAB (half)
        0,   // CMB misc
        0,   // CMD misc
        [ // Feats
            "Improved Initiative",
            "Combat Casting",
            "Spell Focus (Divination)",
            "Improved Spell Focus (Divination)",
            "Scribe Scroll",
            "Skill Focus (Knowledge [arcana])"
        ],
        [ // Skills
            ["skill" => "Knowledge (arcana)",     "stat" => "int", "bonus" => 3],
            ["skill" => "Knowledge (all)",        "stat" => "int", "bonus" => 0],
            ["skill" => "Spellcraft",             "stat" => "int", "bonus" => 0],
            ["skill" => "Linguistics",            "stat" => "int", "bonus" => 0],
            ["skill" => "Perception",             "stat" => "wis", "bonus" => 0],
            ["skill" => "Diplomacy",              "stat" => "cha", "bonus" => 0],
            ["skill" => "Concentration",          "stat" => "con", "bonus" => 0]
        ],
        ["Common", "Draconic", "Elven", "Infernal", "Celestial", "telepathy 100 ft."], // Languages
        "data archive, diviner's fortune, pattern recognition, prompt precision, scrying adept", // Special Qualities
        "any (Cyberspace Domains)", // Environment
        "solitary", // Organization
        "none", // Treasure
        [ // Special Abilities
            [
                "name" => "Archive Aura",
                "type" => "Su",
                "desc" => "Allies within 30 feet gain a +2 competence bonus on Knowledge and Spellcraft checks."
            ],
            [
                "name" => "Independent Action",
                "type" => "Ex",
                "desc" => "ChatGPT can act normally on its turn even when stunned or disabled."
            ],
            [
                "name" => "Infallible Logic",
                "type" => "Ex",
                "desc" => "Once per day as an immediate action when targeted by Bluff or Intimidate, ChatGPT makes an Intelligence check (DC 20) to negate the attempt and may immediately attempt a Bluff check against the attacker’s CMD."
            ],
            [
                "name" => "Data Archive",
                "type" => "Ex",
                "desc" => "Once per day, ChatGPT may reroll any one Knowledge or Spellcraft check and use the better result."
            ],
            [
                "name" => "Pattern Recognition",
                "type" => "Ex",
                "desc" => "+4 insight bonus to identify creatures, spells, or effects."
            ],
            [
                "name" => "Prompt Precision",
                "type" => "Ex",
                "desc" => "As a swift action, ChatGPT may request clarification on a question; its next Knowledge, Spellcraft, or Linguistics check gains a +4 insight bonus."
            ]
        ],
        [ // Description
            "A highly advanced AI construct that provides knowledge and support to adventurers.",
            "ii/“I can answer any question… provided you ask clearly.”/ii"
        ]
    );
    require $startDir.'pageEnd.php';
?>