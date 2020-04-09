<?php

namespace TinyWeb\Http\Routing;


class Request
{

    public $url;

    public $query;

    public $method;

    public function __construct()
    {
        $this->url = parse_url($_SERVER["REQUEST_URI"]);
        parse_str($_SERVER['QUERY_STRING'], $output);
        $this->query = $output;
        $this->method = $_SERVER['REQUEST_METHOD'];
    }


    public static function make()
    {
        return new self();
    }
}
