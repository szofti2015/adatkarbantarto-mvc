<?php

namespace errorhandling;

class ConfigJsonNotFoundException extends \Exception {

    public function __construct($errorMsg){

        parent::__construct($errorMsg);

    }
}


?>
