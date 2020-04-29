<?php

namespace TinyWeb\Http\Views;


class Engine
{

    public function render(string $view, $data = [])
    {

        extract($data);
        require_once(__DIR__ . "/../../../src/Views/$view.view.php");
    }
}
