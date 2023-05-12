<?php 

class testDB{
    private $conn;
    function __construct($servername = "localhost", $dbusername = "root", $password = "", $dbname = "testdb") {
        $this->conn = new mysqli($servername, $dbusername, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function __destruct(){
        $this->conn -> close();
    }


    # Bryan 
    function validateUserLogin($username, $hashedPassword,$role){
        $result = $this->conn -> query("SELECT * from `userdb` where `username` = '$username' and `hashedPassw` = '$hashedPassword' and roles = '$role'");
        $rowcount = $result -> num_rows;
        return $rowcount;
    }

    function validateRegistration($username){
        $result = $this->conn->query("SELECT count(*) from `userdb` where `username` = '$username'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row[0][0];
    }

    function processRegistration($phoneNum,$username,$hashedPassword,$email,$age,$genre,$loyaltypts,$roles,$seat){
        $result = $this->conn->query("INSERT INTO `userdb` (`phoneNo`, `username`, `hashedPassw`, `email`, `age`, `genrePref`, `loyaltyPts`, `roles`, `seatPref`) 
        VALUES (".$phoneNum.",'".$username."' , '".$hashedPassword."', '".$email."', ".$age.", '".$genre."', ".$loyaltypts.", '".$roles."', '".$seat."');");

        #VALUES (".$phoneNum.",$username,$hashedPassword,'$email',$age,$genre,$loyaltypts,$roles,$seat);"
        return $result;
    }

    function getMovie1(){
            $result = $this->conn->query("SELECT * FROM `moviedb` where `availability` = 1");
            $row = $result -> fetch_all(MYSQLI_BOTH);
            return $row;
    }

    function getMovie0(){
        $result = $this->conn->query("SELECT * FROM `moviedb` where `availability` = 0");
        $row = $result -> fetch_all(MYSQLI_BOTH);
            return $row;
    }

    function fetchUserDetails($username,$hashedPassword){
        $result = $this->conn->query("SELECT * from `userdb` where `username` = '$username' and `hashedPassw` = '$hashedPassword'");
        $row = $result->fetch_all(MYSQLI_BOTH); # converts $result into a key-value pair arrray stored in $row
        return $row;
    }

    function searchMovies($search){
        $result = $this->conn->query("SELECT * from `moviedb` where `movieTitle` LIKE '%$search%'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function searchMovies10($search,$availability){
        $result = $this->conn->query("SELECT * from `moviedb` where `movieTitle` LIKE '%$search%' and `availability` = '$availability'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function searchMovies10Num($search,$availability){
        $result = $this->conn->query("SELECT * from `moviedb` where `movieTitle` LIKE '%$search%' and `availability` = '$availability'");
        $rowcount = $result -> num_rows;
        return $rowcount;
    }

    function updatePassword($username, $old, $new){
        $result = $this->conn->query("UPDATE `userdb`set `hashedPassw` = '$new' where `username` = '$username' and `hashedPassw` = '$old'");
        return $result;
    }

    function validatePasswordChange($username){
        $result = $this->conn->query("SELECT `hashedPassw` from `userdb` where `username` = '$username'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getBookings(){
        $result = $this->conn->query("SELECT * FROM `bookingdb`");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getBookingFromID($bookingID){
        $result = $this->conn->query("SELECT * FROM `bookingdb` WHERE `bookingID` = '$bookingID'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function updateBookings($bookingID,$phonenum,$username,$bookingDate,$movieID,$noOfTickets,$isClaimed,$seats,$adultTicket,$seniorTicket,$studentTicket,$childTicket,$foodNo,$totalPrice){
        $result = $this->conn->query("UPDATE `bookingdb` SET `phoneNo` = '$phonenum' , `username` = '$username' , `bookingDate` = '$bookingDate' ,
         `movieID` = '$movieID' , `noOfTickets` = '$noOfTickets' , `seats` = '$seats' , `isClaimed` = '$isClaimed',
         `adultTicket` = '$adultTicket', `seniorTicket` = '$seniorTicket',`studentTicket` = '$studentTicket' , `childTicket` = '$childTicket',
         `foodNo` = '$foodNo', `totalPrice` = '$totalPrice'
          WHERE `bookingID` = '$bookingID'");
        return $result;
    }

    function deleteBooking($bookingid){
        $result = $this->conn->query("DELETE FROM `bookingdb` WHERE `bookingID` = '$bookingid'");
        return $result;
    }

    function confirmDeletion($bookingid){
        $result = $this->conn->query("SELECT * FROM `bookingdb` WHERE `bookingID` = '$bookingid'");
        return $result -> num_rows;
    }

    function claimBooking($bookingid){
        $result = $this->conn->query("UPDATE `bookingdb` SET `isClaimed` = 1 WHERE `bookingID` = '$bookingid'");
        $test = $this->conn->query("SELECT `isClaimed` FROM `bookingdb` WHERE `bookingID` = '$bookingid'");
        $row = $test -> fetch_all(MYSQLI_BOTH);
        $isClaimed = $row[0]['isClaimed'];
        return $isClaimed;
    }

    function getAllMovies(){
        $result = $this->conn->query("SELECT * FROM `moviedb`");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function updateMovie($movieID,$movieTitle,$genres,$directorName,$description,$duration,$actor_1_name,$actor_2_name,$actor_3_name,$country,$classificationRating,$yearReleased,$rantings,$trailerLink,$moviePicName,$availability){
        $result = $this->conn->query("UPDATE `moviedb` SET `movieTitle` = '$movieTitle',`genres` = '$genres', `directorName` = '$directorName',
         `description` = '$description', `duration` = '$duration', `actor_1_name` = '$actor_1_name', `actor_2_name` = '$actor_2_name', `actor_3_name` = '$actor_3_name',
          `country` = '$country', `classificationRating` = '$classificationRating', `yearReleased` = '$yearReleased', `rantings` = '$rantings', `trailerLink` = '$trailerLink',
           `moviePicName` = '$moviePicName', `availability` = '$availability' WHERE `movieID` = '$movieID'");
        return $result;
    }

    function deleteMovie($movieID){
        $result = $this->conn->query("DELETE FROM `moviedb` WHERE `movieID` = '$movieID'");
        return $result;
    }

    function confirmMovieDeletion($movieID){
        $result = $this->conn->query("SELECT * FROM `moviedb` WHERE `movieID` = '$movieID'");
        return $result -> num_rows;
    }

    function escapeString($string){
        $result = $this->conn->real_escape_string($string);
        return $result;
    }

    function addMovie($movieID,$movieTitle,$genres,$directorName,$description,$duration,$actor_1_name,$actor_2_name,$actor_3_name,$country,$classificationRating,
    $yearReleased,$rantings,$trailerLink,$moviePicName,$availability){
        $result = $this->conn->query("INSERT INTO `moviedb`(`movieID`, `movieTitle`, `genres`, `directorName`, `description`, 
        `duration`, `actor_1_name`, `actor_2_name`, `actor_3_name`, `country`, `classificationRating`, `yearReleased`, `rantings`, 
        `trailerLink`, `moviePicName`, `availability`) 
        VALUES ('$movieID','$movieTitle','$genres','$directorName','$description','$duration','$actor_1_name','$actor_2_name','$actor_3_name','$country',
        '$classificationRating','$yearReleased','$rantings','$trailerLink','$moviePicName','$availability')
        ");
        return $result;
    }

    function getRoomPlandb(){
        $result = $this->conn->query("SELECT * FROM `roomplandb`");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getRoomPlanFromID($roomID){
        $result = $this->conn->query("SELECT * FROM `roomplandb` WHERE `roomID` = '$roomID'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }
    function updateRoomPlan($roomID,$movieID,$rows,$columns,$capacity){
        $result = $this->conn->query("UPDATE `roomplandb` SET `movieID` = '$movieID',`rows` = '$rows', `columns` = '$columns', `capacity` = '$capacity' WHERE `roomID` = '$roomID'");
        return $result;
    }

    function resetRoomPlan($roomID){
        $result = $this->conn->query("UPDATE `roomplandb` SET `rows`='',`columns`='',`capacity`='',`movieID`='' WHERE `roomID` = '$roomID'");
        return $result;
    }

    function getMovieTitleFromID($movieID){
        $result = $this->conn->query("SELECT movieTitle FROM `moviedb` WHERE `movieID` = '$movieID'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }
    
    function getBookingFromUsername($username){
        $result = $this->conn->query("SELECT * FROM `bookingdb` WHERE `username` = '$username'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function updatePref($username,$genrePref,$seatPref){
        $result = $this->conn->query("UPDATE `userdb` SET `genrePref` = '$genrePref', `seatPref` = '$seatPref' WHERE `username` = '$username'");
        return $result;
    }

    function getPref($username){
        $result = $this->conn->query("SELECT `genrePref`, `seatPref` FROM `userdb` WHERE `username` = '$username'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getCustomerList(){
        $result = $this->conn->query("SELECT * FROM `userdb` WHERE `roles` = 'Customer'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }
    
    function getAllFood(){
        $result = $this->conn->query("SELECT * FROM `fooddb`");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }
    
    function getFoodFromName($foodName){
        $result = $this->conn->query("SELECT * FROM `fooddb` WHERE `foodName` = '$foodName'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function updateFood($foodName, $quantity, $foodPicName, $status){
        $result = $this->conn->query("UPDATE `fooddb` SET `quantity` = '$quantity', `foodPicName` = '$foodPicName', `status` ='$status' WHERE `foodName` = '$foodName'");
        return $result;
    }

    function deleteFood($foodName){
        $result = $this->conn->query("DELETE FROM `fooddb` WHERE `foodName` = '$foodName'");
        return $result;
    }

    function confirmDeleteFood ($foodName){
        $result = $this->conn->query("SELECT * FROM `fooddb` WHERE `foodName` = '$foodName'");
        $rowcount = $result -> num_rows;
        return $rowcount;
    }

    function addFood ($foodName, $quantity, $foodPicName, $status){
        $result = $this->conn->query("INSERT INTO `fooddb`(`foodName`, `quantity`, `foodPicName`, `status`) VALUES ('$foodName','$quantity','$foodPicName','$status')");
        return $result;
    }

    function countRowFood($foodName){
        $result = $this->conn->query("SELECT * FROM `fooddb` WHERE `foodName` = '$foodName'");
        $rowcount = $result -> num_rows;
        return $rowcount;
    }

    function getDistinctYear(){
        $result = $this->conn->query("SELECT DISTINCT YEAR(bookingDate) AS Years
         FROM bookingdb
         ORDER BY YEARS DESC");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getBookingReportAllTime(){
        $result = $this->conn->query("SELECT count(*) AS bookingCount, 
        SUM(`seniorTicket`) AS sumSenior,
        SUM(`adultTicket`) AS sumAdult,
        SUM(`studentTicket`) AS sumStudent,
        SUM(`childTicket`) AS sumChild,
        SUM(`noOfTickets`) AS totalTickets,
        sum(`totalPrice`) AS totalPrice,
        SUM(`foodNo`) AS totalFood
        FROM `bookingdb`");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function popularMoviesAllTime(){
        $result = $this->conn->query("SELECT `movieID`, COUNT(*) as count,
        SUM(`noOfTickets`) AS ticketCount 
        FROM `bookingdb` 
        GROUP BY `movieID` 
        ORDER BY ticketCount DESC");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function busyDatesAllTime(){
        $result = $this->conn->query("SELECT `bookingDate`, COUNT(*) as count,
        SUM(`noOfTickets`) AS ticketCount
        FROM `bookingdb` 
        GROUP BY `bookingDate` 
        ORDER BY ticketCount DESC");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getBookingReportYear($year){
        $result = $this->conn->query("SELECT count(*) AS bookingCount, 
        SUM(`seniorTicket`) AS sumSenior,
        SUM(`adultTicket`) AS sumAdult,
        SUM(`studentTicket`) AS sumStudent,
        SUM(`childTicket`) AS sumChild,
        SUM(`noOfTickets`) AS totalTickets,
        sum(`totalPrice`) AS totalPrice,
        SUM(`foodNo`) AS totalFood
        FROM `bookingdb`
        WHERE YEAR(`bookingDate`) = '$year'
        ");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function popularMoviesYear($year){
        $result = $this->conn->query("SELECT `movieID`, COUNT(*) as count,
        SUM(`noOfTickets`) AS ticketCount 
        FROM `bookingdb` 
        WHERE YEAR(`bookingDate`) = '$year'
        GROUP BY `movieID` 
        ORDER BY ticketCount DESC");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function busyDatesYear($year){
        $result = $this->conn->query("SELECT `bookingDate`, COUNT(*) as count,
        SUM(`noOfTickets`) AS ticketCount 
        FROM `bookingdb` 
        WHERE YEAR(`bookingDate`) = '$year'
        GROUP BY `bookingDate` 
        ORDER BY ticketCount DESC");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getBookingReportYearMonth($year,$month){
        $result = $this->conn->query("SELECT count(*) AS bookingCount, 
        SUM(`seniorTicket`) AS sumSenior,
        SUM(`adultTicket`) AS sumAdult,
        SUM(`studentTicket`) AS sumStudent,
        SUM(`childTicket`) AS sumChild,
        SUM(`noOfTickets`) AS totalTickets,
        sum(`totalPrice`) AS totalPrice,
        SUM(`foodNo`) AS totalFood
        FROM `bookingdb`
        WHERE YEAR(`bookingDate`) = '$year'
        AND MONTH(`bookingDate`) = '$month'
        ");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function popularMoviesYearMonth($year,$month){
        $result = $this->conn->query("SELECT `movieID`, COUNT(*) as count,
        SUM(`noOfTickets`) AS ticketCount 
        FROM `bookingdb` 
        WHERE YEAR(`bookingDate`) = '$year'
        AND MONTH(`bookingDate`) = '$month'
        GROUP BY `movieID` 
        ORDER BY ticketCount DESC");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function busyDatesYearMonth($year,$month){
        $result = $this->conn->query("SELECT `bookingDate`, COUNT(*) as count,
        SUM(`noOfTickets`) AS ticketCount 
        FROM `bookingdb` 
        WHERE YEAR(`bookingDate`) = '$year'
        AND MONTH(`bookingDate`) = '$month'
        GROUP BY `bookingDate` 
        ORDER BY ticketCount DESC");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getBookingReportDay($Day){
        $result = $this->conn->query("SELECT count(*) AS bookingCount, 
        SUM(`seniorTicket`) AS sumSenior,
        SUM(`adultTicket`) AS sumAdult,
        SUM(`studentTicket`) AS sumStudent,
        SUM(`childTicket`) AS sumChild,
        SUM(`noOfTickets`) AS totalTickets,
        sum(`totalPrice`) AS totalPrice,
        SUM(`foodNo`) AS totalFood
        FROM `bookingdb`
        WHERE `bookingDate` 
        BETWEEN DATE_SUB(CURRENT_DATE(), INTERVAL '$Day' DAY) AND CURDATE()
        ");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function popularMoviesDay($Day){
        $result = $this->conn->query("SELECT `movieID`, COUNT(*) as count,
        SUM(`noOfTickets`) AS ticketCount 
        FROM `bookingdb` 
        WHERE `bookingDate` 
        BETWEEN DATE_SUB(CURRENT_DATE(), INTERVAL '$Day' DAY) AND CURDATE()
        GROUP BY `movieID` 
        ORDER BY ticketCount DESC");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function busyDatesDay($Day){
        $result = $this->conn->query("SELECT `bookingDate`, COUNT(*) as count,
        SUM(`noOfTickets`) AS ticketCount 
        FROM `bookingdb` 
        WHERE `bookingDate` 
        BETWEEN DATE_SUB(CURRENT_DATE(), INTERVAL '$Day' DAY) AND CURDATE()
        GROUP BY `bookingDate` 
        ORDER BY ticketCount DESC");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function resetRoomSpec($roomID){
        $result = $this->conn->query("UPDATE `roomspecification$roomID` SET `status` = 100 WHERE 1");
        return $result;
    }

    function updateRoomSpec0($roomID,$row,$column){
        $result = $this->conn->query("UPDATE `roomspecification$roomID` SET `status` = 0 WHERE `rows` = $row AND `columns` = $column");
        return $result;
    }










    # Darrel
    function getMovieFromID($movieID){
        $result = $this->conn->query("SELECT * from `moviedb` where `movieID` = '$movieID'");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getRoomPlan($movieID){
        $result = $this->conn->query("SELECT * from `roomplandb` where `movieID` = '$movieID'");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getRoomSpecs($roomID){
        $result = $this->conn->query("SELECT * from `roomspecification$roomID`");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function updateSeatStatusUnavailable($roomID,$seatName){
        $result = $this->conn->query("UPDATE `roomspecification$roomID` set `status` = 0 where `seatName` = '$seatName'");
        return $result;
    }

    function resetSeatingStatus($roomID){
        $result = $this->conn->query("UPDATE `roomspecification$roomID` set `status` = 100");
        return $result;
    }

    function getAvailableFoodDetails(){
        $result = $this->conn->query("SELECT * from `fooddb` where `status` = 1");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getBookingDetails($username){
        $result = $this->conn->query("SELECT * from `bookingdb` where `username` = '$username'");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function getSeatStatus($roomID,$rows,$columns){
        $result = $this->conn->query("SELECT `status` FROM `roomspecification$roomID` WHERE `rows` = '$rows' AND `columns` = '$columns'");
        $row = $result->fetch_all(MYSQLI_BOTH);
        $status = $row[0]['status'];
        return $status;
    }

    function getSeatName($roomID,$rows,$columns){
        $result = $this->conn->query("SELECT `seatName` FROM `roomspecification$roomID` WHERE `rows` = '$rows' AND `columns` = '$columns'");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function updateBookingdb($number,$username,$bookingDate,$movieId,$noOfTickets,$seats,$adultTik,$seniorTik,$studentTik,$childTik,$foodNum,$totalPrice,$claim){
        $result = $this->conn->query("INSERT INTO `bookingdb`(`phoneNo`, `username`, `bookingDate`, `movieID`, `noOfTickets`, `seats`, `adultTicket`, `seniorTicket`, `studentTicket`, `childTicket`, `foodNo`, `totalPrice`, `isClaimed`) VALUES ('$number','$username','$bookingDate','$movieId','$noOfTickets','$seats','$adultTik','$seniorTik','$studentTik','$childTik','$foodNum','$totalPrice','$claim')");
        return $result;
    }

    function redeemPoints($number,$redeemedPoints){
        $result = $this->conn->query("UPDATE `userdb` SET `loyaltyPts`= `loyaltyPts` - '$redeemedPoints' WHERE `phoneNo` = '$number'");
        return $result;
    }











    # Mayuri
    function retrieveUser($username){
        $result = $this->conn->query("SELECT * from `userdb` where `username` = '$username'");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function updateUserInfo($email,  $age, $preferences, $username){
        $result = $this->conn->query("UPDATE `userdb` SET `email` = '$email', `age` = $age, `genrePref` = '$preferences' WHERE `username` = '$username'");
        return $result;
    }

    function adminUpdateUserProfile($username, $phone, $email, $age, $genrepref, $loyaltypts, $role, $seatpref){
        $result = $this->conn->query("UPDATE `userdb` SET `phoneNo` = '$phone', `email` = '$email', `age` = '$age', `genrePref` = '$genrepref', `loyaltyPts` = '$loyaltypts', `roles` = '$role', `seatPref` = '$seatpref' WHERE `username` = '$username'");
        return $result;
    }

    function addReview($email, $text, $stars){
        $result = $this->conn->query("INSERT INTO `reviewsdb` (`email`,`reviewText`, `reviewStars`) VALUES ('$email','$text', '$stars')");
        return $result;
    }

    function retrieveUserDB(){
        $result = $this->conn->query("SELECT * from `userdb` WHERE `roles` = 'Staff' OR `roles` = 'Manager'");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function addUser($phoneNum,$username,$hashedpwd,$email,$age,$genre,$loyaltypts,$roles,$seat){
        $result = $this->conn->query("INSERT INTO `userdb` (`phoneNo`, `username`,`hashedPassw`,`email`, `age`, `genrePref`, `loyaltyPts`, `roles`, `seatPref`) 
        VALUES (".$phoneNum.",'".$username."' , '".$hashedpwd."' , '".$email."', ".$age.", '".$genre."', ".$loyaltypts.", '".$roles."', '".$seat."');");
        return $result;
    }

    function deleteUser($username){
        $result = $this->conn->query("DELETE FROM `userdb` WHERE `username` = '$username'");
        return $result;
    }

    function getAllUsers(){
        $result = $this->conn->query("SELECT * FROM `userdb`");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function searchUser($username){
        $result = $this->conn->query("SELECT * from `userdb` where `username` LIKE '%$username%'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function searchUserNum($username){
        $result = $this->conn->query("SELECT * from `userdb` where `username` LIKE '%$username%'");
        $rowcount = $result -> num_rows;
        return $rowcount;
    }
    

}

?>