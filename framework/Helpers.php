<?php

use TinyWeb\TinyWeb;

if (!function_exists('dd')) {
    function dd($thing)
    {
        var_dump($thing);
        die();
    }
}


if (!function_exists('app')) {

    function app()
    {
        return  TinyWeb::init();
    }
}

if (!function_exists('router')) {

    function router()
    {
        return app()->get("router");
    }
}
