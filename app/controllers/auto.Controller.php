<?php
require_once './app/models/auto.Model.php';
require_once './app/views/auto.View.php';
require_once './app/helpers/auth.Helper.php';
require_once './app/models/service.Model.php';

class AutoController {
    private $model;
    private $view;
    private $authHelper;
    private $modelService;

    public function __construct() {
        $this->model = new AutoModel();
        $this->view = new AutoView();
        $this->authHelper = new AuthHelper();
        $this->modelService = new ServiceModel();
    }

    public function showAutos() {
        session_start();
        $autos = $this->model->getTodosAutos();
        $this->view->showAutos($autos);
    }

    public function addAuto() {
        if (isset($_POST['patente']) && isset($_POST['duenio']) && isset($_POST['modelo'])) {
            $this->authHelper->checkLoggedIn();
        
            $patente = $_POST['patente'];
            $duenio = $_POST['duenio'];
            $modelo = $_POST['modelo'];

            $this->model->insertAuto($patente, $duenio, $modelo);
            header("Location: " . BASE_URL .'listAutos'); 
        }
        
        else{
            var_dump("Complete todos los campos");
            die();
        }
    }

    public function deleteAuto($id) {
        $cantidad = $this->modelService->getServices($id);

        if($cantidad == 0){
            $this->model->deleteAutoById($id);
            header("Location: " . BASE_URL .'listAutos'); 
        }
        else{
            $this->view->deleteAuto($id);
        }
    }

    public function editAuto($id) {
        session_start();
        $auto = $this->model->editAutoById($id);
        $this->view->editAuto($auto);
    }

    public function updateAuto($id) {
        if (isset($_POST['patente']) && isset($_POST['duenio']) && isset($_POST['modelo'])) {
            $this->authHelper->checkLoggedIn();

            session_start();
            $patente = $_POST['patente'];
            $duenio = $_POST['duenio'];
            $modelo = $_POST['modelo'];

            $this->model->updateAutoById($id,$patente,$duenio,$modelo);

            header("Location: " . BASE_URL . 'listAutos');
        }
    }

}

?>
