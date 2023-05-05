<?php
# controller class
include ("entityClass.php");
class controller{
    private $testDB;
    function __construct(){
        $this->testDB = new testDB();
    }   
    function run($method,$var1=0,$var2=0,$var3=0,$var4=0,$var5=0,$var6=0,$var7=0,$var8=0,$var9=0){
        
        if($method == "validateUserLogin"){
            $result = $this->testDB -> validateUserLogin($var1,$var2,$var3);
        }
        else if($method == "validateRegistration"){
            $result = $this->testDB->validateRegistration($var1);
        }
        else if($method == "processRegistration"){
            $result = $this->testDB->processRegistration($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9);
        }
        else if($method == "getMovie1"){
            $result = $this->testDB->getMovie1();
        }
        else if($method == "getMovie0"){
            $result = $this->testDB->getMovie0();
        }
        else if($method == "fetchUserDetails"){
            $result = $this->testDB->fetchUserDetails($var1,$var2);
        }
        else if($method == "searchMovies"){
            $result = $this->testDB->searchMovies($var1);
        }
        else if($method == "searchMovies10"){
            $result = $this->testDB->searchMovies10($var1,$var2);
        }
        else if($method == "searchMovies10Num"){
            $result = $this->testDB->searchMovies10Num($var1,$var2);
        }
        else if($method == "getMovieFromID"){
            $result = $this->testDB->getMovieFromID($var1);
        }
        else if($method == "retrieveUser"){
            $result = $this->testDB->retrieveUser($var1);
        }
        else if($method == "updateUserInfo"){
            $result = $this->testDB->updateUserInfo($var1, $var2, $var3, $var4);
        }
        else if($method == "addReview"){
            $result = $this->testDB->addReview($var1, $var2, $var3);
        }
        else if($method == "updatePassword"){
            $result = $this->testDB->updatePassword($var1, $var2, $var3);
        }
        else if($method == "validatePasswordChange"){
            $result = $this->testDB->validatePasswordChange($var1);
        }
        else if($method == "getRoomPlan"){
            $result = $this->testDB->getRoomPlan($var1);
        }
        else if($method == "getRoomSpecs"){
            $result = $this->testDB->getRoomSpecs($var1);
        }

        else if($method == "getBookings"){
            $result = $this->testDB->getBookings();
        }

    



        #insert all the new method name above this line
        /* below is a sample code that u can copy and paste

        else if($method == "<replace with method name you created in entityClass"){
            $result =$this->testDB->   <remove the spaces to the left and insert the method name as well as the variables needed>;
        }

        */
        return $result;
   }


   /*
   function validateUserLogin($username,$hashedPassword,$role){
    return $result = $this->validateUserLogin($username,$hashedPassword,$role);
   }

   */
}


?>




