<?php

class bookRegisterController{

    private $model;

    public function __construct(){

        require_once ("/Applications/MAMP/htdocs/02_TutorialCRUD/model/bookRegisterModel.php");
        $this->model = new bookRegisterModel();
        
    }

    public function guardar($ISBN,$nombre,$titulo,$autor,$descripcion){
$this->model->insertar($ISBN,$nombre,$titulo,$autor,$descripcion);
return ($ISBN != false) ? header("Location:store.php?ISBN".$ISBN) : header("Location:create.php");

    }

}


?>