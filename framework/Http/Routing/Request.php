<?php

namespace TinyWeb\Http\Routing;


class Request
{
    public static function make()
    {
        return new self();
    }
}
