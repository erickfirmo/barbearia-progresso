<?php

// Defining namespace
$router->setNamespace('System\Controllers\\');

// Defining routes
$router->get(['/', 'SiteController@index']);

$router->post(['/agendar', 'SiteController@agendar']);
  