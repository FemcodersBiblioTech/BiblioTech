<?php


class bookRegisterModel {

    private $PDO;
    public function __construct(){
        require_once('C:/xammp/htdocs/htdocs/BiblioTech/config/db.php');

        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($ISBN, $titulo, $autor, $año,$descripcion){

        $statement = $this->PDO->prepare('INSERT INTO Book_Register VALUES (:ISBN,:titulo,:autor,:año,:descripcion');
        $statement->bindParam(':ISBN', $ISBN, ":titulo", $titulo, ":autor", $autor, ":año", $año, ":descripcion", $descripcion);
        return ($statement-> execute()) ? $this->PDO->lastInsertISBN() : false;

    }
}

?>