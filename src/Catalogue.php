<?php

namespace Bezdomni\IsaacRebirth;

class Catalogue
{
    private $offsets = [];

    private $characters = [];

    private $challenges = [];

    private $progresses = [];

    private $items = [
        1 =>  "The Sad Onion",
        2 =>  "The Inner Eye",
        3 =>  "Spoon Bender",
        4 =>  "Cricket's Head",
        5 =>  "My Reflection",
        6 =>  "Number One",
        7 =>  "Blood of the Martyr",
        8 =>  "Brother Bobby",
        9 =>  "Skatole",
        10 => "Halo of Flies",
        11 => "1UP",
        12 => "Magic Mushroom",
        13 => "The Virus",
        14 => "Roid Rage",
        15 => "<3",
        16 => "Raw Liver",
        17 => "Skeleton Key",
        18 => "A Dollar",
        19 => "Boom!",
        20 => "Transcendence",
        21 => "The Compass",
        22 => "Lunch",
        23 => "Dinner",
        24 => "Dessert",
        25 => "Breakfast",
        26 => "Rotten Meat",
        27 => "Wooden Spoon",
        28 => "The Belt",
        29 => "Mom's Underwear",
        30 => "Mom's Heels",
        31 => "Mom's Lipstick",
        32 => "Wire Coat Hanger",
        33 => "The Bible",
        34 => "The Book of Belial",
        35 => "The Necronomicon",
        36 => "The Poop",
        37 => "Mr. Boom",
        38 => "Tammy's Head",
        39 => "Mom's Bra",
        40 => "Kamikaze",
        41 => "Mom's Pad",
        42 => "Bob's Rotten Head",
        // 43 ????
        44 => "Teleport",
        45 => "Yum Heart",
        46 => "Lucky Foot",
        47 => "Doctor's Remote",
        48 => "Cupid's Arrow",
        49 => "Shoop Da Whoop",
        50 => "Steven",
        51 => "Pentagram",
        52 => "Dr. Fetus",
        53 => "Magneto",
        54 => "Treasure Map",
        55 => "Mom's Eye",
        56 => "Lemon Mishap",
        57 => "Distant Admiration",
        58 => "Book of Shadows",
        // 59 ??? Wiggle worm ???
        60 => "The Ladder",
        62 => "Charm of the Vampire",
        63 => "The Battery",
        64 => "Steam Sale",
        65 => "Anarchist's Cookbook",
        66 => "The Hourglass",
        67 => "Sister Maggy",
        68 => "Technology",
        69 => "Chocolate Milk",
        70 => "Growth Hormones",
        71 => "Mini Mush",
        72 => "Rosary",
        73 => "Cube of Meat",
        74 => "A Quarter",
        75 => "PhD",
        76 => "X-Ray Vision",
        77 => "My Little Unicorn",
        78 => "Book of Revelations",
        79 => "The Mark",
        80 => "The Pact",
        81 => "Dead Cat",
        82 => "Lord of the Pit",
        83 => "The Nail",
        84 => "We Need To Go Deeper",
        85 => "Deck of Cards",
        86 => "Monstro's Tooth",
        87 => "Loki's Horns",
        88 => "Little Chubby",
        89 => "Spider Bite",
        90 => "The Small Rock",
        91 => "Spelunker Hat",
        92 => "Super Bandage",
        93 => "The Gamekid",
        94 => "Sack of Pennies",
        95 => "Robo-Baby",
        96 => "Little C.H.A.D.",
        97 => "The Book of Sin",
        98 => "The Relic",
        99 => "Little Gish",
        100 => "Little Steven",
        101 => "The Halo",
        102 => "Mom's Bottle of Pills",
        103 => "The Common Cold",
        104 => "The Parasite",
        105 => "The D6",
        106 => "Mr. Mega",
        107 => "Pinking Shears",
        108 => "The Wafer",
        109 => "Money = Power",
        110 => "Mom's Contacts",
        111 => "The Bean",
        112 => "Guardian Angel",
        113 => "Demon Baby",
        114 => "Mom's Knife",
        115 => "Ouija Board",
        116 => "9 Volt",
        117 => "Dead Bird",
        118 => "Brimstone",
        119 => "Blood Bag",
        120 => "Odd Mushroom (Thin)",
        121 => "Odd Mushroom (Thick)",
        122 => "Whore of Babylon",
        123 => "Monster Manual",
        124 => "Dead Sea Scrolls",
        125 => "Bobby - Bomb",
        126 => "Razor Blade",
        127 => "Forget Me Now",
        128 => "Forever Alone",
        129 => "Bucket of Lard",
        130 => "A Pony",
        131 => "Bomb Bag",
        132 => "A Lump of Coal",
        133 => "Guppy's Paw",
        134 => "Guppy's Tail",
        135 => "IV Bag",
        136 => "Best Friend",
        137 => "Remote Detonator",
        138 => "Stigmata",
        139 => "Mom's Purse",
        140 => "Bob's Curse",
        141 => "Pageant Boy",
        142 => "Scapular",
        143 => "Speed Ball",
        144 => "Bum Friend",
        145 => "Guppy's Head",
        146 => "Prayer Card",
        147 => "Notched Axe",
        148 => "Infestation",
        149 => "Ipecac",
        150 => "Tough Love",
        151 => "The Mulligan",
        152 => "Technology 2",
        153 => "Mutant Spider",
        154 => "Chemical Peel",
        155 => "The Peeper",
        156 => "Habit",
        157 => "Bloody Lust",
        158 => "Crystal Ball",
        159 => "Spirit of the Night",
        160 => "Crack The Sky",
        161 => "Ankh",
        162 => "Celtic Cross",
        163 => "Ghost Baby",
        164 => "The Candle",
        165 => "Cat-O-Nine-Tails",
        166 => "D20",
        167 => "Harlequin Baby",
        168 => "Epic Fetus",
        169 => "Polyphemus",
        170 => "Daddy Longlegs",
        171 => "Spider Butt",
        172 => "Sacrificial Dagger",
        173 => "Mitre",
        174 => "Rainbow Baby",
        175 => "Dad's Key",
        176 => "Stem Cells",
        177 => "Portable Slot",
        178 => "Holy Water",
        179 => "Fate",
        180 => "The Black Bean",
        181 => "White Pony",
        182 => "Sacred Heart",
        183 => "Toothpicks",
        184 => "Holy Grail",
        185 => "Dead Dove",
        186 => "Blood Rights",
        187 => "Guppy's Hairball",
        188 => "Abel",
        189 => "SMB Super Fan",
        190 => "Pyro",
        191 => "3 Dollar Bill",
        192 => "Telepathy for Dummies",
        193 => "MEAT!",
        194 => "Magic 8 Ball",
        195 => "Mom's Coin Purse",
        196 => "Squeezy",
        197 => "Jesus Juice",
        198 => "Box",
        199 => "Mom's Key",
        200 => "Mom's Eyeshadow",
        201 => "Iron Bar",
        202 => "Midas Touch",
        203 => "Humbleing Bundle",
        204 => "Fanny pack",
        205 => "Sharp plug",
        206 => "The Guillotine",
        207 => "Ball of Bandages",
        208 => "Champion Belt",
        209 => "Butt Bombs",
        210 => "Gnawed Leaf",
        211 => "Spiderbaby",
        212 => "Guppy's Collar",
        213 => "Lost Contact",
        214 => "Anemic",
        215 => "Goat Head",
        216 => "Ceremonial Robes",
        217 => "Mom's Wig",
        218 => "Placenta",
        219 => "Old Bandage",
        220 => "Sad Bombs",
        221 => "Rubber Cement",
        222 => "Anti-Gravity",
        223 => "Pyromaniac",
        224 => "Cricket's Body",
        225 => "Gimpy",
        226 => "Black Lotus",
        227 => "Piggy Bank",
        228 => "Mom's Perfume",
        229 => "Monstro's Lung",
        230 => "Abaddon",
        231 => "Ball of Tar",
        232 => "Stop Watch",
        233 => "Tiny Planet",
        234 => "Infestation 2",
        236 => "E. Coli",
        237 => "Death's Touch",
        238 => "Key Piece #1",
        239 => "Key Piece #2",
        240 => "Experimental Treatment",
        241 => "Contract From Below",
        242 => "Infamy",
        243 => "Trinity Shield",
        244 => "Tech.5",
        245 => "20/20",
        246 => "Blue Map",
        247 => "BFFS!",
        248 => "Hive Mind",
        249 => "There's Options",
        250 => "Bogo Bombs",
        251 => "Starter Deck",
        252 => "Little Baggy",
        253 => "Magic Scab",
        254 => "Blood Clot",
        255 => "Screw",
        256 => "Hot Bombs",
        257 => "Fire Mind",
        258 => "Missing No.",
        259 => "Dark Matter",
        260 => "Black Candle",
        261 => "Proptosis",
        262 => "Missing Page 2",
        264 => "Smart Fly",
        265 => "Dry Baby",
        266 => "Juicy Sack",
        267 => "Robo-Baby 2.0",
        268 => "Rotten Baby",
        269 => "Headless Baby",
        270 => "Leech",
        271 => "Mystery Sack",
        272 => "BBF",
        273 => "Bob's Brain",
        274 => "Best Bud",
        275 => "Lil' Brimstone",
        276 => "Isaac's Heart",
        277 => "Lil' Haunt",
        278 => "Dark Bum",
        279 => "Big Fan",
        280 => "Sissy Long Legs",
        281 => "Punching Bag",
        282 => "How To Jump",
        283 => "D100",
        284 => "D4",
        285 => "D10",
        286 => "Blank Card",
        287 => "Book of Secrets",
        288 => "Box of Spiders",
        289 => "Red Candle",
        290 => "The Jar",
        291 => "FLUSH!",
        292 => "The Satanic Bible",
        293 => "Head of Krampus",
        294 => "Butter Bean",
        295 => "Magic Fingers",
        296 => "Converter",
        297 => "Pandora's Box",
        298 => "Unicorn Stump",
        299 => "Taurus",
        300 => "Aries",
        301 => "Cancer",
        302 => "Leo",
        303 => "Virgo",
        304 => "Libra",
        305 => "Scorpio",
        306 => "Sagittarius",
        307 => "Capricorn",
        308 => "Aquarius",
        309 => "Pisces",
        310 => "Eve's Mascara",
        311 => "Judas' Shadow",
        312 => "Maggy's Bow",
        313 => "Holy Mantle",
        314 => "Thunder Thighs",
        315 => "Strange Attractor",
        316 => "Cursed Eye",
        317 => "Mysterious Liquid",
        318 => "Gemini",
        319 => "Cain's Other Eye",
        320 => "???'s Only Friend",
        321 => "Samson's Chains",
        322 => "Mongo Baby",
        323 => "Isaac's Tears",
        324 => "Undefined",
        325 => "Scissors",
        326 => "Breath of Life",
        327 => "The Polaroid",
        328 => "The Negative",
        329 => "The Ludovico Technique",
        330 => "Soy Milk",
        331 => "GodHead",
        332 => "Lazarus' Rags",
        333 => "The Mind",
        334 => "The Body",
        335 => "The Soul",
        336 => "Dead Onion",
        337 => "Broken Watch",
        338 => "Boomerang",
        339 => "Safety Pin",
        340 => "Caffeine Pill",
        341 => "Torn Photo",
        342 => "Blue Cap",
        343 => "Latch Key",
        344 => "Match Book",
        345 => "Synthoil",
        346 => "A Snack"
    ];

