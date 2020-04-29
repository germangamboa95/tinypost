<?php

namespace TinyWeb\Http\Controllers;

use TinyWeb\Http\Views\Engine;

abstract class BaseController
{
    protected $views;

    public function __construct()
    {
        $this->views = app()->get(Engine::class);
    }
}
