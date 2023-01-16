<?php

namespace Sadam\framework\App\config;

use Sadam\framework\App\config\GetRouter;


class Router {

    protected static array $route = [];

    public static function get(string $path , array $controller = [])
    {
        // var_dump($_REQUEST);
        self::$route = GetRouter::Router($path,$controller);
        $result = GetRouter::runRouter('get',self::$route);
        
        return $result;

    }

    public static function post(string $path , array $controller = [])
    {
        
        self::$route = GetRouter::Router($path,$controller);
        $result = GetRouter::runRouter('post',self::$route);
        
        return $result;
    }

    public static function Redirect(string $pathStart , string $pathEnd)
    {
        if($_SERVER['REQUEST_URI'] != '/'){
            if($_SERVER['PATH_INFO'] == $pathStart){ 
                header('location:'.$pathEnd);
                exit;
                
            }
            
        }
    }

    public static function active(array $route)
    {
        var_dump($route);
    }
}