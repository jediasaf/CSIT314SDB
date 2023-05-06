<?php
include "dbFunctions.php";
$controller = new controller();

$username = $_POST['username'];
$pwd = $_POST['pwdhashed'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];
$genrepref = $_POST['genrepref'];
$loyaltypts = $_POST['loyaltypts'];
$role = $_POST['role'];
$seatpref = $_POST['seatpref'];
$hashedPassword = hash("sha256",$pwd);

$result = $controller->run("retrieveUser", $username);

if($result){
    $result = $controller->run("adminUpdateUserProfile", $username, $hashedPassword, $phone, $email, $age, $genrepref, $loyaltypts, $role, $seatpref)
}

?>