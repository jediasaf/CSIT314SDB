<?php

#retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];
$repeatpassword = $_POST['password'];
$age = $_POST['age'];
$preferences = $_POST['preferences'];
$hashedPassword = hash("sha256",$password);



# for connection and query to the database
include ("dbFunctions.php");
$controller = new controller();
$conn = $controller -> run();

# retrieve the record with the username that matches the username of the current session
$result = $conn -> query("SELECT * from userdb where username = '$_SESSION['username']'");
$row = $result -> fetch_assoc();
$rowcount = $result -> num_rows;
echo "query ran";
echo $rowcount;
if($rowcount == 1){
    $result = $conn -> query("UPDATE userdb SET email = '$email', hashedPassw = '$hashedPassword', age = '$age', genrePref = '$preferences' WHERE username = '$_SESSION['username']'");
}
?>