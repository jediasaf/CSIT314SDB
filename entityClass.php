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
        $row = $result -> fetch_assoc();
        $rowcount = $result -> num_rows;
        return $rowcount;
    }

    function validateRegistration($username): int{
        $result = $this->conn->query("select count(*) from userdb where username = '$username'");
        $row = $result -> fetch_assoc();
        return $row['count'];
    }

    function processRegistration($phoneNum,$username,$hashedPassword,$email,$age,$genre,$loyaltypts,$roles,$seat){
        $result = $this->conn->query("INSERT INTO myTable (phoneNo, username, hashedPassw, email, age, genrePref, loyaltyPts, roles, seatPref) 
        VALUES (".$phoneNum.",".$username." , ".$hashedPassword.", ".$email.", ".$age.", ".$genre.", ".$loyaltypts.", ".$roles.", ".$seat.");");
        return $result;
    }

    function getMovie1(){
            $result = $this->conn->query("SELECT * FROM moviedb where availability = 1");
            return $result;


    }

    function getMovie0(){
        $result = $this->conn->query("SELECT * FROM moviedb where availability = 0");
        return $result;
    }

    function fetchUserDetails($username,$hashedPassword){
        $result = $this->conn->query("SELECT * from userdb where username = '$username' and hashedPassw = '$hashedPassword'");
        $row = $result->fetch_assoc();
        return $row;
    }

    function searchMovies($search){
        $result = $this->conn->query("SELECT * from moviedb where movieTitle LIKE '%$search%'");
        return $result;
    }

    function searchMovies10($search,$availability){
        $result = $this->conn->query("SELECT * from moviedb where movieTitle LIKE '%$search%' and availability = '$availability'");
        return $result;
    }


    # Darrel
    function getMovieFromID(){

    }


    # Mayuri




}


?>