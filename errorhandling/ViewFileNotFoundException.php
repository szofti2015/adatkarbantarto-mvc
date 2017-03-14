<?php

namespace errorhandling;

class ViewFileNotFoundException extends \Exception {
    public function __constuct($errorMsg){
        parent::__construct($errorMsg);
    }
}

?>
