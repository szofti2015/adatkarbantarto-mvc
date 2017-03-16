<?php

namespace controller;

class MainController extends Controller {

    public function listAction() {

    }
    public function createAction(){

    }
    public function updateAction(){

    }
    public function deleteAction(){

    }

    public function mainAction(){

        $this->viewResult = "main";
    }

    public function createTitle(){
        $dataObj = DataObject::getInstance();
        $dataObj->addProp('title', "Főoldal");
    }
}

?>
