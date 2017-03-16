<?php

interface IService {

    public function findAll();
    public function findOne($id);
    public function edit($obj, $id);
    public function save($obj);
    public function delete($id);

}

?>
