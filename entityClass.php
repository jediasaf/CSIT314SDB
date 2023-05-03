<?php 

class testDB{
    function run($servername = "localhost", $dbusername = "root", $password = "", $dbname = "testDB"){
        $conn = new mysqli($servername, $dbusername, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}


?>