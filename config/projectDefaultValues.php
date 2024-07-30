<?php

return [
    'permissions' => [
        'product-store',
        'product-index',
        'product-show',
        'product-update',
        'product-delete',
    ],
    'roles' => [
        'super-admin' => [
            'product-store',
            'product-index',
            'product-show',
            'product-update',
            'product-delete',
        ],
        'simple-user' => []
    ],
    'users' => [
        [
            'name' => 'SuperAdmin',
            'roles' => ['super-admin'],
            'username' => 'admin',
            'password' => 'admin'
        ],
        [
            'name' => 'SuperAdmin2',
            'roles' => ['super-admin'],
            'username' => 'admin2',
            'password' => 'admin2'
        ],
    ],

    'measure_types' => [
        [
            'uz' => 'dona',
            'ru' => 'dona'
        ],
        [
            'uz' => 'gramm',
            'ru' => 'gramm'
        ],
        [
            'uz' => 'mlitr',
            'ru' => 'mlitr'
        ],
        [
            'uz' => 'bo\'lak',
            'ru' => 'bo\'lak'
        ]
    ],
    'measure_cups' => [
        [
            'uz' => 'qoshiq',
            'ru' => 'qoshiq'
        ],
        [
            'uz' => 'stakan',
            'ru' => 'stakan'
        ],
        [
            'uz' => 'piyola',
            'ru' => 'piyola'
        ],
        [
            'uz' => 'choy qoshiq',
            'ru' => 'choy qoshiq'
        ]
    ],
    'activity_types' => [
        [
            'title' => [
                'uz' => 'Kam faollik',
                'ru' => 'Kam faollik'
            ],
            'coefficient' => '1.2'
        ],
        [
            'title' => [
                'uz' => 'O\'rtacha faollik',
                'ru' => 'O\'rtacha faollik'
            ],
            'coefficient' => '1.375'
        ],
        [
            'title' => [
                'uz' => 'Juda faollik',
                'ru' => 'Juda faollik'
            ],
            'coefficient' => '1.55'
        ]
    ],
    'menu_sizes' => [
        [
            'title' => '1500',
            'calories' => '1500',
        ],
        [
            'title' => '1800',
            'calories' => '1800',
        ],
        [
            'title' => '2000',
            'calories' => '2000',
        ],
        [
            'title' => '2200',
            'calories' => '2200',
        ],
        [
            'title' => '2400',
            'calories' => '2400',
        ],
        [
            'title' => '2600',
            'calories' => '2600',
        ],
        [
            'title' => '2800',
            'calories' => '2800',
        ],
        [
            'title' => '3000',
            'calories' => '3000',
        ],
    ],
    'menu_types' => [
        [
            'title' => [
                'uz' => 'nonushta',
                'ru' => 'nonushta'
            ],
            'time' => [
                'from' => '05:00',
                'to' => '09:00'
            ]
        ],
        [
            'title' => [
                'uz' => 'abed',
                'ru' => 'abed'
            ],
            'time' => [
                'from' => '12:00',
                'to' => '14:00'
            ]
        ],
        [
            'title' => [
                'uz' => 'kechgi ovqat',
                'ru' => 'kechgi ovqat'
            ],
            'time' => [
                'from' => '16:00',
                'to' => '18:00'
            ]
        ],

    ],

    'regions' => [
        [
            'id' => 1,
            'name' => [
                'uz' => 'Qoraqalpog\'iston Respublikasi',
                'ru' => 'Қорақалпоғистон Республикаси'
            ]
        ],
        [
            'id' => 2,
            'name' => [
                'uz' => 'Andijon viloyati',
                'ru' => 'Андижон вилояти',
            ]
        ],
        [
            'id' => 3,
            'name' => [
                'uz' => 'Namangan viloyati',
                'ru' => 'Наманган вилояти'
            ]
        ],
        [
            'id' => 4,
            'name' => [
                'uz' => 'Farg\'ona viloyati',
                'ru' => 'Фарғона вилояти',
            ]
        ],
        [
            'id' => 5,
            'name' => [
                'uz' => 'Buxoro viloyati',
                'ru' => 'Бухоро вилояти'
            ]
        ],
        [
            'id' => 6,
            'name' => [
                'uz' => 'Xorazm viloyati',
                'ru' => 'Хоразм вилояти'
            ]
        ],
        [
            'id' => 7,
            'name' => [
                'uz' => 'Surxondaryo viloyati',
                'ru' => 'Сурхондарё вилояти'
            ]
        ],
        [
            'id' => 8,
            'name' => [
                'uz' => 'Qashqadaryo viloyati',
                'ru' => 'Қашқадарё вилояти'
            ]
        ],
        [
            'id' => 9,
            'name' => [
                'uz' => 'Jizzax viloyati',
                'ru' => 'Жиззах вилояти'
            ]
        ],
        [
            'id' => 10,
            'name' => [
                'uz' => 'Navoiy viloyati',
                'ru' => 'Навоий вилояти'
            ]
        ],
        [
            'id' => 11,
            'name' => [
                'uz' => 'Samarqand viloyati',
                'ru' => 'Самарқанд вилояти'
            ]
        ],
        [
            'id' => 12,
            'name' => [
                'uz' => 'Sirdaryo viloyati',
                'ru' => 'Сирдарё вилояти'
            ]
        ],
        [
            'id' => 13,
            'name' => [
                'uz' => 'Toshkent viloyati',
                'ru' => 'Тошкент вилояти'
            ]
        ],
        [
            'id' => 14,
            'name' => [
                'uz' => 'Toshkent shahri',
                'ru' => 'Тошкент шаҳри'
            ]
        ]
    ],
    'areas' => array(
        array("id" => "1", "name" => ["uz" => "Mo'ynoq tumani", "ru" => "Mo'ynoq tumani"], "region_id" => "1"),
        array("id" => "2", "name" => ["uz" => "Kegeyli tumani", "ru" => "Kegeyli tumani"], "region_id" => "1"),
        array("id" => "3", "name" => ["uz" => "Ellikqala tumani", "ru" => "Ellikqala tumani"], "region_id" => "1"),
        array("id" => "4", "name" => ["uz" => "Chimboy tumani", "ru" => "Chimboy tumani"], "region_id" => "1"),
        array("id" => "5", "name" => ["uz" => "Beruniy tumani", "ru" => "Beruniy tumani"], "region_id" => "1"),
        array("id" => "6", "name" => ["uz" => "Amudaryo tumani", "ru" => "Amudaryo tumani"], "region_id" => "1"),
        array("id" => "7", "name" => ["uz" => "Nukus tumani", "ru" => "Nukus tumani"], "region_id" => "1"),
        array("id" => "8", "name" => ["uz" => "Qonliko'l tumani", "ru" => "Qonliko'l tumani"], "region_id" => "1"),
        array("id" => "9", "name" => ["uz" => "Qorauzaq tumani", "ru" => "Qorauzaq tumani"], "region_id" => "1"),
        array("id" => "10", "name" => ["uz" => "Qung'irot tumani", "ru" => "Qung'irot tumani"], "region_id" => "1"),
        array("id" => "11", "name" => ["uz" => "Shumanay tumani", "ru" => "Shumanay tumani"], "region_id" => "1"),
        array("id" => "12", "name" => ["uz" => "Taxtako'pir tumani", "ru" => "Taxtako'pir tumani"], "region_id" => "1"),
        array("id" => "13", "name" => ["uz" => "To'rtko'l tumani", "ru" => "To'rtko'l tumani"], "region_id" => "1"),
        array("id" => "14", "name" => ["uz" => "Xo'jayli tumani", "ru" => "Xo'jayli tumani"], "region_id" => "1"),
        array("id" => "15", "name" => ["uz" => "Bo'zatov tumani", "ru" => "Bo'zatov tumani"], "region_id" => "1"),
        array("id" => "16", "name" => ["uz" => "Andijon tumani", "ru" => "Andijon tumani"], "region_id" => "2"),
        array("id" => "17", "name" => ["uz" => "Asaka tumani", "ru" => "Asaka tumani"], "region_id" => "2"),
        array("id" => "18", "name" => ["uz" => "Baliqchi tumani", "ru" => "Baliqchi tumani"], "region_id" => "2"),
        array("id" => "19", "name" => ["uz" => "Bo'z tumani", "ru" => "Bo'z tumani"], "region_id" => "2"),
        array("id" => "20", "name" => ["uz" => "Buloqboshi tumani", "ru" => "Buloqboshi tumani"], "region_id" => "2"),
        array("id" => "21", "name" => ["uz" => "Izboskan tumani", "ru" => "Izboskan tumani"], "region_id" => "2"),
        array("id" => "22", "name" => ["uz" => "Jalolquduq tumani", "ru" => "Jalolquduq tumani"], "region_id" => "2"),
        array("id" => "23", "name" => ["uz" => "Marhamat tumani", "ru" => "Marhamat tumani"], "region_id" => "2"),
        array("id" => "24", "name" => ["uz" => "Oltinko'l tumani", "ru" => "Oltinko'l tumani"], "region_id" => "2"),
        array("id" => "25", "name" => ["uz" => "Paxtaobod tumani", "ru" => "Paxtaobod tumani"], "region_id" => "2"),
        array("id" => "26", "name" => ["uz" => "Qo'rg'ontepa tumani", "ru" => "Qo'rg'ontepa tumani"], "region_id" => "2"),
        array("id" => "27", "name" => ["uz" => "Shahrixon tumani", "ru" => "Shahrixon tumani"], "region_id" => "2"),
        array("id" => "28", "name" => ["uz" => "Ulug'nor tumani", "ru" => "Ulug'nor tumani"], "region_id" => "2"),
        array("id" => "29", "name" => ["uz" => "Xo'jaobod tumani", "ru" => "Xo'jaobod tumani"], "region_id" => "2"),
        array("id" => "30", "name" => ["uz" => "Xonobod shahri", "ru" => "Xonobod shahri"], "region_id" => "2"),
        array("id" => "31", "name" => ["uz" => "Andijon shahri", "ru" => "Andijon shahri"], "region_id" => "2"),
        array("id" => "32", "name" => ["uz" => "Chortoq tumani", "ru" => "Chortoq tumani"], "region_id" => "3"),
        array("id" => "33", "name" => ["uz" => "Chust tumani", "ru" => "Chust tumani"], "region_id" => "3"),
        array("id" => "34", "name" => ["uz" => "Kosonsoy tumani", "ru" => "Kosonsoy tumani"], "region_id" => "3"),
        array("id" => "35", "name" => ["uz" => "Mingbuloq tumani", "ru" => "Mingbuloq tumani"], "region_id" => "3"),
        array("id" => "36", "name" => ["uz" => "Namangan tumani", "ru" => "Namangan tumani"], "region_id" => "3"),
        array("id" => "37", "name" => ["uz" => "Norin tumani", "ru" => "Norin tumani"], "region_id" => "3"),
        array("id" => "38", "name" => ["uz" => "Pop tumani", "ru" => "Pop tumani"], "region_id" => "3"),
        array("id" => "39", "name" => ["uz" => "To'raqo'rg'on tumani", "ru" => "To'raqo'rg'on tumani"], "region_id" => "3"),
        array("id" => "40", "name" => ["uz" => "Uchqo'rg'on tumani", "ru" => "Uchqo'rg'on tumani"], "region_id" => "3"),
        array("id" => "41", "name" => ["uz" => "Uychi tumani", "ru" => "Uychi tumani"], "region_id" => "3"),
        array("id" => "42", "name" => ["uz" => "Yangiqo'rg'on tumani", "ru" => "Yangiqo'rg'on tumani"], "region_id" => "3"),
        array("id" => "43", "name" => ["uz" => "Namangan shahri", "ru" => "Namangan shahri"], "region_id" => "3"),
        array("id" => "44", "name" => ["uz" => "Beshariq tumani", "ru" => "Beshariq tumani"], "region_id" => "4"),
        array("id" => "45", "name" => ["uz" => "Bog'dod tumani", "ru" => "Bog'dod tumani"], "region_id" => "4"),
        array("id" => "46", "name" => ["uz" => "Buvayda tumani", "ru" => "Buvayda tumani"], "region_id" => "4"),
        array("id" => "47", "name" => ["uz" => "Dang'ara tumani", "ru" => "Dang'ara tumani"], "region_id" => "4"),
        array("id" => "48", "name" => ["uz" => "Farg'ona tumani", "ru" => "Farg'ona tumani"], "region_id" => "4"),
        array("id" => "49", "name" => ["uz" => "Furqat tumani", "ru" => "Furqat tumani"], "region_id" => "4"),
        array("id" => "50", "name" => ["uz" => "Farg'ona shahri", "ru" => "Farg'ona shahri"], "region_id" => "4"),
        array("id" => "51", "name" => ["uz" => "Oltiariq tumani", "ru" => "Oltiariq tumani"], "region_id" => "4"),
        array("id" => "52", "name" => ["uz" => "Qo'shtepa tumani", "ru" => "Qo'shtepa tumani"], "region_id" => "4"),
        array("id" => "53", "name" => ["uz" => "O'zbekiston tumani", "ru" => "O'zbekiston tumani"], "region_id" => "4"),
        array("id" => "54", "name" => ["uz" => "Quva tumani", "ru" => "Quva tumani"], "region_id" => "4"),
        array("id" => "55", "name" => ["uz" => "Rishton tumani", "ru" => "Rishton tumani"], "region_id" => "4"),
        array("id" => "56", "name" => ["uz" => "So'x tumani", "ru" => "So'x tumani"], "region_id" => "4"),
        array("id" => "57", "name" => ["uz" => "Toshloq tumani", "ru" => "Toshloq tumani"], "region_id" => "4"),
        array("id" => "58", "name" => ["uz" => "Uchko'prik tumani", "ru" => "Uchko'prik tumani"], "region_id" => "4"),
        array("id" => "59", "name" => ["uz" => "Yozyovon tumani", "ru" => "Yozyovon tumani"], "region_id" => "4"),
        array("id" => "60", "name" => ["uz" => "Marg'ilon shahri", "ru" => "Marg'ilon shahri"], "region_id" => "4"),
        array("id" => "61", "name" => ["uz" => "Quvasov shahri", "ru" => "Quvasov shahri"], "region_id" => "4"),
        array("id" => "62", "name" => ["uz" => "Qo'qon shahri", "ru" => "Qo'qon shahri"], "region_id" => "4"),
        array("id" => "64", "name" => ["uz" => "Buxoro tumani", "ru" => "Buxoro tumani"], "region_id" => "5"),
        array("id" => "65", "name" => ["uz" => "G'ijduvon tumani", "ru" => "G'ijduvon tumani"], "region_id" => "5"),
        array("id" => "66", "name" => ["uz" => "Jondor tumani", "ru" => "Jondor tumani"], "region_id" => "5"),
        array("id" => "67", "name" => ["uz" => "Kogon tumani", "ru" => "Kogon tumani"], "region_id" => "5"),
        array("id" => "68", "name" => ["uz" => "Olot tumani", "ru" => "Olot tumani"], "region_id" => "5"),
        array("id" => "69", "name" => ["uz" => "Peshko' tumani", "ru" => "Peshko' tumani"], "region_id" => "5"),
        array("id" => "70", "name" => ["uz" => "Qorako'l tumani", "ru" => "Qorako'l tumani"], "region_id" => "5"),
        array("id" => "71", "name" => ["uz" => "Qorovulbozor tumani", "ru" => "Qorovulbozor tumani"], "region_id" => "5"),
        array("id" => "72", "name" => ["uz" => "Romitan tumani", "ru" => "Romitan tumani"], "region_id" => "5"),
        array("id" => "73", "name" => ["uz" => "Shofirkon tumani", "ru" => "Shofirkon tumani"], "region_id" => "5"),
        array("id" => "74", "name" => ["uz" => "Vobkent tumani", "ru" => "Vobkent tumani"], "region_id" => "5"),
        array("id" => "75", "name" => ["uz" => "Buxoro shahar", "ru" => "Buxoro shahar"], "region_id" => "5"),
        array("id" => "76", "name" => ["uz" => "Bog'ot tumani", "ru" => "Bog'ot tumani"], "region_id" => "6"),
        array("id" => "77", "name" => ["uz" => "Gurlan tumani", "ru" => "Gurlan tumani"], "region_id" => "6"),
        array("id" => "78", "name" => ["uz" => "Tuproqqal`a tumani", "ru" => "Tuproqqal`a tumani"], "region_id" => "6"),
        array("id" => "79", "name" => ["uz" => "Qo'shko'pir tumani", "ru" => "Qo'shko'pir tumani"], "region_id" => "6"),
        array("id" => "80", "name" => ["uz" => "Shovot tumani", "ru" => "Shovot tumani"], "region_id" => "6"),
        array("id" => "81", "name" => ["uz" => "Urganch tumani", "ru" => "Urganch tumani"], "region_id" => "6"),
        array("id" => "82", "name" => ["uz" => "Xazorasp tumani", "ru" => "Xazorasp tumani"], "region_id" => "6"),
        array("id" => "83", "name" => ["uz" => "Xiva tumani", "ru" => "Xiva tumani"], "region_id" => "6"),
        array("id" => "84", "name" => ["uz" => "Xonqa tumani", "ru" => "Xonqa tumani"], "region_id" => "6"),
        array("id" => "85", "name" => ["uz" => "Yangiariq tumani", "ru" => "Yangiariq tumani"], "region_id" => "6"),
        array("id" => "86", "name" => ["uz" => "Yangibozor tumani", "ru" => "Yangibozor tumani"], "region_id" => "6"),
        array("id" => "87", "name" => ["uz" => "Urgench shahar", "ru" => "Urgench shahar"], "region_id" => "6"),
        array("id" => "88", "name" => ["uz" => "Angor tumani", "ru" => "Angor tumani"], "region_id" => "7"),
        array("id" => "89", "name" => ["uz" => "Bandixon tumani", "ru" => "Bandixon tumani"], "region_id" => "7"),
        array("id" => "90", "name" => ["uz" => "Boysun tumani", "ru" => "Boysun tumani"], "region_id" => "7"),
        array("id" => "91", "name" => ["uz" => "Denov tumani", "ru" => "Denov tumani"], "region_id" => "7"),
        array("id" => "92", "name" => ["uz" => "Jarqo'rg'on tumani", "ru" => "Jarqo'rg'on tumani"], "region_id" => "7"),
        array("id" => "93", "name" => ["uz" => "Muzrobot tumani", "ru" => "Muzrobot tumani"], "region_id" => "7"),
        array("id" => "94", "name" => ["uz" => "Oltinsoy tumani", "ru" => "Oltinsoy tumani"], "region_id" => "7"),
        array("id" => "95", "name" => ["uz" => "Qiziriq tumani", "ru" => "Qiziriq tumani"], "region_id" => "7"),
        array("id" => "96", "name" => ["uz" => "Qumqo'rg'on tumani", "ru" => "Qumqo'rg'on tumani"], "region_id" => "7"),
        array("id" => "97", "name" => ["uz" => "Sariosiyo tumani", "ru" => "Sariosiyo tumani"], "region_id" => "7"),
        array("id" => "98", "name" => ["uz" => "Sherobod tumani", "ru" => "Sherobod tumani"], "region_id" => "7"),
        array("id" => "99", "name" => ["uz" => "Sho'rchi tumani", "ru" => "Sho'rchi tumani"], "region_id" => "7"),
        array("id" => "100", "name" => ["uz" => "Termiz tumani", "ru" => "Termiz tumani"], "region_id" => "7"),
        array("id" => "101", "name" => ["uz" => "Uzun tumani", "ru" => "Uzun tumani"], "region_id" => "7"),
        array("id" => "102", "name" => ["uz" => "Chiroqchi tumani", "ru" => "Chiroqchi tumani"], "region_id" => "8"),
        array("id" => "103", "name" => ["uz" => "Dehqonobod tumani", "ru" => "Dehqonobod tumani"], "region_id" => "8"),
        array("id" => "104", "name" => ["uz" => "G'uzor tumani", "ru" => "G'uzor tumani"], "region_id" => "8"),
        array("id" => "105", "name" => ["uz" => "Kasbi tumani", "ru" => "Kasbi tumani"], "region_id" => "8"),
        array("id" => "106", "name" => ["uz" => "Kitob tumani", "ru" => "Kitob tumani"], "region_id" => "8"),
        array("id" => "107", "name" => ["uz" => "Koson tumani", "ru" => "Koson tumani"], "region_id" => "8"),
        array("id" => "108", "name" => ["uz" => "Mirishkor tumani", "ru" => "Mirishkor tumani"], "region_id" => "8"),
        array("id" => "109", "name" => ["uz" => "Mubarak tumani", "ru" => "Mubarak tumani"], "region_id" => "8"),
        array("id" => "110", "name" => ["uz" => "Nishon tumani", "ru" => "Nishon tumani"], "region_id" => "8"),
        array("id" => "111", "name" => ["uz" => "Qamashi tumani", "ru" => "Qamashi tumani"], "region_id" => "8"),
        array("id" => "112", "name" => ["uz" => "Qarshi tumani", "ru" => "Qarshi tumani"], "region_id" => "8"),
        array("id" => "113", "name" => ["uz" => "Shahrisabz tumani", "ru" => "Shahrisabz tumani"], "region_id" => "8"),
        array("id" => "114", "name" => ["uz" => "Yakkabog' tumani", "ru" => "Yakkabog' tumani"], "region_id" => "8"),
        array("id" => "115", "name" => ["uz" => "Qarshi shahri", "ru" => "Qarshi shahri"], "region_id" => "8"),
        array("id" => "116", "name" => ["uz" => "Arnasoy tumani", "ru" => "Arnasoy tumani"], "region_id" => "9"),
        array("id" => "117", "name" => ["uz" => "Baxmal tumani", "ru" => "Baxmal tumani"], "region_id" => "9"),
        array("id" => "118", "name" => ["uz" => "Do'stlik tumani", "ru" => "Do'stlik tumani"], "region_id" => "9"),
        array("id" => "119", "name" => ["uz" => "Forish tumani", "ru" => "Forish tumani"], "region_id" => "9"),
        array("id" => "120", "name" => ["uz" => "G'allaorol tumani", "ru" => "G'allaorol tumani"], "region_id" => "9"),
        array("id" => "121", "name" => ["uz" => "Sharof Rashidov", "ru" => "Sharof Rashidov"], "region_id" => "9"),
        array("id" => "122", "name" => ["uz" => "Mirzacho'l tumani", "ru" => "Mirzacho'l tumani"], "region_id" => "9"),
        array("id" => "123", "name" => ["uz" => "Paxtakor tumani", "ru" => "Paxtakor tumani"], "region_id" => "9"),
        array("id" => "124", "name" => ["uz" => "Yangiobod tumani", "ru" => "Yangiobod tumani"], "region_id" => "9"),
        array("id" => "125", "name" => ["uz" => "Zafarobod tumani", "ru" => "Zafarobod tumani"], "region_id" => "9"),
        array("id" => "126", "name" => ["uz" => "Zarbdor tumani", "ru" => "Zarbdor tumani"], "region_id" => "9"),
        array("id" => "127", "name" => ["uz" => "Zomin tumani", "ru" => "Zomin tumani"], "region_id" => "9"),
        array("id" => "128", "name" => ["uz" => "Jizzax shahri", "ru" => "Jizzax shahri"], "region_id" => "9"),
        array("id" => "129", "name" => ["uz" => "Karmana tumani", "ru" => "Karmana tumani"], "region_id" => "10"),
        array("id" => "130", "name" => ["uz" => "Konimex tumani", "ru" => "Konimex tumani"], "region_id" => "10"),
        array("id" => "131", "name" => ["uz" => "Navbahor tumani", "ru" => "Navbahor tumani"], "region_id" => "10"),
        array("id" => "132", "name" => ["uz" => "Nurota tumani", "ru" => "Nurota tumani"], "region_id" => "10"),
        array("id" => "133", "name" => ["uz" => "Qiziltepa tumani", "ru" => "Qiziltepa tumani"], "region_id" => "10"),
        array("id" => "134", "name" => ["uz" => "Tomdi tumani", "ru" => "Tomdi tumani"], "region_id" => "10"),
        array("id" => "135", "name" => ["uz" => "Uchquduq tumani", "ru" => "Uchquduq tumani"], "region_id" => "10"),
        array("id" => "136", "name" => ["uz" => "Xatirchi tumani", "ru" => "Xatirchi tumani"], "region_id" => "10"),
        array("id" => "137", "name" => ["uz" => "Navoiy shahri", "ru" => "Navoiy shahri"], "region_id" => "10"),
        array("id" => "138", "name" => ["uz" => "Zarafshon shaxar", "ru" => "Zarafshon shaxar"], "region_id" => "10"),
        array("id" => "139", "name" => ["uz" => "Bulung'ur tumani", "ru" => "Bulung'ur tumani"], "region_id" => "11"),
        array("id" => "140", "name" => ["uz" => "Ishtixon tumani", "ru" => "Ishtixon tumani"], "region_id" => "11"),
        array("id" => "141", "name" => ["uz" => "Jomboy tumani", "ru" => "Jomboy tumani"], "region_id" => "11"),
        array("id" => "142", "name" => ["uz" => "Kattaqo'rg'on tumani", "ru" => "Kattaqo'rg'on tumani"], "region_id" => "11"),
        array("id" => "143", "name" => ["uz" => "Narpay tumani", "ru" => "Narpay tumani"], "region_id" => "11"),
        array("id" => "144", "name" => ["uz" => "Nurobod tumani", "ru" => "Nurobod tumani"], "region_id" => "11"),
        array("id" => "145", "name" => ["uz" => "Oqdaryo tumani", "ru" => "Oqdaryo tumani"], "region_id" => "11"),
        array("id" => "146", "name" => ["uz" => "Pastdarg'om tumani", "ru" => "Pastdarg'om tumani"], "region_id" => "11"),
        array("id" => "147", "name" => ["uz" => "Paxtachi tumani", "ru" => "Paxtachi tumani"], "region_id" => "11"),
        array("id" => "148", "name" => ["uz" => "Poyariq tumani", "ru" => "Poyariq tumani"], "region_id" => "11"),
        array("id" => "149", "name" => ["uz" => "Qo'shrabot tumani", "ru" => "Qo'shrabot tumani"], "region_id" => "11"),
        array("id" => "150", "name" => ["uz" => "Samarqand tumani", "ru" => "Samarqand tumani"], "region_id" => "11"),
        array("id" => "151", "name" => ["uz" => "Toyloq tumani", "ru" => "Toyloq tumani"], "region_id" => "11"),
        array("id" => "152", "name" => ["uz" => "Urgut tumani", "ru" => "Urgut tumani"], "region_id" => "11"),
        array("id" => "153", "name" => ["uz" => "Samarqand shahar", "ru" => "Samarqand shahar"], "region_id" => "11"),
        array("id" => "154", "name" => ["uz" => "Boyovut tumani", "ru" => "Boyovut tumani"], "region_id" => "12"),
        array("id" => "155", "name" => ["uz" => "Guliston tumani", "ru" => "Guliston tumani"], "region_id" => "12"),
        array("id" => "156", "name" => ["uz" => "Mirzaobod tumani", "ru" => "Mirzaobod tumani"], "region_id" => "12"),
        array("id" => "157", "name" => ["uz" => "Oqoltin tumani", "ru" => "Oqoltin tumani"], "region_id" => "12"),
        array("id" => "158", "name" => ["uz" => "Sardoba tumani", "ru" => "Sardoba tumani"], "region_id" => "12"),
        array("id" => "159", "name" => ["uz" => "Sayxunobod tumani", "ru" => "Sayxunobod tumani"], "region_id" => "12"),
        array("id" => "160", "name" => ["uz" => "Sirdaryo tumani", "ru" => "Sirdaryo tumani"], "region_id" => "12"),
        array("id" => "161", "name" => ["uz" => "Xovos tumani", "ru" => "Xovos tumani"], "region_id" => "12"),
        array("id" => "162", "name" => ["uz" => "Guliston shahri", "ru" => "Guliston shahri"], "region_id" => "12"),
        array("id" => "163", "name" => ["uz" => "Yangiyer shahri", "ru" => "Yangiyer shahri"], "region_id" => "12"),
        array("id" => "164", "name" => ["uz" => "Bekobod tumani", "ru" => "Bekobod tumani"], "region_id" => "13"),
        array("id" => "165", "name" => ["uz" => "Bo'ka tumani", "ru" => "Bo'ka tumani"], "region_id" => "13"),
        array("id" => "166", "name" => ["uz" => "Bo'stonliq tumani", "ru" => "Bo'stonliq tumani"], "region_id" => "13"),
        array("id" => "167", "name" => ["uz" => "Chinoz tumani", "ru" => "Chinoz tumani"], "region_id" => "13"),
        array("id" => "168", "name" => ["uz" => "Ohangaron tumani", "ru" => "Ohangaron tumani"], "region_id" => "13"),
        array("id" => "169", "name" => ["uz" => "Oqqo'rg'on tumani", "ru" => "Oqqo'rg'on tumani"], "region_id" => "13"),
        array("id" => "170", "name" => ["uz" => "Parkent tumani", "ru" => "Parkent tumani"], "region_id" => "13"),
        array("id" => "171", "name" => ["uz" => "Piskent tumani", "ru" => "Piskent tumani"], "region_id" => "13"),
        array("id" => "172", "name" => ["uz" => "Qibray tumani", "ru" => "Qibray tumani"], "region_id" => "13"),
        array("id" => "173", "name" => ["uz" => "Quyi chirchiq tumani", "ru" => "Quyi chirchiq tumani"], "region_id" => "13"),
        array("id" => "174", "name" => ["uz" => "Yangiyo'l tumani", "ru" => "Yangiyo'l tumani"], "region_id" => "13"),
        array("id" => "175", "name" => ["uz" => "Yuqori chirchiq tumani", "ru" => "Yuqori chirchiq tumani"], "region_id" => "13"),
        array("id" => "176", "name" => ["uz" => "Zangiota tumani", "ru" => "Zangiota tumani"], "region_id" => "13"),
        array("id" => "177", "name" => ["uz" => "Angren shahri", "ru" => "Angren shahri"], "region_id" => "13"),
        array("id" => "178", "name" => ["uz" => "Chirchiq shahri", "ru" => "Chirchiq shahri"], "region_id" => "13"),
        array("id" => "179", "name" => ["uz" => "Olmaliq shahri", "ru" => "Olmaliq shahri"], "region_id" => "13"),
        array("id" => "181", "name" => ["uz" => "Toshkent tumani", "ru" => "Toshkent tumani"], "region_id" => "13"),
        array("id" => "182", "name" => ["uz" => "O'rtachirchiq tumani", "ru" => "O'rtachirchiq tumani"], "region_id" => "13"),
        array("id" => "183", "name" => ["uz" => "Bekobod shahri", "ru" => "Bekobod shahri"], "region_id" => "13"),
        array("id" => "185", "name" => ["uz" => "Bektemir tumani", "ru" => "Bektemir tumani"], "region_id" => "14"),
        array("id" => "186", "name" => ["uz" => "Chilonzor tumani", "ru" => "Chilonzor tumani"], "region_id" => "14"),
        array("id" => "187", "name" => ["uz" => "Mirobod tumani", "ru" => "Mirobod tumani"], "region_id" => "14"),
        array("id" => "188", "name" => ["uz" => "Mirzo Ulug'bek tumani", "ru" => "Mirzo Ulug'bek tumani"], "region_id" => "14"),
        array("id" => "189", "name" => ["uz" => "Olmazor tumani", "ru" => "Olmazor tumani"], "region_id" => "14"),
        array("id" => "190", "name" => ["uz" => "Shayxontohur tumani", "ru" => "Shayxontohur tumani"], "region_id" => "14"),
        array("id" => "191", "name" => ["uz" => "Sirg'ali tumani", "ru" => "Sirg'ali tumani"], "region_id" => "14"),
        array("id" => "192", "name" => ["uz" => "Uchtepa tumani", "ru" => "Uchtepa tumani"], "region_id" => "14"),
        array("id" => "193", "name" => ["uz" => "Yakkasaroy tumani", "ru" => "Yakkasaroy tumani"], "region_id" => "14"),
        array("id" => "194", "name" => ["uz" => "Yunusobod tumani", "ru" => "Yunusobod tumani"], "region_id" => "14"),
        array("id" => "196", "name" => ["uz" => "Nukus shahri", "ru" => "Nukus shahri"], "region_id" => "1"),
        array("id" => "197", "name" => ["uz" => "Taxiatosh tumani", "ru" => "Taxiatosh tumani"], "region_id" => "1"),
        array("id" => "198", "name" => ["uz" => "Asaka shahri", "ru" => "Asaka shahri"], "region_id" => "2"),
        array("id" => "199", "name" => ["uz" => "Qorasuv shahri", "ru" => "Qorasuv shahri"], "region_id" => "2"),
        array("id" => "200", "name" => ["uz" => "Kogon shahri", "ru" => "Kogon shahri"], "region_id" => "5"),
        array("id" => "201", "name" => ["uz" => "Xiva shahri", "ru" => "Xiva shahri"], "region_id" => "6"),
        array("id" => "202", "name" => ["uz" => "Termiz shahri", "ru" => "Termiz shahri"], "region_id" => "7"),
        array("id" => "203", "name" => ["uz" => "Kattaqo'rg'on shahri", "ru" => "Kattaqo'rg'on shahri"], "region_id" => "11"),
        array("id" => "204", "name" => ["uz" => "Shirin tumani", "ru" => "Shirin tumani"], "region_id" => "12"),
        array("id" => "778", "name" => ["uz" => "Yangiyo'l shahar", "ru" => "Yangiyo'l shahar"], "region_id" => "13"),
        array("id" => "779", "name" => ["uz" => "Ohangaron shahar", "ru" => "Ohangaron shahar"], "region_id" => "13"),
        array("id" => "780", "name" => ["uz" => "Nurafshon shahri", "ru" => "Nurafshon shahri"], "region_id" => "13"),
        array("id" => "781", "name" => ["uz" => "Yangihayot tumani", "ru" => "Yangihayot tumani"], "region_id" => "14"),
        array("id" => "782", "name" => ["uz" => "Yashnabod tumani", "ru" => "Yashnabod tumani"], "region_id" => "14"),
    ),
];
