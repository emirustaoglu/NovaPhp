<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | Uygulama adı. Bu değer uygulama genelinde kullanılabilir.
    | Örneğin: mail gönderimlerinde, sayfa başlıklarında vb.
    |
    */
    'name' => getConfig('APP_NAME', 'NovaPhp'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | Uygulamanın çalıştığı ortam.
    | Değerler: 'local', 'staging', 'production'
    |
    */
    'env' => getConfig('APP_ENV', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | Debug modu açıkken detaylı hata mesajları gösterilir.
    | Production ortamında kapalı tutulmalıdır.
    |
    */
    'debug' => getConfig('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | Uygulamanın çalıştığı URL. Mail gönderimlerinde ve
    | URL oluşturmada kullanılır.
    |
    */
    'url' => getConfig('APP_URL', 'https://novaphp.test'),

    /*
    |--------------------------------------------------------------------------
    | Application Paths
    |--------------------------------------------------------------------------
    |
    | Uygulama dizin yapılandırması.
    | Bu ayarlar storage_path(), resource_path() gibi
    | helper fonksiyonları tarafından kullanılır.
    |
    */
    'base_path' => dirname(__DIR__),
    'storage_path' => dirname(__DIR__) . '/storage',
    'resource_path' => dirname(__DIR__) . '/resources',

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Uygulama genelinde kullanılacak varsayılan timezone.
    | Liste: http://php.net/manual/en/timezones.php
    |
    */
    'timezone' => getConfig('APP_TIMEZONE', 'Europe/Istanbul'),

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | Uygulama dil ayarı. Çoklu dil desteği için kullanılır.
    | Örnek değerler: 'en', 'tr', 'fr', 'de'
    |
    */
    'locale' => getConfig('APP_LOCAL', 'tr'),

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | Seçilen dilde çeviri bulunamazsa kullanılacak yedek dil.
    |
    */
    'fallback_locale' => getConfig('APP_FALLBACK_LOCALE', 'tr'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | Şifreleme için kullanılacak anahtar.
    | En az 32 karakter uzunluğunda olmalıdır.
    |
    */
    'key' => getConfig('APP_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    | Controllers, Middlewares, Enum, Models, Views dizin yapılandırması
    |
    */
    'paths' => [
        'controllers' => AnaDizin . 'app/controllers/',
        'middlewares' => AnaDizin . 'app/middlewares/',
        'enums' => AnaDizin . 'app/enums/',
        'models' => AnaDizin . 'app/models/',
        'views' => AnaDizin . 'resources/views/',
        'views_cache' => AnaDizin . 'storage/app/cache/',
    ],

    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    | Controllers, Middlewares, Enum, Models, Views namespaces yapılandırması
    |
    */

    'namespaces' => [
        'controllers' => 'App\\Controllers',
        'middlewares' => 'App\\Middlewares',
        'enums' => 'App\\Enums',
        'models' => 'App\\Models'
    ]

];
