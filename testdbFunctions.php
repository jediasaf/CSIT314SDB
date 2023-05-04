<?php
# controller class
include ("testentityClass.php");
class controller{
    private $testDB;
    function __construct(){
        $this->testDB = new testDB();
    }   
    function run($method,$var1=0,$var2=0,$var3=0,$var4=0,$var5=0,$var6=0,$var7=0,$var8=0    ){
        
        if($method == "validateUserLogin"){
            $result = $this->testDB -> validateUserLogin($var1,$var2,$var3);
            return $result;
        }
        else if($method == "validateRegistration"){
            $result = $this->testDB->validateRegistration($var1);
            return $result;
        }
   }


   /*
   function validateUserLogin($username,$hashedPassword,$role){
    return $result = $this->validateUserLogin($username,$hashedPassword,$role);
   }

   */
}


?>




