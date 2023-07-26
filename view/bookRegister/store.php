<?php

require_once("C:/xammp/htdocsP/htdocs/Bibliotech/controller/bookRegisterController.php");

$obj = new bookRegisterController();

$obj->guardar( $_POST['ISBN'], $_POST['titulo'], $_POST['autor'], $_POST['año'], $_POST['descripcion']);

print_r($obj) ;


echo $_POST['ISBN'];
echo $_POST[ 'autor'];
echo $_POST['titulo'];
echo $_POST[ 'año'];
echo $_POST[ 'descripcion'];
?>