<?php

namespace errorhandling;

class ActionMethodNotFoundException extends \Exception {

    public function __construct($errorMsg){
        parent::__construct($errorMsg);
    }
}