    private $bosses = [
        1 => "Monstro",
        2 => "Larry Jr.",
        3 => "Chub",
        4 => "Gurdy",
        5 => "Monstro II",
        6 => "Mom",
        7 => "Scolex",
        8 => "Mom's Heart",
        9 => "Famine",
        10 => "Pestilence",
        11 => "War",
        12 => "Death",
        13 => "Duke of Flies",
        14 => "Peep",
        15 => "Loki",
        16 => "Blastocyst",
        17 => "Gemini",
        18 => "Fistula",
        19 => "Gish",
        20 => "Steven",
        21 => "C.H.A.D.",
        22 => "Headless Horseman",
        23 => "The Fallen",
        24 => "Satan",
        25 => "It Lives!",
        26 => "The Hollow",
        27 => "The Carrion Queen",
        28 => "Gurdy Jr.",
        29 => "The Husk",
        30 => "The Bloat",
        31 => "Lokii",
        32 => "The Blighted Ovum",
        33 => "Teratoma",
        34 => "The Widow",
        35 => "Mask of Infamy",
        36 => "The Wretched",
        37 => "Pin",
        38 => "Conquest",
        39 => "Isaac",
        40 => "???",
        41 => "Daddy Long Legs",
        42 => "Triachnid",
        43 => "The Haunt",
        44 => "Dingle",
        45 => "Mega Maw",
        46 => "Mega Maw II",
        47 => "Mega Fatty",
        48 => "Mega Fatty II",
        49 => "Mega Gurdy",
        50 => "Dark One",
        51 => "Dark One II",
        52 => "Polycephalus",
        53 => "Mega Fred",
        54 => "The Lamb",
        55 => "Mega Satan",
        56 => "Gurglings",
    ];

