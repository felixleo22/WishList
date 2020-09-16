<?php
use \Slim\Views\Twig;
use \Slim\Http\Uri;
use \Slim\Http\Environment;
use \Slim\Views\TwigExtension;

setlocale(LC_TIME, 'fr', "fr_FR", "fr.utf8", "fr_FR.utf8", "fr_FR.utf-8");
define("HOSTNAME", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]");

return [
    'view' => function ($c) {
        $view = new Twig('../views');

        // Instantiate and add Slim specific extension
        $router = $c->get('router');
        $uri = Uri::createFromEnvironment(new Environment($_SERVER));
        $view->addExtension(new TwigExtension($router, $uri));
    
        return $view;
    },
    'settings' => [
        'displayErrorDetails' => true,
    ],
];