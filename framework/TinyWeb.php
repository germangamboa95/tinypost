<?php

namespace TinyWeb;

use TinyWeb\Core\DIContainer;

class TinyWeb extends DIContainer
{
    protected static $app = null;

    protected function __construct()
    {
        $this->loadConfig();
        $this->boot();
    }

    public function boot()
    {
        require_once __DIR__ . "/../src/Routes/web.php";
    }
    public function loadConfig()
    {
        ['singletons' => $singletons, 'services' => $services] = require_once(__DIR__ . "/../config/app.php");


        foreach ($singletons as $key => $value) {
            $this->singleton($key, $value);
        }

        foreach ($services as $key => $value) {
            $this->set($key, $value);
        }
    }


    public static function container()
    {
        if (!self::$app) {
            self::$app = new self();
        }

        return self::$app;
    }


    public static function init()
    {
        return self::container();
    }
}
