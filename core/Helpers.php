<?php

use NovaPhp\Config\ConfigLoader;

if (!function_exists('config')) {
    /**
     * Config değerlerine erişim sağlar
     *
     * @param string|null $key Config anahtarı (örn: 'database.connections.mysql.host')
     * @param mixed $default Varsayılan değer
     * @return mixed|ConfigLoader
     */
    function config(string $key = null, $default = null)
    {
        if (is_null($key)) {
            return ConfigLoader::getInstance();
        }

        return ConfigLoader::getInstance()->get($key, $default);
    }
}

if (!function_exists('app_path')) {
    /**
     * Uygulama dizinine göre yol oluşturur
     *
     * @param string $path Alt dizin/dosya yolu
     * @return string
     */
    function app_path(string $path = ''): string
    {
        $basePath = config('app.base_path', getcwd());
        return rtrim($basePath, '/') . ($path ? '/' . $path : '');
    }
}

if (!function_exists('storage_path')) {
    /**
     * Storage dizinine göre yol oluşturur
     *
     * @param string $path Alt dizin/dosya yolu
     * @return string
     */
    function storage_path(string $path = ''): string
    {
        $storagePath = config('app.storage_path', app_path('storage'));
        return rtrim($storagePath, '/') . ($path ? '/' . $path : '');
    }
}

if (!function_exists('resource_path')) {
    /**
     * Resources dizinine göre yol oluşturur
     *
     * @param string $path Alt dizin/dosya yolu
     * @return string
     */
    function resource_path(string $path = ''): string
    {
        $resourcePath = config('app.resource_path', app_path('resources'));
        return rtrim($resourcePath, '/') . ($path ? '/' . $path : '');
    }
}

if (!function_exists('novaVersion')) {
    /**
     * NovaPhp Versiyon Bilgisini Döner
     *
     * @return string
     */
    function novaVersion(): string
    {
        $composer = json_decode(file_get_contents(__DIR__ . '/../composer.json'), true);
        return $composer['version'];
    }
}

if (!function_exists('novaBuildDate')) {
    /**
     * NovaPhp Versiyon Bilgisini Döner
     *
     * @return string
     */
    function novaBuildDate(): string
    {
        $composer = json_decode(file_get_contents(__DIR__ . '/../composer.json'), true);
        return $composer['extra']['build_date'];
    }
}

if (!function_exists('getConfig')) {
    function getConfig(string $key, $default = null)
    {
        return \Arrilot\DotEnv\DotEnv::get($key, $default);
    }
}
