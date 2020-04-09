<?php

use TinyWeb\Http\Routing\Router;

$scope = 'h';

/** @var Router */
$router = $this->get(Router::class);
$router->get('/', function () {

    echo "German";
});
