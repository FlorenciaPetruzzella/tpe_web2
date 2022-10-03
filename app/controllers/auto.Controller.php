<?php
require_once './app/models/auto.Model.php';
require_once './app/views/auto.View.php';

class AutoController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new AutoModel();
        $this->view = new AutoView();
    }

    public function showAutos() {
        $autos = $this->model->getTodosAutos();
        $this->view->showAutos($autos);
    }



}





?>
