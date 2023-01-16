<?php

namespace Sadam\framework\App\Service;

use Sadam\framework\App\config\config;
use Sadam\framework\App\config\session;

class ServiceValidationUser {

    public ?string $data = '';
    public array $validasi = [];


    public function required($data)
    {
        $this->data = $data;

        if($this->data == NULL || $this->data == ' '){
            session::validasiSessionRequired();
            header('location: '.config::validasiError());
            exit;
        }   
    }

    public function max($data,$max)
    {
        
        $this->data = $data;
        if(strlen($this->data) > $max)
        {
            session::validasiSessionMax();
            header('location: '.config::validasiError());
            exit;
        }
    }

    public function min($data,$max)
    {
        
        $this->data = $data;
        if(strlen($this->data) < $max)
        {
            session::validasiSessionMin();
            header('location: '.config::validasiError());
            exit;
        }
    }

}




