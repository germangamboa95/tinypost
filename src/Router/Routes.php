<?php

use TinyPost\Controllers\HomeController;

router()->get("/", HomeController::class, 'index');
