<?php

namespace App\Http\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{
    public function view($template)
    {
        $templateDir = dirname(__DIR__) . '../../../views';
        $loader = new FilesystemLoader($templateDir);
        $twig = new Environment($loader);

        if (str_contains($template, '.')) {
            $template = str_replace('.', '/', $template);
        }

        return $twig->render($template . '.twig');
    }
}
