<?php

use App\Http\Controllers\SiteController;
use App\Http\Router;
use App\Middlewares\CsrfVerifier;

// Router::csrfVerifier(new CsrfVerifier());

Router::group(['exceptionHandler' => \App\Handlers\ExceptionHandler::class], function () {
    Router::get('/', [SiteController::class, 'index']);
    Router::get('/resume', [SiteController::class, 'resume']);
    Router::get('/contact-me', [SiteController::class, 'contact']);
    Router::post('/contact-me', [SiteController::class, 'sendEmail']);
});
