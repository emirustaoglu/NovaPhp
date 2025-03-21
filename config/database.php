<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Database Connection
    |--------------------------------------------------------------------------
    |
    | Varsayılan veritabanı bağlantısı.
    | Birden fazla bağlantı arasından hangisinin kullanılacağını belirtir.
    |
    */
    'default' => getConfig('DB_DEFAUTL', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Veritabanı bağlantı ayarları. Birden fazla bağlantı tanımlanabilir.
    | Her bağlantı için ayrı ayarlar yapılabilir.
    |
    | Desteklenen sürücüler: "mysql", "pgsql", "sqlite", "sqlsrv"
    |
    */
    'connections' => [
        'mysql' => [
            // MySQL/MariaDB sürücüsü
            'driver' => getConfig('DB_DRIVER', 'mysql'),

            // Veritabanı sunucu adresi
            'host' => getConfig('DB_HOST', 'localhost'),

            // Veritabanı port numarası
            'port' => getConfig('DB_PORT', '3306'),

            // Veritabanı adı
            'database' => getConfig('DB_NAME', 'novaphp'),

            // Veritabanı kullanıcı adı
            'username' => getConfig('DB_USER', 'root'),

            // Veritabanı şifresi
            'password' => getConfig('DB_PASS', ''),

            // Karakter seti
            'charset' => getConfig('DB_CHARSET', 'utf8mb4'),

            // Karakter karşılaştırma ayarı
            'collation' => getConfig('DB_COLLATION', 'utf8mb4_unicode_ci'),

            // Bakım modu - true ise bağlantılar reddedilir
            'maintanceMode' => false
        ]
    ],

    'migrations_table' => 'migrations',
    'seeds_table' => 'seeds',
];
