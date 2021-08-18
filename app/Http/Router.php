<?php

namespace App\Http;

use Pecee\SimpleRouter\SimpleRouter;

class Router extends SimpleRouter
{
    public static function start(): void
    {
        require_once dirname(__DIR__) . '/helpers.php';
        require_once '../routes/web.php';

        parent::start();
    }
}
