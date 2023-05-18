<?php
# controller class
include ("entityClass.php");
class controller{
    private $testDB;
    function __construct(){
        $this->testDB = new testDB();
    }   
    function run($method,$var1=0,$var2=0,$var3=0,$var4=0,$var5=0,$var6=0,$var7=0,$var8=0,$var9=0,$var10=0,$var11=0,$var12=0,$var13=0,$var14=0,$var15=0,$var16=0){
        
        #Bryan
        if($method == "validateUserLogin"){
            $result = $this->testDB -> validateUserLogin($var1,$var2,$var3);
        }
        else if($method == "validateRegistration"){
            $result = $this->testDB->validateRegistration($var1);
        }
        else if($method == "processRegistration"){
            $result = $this->testDB->processRegistration($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8);
        }
        else if($method == "getMovie1"){
            $result = $this->testDB->getMovie1();
        }
        else if($method == "getMovie0"){
            $result = $this->testDB->getMovie0();
        }
        else if($method == "fetchUserDetails"){
            $result = $this->testDB->fetchUserDetails($var1,$var2,$var3);
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
        else if($method == "updatePassword"){
            $result = $this->testDB->updatePassword($var1,$var2,$var3,$var4);
        }
        else if($method == "validatePasswordChange"){
            $result = $this->testDB->validatePasswordChange($var1,$var2);
        }
        else if($method == "getBookings"){
            $result = $this->testDB->getBookings();
        }
        else if($method == "getBookingFromID"){
            $result = $this->testDB->getBookingFromID($var1);
        }
        else if($method == "updateBookings"){
            $result = $this->testDB->updateBookings($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9,$var10,$var11,$var12,$var13,$var14);
        }
        else if($method == "deleteBooking"){
            $result = $this->testDB->deleteBooking($var1);
        }
        else if($method == "confirmDeletion"){
            $result = $this->testDB->confirmDeletion($var1);
        }
        else if($method == "claimBooking"){
            $result = $this->testDB->claimBooking($var1);
        }
        else if($method == "getAllMovies"){
            $result = $this->testDB->getAllMovies();
        }
        else if($method == "updateMovie"){
            $result = $this->testDB->updateMovie($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9,$var10,$var11,$var12,$var13,$var14,$var15,$var16);
        }
        else if($method == "deleteMovie"){
            $result = $this->testDB->deleteMovie($var1);
        }
        else if($method == "confirmMovieDeletion"){
            $result = $this->testDB->confirmMovieDeletion($var1);
        }
        else if($method == "escapeString"){
            $result = $this->testDB->escapeString($var1);
        }
        else if($method == "addMovie"){
            $result = $this->testDB->addMovie($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9,$var10,$var11,$var12,$var13,$var14,$var15,$var16);
        }
        else if($method == "getRoomPlandb"){
            $result = $this->testDB->getRoomPlandb();
        }
        else if($method == "getRoomPlanFromID"){
            $result = $this->testDB->getRoomPlanFromID($var1);
        }
        else if($method == "updateRoomPlan"){
            $result = $this->testDB->updateRoomPlan($var1,$var2,$var3,$var4,$var5);
        }
        else if($method == "resetRoomPlan"){
            $result = $this->testDB->resetRoomPlan($var1);
        }
        else if($method == "getMovieTitleFromID"){
            $result = $this->testDB->getMovieTitleFromID($var1);
        }
        else if($method == "getBookingFromUsername"){
            $result = $this->testDB->getBookingFromUsername($var1);
        }
        else if($method == "updatePref"){
            $result = $this->testDB->updatePref($var1,$var2,$var3);
        }
        else if($method == "getPref"){
            $result = $this->testDB->getPref($var1);
        }
        else if($method == "getCustomerList"){
            $result = $this->testDB->getCustomerList();
        }
        else if($method == "getAllFood"){
            $result = $this->testDB->getAllFood();
        }
        else if($method == "getFoodFromName"){
            $result = $this->testDB->getFoodFromName($var1);
        }
        else if($method == "updateFood"){
            $result = $this->testDB->updateFood($var1,$var2,$var3,$var4,$var5,$var6);
        }
        else if($method == "deleteFood"){
            $result = $this->testDB->deleteFood($var1);
        }
        else if($method == "confirmDeleteFood"){
            $result = $this->testDB->confirmDeleteFood($var1);
        }
        else if($method == "addFood"){
            $result = $this->testDB->addFood($var1,$var2,$var3,$var4,$var5,$var6);
        }
        else if($method == "countRowFood"){
            $result = $this->testDB->countRowFood($var1);
        }
        else if($method == "getDistinctYear"){
            $result = $this->testDB->getDistinctYear();
        }
        else if($method == "getBookingReportAllTime"){
            $result = $this->testDB->getBookingReportAllTime();
        }
        else if($method == "popularMoviesAllTime"){
            $result = $this->testDB->popularMoviesAllTime();
        }
        else if($method == "busyDatesAllTime"){
            $result = $this->testDB->busyDatesAllTime();
        }
        else if($method == "getBookingReportYear"){
            $result = $this->testDB->getBookingReportYear($var1);
        }
        else if($method == "popularMoviesYear"){
            $result = $this->testDB->popularMoviesYear($var1);
        }
        else if($method == "busyDatesYear"){
            $result = $this->testDB->busyDatesYear($var1);
        }
        else if($method == "getBookingReportYearMonth"){
            $result = $this->testDB->getBookingReportYearMonth($var1,$var2);
        }
        else if($method == "popularMoviesYearMonth"){
            $result = $this->testDB->popularMoviesYearMonth($var1,$var2);
        }
        else if($method == "busyDatesYearMonth"){
            $result = $this->testDB->busyDatesYearMonth($var1,$var2);
        }
        else if($method == "getBookingReportDay"){
            $result = $this->testDB->getBookingReportDay($var1);
        }
        else if($method == "popularMoviesDay"){
            $result = $this->testDB->popularMoviesDay($var1);
        }
        else if($method == "busyDatesDay"){
            $result = $this->testDB->busyDatesDay($var1);
        }
        else if($method == "resetRoomSpec"){
            $result = $this->testDB->resetRoomSpec($var1);
        }
        else if($method == "updateRoomSpec0"){
            $result = $this->testDB->updateRoomSpec0($var1,$var2,$var3);
        }







        #Darrel
        else if($method == "getMovieFromID"){
            $result = $this->testDB->getMovieFromID($var1);
        }
        else if($method == "getRoomPlan"){
            $result = $this->testDB->getRoomPlan($var1);
        }
        else if($method == "getRoomSpecs"){
            $result = $this->testDB->getRoomSpecs($var1);
        }
        else if($method == "updateSeatStatusUnavailable"){
            $result = $this->testDB->updateSeatStatusUnavailable($var1, $var2);
        }
        else if($method == "resetSeatingStatus"){
            $result = $this->testDB->resetSeatingStatus($var1);
        }
        else if($method == "getAvailableFoodDetails"){
            $result = $this->testDB->getAvailableFoodDetails();
        }
        else if($method == "getBookingDetails"){
            $result = $this->testDB->getBookingDetails($var1);
        }
        else if($method == "getSeatStatus"){
            $result = $this->testDB->getSeatStatus($var1,$var2,$var3);
        }
        else if($method == "getSeatName"){
            $result = $this->testDB->getSeatName($var1,$var2,$var3);
        }
        else if($method == "updateBookingdb"){
            $result = $this->testDB->updateBookingdb($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9,$var10,$var11,$var12,$var13);
        }
        else if($method == "redeemPoints"){
            $result = $this->testDB->redeemPoints($var1,$var2);
        }
        else if($method == "gainPoints"){
            $result = $this->testDB->gainPoints($var1,$var2);
        }
        else if($method == "updateSeatStatus"){
            $result = $this->testDB->updateSeatStatus($var1,$var2);
        }








        #Mayuri
        else if($method == "retrieveStaff"){
            $result = $this->testDB->retrieveStaff($var1);
        }
        else if($method == "retrieveManager"){
            $result = $this->testDB->retrieveManager($var1);
        }
        else if($method == "retrieveCustomer"){
            $result = $this->testDB->retrieveCustomer($var1);
        }
        else if($method == "updateManager"){
            $result = $this->testDB->updateManager($var1, $var2, $var3, $var4, $var5, $var6);
        }
        else if($method == "updateStaff"){
            $result = $this->testDB->updateStaff($var1, $var2, $var3, $var4, $var5, $var6);
        }
        else if($method == "deleteStaff"){
            $result = $this->testDB->deleteStaff($var1);
        }
        else if($method == "updateUserInfo"){
            $result = $this->testDB->updateUserInfo($var1, $var2, $var3, $var4, $var5, $var6);
        }
        else if($method == "addReview"){
            $result = $this->testDB->addReview($var1, $var2, $var3);
        }
        else if($method == "retrieveStaffDB"){
            $result = $this->testDB->retrieveStaffDB();
        }
        else if($method == "retrieveManagerDB"){
            $result = $this->testDB->retrieveManagerDB();
        }
        else if($method == "retrieveCustomerDB"){
            $result = $this->testDB->retrieveCustomerDB();
        }
        else if($method == "addStaff"){
            $result = $this->testDB->addStaff($var1, $var2, $var3, $var4, $var5, $var6, $var7);
        }
        else if($method == "addManager"){
            $result = $this->testDB->addManager($var1, $var2, $var3, $var4, $var5, $var6, $var7);
        }
        else if($method == "deleteManager"){
            $result = $this->testDB->deleteManager($var1);
        }




        #insert all the new method name above this line
        /* below is a sample code that u can copy and paste

        else if($method == "<replace with method name you created in entityClass"){
            $result =$this->testDB->   <remove the spaces to the left and insert the method name as well as the variables needed>;
        }

        */

        else{
            $result = '';
        }


        return $result;
   }


   /*
   function validateUserLogin($username,$hashedPassword,$role){
    return $result = $this->validateUserLogin($username,$hashedPassword,$role);
   }

   */
}


?>




