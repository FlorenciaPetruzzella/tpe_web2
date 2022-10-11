<?php

require_once './app/models/service.Model.php';
require_once './app/views/service.View.php';



class ServiceController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new ServiceModel();
        $this->view = new ServiceView();
    }

    public function showServices($id) {
        session_start();
        $services = $this->model->getServices($id);
        $this->view->showServices($services);
    }
    
    public function addService($id) {
        $fecha = $_POST['fecha'];
        $km = $_POST['km'];
        $km_prox_service = $_POST['km_prox_service'];
        $gastos_repuestos = $_POST['gastos_repuestos'];
        $gastos_mo = $_POST['gastos_mo'];
        $descripcion = $_POST['descripcion'];

        $this->model->insertService($id, $fecha, $km, $km_prox_service, $gastos_repuestos, $gastos_mo, $descripcion); 
        header("Location: " . BASE_URL . 'showServices/' . $id); 
    }

    public function deleteService($id) {
        $this->model->deleteServiceById($id);
        header("Location: " . BASE_URL . 'showServices/' . $id); 
    }

    public function editService($id) {
        $service = $this->model->editServiceById($id);
        $this->view->editService($service);
    }

    public function updateService($id) {
        $fecha = $_POST['fecha'];
        $km = $_POST['km'];
        $km_prox_service = $_POST['km_prox_service'];
        $gastos_repuestos = $_POST['gastos_repuestos'];
        $gastos_mo = $_POST['gastos_mo'];
        $descripcion = $_POST['descripcion'];

        $this->model->updateServiceById($id, $fecha, $km, $km_prox_service, $gastos_repuestos, $gastos_mo, $descripcion);
    }

}


?>