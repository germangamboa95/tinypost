<?php

namespace TinyWeb\Http\Routing;


class Router
{
    public array $routes = [
        'GET' => [],
        'POST' => []
    ];


    public function handle(Request $request)
    {
        // if (
        //     array_key_exists($request->method, $this->routes)
        //     && array_key_exists($request->url, $this->routes[$request->method])
        // ) {

        // }

        $this->routes[$request->method][$request->url['path']]['method']();
    }

    public function get(string $path, callable $fn)
    {
        $this->routes['GET'][$path] = [
            'method' => $fn
        ];
    }
}
