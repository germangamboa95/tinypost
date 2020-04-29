<?php

use TinyWeb\Http\Routing\Router;
use TinyWeb\Http\Views\Engine;

return [
    'singletons' => [Router::class => function () {
        return new Router();
    }],
    'services' => [
        Engine::class => function () {
            return new Engine();
        }
    ]
];

// $app->singleton(Router::class, function () {
//     return new Router();
// }, true);

// $app->add(Foo::class, function ($app) {
//     return new Foo($app->get(Router::class));
// });

// $router = $app->get(Router::class);
// $foo = $app->get(Foo::class);
// dd($foo, $router);
