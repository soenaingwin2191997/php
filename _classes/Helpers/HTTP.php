<?php

namespace Helpers;

class HTTP{
    static $root="http://localhost/exercise/4/";
    static function redrect($path,$q=""){
        $url=static::$root.$path;
        if($q) $url.="?$q";

        header("location: $url");
        exit();
    }
}