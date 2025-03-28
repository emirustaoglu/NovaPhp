<?php

define('BasePath', __DIR__ . "/../");

require BasePath . 'vendor/autoload.php';

use Core\Bootstrap;

ob_start();
session_start();

$basePath = __DIR__ . "/../";

$app = new Bootstrap($basePath);

require BasePath . "routes/web.php";

$app->run();