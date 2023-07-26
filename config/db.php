<?php

class db{

    private $host = 'localhost';
    private $dbname = 'library';
    private $user = 'root' ; /*esto no se si dejarlo vacio o dejarlo*/
    private $password = 'root';

    public function conexion(){

        try{
            $PDO = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->password);
            return $PDO;
        }catch(PDOException $e){
            return $e-> getMessage();
        }

    }


}


?>