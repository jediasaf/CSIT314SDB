<?php

class doLogin{

  function display(){


    session_start();
    $username = $_POST['username'];
    $role = $_POST['role'];
    $password = $_POST['password'];
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
    
    
    
    # username and password hash for testing purposes only
    
    #$password = "vGJtfNnY9F";
    #$hashedPassword = hash("sha256",$password);
    #echo $password;
    
    #$username = "acalafato1x";
    #$password = "E1BQ8CU1e9";
    #$hashedPassword = hash("sha256","E1BQ8CU1e9");
    
    
    
    include ("dbFunctions.php");
    
    #echo $username . "  " . $hashedPassword;
    $controller = new controller();
    $rowcount = $controller -> run("validateUserLogin",$username,$hashedPassword,$role);
    
    #echo "query ran";
    /*
    while($row){
        echo $row['username'];
        echo $row['email'];
        echo $row['phoneNo'];
        echo $row['age'];
        echo $row['roles'];
    
    }*/
    #echo $rowcount;
    if($rowcount == 1){
        $row = $controller -> run("fetchUserDetails",$username,$hashedPassword);
        $_SESSION['username'] = $row[0]['username'];
        $_SESSION['roles'] = $row[0]['roles'];
        $_SESSION['loyaltypts'] = $row[0]['loyaltyPts'];
        $_SESSION['genrePref'] = $row[0]['genrePref'];
        $_SESSION['seatPref'] = $row[0]['seatPref'];
        $_SESSION['email'] = $row[0]['email'];
        $_SESSION['phoneNo'] = $row[0]['phoneNo'];
    }
    
    if(isset($_SESSION['username'])){
        #echo $_SESSION['username'];
        #echo $_SESSION['roles'];
        $message = '<div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
          <i class="checkmark">✓</i>
        </div>
        
          <h1>Success</h1>
          
          <h2>Dear '.$_SESSION["username"].',</h2>
          <p>Welcome Back To SDB Pop-Up Cinema,<br/> looking forward to see u in the cinema!
        <br/>Redirecting to HomePage in 5 seconds.  </p>
        </div>';

        if($_SESSION['roles'] == "Manager"){
          echo '<meta http-equiv="refresh" content="5; url='.'Manage Bookings.php'.'" />';

        }
        else if($_SESSION['roles'] == "Customer"){
          echo '<meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';

        }
        else if($_SESSION['roles'] == "Staff"){
          echo '<meta http-equiv="refresh" content="5; url='.'CustomerBookings.php'.'" />';

        }
        else if($_SESSION['roles'] == "Admin"){
          echo '<meta http-equiv="refresh" content="5; url='.'UserProfile.php'.'" />';

        }
    }
    else{
      #might need to change to meta instead
      #echo "window.location.replace('LoginPage.php');";
      #edit the following into a red cross
      $message = '<div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <strong class="checkmark"><img width="200px" src="Images/forbidden.png"></strong>
      </div>
        <h1>Failed</h1> 
		  <h2>Access Denied</h2>
        <p>Your username or password is wrong,<br/> Please enter again!</p>
      </div>';
          echo '<meta http-equiv="refresh" content="5; url='.'LoginPage.php'.'" />';
    }
    
     include("navbar.php");
    
    echo'<html>
      <head>
        <?php #<meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" /> ?>
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
        <body>';
         
          echo $message;
           
             
           
        echo'</body>
    </html>';

  }

}


$doLogin = new doLogin();
$doLogin->display();

?>