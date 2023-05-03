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



include ("dbFunctions.php");

#echo $username . "  " . $hashedPassword;
$controller = new controller();
$conn = $controller -> run();
$result = $conn -> query("SELECT * from userdb where username = '$username' and hashedPassw = '$hashedPassword'");
# and roles = '$role'
$row = $result -> fetch_assoc();
$rowcount = $result -> num_rows;

echo $row['username'];
echo $row['loyaltyPts'];


?>