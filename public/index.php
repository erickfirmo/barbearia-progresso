<?php

// Requires composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Creating the router instance
$router = new \ErickFirmo\Router;

// Defining namespaces
$router->setNamespace('System\\');

// Defining routes
require_once __DIR__ . '/../src/routes.php';


// Run the router
$router->run();