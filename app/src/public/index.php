<?php
require_once('../../vendor/autoload.php');
require_once('../config/db.conf.php');

$container["settings"] = $config;

//database connection with Eloquent
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

//loading settings from config/settings.php
$settings = require_once "../config/settings.php";
$container = new \Slim\Container($settings);
$container["rootDir"] = __DIR__;
$app = new \Slim\App($container);


/** Routes */
//Add your routes here
$app->get('/', function ($request, $response, $args) {
    return $response->write("Hello world" . $args['name']);
});

//run application
$app->run();