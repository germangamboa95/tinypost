<?php

namespace TinyWeb\Http\Routing;


class Request
{
    public $url;

    public $query;

    public $body;

    public $method;

    public function __construct()
    {
        $this->url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $this->body = $_POST;
        $this->query = $_GET;
        $this->method = $_SERVER['REQUEST_METHOD'];
    }


    public static function make()
    {
        return new self();
    }
}
