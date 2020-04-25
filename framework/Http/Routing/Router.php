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

    public string $controllerNamespace = 'TinyPost\Controllers';


    public function handle(Request $request)
    {
        try {
            if (
                array_key_exists($request->method, $this->routes)
                && array_key_exists($request->url, $this->routes[$request->method])
            ) {

                $handler =  $this->routes[$request->method][$request->url]['handler'];
                $action =  explode('@', $handler)[1];
                $controller = $this->controllerNamespace . "\\" . explode('@', $handler)[0];

                return (new $controller)->$action($request);
            }

            throw new ErrorException("Route does not exist");
        } catch (\Throwable $th) {
            //throw $th;
            require_once(__DIR__ . "/../Views/404.html");
            die();
        }
    }

    public function get(string $path, string $handler)
    {
        $this->routes['GET'][$path] = [
            'handler' => $handler
        ];
    }

    public function post(string $path, string $handler)
    {
        $this->routes['POST'][$path] = [
            'method' => $handler
        ];
    }
}
