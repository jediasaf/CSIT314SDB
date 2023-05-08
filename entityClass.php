<?php 

class testDB{
    private $conn;
    function __construct($servername = "localhost", $dbusername = "root", $password = "", $dbname = "testdb"){
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
    function updateBookings($bookingID,$phonenum,$username,$bookingDate,$movieID,$noOfTickets,$isClaimed,$seats){
        $result = $this->conn->query("UPDATE `bookingdb` SET `phoneNo` = '$phonenum' , `username` = '$username' , `bookingDate` = '$bookingDate' , `movieID` = '$movieID' , `noOfTickets` = '$noOfTickets' , `seats` = '$seats' , `isClaimed` = '$isClaimed' WHERE `bookingID` = '$bookingID'");
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

    function adminUpdateUserProfile($username, $pwdhashed, $phone, $email, $age, $genrepref, $loyaltypts, $role, $seatpref){
        $result = $this->conn->query("UPDATE `userdb` SET `username` = $username, `hashedPassw` = $pwdhashed, `phoneNo` = $phone, `email` = '$email', `age` = $age, `genrePref` = '$genrepref', `loyaltyPts` = $loyaltypts, `roles` = $role, `seatPref` = $seatpref WHERE `username` = '$username'");
        return $result;
    }

    function addReview($email, $text, $stars){
        $result = $this->conn->query("INSERT INTO `reviewdb` (`email`,`reviewText`, `reviewStars`) VALUES ('$email','$text', '$stars')");
        return $result;
    }

    function retrieveUserDB(){
        $result = $this->conn->query("SELECT * from `userdb`");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

}

?>