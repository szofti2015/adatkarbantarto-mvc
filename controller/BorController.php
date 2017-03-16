<?php

namespace controller;

require 'model\Bor.php';

use model\Bor as Bor;


class BorController extends Controller{


    // az absztract osztály miatt
    public function listAction(){

        $borService = new BorService();

        $borList = $borService->findAll();

        $dataObj->addProp('borList', $borList);

        $this->viewResult = 'borlist';
    }


    public function createAction(){}
    public function updateAction(){}
    public function deleteAction(){}

    // interface miatt
    public function createTitle()
    {

        // TODO: Nemzetközivé tétel i18n
        $this->dataObj->addProp('title', "Borok listája");
    }

}
