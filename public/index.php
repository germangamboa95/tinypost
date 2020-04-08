<?php

use TinyPost\TinyPost;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Helpers/Utils.php';
require_once __DIR__ . '/../src/Router/Routes.php';


$app =  TinyPost::make();


router()->handleRequest();


$view = $app->view;

$view->render('home', ['test' => 'Hello world this is dumb']);
