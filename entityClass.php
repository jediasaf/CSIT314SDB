<?php 

class testDB{
    private $conn;
    function __construct($servername = "localhost", $dbusername = "root", $password = "", $dbname = "testDB"){
        $this->conn = new mysqli($servername, $dbusername, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function __destruct(){
        $this->conn -> close();
    }

    function validateUserLogin($username, $hashedPassword,$role){
        $result = $this->conn -> query("SELECT * from userdb where username = '$username' and hashedPassw = '$hashedPassword' and roles = '$role'");
        $row = $result -> fetch_assoc();
        $rowcount = $result -> num_rows;
        return $rowcount;
    }

    function validateRegistration(){
        
    }

    function getMovieFromID(){

    }

    function getMovie1(){
            $result = $this->conn->query("SELECT * FROM moviedb where availability = 0");
            return $result;


    }

    function getMovie0(){

    }





/*

$result = $conn -> query("SELECT * from userdb where username = '$username' and hashedPassw = '$hashedPassword' and roles = '$role'");
$row = $result -> fetch_assoc();
$rowcount = $result -> num_rows;


*/





}


?>