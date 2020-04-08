<?php

namespace TinyPost\Router;

class Router
{

    protected array $routes = [];

    public function __construct()
    {
        //
    }


    public function get(string $path, string $controller, string $method)
    {
        $this->routes[] = [$path => $controller, 'method' => $method];
    }


    public function handleRequest()
    {
        $req = $_SERVER;

        dd($req['REQUEST_URI']);
    }


    protected function match($uri)
    {
    }
}
