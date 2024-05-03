<?php 

$database = [
    "products" => [
        "toys" => [
            [
                "name" => "Peluche",
                "price" => 19.99,
                "type" => "Orso",
                "material" => ["peluche"],
                "ecoFriendly" => true,
                "weight" => 0.2
            ],
            [
                "name" => "Macchinina",
                "price" => 14.99,
                "type" => "Auto",
                "material" => ["plastica", "metallo"],
                "ecoFriendly" => false,
                "weight" => 0.3
            ]
        ],
     "foods" => [
            [
                "name" => "Osso",
                "price" => 7.99,
                "type" => "Cane",
                "vegan" => false,
                "ingredients" => ["carne di manzo", "farina"]
            ],
            [
                "name" => "Croccantini",
                "price" => 12.49,
                "type" => "Cane",
                "vegan" => false,
                "ingredients" => ["carne di pollo", "riso"]
            ],
            [
                "name" => "Tonno",
                "price" => 4.99,
                "type" => "Gatto",
                "vegan" => false,
                "ingredients" => ["tonno", "brodo di pesce"]
            ],
            [
                "name" => "Semi di girasole",
                "price" => 3.99,
                "type" => "Uccello",
                "vegan" => true,
                "ingredients" => ["semi di girasole"]
            ]
        ]
    ]
];