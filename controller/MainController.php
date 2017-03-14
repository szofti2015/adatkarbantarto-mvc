<?php

namespace controller;

class MainController extends Controller{

    public function listAction() {

    }
    public function createAction(){

    }
    public function updateAction(){

    }
    public function deleteAction(){

    }

    public function mainAction(){
        $helloMessage = "Üdvözöllek MCV alkalmazásomban!";

        $dataObj = DataObject::getInstance();
        $dataObj->addProp('helloMsg', $helloMessage)
            ->addProp('title', 'Helló MVC');

        $this->viewResult = "hello";
    }
}

?>
