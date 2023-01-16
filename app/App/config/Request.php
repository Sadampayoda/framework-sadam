<?php

namespace Sadam\framework\App\config;


class Request{

    public static function Request()
    {
        $data = $_REQUEST;
        return $data;
    }

}