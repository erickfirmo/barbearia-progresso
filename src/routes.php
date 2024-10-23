<?php

// Defining namespace
$router->setNamespace('System\Controllers\\');

// Defining routes
$router->get('/barbearia-progresso/', 'SiteController', 'index', 'home');


$router->post('/barbearia-progresso/agendar', 'SiteController', 'agendar', 'agendar');


  