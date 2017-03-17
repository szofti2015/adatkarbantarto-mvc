<?php

namespace model;

class Bor {

    private $borId;

    public function getBorId(){
        return $this->borId;
    }

    public function setBorId($borId){
        $this->borId = $borId;
    }

    private $borNev;

    public function getBorNev(){
        return $this->borNev;
    }

    public function setBorNev($borNev){
        $this->borNev = $borNev;
    }

    private $borTipus;

    public function getBorTipus(){
        return $this->borTipus;
    }

    public function setBorTipus($borTipus){
        $this->borTipus = $borTipus;
    }

    private $borPalackozva;

    public function getBorPalackozva(){
        return $this->borPalackozva;
    }

    public function setBorPalackozva($borPalackozva){
        $this->borPalackozva = $borPalackozva;
    }


    public function __construct($borId = null, $borNev = null,
                               $borTipus = null, $borPalackozva = null){
        $this->borId = $borId;
        $this->borNev = $borNev;
        $this->borTipus = $borTipus;
        $this->borPalackozva = $borPalackozva;

    }

    public function __toString(){
        return $this->borId. ' : '.
                $this->borNev. ' : '.
                $this->borTipus. ' : ';
                $this->borPalackozva;
    }





}


?>
