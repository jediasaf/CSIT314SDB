<?php


class testDB{
    private $conn;
    function __construct($servername = "localhost", $dbusername = "root", $password = "", $dbname = "testDB"){
        $conn = new mysqli($servername, $dbusername, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    function validateUserLogin($username, $hashedPassword,$role){
        $result = $this->conn -> query("SELECT * from userdb where username = '$username' and hashedPassw = '$hashedPassword' and roles = '$role'");
    }

    
}


$result = $conn -> query("SELECT * from userdb where username = '$username' and hashedPassw = '$hashedPassword' and roles = '$role'");
$row = $result -> fetch_assoc();
$rowcount = $result -> num_rows;
class controllerTestDB{
    function run(){
        $testDB = new testDB();
        return $testDB;
   }
}


echo "hi";


?>