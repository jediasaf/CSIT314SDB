<?php


$username = "acalafato1x";
$role = "Customer ";
$password = "E1BQ8CU1e9";
$hashedPassword = hash("sha256",$password);


/*
echo $hashedPassword;
echo "<br>";
echo "'".$hashedPassword."'";
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo "'".$role."'";
echo "<br>";
*/



#include ("dbFunctions.php");

#echo $username . "  " . $hashedPassword;
#$controller = new controller();
#$conn = $controller -> run();

/*
$result = $conn -> query("SELECT * from userdb where username = '$username' and hashedPassw = '$hashedPassword' and roles = '$role'");
$row = $result -> fetch_assoc();
$rowcount = $result -> num_rows;

echo $row['username'];
echo $row['loyaltyPts'];
*/
/*
$servername = "localhost";
$dbusername = "root"; 
$password = ""; 
$dbname = "testDB";
$conn = new mysqli($servername, $dbusername, $password, $dbname);


$result = $conn -> query("SELECT * from moviedb where movieID = 'AWhiskerAway2020';");
$rowcount = $result -> num_rows;

echo $rowcount;
*/


include ("dbFunctions.php");
$controller = new controller();
$run = $controller -> run();
$result = $run -> validateUserLogin("acalafato1x","b322959e3d2762be6ad6c87a2ad821dca3424634e9759c8fdd6820db55aea3e8","Customer");
echo $result."<br>";


# note that a fullstop . is used as a concatenator for php
# so the following means that im just adding them together as a string

$result2 = $run -> getMovie1();
while($row2 = $result2 -> fetch_assoc()){
    echo $row2['movieID']."----".$row2['movieTitle']."----". $row2['genres']."----". $row2['duration']."----". $row2['country']."----"."<br>";
}
?>