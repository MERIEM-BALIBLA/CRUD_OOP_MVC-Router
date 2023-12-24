<?php

namespace NS\controller;

use NS\model\Mediamodel;

class Mediacontroller {
    private $model;

    public function __construct() {
        require_once(__DIR__.'/../model/Mediamodel.php');
        $this->model = new Mediamodel();
    }

    public function insertAction($des) {
        $add = $this->model->insert($des);
        return $add;
    }

    public function readAction() {
        $read = $this->model->read();
        return $read;
    }

    public function showAction($id) {
        return $this->model->show($id);
    }

    public function editAction($id,$des) {
        return $this->model->edit($id,$des);
    }

    public function deleteAction($id) {
        return $this->model->delete($id);
    }
}
