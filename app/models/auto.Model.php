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

    public function insertAuto($patente, $duenio) {
        $query = $this->db->prepare("INSERT INTO `auto`(`patente`, `duenio`) VALUES (?, ?)");
        $query->execute([$patente, $duenio]);

        return $this->db->lastInsertId();
    }

    function deleteAutoById($id) {
        $query = $this->db->prepare('DELETE FROM `auto` WHERE `id_auto` = ?');
        $query->execute([$id]);
    }

    function editAutoById($id) {
        $query = $this->db->prepare("SELECT * FROM `auto` WHERE `id_auto` = ?");
        $query->execute([$id]);

        $auto = $query->fetch(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $auto;
    }

    function updateAutoById($id, $patente, $duenio) {
        $query = $this->db->prepare("UPDATE `auto` SET `patente`= ? ,`duenio`= ? WHERE `id_auto` = ? ");
        $query->execute([$patente,$duenio,$id]);
    }

}

?>