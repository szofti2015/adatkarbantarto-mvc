<?php

namespace errorhandling;

/**
 * 
 */
class ControllerFileNotFoundException extends \Exception
{
    
    public function __construct($msg)
    {
        parent::__construct($msg);
    }
}
