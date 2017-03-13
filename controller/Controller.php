<?php

namespace controller;

abstract class Controller {
    private $helper;

    public function __construct(RequestHelper $helper) {
        $this->helper = $helper;
    }
    /**
     * FOgadja a kéréseket és a kérésekben megtalált
     * action paraméterek ala{pján futtatja a műveletet
     */
    public function handleRequest(){
        print "megy request";
    }
    
    /* CRUD create update delete műveletekhez
    azért abstract mert kötelezővé akarjuk tenni
    a gyerekosztályok számára az ottani imlementáciojukat!
    */
    public abstract function listAction();
    public abstract function createAction();
    public abstract function updateAction();
    public abstract function deleteAction();

    /**
     * Megjeleníti a kérés után a nézet állományt
     */
    public function resolveView(){
        print "megy a view";
    }

    

}



?>