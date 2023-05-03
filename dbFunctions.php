<?php
# controller class
include ("entityClass.php");
class controllerTestDB{
    function run(){
        $testDB = new testDB();
        return $testDB;
   }
}


?>




