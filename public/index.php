<?php

define('AnaDizin', __DIR__ . "/../");

require AnaDizin . 'vendor/autoload.php';

use NovaPhp\Core\Bootstrap;

ob_start();
session_start();

$basePath = __DIR__ . "/../";

$app = new Bootstrap($basePath);

require AnaDizin . "routes/web.php";

$app->run();