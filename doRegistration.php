<?php 
session_start();
$username = $_POST['username'];
$password = $_POST['pwd'];
$hashedPassword = hash("sha256",$password);
$phoneNum = $_POST['phoneNo'];
$email = $_POST['email'];
$age = $_POST['age'];
$genre = $_POST['role'];
$seat = $_POST['seatPref'];
$success = false;
$loyaltypts = 0;
$role = "Customer";


# To open the connection to DB
# query to use $conn -> <insert method here>
# method names and usage to be found here 
# https://www.w3schools.com/php/php_ref_mysqli.asp

include "dbFunctions.php";
$controller = new controller();
$conn = $controller -> run();
$result = $conn->query("select count(*) from userdb where username = '$username'");
$row = $result->fetch_assoc();

if($row['count']>0){ 
  $message = "Username taken please try again
  <p><br/>Redirecting to Registration Page in 5 seconds.  </p>";
}
else { 
    # insert query
    
    $result = $conn->query("INSERT INTO myTable (phoneNo, username, hashedPassw, email, age, genrePref, loyaltyPts, roles, seatPref) 
    VALUES (".$phoneNum.",".$username." , ".$hashedPassword.", ".$email.", ".$age.", ".$genre.", ".$loyaltypts.", ".$roles.", ".$seat.");");
    $success = true;


    $result = $conn -> query("SELECT * from userdb where username = '$username' and hashedPassw = '$hashedPassword'");
    $row = $result -> fetch_assoc();


    $_SESSION['username'] = $row['username'];
    $_SESSION['roles'] = $row['roles'];
    $_SESSION['loyaltypts'] = $row['loyaltyPts'];
    $_SESSION['genrePref'] = $row['genrePref'];
    $_SESSION['seatPref'] = $row['seatPref'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phoneNo'] = $row['phoneNo'];

    $message = "Success
    <h2>Dear User</h2>
<p>Welcome Back To SDB Pop-Up Cinema,<br/> looking forward to see u in the cinema!
<br/>Redirecting to HomePage in 5 seconds.  </p>
";
}

# To close the connection to DB
$conn->close();

?>
<html>
  <head>
	  <?php if($success){
        echo '<meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';
    }
    else{
        echo '<meta http-equiv="refresh" content="5; url='.'RegistrationPage.php'.'" />';
    }
         ?>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
		  margin: 0 auto;
        background: black;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
		h2{
			 color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 30px;
          margin-bottom: 10px;
		}
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1><?php 
                echo $message;
        
            ?></h1> 
		  
      </div>
    </body>
</html>