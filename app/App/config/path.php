<?php

namespace Sadam\framework\App\config;

use Sadam\framework\App\Service\ServiceString;

class path{

    protected static $pathSplitArray;
    protected static array $resulPath = [];

    protected static function paramInt()
    {
        $newPath = "([0-9]*)";
        return $newPath;
    }

    protected static function paramStr()
    {
        $newPath = "([a-zA-Z]*)";
        return $newPath;
    }

    public static function render($path)
    {
        self::$pathSplitArray = ServiceString::separateWords('/',$path);
        for ($i=0; $i < count(self::$pathSplitArray) ; $i++) { 
            if(self::$pathSplitArray[$i] == "param:int"){
                self::$resulPath[] = self::paramInt();
            }
            elseif(self::$pathSplitArray[$i] == "param:str"){
                self::$resulPath[] = self::paramStr();
            }else{
                self::$resulPath[] = self::$pathSplitArray[$i];
            }

        }
        return self::$pathSplitArray = ServiceString::concatenateStrings('/',self::$resulPath);
        
    } 


    
}