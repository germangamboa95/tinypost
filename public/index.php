<?php

use TinyWeb\Http\Routing\Request;
use TinyWeb\Http\Routing\Router;



$app = require_once(__DIR__ . "/../bootstrap/bootstrap.php");


$router = $app->get(Router::class);

$router->handle(Request::make());

// Just die
die();
