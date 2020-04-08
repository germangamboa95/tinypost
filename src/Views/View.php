<?php


namespace TinyPost\Views;



class View
{

    protected $ext = '.germ';


    public function render(string $viewName, array $data = []): void
    {
        $path = __DIR__ . "/" . $viewName . $this->ext;
        extract($data);
        require_once($path);
    }
}
