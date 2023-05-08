<?php

/*
$username = "acalafato1x";
$role = "Customer ";
$password = "E1BQ8CU1e9";
$hashedPassword = hash("sha256",$password);

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
/*
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
*/


include ("dbFunctions.php");


$controller = new controller();
/*

$controller = new controller();
$result = $controller->run("validateUserLogin","acalafato1x","b322959e3d2762be6ad6c87a2ad821dca3424634e9759c8fdd6820db55aea3e8","Customer");



echo $result;

$result1 = $controller->run("getMovie1");
echo $result1;

#check side of $result1
echo sizeof($result1);

for($i = 0;$i < sizeof($result1);$i++){
    echo $result1[$i]['movieID'];
    echo "<br>";
    echo $result1[$i]['description'];
    echo "<br>";
    echo $result1[$i]['country'];
    echo "<br>";
    echo $result1[$i]['rantings'];
    echo "<br>";

}

for($i = 0;$i < sizeof($result1);$i++){
    echo $result1[$i][0];
    echo "<br>";
    echo $result1[$i][1];
    echo "<br>";
    echo $result1[$i][2];
    echo "<br>";
    echo $result1[$i][3];
    echo "<br>";

}


$row = $controller -> run("fetchUserDetails","acalafato1x","b322959e3d2762be6ad6c87a2ad821dca3424634e9759c8fdd6820db55aea3e8");
echo $row[0]['username']."<br>". $row[0]['roles']."<br>".$row[0]['loyaltyPts']."<br>".$row[0]['genrePref'] ."<br>".$row[0]['seatPref'] ."<br>".$row[0]['email']."<br>".$row[0]['phoneNo'];



$username = "abcdefg";
$password = "abcdefg";
$hashedPassword = hash("sha256",$password);
$phoneNum = "11223344";
$email = "abcdefg@email.com";
$age = 22;
$genre = "Action";
$seat = "Back";
$loyaltypts = 0;
$roles = "Customer";
*/



/* DO NOT TOUCH THIS
$register = $controller -> run("processRegistration",$phoneNum,$username,$hashedPassword,$email,$age,$genre,$loyaltypts,$roles,$seat);
if($register){
    echo "<h1>SUCCESS</h1>";

}
else{
    echo "<h1>Failure</h1>";

}

*/






/*
$result = $controller->run("validateUserLogin","acalafato1x","b322959e3d2762be6ad6c87a2ad821dca3424634e9759c8fdd6820db55aea3e8","Customer");


$movieID = 'AWhiskerAway2020';
$movieDetails = $controller -> run('getMovieFromID',$movieID);

echo $movieDetails[0]['movieID'];



$username = "bread";
$old = "bread";
$new = "bread1";
$newhashed = hash("sha256",$new);

echo "old hash".hash("sha256",$old);
echo "<br>";
echo "new hash".hash("sha256",$new);
$result = $controller->run("updatePassword",$username,$old,$newhashed);
if($result){
    $message = "<h2>SUCCESS</h2>";
}
else{
    $message = "<h2>Unsuccessful, Please Try Again.</h2>";
}
echo "<h1>".$message."</h1>";
$rowOld = $controller->run("fetchUserDetails",$username,hash("sha256",$old));
$rowNew = $controller->run("fetchUserDetails",$username,hash("sha256",$new));
echo "<br>";
echo "OLD";
echo $rowOld[0]['username'];
echo "<br>";
echo $rowOld[0]['hashedPassw'];
echo "<br>";
echo $rowOld[0]['age'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "NEW";
echo $rowNew[0]['username'];
echo "<br>";
echo $rowNew[0]['hashedPassw'];
echo "<br>";
echo $rowNew[0]['age'];
echo "<br>";


$test = $controller -> run("updatePassword","bread","985604c2b60243122c24d4e18363e6434c535923be05f760204a1aef023aae9b","bread");
if($test){
    $testmessage = "<h2>SUCCESS</h2>";
}
else{
    $testmessage = "<h2>Unsuccessful, Please Try Again.</h2>";
}
echo "<h1>".$testmessage."</h1>";

$test1 = $controller -> run("updatePassword","bread","bread","985604c2b60243122c24d4e18363e6434c535923be05f760204a1aef023aae9b");
if($test1){
    $testmessage1 = "<h2>SUCCESS</h2>";
}
else{
    $testmessage1 = "<h2>Unsuccessful, Please Try Again.</h2>";
}
echo "<h1>".$testmessage1."</h1>";


$username = "bread";
$validatePasswordChange = $controller -> run("validatePasswordChange",$username);
echo $validatePasswordChange[0]['hashedPassw'];*/

/*
$controller = new controller ();
$bookingid = 1;
$result = $controller -> run("getBookingFromID",$bookingid);
echo $result[0]['bookingID'];
echo "<br>";
echo $result[0]['phoneNo'];
echo "<br>";
echo $result[0]['username'];
echo "<br>";
echo $result[0]['bookingDate'];
echo "<br>";
#echo date_format($result[0]['bookingDate'],"Y/m/d");
echo "<br>";
echo $result[0]['movieID'];
echo "<br>";
echo $result[0]['noOfTickets'];
echo "<br>";
echo $result[0]['seats'];
echo "<br>";

$movie = $controller -> run("getMovie1");

for($i = 0; $i < sizeof($movie);$i++){
    echo '<option value="'.$movie[$i]['movieID'].'">';
    echo $movie[$i]['movieID'];
    echo '</option>';
  }


  


  #seating plan goes here
  $roomID = 1;
  $row = 5;
  $cols = 5;
  echo '<div>';
  echo '<h1>hello</h1>';
  echo '<h1>'.$row.'</h1>';
  echo '<h1>'.$cols.'</h1>';
  echo '<tbody>';
  for($r = 1 ; $r <= $row; $r++ ){
    echo '<tr>';
    for($c = 1 ; $c <= $cols; $c++){
      $result = $controller -> run("getSeatStatus",$roomID,$r,$c);
      if($result == 1){
        echo '<td><input type="checkbox" name="col'.$c.'row'.$r.'" value="'.$c.' '.$r.'" checked readonly></td>';
      } 
      else if($result == 0){
        echo '<td><input type="checkbox" name="col'.$c.'row'.$r.'" value="'.$c.' '.$r.'" ></td>';
      }
      
    }
    echo '</tr>';
  }
  echo '</tbody>';
  echo '</div>';

  echo '<br><br><br><br><br><br><br><br><br><br><br><br><br>';

  echo '<div>';
  echo '<h1>hello</h1>';
  echo '<h1>'.$row.'</h1>';
  echo '<h1>'.$cols.'</h1>';
  echo '<table>';
  for($r = 1 ; $r <= $row; $r++ ){
    echo '<tr>';
    for($c = 1 ; $c <= $cols; $c++){
      $result = $controller -> run("getSeatStatus",$roomID,$r,$c);
      if($result == 1){
        echo '<td>1</td>';
      } 
      else if($result == 0){
        echo '<td>0</td>';
      }
      
    }
    echo '</tr>';
  }
  echo '</table>';
  echo '</div>';
*/

  ?>