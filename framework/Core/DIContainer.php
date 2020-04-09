<?php

namespace TinyWeb\Core;

use Closure;
use InvalidArgumentException;

abstract class DIContainer
{

    protected array $instances = [];

    protected array $services = [];

    protected array $singletons = [];

    // abstract function __construct();

    public function set(string $key, callable $func): void
    {

        $this->services[$key] = $func;
    }

    public function singleton(string $key, callable $func)
    {
        $this->singletons[$key] = $func;
    }

    public function get(string $key)
    {
        if (array_key_exists($key, $this->singletons)) {

            if ($this->singletons[$key] instanceof Closure) {
                $this->singletons[$key] =  $this->singletons[$key]($this);
            }
            return $this->singletons[$key];
        }

        if (array_key_exists($key, $this->services)) {
            return $this->services[$key]($this);
        }

        throw new InvalidArgumentException("$key does not exist in application");
    }
}
