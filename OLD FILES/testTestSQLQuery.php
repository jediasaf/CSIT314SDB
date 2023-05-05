<?php
class testDB{

    /*
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
    */
    function run($query){
        $conn = new mysqli("localhost", "root", "", "testDB");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = $conn->query($query);

        return $result;
    }

}

# controller class
class controller{
    private $testDB;
    function __construct(){
        $this->testDB = new testDB();
    }   
    function run($query){
        return $result = $this->testDB ->run($query);
        
   }

}




$controller = new controller();
$result = $controller->run("SELECT * FROM `userdb` 
where username = 'acalafato1x' 
and hashedPassw = 'b322959e3d2762be6ad6c87a2ad821dca3424634e9759c8fdd6820db55aea3e8' 
and roles = 'Customer'");

#echo $result;
$row = $result -> num_rows ;
echo $row;

?>




