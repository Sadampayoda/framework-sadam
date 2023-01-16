<?php

namespace Sadam\framework\App\config;

use Sadam\framework\App\config\config;
// use mysqli;

class Database{
    public $connection;

    protected array $Db = [];

    public function Add($username,$password,$nameDb)
    {
        $this->Db = [
            'username' => $username,
            'password' => $password,
            'nameDB' => $nameDb
        ];
    }

    public function connection()
    {
        if($this->checkConnectDb() == NULL){
            $this->connection = mysqli_connect(
                    config::serverDB(),
                    $this->Db['username'],
                    $this->Db['password'],
                    $this->Db['nameDb']
            );
    
            return $this->connection;
        }
        $this->connection = NULL;
        return $this->connection;
    }

    public function checkConnectDb()
    {
        if($this->Db['username'] == NULL || $this->Db['password'] == NULL ||$this->Db['nameDb'] == NULL ){
            return NULL;
        }
        return TRUE;
    }


}