<?php

$router->setNamespace('System\\');

$router->get(['/', 'SiteController@index']);

$router->get(['/', 'Mailler@index']);

  