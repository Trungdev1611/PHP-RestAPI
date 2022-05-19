<?php
class db {
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $database='restfullapi';
    private $conn;
 function Connect_db() {

    //create connection
    $this->conn = new mysqli($this->servername, $this->username, $this->password,$this->database);
    
    //check connection
    if($this->conn ->connect_error) {
        die('Connect failed'.$conn->connect_error);
    }
    
    // echo "Connection successfully";
    // echo "<br />";
    return $this->conn;
}
}


?>