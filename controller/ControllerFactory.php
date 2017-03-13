<?php

namespace controller;

require 'errorhandling\NotControllerClassInstanceException.php';
require 'errorhandling\ControllerFileNotFoundException.php';


use utils\Utils as Utils;
use config\GlobalConfig as Config;
use errorhandling\NotControllerClassInstanceException as 
    NCCIE;
use errorhandling\ControllerFileNotFoundException as ControllerFileNotFoundException;


/**
* gyártó objektum a controller paraméterben kapott
* érték alapján példányosít egy Controller típusú objektumot
* és visszaadja azt!
*/
class ControllerFactory {

    const NAMESPACE_SEPARATOR = '\\';
    private $helper;

    public function __construct(RequestHelper $helper){
        $this->helper = $helper;        // DI - Dependency Injection
    }

    public function produceController(){

        $controllerName = Utils::toPascalCase($this->helper->getControllerName().
                        Utils::toPascalCase($this->helper->getControllerPostFixName()));


        $controllerFilePath = Config::CONTROLLER_DIR.
                DIRECTORY_SEPARATOR.$controllerName.
                Config::PHP_EXT;
            
        if(!file_exists($controllerFilePath) 
            && !is_file($controllerFilePath))
        {
            throw new ControllerFileNotFoundException($controllerFilePath." nem létezik!");
        }

        require $controllerFilePath;
        
        // névtér és osztály neve
        $controllerNameWithNamespace = __NAMESPACE__.self::NAMESPACE_SEPARATOR .$controllerName;

        // a sztring alapján példányosítunk
        $controllerObj = new $controllerNameWithNamespace($this->helper);
        
        if(!($controllerObj instanceof Controller)) {
            throw new NCCIE($controllerName.'Nem Controller osztálypéldány!');
        }

        return $controllerObj;

    }

}


?>
