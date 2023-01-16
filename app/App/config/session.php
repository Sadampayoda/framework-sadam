<?php

namespace Sadam\framework\App\config;


class session{


    public static function validasiSessionRequired()
    {
        session_start();
        $_SESSION['error'] = 'This input must be filled because it is needed';
        
    }

    public static function validasiSessionMax()
    {
        session_start();
        $_SESSION['error'] = 'Your sentence is over the limit';
    }

    public static function validasiSessionMin()
    {
        session_start();
        $_SESSION['error'] = 'your sentence is less than';
    }

}