<?php
include("navbar.php");
class EditUserProfile{
    function display(){
      include ("dbFunctions.php");
      $message = "";
      $controller = new controller ();
      if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $action = $_GET['action'];
        $username = $_GET['username'];
        #print_r($_GET);
        $result = $controller->run("retrieveUser", $username);

        if ($action == "edit"){
              echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Admin Edit User Profiles</title>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <style type="text/css">
            @import url("CSS/ManagerCSS.css");
            </style>
            </head>
            
            <body>
            
                <center>
                    <div id="content">
                <h2>Edit <span style="color:#F8F8F8;"> User Profile</span></h2>
                </div>
            <div class="form">
                            <div class="row">
                                <div class="col">
              <form action="?" method="POST" class="contact-form">
              <div class="col-sm-5">
                  <div class="input-block">
                    <label for="">Username: </label>
                    <input type="text" name="username" class="form-control" value="'.$result[0]['username'].'" readonly>
                  </div>
                </div>
              
              <div class="col-sm-5">
                  <div class="input-block">
                    <label for="">Phone: </label>
                    <input type="text" name="phone"class="form-control" value="'.$result[0]['phoneNo'].'">
                  </div>
                </div>
              
              <div class="col-sm-5">
                  <div class="input-block">
                    <label for="">Email: </label>
                    <input type="text" name="email" class="form-control" value="'.$result[0]['email'].'">
                  </div>
                </div>
              
                
              <div class="col-sm-5">
                  <div class="input-block">
                    <label for="">Age: </label>
                    <input type="text" name="age" class="form-control" value="'.$result[0]['age'].'">
                  </div>
                </div>
              
              <div class="col-sm-5">
              <div class="input-block">
                <label for="genre">Genre Preference: </label>
                <select id="genre" name="genre" class="form-control" value="'.$result[0]['genrePref'].'">
                  <option value="Thriller">Thriller</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Horror">Horror</option>
                  <option value="Fantasy">Fantasy</option>
                <option value="Drama">Drama</option>
                <option value="Animation">Animation</option>
                <option value="Comedy">Comedy</option>
                <option value="Crime">Crime</option>
                <option value="Mystery">Mystery</option>
                  <option value="Romance">Romance</option>
                <option value="Action">Action</option>
                <option value="Sci-Fi">Sci-Fi</option>
                <option value="Musical">Musical</option>
                </select>
              </div>
            </div>

            <div class="col-sm-5">
                  <div class="input-block">
                    <label for="">Loyalty Points: </label>
                    <input type="text" name="loyaltypts" class="form-control" value="'.$result[0]['loyaltyPts'].'">
                  </div>
                </div>
            
              
              <div class="col-sm-5">
              <div class="input-block">
                <label for="">Role: </label>
                <select class="form-control" name="role" value="'.$result[0]['roles'].'">
                  <option value="Manager">Manager</option>
                  <option value="Staff">Staff</option>
                </select>
              </div>
            </div>
            
              
            <div class="col-sm-5">
              <div class="input-block">
                <label for="">Seat Preference: </label>
                <select class="form-control" name="seatpref" value="'.$result[0]['seatPref'].'">
                  <option value="window">Front</option>
                  <option value="aisle">Back</option>
                  <option value="middle">Center</option>
                <option value="middle">None</option>
                </select>
              </div>
            </div>
            
              
                  
            <div class="col-md-12">
            <div class="form-group">
            <input type="submit" name="submit" value="Edit" class="btn btn-primary">
            <div class="submitting"></div>
            </div>
            </div>
            </div>
            </form>       
            </body>
            </html>';
        }
        elseif($action == "delete"){
          echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Admin Edit User Profiles</title>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <style type="text/css">
            @import url("CSS/ManagerCSS.css");
            </style>
            </head>
            
            <body>
            
                <center>
                    <div id="content">
                <h2>Edit <span style="color:#F8F8F8;"> User Profile</span></h2>
                </div>
            <div class="form">
                            <div class="row">
                                <div class="col">
              <form action="?" method="POST" class="contact-form">
              <div class="col-sm-5">
                  <div class="input-block">
                    <label for="">Username: </label>
                    <input type="text" name="username" class="form-control" value="'.$result[0]['username'].'" readonly>
                  </div>
                </div>
              
              <div class="col-sm-5">
                  <div class="input-block">
                    <label for="">Phone: </label>
                    <input type="text" name="phone" class="form-control" value="'.$result[0]['phoneNo'].'" readonly>
                  </div>
                </div>
              
              <div class="col-sm-5">
                  <div class="input-block">
                    <label for="">Email: </label>
                    <input type="text" name="email" class="form-control" value="'.$result[0]['email'].'" readonly>
                  </div>
                </div>
              
                
              <div class="col-sm-5">
                  <div class="input-block">
                    <label for="">Age: </label>
                    <input type="text" name="age" class="form-control" value="'.$result[0]['age'].'" readonly>
                  </div>
                </div>
              
              <div class="col-sm-5">
              <div class="input-block">
                <label for="genre">Genre Preference: </label>
                <select id="genre" name="genre" class="form-control" value="'.$result[0]['genrePref'].'" disabled>
                  <option value="Thriller">Thriller</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Horror">Horror</option>
                  <option value="Fantasy">Fantasy</option>
                <option value="Drama">Drama</option>
                <option value="Animation">Animation</option>
                <option value="Comedy">Comedy</option>
                <option value="Crime">Crime</option>
                <option value="Mystery">Mystery</option>
                  <option value="Romance">Romance</option>
                <option value="Action">Action</option>
                <option value="Sci-Fi">Sci-Fi</option>
                <option value="Musical">Musical</option>
                </select>
              </div>
            </div>
            
              
              <div class="col-sm-5">
              <div class="input-block">
                <label for="">Role: </label>
                <select class="form-control" name="role" value="'.$result[0]['roles'].'" disabled>
                  <option value="Manager">Manager</option>
                  <option value="Staff">Staff</option>
                </select>
              </div>
            </div>
            
              
            <div class="col-sm-5">
              <div class="input-block">
                <label for="">Seat Preference: </label>
                <select class="form-control" name="seatpref" value="'.$result[0]['seatPref'].'" disabled>
                  <option value="window">Front</option>
                  <option value="aisle">Back</option>
                  <option value="middle">Center</option>
                <option value="middle">None</option>
                </select>
              </div>
            </div>
            
              
                  
            <div class="col-md-12">
            <div class="form-group">
            <input type="submit" name="submit" value="Delete" class="btn btn-primary">
            <div class="submitting"></div>
            </div>
            </div>
              </div>
            </form>       
            </body>
            </html>';
          
        }
      } elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
        if($_POST['submit'] == "Edit"){
          $username = $_POST['username'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $age = $_POST['age'];
          $genrepref = $_POST['genre'];
          $role = $_POST['role'];
          $seatpref = $_POST['seatpref'];
          $loyaltypts = $_POST['loyaltypts'];
          $result = $controller->run("adminUpdateUserProfile", $username, $phone, $email, $age, $genrepref, $loyaltypts, $role, $seatpref);
          
          if($result){
            $result = $controller->run("retrieveUser",$username);
            if($result[0]['username'] == $username && $result[0]['phoneNo'] == $phone && $result[0]['email'] == $email 
            && $result[0]['age'] == $age && $result[0]['genrePref'] == $genrepref && $result[0]['roles'] == $role
            && $result[0]['seatPref'] == $seatpref && $result[0]['loyaltyPts'] == $loyaltypts){
              $message = '<meta http-equiv="refresh" content="5; url='.'UserProfile.php'.'" />';
              $message = '<div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                      <i class="checkmark">✓</i>
                    </div><h1>Success</h1>
                <p style="color: black">User details have been updated,<br/>Redirecting to User Profiles Page in 5 seconds.  </p>';
            }
          }else{
            $message = 'Update Unsuccessful';
          }
          $message = $message.'<meta http-equiv="refresh" content="5; url='.'UserProfile.php'.'" />';
        }
        else if($_POST['submit'] == "Delete"){
          $username = $_POST['username'];
          
          $result = $controller->run("deleteUser",$username);
          if($result){
            $message = '<meta http-equiv="refresh" content="5; url='.'UserProfile.php'.'" />';
            $message = '<div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                    <i class="checkmark">✓</i>
                  </div><h1>Success</h1>
              <p style="color: black">User successfully deleted,<br/>Redirecting to User Profiles Page in 5 seconds.  </p>';
          }
          else{
            $message = 'User not deleted';
          }
          $message = $message.'<meta http-equiv="refresh" content="5; url='.'UserProfile.php'.'" />';
      }
    
    }

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User Profiles</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    
    body {
    color: #404E67;
    background: #000000;
    font-family: "Open Sans", sans-serif;
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
    .dropdown-menu {
       position: relative;
       display: inline-block;
    }
    
    nav{
        background-color: #F8F8F8;
    }
    nav ul {
        padding: 0;
        margin: 0;
        list-style: none;
        position: relative;
    }
    nav ul li{
        display: inline-block;
        background-color: #F8F8F8;
    }
    nav a{
        display: block;
        padding: 0 10px;
        color: #000000;
        line-height: 60px;
        font-size: 15px;
        text-decoration: none;
    }
    /* Hide Dropdown by Default*/
    nav ul ul {
        display: none;
        position: absolute;
        top: 60px;
    }
    /* hover */
    nav a:hover{
        background-color: #F8F8F8;
    }
    /* Display Dropdown on Hover */
    nav ul li:hover > ul {
        display: inherit;
    }
    /* Fisrt Tier Dropdown */
    nav ul ul li{
        width: 150px;
        float: none;
        display: list-item;
        position: relative;
    
    }
    
    /* Change this in order to change the Dropdown symbol */
    li > a::after { content: "+";}
    li > a:only-child::after {
        content: "";
    }
    
    #content h2 {
      margin: 0 0 0 0;
      font: 130% verdana, "Trebuchet MS", arial, tahoma, sans-serif;
      padding: 5px;
      text-transform: uppercase;
      letter-spacing: 5px;
      color: #F8F8F8;
      background: inherit;
    }
    
    .form{
                background-color: #F8F8F8;
                margin: 0 5%;
                padding: 30px 60px;
                border-radius: 20px;
            }
            .row {
                display: grid;
                grid-template-columns: auto auto auto auto;
                
            }
            .col {
                padding: 20px 40px;
                text-align: leftwards;
                margin: auto;
            }
            .form-control{
                width: 100%;
                border: none;
                padding: 10px 25px;
            }
            label{
                display: block;
                text-align: leftwards;
            }
           
            button{
            position:absolute;
            bottom:0;}
            @media only screen and (max-width: 900px) {
                .row {
                    
                    grid-template-columns: auto auto;
                    
                }
            }
            @media only screen and (max-width: 600px) {
                .row {
                    grid-template-columns: auto;
                    
                }
            }
            
    </style>
    </head>
    
    <body>';
    
  
    echo'
    
        <center>
            <div id="content">
        <h2>Edit <span style="color:#F8F8F8;"> User Profiles</span></h2>
        </div>
    
        
     <div class="form">
                    <div class="row">
                        <div class="col">';
    
                        echo $message;
          echo'
    </body>
    </html>';
}
}


$display = new EditUserProfile();
$display->display();
?>