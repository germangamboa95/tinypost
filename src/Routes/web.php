<?php

use TinyWeb\Http\Routing\Router;

$scope = 'h';

/** @var Router */
$router = $this->get(Router::class);

$router->get('/', function () {

    echo "This is the home page";
});

$router->post("/posts", function () {
    echo "post post";
});


$router->get('/posts', function () {

    echo "This is the posts page";
});
