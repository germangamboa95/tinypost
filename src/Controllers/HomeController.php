<?php


namespace TinyPost\Controllers;

use TinyWeb\Http\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {

        return $this->views->render('home', ['title' => "This is a website"]);
    }
}
