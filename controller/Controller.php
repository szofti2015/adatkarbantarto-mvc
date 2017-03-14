<?php

namespace controller;

require 'errorhandling/ActionMethodNotFoundException.php';
require 'errorhandling/ViewFileNotFoundException.php';

use utils\Utils as Utils;
use config\GlobalConfig as Config;
use errorhandling\ActionMethodNotFoundException as ActionMethodNotFoundException;
use errorhandling\ViewFileNotFoundException as ViewFileNotFoundException;

use controller\DataObject as DataObject;

/**
* Absztakt osztály a controllerek kezeléséhez
*/
abstract class Controller {
    protected $helper;
    protected $viewResult;

    public function __construct(RequestHelper $helper) {
        $this->helper = $helper;
    }
    /**
     * Fogadja a kéréseket és a kérésekben megtalált
     * action paraméterek ala{pján futtatja a műveletet
     */
    public function handleRequest(){
        $actionName = $this->helper->getActionName().
            Utils::toPascalCase($this->helper->getActionMethodPostfix());

        if(method_exists($this, $actionName)){
            return $this->$actionName();
        } else {
            throw new ActionMethodNotFoundException($actionName.' methodus nem létezik!!!');
        }

    }
    
    /* CRUD create update delete műveletekhez
    azért abstract mert kötelezővé akarjuk tenni
    a gyerekosztályok számára az ottani imlementáciojukat!
    */
    public abstract function listAction();
    public abstract function createAction();
    public abstract function updateAction();
    public abstract function deleteAction();

    /**
     * Megjeleníti a kérés után a nézet állományt
     */
    public function resolveView(){

        // TODO: redirect, forward??

        // "view/hello.php"
        $viewPath = $this->helper->getViewDir().DIRECTORY_SEPARATOR.$this->viewResult.Config::PHP_EXT;

        if(!file_exists($viewPath) || is_dir($viewPath)){
            throw new ViewFileNotFoundException($viewPath.' nem létezik!');
        }

        include $viewPath;
    }

    

}



?>
