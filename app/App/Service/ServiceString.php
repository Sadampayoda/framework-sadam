<?php 

namespace Sadam\framework\App\Service;

class ServiceString{
    protected static $data;
    
    public static function separateWords($type, $data)
    {
        self::$data = explode($type, $data);
        return self::$data;

    }
    public static function concatenateStrings($type, array $data)
    {
        self::$data = implode($type,$data);
        return self::$data;
    }

}