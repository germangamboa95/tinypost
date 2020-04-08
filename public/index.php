<?php

use TinyWeb\Http\Routing\Request;

$app = require_once(__DIR__ . "/../framework/bootstrap.php");

$router = $app->get('router');

$response = $router->handle(Request::make());

// Just die
die();
