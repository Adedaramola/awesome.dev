<?php

use App\CreateTable;
use App\Database;
use App\Http\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$table = new CreateTable((new Database())->connect());
$table->createTable();

// Start routing
Router::start();
