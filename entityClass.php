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
        return $result;
    }

}

?>