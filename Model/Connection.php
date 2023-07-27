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
        $query = "SELECT * FROM books WHERE isbn = '$isbn'";
        $result = $this->con->query($query);

        if ($result->num_rows === 1) {
            return $result->fetch_assoc();
        } else {
            return null; 
        }
    }
    public function deleteBookByISBN($isbn)
{
    $query = "DELETE FROM books WHERE isbn = '$isbn'";
    $result = $this->con->query($query);
    return $result ? true : false;
}
public function updateBookByISBN($isbn, $title, $author, $year, $description)
{
    $query = "UPDATE books SET isbn = '$isbn', title = '$title', author ='$author', year = '$year', description = '$description' WHERE isbn = '$isbn'";
    $result = $this->con->query($query);
    return $result ? true : false;
}

}
?>