    private $miniBosses = [
        1 => "Lust",
        2 => "Wrath",
        3 => "Gluttony",
        4 => "Greed",
        5 => "Envy",
        6 => "Pride",
        7 => "Sloth?",
    ];

    private $achievements = [
        1 => "Magdalene",
        2 => "Cain",
        3 => "Judas",
        4 => "The Womb",
        5 => "The Harbingers",
        6 => "A Cube of Meat",
        7 => "Book Of Revelations",
        8 => "Transcendence",
        9 => "The Nail",
        10 => "A Quarter",
        11 => "Dr. Fetus",
        12 => "A Small Rock",
        13 => "Monstro's Tooth",
        14 => "Lil Chubby",
        15 => "Loki's Horns",
        16 => "Something From The Future!",
        17 => "Something Cute",
        18 => "Something Sticky",
        19 => "Super Bandage",
        20 => "Relic",
        21 => "A Bag of Pennies",
        22 => "The Book Of Sin",
        23 => "Little Gish",
        24 => "Little Steven",
        25 => "Little C.H.A.D.",
        26 => "A Gamekid",
        27 => "A Halo",
        28 => "Mr. Mega!",
        29 => "The D6",
        30 => "The Scissors",
        31 => "The Parasite",
        32 => "???",
        33 => "Everything Is Terrible!!!",
        34 => "It Lives",
        35 => "Mom's Contact",
        36 => "The Necronomicon",
        37 => "Basement Boy",
        38 => "Spelunker Boy",
        39 => "Dark Boy",
        40 => "Mamas Boy",
        41 => "Golden God!",
        42 => "Eve",
        43 => "Mom's Knife",
        44 => "The Razor",
        45 => "Guardian Angel",
        46 => "A Bag of Bombs",
        47 => "A Demon Baby!",
        48 => "A Forget Me Now",
        49 => "The D20",
        50 => "Celtic Cross",
        51 => "Abel",
        52 => "Curved Horn",
        53 => "Sacrificial Dagger",
        54 => "Blood Lust",
        55 => "Blood Penny",
        56 => "Blood Rights",
        57 => "The Polaroid",
        58 => "Dad's Key",
        59 => "The Blue Candle",
        60 => "Burnt Penny",
        61 => "Lucky Toe!",
        62 => "Epic Fetus",
        63 => "SMB Super Fan",
        64 => "Counterfeit coin",
        65 => "Guppy's Hairball",
        66 => "Conquest",
        67 => "Samson",
        68 => "Something Icky!",
        69 => "Platinum God",
        70 => "Isaac's Head",
        71 => "Maggy's Faith",
        72 => "Judas' Tongue",
        73 => "???'s Soul",
        74 => "Samson's Lock",
        75 => "Cain's Eye",
        76 => "Eve's Bird Foot",
        77 => "The Left Hand",
        78 => "The Negative",
        79 => "Azazel",
        80 => "Lazarus",
        81 => "Eden",
        82 => "The Lost",
        83 => "Dead Boy",
        84 => "Real Platinum God",
        85 => "Lucky Rock",
        86 => "The Cellar",
        87 => "The Catacombs",
        88 => "Necropolis",
        89 => "Rune of Hagalaz",
        90 => "Rune of Jera",
        91 => "Rune of Ehwaz",
        92 => "Rune of Dagaz",
        93 => "Rune of Ansuz",
        94 => "Rune of Perthro",
        95 => "Rune of Berkano",
        96 => "Rune of Algiz",
        97 => "Chaos Card",
        98 => "Credit Card",
        99 => "Rules Card",
        100 => "Card Against Humanity",
        101 => "Swallowed Penny",
        102 => "Robo Baby 2.0",
        103 => "Death's Touch",
        104 => "Tech.5",
        105 => "Missing No.",
        106 => "Isaac's Tears",
        107 => "Guillotine",
        108 => "Judas' Shadow",
        109 => "Maggy's Bow",
        110 => "Cain's Other Eye",
        111 => "Black Lipstick",
        112 => "Eve's Mascara",
        113 => "Fate",
        114 => "???'s Only Friend",
        115 => "Samson's Chains",
        116 => "Lazarus' Rags",
        117 => "Broken Ankh",
        118 => "Store Credit",
        119 => "Pandora's Box",
        120 => "Suicide King",
        121 => "Blank Card",
        122 => "Book of Secrets",
        123 => "Mysterious Paper",
        124 => "Mystery Sack",
        125 => "Undefined",
        126 => "Satanic Bible",
        127 => "Demon's Tail",
        128 => "Abaddon",
        129 => "Isaac's Heart",
        130 => "The Mind",
        131 => "The Body",
        132 => "The Soul",
        133 => "A D100",
        134 => "Blue Map",
        135 => "There's Options",
        136 => "Black Candle",
        137 => "Red Candle",
        138 => "Stop Watch",
        139 => "Wire Coat Hanger",
        140 => "Ipecac",
        141 => "Experimental Treatment",
        142 => "Krampus",
        143 => "Head of Krampus",
        144 => "Super Meat Boy",
        145 => "Butter Bean",
        146 => "Little Baggy",
        147 => "Blood Bag",
        148 => "D4",
        149 => "The Lost Poster",
        150 => "Rubber Cement",
        151 => "Store Upgrade 1",
        152 => "Store Upgrade 2",
        153 => "Store Upgrade 3",
        154 => "Store Upgrade 4",
        155 => "Angels",
        156 => "Godhead",
        157 => "Darkness Falls",
        158 => "The Tank",
        159 => "Solar System",
        160 => "Suicide King",
        161 => "Cat Got Your Tongue",
        162 => "Demo Man",
        163 => "Cursed!",
        164 => "Glass Cannon",
        165 => "The Family Man",
        166 => "The Purist",
        167 => "Lost Baby",
        168 => "Cute Baby",
        169 => "Crow Baby",
        170 => "Shadow Baby",
        171 => "Glass Baby",
        172 => "Wrapped Baby",
        173 => "Begotten Baby",
        174 => "Dead Baby",
        175 => "-0- Baby",
        176 => "Glitch Baby",
        177 => "Fighting Baby",
        178 => "Lord Of The Flies",
    ];

