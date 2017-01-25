<?php

// Routes

//Affichage d'un vin grâce à nom
$app->get('/api/wines/search/{name}', Src\Controllers\WinesController::class . ':search')->setName('search');

//Affichage d'un vin grâce à son id
$app->get('/api/wines/{id}', Src\Controllers\WinesController::class . ':index')->setName('index');

//Affichage de tous les vins disponiblent
$app->get('/api/wines', Src\Controllers\WinesController::class . ':index')->setName('index');

//Ajout de vin
$app->post('/api/wines', Src\Controllers\WinesController::class . ':add')->setName('addWines');

$app->post('/home', Src\Controllers\WinesController::class . ':home')->setName('home');
