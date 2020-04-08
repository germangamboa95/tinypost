<?php

use TinyWeb\Http\Routing\Router;
use TinyWeb\TinyWeb;

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . "/Helpers.php";



$app = TinyWeb::init();

$app->singleton('router', function () {
    return new Router();
}, true);


return $app;
