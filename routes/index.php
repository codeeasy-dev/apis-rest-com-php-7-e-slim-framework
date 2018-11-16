<?php

use function src\slimConfiguration;
use App\Controllers\ProdutoController;
use App\Controllers\LojaController;

$app = new \Slim\App(slimConfiguration());

// =========================================

$app->get('/loja', LojaController::class . ':getLojas');
$app->post('/loja', LojaController::class . ':insertLoja');
$app->put('/loja', LojaController::class . ':updateLoja');
$app->delete('/loja', LojaController::class . ':deleteLoja');

$app->get('/produto', ProdutoController::class . ':getProdutos');
$app->post('/produto', ProdutoController::class . ':insertProduto');
$app->put('/produto', ProdutoController::class . ':updateProduto');
$app->delete('/produto', ProdutoController::class . ':deleteProduto');

// =========================================

$app->run();
