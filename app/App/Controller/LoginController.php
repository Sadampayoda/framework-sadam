<?php

namespace Sadam\framework\App\Controller;

use Sadam\framework\App\config\controller;
use Sadam\framework\App\config\Validasi;
use Sadam\framework\App\config\view;
use Sadam\framework\App\Service\ServiceValidationUser;

class LoginController implements controller  {

    public function index()
    {
        
    }

    public function Login()
    {

        
        $dataName = 'sadam';
        $dataPassword = 'sadam';

        // Validasi::validasiLoginUser($dataName,[
        //     'required',
        //     'max = 10',
        //     'min = 3'
        // ]);

        return view::get('login');

        

        
        // var_dump(Validasi::check($data));
        
        // if(Validasi::check($data)){
        //     return 'ada';
        // }

        // return 'gada';
    }
}