<?php 

namespace Sadam\framework\App\Controller;

use Sadam\framework\App\config\controller;
use Sadam\framework\App\config\view;


class AppController implements controller{
    public function index()
    {
        return view::get('index',[
            'tes' => 'oke'
        ]);
    }

    public function getPost($request)
    {
        return view::get('post',$request);
    }

    public function tes()
    {
        return view::get('param');
    }


}