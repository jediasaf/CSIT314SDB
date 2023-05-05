<?php 

class testDB{
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


    # Bryan 
    function validateUserLogin($username, $hashedPassword,$role){
        $result = $this->conn -> query("SELECT * from userdb where username = '$username' and hashedPassw = '$hashedPassword' and roles = '$role'");
        $rowcount = $result -> num_rows;
        return $rowcount;
    }

    function validateRegistration($username){
        $result = $this->conn->query("select count(*) from userdb where username = '$username'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row[0]['count'];
    }

    function processRegistration($phoneNum,$username,$hashedPassword,$email,$age,$genre,$loyaltypts,$roles,$seat){
        $result = $this->conn->query("INSERT INTO myTable (phoneNo, username, hashedPassw, email, age, genrePref, loyaltyPts, roles, seatPref) 
        VALUES (".$phoneNum.",".$username." , ".$hashedPassword.", ".$email.", ".$age.", ".$genre.", ".$loyaltypts.", ".$roles.", ".$seat.");");
        return $result;
    }

    function getMovie1(){
            $result = $this->conn->query("SELECT * FROM moviedb where availability = 1");
            $row = $result -> fetch_all(MYSQLI_BOTH);
            return $row;
    }

    function getMovie0(){
        $result = $this->conn->query("SELECT * FROM moviedb where availability = 0");
        $row = $result -> fetch_all(MYSQLI_BOTH);
            return $row;
    }

    function fetchUserDetails($username,$hashedPassword){
        $result = $this->conn->query("SELECT * from userdb where username = '$username' and hashedPassw = '$hashedPassword'");
        $row = $result->fetch_all(MYSQLI_BOTH); # converts $result into a key-value pair arrray stored in $row
        return $row;
    }

    function searchMovies($search){
        $result = $this->conn->query("SELECT * from moviedb where movieTitle LIKE '%$search%'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function searchMovies10($search,$availability){
        $result = $this->conn->query("SELECT * from moviedb where movieTitle LIKE '%$search%' and availability = '$availability'");
        $row = $result -> fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function searchMovies10Num($search,$availability){
        $result = $this->conn->query("SELECT * from moviedb where movieTitle LIKE '%$search%' and availability = '$availability'");
        $rowcount = $result -> num_rows;
        return $rowcount;
    }


    # Darrel
    function getMovieFromID($movieID){
        $result = $this->conn->query("SELECT * from moviedb where movieID = '$movieID'");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }


    # Mayuri
    function retrieveUser($username){
        $result = $this->conn->query("SELECT * from userdb where username = '$username'");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

    function updateUserInfo($email, $hashedPassword, $age, $preferences, $username){
        $result = $this->conn->query("UPDATE userdb SET email = '$email', hashedPassw = '$hashedPassword', age = '$age', genrePref = '$preferences' WHERE username = '$username'");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }
    function addReview($text, $stars){
        $result = $this->conn->query("INSERT INTO reviewdb (reviewText, reviewStars) VALUES ('$text', '$stars')");
        $row = $result->fetch_all(MYSQLI_BOTH);
        return $row;
    }

}

?>