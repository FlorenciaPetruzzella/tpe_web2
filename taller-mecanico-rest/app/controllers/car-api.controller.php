<?php

require_once './app/models/car.model.php';
require_once './app/views/api.view.php';


class CarApiController {
    private $model;
    private $view;
    private $data;

    public function __construct() {
        $this->model = new CarModel();
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input");
    }
    
    private function getData() {
        return json_decode($this->data);
    }

    public function getCars($params = null) {
        $column = array('id_auto', 'patente', 'duenio', 'modelo');

        //Ordenamiento
        if (isset($_GET['sort']) && isset($_GET['order']) && (isset($_GET['order']) =='asc' || 
            isset($_GET['order']) =='desc') && (in_array(isset($_GET['sort']), $column))) {

            $sort = mb_strtolower($_GET['sort']);
            $order = mb_strtolower($_GET['order']);
        }
        else {
            $sort = null;
            $order = null;
        }

        //Paginación
        if ((isset($_GET["page"]))>0  && isset($_GET["limit"])>0) {

            $page = mb_strtolower($_GET["page"]);
            $limit = mb_strtolower($_GET["limit"]);
        }
        else {
            $page = null;
            $limit = null;
        }

        //Filtro por dueño 
        if (isset($_GET["filterOwner"])) {

            $filterOwner = mb_strtolower($_GET["filterOwner"]);
        }
        else {
            $filterOwner = null;
        }

        $cars = $this->model->getAll($sort, $order, $limit, $page, $filterOwner);
    
        if($cars)
            return $this->view->response($cars, 200);
        else
            $this->view->response("No existen resultados", 404);
    }

    public function getCar($params = null) {
        $id = $params[':ID'];
        $car = $this->model->get($id);

        if ($car)
            $this->view->response($car);
        else 
            $this->view->response("El auto con el id=$id no existe", 404);
    }

    public function deleteCar($params = null) {
        $id = $params[':ID'];
        $car = $this->model->get($id);

        if ($car) {
            $this->model->delete($id);
            $this->view->response("Tarea $id eliminada con éxito", 200);
            $this->view->response($car);
        } 
        else {
            $this->view->response("La tarea con el id=$id no existe", 404);
        }
    }

    public function insertCar($params = null) {
        $car = $this->getData();

        if (empty($auto->patente) || empty($auto->duenio) || empty($auto->modelo)) {
            $this->view->response("Complete los datos", 400);
        } 
        else {
            $id = $this->model->insert($auto->patente, $auto->duenio, $auto->modelo);
            $car = $this->model->get($id);
            $this->view->response("Tarea $id creada con éxito", 201);
            $this->view->response($car);
        }
    }

    public function updateCar($params = null) {
        $id = $params[':ID'];
        $car = $this->getData($id);

        if (empty($auto->patente) || empty($auto->duenio) || empty($auto->modelo)) {
            $this->view->response("Complete los datos", 400);
        } 
        else {
            $id = $this->model->update($id, $auto->patente, $auto->duenio, $auto->modelo);
            $car = $this->model->get($id);
            $this->view->response("Tarea $id actualizada con éxito", 200);
            $this->view->response($car);
        }
    }

}

?>