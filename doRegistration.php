<?php 

class displayDoRegistration{

  function display(){




    session_start();
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $hashedPassword = hash("sha256",$password);
    $phoneNum = $_POST['phoneNo'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $genre = $_POST['genre'];
    $seat = $_POST['seat'];
    $success = false;
    $loyaltypts = 0;
    $roles = "customer";
    
    
    /*
    echo'<h1>'.$username.'</h1>';
    echo'<h1>'.$password.'</h1>';
    echo'<h1>'.$hashedPassword.'</h1>';
    echo'<h1>'.$phoneNum.'</h1>';
    echo'<h1>'.$email.'</h1>';
    echo'<h1>'.$age.'</h1>';
    echo'<h1>'.$genre.'</h1>';
    echo'<h1>'.$seat.'</h1>';
    echo'<h1>'.$success.'</h1>';
    echo'<h1>'.$loyaltypts.'</h1>';
    echo'<h1>'.$roles.'</h1>';
    */
    
    # To open the connection to DB
    # query to use $conn -> <insert method here>
    # method names and usage to be found here 
    # https://www.w3schools.com/php/php_ref_mysqli.asp
    
    include ("navbar.php");
    include "dbFunctions.php";
    $controller = new controller();
    $result = $controller->run("validateRegistration",$username);
    
    if($result>0){ 
      $message = '<div class="card">
          <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <strong class="checkmark"><img width="200px" src="Images/forbidden.png"></strong>
          </div>
            <h1>Failed</h1> 
            <p>Please enter again!</p>
          </div>';
      $redirect = '<meta http-equiv="refresh" content="5; url='.'RegistrationPage.php'.'" />';
    }
    else { 
        # insert query
        
        $result = $controller->run("processRegistration",$phoneNum,$username,$hashedPassword,$email,$age,$genre,$loyaltypts,$seat);
        if($result){
          $redirect = '<meta http-equiv="refresh" content="5; url='.'HomePage SDB.php'.'" />';
    
    
          $row = $controller -> run("fetchUserDetails",$username,$hashedPassword,$roles);
      
          $_SESSION['username'] = $row[0]['username'];
          $_SESSION['roles'] = $roles;
          $_SESSION['loyaltypts'] = $row[0]['loyaltyPts'];
          $_SESSION['genrePref'] = $row[0]['genrePref'];
          $_SESSION['seatPref'] = $row[0]['seatPref'];
          $_SESSION['email'] = $row[0]['email'];
          $_SESSION['phoneNo'] = $row[0]['phoneNo'];
      
          $message = '<div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
          </div><h1>Success</h1>
          <h2>Dear '.$row[0]['username'].'</h2>
      <p>Welcome Back To SDB Pop-Up Cinema,<br/> looking forward to see u in the cinema!
      <br/>Redirecting to HomePage in 5 seconds.  </p>
      ';
        }
    
    
        
    }
    
    echo'
    <html>
      <head>
        <?php 
        echo $redirect;
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
          <div class="card">';
                    echo $message;
                    echo $redirect;
          echo'
          </div>
        </body>
    </html>';

  }
}

$display = new displayDoRegistration();
$display->display();

?>