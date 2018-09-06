<?php

use function src\slimConfiguration;
use App\Controllers\ProductController;

$app = new \Slim\App(slimConfiguration());

// =========================================

$app->get('/', ProductController::class . ':getProducts');

// =========================================

$app->run();
