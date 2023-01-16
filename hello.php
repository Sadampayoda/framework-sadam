<?php

require_once __DIR__ . '/vendor/autoload.php';

// echo tes();

// use Sadam\Framework\Controller\AppController;
use Sadam\framework\Controller\AppController;
$app = new AppController;

echo $app->index();

// echo "hello word";