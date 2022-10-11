<?php
require_once './app/models/auto.Model.php';
require_once './app/views/auto.View.php';
require_once './app/helpers/auth.Helper.php';

class AutoController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new AutoModel();
        $this->view = new AutoView();

         // barrera de seguridad
         $this->authHelper = new AuthHelper();
         //$authHelper->checkLoggedIn();
    }

    public function showAutos() {
        session_start();
        $autos = $this->model->getTodosAutos();
        $this->view->showAutos($autos);
    }

    public function addAuto() {
        $patente = $_POST['patente'];
        $duenio = $_POST['duenio'];

        $this->model->insertAuto($patente, $duenio);
        header("Location: " . BASE_URL .'list'); 
    }

    public function deleteAuto($id) {
        $this->model->deleteAutoById($id);
        header("Location: " . BASE_URL .'list'); 
    }

    public function editAuto($id) {
        session_start();
        $auto = $this->model->editAutoById($id);
        $this->view->editAuto($auto);
        //header("Location: " . BASE_URL . 'list'); 
    }

    public function updateAuto($id) {
        session_start();
        $patente = $_POST['patente'];
        $duenio = $_POST['duenio'];
        $this->model->updateAutoById($id,$patente,$duenio);
        header("Location: " . BASE_URL . "list");
    }


    //Section->HOME
    public function showHome() {
        session_start();
        $this->view->showHome();
    }

}

?>
