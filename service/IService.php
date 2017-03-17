<?php

namespace service;

use controller\RequestHelper;

interface IService {

    public function __construct(RequestHelper $requestHelper);

    public function findAll();
    public function findOne($id);
    public function save($obj);
    public function edit($obj, $id);
    public function delete($id);

}

?>
