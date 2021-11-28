<?php

use CodingTest\Sirclo\SimpleMVC\Cores\Router;
use CodingTest\Sirclo\SimpleMVC\Controllers\BeratController;

Router::addRoute('GET', '/', BeratController::class, 'index');
Router::addRoute('GET', '/data/create', BeratController::class, 'showCreate');
Router::addRoute('GET', '/data/([0-9a-zA-Z]*)', BeratController::class, 'show');
Router::addRoute('GET', '/data/([0-9a-zA-Z]*)/edit', BeratController::class, 'showEdit');
Router::addRoute('POST', '/data/create', BeratController::class, 'create');
Router::addRoute('POST', '/data/update', BeratController::class, 'update');

Router::init();