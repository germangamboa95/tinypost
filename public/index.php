<?php

use TinyWeb\Http\Routing\Request;
use TinyWeb\Http\Routing\Router;


$app = require_once(__DIR__ . "/../bootstrap/bootstrap.php");


$router = $app->get(Router::class);

$response = $router->handle(Request::make());

// This needs to be better in the future
echo $response;

// Just die
die();
