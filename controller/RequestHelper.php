<?php

namespace controller;

/**
* Az osztály célja, hogy megteremtse a kapcsolatot
* az osztályok között
* visitor tervezési minta
* Rajta keresztül tudnak kommunikálni az
* objektumok
*/
class RequestHelper {
    private $configurator;          // AppConfigurator obj
    private $requestParams;         // $_GET és $_POST
    private $sessionParams;         // $_SESSION

    public function __construct(AppConfigurator $configurator){
        $this->configurator = $configurator;
        $this->requestParams = $_REQUEST;

        session_start();
        $this->sessionParams = $_SESSION;
    }

    /**
     * GET és POST tömbökből kérdez le kulcs alapján értékeket
     * @param varible $key GET v. POST tömb kulcsa
     * @return varible a kulcshoz tartozó
     */
    public function getRequestParam($key){
        if(isset($this->requestParams[$key]))
            return $this->requestParams[$key];

        return null;
    }

    /**
     * Minden paramétert visszaad
     * @return variable
     */
    public function getAllParams(){
        return $this->requestParams;
    }

    public function getSessionParam($key){
        return $this->sessionParams[$key];
    }

    public function getAllSessions(){
        return $this->sessionParams;
    }

    /**
     * Visszaadja a kontroller nevét
     * @return [[Type]] [[Description]]
     */
    public function getControllerName(){
        if($this->getRequestParam($this->configurator->getControllerPostFixName()) != null)
        {
            return $this->getRequestParam($this->configurator->getControllerPostFixName());
        }

        return $this->configurator->getDefaultControllerName();
    }
    
    /**
     * A controller osztály nevének a végét adja vissza
     * @return [[Type]] [[Description]]
     */
    public function getControllerPostFixName(){
        return $this->configurator->getControllerPostFixName();
    }

    /**
     * Az action nevét adja vissza, ha nincs ilyen paraméter
     * akkor a GlobalConfig-ból veszi ki
     * @return [[Type]] [[Description]]
     */
    public function getActionName(){
        if($this->getRequestParam($this->configurator->getActionParamName()) != null){
            return $this->getRequestParam($this->configurator->getActionParamName());
        }

        return $this->configurator->getDefaultActionName();
    }

    /**
     * Az action metódusok utótagát kérdezi le
     * @return [[Type]] [[Description]]
     */
    public function getActionMethodPostfix(){
        return $this->configurator->getActionMethodPostfix();
    }

    public function getViewDir(){
        return $this->configurator->getViewDir();
    }

    public function getDbConfig(){
        return $this->configurator->getDbConfig();
    }
}


?>
