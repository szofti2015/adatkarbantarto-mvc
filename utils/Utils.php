<?php

namespace utils;

final class Utils {

    public static function toPascalCase($str){
        return strtoupper($str[0]).substr($str, 1);
    }

}

?>
