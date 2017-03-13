<?php

namespace errorhandling;

class NotControllerClassInstanceException extends \Exception {
    
    public function __construct($msg){
        parent::__construct($msg);
    }
}

?>