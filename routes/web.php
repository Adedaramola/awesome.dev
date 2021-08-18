<?php

use App\Http\Controllers\SiteController;
use App\Http\Router;



Router::get('/', [SiteController::class, 'index']);
