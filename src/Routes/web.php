<?php

use TinyWeb\Http\Routing\Request;
use TinyWeb\Http\Routing\Router;

/** @var Router */
$router = $this->get(Router::class);

$router->get('/', 'HomeController@index');
