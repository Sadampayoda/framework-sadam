<?php 

require_once __DIR__ . "/../vendor/autoload.php";

use Sadam\framework\App\config\Router;
use Sadam\framework\App\Controller\AppController;
use Sadam\framework\App\Controller\LoginController;




Router::get('/',[AppController::class,'index']);
Router::Redirect('/tes','/login');
Router::post('/login',[LoginController::class,'login']);
Router::post('/halo',[AppController::class,'getPost']);
Router::get('/sadam/oke',[AppController::class,'tes']);

