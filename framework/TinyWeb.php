<?php

namespace TinyWeb;

use InvalidArgumentException;

class TinyWeb
{

    private static $instance = null;

    protected array $services = [];

    protected array $singletons = [];

    public function add(string $key, callable $func): void
    {

        $this->services[$key] = $func;
    }

    public function singleton(string $key, callable $func)
    {
        $this->singletons[$key] = $func();
    }

    public function get(string $key)
    {
        if (array_key_exists($key, $this->singletons)) {
            return $this->singletons[$key];
        }

        if (array_key_exists($key, $this->services)) {
            return $this->services[$key]();
        }

        throw new InvalidArgumentException("$key does not exist in application");
    }




    public static function init()
    {
        if (self::$instance) {
            return self::$instance;
        }

        $instance = new self();

        self::$instance = $instance;

        return   self::$instance;
    }
}
