<?php

use TinyWeb\TinyWeb;

if (!function_exists('dd')) {
    function dd()
    {
        var_dump(func_get_args());
        die();
    }
}

if (!function_exists('app')) {
    function app()
    {
        return TinyWeb::init();
    }
}
