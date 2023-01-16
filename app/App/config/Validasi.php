<?php

namespace Sadam\framework\App\config;

use Sadam\framework\App\config\Query;
use Sadam\framework\App\Service\ServiceString;
use Sadam\framework\App\Service\ServiceValidationUser;

class Validasi{

    // if in the table row there is an email, you can activate it, or you can validate other than email, password, and username

    protected static $username;
    protected static $password;
    // private static $email;

    public static function check(array $data)
    {
        self::$username = $data['username'];
        self::$password = $data['password'];
        $query = new Query();
        $result = $query->validasiLogin(self::$username,self::$password);
        
        return $result;
    }

    public static function validasiLoginUser(?string $data, array $typeValidasi)
    {
        $activateValidasi = new ServiceValidationUser();
        for ($i=0; $i < count($typeValidasi) ; $i++) { 
            $resultData = ServiceString::separateWords(' ',$typeValidasi[$i]);
            if(count($resultData) == 1){
                $result = $typeValidasi[$i];
                $activateValidasi->$result($data);
            }else{
                $dataFunction = $resultData[0];
                $activateValidasi->$dataFunction($data,$resultData[2]);
            }

            
            
           
        }
    }

}