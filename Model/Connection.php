<?php
class Connection {
    private $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', 'root', 'library');
    }
    
    public function getAllBooks(){
        $query = $this->con->query('SELECT * FROM books');
        $result = [];

        while ($row = $query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
    }

    

    public function getBookByISBN($isbn){
        $isbn = $this->con->real_escape_string($isbn); 
        $query = "SELECT * FROM books WHERE isbn = '$isbn'";
        $result = $this->con->query($query);

        if ($result->num_rows === 1) {
            return $result->fetch_assoc();
        } else {
            return null; 
        }
    }
}
?>