<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | Varsayılan mail gönderim sürücüsü.
    | Desteklenen sürücüler: "smtp", "sendmail", "mailgun", "ses", "log", "array"
    |
    */
    'default' => getEnv('EMAIL_DEFAULT', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Mail gönderim sürücülerinin ayarları. Her sürücü için ayrı ayarlar yapılabilir.
    |
    | SMTP:
    | - En yaygın kullanılan mail gönderim protokolü
    | - Gmail, Yandex, Outlook gibi servisleri kullanabilir
    | - SSL/TLS desteği
    |
    | Sendmail:
    | - Linux/Unix sistemlerde kullanılan yerel mail sunucusu
    | - Harici SMTP sunucusu gerektirmez
    |
    */
    'mailers' => [
        'smtp' => [
            // Mail sunucu adresi
            'host' => getEnv('EMAIL_SMTP_HOST', 'smtp.example.com'),

            // Mail sunucu port numarası
            // Gmail: 465, Yandex: 587, Outlook: 587
            'port' => getEnv('EMAIL_SMTP_PORT', 465),

            // Şifreleme türü: tls, ssl, null
            'encryption' => getEnv('EMAIL_SMTP_ENCRYPTION', 'ssl'),

            // Mail sunucu kullanıcı adı
            'username' => getEnv('EMAIL_SMTP_USER', 'example@example.com'),

            // Mail sunucu şifresi
            'password' => getEnv('EMAIL_SMTP_PASS', 'pass'),

            // Bağlantı zaman aşımı (saniye)
            'timeout' => getEnv('EMAIL_SMTP_TIMEOUT', 5),

            // Debug modu (1 = hataları göster, 0 = gizle)
            'debug' => getEnv('APP_DEBUG', false),
        ],

        'sendmail' => [
            'path' => '/usr/sbin/sendmail -bs',
            'timeout' => 5
        ],

        'mailgun' => [
            'domain' => 'your-domain.com',
            'secret' => 'your-mailgun-key',
            'endpoint' => 'api.mailgun.net'
        ],

        'ses' => [
            'key' => 'your-ses-key',
            'secret' => 'your-ses-secret',
            'region' => 'us-east-1'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | Mail gönderimlerinde kullanılacak varsayılan gönderici bilgileri.
    | Her mail gönderiminde ayrıca belirtilmediği sürece bu değerler kullanılır.
    |
    */
    'from' => [
        'address' => 'example@example.com',
        'name' => 'NovaPhp'
    ],

    /*
    |--------------------------------------------------------------------------
    | Mail Template Settings
    |--------------------------------------------------------------------------
    |
    | Mail şablonları ile ilgili ayarlar.
    |
    */
    'template' => [
        // Şablon dizini
        'path' => resource_path('views/emails'),

        // Varsayılan şablon
        'default' => 'layouts.email',

        // Şablon önbelleği
        'cache' => false
    ],

    /*
    |--------------------------------------------------------------------------
    | Mail Queue Settings
    |--------------------------------------------------------------------------
    |
    | Mail kuyruğu ayarları.
    | Maillerin arka planda gönderilmesi için kullanılır.
    |
    */
    'queue' => [
        // Kuyruk kullanımı
        'enabled' => true,

        // Kuyruk kanalı
        'channel' => 'emails',

        // Öncelik (düşük sayı = yüksek öncelik)
        'priority' => 3
    ]
];