    private $achievementHints = [
        1 => "Have 7 or more max red hearts at one time",
        2 => "Hold 55 pennies at one time",
        3 => "Kill Satan for the 1st time",
        4 => "Beat Mom for the 1st time",
        5 => "Beat Mom for the 1st time",
        6 => "Beat Mom for the 1st time",
        7 => "Beat a horseman for the 1st time",
        8 => "Beat Mom's Heart 3 times (A Noose = Transcendence)",
        9 => "Beat Boss Rush with Demon Isaac",
        10 => "Beat Mom's Heart 8 times",
        11 => "Beat Mom's Heart 9 times (A Fetus in a Jar = Dr. Fetus)",
        12 => "Destroy 100 tinted rocks",
        13 => "Beat Basement II for the 1st time",
        14 => "Beat Caves II for the 1st time",
        15 => "Beat Lokii for the 1st time",
        16 => "Beat the basement 40 times (Steven)",
        17 => "Beat the caves 30 times (C.H.A.D.)",
        18 => "Beat the depths 20 times (Gish)",
        19 => "Make a super bandage girl (A Bandage = Super Bandage)",
        20 => "Kill Isaac with Maggy (A Cross = Relic)",
        21 => "Kill Isaac with Cain",
        22 => "Kill all 7 sins",
        23 => "Kill Gish",
        24 => "Kill Steven",
        25 => "Kill C.H.A.D.",
        26 => "Visit 10 arcades",
        27 => "Kill Mom using the bible",
        28 => "Destroy 10 tinted rocks",
        29 => "Kill Isaac with ???",
        30 => "Die 100 times",
        31 => "Collect 2 of Bob's Rotten Head, Dead Cat, Max's Head, Tammy's Head",
        32 => "Beat Mom's Heart 10 times",
        33 => "Beat Mom's Heart 5 times",
        34 => "Beat Mom's Heart 11 times",
        35 => "Become mom (collect 3 mom items in one playthrough)",
        36 => "Use the Death Card 4 times",
        37 => "Beat the Basement/Cellar without taking damage",
        38 => "Beat the Caves/Catacombs without taking damage",
        39 => "Beat the Depths/Necropolis without taking damage",
        40 => "Beat the Womb/Utero without taking damage",
        41 => "Beat ??? and Lamb",
        42 => "Don't pick up any hearts for 2 levels in a row",
        43 => "Kill Satan with Isaac",
        44 => "Kill Satan with Eve",
        45 => "Kill Satan with Maggy",
        46 => "Kill Satan with Cain",
        47 => "Beat Dark Room with Demon Isaac",
        48 => "Kill Satan with ???",
        49 => "Beat The Chest with Isaac",
        50 => "Beat The Chest with Maggy (Crucifix = Celtic Cross)",
        51 => "Beat Dark Room with Cain",
        52 => "Beat Dark Room with Judas",
        53 => "Beat Chest with Eve",
        54 => "Kill Isaac with Samson",
        55 => "Beat Chest with Samson",
        56 => "Kill Satan with Samson",
        57 => "Beat the cathedral 5 times",
        58 => "Collect a golden key",
        59 => "Donate 900 pennies to the store (blue candle)",
        60 => "Beat Challenge #13",
        61 => "Blow up 20 shop keepers",
        62 => "Beat Challenge #19",
        63 => "Beat Challenge #14",
        64 => "Play the shell game 100 times",
        65 => "Become Guppy",
        66 => "Take 10 items from Angel rooms",
        67 => "Beat 2 levels in a row without taking damage",
        68 => "Beat Cathedral 10 times",
        69 => "Collect all items in the game, unlock all of the secrets and Endings minus The Lost and his 7 unlockable items",
        70 => "Beat Boss Rush with Isaac",
        71 => "Beat Dark Room with Maggy",
        72 => "Kill Satan with Judas",
        73 => "Beat Dark Room with ???",
        74 => "Beat Dark Room with Samson",
        75 => "Beat Chest with Cain",
        76 => "Kill Isaac with Eve",
        77 => "Beat Chest with Judas",
        78 => "Beat Sheol 5 times",
        79 => "Make 3 deals with the devil in one run",
        80 => "Have 4 or more soul hearts at one time",
        81 => "Beat the womb for the 1st time",
        82 => "Finish the game's final secret",
        83 => "Beat the Chest or Dark Room without taking damage",
        84 => "100% of the game (unlock every item)",
        85 => "Destroy 100 rocks",
        86 => "Beat all possible bosses in the basement",
        87 => "Beat all possible bosses in the caves",
        88 => "Beat all possible bosses in the depths",
        89 => "Beat Challenge #1",
        90 => "Beat Challenge #2",
        91 => "Beat Challenge #3",
        92 => "Beat Challenge #4",
        93 => "Beat Challenge #5",
        94 => "Beat Challenge #6",
        95 => "Beat Challenge #20",
        96 => "Beat Challenge #8",
        97 => "Beat Challenge #9",
        98 => "Beat Challenge #10",
        99 => "Beat Challenge #11",
        100 => "Beat Challenge #12",
        101 => "Beat Challenge #15",
        102 => "Beat Challenge #16",
        103 => "Beat Challenge #17",
        104 => "Beat Challenge #18",
        105 => "Beat Boss Rush with Lazarus",
        106 => "Kill Isaac with Isaac",
        107 => "Kill Isaac with Judas",
        108 => "Beat Boss Rush with Judas",
        109 => "Beat Boss Rush with Maggy",
        110 => "Beat Boss Rush with Cain",
        111 => "Beat Dark Room with Eve",
        112 => "Beat Boss Rush with Eve",
        113 => "Beat Chest with ???",
        114 => "Beat Boss Rush with ???",
        115 => "Beat Boss Rush with Samson",
        116 => "Kill Isaac with Lazarus",
        117 => "Kill Satan with Lazarus",
        118 => "Beat Chest with Lazarus",
        119 => "Beat Dark Room with Lazarus",
        120 => "Beat Challenge #7",
        121 => "Kill Isaac with Eden",
        122 => "Kill Satan with Eden",
        123 => "Beat Chest with Eden",
        124 => "Beat Dark Room with Eden",
        125 => "Beat Boss Rush with Eden",
        126 => "Kill Isaac with Demon Isaac",
        127 => "Kill Satan with Demon Isaac",
        128 => "Beat Chest with Demon Isaac",
        129 => "Kill Isaac with The Lost",
        130 => "Kill Satan with The Lost",
        131 => "Beat Chest with The Lost",
        132 => "Beat Dark Room with The Lost",
        133 => "Beat Boss Rush with The Lost",
        134 => "Donate 10 pennies to the shop",
        135 => "Donate 50 pennies to the shop",
        136 => "Donate 150 pennies to the shop",
        137 => "Donate 400 pennies to the shop",
        138 => "Donate 999 pennies to the shop",
        139 => "Beat Mom's Heart 4 times",
        140 => "Beat Mom's Heart 6 times",
        141 => "Beat Mom's Heart 7 times",
        142 => "Take 20 items from devil rooms",
        143 => "Kill Krampus",
        144 => "Make a super meat boy",
        145 => "Destroy 100 poops",
        146 => "Collect 2 of either Roid Rage, The Virus, Growth Hormones, Experimental Treatment or Speed Ball",
        147 => "Use the blood donation machine 30 times",
        148 => "Blow up 30 arcade machines",
        149 => "Beat Dark Room with Isaac",
        150 => "Beat Mom's Heart 2 times",
        151 => "Donate 20 pennies to the shop",
        152 => "Donate 100 pennies to the shop",
        153 => "Donate 200 pennies to the shop",
        154 => "Donate 600 pennies to the shop",
        155 => "Beat Chest or Dark Room",
        156 => "Beat Satan, Isaac, Mom's Heart, ???, Lamb, and Boss Rush on hard mode with The Lost",
        157 => "Beat Mom's Heart 11 times",
        158 => "Unlock Magdalene",
        159 => "Finish the game with a full set of orbitals",
        160 => "Unlock It Lives",
        161 => "Become Guppy",
        162 => "Unlock Dr. Fetus",
        163 => "Unlock Magdalene",
        164 => "Unlock Epic Fetus and Loki's Horns",
        165 => "Unlock Dad's Key",
        166 => "Kill Mom for the first time",
        167 => "Beat Mom's Heart on hard mode with Isaac",
        168 => "Beat Mom's Heart on hard mode with Maggy",
        169 => "Beat Mom's Heart on hard mode with Eve",
        170 => "Beat Mom's Heart on hard mode with Judas",
        171 => "Beat Mom's Heart on hard mode with Cain",
        172 => "Beat Mom's Heart on hard mode with Lazarus",
        173 => "Beat Mom's Heart on hard mode with Azazel",
        174 => "Beat Mom's Heart on hard mode with ???",
        175 => "Beat Mom's Heart on hard mode with The Lost",
        176 => "Beat Mom's Heart on hard mode with Eden",
        177 => "Beat Mom's Heart on hard mode with Samson",
        178 => "Become Lord of the Flies",
    ];

