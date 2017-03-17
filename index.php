<?php

require "config/GlobalConfig.php";
require "controller/AppConfigurator.php";
require "controller/RequestHelper.php";
require "controller/ControllerFactory.php";
require "controller/Controller.php";
require "controller/DataObject.php";
require "utils/Utils.php";

use config\GlobalConfig as Config;
use controller\AppConfigurator as AppConfigurator;
use controller\RequestHelper as RequestHelper;
use controller\ControllerFactory as ControllerFactory;
use controller\Controller as Controller;
use controller\DataObject as DataObject;
use utils\Utils as Utils;

try {
    $helper = new RequestHelper(new AppConfigurator('config.json'));

    // gyártó tervezési minta
    $factory = new ControllerFactory($helper);
    
    $controller = $factory->produceController();

    $controller->handleRequest();   // model ->

    $controller->resolveView();     // view

} catch (Exception $ex) {
    print "<div style='color:red'>";
    print $ex->getMessage();
    print "</div>";

    print "<table border='1' cellspacing='0' cellpadding='1'>";
    print $ex->xdebug_message;
    print "</table>";
}

?>
