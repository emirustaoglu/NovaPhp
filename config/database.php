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
    'default' => getEnv('DB_DEFAUTL', 'mysql'),

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
            'driver' => getEnv('DB_DRIVER', 'mysql'),

            // Veritabanı sunucu adresi
            'host' => getEnv('DB_HOST', 'localhost'),

            // Veritabanı port numarası
            'port' => getEnv('DB_PORT', '3306'),

            // Veritabanı adı
            'database' => getEnv('DB_NAME', 'novaphp'),

            // Veritabanı kullanıcı adı
            'username' => getEnv('DB_USER', 'root'),

            // Veritabanı şifresi
            'password' => getEnv('DB_PASS', ''),

            // Karakter seti
            'charset' => getEnv('DB_CHARSET', 'utf8mb4'),

            // Karakter karşılaştırma ayarı
            'collation' => getEnv('DB_COLLATION', 'utf8mb4_unicode_ci'),

            // Bakım modu - true ise bağlantılar reddedilir
            'maintanceMode' => false
        ]
    ],

    'migrations_table' => 'migrations',
    'seeds_table' => 'seeds',
];
