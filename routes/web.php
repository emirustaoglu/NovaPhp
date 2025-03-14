<?php

use App\Controllers\HomeController;

global $app;

$app->router->get('/', ['HomeController', 'index']);