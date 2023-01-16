<?php 

namespace Sadam\framework\App\config;

use Sadam\framework\App\config\config;

class GetRouter{

    protected static $data ;
    protected static $result;

    public static function Router($path, $controller)
    {
        self::$result = [
            'path' => $path,
            'controller' => $controller
        ];

        return self::$result;
    }


    public static function runRouter($method,$data)
    {
        $path = "/";
        // return $data;
        if(isset($_SERVER['PATH_INFO']))
        {
            $path = $_SERVER['PATH_INFO'];
        }
       
        if($path == $data['path']){
            $controller = $data['controller'][0];
            $function = $data['controller'][1];
            $ActiveController = new $controller;    
            if(!empty($_REQUEST))
            {
                $ActiveController->$function(Request::Request());
            }else{
        
                $ActiveController->$function();
            }

        }
        
            
            

        

        
        error_reporting(404);
    }
}