    private $endings = [];

    public function __construct($header = "ISAACNG06R")
    {
        switch ($header)
        {
            case "ISAACNG08R":
                $this->load('afterbirth');
                break;
            case "ISAACNG06R":
            default:
                $this->load('rebirth');
        }
    }

    public function load($version)
    {
        $raw = file_get_contents(__DIR__."/../data/catalogue-$version.json");
        $json = json_decode($raw, true);
        if ($json === null)
        {
            throw new \Exception("Catalogue parse error: ".json_last_error_msg());
        }
        $this->characters = $json['characters']['items'];
        $this->endings = $json['endings']['items'];
        $this->stats = $json['stats'];
        $this->challenges = $json['challenges']['items'];
        /* TODO
        $this->achievements = $json['achievements']['items'];
        $this->achievementHints = $json['achievements']['hints'];
        $this->bosses = $json['bosses']['items'];
        $this->miniBosses = $json['mini-bosses']['items'];
        $this->items = $json['items']['items'];
         */
        $this->progresses = $json['progress']['items'];
        $this->offsets = [
            'achievements' => $json['achievements']['offset'],
            'progress'     => $json['progress']['offset'],
            'items'        => $json['items']['offset'],
            'mini_bosses'  => $json['mini-bosses']['offset'],
            'bosses'       => $json['bosses']['offset'],
            'challenges'   => $json['challengess']['offset']
        ];
    }
    // -- Getters --------------------------------------------------------------

