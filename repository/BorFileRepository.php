<?php
/**
 * Created by PhpStorm.
 * User: azoltan
 * Date: 2017. 03. 17.
 * Time: 12:10
 */

namespace repository;

use controller\RequestHelper;
use model\Bor;

require 'IRepository.php';


class BorFileRepository implements IRepository
{
    private $helper;

    public function __construct(RequestHelper $helper)
    {
        $this->helper = $helper;
    }

    public function findAll()
    {
        $back = [];
        $i = 0;

        $content = file_get_contents('assets/borok.csv');

        $lines = explode(PHP_EOL, $content);

        foreach ($lines as $line){
            $data = explode(';', $line);

            $back[] = new Bor(++$i, $data[0], $data[1], intval($data[2]));
        }

        return $back;

    }


}