<?php

namespace controller;   // saját névtére

require 'errorhandling\ConfigJsonNotFoundException.php';

// másik névtérre való hivatkozás
use config\GlobalConfig as GlobalConfig;
use errorhandling\ConfigJsonNotFoundException as ConfigJsonNotFoundException;

/*
* Osztály az alkalmazás konfigjához
*/
class AppConfigurator{

    private $defaultControllerName;
    private $defaultActionName;

    public function __construct(){

        switch(func_num_args()){
            case 0:
                $this->configFromParams();
            break;
            case 1:
                $this->configFromJson(func_get_arg(0));
            break;
            case 2:
                $this->configFromParams(func_get_arg(0), func_get_arg(1));
            break;
        }
    }

    /**
     * Visszadja az alapértelmezett kontroller nevét
     * @return [[Type]] [[Description]]
     */
    public function getDefaultControllerName(){
        return $this->defaultControllerName;
    }

    /**
     * Visszadja az alapértelmezett parancs nevét
     */
    public function getDefaultActionName(){
        return $this->defaultActionName;
    }

    /**
     * [[Description]]
     * @return [[Type]] [[Description]]
     */
    public function getControllerPostFixName(){
        return GlobalConfig::CONTROLLER_CLASS_POSTFIX;
    }

    /**
     * a construktor paramétereiből olvassa ki a konf adatotak
     * @param string $defController kontroller neve
     * @param string $defAction action neve
     */
    private function configFromParams($defController = GlobalConfig::DEFAULT_CONTROLLER_NAME,                                       $defAction = GlobalConfig::DEFAULT_ACTION_NAME){

        $this->defaultControllerName = $defController;
        $this->defaultActionName = $defAction;

    }

    /**
     * json-ből olvassa ki az adatokat
     * @param [[Type]] $jsonFile [[Description]]
     */
    private function configFromJson($jsonFile){
        // json állományól jönnek a konfiguráció adatok

        $path = GlobalConfig::CONFIG_DIR.DIRECTORY_SEPARATOR.$jsonFile;
        $jsonString = @file_get_contents($path);

        if($jsonString === false){
            throw new ConfigJsonNotFoundException("A json file-t nem sikeredett megnyitni!!!");
        }

        // json felépítésű a fájl???
        $jsonObj = json_decode($jsonString);

        $this->configFromParams($jsonObj->defaultControllerName,
                                $jsonObj->defaultActionName);
    }

    /**
     * [[Description]]
     * @return [[Type]] [[Description]]
     */
    public function getActionParamName(){
        return GlobalConfig::ACTION_PARAM_NAME;
    }

    public function getActionMethodPostfix(){
        return GlobalConfig::ACTION_METHOD_POSTFIX;
    }

    public function getViewDir(){
        return GlobalConfig::VIEW_DIR;
    }

}
?>
