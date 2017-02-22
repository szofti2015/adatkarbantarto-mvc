<?php

require "config/GlobalConfig.php";
require "controller/AppConfigurator.php";

use config\GlobalConfig as Config;
use controller\AppConfigurator as AppConfigurator;

try {


    /*
adatkarbantarto-mvc/index.php?controller=bor&action=edit&id=x
    */


    /* BorController include + init
    */

    /*
        BorController::editAction(id) */

    new AppConfigurator("index", "index");
//    new RequestHelper(new AppConfigurator());


} catch (Exception $ex) {
    print "<pre>";
    print_r($ex);
    print "</pre>";
}

?>
