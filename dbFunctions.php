<?php

# entity
class controller {

    private $servername = "localhost";
    private $dbusername = "root";
    private $password = "";
    private $dbname = "testDB";
    function run($servername = "localhost", $dbusername = "root", $password = "", $dbname = "testDB"){
        $conn = new mysqli($servername, $dbusername, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function servername(){
        return $this->servername;

    }

    function dbusername(){
        return $this->dbusername();

    }
    
    function password(){
        return $this->password;

    }
    
    function dbname(){
        return $this->dbname;

    }




}
?>




