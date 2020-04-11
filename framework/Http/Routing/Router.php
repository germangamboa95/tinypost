<?php

namespace TinyWeb\Http\Routing;

use ErrorException;

class Router
{
    public array $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => []
    ];


    public function handle(Request $request)
    {
        if (
            array_key_exists($request->method, $this->routes)
            && array_key_exists($request->url, $this->routes[$request->method])
        ) {
            return $this->routes[$request->method][$request->url]['method']();
        }

        return require_once(__DIR__ . "/../Views/404.html");

        throw new ErrorException("Route does not exist");
    }

    public function get(string $path, callable $fn)
    {
        $this->routes['GET'][$path] = [
            'method' => $fn
        ];
    }

    public function post(string $path, callable $fn)
    {
        $this->routes['POST'][$path] = [
            'method' => $fn
        ];
    }
}
