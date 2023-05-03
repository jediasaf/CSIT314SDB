<?php
# controller class
include ("entityClass.php");
class controller{
    function run(){
        $testDB = new testDB();
        return $testDB;
   }
}


?>




