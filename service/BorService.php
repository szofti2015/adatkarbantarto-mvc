<?php

namespace service;

require 'IService.php';
require 'repository/BorFileRepository.php';
require 'repository/BorDbRepository.php';

use controller\RequestHelper;
use repository\BorDbRepository;
use repository\BorFileRepository;

class BorService implements IService {

    private $helper;

    public function __construct(RequestHelper $helper)
    {
        $this->helper = $helper;
    }

    public function findAll()
    {
        // $repository = new BorFileRepository();
        $repository = new BorDbRepository($this->helper);

        return $repository->findAll();

    }

    public function findOne($id)
    {
        // az id-je alapján egy adott bor adatait szereném kinyerni
    }

    public function save($obj)
    {
        // egy új bor tárolok el
    }

    public function edit($obj, $id)
    {
        // egy már létező bor adatai módosítom
    }

    public function delete($id)
    {
        // id alapján törlök
    }
}

?>