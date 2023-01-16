<?php 

namespace Sadam\framework\App\config;

// use Sadam\framework\App\Controller\AppController;
// use Sadam\framework\App\config\Router;

class config{
    
    public static function HOME()
    {
        return header('location: /');  
        exit;
    }

    public static function validasi()
    {
        return 'users';
    }

    public static function serverDB()
    {
        return 'localhost';
    }

    public static function validasiError()
    {
        return '/keluar';
    }


}