    public function achievements()
    {
        return $this->achievements;
    }

    public function achievementHints()
    {
        return $this->achievementHints;
    }

    public function bosses()
    {
        return $this->bosses;
    }

    public function challenges()
    {
        return $this->challenges;
    }

    public function characters()
    {
        return $this->characters;
    }

    public function endings()
    {
        return $this->endings;
    }

    public function items()
    {
        return $this->items;
    }

    public function miniBosses()
    {
        return $this->miniBosses;
    }

    public function progresses()
    {
        return $this->progresses;
    }

    public function stats()
    {
        return $this->stats;
    }

    // -- Getters (single) -----------------------------------------------------

    public function achievement($id)
    {
        return isset($this->achievements[$id]) ? $this->achievements[$id] : null;
    }

    public function boss($id)
    {
        return isset($this->bosses[$id]) ? $this->bosses[$id] : null;
    }

    public function character($id)
    {
        return isset($this->characters[$id]) ? $this->characters[$id] : null;
    }

    public function ending($id)
    {
        return isset($this->endings[$id]) ? $this->endings[$id] : null;
    }

    public function item($itemID)
    {
        return isset($this->items[$itemID]) ? $this->items[$itemID] : null;
    }

    public function miniBoss($id)
    {
        return isset($this->miniBosses[$id]) ? $this->miniBosses[$id] : null;
    }

    public function progress($id)
    {
        return isset($this->progresses[$id]) ? $this->progresses[$id] : null;
    }

    public function offset($name)
    {
        return isset($this->offsets[$name]) ? $this->offsets[$name] : null;
    }
}
