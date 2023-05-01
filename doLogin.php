<?php

#$username = $_POST['username'];
#$role = $_POST['roles'];

#$password = $_POST['password'];
#$hashedPassword = hash("sha256","vGJtfNnY9F");



# username and password hash for testing purposes only

#$password = "vGJtfNnY9F";
#$hashedPassword = hash("sha256",$password);
#echo $password;

$username = "acalafato1x";
$password = "E1BQ8CU1e9";
$hashedPassword = hash("sha256","E1BQ8CU1e9");



include "dbFunctions.php";

#echo $username . "  " . $hashedPassword;
$result = $conn -> query("SELECT * from userdb where username = '$username' and hashedPassw = '$hashedPassword'");
$row = $result -> fetch_assoc();
$rowcount = $result -> num_rows;
/*
while($row){
    echo $row['username'];
    echo $row['email'];
    echo $row['phoneNo'];
    echo $row['age'];
    echo $row['roles'];

}*/
echo $rowcount;
if($rowcount == 1){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['roles'] = $row['roles'];
    echo "<h1>SUCCESS</h1>";
}

if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
    echo $_SESSION['roles'];
}


?>