<?php

namespace controller;   // saját névtére

// másik névtérre való hivatkozás
use config\GlobalConfig as GlobalConfig;

/*
* Osztály az alkalmazás konfigjához
*/
class AppConfigurator{

    private $defaultControllerName;
    private $defaultActionName;

    public function __construct(){

        if (func_num_args() == 0){
            $this->defaultControllerName =
                GlobalConfig::DEFAULT_CONTROLLER_NAME;

            $this->defaultActionName =
                GlobalConfig::DEFAULT_ACTION_NAME;

        } else if(func_num_args() == 1) {
            // json állományól jönnek a konfiguráció adatok
            echo func_get_arg(0);
        } else if (func_num_args() == 2){
            $this->defaultControllerName =
                func_get_arg(0);

            $this->defaultActionName =
                func_get_arg(1);
        }

        print $this->defaultControllerName;
        print "<br>";
        print $this->defaultActionName;


    }

}



?>
