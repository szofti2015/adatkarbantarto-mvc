<?php

namespace controller;

class BorController extends Controller{

    // az absztract osztály miatt
    public function listAction(){
        $this->viewResult = 'borlist';
    }


    public function createAction(){}
    public function updateAction(){}
    public function deleteAction(){}

    // interface miatt
    public function createTitle()
    {
        $dataObj = DataObject::getInstance();

        // TODO: Nemzetközivé tétel i18n
        $dataObj->addProp('title', "Borok listája");
    }

}
