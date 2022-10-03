<?php

class AutoModel{

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_taller_mecanico;charset=utf8mb4', 'root', '');
    }

    public function getTodosAutos() {
        $query = $this->db->prepare("SELECT * FROM `auto`");
        $query->execute();

        $autos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $autos;
    }
}

?>