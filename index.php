<?php

require "config/GlobalConfig.php";
require "controller/AppConfigurator.php";

use config\GlobalConfig as Config;
use controller\AppConfigurator as AppConfigurator;

try {


    /*
        adatkarbantarto-mvc/index.php?controller=bor&action=edit&id=x
    */


    /*
        BorController include + init
    */

    /*
        BorController::editAction(id) */

    new AppConfigurator('config.json');
//    new RequestHelper(new AppConfigurator());


} catch (Exception $ex) {
    print "<div style='color:red'>";
    print $ex->getMessage();
    print "</div>";

    print "<table border='1' cellspacing='0' cellpadding='1'>";
    print $ex->xdebug_message;
    print "</table>";
}

?>
