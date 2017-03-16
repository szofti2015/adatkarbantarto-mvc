<?php

namespace model;

class Bor {

    private $borId;

    public function getId(){
        return $this->borId;
    }

    public function setId($borId){
        $this->borId = $borId;
    }

    private $borNev;

    public function getNev(){
        return $this->borBor;
    }

    public function setNev($borNev){
        $this->borNev = $borNev;
    }

    private $borPalackozva;

    public function getPalackozva(){
        return $this->borPalackozva;
    }

    public function setPalackozva($borPalackozva){
        $this->borPalackozva = $borPalackozva;
    }

    private $borTipus;

    public function getTipus(){
        return $this->borTipus;
    }

    public function setTipus($borTipus){
        $this->borTipus = $borTipus;
    }

    public function __construct($borId = null, $borNev = null,
                               $borPalackozva = null, $borTipus = null){
        $this->borId = $borId;
        $this->borNev = $borNev;
        $this->borPalackozva = $borPalackozva;
        $this->borTipus = $borTipus;

    }

    public function __toString(){
        return $this->borId. ' : '.
                $this->borNev. ' : '.
                $this->borPalackozva . ' : '.
                $this->borTipus;
    }





}


?>
