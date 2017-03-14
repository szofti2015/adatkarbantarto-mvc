<?php

namespace controller;

/**
* Singleton/Egyke tervezési minta
*/
class DataObject {

    private static $instance = null;

    /* a konstruktor csak egyszer kerül meghívásra */
    private function __construct(){
        self::$instance = new \stdClass();
    }

    /**
     * @return null
     */
    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function addProp($property, $value){
        self::$instance->$property = $value;

        return self::$instance;
    }

    public static function getProp($property){
        return self::$instance->$property;
    }
}
?>
