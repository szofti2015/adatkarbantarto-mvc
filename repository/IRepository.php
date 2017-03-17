<?php
/**
 * Created by PhpStorm.
 * User: azoltan
 * Date: 2017. 03. 17.
 * Time: 12:07
 */

namespace repository;


use controller\RequestHelper;

interface IRepository
{
    public function __construct(RequestHelper $helper);

    public function findAll();
}