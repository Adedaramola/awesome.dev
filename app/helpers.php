<?php

use Pecee\Http\Request;
use Pecee\Http\Response;
use Pecee\Http\Url;
use Pecee\SimpleRouter\SimpleRouter as Router;

function url(?string $name = null, $parameters = null, ?array $getParams = null): Url
{
    return Router::getUrl($name, $parameters, $getParams);
}

function response(): Response
{
    return Router::response();
}

function request(): Request
{
    return Router::request();
}

function redirect(string $url, ?int $code = null): void
{
    if ($code !== null) {
        response()->httpCode($code);
    }

    response()->redirect($url);
}

function csrf_token(): ?string
{
    $baseVerifier = Router::router()->getCsrfVerifier();

    if ($baseVerifier !== null) {
        return $baseVerifier->getTokenProvider()->getToken();
    }

    return null;
}

function assets($file)
{
    $rootDir = dirname(__DIR__);

    return $rootDir . '/public/css/' . $file;
}
