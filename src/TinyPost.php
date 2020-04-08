<?php

namespace TinyPost;

use TinyPost\Router\Router;
use TinyPost\Views\View;

class TinyPost
{

    private static $instance = null;

    public View $view;

    public Router $router;

    public function __construct()
    {
        $this->view = new View();

        $this->router = new Router();
    }

    public static function make()
    {
        if (self::$instance) {
            return self::$instance;
        }


        echo "I was called";
        $instance = new self();

        self::$instance = $instance;

        return   self::$instance;
    }
}
