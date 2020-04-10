<?php

use TinyWeb\Http\Routing\Router;

$scope = 'h';

/** @var Router */
$router = $this->get(Router::class);

$router->get('/', function () {

    echo "This is the home page";
});


$router->get('/posts', function () {

    echo "This is the posts page";
});