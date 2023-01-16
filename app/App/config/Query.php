<?php

namespace Sadam\framework\App\config;

use mysqli;
use Sadam\framework\App\config\config;
use Sadam\framework\App\config\Database;


class Query extends Database{

    protected static $query;
    
    public function validasiLogin($username,$password)
    {
        $DB = config::validasi();
        self::$query = "SELECT * FROM $DB WHERE username = $username AND password = $password";

        if($this->connection != NULL)
        {
            if(mysqli_affected_rows($this->connection) > 0){
                return TRUE;
            }
        }
        return FALSE;
        
    } 


    

}