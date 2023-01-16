<?php 


namespace Sadam\framework\App\config;

class view{

    public static function get(string $location, $result = '')
    {
    
        require __DIR__ . '/../view/'.$location.'.php';
    }

}