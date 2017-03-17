<?php

namespace controller;

require 'model\Bor.php';
require 'service\BorService.php';

use model\Bor as Bor;
use service\BorService;


class BorController extends Controller{

    // az absztract osztály miatt
    public function listAction(){

        $borService = new BorService($this->helper);

        $borList = $borService->findAll();

        $this->dataObj->addProp('borList', $borList);

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
