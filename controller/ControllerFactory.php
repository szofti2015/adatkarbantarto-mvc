<?php

namespace controller;


use utils\Utils as Utils;

/**
* gyártó objektum a controller paraméterben kapott
* érték alapján példányosít egy Controller típusú objektumot
* és visszaadja azt!
*/
class ControllerFactory {

    private $helper;

    public function __construct(RequestHelper $helper){
        $this->helper = $helper;        // DI - Dependency Injection
    }

    public function produceController(){

        $controllerName = Utils::toPascalCase($this->helper->getControllerName()).'Controller';

        print $controllerName;

        require "controller".DIRECTORY_SEPARATOR.$controllerName.".php";

        $controllerObj = new $controllerName;

        return $controllerObj;

    }

}


?>
