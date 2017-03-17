<?php
/**
 * Created by PhpStorm.
 * User: azoltan
 * Date: 2017. 03. 17.
 * Time: 12:11
 */

namespace repository;


use controller\RequestHelper;
use model\Bor;

class BorDbRepository implements IRepository
{
    private $conn;
    private $helper;

    public function __construct(RequestHelper $helper)
    {
        $this->helper = $helper;
    }

    public function findAll()
    {
        $back = [];

        $this->connect();

        $query = "SELECT bor_id, bor_nev, bor_tipus, bor_palackozva FROM bor";

        $result = $this->conn->query($query);

        // TODO: hibakezelés

        while($obj = $result->fetch_object()){
            $back[] = new Bor(intval($obj->bor_id), $obj->bor_nev, $obj->bor_tipus, intval($obj->bor_palackozva));
        }

        $this->disconnect();

        return $back;
    }

    private function connect()
    {
        $dbConfig = $this->helper->getDbConfig();

        // TODO: adatbázis hibák kivételkezelése!!!!
        $this->conn = new \mysqli($dbConfig->server, $dbConfig->dbuser,
                                $dbConfig->dbpass, $dbConfig->dbname);
    }

    private function disconnect()
    {
        if ($this->conn != null){
            $this->conn->close();
        }
    }



}