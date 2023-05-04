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
$run = $controller -> run();

# retrieve the record with the username that matches the username of the current session
$result = $run -> retrieveUser($_SESSION['username']);
$row = $result -> fetch_assoc();
$rowcount = $result -> num_rows;
echo "query ran";
echo $rowcount;

# if username exists in the database, update said records
if($rowcount == 1){
    $result = $run -> updateUserInfo($email, $hashedPassword, $age, $preferences, $_SESSION['username']);
}

$run->close();
?>