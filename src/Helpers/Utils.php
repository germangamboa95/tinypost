<?php

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
        return  TinyPost\TinyPost::make();
    }
}

if (!function_exists('router')) {

    function router()
    {
        $app =  TinyPost\TinyPost::make();
        return $app->router;
    }
}
