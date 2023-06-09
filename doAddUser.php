<?php
session_start();
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];
$role = $_POST['role'];
$hashedpw = hash("sha256","SDB@2023");

include "dbFunctions.php";
$controller = new controller();
$resultStaff = $controller->run("validateStaff", $username);
$resultManager = $controller->run("validateManager", $username);


if($role == "Staff"){
  if($resultStaff > 0){
    $message = '<div class="card">
          <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <strong class="checkmark"><img width="200px" src="Images/forbidden.png"></strong>
          </div>
            <h1>Username already exists</h1> 
            <p>Please enter again!</p>
          </div>';
      $redirect = '<meta http-equiv="refresh" content="5; url='.'AddUser.php'.'" />';
  }else{
    $result = $controller->run("addStaff", $phone,$username,$hashedpw,$email,$age,$_SESSION['username'], date("Y-m-d"));
      $redirect = '<meta http-equiv="refresh" content="5; url='.'StaffPage.php'.'" />';
      $message = '<div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
              <i class="checkmark">✓</i>
            </div><h1>Success</h1>
            <h2>Dear '.$_SESSION['username'].'</h2>
        <p>Staff successfully added,<br/>Redirecting to Staff Profiles Page in 5 seconds.  </p>';
  }
}else{
  if($resultManager > 0){
    $message = '<div class="card">
          <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <strong class="checkmark"><img width="200px" src="Images/forbidden.png"></strong>
          </div>
            <h1>Username already exists</h1> 
            <p>Please enter again!</p>
          </div>';
      $redirect = '<meta http-equiv="refresh" content="5; url='.'AddUser.php'.'" />';
  }else{
    $result = $controller->run("addManager", $phone,$username,$hashedpw,$email,$age,$_SESSION['username'], date("Y-m-d"));
      $redirect = '<meta http-equiv="refresh" content="5; url='.'ManagerPage.php'.'" />';
      $message = '<div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
              <i class="checkmark">✓</i>
            </div><h1>Success</h1>
            <h2>Dear '.$_SESSION['username'].'</h2>
        <p>Manager successfully added,<br/>Redirecting to Manager Profiles Page in 5 seconds.  </p>';
  }
}

/*if($result > 0){
    $message = '<div class="card">
          <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <strong class="checkmark"><img width="200px" src="Images/forbidden.png"></strong>
          </div>
            <h1>Username already exists</h1> 
            <p>Please enter again!</p>
          </div>';
      $redirect = '<meta http-equiv="refresh" content="5; url='.'AddUser.php'.'" />';
}else{
    if($role == "Staff"){
      $result = $controller->run("addStaff", $phone,$username,$hashedpw,$email,$age,$admin,$date);
      $redirect = '<meta http-equiv="refresh" content="5; url='.'StaffPage.php'.'" />';
      $message = '<div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
              <i class="checkmark">✓</i>
            </div><h1>Success</h1>
            <h2>Dear '.$_SESSION['username'].'</h2>
        <p>Staff successfully added,<br/>Redirecting to Staff Profiles Page in 5 seconds.  </p>';
    } else{
      $result = $controller->run("addManager", $phone,$username,$hashedpw,$email,$age,$admin,$date);
      $redirect = '<meta http-equiv="refresh" content="5; url='.'ManagerPage.php'.'" />';
      $message = '<div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
              <i class="checkmark">✓</i>
            </div><h1>Success</h1>
            <h2>Dear '.$_SESSION['username'].'</h2>
        <p>Manager successfully added,<br/>Redirecting to Manager Profiles Page in 5 seconds.  </p>';
    }
    
}*/

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

?>